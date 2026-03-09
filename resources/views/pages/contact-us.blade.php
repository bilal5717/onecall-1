@extends('layouts.app')

@section('title', 'Contact OneCall Technical Services | Professional Home Services in Dubai')
@section('meta_description', 'Contact our professional technicians in Dubai for electrical, plumbing, AC, and home maintenance services. 24/7 emergency services, online booking, and free estimates available.')
@section('meta_keywords', 'contact OneCall Dubai, emergency electrician Dubai, plumbing services Dubai, AC repair contact, home maintenance Dubai, technical services contact, Dubai service provider contact, call plumber Dubai, call electrician Dubai')
@section('og_image', asset('images/og-image.png'))
@section('og_image_alt', 'Contact OneCall Technical Services - Professional Home Services in Dubai')
@section('og_type', 'website')

@section('content')

@push('schema')
<!-- Contact Page Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "mainEntity": {
        "@type": "Organization",
        "name": "OneCall Technical Services",
        "telephone": "+971509227536",
        "email": "{{ config('company.email', 'info@onecall.ae') }}",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Dubai",
            "addressRegion": "Dubai",
            "addressCountry": "AE"
        },
        "url": "{{ url('/') }}",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+971509227536",
            "contactType": "Customer Service",
            "areaServed": "AE",
            "availableLanguage": "English"
        }
    }
}
</script>

<!-- Breadcrumb Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "{{ url('/') }}"
        },
        {
            "@type": "ListItem",
            "position": 2,
            "name": "Contact Us",
            "item": "{{ route('contact') }}"
        }
    ]
}
</script>
@endpush

<style>


.about-hero {
    background: linear-gradient(#3e6ae1, rgba(0, 87, 179, 0.73)), url('{{ asset("images/services/about-cover.png") }}');
    background-size: cover;
    background-position: top;
    min-height: 80vh;
}

.transition-smooth {
    transition: transform 0.5s ease-in-out;
}

.slider-btn {
    cursor: pointer;
    z-index: 10;
    transition: all 0.3s ease;
}

.slider-btn:hover {
    background-color: var(--primary) !important;
    color: white !important;
    transform: scale(1.1);
}

.dot {
    display: inline-block;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: var(--border);
    transition: background-color 0.3s ease;
}

.dot.active {
    background-color: var(--primary);
    transform: scale(1.2);
}

@media (max-width: 768px) {
    .slider-container {
        padding: 0 20px !important;
    }
}
.hover-lift {
    transition: all 0.3s ease;
}

.hover-lift:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1) !important;
}

.equal-height-card {
    display: flex;
    flex-direction: column;
    height: 100%;
}

.equal-height-card .card-body {
    flex: 1;
}

.service-badge {
    background-color: var(--primary-light);
    color: white;
    border-radius: 20px;
    padding: 4px 12px;
    font-size: 0.85rem;
}

.location-badge {
    background-color: var(--bg-light);
    color: var(--primary);
    border: 1px solid var(--border);
    border-radius: 20px;
    padding: 4px 12px;
    font-size: 0.85rem;
}

.form-control-custom {
    border: 2px solid var(--border);
    border-radius: 10px;
    padding: 1rem;
    transition: all 0.3s ease;
}

.form-control-custom:focus {
    border-color: var(--primary-light);
    box-shadow: 0 0 0 0.25rem rgba(77, 171, 247, 0.25);
}

.btn-gradient-primary {
    background: linear-gradient(90deg, var(--primary), var(--primary-dark));
    border: none;
    color: white;
    padding: 1rem 2rem;
    border-radius: 10px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-gradient-primary:hover {
    background: linear-gradient(90deg, var(--primary-dark), var(--primary));
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 86, 179, 0.3);
}

.icon-circle {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
}

.card-border-top-primary {
    border-top: 5px solid var(--primary);
}

.card-border-top-secondary {
    border-top: 5px solid var(--secondary);
}

.card-border-top-accent {
    border-top: 5px solid var(--accent);
}

.map-container {
    border-radius: 15px;
    overflow: hidden;
    height: 100%;
    min-height: 400px;
}

