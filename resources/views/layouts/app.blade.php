<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">

      <!-- Primary Meta Tags -->
    <title>@yield('title', 'Professional Home Services in Dubai | OneCall Technical Services')</title>
    <meta name="description" content="@yield('meta_description', 'Trusted plumber, electrician, AC repair, painting, and home maintenance services in Dubai. 24/7 emergency services, licensed professionals, free estimates.')">
    <meta name="keywords" content="@yield('meta_keywords', 'technical services dubai, plumber dubai, electrician dubai, ac repair dubai, home repair dubai, property maintenance dubai')">
    
    <!-- SEO Meta Tags -->
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="author" content="OneCall Technical Services">
    <meta name="copyright" content="OneCall Technical Services">
    <meta name="language" content="English">
    <meta name="geo.region" content="AE-DU">
    <meta name="geo.placename" content="Dubai">
    <meta name="geo.position" content="25.2048;55.2708">
    <meta name="ICBM" content="25.2048, 55.2708">
    <meta name="rating" content="general">
    <meta name="distribution" content="global">
    <meta name="revisit-after" content="7 days">
    
    <!-- Viewport for Responsive Design -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, viewport-fit=cover">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Alternate Languages (if applicable) -->
    <link rel="alternate" hreflang="en" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="x-default" href="{{ url()->current() }}">
     <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#0057b3">
    <meta name="msapplication-TileColor" content="#0057b3">
    <meta name="theme-color" content="#0057b3">
     <!-- Open Graph / Facebook -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Professional Home Services in Dubai | OneCall Technical Services')">
    <meta property="og:description" content="@yield('meta_description', 'Trusted plumber, electrician, AC repair, painting, and home maintenance services in Dubai.')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-image.png'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="@yield('og_image_alt', 'OneCall Technical Services - Professional Home Services in Dubai')">
    <meta property="og:locale" content="en_AE">
    <meta property="og:site_name" content="OneCall Technical Services">
    <meta property="og:locale:alternate" content="en_US">
    
     <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('title', 'Professional Home Services in Dubai | OneCall Technical Services')">
    <meta name="twitter:description" content="@yield('meta_description', 'Trusted plumber, electrician, AC repair, painting, and home maintenance services in Dubai.')">
    <meta name="twitter:image" content="@yield('og_image', asset('images/og-image.png'))">
    <meta name="twitter:image:alt" content="@yield('og_image_alt', 'OneCall Technical Services')">
    <meta name="twitter:site" content="@OneCallDubai">
    <meta name="twitter:creator" content="@OneCallDubai">
    
  <!-- Structured Data / JSON-LD - Default Organization Schema -->
    @hasSection('schema')
        @yield('schema')
    @else
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HomeAndConstructionBusiness",
        "name": "OneCall Technical Services",
        "description": "Professional home and construction services in Dubai including plumbing, electrical work, AC repair, painting, and maintenance services.",
        "url": "{{ url('/') }}",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('images/logo/logo.png') }}",
            "width": 200,
            "height": 60
        },
        "telephone": "+971509227536",
        "email": "{{ config('company.email', 'info@onecall.ae') }}",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "{{ config('company.address.street', '') }}",
            "addressLocality": "Dubai",
            "addressRegion": "Dubai",
            "postalCode": "{{ config('company.address.postal_code', '') }}",
            "addressCountry": "AE"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "{{ config('company.geo.latitude', '25.2048') }}",
            "longitude": "{{ config('company.geo.longitude', '55.2708') }}"
        },
        "openingHours": "Mo-Su 00:00-23:59",
        "priceRange": "$$",
        "paymentAccepted": "Cash, Credit Card, Bank Transfer",
        "currenciesAccepted": "AED",
        "sameAs": [
            "https://www.facebook.com/onecalldubai",
            "https://www.instagram.com/onecalldubai",
            "https://www.linkedin.com/company/onecalldubai"
        ],
        "areaServed": [
            {
                "@type": "City",
                "name": "Dubai",
                "addressRegion": "Dubai",
                "addressCountry": "AE"
            }
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Technical Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Electrical Services",
                        "description": "Professional electrical installation, repair, and maintenance"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Plumbing Services",
                        "description": "Expert plumbing repairs and installations"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "AC Repair Services",
                        "description": "AC installation, repair, and maintenance"
                    }
                }
            ]
        }
    }
    </script>
    @endif

