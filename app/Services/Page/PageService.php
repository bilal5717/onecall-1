<?php

namespace App\Services\Page;

class PageService
{
    /**
     * Get company information.
     *
     * @return array
     */
    public function getCompanyInfo(): array
    {
        return [
            'name' => 'OneCall Technical Services',
            'phone' => '+971501234567',
            'email' => 'info@onecall.ae',
            'address' => [
                'locality' => 'Dubai',
                'region' => 'Dubai',
                'country' => 'AE',
            ],
            'opening_hours' => 'Mo-Su 00:00-23:59',
            'price_range' => '$$',
            'social_links' => [
                'facebook' => 'https://www.facebook.com/onecalldubai',
                'instagram' => 'https://www.instagram.com/onecalldubai',
                'linkedin' => 'https://www.linkedin.com/company/onecalldubai',
            ],
        ];
    }

    /**
     * Get default SEO meta data.
     *
     * @return array
     */
    public function getDefaultSeoMeta(): array
    {
        return [
            'title' => 'Professional Home Services in Dubai | OneCall Technical Services',
            'description' => 'Trusted plumber, electrician, AC repair, painting, and home maintenance services in Dubai. 24/7 emergency services, licensed professionals, free estimates.',
            'keywords' => 'technical services dubai, plumber dubai, electrician dubai, ac repair dubai, home repair dubai, property maintenance dubai',
        ];
    }
}
