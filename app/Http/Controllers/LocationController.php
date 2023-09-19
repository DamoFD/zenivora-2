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
        $performance = $service->getPerformance();
        $security = $service->getSecurity();
        $seo = $service->getSeo();

        return view("locations.{$location}", compact(['technologies', 'locationData', 'phoneNumber', 'performance', 'security', 'seo']));
    }

    protected function getServiceByLocation($location) {
        $map = [
            'pittsburgh-pa' => \App\Services\PittsburghPAService::class,
            'reno-nv' => \App\Services\RenoNVService::class,
        ];

        return $map[strtolower($location)] ?? null;
    }
}
