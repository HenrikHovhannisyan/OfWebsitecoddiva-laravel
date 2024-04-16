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
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'info' => 'required|max:60',
            'height' => 'required',
            'bust' => 'required',
            'waist' => 'required',
            'hip' => 'required',
            'description' => 'required',
            'description1' => 'required',
            'description2' => 'required',
        ]);

        $input = $request->all();

        if ($blogImage = $request->file('image')) {
            $destinationPath = 'upload/models/';
            $blogImageName = date('YmdHis') . '_' . uniqid() . "." . $blogImage->getClientOriginalExtension();
            $blogImage->move($destinationPath, $blogImageName);
            $input['image'] = $blogImageName;
        }

        if ($image1 = $request->file('image1')) {
            $image1Name = date('YmdHis') . '_' . uniqid() . "." . $image1->getClientOriginalExtension();
            $image1->move($destinationPath, $image1Name);
            $input['image1'] = $image1Name;
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
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'info' => 'required|max:60',
            'height' => 'required',
            'bust' => 'required',
            'waist' => 'required',
            'hip' => 'required',
            'description' => 'required',
            'description1' => 'required',
            'description2' => 'required',
        ]);

        $input = $request->all();

        if ($blogImage = $request->file('image')) {
            $destinationPath = 'upload/models/';
            $blogImageName = date('YmdHis') . '_' . uniqid() . "." . $blogImage->getClientOriginalExtension();
            $blogImage->move($destinationPath, $blogImageName);
            $input['image'] = $blogImageName;
        }

        if ($image1 = $request->file('image1')) {
            $destinationPath = 'upload/models/';
            $image1Name = date('YmdHis') . '_' . uniqid() . "." . $image1->getClientOriginalExtension();
            $image1->move($destinationPath, $image1Name);
            $input['image1'] = $image1Name;
        }

        models::find($id)->update($input);

        return redirect()->route('models.index')
            ->with('success', 'Model updated successfully.');
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

        if ($model->image1) {
            $destinationPath = 'upload/models/';
            $image1Path = public_path($destinationPath . $model->image1);
            if (file_exists($image1Path)) {
                unlink($image1Path);
            }
        }

        $model->delete();

        return redirect()->route('models.index')
            ->with('success', 'Model deleted successfully');
    }
}