.object-fit-cover {
    object-fit: cover;
}

.contact-image-container {
    position: relative;
    height: 100%;
    min-height: 400px;
    border-radius: 12px;
    overflow: hidden;
}

.form-control-sm {
    padding: 0.75rem 0.75rem !important;
    font-size: 0.9rem !important;
}

.form-floating>.form-control-sm:focus, 
.form-floating>.form-control-sm:not(:placeholder-shown) {
    padding-top: 1.625rem !important;
    padding-bottom: 0.625rem !important;
}

.form-floating>.form-control-sm~label {
    padding: 0.75rem 0.75rem !important;
    font-size: 0.85rem !important;
}

.form-control:focus, .form-select:focus {
    border-color: var(--primary-light) !important;
    box-shadow: 0 0 0 0.2rem rgba(77, 171, 247, 0.25) !important;
}

.btn {
    transition: all 0.2s ease;
}

.btn:hover {
    transform: translateY(-1px);
}

@media (max-width: 768px) {
    .contact-hero {
        min-height: 40vh;
    }
    
    .equal-height-card {
        margin-bottom: 1.5rem;
    }
    
    .contact-image-container {
        min-height: 300px;
        margin-top: 2rem;
    }
}
</style>

<!-- Hero Section -->
<section class="about-hero d-flex align-items-center text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="fw-bold display-5 mb-4">About OneCall Technical Services</h1>
                <p class="fs-5 lh-lg mb-4">
                    Your trusted partner for professional technical services in Dubai. We provide reliable, affordable, and high-quality electrical, plumbing, AC, and complete home maintenance solutions for residential and commercial properties.
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="https://wa.me/971509227536" class="btn btn-primary px-4 py-2" target="_blank" rel="noopener">
                        <i class="fa fa-phone me-2"></i>WhatsApp
                    </a>
                    <a href="https://wa.me/971509227536" class="btn btn-primary px-4 py-2" target="_blank" rel="noopener">
                        <i class="fa fa-phone me-2"></i>WhatsApp
                    </a>
                    <a href="{{ route('services.index') }}" class="btn btn-outline-light px-4 py-2">
                        <i class="fa fa-tools me-2"></i>Our Services
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Contact Section -->
<section class="py-5" style="background-color: var(--bg-light);">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm hover-lift" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-header border-0 py-4 bg-primary" >
                        <h2 class="card-title mb-0 text-white text-center fs-4">
                            <i class="fa fa-wrench me-2"></i> Request Service
                        </h2>
                    </div>
                    <div class="card-body p-4">
                        <form id="contactForm" class="needs-validation" novalidate>
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control form-control-sm" id="firstName" 
                                               placeholder="First Name" required 
                                               style="border: 1px solid var(--border); border-radius: 8px;">
                                        <label for="firstName" class="text-muted small">
                                            <i class="fa fa-user me-1"></i> First Name
                                        </label>
                                        <div class="invalid-feedback">
                                            Please enter your first name.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control form-control-sm" id="lastName" 
                                               placeholder="Last Name" required
                                               style="border: 1px solid var(--border); border-radius: 8px;">
                                        <label for="lastName" class="text-muted small">
                                            <i class="fa fa-user me-1"></i> Last Name
                                        </label>
                                        <div class="invalid-feedback">
                                            Please enter your last name.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="email" class="form-control form-control-sm" id="email" 
                                               placeholder="Email" required
                                               style="border: 1px solid var(--border); border-radius: 8px;">
                                        <label for="email" class="text-muted small">
                                            <i class="fa fa-envelope me-1"></i> Email Address
                                        </label>
                                        <div class="invalid-feedback">
                                            Please enter a valid email address.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control form-control-sm" id="phone" 
                                               placeholder="Phone" required
                                               style="border: 1px solid var(--border); border-radius: 8px;">
                                        <label for="phone" class="text-muted small">
                                            <i class="fa fa-phone me-1"></i> Phone Number
                                        </label>
                                        <div class="invalid-feedback">
                                            Please enter your phone number.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <select class="form-select form-select-sm" id="serviceType" required
                                                style="border: 1px solid var(--border); border-radius: 8px; height: 56px;">
                                            <option value="" selected disabled>Select Service</option>
                                            <option value="electrical">Electrical Services</option>
                                            <option value="plumbing">Plumbing Services</option>
                                            <option value="ac">AC Repair & Maintenance</option>
                                            <option value="maintenance">Home Maintenance</option>
                                            <option value="emergency">Emergency Repair</option>
                                        </select>
                                        <label for="serviceType" class="text-muted small">
                                            <i class="fa fa-tools me-1"></i> Service Type
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <select class="form-select form-select-sm" id="area" required
                                                style="border: 1px solid var(--border); border-radius: 8px; height: 56px;">
                                            <option value="" selected disabled>Select Area</option>
                                            <option value="deira">Deira</option>
                                            <option value="burdubai">Bur Dubai</option>
                                            <option value="jlt">Jumeirah Lake Towers (JLT)</option>
                                            <option value="businessbay">Business Bay</option>
                                            <option value="downtown">Downtown Dubai</option>
                                            <option value="other">Other Area</option>
                                        </select>
                                        <label for="area" class="text-muted small">
                                            <i class="fa fa-map-marker-alt me-1"></i> Service Area
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <div class="form-floating">
                                    <textarea class="form-control form-control-sm" id="message" 
                                              placeholder="Service details..." required
                                              style="border: 1px solid var(--border); border-radius: 8px; height: 100px; min-height: 100px;"></textarea>
                                    <label for="message" class="text-muted small">
                                        <i class="fa fa-comment me-1"></i> Service Details
                                    </label>
                                    <div class="invalid-feedback">
                                        Please describe your service requirements.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="d-grid">
                              <button type="submit" class="btn btn-primary btn-sm py-2">
    <i class="fa fa-paper-plane me-2"></i> Submit Request
