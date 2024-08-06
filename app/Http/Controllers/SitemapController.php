<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\Services;
use App\Models\Models;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        // Статические страницы
        $sitemap .= '<url><loc>' . url('/') . '</loc></url>';
        $sitemap .= '<url><loc>' . url('/about') . '</loc></url>';
        $sitemap .= '<url><loc>' . url('/apply-now') . '</loc></url>';
        $sitemap .= '<url><loc>' . url('/blog') . '</loc></url>';
        $sitemap .= '<url><loc>' . url('/services') . '</loc></url>';
        $sitemap .= '<url><loc>' . url('/contact') . '</loc></url>';
        $sitemap .= '<url><loc>' . url('/refer') . '</loc></url>';
        $sitemap .= '<url><loc>' . url('/legal') . '</loc></url>';
        $sitemap .= '<url><loc>' . url('/talents') . '</loc></url>';

        // Динамические страницы
        foreach (Blogs::all() as $blog) {
            $sitemap .= '<url><loc>' . url("/blog/{$blog->id}") . '</loc></url>';
        }

        foreach (Services::all() as $service) {
            $sitemap .= '<url><loc>' . url("/services/{$service->slug}") . '</loc></url>';
        }

        foreach (Models::all() as $model) {
            $sitemap .= '<url><loc>' . url("/talent/{$model->id}") . '</loc></url>';
        }

        $sitemap .= '</urlset>';

        return response($sitemap, 200)
            ->header('Content-Type', 'application/xml');
    }
}


