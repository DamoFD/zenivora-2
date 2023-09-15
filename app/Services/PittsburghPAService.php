<?php

namespace App\Services;

use stdClass;

class PittsburghPAService implements LocationServiceInterface {

    public function getTechnology() {
        $technology = [];

        $obj1 = new stdClass();
        $obj1->title = "Located in Reno, NV";
        $obj1->img = "marker.svg";
        $technology[] = $obj1;

        $obj2 = new stdClass();
        $obj2->title = "Rank #1 on Google";
        $obj2->img = "seo.svg";
        $technology[] = $obj2;

        $obj3 = new stdClass();
        $obj3->title = "Industry Standard Development";
        $obj3->img = "development.svg";
        $technology[] = $obj3;

        return $technology;
    }
}

