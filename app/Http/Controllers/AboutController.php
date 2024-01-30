<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $about = About::all();
        return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('admin.about.create');
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
            'title' => 'required',
            'text_one' => 'required',
            'text_two' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'upload/about/';
            $imageName = date('YmdHis') . '_' . uniqid() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        About::create($input);

        return redirect()->route('about.index')
            ->with('success', 'About created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param About $about
     * @return void
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param About $about
     * @return Factory|View
     */
    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param About $about
     * @return RedirectResponse
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required',
            'text_one' => 'required',
            'text_two' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'upload/about/';
            $imageName = date('YmdHis') . '_' . uniqid() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;

            // Delete the old image if it exists
            if ($about->image) {
                $oldImagePath = $destinationPath . $about->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
        }

        $about->update($input);

        return redirect()->route('about.index')
            ->with('success', 'About updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param About $about
     * @return void
     */
    public function destroy(About $about)
    {
        //
    }
}
