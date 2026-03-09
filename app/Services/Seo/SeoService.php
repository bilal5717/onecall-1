<?php

namespace App\Services\Seo;

class SeoService
{
    /**
     * Get SEO data for a specific page type
     */
    public function getPageSeo(string $pageType, array $options = []): array
    {
        $seoData = [
            'title' => '',
            'description' => '',
            'keywords' => '',
            'og_image' => asset('images/og-image.png'),
            'schema' => []
        ];

        switch ($pageType) {
            case 'home':
                $seoData = $this->getHomeSeo();
                break;
            case 'about':
                $seoData = $this->getAboutSeo();
                break;
            case 'contact':
                $seoData = $this->getContactSeo();
                break;
            case 'services':
                $seoData = $this->getServicesSeo();
                break;
            case 'gallery':
                $seoData = $this->getGallerySeo();
                break;
            case 'privacy':
                $seoData = $this->getPrivacySeo();
                break;
            case 'terms':
                $seoData = $this->getTermsSeo();
                break;
            case 'sitemap':
                $seoData = $this->getSitemapSeo();
                break;
            case 'service':
                $seoData = $this->getServiceSeo($options['service'] ?? []);
                break;
        }

        return $seoData;
    }

    /**
     * Get SEO data for home page
     */
    private function getHomeSeo(): array
    {
        return [
            'title' => 'Professional Home Services in Dubai | OneCall Technical Services',
            'description' => 'Expert plumber, electrician, AC repair, painting, and home maintenance services in Dubai. 24/7 emergency services, licensed professionals, free estimates. Serving all Dubai areas.',
            'keywords' => 'home services dubai, plumber dubai, electrician dubai, ac repair dubai, painting services dubai, tesla charger installation dubai, cctv installation dubai, gypsum work dubai, aluminum glass work dubai, tiling dubai, emergency plumber dubai, licensed electrician dubai, ac maintenance dubai, home repair dubai, property maintenance dubai',
            'og_image' => asset('images/og-image.png'),
            'schema' => $this->getHomeSchema()
        ];
    }

    /**
     * Get SEO data for about page
     */
    private function getAboutSeo(): array
    {
        return [
            'title' => 'About OneCall Technical Services | Professional Home Services in Dubai',
            'description' => 'Learn about OneCall Technical Services - Dubai\'s trusted provider of electrical, plumbing, AC, and complete home maintenance solutions. 24/7 emergency services, skilled technicians, and customer satisfaction guaranteed.',
            'keywords' => 'about OneCall Technical Services, Dubai home services, electrical services Dubai, plumbing services Dubai, AC maintenance Dubai, property maintenance Dubai, trusted technicians Dubai, home repair Dubai, professional contractors Dubai',
            'og_image' => asset('images/services/about-cover.png'),
            'schema' => $this->getAboutSchema()
        ];
    }

    /**
     * Get SEO data for contact page
     */
    private function getContactSeo(): array
    {
        return [
            'title' => 'Contact OneCall Technical Services | Professional Home Services in Dubai',
            'description' => 'Contact our professional technicians in Dubai for electrical, plumbing, AC, and home maintenance services. 24/7 emergency services, online booking, and free estimates available.',
            'keywords' => 'contact OneCall Dubai, emergency electrician Dubai, plumbing services Dubai, AC repair contact, home maintenance Dubai, technical services contact, Dubai service provider contact',
            'og_image' => asset('images/og-image.png'),
            'schema' => $this->getContactSchema()
        ];
    }

    /**
     * Get SEO data for services listing page
     */
    private function getServicesSeo(): array
    {
        return [
            'title' => 'Our Services | Professional Technical Services in Dubai | OneCall',
            'description' => 'Comprehensive technical services in Dubai: electrical work, plumbing, AC repair, painting, tiling, Tesla charger installation, CCTV, gypsum work, and aluminum glass services. Licensed professionals, 24/7 emergency support.',
            'keywords' => 'technical services dubai, electrical services dubai, plumbing services dubai, ac services dubai, painting services dubai, tiling services dubai, tesla charger dubai, cctv installation dubai, gypsum work dubai, aluminum glass dubai, home services dubai',
            'og_image' => asset('images/og-image.png'),
            'schema' => $this->getServicesSchema()
        ];
    }

    /**
     * Get SEO data for gallery page
     */
    private function getGallerySeo(): array
    {
        return [
            'title' => 'Our Work Gallery | Professional Services Portfolio | OneCall Dubai',
            'description' => 'View our completed projects and work portfolio. Professional electrical, plumbing, AC, painting, and home maintenance services across Dubai.',
            'keywords' => 'OneCall gallery, Dubai service portfolio, electrical work gallery, plumbing projects dubai, ac installation gallery, home renovation dubai, service projects dubai',
            'og_image' => asset('images/og-image.png'),
            'schema' => []
        ];
    }

