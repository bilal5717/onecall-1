@extends('layouts.app')

@section('title', 'Terms of Services | OneCall Technical Services - Dubai')
@section('meta_description', 'Read our Terms of Services for OneCall Technical Services. Understand our service terms, conditions, warranties, and policies for technical services in Dubai.')
@section('meta_keywords', 'terms of service, terms and conditions, OneCall Dubai, service terms, technical services terms, Dubai service conditions')

@section('content')

<style>
.terms-hero {
    background: linear-gradient(135deg, rgba(62, 106, 225, 0.9), rgba(17, 29, 69, 0.9)), url('{{ asset("images/bgimages/electrical.jpg") }}');
    background-size: cover;
    background-position: center;
    min-height: 50vh;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
}

.terms-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 30% 30%, rgba(62, 106, 225, 0.2) 0%, transparent 70%);
}

.terms-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
}

.terms-container {
    max-width: 900px;
    margin: 0 auto;
}

.terms-card {
    background: rgba(255, 255, 255, 0.95);
    border: 1px solid rgba(62, 106, 225, 0.2);
    border-radius: 15px;
    padding: 2.5rem;
    margin-bottom: 2rem;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    backdrop-filter: blur(10px);
}

.terms-card h2 {
    color: #2c3e50;
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    padding-bottom: 1rem;
    border-bottom: 3px solid #3e6ae1;
    display: flex;
    align-items: center;
    gap: 12px;
}

.terms-card h2 i {
    color: #3e6ae1;
    font-size: 1.75rem;
}

.terms-card h3 {
    color: #3e6ae1;
    font-size: 1.4rem;
    font-weight: 600;
    margin-top: 2rem;
    margin-bottom: 1rem;
    padding-left: 1rem;
    border-left: 4px solid #3e6ae1;
}

.terms-card h4 {
    color: #2c3e50;
    font-size: 1.15rem;
    font-weight: 600;
    margin-top: 1.5rem;
    margin-bottom: 0.75rem;
}

.terms-card p {
    color: #5d6d7e;
    line-height: 1.8;
    margin-bottom: 1rem;
    font-size: 1rem;
}

.terms-card ul,
.terms-card ol {
    color: #5d6d7e;
    line-height: 1.8;
    margin-bottom: 1rem;
    padding-left: 2rem;
}

.terms-card li {
    margin-bottom: 0.75rem;
    font-size: 1rem;
}

.terms-card strong {
    color: #2c3e50;
    font-weight: 600;
}

.terms-card .highlight-box {
    background: linear-gradient(135deg, rgba(62, 106, 225, 0.1), rgba(255, 255, 255, 0.9));
    border: 1px solid rgba(62, 106, 225, 0.2);
    border-left: 4px solid #3e6ae1;
    border-radius: 10px;
    padding: 1.5rem;
    margin: 1.5rem 0;
}

.terms-card .highlight-box p {
    margin: 0;
    color: #2c3e50;
    font-weight: 500;
}

.terms-card .info-badge {
    display: inline-block;
    background: linear-gradient(135deg, rgba(62, 106, 225, 0.15), rgba(62, 106, 225, 0.05));
    color: #3e6ae1;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 600;
    margin: 0.5rem 0.5rem 0.5rem 0;
    border: 1px solid rgba(62, 106, 225, 0.2);
}

.last-updated {
    text-align: center;
    color: #7f8c8d;
    font-size: 0.9rem;
    margin-top: 2rem;
    padding-top: 1.5rem;
    border-top: 1px solid rgba(62, 106, 225, 0.2);
}

.contact-cta {
    background: linear-gradient(135deg, rgba(62, 106, 225, 0.1), rgba(255, 255, 255, 0.9));
    border: 1px solid rgba(62, 106, 225, 0.2);
    border-radius: 15px;
    padding: 2rem;
    margin-top: 3rem;
    text-align: center;
}

.contact-cta h3 {
    color: #2c3e50;
    margin-bottom: 1rem;
    border: none;
    padding: 0;
}

.contact-cta p {
    color: #5d6d7e;
    margin-bottom: 1.5rem;
}

@media (max-width: 768px) {
    .terms-hero {
        min-height: 40vh;
    }
    
    .terms-card {
        padding: 1.5rem;
    }
    
    .terms-card h2 {
        font-size: 1.75rem;
    }
    
    .terms-card h3 {
        font-size: 1.25rem;
    }
}
</style>

