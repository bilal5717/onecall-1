<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SeoController extends Controller
{
    /**
     * Display robots.txt file.
     *
     * @return \Illuminate\Http\Response
     */
    public function robots(): Response
    {
        return response()
            ->view('seo.robots')
            ->header('Content-Type', 'text/plain; charset=UTF-8');
    }

    /**
     * Display sitemap.xml file.
     *
     * @return \Illuminate\Http\Response
     */
    public function sitemap(): Response
    {
        return response()
            ->view('seo.sitemap')
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