    /**
     * Get SEO data for privacy page
     */
    private function getPrivacySeo(): array
    {
        return [
            'title' => 'Privacy Policy | OneCall Technical Services - Dubai',
            'description' => 'Read our Privacy Policy to understand how OneCall Technical Services collects, uses, and protects your personal information in Dubai.',
            'keywords' => 'privacy policy, data protection, OneCall Dubai, privacy statement, personal information, data security',
            'og_image' => asset('images/og-image.png'),
            'schema' => []
        ];
    }

    /**
     * Get SEO data for terms page
     */
    private function getTermsSeo(): array
    {
        return [
            'title' => 'Terms of Services | OneCall Technical Services - Dubai',
            'description' => 'Read our Terms of Services for OneCall Technical Services. Understand our service terms, conditions, warranties, and policies for technical services in Dubai.',
            'keywords' => 'terms of service, terms and conditions, OneCall Dubai, service terms, technical services terms, Dubai service conditions',
            'og_image' => asset('images/og-image.png'),
            'schema' => []
        ];
    }

    /**
     * Get SEO data for sitemap page
     */
    private function getSitemapSeo(): array
    {
        return [
            'title' => 'Sitemap | OneCall Technical Services - Dubai Home Services',
            'description' => 'Browse our complete sitemap to find all pages, services, and information about OneCall Technical Services in Dubai.',
            'keywords' => 'sitemap, OneCall Technical Services, Dubai services, site navigation',
            'og_image' => asset('images/og-image.png'),
            'schema' => []
        ];
    }

    /**
     * Get SEO data for individual service pages
     */
    private function getServiceSeo(array $service): array
    {
        $serviceName = $service['name'] ?? '';
        $serviceSlug = $service['slug'] ?? '';
        
        $seoData = [
            'title' => "{$serviceName} in Dubai | Professional Services | OneCall",
            'description' => "Professional {$serviceName} in Dubai. Expert technicians, licensed professionals, 24/7 emergency services. Free estimates and guaranteed satisfaction.",
            'keywords' => strtolower("{$serviceName} dubai, {$serviceSlug} dubai, professional {$serviceName}, dubai {$serviceName} services"),
            'og_image' => asset('images/og-image.png'),
            'schema' => $this->getServiceSchema($service)
        ];

        // Service-specific SEO
        $serviceSeoMap = [
            'electric-work-in-dubai' => [
                'title' => 'Professional Electrical Services in Dubai | Licensed Electrician | OneCall',
                'description' => 'Expert electrical services in Dubai: wiring, rewiring, lighting installation, circuit breaker repair, DB box installation, smart home wiring, electrical maintenance. DEWA certified electricians.',
                'keywords' => 'electrician Dubai, electrical services Dubai, wiring Dubai, lighting installation Dubai, circuit breaker repair Dubai, DB box installation Dubai, electrical maintenance Dubai, DEWA certified electrician Dubai, emergency electrician Dubai'
            ],
            'plumber-work-in-dubai' => [
                'title' => 'Professional Plumbing Services in Dubai | Expert Plumber | OneCall',
                'description' => 'Expert plumbing services in Dubai: water heater repair, drain cleaning, pipe installation, bathroom plumbing, kitchen plumbing, gas line repair. Licensed plumbers, 24/7 emergency service.',
                'keywords' => 'plumber Dubai, plumbing services Dubai, water heater repair Dubai, drain cleaning Dubai, pipe installation Dubai, bathroom plumbing Dubai, kitchen plumbing Dubai, emergency plumber Dubai, licensed plumber Dubai'
            ],
            'ac-ventilation' => [
                'title' => 'AC Repair & Maintenance Services in Dubai | Expert AC Technician | OneCall',
                'description' => 'Professional AC repair, installation, and maintenance services in Dubai. Gas charging, duct cleaning, emergency AC service. All brands serviced: Daikin, LG, Samsung, Midea. 24/7 support.',
                'keywords' => 'AC repair Dubai, AC installation Dubai, AC maintenance Dubai, gas charging Dubai, duct cleaning Dubai, emergency AC service Dubai, Daikin repair Dubai, LG AC service Dubai, Samsung AC repair Dubai'
            ],
            'tesla-charging' => [
                'title' => 'Tesla Charger Installation in Dubai | Home & Commercial EV Charging | OneCall',
                'description' => 'Professional Tesla charger installation in Dubai. Wall Connector, Destination Charger, Supercharger installations for homes, villas, offices, and commercial properties. Certified installers.',
                'keywords' => 'Tesla charger installation Dubai, EV charger installation Dubai, home charging station Dubai, Tesla Wall Connector Dubai, electric vehicle charging Dubai, EV charging station Dubai, Tesla Model 3 charger Dubai'
            ],
            'cctv-cameras' => [
                'title' => 'CCTV Camera Installation in Dubai | Security Camera Systems | OneCall',
                'description' => 'Professional CCTV camera installation and security systems in Dubai. IP cameras, HD cameras, wireless systems for homes, offices, and commercial properties. Free site survey.',
                'keywords' => 'CCTV installation Dubai, security cameras Dubai, IP cameras Dubai, HD cameras Dubai, wireless CCTV Dubai, security systems Dubai, surveillance cameras Dubai, home security Dubai'
            ],
            'painting' => [
                'title' => 'Professional Painting Services in Dubai | Interior & Exterior Painting | OneCall',
                'description' => 'Expert painting services in Dubai: interior painting, exterior painting, wall painting, apartment painting, villa painting. Quality paints, professional finish, free estimates.',
                'keywords' => 'painting services Dubai, interior painting Dubai, exterior painting Dubai, wall painting Dubai, apartment painting Dubai, villa painting Dubai, professional painters Dubai, house painting Dubai'
            ],
            'tiling-in-dubai' => [
                'title' => 'Professional Tiling Services in Dubai | Floor & Wall Tiles | OneCall',
                'description' => 'Expert tiling services in Dubai: floor tiling, wall tiling, bathroom tiling, kitchen tiling, ceramic tiles, porcelain tiles, marble tiles. Professional installation, free estimates.',
                'keywords' => 'tiling services Dubai, floor tiling Dubai, wall tiling Dubai, bathroom tiling Dubai, kitchen tiling Dubai, ceramic tiles Dubai, porcelain tiles Dubai, marble tiles Dubai, tile installation Dubai'
            ],
            'gypsum-partition-ceiling-work-in-dubai' => [
                'title' => 'Gypsum Partition & Ceiling Work in Dubai | Professional Installation | OneCall',
                'description' => 'Professional gypsum partition and ceiling installation in Dubai. False ceiling, suspended ceiling, partition walls, decorative ceilings. Expert installation, free consultation.',
                'keywords' => 'gypsum work Dubai, partition work Dubai, ceiling work Dubai, false ceiling Dubai, suspended ceiling Dubai, gypsum partition Dubai, decorative ceiling Dubai, ceiling installation Dubai'
            ],
            'aluminum-glass-work' => [
                'title' => 'Aluminum & Glass Work in Dubai | Windows, Doors & Partitions | OneCall',
                'description' => 'Professional aluminum and glass work in Dubai: window installation, glass partitions, curtain walls, shop fronts, glass repair. Expert installation, free site survey.',
                'keywords' => 'aluminum work Dubai, glass work Dubai, window installation Dubai, glass partitions Dubai, curtain walls Dubai, shop front Dubai, glass repair Dubai, aluminum windows Dubai'
            ]
        ];

        if (isset($serviceSeoMap[$serviceSlug])) {
            $seoData = array_merge($seoData, $serviceSeoMap[$serviceSlug]);
        }

        return $seoData;
    }

