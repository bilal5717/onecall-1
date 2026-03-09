<?php

namespace App\Providers;

use App\Services\Page\PageService;
use App\Services\Service\ServiceService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        // Share common data with all views
        View::composer('*', function ($view) {
            $pageService = app(PageService::class);
            $serviceService = app(ServiceService::class);
            
            $view->with([
                'companyInfo' => $pageService->getCompanyInfo(),
                'defaultSeoMeta' => $pageService->getDefaultSeoMeta(),
                'services' => $serviceService->getAllServices(),
                'serviceAreas' => $serviceService->getServiceAreas(),
            ]);
        });
    }
}
