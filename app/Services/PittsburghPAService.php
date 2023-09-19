<?php

namespace App\Services;

use stdClass;

class PittsburghPAService implements LocationServiceInterface {

    public function getTechnology() {
        $technology = [];

        $tech1 = new stdClass();
        $tech1->title = "Located in Pittsburgh, PA";
        $tech1->img = "marker.svg";
        $tech1->text1 = "You may have noticed how hard it is to find software engineers that are actually located in the Pittsburgh area.";
        $tech1->text2 = "Zenivora is a local business here in Pittsburgh, PA!";
        $tech1->list1 = "Access to strong local market research.";
        $tech1->list2 = "Take advantage of high-tier connections in the Pittsburgh, PA area.";
        $tech1->list3 = "Local Pittsburgh, PA business that contributes to massive codebases including the <a class=\"text-brand-primary underline\" href=\"https://wordpress.org\">Wordpress Core</a> and the <a class=\"text-brand-primary underline\" href=\"https://phpmyadmin.net\">PhpMyAdmin database interface</a>.";
        $technology[] = $tech1;

        $tech2 = new stdClass();
        $tech2->title = "Rank #1 on Google";
        $tech2->img = "seo.svg";
        $tech2->text1 = "Web agencies love to promise the world. Look at how many low-quality, low-performant sites there are in Pittsburgh, PA.";
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


    public function getPerformanceData()
    {
        $performance = new stdClass();

        $performance->title = 'Industry leading <strong class="bg-gradient-to-r from-brand-primary to-blue-400 text-transparent bg-clip-text">performance</strong>';
        $performance->paragraph1 = 'Here is our benchmark for the <a target="_blank" class="text-brand-primary underline" href="https://discordbrowser.com">DiscordBrowser.</a>';
        $performance->paragraph2 = 'Check the benchmark for your site at <a target="_blank" class="text-brand-primary underline" href="https://pagespeed.web.dev/">Google\'s Pagespeed Insights.</a>';
        $performance->imgMobile = 'website-pagespeed-score-mobile.webp';
        $performance->imgDesktop = 'website-pagespeed-score-desktop.webp';
        $performance->imgAlt = 'discordbrowser pagespeed insights';

        return $performance;
    }
    public function getPerformance()
    {
        $performance = [];

        $perf1 = new stdClass();
        $perf1->title = 'Do you choose between beautiful site, or good performance?';
        $perf1->paragraph = 'You can have both!';
        $perf1->list = ['Speed benchmarks for functions','Proper memory management','Modern caching techniques','Lossless image compression'];
        $performance[] = $perf1;

        $perf2 = new stdClass();
        $perf2->title = 'At your local Reno Zenivora, performance is a priority.';
        $perf2->paragraph = 'Instant load speeds are not out of reach!!';
        $perf2->list = ['Loading is money. It literally costs money to transfer data.','90% of customers will leave a site that takes longer than a few seconds to load.','Employees have to wait for software to load. That time adds up quickly.','Even our massive sites filled to the brim with functionality load instantly.'];
        $performance[] = $perf2;

        return $performance;
    }

    public function getSecurityData()
    {
        $security = new stdClass();

        $security->title = 'Enterprise-class <strong class="bg-gradient-to-r from-brand-primary to-blue-400 text-transparent bg-clip-text">security</strong>';
        $security->paragraph1 = 'Here is a visual representation of <a target="_blank" class="text-brand-primary underline" href="https://threatmap.checkpoint.com/">real-time cyberattacks</a>';
        $security->paragraph2 = 'Check your safe browsing status <a target="_blank" class="text-brand-primary underline" href="https://transparencyreport.google.com/safe-browsing/search?hl=en">Google\'s Transparency Report.</a>';
        $security->imgMobile = 'website-pagespeed-score-mobile.webp';
        $security->imgDesktop = 'website-pagespeed-score-desktop.webp';
        $security->imgAlt = 'discordbrowser pagespeed insights';

        return $security;
    }
    public function getSecurity()
    {
        $security = [];

        $sec1 = new stdClass();
        $sec1->title = 'Why does security matter?';
        $sec1->paragraph = 'Security is important from a legal and moral standpoint.';
        $sec1->list = ['Penetration Testing','Brute Force Attempts','SQL injection','Cross-site scripting'];
        $security[] = $sec1;

        $sec2 = new stdClass();
        $sec2->title = 'Security is a priority at your Reno Zenivora!';
        $sec2->paragraph = 'Protect your Business';
        $sec2->list = ['Cyber crime is expected to grow 15% every year','Wordpress is the most hacked CMS (mainly due to DIY)','There are 2,200 successful cyberattacks per day','95% of cyberattacks are due to human error'];
        $security[] = $sec2;

        return $security;
    }


    public function getLocation() {
        $location = new stdClass();

        $location->text = 'Zenivora<br>Pittsburgh, PA 15108';
        $location->x = 40.4406;
        $location->y = -79.9959;
        $location->zoom = 12;

        Return $location;

    }

    public function getNumber() {
        $number = new stdClass();

        $number->text = '(412)228-0872';
        $number->call = '(412)228-0872';

        Return $number;
    }

}

