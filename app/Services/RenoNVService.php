<?php

namespace App\Services;

use stdClass;

class RenoNVService implements LocationServiceInterface
{
    /**
    * Construct Associative Array
    */
    public function getData(): array
    {
        return [
            'meta' => $this->getMetaData(),
            'technologies' => $this->getTechnology(),
            'performance' => $this->getPerformance(),
            'locationData' => $this->getLocation(),
            'phoneNumber' => $this->getNumber(),
            'security' => $this->getSecurity(),
            'seo' => $this->getSeo(),
        ];
    }

    /**
    * Construct Meta Data
    */
    public function getMetaData(): stdClass
    {
        $data = new stdClass();

        $data->title = 'Reno Website Designers';
        $data->description = 'Elevate your brand with Zenivora, the leading Reno Website Designers. Expertise in responsive design, SEO, and e-commerce solutions. Based in Reno, NV.';

        return $data;
    }

    /**
    * Construct Technology Array of Objects
    */
    public function getTechnology(): array
    {
        $technology = [];

        $tech1 = new stdClass();
        $tech1->title = "Located in Reno, NV";
        $tech1->img = "marker.svg";
        $tech1->text1 = "You may have noticed how hard it is to find software engineers that are <em>actually</em> located in the Reno area.";
        $tech1->text2 = "Zenivora is a <strong>local</strong> business here in Reno, NV!";
        $tech1->list1 = "Access to strong local market research.";
        $tech1->list2 = "Take advantage of high-tier connections in the Reno, NV area.";
        $tech1->list3 = "Local Reno, NV business that contributes to massive codebases including the <a class=\"text-brand-primary underline\" href=\"https://wordpress.org\">Wordpress Core</a> and the <a class=\"text-brand-primary underline\" href=\"https://phpmyadmin.net\">PhpMyAdmin database interface</a>.";
        $technology[] = $tech1;

        $tech2 = new stdClass();
        $tech2->title = "Search Engine Optimization";
        $tech2->img = "seo.svg";
        $tech2->text1 = "Web agencies love to promise the world. Look at how many <em>low-quality, low-performing</em> sites there are in Reno, NV.";
        $tech2->text2 = "Here at Zenivora, you are <strong>guaranteed</strong> a high-quality site that <em>will</em> rank.";
        $tech2->list1 = 'You will receive powerful keyword research with <a class="text-brand-primary underline" href="https://ahrefs.com">Ahrefs</a>.';
        $tech2->list2 = 'Gain the SERPs with keyword rich articles with <a class="text-brand-primary underline" href="https://surferseo.com">Surfer SEO</a>.';
        $tech2->list3 = "Increase visibility with high authority and relevant backlinks";
        $technology[] = $tech2;

        $tech3 = new stdClass();
        $tech3->title = "Industry Standard Development";
        $tech3->img = "development.svg";
        $tech3->text1 = "The developers at Zenivora have experience working with <strong>thousands</strong> of other developers on huge codebases.";
        $tech3->text2 = "Your software has the <em>ability</em> to run your business for you.";
        $tech3->list1 = "Your software will manage your customers, employees, books, and inventory.";
        $tech3->list2 = "Withstand huge influxes of requests and traffic with proper optimizations.";
        $tech3->list3 = "Anything redundant and annoying within your business <strong>can</strong> be automated.";
        $technology[] = $tech3;

        return $technology;
    }

    /**
    * Construct Performance Object
    */
    public function getPerformance(): stdClass
    {
        $performance = new stdClass();

        $performance->title = '<strong class="bg-gradient-to-r from-brand-primary to-blue-400 text-transparent bg-clip-text">Goal-Driven</strong> Websites';
        $performance->paragraph1 = 'Here is our benchmark for the <a target="_blank" class="text-brand-primary underline" href="https://discordbrowser.com">DiscordBrowser.</a>';
        $performance->paragraph2 = 'Check the benchmark for your site at <a target="_blank" class="text-brand-primary underline" href="https://pagespeed.web.dev/">Google\'s Pagespeed Insights.</a>';
        $performance->imgMobile = 'website-pagespeed-score-mobile.webp';
        $performance->imgDesktop = 'website-pagespeed-score-desktop.webp';
        $performance->imgAlt = 'discordbrowser pagespeed insights';

        $performance->lists = [];

        $perf1 = new stdClass();
        $perf1->title = 'Do you choose between beautiful site, or good performance?';
        $perf1->paragraph = 'You can have both!';
        $perf1->list = [
            'Speed benchmarks for functions',
            'Proper memory management',
            'Modern caching techniques',
            'Lossless image compression'
        ];
        $performance->lists[] = $perf1;

        $perf2 = new stdClass();
        $perf2->title = 'At your local Reno Zenivora, performance is a priority.';
        $perf2->paragraph = 'Instant load speeds are not out of reach!!';
        $perf2->list = [
            'Loading is money. It literally costs money to transfer data.',
            '<strong>90%</strong> of customers will leave a site that takes longer than a few seconds to load.',
            'Employees have to wait for software to load. That time adds up quickly.',
            'Even our massive sites filled to the brim with functionality load instantly.'
        ];
        $performance->lists[] = $perf2;

        return $performance;
    }

