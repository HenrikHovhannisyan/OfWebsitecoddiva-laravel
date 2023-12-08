<?php

namespace App\Http\Controllers;

use App\Models\models;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $models = models::latest()->paginate(5);
        return view('admin.models.index', compact('models'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('admin.models.create');
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
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {

            $destinationPath = 'upload/models/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";

        }

        models::create($input);

        return redirect()->route('models.index')
            ->with('success', 'Model created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param models $model
     * @return Factory|View
     */
    public function show(models $model)
    {
        return view('admin.models.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param models $model
     * @return Factory|View
     */
    public function edit(models $model)
    {
        return view('admin.models.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param models $model
     * @return RedirectResponse
     */
    public function update(Request $request, models $model)
    {
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'upload/models/';

            if ($model->image) {
                $oldImagePath = public_path($destinationPath . $model->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        } else {
            unset($input['image']);
        }

        $model->update($input);

        return redirect()->route('models.index')
            ->with('success', 'Model updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param models $model
     * @return RedirectResponse
     */
    public function destroy(models $model)
    {
        if ($model->image) {
            $destinationPath = 'upload/models/';
            $imagePath = public_path($destinationPath . $model->image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $model->delete();

        return redirect()->route('models.index')
            ->with('success', 'Model deleted successfully');
    }
}
