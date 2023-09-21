<?php

namespace App\Services;

use App\Helpers\SchemaHelper;
use stdClass;

class HomeService implements LocationServiceInterface
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
            'faq' => $this->getfaq(),
            'schema' => SchemaHelper::getSchema($this->getfaq()->lists),
        ];
    }

    /**
    * Construct Meta Data
    */
    public function getMetaData(): stdClass
    {
        $data = new stdClass();

        $data->title = 'Zenivora Website Designers';
        $data->description = 'Elevate your brand with Zenivora, the leading team of Website Designers. Expertise in responsive design, SEO, and e-commerce solutions.';

        return $data;
    }

    /**
     * Construct About Data
     */
    public function getAbout(): stdClass
    {
        $about = new stdClass();

        $about->title = 'Trusted by <strong class="bg-gradient-to-r from-brand-primary to-blue-400 text-transparent bg-clip-text">Major Brands</strong> you know and love';

        return $about;
    }

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
        $perf2->title = 'At your local Zenivora, performance is a priority.';
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
        $sec2->title = 'Security is a priority at your local Zenivora!';
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

        $seo->title = 'Local <strong class="bg-gradient-to-r from-brand-primary to-blue-400 text-transparent bg-clip-text">SEO Expert</strong> near you.';
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

    /**
     * Construct FAQ Object
     */
    public function getFaq()
    {
        $faq = new stdClass();
        $faq->title = 'Frequently Asked <strong class="bg-gradient-to-r from-brand-primary to-blue-400 text-transparent bg-clip-text">Questions</strong>';
        $faq->lists = [];

        $faq1 = new stdClass();
        $faq1->title = 'What is a responsive web design, and why is it important?';
        $faq1->paragraph = [
            'Responsive web design is a crucial aspect of web development, ensuring that web pages automatically adjust and display optimally across various device sizes and screen resolutions. In modern web development practices, creating a responsive design means ensuring that a website provides a seamless user experience, whether viewed on a desktop, tablet, or smartphone.',
            'This is vital as more users access web pages on a multitude of devices. A responsive website ensures that no matter how a user accesses a site, the content and layout adapt effectively. The importance of integrating responsive design in web development cannot be overstated. In an era dominated by diverse digital devices, ensuring a website functions and appears consistently across all platforms is paramount to retaining and engaging visitors.',
        ];
        $faq->lists[] = $faq1;

        $faq2 = new stdClass();
        $faq2->title = 'How does Zenivora, a prominent player among local web designers, differentiate itself in the web design industry?';
        $faq2->paragraph = [
            'Zenivora, one of the standout group of web designers, has established a reputation for marrying creativity with functionality. In the saturated field of web designers, it\'s crucial to offer something unique, and Zenivora does just that. Unlike some other web designers, Zenivora deeply understands the local markets, crafting websites tailored to resonate with local sensibilities.',
            'This local expertise, combined with global design trends, makes them a preferred choice for many businesses. When partnering with a local web design company like Zenivora, clients can expect a harmonious blend of local insight and global design standards.',
            'In an industry teeming with web designers, Zenivora has consistently demonstrated why businesses should consider them as their go-to local web design company. Their local touch, combined with the broader skills of local web designers, ensures clients get the best of both worlds.'
        ];
        $faq->lists[] = $faq2;

        $faq3 = new stdClass();
        $faq3->title = 'What services does Zenivora provide?';
        $faq3->paragraph = [
            'Zenivora offers a range of services tailored to meet the diverse needs of businesses in today\'s digital landscape. Among their specialties is custom web design, a service that ensures clients receive a site specifically tailored to their brand and audience as well as successful digital marketing campaigns, graphic design, and social media marketing.',
            'With custom web design, Zenivora helps businesses stand out with a distinctive online presence. In addition to their custom web design services, they also provide website hosting, ensuring that not only do businesses get a new website but also a reliable platform to host it.',
            'Zenivora understands that every web design project is unique, and therefore, they also focus on crafting custom websites that address specific business objectives and user needs. By combining their expertise in custom websites and website hosting, Zenivora ensures a seamless and impactful online presence for their clients.'
        ];
        $faq->lists[] = $faq3;

        $faq4 = new stdClass();
        $faq4->title = 'What does SEO stand for in web design and development?';
        $faq4->paragraph = [
            'In the realm of web design and development, SEO (Search Engine Optimization) plays a pivotal role in enhancing online visibility. Web design companies, including top web designers, incorporate SEO practices to ensure websites not only look good but also meet your digital marketing needs.',
            'In the context of web design, the integration of SEO ensures that the websites cater to local audiences while meeting global standards. Effective web design encompasses both aesthetics and functionality, and SEO plays a pivotal role in enhancing the latter.',
            'As such, for web design specialists and others in the industry, merging web design principles with SEO strategies is crucial to delivering a holistic digital experience and achieving online visibility.'
        ];
        $faq->lists[] = $faq4;

        $faq5 = new stdClass();
        $faq5->title = 'Why is it important to have a local web design agency?';
        $faq5->paragraph = [
            'Choosing a local web design agency like Zenivora can offer numerous advantages in a digitally driven world. Firstly, Zenivora brings an intrinsic understanding of local market dynamics, preferences, and cultural nuances that can significantly influence the design process. When you opt for Zenivora, a local business, you\'re securing a partner that understands the local business ecosystem, ensuring your website resonates with your immediate audience.',
            'Web development, though a technical process, is deeply influenced by local market insights, which a web designer from Zenivora can adeptly incorporate into your project. Opting for website design services from a local web design agency also means quicker communication, easier in-person meetings, and real-time feedback. Furthermore, a local web design firm like Zenivora ensures that website design services are tailored not just to global standards but are fine-tuned to appeal to local clientele.',
            'In essence, partnering with a local web design agency like Zenivora ensures that you\'re not just getting a website but a platform optimized for local success, embodying the best of local web design.'
        ];
        $faq->lists[] = $faq5;

        $faq6 = new stdClass();
        $faq6->title = 'Who do you use as your website host?';
        $faq6->paragraph = [
            'At Zenivora, for our own website and the diverse website solutions we provide, we trust Hostinger for our web hosting needs. Web hosting is a critical component in ensuring consistent website performance and uptime. With Hostinger, we\'re able to offer our clients robust and reliable web hosting services, ensuring their sites run smoothly.',
            'Our choice of web hosting also plays a pivotal role in efficient website maintenance. The tools and support provided by Hostinger allow our web developers to swiftly address any issues or implement updates. When a web developer from Zenivora works on a project, they have the peace of mind of knowing that the web hosting backend, powered by Hostinger, will seamlessly support their efforts, ensuring optimal outcomes for our clients.',
            'In summary, for reliable website solutions and maintenance, our choice of web hosting is integral, and Hostinger aligns perfectly with Zenivora\'s commitment to excellence.'
        ];
        $faq->lists[] = $faq6;

        $faq7 = new stdClass();
        $faq7->title = 'What if I don\'t have a design in mind?';
        $faq7->paragraph = [
            'If you don\'t have a design in mind, that\'s not a problem at all! This is a common scenario many clients find themselves in when they first approach a web design company like Zenivora. The expertise of a web designer is not just in creating visuals, but also in guiding and advising clients to craft a vision that suits their needs.',
            'Zenivora\'s seasoned web designers can help bring clarity to your goals, ensuring the web design process is smooth from start to finish. Engaging with a locally-owned web design company, especially one with the reputation of Zenivora, means accessing top-tier local web design services. The web design process at Zenivora is comprehensive, bridging the gap between initial ideas and their realization through web development.',
            'By collaborating with a web designer from our renowned web design company, you\'ll be guided through every step, from brainstorming to final execution. It\'s all part of the exceptional service you can expect when partnering with a local web agency like Zenivora. In essence, even if you start without a clear design vision, with the local web design services of Zenivora, you\'ll find the path to a website that truly represents your brand and resonates with your audience.'
        ];
        $faq->lists[] = $faq7;

        return $faq;

    }
}