<!-- Preload critical CSS -->
    <link rel="preload" href="{{ asset('css/bootstrap.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"></noscript>
    
   <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- Bootstrap 5 CSS -->
   <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"></noscript>
    <!-- Bootstrap Icons -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" media="print" onload="this.media='all'">
    
    @stack('styles')

    <!-- Google Analytics -->
    @if(config('services.google.analytics_id'))
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google.analytics_id') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ config('services.google.analytics_id') }}', {
            'anonymize_ip': true,
            'allow_google_signals': false,
            'allow_ad_personalization_signals': false
        });
    </script>
    @endif
</head>
<body>
@include('layouts.header')

 <!-- Main Content -->
    <main id="main-content" role="main" class="flex-grow-1">
        @yield('content')
    </main>
    

    @include('layouts.footer')
    
    <!-- Floating WhatsApp and Call Buttons -->
    @include('components.floating-buttons')

    <!-- Get Quote Modal (global) -->
    @include('components.quote-modal')
    
<!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" 
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" 
            crossorigin="anonymous" 
            defer></script>
 <!-- Bootstrap 4 (for compatibility) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" 
            crossorigin="anonymous" 
            defer></script>
             <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
            crossorigin="anonymous" 
            defer></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
<script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
@stack('scripts')



 <!-- Custom Scripts -->
    <script>
        // Performance monitoring
        window.addEventListener('load', function() {
            // Mark all images as loaded
            document.querySelectorAll('img').forEach(img => {
                if (img.complete) {
                    img.classList.add('loaded');
                } else {
                    img.addEventListener('load', function() {
                        this.classList.add('loaded');
                    });
                }
            });
            
            // Remove loading class from body
            document.body.classList.add('loaded');
            
            // Performance metrics (optional)
            if ('performance' in window) {
                const perfData = window.performance.timing;
                const pageLoadTime = perfData.loadEventEnd - perfData.navigationStart;
                console.log('Page loaded in ' + pageLoadTime + 'ms');
            }
        });
        
        // Error handling
        window.addEventListener('error', function(e) {
            console.error('Script error:', e.message, 'at', e.filename, ':', e.lineno);
            return true;
        }, true);
        
        // Service Worker registration for PWA (optional)
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/sw.js').then(function(registration) {
                    console.log('ServiceWorker registration successful with scope: ', registration.scope);
                }, function(err) {
                    console.log('ServiceWorker registration failed: ', err);
                });
            });
        }
        
        // Lazy loading for non-critical images
        document.addEventListener('DOMContentLoaded', function() {
            const lazyImages = [].slice.call(document.querySelectorAll('img[data-src]'));
            
            if ('IntersectionObserver' in window) {
                const lazyImageObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            const lazyImage = entry.target;
                            lazyImage.src = lazyImage.dataset.src;
                            lazyImage.classList.add('loaded');
                            lazyImageObserver.unobserve(lazyImage);
                        }
                    });
                });
                
                lazyImages.forEach(function(lazyImage) {
                    lazyImageObserver.observe(lazyImage);
                });
            } else {
                // Fallback for older browsers
                lazyImages.forEach(function(lazyImage) {
                    lazyImage.src = lazyImage.dataset.src;
                });
            }
        });
    </script>

    <!-- Get Quote Modal: form submit to WhatsApp + prevent default on quote links -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Prevent anchor links from scrolling when opening modal
        document.querySelectorAll('a[data-bs-target="#quoteModal"]').forEach(function(a) {
            a.addEventListener('click', function(e) { e.preventDefault(); });
        });

        var quoteForm = document.getElementById('quoteForm');
        if (quoteForm) {
            quoteForm.addEventListener('submit', function(e) {
                e.preventDefault();
                if (!this.checkValidity()) {
                    e.stopPropagation();
                    this.classList.add('was-validated');
                    return;
                }
                var submitBtn = this.querySelector('button[type="submit"]');
                var originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<i class="fa fa-spinner fa-spin me-2"></i> Processing...';
                submitBtn.disabled = true;

                var firstName = document.getElementById('quoteFirstName').value.trim();
                var lastName = document.getElementById('quoteLastName').value.trim();
                var email = document.getElementById('quoteEmail').value.trim();
                var phone = document.getElementById('quotePhone').value.trim();
                var serviceSelect = document.getElementById('quoteServiceType');
                var serviceText = serviceSelect.options[serviceSelect.selectedIndex].text;
                var areaSelect = document.getElementById('quoteArea');
                var areaText = areaSelect.options[areaSelect.selectedIndex].text;
                var message = document.getElementById('quoteMessage').value.trim();

                var whatsappMsg = '*Quote Request - OneCall Technical Services*\n\n' +
                    '*Contact:*\n' + firstName + ' ' + lastName + '\n' +
                    '*Phone:* ' + phone + '\n' +
                    '*Email:* ' + email + '\n\n' +
                    '*Service:* ' + serviceText + '\n' +
                    '*Area:* ' + areaText + '\n\n' +
                    '*Details:*\n' + message + '\n\n' +
                    '━━━━━━━━━━━━━━━━━━━━\n' +
                    'Submitted: ' + new Date().toLocaleString('en-GB', { dateStyle: 'medium', timeStyle: 'short' });

                var whatsappUrl = 'https://wa.me/971509227536?text=' + encodeURIComponent(whatsappMsg);

                submitBtn.innerHTML = '<i class="fab fa-whatsapp me-2"></i> Opening WhatsApp...';
                setTimeout(function() {
                    window.open(whatsappUrl, '_blank');
                    submitBtn.innerHTML = '<i class="fa fa-check me-2"></i> Sent!';
                    submitBtn.style.background = 'linear-gradient(135deg, #25D366, #128C7E)';
                    submitBtn.style.color = 'white';
                    var modalEl = document.getElementById('quoteModal');
                    if (modalEl && typeof bootstrap !== 'undefined') {
                        var modal = bootstrap.Modal.getInstance(modalEl);
                        if (modal) modal.hide();
                    }
                    quoteForm.reset();
                    quoteForm.classList.remove('was-validated');
                    setTimeout(function() {
                        submitBtn.innerHTML = originalText;
                        submitBtn.style.background = '';
                        submitBtn.style.color = '';
                        submitBtn.disabled = false;
                    }, 2000);
                }, 500);
                this.classList.add('was-validated');
            });
        }
    });
    </script>
    
 <!-- Cookie Consent (optional) -->
    <script>
        // Simple cookie consent
        if (!localStorage.getItem('cookiesAccepted')) {
            const cookieBanner = document.createElement('div');
            cookieBanner.style.cssText = `
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                background: #333;
                color: white;
                padding: 15px;
                z-index: 9999;
                text-align: center;
            `;
            cookieBanner.innerHTML = `
                <p style="margin: 0;">We use cookies to enhance your experience. By continuing to visit this site you agree to our use of cookies.</p>
                <button onclick="acceptCookies()" style="margin-left: 15px; padding: 5px 15px; background: #007bff; color: white; border: none; cursor: pointer;">Accept</button>
            `;
            document.body.appendChild(cookieBanner);
            
            window.acceptCookies = function() {
                localStorage.setItem('cookiesAccepted', 'true');
                cookieBanner.remove();
            };
        }
    </script>
</body>
</html>
