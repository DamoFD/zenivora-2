<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        return response()->view('sitemap.index')->header('Content-Type', 'text/xml');
    }
}
