<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    /**
     * Display the services listing page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pages.services');
    }

    /**
     * Display AC Ventilation service page.
     *
     * @return \Illuminate\View\View
     */
    public function acVentilation()
    {
        return view('pages.services.ac-ventilation');
    }

    /**
     * Display Aluminum Glass Work service page.
     *
     * @return \Illuminate\View\View
     */
    public function aluminumGlass()
    {
        return view('pages.services.aluminum-glass');
    }

    /**
     * Display CCTV Cameras service page.
     *
     * @return \Illuminate\View\View
     */
    public function cctvCameras()
    {
        return view('pages.services.camera');
    }

    /**
     * Display Electrical Work service page.
     *
     * @return \Illuminate\View\View
     */
    public function electrical()
    {
        return view('pages.services.electrical');
    }

    /**
     * Display Gypsum Partition Ceiling service page.
     *
     * @return \Illuminate\View\View
     */
    public function partitionCeiling()
    {
        return view('pages.services.partition-ceiling');
    }

    /**
     * Display Painting service page.
     *
     * @return \Illuminate\View\View
     */
    public function painting()
    {
        return view('pages.services.painting');
    }

    /**
     * Display Plumber Work service page.
     *
     * @return \Illuminate\View\View
     */
    public function plumber()
    {
        return view('pages.services.plumber');
    }

    /**
     * Display Tesla Charging service page.
     *
     * @return \Illuminate\View\View
     */
    public function teslaCharging()
    {
        return view('pages.services.tesla-charging');
    }

    /**
     * Display Tiling service page.
     *
     * @return \Illuminate\View\View
     */
    public function tiling()
    {
        return view('pages.services.tiling');
    }
}