<!-- Hero Section -->
<section class="terms-hero">
    <div class="container position-relative" style="z-index: 2;">
        <div class="row">
            <div class="col-lg-10 mx-auto text-center text-white">
                <h1 class="display-4 fw-bold mb-3 animated-element">Terms of Services</h1>
                <p class="lead mb-0 animated-element" style="opacity: 0.95;">
                    Please read these terms carefully before using our services
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Terms Content -->
<section class="terms-section">
    <div class="container">
        <div class="terms-container">
            
            <!-- Introduction -->
            <div class="terms-card">
                <h2>
                    <i class="bi bi-file-text"></i>
                    Introduction
                </h2>
                <p>
                    Welcome to <strong>OneCall Technical Services</strong>. These Terms of Services ("Terms") govern your use of our technical services, including but not limited to electrical, plumbing, AC, and home maintenance services in Dubai, United Arab Emirates.
                </p>
                <p>
                    By engaging our services, you agree to be bound by these Terms. If you do not agree with any part of these Terms, please do not use our services.
                </p>
                <div class="highlight-box">
                    <p>
                        <i class="bi bi-info-circle me-2" style="color: #3e6ae1;"></i>
                        <strong>Last Updated:</strong> {{ date('F d, Y') }}
                    </p>
                </div>
            </div>

            <!-- Service Agreement -->
            <div class="terms-card">
                <h2>
                    <i class="bi bi-handshake"></i>
                    Service Agreement
                </h2>
                
                <h3>1. Acceptance of Services</h3>
                <p>
                    By requesting our services, you acknowledge that you have read, understood, and agree to be bound by these Terms. Our services are provided subject to availability and our acceptance of your service request.
                </p>

                <h3>2. Service Scope</h3>
                <p>
                    OneCall Technical Services provides professional technical services including:
                </p>
                <ul>
                    <li>Electrical installation, repair, and maintenance</li>
                    <li>Plumbing services and repairs</li>
                    <li>AC and ventilation services</li>
                    <li>Tesla charger installation</li>
                    <li>Painting and tiling services</li>
                    <li>Gypsum partition and ceiling work</li>
                    <li>Aluminum and glass work</li>
                    <li>CCTV camera installation</li>
                    <li>Other home maintenance and technical services</li>
                </ul>

                <h3>3. Service Requests</h3>
                <p>
                    Service requests can be made through:
                </p>
                <ul>
                    <li>Phone: <a href="https://wa.me/971509227536" target="_blank" rel="noopener" style="color: #3e6ae1; text-decoration: none;">+971 50 922 7536</a></li>
                    <li>WhatsApp: <a href="https://wa.me/971509227536" style="color: #3e6ae1; text-decoration: none;">+971 50 922 7536</a></li>
                    <li>Online contact form on our website</li>
                    <li>Email: {{ config('company.email') }}</li>
                </ul>
            </div>

            <!-- Pricing and Payment -->
            <div class="terms-card">
                <h2>
                    <i class="bi bi-currency-dollar"></i>
                    Pricing and Payment
                </h2>

                <h3>4. Service Pricing</h3>
                <p>
                    All service prices are quoted in UAE Dirhams (AED). We provide transparent pricing and will provide a detailed quote before commencing work, except in emergency situations where immediate action is required.
                </p>

                <h3>5. Payment Terms</h3>
                <ul>
                    <li>Payment is due upon completion of services unless otherwise agreed in writing</li>
                    <li>We accept cash, bank transfer, and major credit/debit cards</li>
                    <li>For large projects, a deposit may be required before work commences</li>
                    <li>Late payments may incur additional charges</li>
                    <li>All prices are inclusive of VAT where applicable</li>
                </ul>

                <h3>6. Quotes and Estimates</h3>
                <p>
                    Quotes are valid for 30 days from the date of issue. Estimates are provided in good faith but may vary based on actual conditions discovered during service provision. We will inform you of any significant changes before proceeding.
                </p>
            </div>

            <!-- Warranties and Guarantees -->
            <div class="terms-card">
                <h2>
                    <i class="bi bi-shield-check"></i>
                    Warranties and Guarantees
                </h2>

                <h3>7. Workmanship Warranty</h3>
                <p>
                    We provide a <strong>90-day warranty</strong> on all workmanship. This warranty covers defects in work performed by our technicians and does not cover damage caused by:
                </p>
                <ul>
                    <li>Normal wear and tear</li>
                    <li>Misuse or abuse of repaired items</li>
                    <li>Unauthorized modifications or repairs</li>
                    <li>Acts of nature or external factors beyond our control</li>
                </ul>

                <h3>8. Parts Warranty</h3>
                <p>
                    Parts installed by us come with a <strong>1-year warranty</strong> from the date of installation, subject to manufacturer warranties. Original manufacturer warranties apply where applicable.
                </p>

                <h3>9. Installation Warranty</h3>
                <p>
                    New installations are covered by a <strong>2-year warranty</strong> covering both workmanship and materials, subject to proper use and maintenance.
                </p>

                <div class="highlight-box">
                    <p>
                        <i class="bi bi-exclamation-triangle me-2" style="color: #3e6ae1;"></i>
                        <strong>Important:</strong> Warranty claims must be reported within the warranty period. Warranty work will be performed at no additional charge, subject to verification of the warranty claim.
                    </p>
                </div>
            </div>

            <!-- Service Standards -->
            <div class="terms-card">
                <h2>
                    <i class="bi bi-star-fill"></i>
                    Service Standards
                </h2>

                <h3>10. Professional Standards</h3>
                <p>
                    All our technicians are:
                </p>
                <ul>
                    <li>Licensed and certified professionals</li>
                    <li>Fully insured and bonded</li>
                    <li>Experienced with minimum 5 years in their field</li>
                    <li>Regularly trained on latest techniques and safety standards</li>
                </ul>

                <h3>11. Safety and Compliance</h3>
                <p>
                    We comply with all UAE regulations and safety standards, including:
                </p>
                <ul>
                    <li>DEWA/DC PRO certifications for electrical work</li>
                    <li>Dubai Municipality regulations</li>
                    <li>Health and safety standards</li>
                    <li>Environmental regulations</li>
                </ul>

                <h3>12. Response Times</h3>
                <ul>
                    <li><strong>Emergency Services:</strong> 60-90 minutes response time</li>
                    <li><strong>Standard Services:</strong> Within 24 hours</li>
                    <li><strong>Scheduled Services:</strong> As per agreed appointment</li>
                </ul>
            </div>

            <!-- Customer Responsibilities -->
            <div class="terms-card">
                <h2>
                    <i class="bi bi-person-check"></i>
                    Customer Responsibilities
                </h2>

                <h3>13. Access and Cooperation</h3>
                <p>
                    To enable us to provide services effectively, you agree to:
                </p>
                <ul>
                    <li>Provide safe and clear access to work areas</li>
                    <li>Disclose any known hazards or issues</li>
                    <li>Be present or authorize access during service provision</li>
                    <li>Cooperate with our technicians</li>
                    <li>Ensure pets and children are secured during service</li>
                </ul>

                <h3>14. Property Protection</h3>
                <p>
                    While we take all reasonable precautions, you are responsible for:
                </p>
                <ul>
                    <li>Removing or securing valuable items from work areas</li>
                    <li>Informing us of any fragile or valuable items</li>
                    <li>Providing accurate information about your property</li>
                </ul>
            </div>

            <!-- Cancellation and Refunds -->
            <div class="terms-card">
                <h2>
                    <i class="bi bi-x-circle"></i>
                    Cancellation and Refunds
                </h2>

                <h3>15. Service Cancellation</h3>
                <ul>
                    <li>You may cancel a scheduled service with at least 24 hours notice at no charge</li>
                    <li>Cancellations within 24 hours may incur a cancellation fee</li>
                    <li>Emergency service cancellations may be subject to charges</li>
                    <li>We reserve the right to cancel services due to safety concerns or inability to access work areas</li>
                </ul>

                <h3>16. Refund Policy</h3>
                <p>
                    Refunds are considered on a case-by-case basis:
                </p>
                <ul>
                    <li>If work is not completed as agreed, we will rectify or provide a refund</li>
                    <li>If you are not satisfied with our service, contact us within 7 days</li>
                    <li>Refunds for completed work require valid warranty claim</li>
                    <li>Deposits for cancelled projects are refundable minus any work already completed</li>
                </ul>
            </div>

            <!-- Liability and Insurance -->
            <div class="terms-card">
                <h2>
                    <i class="bi bi-shield-exclamation"></i>
                    Liability and Insurance
                </h2>

                <h3>17. Limitation of Liability</h3>
                <p>
                    Our liability is limited to the value of the service provided. We are not liable for:
                </p>
                <ul>
                    <li>Consequential or indirect damages</li>
                    <li>Loss of profits or business interruption</li>
                    <li>Damage to property not directly caused by our negligence</li>
                    <li>Issues arising from pre-existing conditions not disclosed</li>
                </ul>

                <h3>18. Insurance Coverage</h3>
                <p>
                    We maintain comprehensive insurance coverage including:
                </p>
                <ul>
                    <li>Public liability insurance</li>
                    <li>Professional indemnity insurance</li>
                    <li>Workers' compensation insurance</li>
                </ul>

                <h3>19. Damage Claims</h3>
                <p>
                    Any claims for damage must be reported immediately and within 48 hours of service completion. We will investigate and resolve valid claims promptly.
                </p>
            </div>

            <!-- Privacy and Data -->
            <div class="terms-card">
                <h2>
                    <i class="bi bi-lock"></i>
                    Privacy and Data Protection
                </h2>

                <h3>20. Data Collection</h3>
                <p>
                    We collect and process personal information in accordance with UAE data protection laws. For details, please refer to our <a href="{{ route('privacy') }}" style="color: #3e6ae1; text-decoration: none;">Privacy Policy</a>.
                </p>

                <h3>21. Use of Information</h3>
                <p>
                    Information collected is used solely for:
                </p>
                <ul>
                    <li>Providing and improving our services</li>
                    <li>Communication regarding services</li>
                    <li>Compliance with legal obligations</li>
                    <li>Marketing (with your consent)</li>
                </ul>
            </div>

            <!-- Dispute Resolution -->
            <div class="terms-card">
                <h2>
                    <i class="bi bi-gavel"></i>
                    Dispute Resolution
                </h2>

                <h3>22. Complaint Procedure</h3>
                <p>
                    If you have a complaint:
                </p>
                <ol>
                    <li>Contact us immediately at <a href="https://wa.me/971509227536" target="_blank" rel="noopener" style="color: #3e6ae1; text-decoration: none;">+971 50 922 7536</a></li>
                    <li>We will investigate and respond within 5 business days</li>
                    <li>We aim to resolve all complaints amicably</li>
                    <li>If unresolved, disputes will be subject to UAE law and Dubai courts</li>
                </ol>

                <h3>23. Governing Law</h3>
                <p>
                    These Terms are governed by the laws of the United Arab Emirates and the Emirate of Dubai. Any disputes will be subject to the exclusive jurisdiction of Dubai courts.
                </p>
            </div>

            <!-- General Terms -->
            <div class="terms-card">
                <h2>
                    <i class="bi bi-list-check"></i>
                    General Terms
                </h2>

                <h3>24. Modifications</h3>
                <p>
                    We reserve the right to modify these Terms at any time. Updated Terms will be posted on our website. Continued use of our services constitutes acceptance of modified Terms.
                </p>

                <h3>25. Force Majeure</h3>
                <p>
                    We are not liable for delays or failures in performance due to circumstances beyond our reasonable control, including natural disasters, government actions, or pandemics.
                </p>

                <h3>26. Severability</h3>
                <p>
                    If any provision of these Terms is found to be invalid or unenforceable, the remaining provisions will continue in full force and effect.
                </p>

                <h3>27. Entire Agreement</h3>
                <p>
                    These Terms, together with any written service agreements, constitute the entire agreement between you and OneCall Technical Services regarding our services.
                </p>
            </div>

            <!-- Contact Information -->
            <div class="contact-cta">
                <h3>
                    <i class="bi bi-question-circle"></i>
                    Questions About These Terms?
                </h3>
                <p>
                    If you have any questions about these Terms of Services, please contact us:
                </p>
                <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
                    <a href="{{ route('contact') }}" class="btn btn-primary px-4">
                        <i class="bi bi-envelope me-2"></i>
                        Contact Us
                    </a>
                    <a href="https://wa.me/971509227536" target="_blank" rel="noopener" class="btn btn-success px-4">
                        <i class="bi bi-telephone-fill me-2"></i>
                        WhatsApp
                    </a>
                    <a href="https://wa.me/971509227536" class="btn btn-outline-primary px-4">
                        <i class="bi bi-telephone-fill me-2"></i>
                        WhatsApp
                    </a>
                </div>
            </div>

            <!-- Last Updated -->
            <div class="last-updated">
                <p>
                    <i class="bi bi-calendar3 me-2"></i>
                    Last Updated: {{ date('F d, Y') }}
                </p>
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
