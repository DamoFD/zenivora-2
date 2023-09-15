<?php

namespace App\Services;

use stdClass;

class PittsburghPAService implements LocationServiceInterface {

    public function getTechnology() {
        $technology = [];

        $tech1 = new stdClass();
        $tech1->title = "Located in Reno, NV";
        $tech1->img = "marker.svg";
        $tech1->text1 = "You may have noticed how hard it is to find software engineers that are <em>actually</em> located in the Reno area.";
        $tech1->text2 = "text 2";
        $tech1->list1 = "list 1";
        $tech1->list2 = "list 2";
        $tech1->list3 = "list 3";
        $technology[] = $tech1;

        $tech2 = new stdClass();
        $tech2->title = "Rank #1 on Google";
        $tech2->img = "seo.svg";
        $tech2->text1 = "Zenivora is a local business here in Reno, NV!";
        $tech2->text2 = "text 2";
        $tech2->list1 = "list 1";
        $tech2->list2 = "list 2";
        $tech2->list3 = "list 3";
        $technology[] = $tech2;

        $tech3 = new stdClass();
        $tech3->title = "Industry Standard Development";
        $tech3->img = "development.svg";
        $tech3->text1 = "Web agencies love to promise the world. Look at how many low-quality, low-performant sites there are in Reno, NV.";
        $tech3->text2 = "text 2";
        $tech3->list1 = "list 1";
        $tech3->list2 = "list 2";
        $tech3->list3 = "list 3";
        $technology[] = $tech3;

        return $technology;
    }
}

