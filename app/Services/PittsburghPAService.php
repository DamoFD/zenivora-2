<?php

namespace App\Services;

use stdClass;

class PittsburghPAService implements LocationServiceInterface {

    public function getTechnology() {
        $technology = [];

        $tech1 = new stdClass();
        $tech1->title = "Located in Reno, NV";
        $tech1->img = "marker.svg";
        $technology[] = $tech1;

        $tech2 = new stdClass();
        $tech2->title = "Rank #1 on Google";
        $tech2->img = "seo.svg";
        $technology[] = $tech2;

        $tech3 = new stdClass();
        $tech3->title = "Industry Standard Development";
        $tech3->img = "development.svg";
        $technology[] = $tech3;

        return $technology;
    }
}

