<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $blogs = blogs::latest()->paginate(5);
        return view('admin.blogs.index', compact('blogs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('admin.blogs.create');
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

            $destinationPath = 'upload/blogs/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";

        }

        blogs::create($input);

        return redirect()->route('blogs.index')
            ->with('success', 'Blog created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param blogs $blog
     * @return Factory|View
     */
    public function show(blogs $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param blogs $blog
     * @return Factory|View
     */
    public function edit(blogs $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param blogs $blog
     * @return RedirectResponse
     */
    public function update(Request $request, blogs $blog)
    {
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'upload/blogs/';

            if ($blog->image) {
                $oldImagePath = public_path($destinationPath . $blog->image);
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

        $blog->update($input);

        return redirect()->route('blogs.index')
            ->with('success', 'Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param blogs $blog
     * @return RedirectResponse
     */
    public function destroy(blogs $blog)
    {
        if ($blog->image) {
            $destinationPath = 'upload/blogs/';
            $imagePath = public_path($destinationPath . $blog->image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $blog->delete();

        return redirect()->route('blogs.index')
            ->with('success', 'Blog deleted successfully');
    }
}
