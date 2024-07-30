<?php

namespace App\Http\Controllers;

use App\Models\services;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $services = services::latest()->paginate(10);
        return view('admin.services.index', compact('services'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'description' => 'required',
            'text' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
        ]);

        $input = $request->all();

        if ($servicesImage = $request->file('image')) {
            $destinationPath = 'upload/services/';
            $servicesImageName = date('YmdHis') . '_' . uniqid() . "." . $servicesImage->getClientOriginalExtension();
            $servicesImage->move($destinationPath, $servicesImageName);
            $input['image'] = $servicesImageName;
        }

        services::create($input);

        return redirect()->route('services.index')
            ->with('success', 'Service created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param services $service
     * @return Factory|View
     */
    public function show(services $service)
    {
        return view('admin.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param services $service
     * @return Factory|View
     */
    public function edit(services $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'text' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
        ]);

        $service = services::findOrFail($id);
        $input = $request->all();

        if ($servicesImage = $request->file('image')) {
            $destinationPath = 'upload/services/';
            $servicesImageName = date('YmdHis') . '_' . uniqid() . "." . $servicesImage->getClientOriginalExtension();
            $servicesImage->move($destinationPath, $servicesImageName);

            if ($service->image) {
                $oldImagePath = public_path($destinationPath . $service->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $input['image'] = $servicesImageName;
        }

        $service->update($input);

        return redirect()->route('services.index')
            ->with('success', 'Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param services $service
     * @return RedirectResponse
     */
    public function destroy(services $service)
    {
        if ($service->image) {
            $destinationPath = 'upload/services/';
            $imagePath = public_path($destinationPath . $service->image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $service->delete();

        return redirect()->route('services.index')
            ->with('success', 'Service deleted successfully');
    }
}
