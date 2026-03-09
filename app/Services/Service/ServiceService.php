<?php

namespace App\Services\Service;

class ServiceService
{
    /**
     * Get all available services.
     *
     * @return array
     */
    public function getAllServices(): array
    {
        return [
            [
                'slug' => 'ac-ventilation',
                'name' => 'AC Ventilation',
                'icon' => 'fa-snowflake',
                'description' => 'Professional AC repair and ventilation services',
            ],
            [
                'slug' => 'aluminum-glass-work',
                'name' => 'Aluminum & Glass Work',
                'icon' => 'fa-window-maximize',
                'description' => 'Custom aluminum windows, doors, and glass installations',
            ],
            [
                'slug' => 'cctv-cameras',
                'name' => 'CCTV Cameras',
                'icon' => 'fa-video',
                'description' => 'Professional CCTV camera installation and maintenance',
            ],
            [
                'slug' => 'electric-work-in-dubai',
                'name' => 'Electrical Services',
                'icon' => 'fa-bolt',
                'description' => 'Licensed electrical work and repairs',
            ],
            [
                'slug' => 'gypsum-partition-ceiling-work-in-dubai',
                'name' => 'Gypsum Partition & Ceiling',
                'icon' => 'fa-building',
                'description' => 'Professional gypsum partition and ceiling installations',
            ],
            [
                'slug' => 'painting',
                'name' => 'Painting Services',
                'icon' => 'fa-paint-roller',
                'description' => 'Interior and exterior painting services',
            ],
            [
                'slug' => 'plumber-work-in-dubai',
                'name' => 'Plumbing Services',
                'icon' => 'fa-tint',
                'description' => 'Expert plumbing repairs and installations',
            ],
            [
                'slug' => 'tesla-charging',
                'name' => 'Tesla Charging',
                'icon' => 'fa-charging-station',
                'description' => 'Tesla charger installation and maintenance',
            ],
            [
                'slug' => 'tiling-in-dubai',
                'name' => 'Tiling Services',
                'icon' => 'fa-th',
                'description' => 'Professional tiling for kitchens, bathrooms, and floors',
            ],
        ];
    }

    /**
     * Get service by slug.
     *
     * @param string $slug
     * @return array|null
     */
    public function getServiceBySlug(string $slug): ?array
    {
        $services = $this->getAllServices();
        
        foreach ($services as $service) {
            if ($service['slug'] === $slug) {
                return $service;
            }
        }
        
        return null;
    }

    /**
     * Get service areas in Dubai.
     *
     * @return array
     */
    public function getServiceAreas(): array
    {
        return [
            'Dubai Marina',
            'JLT',
            'Business Bay',
            'Al Barsha',
            'Deira',
            'Downtown',
            'JVC',
            'Arabian Ranches',
            'Palm Jumeirah',
            'Jumeirah',
            'Silicon Oasis',
            'Motor City',
            'Discovery Gardens',
            'International City',
            'Al Karama',
            'Al Quoz',
            'Dubai Sports City',
            'Dubai Hills',
            'Al Sufouh',
            'Al Satwa',
            'Al Wasl',
            'Umm Suqeim',
            'Al Nahda',
            'Dubai Silicon',
            'Internet City',
            'Media City',
            'Knowledge Park',
            'Healthcare City',
            'Creek Harbour',
            'Festival City',
            'Design District',
            'Production City',
            'Outsource City',
            'Studio City',
        ];
    }
}
