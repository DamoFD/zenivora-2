<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LocationController extends Controller
{
    public function show($location) {
        $serviceClass = $this->getServiceByLocation($location);

        if (!$serviceClass) {
            abort(404, 'Location not found');
        }

        $service = app($serviceClass);
        $technologies = $service->getTechnology();
        $locationData = $service->getLocation();
        $phoneNumber = $service->getNumber();

        return view("locations.{$location}", compact(['technologies', 'locationData', 'phoneNumber']));
    }

    protected function getServiceByLocation($location) {
        $map = [
            'pittsburgh-pa' => \App\Services\PittsburghPAService::class,
            // Add more mappings here
        ];

        return $map[strtolower($location)] ?? null;
    }
}