    /**
    * Construct Security Object
    */
    public function getSecurity(): stdClass
    {
        $security = new stdClass();

        $security->title = 'Enterprise-class <strong class="bg-gradient-to-r from-brand-primary to-blue-400 text-transparent bg-clip-text">security</strong>';
        $security->paragraph1 = 'Here is a visual representation of <a target="_blank" class="text-brand-primary underline" href="https://threatmap.checkpoint.com/">real-time cyberattacks</a>';
        $security->paragraph2 = 'Check your safe browsing status <a target="_blank" class="text-brand-primary underline" href="https://transparencyreport.google.com/safe-browsing/search?hl=en">Google\'s Transparency Report.</a>';
        $security->imgMobile = 'arch-rice-mobile.webp';
        $security->imgDesktop = 'arch-rice-desktop.webp';
        $security->imgAlt = 'Arch Linux Security Practices';
        $security->lists = [];

        $sec1 = new stdClass();
        $sec1->title = 'Why does security matter?';
        $sec1->paragraph = 'Security is important from a legal and moral standpoint.';
        $sec1->list = [
            'Penetration Testing',
            'Brute Force Attempts',
            'SQL injection',
            'Cross-site scripting'
        ];
        $security->lists[] = $sec1;

        $sec2 = new stdClass();
        $sec2->title = 'Security is a priority at your Reno Zenivora!';
        $sec2->paragraph = 'Protect your Business';
        $sec2->list = [
            'Cyber crime is expected to grow 15% every year',
            'Wordpress is the most hacked CMS (mainly due to DIY)',
            'There are 2,200 successful cyberattacks per day',
            '95% of cyberattacks are due to human error'
        ];
        $security->lists[] = $sec2;

        return $security;
    }

    /**
    * Construct SEO Object
    */
    public function getSeo(): stdClass
    {
        $seo = new stdClass();

        $seo->title = 'Local <strong class="bg-gradient-to-r from-brand-primary to-blue-400 text-transparent bg-clip-text">SEO Expert</strong> in Reno, Nevada';
        $seo->paragraph1 = 'Here is our traffic for the DiscordBrowser after implementing our SEO techniques.</a>';
        $seo->paragraph2 = 'Check your backlink profile with <a target="_blank" href="https://ahrefs.com/backlink-checker" class="text-brand-primary underline">ahrefs</a>';
        $seo->imgMobile = 'discordbrowser-stats-mobile.webp';
        $seo->imgDesktop = 'discordbrowser-stats-desktop.webp';
        $seo->imgAlt = 'discordbrowser stats';
        $seo->lists = [];

        $seo1 = new stdClass();
        $seo1->title = '8.5 billion searches take place on Google every day.';
        $seo1->paragraph = 'We know what your customers are searching.';
        $seo1->list = [
            'Keyword research with <a target="_blank" class="text-brand-primary underline" href="https://ahrefs.com">ahrefs</a>',
            'Original copy with <a target="_blank" class="text-brand-primary underline" href="https://surferseo.com">Surfer SEO</a>',
            'Modern backlink-building techniques',
            'Accessibility and translations'
        ];
        $seo->lists[] = $seo1;

        $seo2 = new stdClass();
        $seo2->title = 'Measured Results Directly from Google!';
        $seo2->paragraph = 'Beat your competition!';
        $seo2->list = [
            'SEO is a long term marketing strategy to gain organic traffic',
            'Backlinks are referrals from other sites telling search engines that your site is legit',
            '60% of users click the top 3 search results',
            'Google drives 8 times more traffic than all social media combined'
        ];
        $seo->lists[] = $seo2;

        return $seo;
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
