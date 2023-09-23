<?php

namespace App\Services;

use App\Helpers\SchemaHelper;
use stdClass;

class PittsburghPAService implements LocationServiceInterface
{
    /**
    * Construct Associative Array
    */
    public function getData(): array
    {
        return [
            'meta' => $this->getMetaData(),
            'about' => $this->getAbout(),
            'technologies' => $this->getTechnology(),
            'performance' => $this->getPerformance(),
            'locationData' => $this->getLocation(),
            'phoneNumber' => $this->getNumber(),
            'security' => $this->getSecurity(),
            'seo' => $this->getSeo(),
            'faq' => $this->getFaq(),
            'schema' => SchemaHelper::getSchema($this->getfaq()->lists),
        ];
    }

    /**
    * Construct Meta Data
    */
    public function getMetaData(): stdClass
    {
        $data = new stdClass();

        $data->title = 'Pittsburgh Website Designers';
        $data->description = 'Elevate your brand with Zenivora, the leading Pittsburgh Website Designers. Expertise in responsive design, SEO, and e-commerce solutions. Based in Pittsburgh, PA.';
        $data->img = 'pittsburgh-city-desktop.webp';
        $data->img_mobile = 'pittsburgh-city-mobile.webp';

        return $data;
    }

    /**
     * Construct About Data
     */
    public function getAbout(): stdClass
    {
        $about = new stdClass();

        $about->title = 'Our Pittsburgh Web Design Clients <strong class="bg-gradient-to-r from-brand-primary to-blue-400 text-transparent bg-clip-text">Get Results</strong>';

        return $about;
    }

