@extends('layouts.app')

@section('title', 'Sitemap | OneCall Technical Services - Dubai Home Services')
@section('meta_description', 'Browse our complete sitemap to find all pages, services, and information about OneCall Technical Services in Dubai.')
@section('meta_keywords', 'sitemap, OneCall Technical Services, Dubai services, site navigation')

@section('content')

<style>
.sitemap-hero {
    background: linear-gradient(135deg, rgba(62, 106, 225, 0.9), rgba(17, 29, 69, 0.9)), url('{{ asset("images/bgimages/electrical.jpg") }}');
    background-size: cover;
    background-position: center;
    min-height: 50vh;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
}

.sitemap-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 30% 30%, rgba(62, 106, 225, 0.2) 0%, transparent 70%);
}

.sitemap-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
}

.sitemap-card {
    background: rgba(255, 255, 255, 0.95);
    border: 1px solid rgba(62, 106, 225, 0.2);
    border-radius: 15px;
    padding: 2rem;
    margin-bottom: 2rem;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.sitemap-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(62, 106, 225, 0.15);
    border-color: rgba(62, 106, 225, 0.4);
}

.sitemap-card h3 {
    color: #2c3e50;
    font-size: 1.75rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    gap: 12px;
}

.sitemap-card h3 i {
    color: #3e6ae1;
    font-size: 1.5rem;
}

.sitemap-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sitemap-item {
    padding: 1rem;
    margin-bottom: 0.75rem;
    background: rgba(248, 249, 250, 0.8);
    border-radius: 10px;
    border-left: 4px solid transparent;
    transition: all 0.3s ease;
}

.sitemap-item:hover {
    background: rgba(62, 106, 225, 0.08);
    border-left-color: #3e6ae1;
    transform: translateX(5px);
}

.sitemap-item a {
    color: #2c3e50;
    text-decoration: none;
    font-weight: 600;
    font-size: 1.05rem;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: color 0.3s ease;
}

.sitemap-item a:hover {
    color: #3e6ae1;
}

.sitemap-item a i {
    color: #3e6ae1;
    font-size: 0.9rem;
}

.sitemap-item p {
    color: #5d6d7e;
    font-size: 0.9rem;
    margin: 0.5rem 0 0 0;
    padding-left: 24px;
    line-height: 1.5;
}

.service-badge {
    display: inline-block;
    background: linear-gradient(135deg, rgba(62, 106, 225, 0.1), rgba(62, 106, 225, 0.05));
    color: #3e6ae1;
    padding: 0.4rem 0.8rem;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    margin-left: 8px;
    border: 1px solid rgba(62, 106, 225, 0.2);
}

.sitemap-info-box {
    background: linear-gradient(135deg, rgba(62, 106, 225, 0.1), rgba(255, 255, 255, 0.9));
    border: 1px solid rgba(62, 106, 225, 0.2);
    border-radius: 15px;
    padding: 1.5rem;
    margin-bottom: 2rem;
    text-align: center;
}

.sitemap-info-box p {
    color: #5d6d7e;
    margin: 0;
    font-size: 0.95rem;
}

.sitemap-info-box a {
    color: #3e6ae1;
    text-decoration: none;
    font-weight: 600;
}

.sitemap-info-box a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .sitemap-hero {
        min-height: 40vh;
    }
    
    .sitemap-card {
        padding: 1.5rem;
    }
    
    .sitemap-card h3 {
        font-size: 1.5rem;
    }
}
</style>

<!-- Hero Section -->
<section class="sitemap-hero">
    <div class="container position-relative" style="z-index: 2;">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center text-white">
                <h1 class="display-4 fw-bold mb-3 animated-element">Site Map</h1>
                <p class="lead mb-0 animated-element" style="opacity: 0.95;">
                    Navigate through all pages and services on our website
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Sitemap Content -->
<section class="sitemap-section">
    <div class="container">
        <!-- Info Box -->
        <div class="sitemap-info-box">
            <p>
                <i class="bi bi-info-circle me-2" style="color: #3e6ae1;"></i>
                This sitemap provides an overview of all pages and services available on our website. 
                For search engines, please refer to our <a href="{{ route('sitemap') }}">XML sitemap</a>.
            </p>
        </div>

        <div class="row">
            <!-- Main Pages -->
            <div class="col-lg-6 mb-4">
                <div class="sitemap-card">
                    <h3>
                        <i class="bi bi-house-door-fill"></i>
                        Main Pages
                    </h3>
                    <ul class="sitemap-list">
                        @foreach($sitemapData['main_pages'] as $page)
                        <li class="sitemap-item">
                            <a href="{{ $page['url'] }}">
                                <i class="bi bi-arrow-right-circle"></i>
                                {{ $page['name'] }}
                            </a>
                            <p>{{ $page['description'] }}</p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Services -->
            <div class="col-lg-6 mb-4">
                <div class="sitemap-card">
                    <h3>
                        <i class="bi bi-tools"></i>
                        Our Services
                    </h3>
                    <ul class="sitemap-list">
                        @foreach($sitemapData['services'] as $service)
                        <li class="sitemap-item">
                            <a href="{{ route('services.' . $service['slug']) }}">
                                <i class="bi bi-arrow-right-circle"></i>
                                {{ $service['name'] }}
                                <span class="service-badge">
                                    <i class="fa {{ $service['icon'] }}"></i>
                                </span>
                            </a>
                            <p>{{ $service['description'] }}</p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <!-- Legal Pages -->
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="sitemap-card">
                    <h3>
                        <i class="bi bi-shield-check"></i>
                        Legal & Information
                    </h3>
                    <ul class="sitemap-list">
                        @foreach($sitemapData['legal_pages'] as $page)
                        <li class="sitemap-item">
                            <a href="{{ $page['url'] }}">
                                <i class="bi bi-arrow-right-circle"></i>
                                {{ $page['name'] }}
                            </a>
                            <p>{{ $page['description'] }}</p>
                        </li>
                        @endforeach
                        <li class="sitemap-item">
                            <a href="{{ route('sitemap.page') }}">
                                <i class="bi bi-arrow-right-circle"></i>
                                Sitemap
                            </a>
                            <p>Complete sitemap of all website pages</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Quick Links CTA -->
        <div class="row mt-5">
            <div class="col-lg-8 mx-auto">
                <div class="sitemap-card text-center" style="background: linear-gradient(135deg, rgba(62, 106, 225, 0.1), rgba(255, 255, 255, 0.9));">
                    <h3 style="color: #2c3e50; margin-bottom: 1rem;">
                        <i class="bi bi-telephone-fill"></i>
                        Need Help Finding Something?
                    </h3>
                    <p class="mb-4" style="color: #5d6d7e; font-size: 1.05rem;">
                        Our team is here to assist you. Contact us for any questions or service inquiries.
                    </p>
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg px-4">
                            <i class="bi bi-envelope me-2"></i>
                            Contact Us
                        </a>
                        <a href="https://wa.me/971509227536" target="_blank" rel="noopener" class="btn btn-success btn-lg px-4">
                            <i class="bi bi-telephone-fill me-2"></i>
                            WhatsApp
                        </a>
                        <a href="https://wa.me/971509227536" class="btn btn-outline-primary btn-lg px-4">
                            <i class="bi bi-telephone-fill me-2"></i>
                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animate elements on scroll
    const animatedElements = document.querySelectorAll('.animated-element');
    
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    animatedElements.forEach(el => {
        observer.observe(el);
    });
});
</script>
@endpush

@endsection
