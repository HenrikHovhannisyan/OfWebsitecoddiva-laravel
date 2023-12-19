<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use App\Models\Info;
use App\Models\models;
use Illuminate\Contracts\Support\Renderable;
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
        $info = Info::first();
        $models = models::all();
        return view('index', compact('info', 'models'));
    }

    public function about()
    {
        $info = Info::first();
        return view('pages.about', compact('info'));
    }

    public function applyNow()
    {
        $info = Info::first();
        return view('pages.apply-now', compact('info'));
    }

    public function blog()
    {
        $blogs = blogs::all();
        $info = Info::first();
        return view('pages.blog', compact('info', 'blogs'));
    }

    public function blogItem()
    {
        $info = Info::first();
        return view('pages.blog-item', compact('info'));
    }

    public function contact()
    {
        $info = Info::first();
        return view('pages.contact', compact('info'));
    }

    public function refer()
    {
        $info = Info::first();
        return view('pages.refer', compact('info'));
    }

    public function legal()
    {
        $info = Info::first();
        return view('pages.legal', compact('info'));
    }
}
