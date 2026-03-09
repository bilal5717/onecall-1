{!! '<' . '?xml version="1.0" encoding="UTF-8"?>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @php
        $base = rtrim(config('app.url'), '/');
        $urls = [
            ['loc' => route('home'), 'changefreq' => 'weekly', 'priority' => '1.0'],
            ['loc' => route('services'), 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['loc' => route('gallery'), 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => route('about'), 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => route('contact'), 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['loc' => route('services.ac-ventilation'), 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => route('services.aluminum-glass-work'), 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => route('services.cctv-cameras'), 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => route('services.electric-work-in-dubai'), 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => route('services.gypsum-partition-ceiling-work-in-dubai'), 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => route('services.painting'), 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => route('services.plumber-work-in-dubai'), 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => route('services.tesla-charging'), 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => route('services.tiling-in-dubai'), 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => route('privacy'), 'changefreq' => 'yearly', 'priority' => '0.3'],
            ['loc' => route('terms'), 'changefreq' => 'yearly', 'priority' => '0.3'],
            ['loc' => route('sitemap.page'), 'changefreq' => 'yearly', 'priority' => '0.3'],
        ];
        $lastmod = now()->toAtomString();
    @endphp

    @foreach ($urls as $item)
    <url>
        <loc>{{ $item['loc'] }}</loc>
        <lastmod>{{ $lastmod }}</lastmod>
        <changefreq>{{ $item['changefreq'] }}</changefreq>
        <priority>{{ $item['priority'] }}</priority>
    </url>
    @endforeach
</urlset>
