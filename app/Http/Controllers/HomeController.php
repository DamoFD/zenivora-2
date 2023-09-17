<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function home() {
        $service = new \App\Services\HomeService();
        $technologies = $service->getTechnology();
        $locationData = $service->getLocation();
        $phoneNumber = $service->getNumber();

        return view("home", compact(['technologies', 'locationData', 'phoneNumber']));
    }
}
