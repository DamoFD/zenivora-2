<?php

namespace App\Services;

class ServiceFactory
{
    /**
    * Match URL With Service Class
    */
    protected static array $map = [
        'pittsburgh-pa' => PittsburghPAService::class,
        'reno-nv' => RenoNVService::class,
    ];

    public static function getLocations(): array
    {
        return array_keys(self::$map);
    }

    /**
    * Return Service Object
    */
    public function make($location): ?object
    {
        $service = self::$map[strtolower($location)] ?? null;

        if (!$service) {
            return null;
        }

        return app($service);
    }
}
