<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    // Get Home View
    public function home(): view
    {
        $service = new \App\Services\HomeService();

        $data = $service->getData();

        return view("home", compact('data'));
    }
}
