<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Services\ServiceFactory;

class LocationSitemapController extends Controller
{
    public function index(): Response
    {
        $locations = ServiceFactory::getLocations();

        return response()
            ->view('sitemap.locations.index', compact('locations'))
            ->header('Content-Type', 'text/xml');
    }
}
