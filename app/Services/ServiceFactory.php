<?php

namespace App\Services;

class ServiceFactory
{
    /**
    * Match URL With Service Class
    */
    protected array $map = [
        'pittsburgh-pa' => PittsburghPAService::class,
        'reno-nv' => RenoNVService::class,
    ];

    /**
    * Return Service Object
    */
    public function make($location): ?object
    {
        $service = $this->map[strtolower($location)] ?? null;

        if (!$service) {
            return null;
        }

        return app($service);
    }
}