</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Contact Information with Image -->
            <div class="col-lg-6">
                <div class="position-relative h-100">
                    <div class="contact-image-container">
                        <img src="{{ asset('images/services/contact-img.png') }}" 
                             alt="Contact OneCall Technical Services Dubai" 
                             class="img-fluid w-100 h-100 object-fit-cover"
                             style="max-height: 600px; min-height: 400px;">
                        
                        <!-- Overlay Contact Info -->
                        <div class="position-absolute top-0 start-0 w-100 h-100 p-4 d-flex flex-column justify-content-between"
                             style="background: linear-gradient(to bottom, rgba(0,86,179,0.1) 0%, rgba(0,86,179,0.3) 100%);">
                            
                            <!-- Top Badge -->
                            <div class="d-flex justify-content-end">
                                <div class="bg-white px-3 py-2 rounded-pill shadow-sm"
                                     style="border-left: 3px solid var(--accent);">
                                    <span class="text-dark fw-medium small">
                                        <i class="fa fa-clock me-1" style="color: var(--accent);"></i>
                                        24/7 Emergency Service
                                    </span>
                                </div>
                            </div>
                            
                            <!-- Contact Details -->
                            <div class="bg-white rounded-3 p-4 shadow-lg" style="max-width: 90%;">
                                <h4 class="fw-bold mb-3" style="color:"class="text">
                                    <i class="fa fa-headset me-2"></i> Contact Information
                                </h4>
                                
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center me-3" 
                                                 style="width: 36px; height: 36px; background-color: var(--primary-light);">
                                                <i class="fa fa-phone text-white" style="font-size: 0.9rem;"></i>
                                            </div>
                                            <div>
                                                <small class="d-block text-muted mb-1">Emergency Line</small>
                                                <strong style="color: var(--primary-dark); font-size: 0.95rem;">
                                                    +971 509227536
                                                </strong>
                                            </div>
                                        </div>
                                        
                                        <div class="d-flex align-items-start">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center me-3" 
                                                 style="width: 36px; height: 36px; background-color: var(--secondary);">
                                                <i class="fab fa-whatsapp text-white" style="font-size: 0.9rem;"></i>
                                            </div>
                                            <div>
                                                <small class="d-block text-muted mb-1">WhatsApp</small>
                                                <strong style="color: var(--primary-dark); font-size: 0.95rem;">
                                                    +971 509227536
                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-6">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center me-3" 
                                                 style="width: 36px; height: 36px; background-color: var(--primary);">
                                                <i class="fa fa-envelope text-white" style="font-size: 0.9rem;"></i>
                                            </div>
                                            <div>
                                                <small class="d-block text-muted mb-1">Email</small>
                                                <strong style="color: var(--primary-dark); font-size: 0.95rem;">
                                                    info@onecall.ae
                                                </strong>
                                            </div>
                                        </div>
                                        
                                      <div class="d-flex align-items-start">
