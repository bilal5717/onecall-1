<?php

namespace App\Http\Controllers;

use App\Services\Service\ServiceService;

class PageController extends Controller
{
    protected $serviceService;

    public function __construct(ServiceService $serviceService)
    {
        $this->serviceService = $serviceService;
    }
    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Display the about page.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Display the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('pages.contact-us');
    }

    /**
     * Display the gallery page.
     *
     * @return \Illuminate\View\View
     */
    public function gallery()
    {
        return view('pages.gallery');
    }

    /**
     * Display the privacy policy page.
     *
     * @return \Illuminate\View\View
     */
    public function privacy()
    {
        return view('pages.privacy');
    }

    /**
     * Display the terms page.
     *
     * @return \Illuminate\View\View
     */
    public function terms()
    {
        return view('pages.terms');
    }

    /**
     * Display the sitemap page.
     *
     * @return \Illuminate\View\View
     */
    public function sitemap()
    {
        $services = $this->serviceService->getAllServices();
        
        $sitemapData = [
            'main_pages' => [
                [
                    'name' => 'Home',
                    'url' => route('home'),
                    'description' => 'OneCall Technical Services - Professional Home Services in Dubai',
                ],
                [
                    'name' => 'About Us',
                    'url' => route('about'),
                    'description' => 'Learn about OneCall Technical Services and our commitment to excellence',
                ],
                [
                    'name' => 'Services',
                    'url' => route('services.index'),
                    'description' => 'Browse all our professional home services',
                ],
                [
                    'name' => 'Contact Us',
                    'url' => route('contact'),
                    'description' => 'Get in touch with our team for service inquiries',
                ],
                [
                    'name' => 'Gallery',
                    'url' => route('gallery'),
                    'description' => 'View our completed projects and work portfolio',
                ],
            ],
            'services' => $services,
            'legal_pages' => [
                [
                    'name' => 'Privacy Policy',
                    'url' => route('privacy'),
                    'description' => 'Our privacy policy and data protection practices',
                ],
                [
                    'name' => 'Terms & Conditions',
                    'url' => route('terms'),
                    'description' => 'Terms and conditions for using our services',
                ],
            ],
        ];

        return view('pages.sitemap', compact('sitemapData'));
    }
}