    /**
     * Get schema markup for home page
     */
    private function getHomeSchema(): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'HomeAndConstructionBusiness',
            'name' => 'OneCall Technical Services',
            'description' => 'Professional home and construction services in Dubai',
            'url' => url('/'),
            'logo' => asset('images/logo/logo.png'),
            'telephone' => '+971509227536',
            'email' => config('company.email'),
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Dubai',
                'addressRegion' => 'Dubai',
                'addressCountry' => 'AE'
            ],
            'openingHours' => 'Mo-Su 00:00-23:59',
            'priceRange' => '$$',
            'areaServed' => [
                'Dubai Marina', 'JLT', 'Business Bay', 'Al Barsha', 'Deira',
                'Downtown Dubai', 'JVC', 'Arabian Ranches', 'Palm Jumeirah'
            ]
        ];
    }

    /**
     * Get schema markup for about page
     */
    private function getAboutSchema(): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'AboutPage',
            'mainEntity' => [
                '@type' => 'Organization',
                'name' => 'OneCall Technical Services',
                'description' => 'Professional home services provider in Dubai'
            ]
        ];
    }

    /**
     * Get schema markup for contact page
     */
    private function getContactSchema(): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'ContactPage',
            'mainEntity' => [
                '@type' => 'Organization',
                'name' => 'OneCall Technical Services',
                'telephone' => '+971509227536',
                'email' => config('company.email')
            ]
        ];
    }

    /**
     * Get schema markup for services page
     */
    private function getServicesSchema(): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'serviceType' => 'Technical Services',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'OneCall Technical Services'
            ],
            'areaServed' => [
                '@type' => 'City',
                'name' => 'Dubai'
            ]
        ];
    }

    /**
     * Get schema markup for individual service pages
     */
    private function getServiceSchema(array $service): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'serviceType' => $service['name'] ?? '',
            'provider' => [
                '@type' => 'LocalBusiness',
                'name' => 'OneCall Technical Services',
                'telephone' => '+971509227536',
                'address' => [
                    '@type' => 'PostalAddress',
                    'addressLocality' => 'Dubai',
                    'addressRegion' => 'Dubai',
                    'addressCountry' => 'AE'
                ]
            ],
            'areaServed' => [
                '@type' => 'City',
                'name' => 'Dubai'
            ],
            'description' => $service['description'] ?? ''
        ];
    }
}
