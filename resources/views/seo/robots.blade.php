User-agent: *
Allow: /

Disallow: /admin/
Disallow: /dashboard/
Disallow: /cgi-bin/

Sitemap: {{ rtrim(config('app.url'), '/') }}/sitemap.xml
