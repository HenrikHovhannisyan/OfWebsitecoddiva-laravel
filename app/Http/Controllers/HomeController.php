<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\blogs;
use App\Models\Faq;
use App\Models\Info;
use App\Models\models;
use App\Models\services;
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
        $services = services::take(6)->get();
        $chunks = $services->chunk(3);
        $firstChunk = $chunks->get(0);
        $secondChunk = $chunks->get(1);
        return view('index', compact('info', 'models', 'blog_one', 'firstChunk', 'secondChunk'));
    }

    /**
     * @return Factory|View
     */
    public function about()
    {
        $faqs = Faq::all();
        $about = About::first();
        $info = Info::first();
        return view('pages.about', compact('info', 'about', 'faqs'));
    }

    /**
     * @return Factory|View
     */
    public function applyNow()
    {
        $info = Info::first();
        return view('pages.apply-now', compact('info'));
    }

    /**
     * @return Factory|View
     */
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

    /**
     * @return Factory|View
     */
    public function contact()
    {
        $info = Info::first();
        return view('pages.contact', compact('info'));
    }

    /**
     * @return Factory|View
     */
    public function refer()
    {
        $faqs = Faq::all();
        $info = Info::first();
        return view('pages.refer', compact('info', 'faqs'));
    }

    /**
     * @return Factory|View
     */
    public function legal()
    {
        $info = Info::first();
        return view('pages.legal', compact('info'));
    }

    /**
     * @return Factory|View
     */
    public function talents()
    {
        $talants = models::all();
        $info = Info::first();
        return view('pages.talents', compact('talants','info'));
    }

    /**
     * @param models $talent
     * @return Factory|View
     */
    public function talentShow(models $talent)
    {
        $info = Info::first();
        return view('pages.talent-item', compact('info', 'talent'));
    }

    /**
     * @return Factory|View
     */
    public function services()
    {
        $services = services::get();
        $firstTwoServices = $services->take(2);
        $remainingServices = $services->slice(2);
        $info = Info::first();
        return view('pages.services', compact('info', 'firstTwoServices', 'remainingServices'));
    }

    /**
     * @param services $service
     * @return Factory|View
     */
    public function servicesShow(services $service)
    {
        $info = Info::first();
        return view('pages.services-item', compact('info', 'service'));
    }
}
