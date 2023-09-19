<?php

namespace App\Services;

use stdClass;

class HomeService implements LocationServiceInterface {

    /**
    * Construct Technology Array of Objects
    */
    public function getTechnology(): array
    {
        $technology = [];

        $tech1 = new stdClass();
        $tech1->title = "Many Locations Across the Nation";
        $tech1->img = "marker.svg";
        $tech1->text1 = "You may have noticed how hard it is to find software engineers that are actually located near you.";
        $tech1->text2 = "Zenivora is a local business near you!";
        $tech1->list1 = "Access to strong local market research.";
        $tech1->list2 = "Take advantage of high-tier connections in your area.";
        $tech1->list3 = "A local business that contributes to massive codebases including the <a class=\"text-brand-primary underline\" href=\"https://wordpress.org\">Wordpress Core</a> and the <a class=\"text-brand-primary underline\" href=\"https://phpmyadmin.net\">PhpMyAdmin database interface</a>.";
        $technology[] = $tech1;

        $tech2 = new stdClass();
        $tech2->title = "Rank #1 on Google";
        $tech2->img = "seo.svg";
        $tech2->text1 = "Web agencies love to promise the world. Look at how many low-quality, low-performing sites there are in your area.";
        $tech2->text2 = "Here at Zenivora, you are guaranteed a high-quality site that will rank.";
        $tech2->list1 = 'You will receive powerful keyword research with <a class="text-brand-primary underline" href="https://ahrefs.com">Ahrefs</a>.';
        $tech2->list2 = 'Gain the SERPs with keyword rich articles with <a class="text-brand-primary underline" href="https://surferseo.com">Surfer SEO</a>.';
        $tech2->list3 = "Increase visibility with high authority and relevant backlinks";
        $technology[] = $tech2;

        $tech3 = new stdClass();
        $tech3->title = "Industry Standard Development";
        $tech3->img = "development.svg";
        $tech3->text1 = "The developers at Zenivora have experience working with thousands of other developers on huge codebases.";
        $tech3->text2 = "Your software has the ability to run your business for you.";
        $tech3->list1 = "Your software will manage your customers, employees, books, and inventory.";
        $tech3->list2 = "Withstand huge influxes of requests and traffic with proper optimizations.";
        $tech3->list3 = "Anything redundant and annoying within your business can be automated.";
        $technology[] = $tech3;

        return $technology;
    }

    /**
    * Construct Location Object
    */
    public function getLocation(): stdClass
    {
        $location = new stdClass();

        $location->text = '<b>Zenivora</b><br>2390 Tripp Dr #2<br>Reno, NV 89512';
        $location->x = 39.5527725;
        $location->y = -119.7954097;
        $location->zoom = 15;

        Return $location;

    }

    /**
    * Construct Number Object
    */
    public function getNumber(): stdClass
    {
        $number = new stdClass();

        $number->text = '(775) 230-7383';
        $number->call = '(775) 230-7383';

        Return $number;
    }
}
