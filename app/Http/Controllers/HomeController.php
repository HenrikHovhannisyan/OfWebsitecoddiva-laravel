<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\blogs;
use App\Models\Faq;
use App\Models\Info;
use App\Models\models;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {

        $blogs = blogs::orderBy('created_at', 'desc')->get();
        $blog_one = $blogs[0];
        $info = Info::first();
        $models = models::all();
        return view('index', compact('info', 'models', 'blog_one'));
    }

    public function about()
    {
        $faqs = Faq::all();
        $about = About::first();
        $info = Info::first();
        return view('pages.about', compact('info', 'about', 'faqs'));
    }

    public function applyNow()
    {
        $info = Info::first();
        return view('pages.apply-now', compact('info'));
    }

    public function blog()
    {
        $blogs = blogs::orderBy('created_at', 'desc')->get();
        $blog_one = $blogs[0];
        $_blogs = [$blogs[1], $blogs[2]];
        $info = Info::first();
        return view('pages.blog', compact('info', 'blogs', 'blog_one', '_blogs'));
    }

    /**
     * Display the specified resource.
     *
     * @param blogs $blog
     * @return Factory|View
     */
    public function blogShow(blogs $blog)
    {
        $info = Info::first();
        return view('pages.blog-item', compact('info', 'blog'));
    }

    public function contact()
    {
        $info = Info::first();
        return view('pages.contact', compact('info'));
    }

    public function refer()
    {
        $faqs = Faq::all();
        $info = Info::first();
        return view('pages.refer', compact('info', 'faqs'));
    }

    public function legal()
    {
        $info = Info::first();
        return view('pages.legal', compact('info'));
    }

    public function talents()
    {
        $talants = models::all();
        $info = Info::first();
        return view('pages.talents', compact('talants','info'));
    }
    public function talentShow(models $talent)
    {
        $info = Info::first();
        return view('pages.talent-item', compact('info', 'talent'));
    }
}