    /**
    * Construct Technology Array of Objects
    */
    public function getTechnology(): array
    {
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

    /**
    * Construct Performance Object
    */
    public function getPerformance(): stdClass
    {
        $performance = new stdClass();

        $performance->title = 'Industry leading <strong class="bg-gradient-to-r from-brand-primary to-blue-400 text-transparent bg-clip-text">performance</strong>';

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
        $perf2->title = 'Instant load speeds are not out of reach! At your local Pittsburgh Zenivora, performance is a priority.';
        $perf2->paragraph = 'Instant load speeds are not out of reach!!';
        $perf2->list = [
            'Loading is money. It literally costs money to transfer data.',
            '90% of customers will leave a site that takes longer than a few seconds to load.',
            'Employees have to wait for software to load. That time adds up quickly.',
            'Even our massive sites filled to the brim with functionality load instantly.'
        ];
        $performance->lists[] = $perf2;

        $performance->paragraph1 = 'Here is our benchmark for Zenivora';
        $performance->paragraph2 = 'Check the benchmark for your site at <a target="_blank" class="text-brand-primary underline" href="https://pagespeed.web.dev/">Google\'s Pagespeed Insights.</a>';
        $performance->img = 'cropped-zenivora-pagespeed.webp';
        $performance->imgAlt = 'zenivora pagespeed insights';

        return $performance;
    }

    /**
    * Construct Security Object
    */
    public function getSecurity(): stdClass
    {
        $security = new stdClass();

        $security->title = 'Enterprise-class <strong class="bg-gradient-to-r from-brand-primary to-blue-400 text-transparent bg-clip-text">security</strong>';
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
        $sec2->title = 'Security is a priority at your Pittsburgh Zenivora!';
        $sec2->paragraph = 'Protect your Business';
        $sec2->list = [
            'Cyber crime is expected to grow 15% every year',
            'Wordpress is the most hacked CMS (mainly due to DIY)',
            'There are 2,200 successful cyberattacks per day',
            '95% of cyberattacks are due to human error'
        ];
        $security->lists[] = $sec2;

        $security->paragraph1 = 'Here is a visual representation of <a target="_blank" class="text-brand-primary underline" href="https://threatmap.checkpoint.com/">real-time cyberattacks</a>';
        $security->paragraph2 = 'Check your safe browsing status <a target="_blank" class="text-brand-primary underline" href="https://transparencyreport.google.com/safe-browsing/search?hl=en">Google\'s Transparency Report.</a>';
        $security->img = 'arch-resize.webp';
        $security->imgAlt = 'Arch Linux Security Practices';

        return $security;
    }

    /**
    * Construct SEO Object
    */
    public function getSeo(): stdClass
    {
        $seo = new stdClass();

        $seo->title = 'Proven <strong class="bg-gradient-to-r from-brand-primary to-blue-400 text-transparent bg-clip-text">competitive SEO</strong> practices';

        $seo->lists = [];

        $seo1 = new stdClass();
        $seo1->title = '8.5 billion searches take place on Google every day.';
        $seo1->paragraph = 'We know what your customers are searching.';
        $seo1->list = [
            'Keyword research with <a target="_blank" class="text-brand-primary underline" href="https://ahrefs.com">ahrefs</a>',
            'Original copy with <a target="_blank" class="text-brand-primary underline" href="https://surferseo.com">Surfer SEO</a>',
            'Modern backlink building techniques',
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

        $seo->paragraph1 = 'Here is our traffic for DiscordBrowser after implementing our SEO techniques.</a>';
        $seo->paragraph2 = 'Check your backlink profile with <a target="_blank" href="https://ahrefs.com/backlink-checker" class="text-brand-primary underline">ahrefs</a>';
        $seo->img = 'discordbrowser-stats-desktop.webp';
        $seo->imgAlt = 'discordbrowser stats';

        return $seo;
    }

    /**
     * Construct Faq Array of Objects
     */
    public function getFaq()
    {
        $faq = new stdClass();
        $faq->title = 'Frequently Asked <strong class="bg-gradient-to-r from-brand-primary to-blue-400 text-transparent bg-clip-text">Questions</strong>';
        $faq->lists = [];

        $faq1 = new stdClass();
        $faq1->title = 'Why is optimizing for search engines crucial for boosting web traffic?';
        $faq1->paragraph = [
            'Search engine optimization, often referred to as SEO, is a fundamental component of the digital marketing landscape. The primary purpose of search engine optimization is to improve a website\'s visibility on search engines.',
            'Doing so naturally leads to an increase in website traffic. Search engine optimization involves various techniques, from content optimization to link building, all aimed at making a website more relevant and accessible to its target audience.',
            'Experienced web specialists understand the intricacies of search engine optimization and have the knowledge to implement the most up-to-date and effective strategies. By integrating search engine optimization within digital marketing services, they ensure that a website not only ranks higher on search engines but also offers a user-friendly experience for visitors.',
            'A synergy between quality content, technical optimization, and strategic online marketing is what makes search engine optimization so effective. In this ever-evolving digital age, leveraging search engine optimization is crucial for any business wishing to maintain a competitive edge and drive more organic traffic to their online platforms.'
        ];
        $faq->lists[] = $faq1;

        $faq2 = new stdClass();
        $faq2->title = 'What web design services do you provide?';
        $faq2->paragraph = [
          'Zenivora prides itself on delivering tailored web design solutions that cater to the unique needs of its clients. Their team of skilled web designers ensures that all web design projects are executed with precision, resulting in custom websites that encapsulate a brand\'s essence. As a branch of a well-established digital marketing firm, Zenivora extends its prowess beyond mere design, offering holistic web solutions coupled with strategic marketing solutions.',
          'Furthermore, understanding the significance of quality content, Zenivora provides content creation services, emphasizing content writing that resonates with the target audience. Their expertise in content development is unparalleled, and they have honed a distinctive approach to content generation that sets them apart. Plus, with their robust web hosting services provided not once, but twice, clients can be assured of a seamless and comprehensive online experience. Zenivora\'s commitment to content generation, twice emphasized, underscores their focus on delivering rich, relevant content to enhance the user experience.'
        ];
        $faq->lists[] = $faq2;

        $faq3 = new stdClass();
        $faq3->title = 'Why is it important to have a Pittsburgh web design agency?';
        $faq3->paragraph = [
            'Opting for a Pittsburgh web design company, such as Zenivora, ensures that your web development endeavors are precisely tailored for the local audience. As leading Pittsburgh web design experts, we\'ve mastered the art of merging regional nuances with global web development trends. This blend not only creates websites that resonate locally but also competes on a global scale. Moreover, being top web designers and a reliable software development provider, Zenivora provides an unparalleled depth of technical expertise.',
            'Our professional services are particularly beneficial for small businesses. With our emphasis on understanding distinct business goals, each web development project we undertake aligns seamlessly with a small business\'s vision and objectives. When a small business partners with a Pittsburgh web design company like Zenivora, they\'re not just getting a website; they\'re gaining a strategic digital ally dedicated to their growth. Trust in the prowess of Pittsburgh web design experts at Zenivora for results that truly matter.'
        ];
        $faq->lists[] = $faq3;

        $faq4 = new stdClass();
        $faq4->title = 'What is a responsive web design, and why is it important?';
        $faq4->paragraph = [
            'Responsive web design is a technique wherein a website\'s layout adjusts and displays effectively across various screen sizes, especially on mobile. Zenivora, one of the leading Pittsburgh web designers, emphasizes the importance of having a responsive design for several reasons:',
            '<strong>Mobile Devices Usage:</strong> With the increasing use of mobile devices for browsing, it\'s imperative for companies to ensure their current website is mobile-friendly. When users access sites that aren\'t optimized for their devices, they\'re likely to have a subpar experience and might leave',
            '<strong>Be Remembered:</strong>A responsive website design ensures that users have a seamless experience, creating a lasting impression. When visitors find that a website adjusts smoothly to their device, they\'re more likely to stay and engage',
            '<strong>Google Analytics</strong>This tool has shown that a significant portion of web traffic comes from mobile devices. Without a responsive design, businesses risk losing a substantial number of potential customers. Pittsburgh web designers, including our talented team at Zenivora, always stress the importance of analyzing data from Google to make informed decisions regarding website design.',
            '<strong>Web Hosting & Development Strategy</strong>While web hosting ensures that your website is accessible, having a responsive design ensures that it is accessible right. At Zenivora, when we build websites, our front-end developers prioritize responsiveness to make sure every user, regardless of their device, gets the best experience.'
        ];
        $faq->lists[] = $faq4;

        $faq5 = new stdClass();
        $faq5->title = 'How can a marketing agency enhance online visibility, traffic, and conversion rates with talented writers?';
        $faq5->paragraph = [
            'Zenivora is a top-tier website company based in Pittsburgh PA, known for its exceptional Pittsburgh web design. As a pivotal marketing agency, our team employs advanced technology to formulate a digital marketing strategy that places brands at the forefront of organic search results, driving traffic effectively.',
            'Through our web development services, we create platforms designed to enhance conversion rates, leading to more customers. In the digital marketing landscape of Pittsburgh PA, our team stands out for its commitment to excellence. With our technology and digital marketing prowess, we craft and create solutions tailored to the evolving needs of customers.',
            'In the interplay of Pittsburgh web design, web development, and digital marketing, Zenivora\'s team offers unwavering support, ensuring that businesses thrive online through a harmonized blend of strategy and execution.'
        ];
        $faq->lists[] = $faq5;

        return $faq;

    }


    /**
     * Construct Location Object
     */
    public function getLocation(): stdClass
    {
        $location = new stdClass();

        $location->text = 'Zenivora<br>Pittsburgh, PA 15108';
        $location->x = 40.4406;
        $location->y = -79.9959;
        $location->zoom = 12;

        Return $location;

    }

    /**
    * Construct Number Object
    */
    public function getNumber(): stdClass
    {
        $number = new stdClass();

        $number->text = '(412)228-0872';
        $number->call = '(412)228-0872';

        Return $number;
    }
}
