<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Company Information
    |--------------------------------------------------------------------------
    |
    | Configuration for company details, contact information, and social links.
    |
    */

    'name' => env('COMPANY_NAME', 'OneCall Technical Services'),
    'phone' => env('COMPANY_PHONE', '+971501234567'),
    'email' => env('COMPANY_EMAIL', 'info@onecall.ae'),
    
    'address' => [
        'street' => env('COMPANY_STREET', ''),
        'locality' => env('COMPANY_LOCALITY', 'Dubai'),
        'region' => env('COMPANY_REGION', 'Dubai'),
        'postal_code' => env('COMPANY_POSTAL_CODE', '00000'),
        'country' => env('COMPANY_COUNTRY', 'AE'),
    ],
    
    'geo' => [
        'latitude' => env('COMPANY_LATITUDE', '25.2048'),
        'longitude' => env('COMPANY_LONGITUDE', '55.2708'),
    ],
    
    'opening_hours' => env('COMPANY_OPENING_HOURS', 'Mo-Su 00:00-23:59'),
    'price_range' => env('COMPANY_PRICE_RANGE', '$$'),
    
    'social_links' => [
        'facebook' => env('SOCIAL_FACEBOOK', 'https://www.facebook.com/onecalldubai'),
        'instagram' => env('SOCIAL_INSTAGRAM', 'https://www.instagram.com/onecalldubai'),
        'linkedin' => env('SOCIAL_LINKEDIN', 'https://www.linkedin.com/company/onecalldubai'),
        'twitter' => env('SOCIAL_TWITTER', ''),
    ],
];
