<?php

namespace App\Http\Controllers;

use App\Models\Info;
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
        return view('index', compact('info'));
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
        $info = Info::first();
        return view('pages.blog', compact('info'));
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
