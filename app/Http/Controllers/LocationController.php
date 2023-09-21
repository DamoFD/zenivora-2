<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Services\ServiceFactory;

class LocationController extends Controller
{
    // Service Factory Object
    protected object $serviceFactory;

    // Construct Service Factory Object
    public function __construct(ServiceFactory $serviceFactory)
    {
        $this->serviceFactory = $serviceFactory;
    }

    public function index(): View
    {
        $locations = ServiceFactory::getLocations();

        return view('location.index', compact('locations'));
    }

    // Get Location View
    public function show($location): View
    {
        $service = $this->serviceFactory->make($location);

        if (!$service) {
            abort(404, 'Location not found');
        }

        $data = $service->getData();

        return view("location.show", compact('data'));
    }
}
