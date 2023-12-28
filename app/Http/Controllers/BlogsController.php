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
            'blog_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'blog_title' => 'required',
            'blog_description' => 'required',
            'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($blogImage = $request->file('blog_image')) {
            $destinationPath = 'upload/blogs/';
            $blogImageName = date('YmdHis') . '_' . uniqid() . "." . $blogImage->getClientOriginalExtension();
            $blogImage->move($destinationPath, $blogImageName);
            $input['blog_image'] = $blogImageName;
        }

        if ($image1 = $request->file('image1')) {
            $image1Name = date('YmdHis') . '_' . uniqid() . "." . $image1->getClientOriginalExtension();
            $image1->move($destinationPath, $image1Name);
            $input['image1'] = $image1Name;
        }

        if ($image2 = $request->file('image2')) {
            $image2Name = date('YmdHis') . '_' . uniqid() . "." . $image2->getClientOriginalExtension();
            $image2->move($destinationPath, $image2Name);
            $input['image2'] = $image2Name;
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
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $blog = blogs::findOrFail($id);
        $input = $request->all();

        if ($blogImage = $request->file('blog_image')) {
            $destinationPath = 'upload/blogs/';
            $blogImageName = date('YmdHis') . '_' . uniqid() . "." . $blogImage->getClientOriginalExtension();
            $blogImage->move($destinationPath, $blogImageName);

            if ($blog->blog_image) {
                $oldImagePath = public_path($destinationPath . $blog->blog_image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $input['blog_image'] = $blogImageName;
        }

        if ($image1 = $request->file('image1')) {
            $destinationPath = 'upload/blogs/';
            $image1Name = date('YmdHis') . '_' . uniqid() . "." . $image1->getClientOriginalExtension();
            $image1->move($destinationPath, $image1Name);
            if ($blog->image1) {
                $oldImage1Path = public_path($destinationPath . $blog->image1);
                if (file_exists($oldImage1Path)) {
                    unlink($oldImage1Path);
                }
            }
            $input['image1'] = $image1Name;
        }

        if ($image2 = $request->file('image2')) {
            $destinationPath = 'upload/blogs/';
            $image2Name = date('YmdHis') . '_' . uniqid() . "." . $image2->getClientOriginalExtension();
            $image2->move($destinationPath, $image2Name);
            if ($blog->image2) {
                $oldImage1Path = public_path($destinationPath . $blog->image2);
                if (file_exists($oldImage1Path)) {
                    unlink($oldImage1Path);
                }
            }
            $input['image2'] = $image2Name;
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
