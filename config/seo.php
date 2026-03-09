<?php

return [
    /*
    |--------------------------------------------------------------------------
    | SEO Configuration
    |--------------------------------------------------------------------------
    |
    | Default SEO meta tags and structured data configuration.
    |
    */

    'default' => [
        'title' => env('SEO_DEFAULT_TITLE', 'Professional Home Services in Dubai | OneCall Technical Services'),
        'description' => env('SEO_DEFAULT_DESCRIPTION', 'Trusted plumber, electrician, AC repair, painting, and home maintenance services in Dubai. 24/7 emergency services, licensed professionals, free estimates.'),
        'keywords' => env('SEO_DEFAULT_KEYWORDS', 'technical services dubai, plumber dubai, electrician dubai, ac repair dubai, home repair dubai, property maintenance dubai'),
    ],

    'og' => [
        'image' => env('SEO_OG_IMAGE', '/images/og-image.png'),
        'image_width' => env('SEO_OG_IMAGE_WIDTH', '1200'),
        'image_height' => env('SEO_OG_IMAGE_HEIGHT', '630'),
        'locale' => env('SEO_OG_LOCALE', 'en_AE'),
    ],

    'robots' => [
        'default' => env('SEO_ROBOTS_DEFAULT', 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1'),
    ],
];
