<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    // Get Home View
    public function home(): view
    {
        $service = new \App\Services\HomeService();
        $technologies = $service->getTechnology();
        $locationData = $service->getLocation();
        $phoneNumber = $service->getNumber();

        return view("home", compact(['technologies', 'locationData', 'phoneNumber']));
    }
}