<div class="d-flex align-items-start">
  <div class="rounded-circle d-flex align-items-center justify-content-center me-4"  me-3 → me-4 ya me-5
       style="width: 36px; height: 36px; background-color: var(--primary); flex-shrink: 0;">
    <i class="fa-solid fa-location-dot text-white"
       style="font-size: 1rem; line-height: 1; transform: translateY(-1px);"></i>
  </div>
  <div>
    <small class="d-block text-muted mb-1">Location</small>
    <strong style="color: var(--primary-dark); font-size: 0.95rem;">
      Al quoz Industrial area 4 Dubai UAE
    </strong>
  </div>
</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Service Hours -->
                                <div class="mt-4 pt-3 border-top">
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <div class="text-center p-2 rounded-2" 
                                                 style="background-color:bg-primary">
                                                <small class="d-block text-muted">Regular Hours</small>
                                                <span style=" font-weight: 500; font-size: 0.9rem; " class="text-primary">
                                                    8 AM - 10 PM
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-center p-2 rounded-2" 
                                                 style="background-color: var(--bg-light);">
                                                <small class="d-block text-muted">Response Time</small>
                                                <span style=" font-weight: 500; font-size: 0.9rem;" class="text-primary">
                                                    60 Minutes
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Methods Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3" style="color: #3e6ae1 !important;">How to Reach Us</h2>
            <p class="lead text-muted">Multiple convenient ways to connect with our expert technicians</p>
        </div>
        
        <div class="row g-4">
            <!-- Call Us Card -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm hover-lift equal-height-card" style="border-top: 5px solid #3e6ae1 !important;">
                    <div class="card-body p-4 text-center d-flex flex-column">
                        <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="background: #3e6ae1 !important; width: 70px; height: 70px;">
                            <i class="fa fa-headset fa-2x text-white"></i>
                        </div>
                        <h4 class="fw-bold mb-3" style="color: #3e6ae1 !important;">Call Us Directly</h4>
                        <p class="text-muted mb-4">Speak directly with our service coordinators for immediate assistance</p>
                        <div class="mb-4">
                            <div class="d-flex align-items-center justify-content-center mb-3">
                                <i class="fa fa-phone me-3" style="color: #3e6ae1 !important; font-size: 1.5rem;"></i>
                                <div class="text-start">
                                    <small class="d-block text-muted">24/7 Emergency Line</small>
                                    <strong style="color: #3e6ae1 !important; font-size: 1.2rem;">+971 509227536</strong>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <i class="fab fa-whatsapp me-3" style="color: #3e6ae1 !important; font-size: 1.5rem;"></i>
                                <div class="text-start">
                                    <small class="d-block text-muted">WhatsApp Support</small>
                                    <strong style="color: #3e6ae1 !important; font-size: 1.2rem;">+971 509227536</strong>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <a href="https://wa.me/971509227536" class="btn btn-primary w-100" target="_blank" rel="noopener">
                                <i class="fa fa-phone me-2"></i> WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Visit Our Office Card (same for others) -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm hover-lift equal-height-card" style="border-top: 5px solid #3e6ae1 !important;">
                    <div class="card-body p-4 text-center d-flex flex-column">
                        <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="background: #3e6ae1 !important; width: 70px; height: 70px;">
                            <i class="fa fa-building fa-2x text-white"></i>
                        </div>
                        <h4 class="fw-bold mb-3" style="color: #3e6ae1 !important;">Visit Our Office</h4>
                        <p class="text-muted mb-4">Meet us at our service center in Al Baraha, Deira, Dubai</p>
                        <div class="mb-4 text-start">
                            <div class="d-flex align-items-start mb-3">
                                <i class="fa fa-map-marker-alt me-3 mt-1" style="color: #3e6ae1 !important; font-size: 1.5rem;"></i>
                                <div>
                                    <h6 class="mb-1" style="color: #3e6ae1 !important;">Office Address</h6>
                                    <p class="mb-0 text-muted small"> Al quoz Industrial area 4 Dubai UAE</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="fa fa-clock me-3 mt-1" style="color: #3e6ae1 !important; font-size: 1.5rem;"></i>
                                <div>
                                    <h6 class="mb-1" style="color: #3e6ae1 !important;">Office Hours</h6>
                                    <p class="mb-0 text-muted small">Sunday - Thursday: 8 AM - 8 PM<br>Friday: 9 AM - 6 PM</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <a href="#mapSection" class="btn btn-primary w-100">
                                <i class="fa fa-map-marker-alt me-2"></i> View Location
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Online Booking Card -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm hover-lift equal-height-card" style="border-top: 5px solid #3e6ae1 !important;">
                    <div class="card-body p-4 text-center d-flex flex-column">
                        <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="background: #3e6ae1 !important; width: 70px; height: 70px;">
                            <i class="fa fa-calendar-alt fa-2x text-white"></i>
                        </div>
                        <h4 class="fw-bold mb-3" style="color: #3e6ae1 !important;">Online Booking</h4>
                        <p class="text-muted mb-4">Schedule service appointments online anytime, anywhere</p>
                        <div class="mb-4">
                            <div class="d-flex align-items-center justify-content-center mb-3">
                                <i class="fa fa-check-circle me-3" style="color: #3e6ae1 !important; font-size: 1.5rem;"></i>
                                <div class="text-start">
                                    <small class="d-block text-muted">Instant Confirmation</small>
                                    <strong style="color: #3e6ae1 !important;">Immediate Response</strong>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <i class="fa fa-clock me-3" style="color: #3e6ae1 !important; font-size: 1.5rem;"></i>
                                <div class="text-start">
                                    <small class="d-block text-muted">Quick Response</small>
                                    <strong style="color: #3e6ae1 !important;">Within 60 Minutes</strong>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <button onclick="document.getElementById('contactForm').scrollIntoView({behavior: 'smooth'})" 
                                    class="btn btn-primary w-100">
                                <i class="fa fa-book me-2"></i> Book Online Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section id="mapSection" class="py-5" style="background-color: var(--bg-light);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3" style="color: #3e6ae1 !important;">Our Location</h2>
            <p class="lead text-muted">Find us at our service center in 
                 Al quoz Industrial area 4 Dubai UAE
            </p>
        </div>
        
        <div class="row g-4 align-items-stretch">
            <!-- Map -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body p-0">
                        <div class="map-container">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.376048847202!2d55.31629847610489!3d25.276402277661987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d9a7b8b3b0f%3A0x7b8b3b0f7b8b3b0f!2sAl%20Baraha%2C%20Deira%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2s!4v1705081600000!5m2!1sen!2s"
                                width="100%" 
                                height="100%" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Location Details -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-header border-0 py-4" 
                         style="background: #3e6ae1 !important;">
                        <h5 class="mb-0 text-white">
                            <i class="fa fa-info-circle me-2"></i> Location Details
                        </h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <h6 class="mb-3" style="color: var(--text-dark);">
                                <i class="fa fa-map-marker-alt me-2" style="color: #3e6ae1 !important;"></i>Address
                            </h6>
                            <div class="p-3 rounded-3" style="background-color: var(--bg-light);">
                                <p class="mb-0 text-muted">
                                     Al quoz Industrial <br> area 4 Dubai UAE
                                </p>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <h6 class="mb-3" style="color: #3e6ae1 !important;">
                                <i class="fa fa-clock me-2" style="color: #3e6ae1 !important;"></i>Office Hours
                            </h6>
                            <ul class="list-unstyled">
                                <li class="mb-2 d-flex justify-content-between">
                                    <span class="text-muted">Sun - Thu</span>
                                    <strong style="color: #3e6ae1 !important;">8:00 AM - 10:00 PM</strong>
                                </li>
                                <li class="mb-2 d-flex justify-content-between">
                                    <span class="text-muted">Friday</span>
                                    <strong style="color: #3e6ae1 !important;">9:00 AM - 8:00 PM</strong>
                                </li>
                                <li class="mb-2 d-flex justify-content-between">
                                    <span class="text-muted">Saturday</span>
                                    <strong style="color: #3e6ae1 !important;">9:00 AM - 6:00 PM</strong>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="mb-4">
                            <h6 class="mb-3" style="color: var(--text-dark);">
                                <i class="fa fa-phone me-2" style="color: #3e6ae1 !important;"></i>Contact
                            </h6>
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-3" 
                                     style="width: 40px; height: 40px; background-color: #3e6ae1 !important;">
                                    <i class="fa fa-phone text-white"></i>
                                </div>
                                <div>
                                    <small class="d-block text-muted">Phone Number</small>
                                    <strong style="color: #3e6ae1 !important;">  +971 509227536</strong>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-3" 
                                     style="width: 40px; height: 40px; background-color: #3e6ae1 !important;">
                                    <i class="fab fa-whatsapp text-white"></i>
                                </div>
                                <div>
                                    <small class="d-block text-muted">WhatsApp</small>
                                    <strong style="color: #3e6ae1 !important;">  +971 509227536</strong>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <h6 class="mb-3" style="color: var(--text-dark);">
                                <i class="fa fa-map-signs me-2" style="color: #3e6ae1 !important;"></i>Service Areas
                            </h6>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="location-badge">Deira</span>
                                <span class="location-badge">Bur Dubai</span>
                                <span class="location-badge">Karama</span>
                                <span class="location-badge">Al Rigga</span>
                                <span class="location-badge">Al Mamzar</span>
                                <span class="location-badge">Naif</span>
                            </div>
                            <p class="mt-2 small" style="color: var(--text-light);">
                                We serve all surrounding areas within 15km radius
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Nearby Landmarks -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card border-0 shadow-sm" style="border-radius: 15px; background-color: var(--bg-white);">
                    <div class="card-body p-4">
                        <h5 class="mb-4" style="color: #3e6ae1 !important;">
                            <i class="fa fa-signs-post me-2" style="color: #3e6ae1 !important;"></i>Nearby Landmarks
                        </h5>
                        <div class="row">
                            <div class="col-md-3 col-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center me-3" 
                                         style="width: 40px; height: 40px; background-color: #3e6ae1 !important;">
                                        <i class="fa fa-hospital" style="color: white !important;"></i>
                                    </div>
                                    <div>
                                        <small class="d-block" style="color: var(--text-light);">Al Baraha Hospital</small>
                                        <span class="small" style="color: var(--text-dark); font-weight: 500;">5 min drive</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center me-3" 
                                         style="width: 40px; height: 40px; background-color: #3e6ae1 !important;">
                                        <i class="fa fa-train" style="color: white !important;"></i>
                                    </div>
                                    <div>
                                        <small class="d-block" style="color: var(--text-light);">Union Metro Station</small>
                                        <span class="small" style="color: var(--text-dark); font-weight: 500;">10 min walk</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center me-3" 
                                         style="width: 40px; height: 40px; background-color: #3e6ae1 !important;">
                                        <i class="fa fa-shopping-bag" style="color: white !important;"></i>
                                    </div>
                                    <div>
                                        <small class="d-block" style="color: var(--text-light);">Naif Souk</small>
                                        <span class="small" style="color: var(--text-dark); font-weight: 500;">15 min walk</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center me-3" 
                                         style="width: 40px; height: 40px; background-color: #3e6ae1 !important;">
                                        <i class="fa fa-bus" style="color: white !important;"></i>
                                    </div>
                                    <div>
                                        <small class="d-block" style="color: var(--text-light);">Al Sabkha Bus Station</small>
                                        <span class="small" style="color: var(--text-dark); font-weight: 500;">8 min drive</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Form validation and submission
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (!this.checkValidity()) {
                e.stopPropagation();
                this.classList.add('was-validated');
                return;
            }
            
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            // Show loading state
            submitBtn.innerHTML = '<i class="fa fa-spinner fa-spin me-2"></i> Preparing...';
            submitBtn.disabled = true;
            
            // Get all form values
            const firstName = document.getElementById('firstName').value.trim();
            const lastName = document.getElementById('lastName').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const serviceType = document.getElementById('serviceType').value;
            const serviceTypeText = document.querySelector(`#serviceType option[value="${serviceType}"]`).textContent;
            const area = document.getElementById('area').value;
            const areaText = document.querySelector(`#area option[value="${area}"]`).textContent;
            const message = document.getElementById('message').value.trim();
            
            // Format WhatsApp message
            const whatsappMessage = `*🔧 Service Request - OneCall Technical Services*\n\n` +
                `*Customer Information:*\n` +
                `━━━━━━━━━━━━━━━━━━━━\n` +
                `👤 *Name:* ${firstName} ${lastName}\n` +
                `📧 *Email:* ${email}\n` +
                `📱 *Phone:* ${phone}\n\n` +
                `*Service Details:*\n` +
                `━━━━━━━━━━━━━━━━━━━━\n` +
                `🔧 *Service Type:* ${serviceTypeText}\n` +
                `📍 *Service Area:* ${areaText}\n` +
                `📝 *Service Description:*\n${message}\n\n` +
                `━━━━━━━━━━━━━━━━━━━━\n` +
                `⏰ *Request Time:* ${new Date().toLocaleString('en-US', { 
                    weekday: 'short', 
                    year: 'numeric', 
                    month: 'short', 
                    day: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit'
                })}\n\n` +
                `_This request was submitted through our website contact form._`;
            
            // Encode message for URL
            const encodedMessage = encodeURIComponent(whatsappMessage);
            const whatsappUrl = `https://wa.me/971509227536?text=${encodedMessage}`;
            
            // Show success state briefly
            submitBtn.innerHTML = '<i class="fab fa-whatsapp me-2"></i> Opening WhatsApp...';
            
            // Open WhatsApp after short delay
            setTimeout(() => {
                // Open WhatsApp in new tab
                window.open(whatsappUrl, '_blank');
                
                // Show success message
                submitBtn.innerHTML = '<i class="fa fa-check me-2"></i> Request Sent!';
                submitBtn.style.background = 'linear-gradient(135deg, #25D366, #128C7E)';
                submitBtn.style.color = 'white';
                
                // Show success notification
                const successMessage = document.createElement('div');
                successMessage.className = 'alert alert-success alert-dismissible fade show position-fixed';
                successMessage.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px; box-shadow: 0 4px 15px rgba(0,0,0,0.2);';
                successMessage.innerHTML = `
                    <strong><i class="fa fa-check-circle me-2"></i>Success!</strong><br>
                    Your service request has been sent to WhatsApp. Our team will contact you shortly.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                `;
                document.body.appendChild(successMessage);
                
                // Auto-remove notification after 5 seconds
                setTimeout(() => {
                    successMessage.remove();
                }, 5000);
                
                // Reset form after 2 seconds
                setTimeout(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.style.background = '';
                    submitBtn.style.color = '';
                    submitBtn.disabled = false;
                    
                    // Reset form
                    contactForm.reset();
                    contactForm.classList.remove('was-validated');
                }, 2000);
            }, 500);
            
            this.classList.add('was-validated');
        });
    }
    
    // Add hover effects to cards
    document.querySelectorAll('.hover-lift').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // Smooth scroll to sections
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId !== '#') {
                e.preventDefault();
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
    
    // Initialize form validation
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
        }, false);
    });
});
</script>
@endsection