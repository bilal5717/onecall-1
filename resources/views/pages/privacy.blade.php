@extends('layouts.app')

@section('title', 'Privacy Policy | OneCall Technical Services - Dubai')
@section('meta_description', 'Read our Privacy Policy to understand how OneCall Technical Services collects, uses, and protects your personal information in Dubai.')
@section('meta_keywords', 'privacy policy, data protection, OneCall Dubai, privacy statement, personal information, data security')

@section('content')

<style>
.privacy-hero {
    background: linear-gradient(135deg, rgba(62, 106, 225, 0.9), rgba(17, 29, 69, 0.9)), url('{{ asset("images/bgimages/electrical.jpg") }}');
    background-size: cover;
    background-position: center;
    min-height: 50vh;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
}

.privacy-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 30% 30%, rgba(62, 106, 225, 0.2) 0%, transparent 70%);
}

.privacy-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
}

.privacy-container {
    max-width: 900px;
    margin: 0 auto;
}

.privacy-card {
    background: rgba(255, 255, 255, 0.95);
    border: 1px solid rgba(62, 106, 225, 0.2);
    border-radius: 15px;
    padding: 2.5rem;
    margin-bottom: 2rem;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    backdrop-filter: blur(10px);
}

.privacy-card h2 {
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

.privacy-card h2 i {
    color: #3e6ae1;
    font-size: 1.75rem;
}

.privacy-card h3 {
    color: #3e6ae1;
    font-size: 1.4rem;
    font-weight: 600;
    margin-top: 2rem;
    margin-bottom: 1rem;
    padding-left: 1rem;
    border-left: 4px solid #3e6ae1;
}

.privacy-card h4 {
    color: #2c3e50;
    font-size: 1.15rem;
    font-weight: 600;
    margin-top: 1.5rem;
    margin-bottom: 0.75rem;
}

.privacy-card p {
    color: #5d6d7e;
    line-height: 1.8;
    margin-bottom: 1rem;
    font-size: 1rem;
}

.privacy-card ul,
.privacy-card ol {
    color: #5d6d7e;
    line-height: 1.8;
    margin-bottom: 1rem;
    padding-left: 2rem;
}

.privacy-card li {
    margin-bottom: 0.75rem;
    font-size: 1rem;
}

.privacy-card strong {
    color: #2c3e50;
    font-weight: 600;
}

.privacy-card .highlight-box {
    background: linear-gradient(135deg, rgba(62, 106, 225, 0.1), rgba(255, 255, 255, 0.9));
    border: 1px solid rgba(62, 106, 225, 0.2);
    border-left: 4px solid #3e6ae1;
    border-radius: 10px;
    padding: 1.5rem;
    margin: 1.5rem 0;
}

.privacy-card .highlight-box p {
    margin: 0;
    color: #2c3e50;
    font-weight: 500;
}

.privacy-card .info-badge {
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

.data-table {
    width: 100%;
    border-collapse: collapse;
    margin: 1.5rem 0;
    background: rgba(248, 249, 250, 0.5);
    border-radius: 10px;
    overflow: hidden;
}

.data-table th {
    background: linear-gradient(135deg, rgba(62, 106, 225, 0.15), rgba(62, 106, 225, 0.05));
    color: #2c3e50;
    padding: 1rem;
    text-align: left;
    font-weight: 600;
    border-bottom: 2px solid rgba(62, 106, 225, 0.2);
}

.data-table td {
    padding: 1rem;
    border-bottom: 1px solid rgba(62, 106, 225, 0.1);
    color: #5d6d7e;
}

.data-table tr:last-child td {
    border-bottom: none;
}

@media (max-width: 768px) {
    .privacy-hero {
        min-height: 40vh;
    }
    
    .privacy-card {
        padding: 1.5rem;
    }
    
    .privacy-card h2 {
        font-size: 1.75rem;
    }
    
    .privacy-card h3 {
        font-size: 1.25rem;
    }
    
    .data-table {
        font-size: 0.9rem;
    }
    
    .data-table th,
    .data-table td {
        padding: 0.75rem;
    }
}
</style>

<!-- Hero Section -->
<section class="privacy-hero">
    <div class="container position-relative" style="z-index: 2;">
        <div class="row">
            <div class="col-lg-10 mx-auto text-center text-white">
                <h1 class="display-4 fw-bold mb-3 animated-element">Privacy Policy</h1>
                <p class="lead mb-0 animated-element" style="opacity: 0.95;">
                    Your privacy is important to us. Learn how we protect your personal information.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Privacy Content -->
<section class="privacy-section">
    <div class="container">
        <div class="privacy-container">
            
            <!-- Introduction -->
            <div class="privacy-card">
                <h2>
                    <i class="bi bi-shield-lock"></i>
                    Introduction
                </h2>
                <p>
                    <strong>OneCall Technical Services</strong> ("we," "our," or "us") is committed to protecting your privacy and personal information. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you use our services or visit our website.
                </p>
                <p>
                    By using our services or website, you consent to the data practices described in this Privacy Policy. If you do not agree with the practices described in this policy, please do not use our services.
                </p>
                <div class="highlight-box">
                    <p>
                        <i class="bi bi-info-circle me-2" style="color: #3e6ae1;"></i>
                        <strong>Last Updated:</strong> {{ date('F d, Y') }}
                    </p>
                </div>
            </div>

            <!-- Information We Collect -->
            <div class="privacy-card">
                <h2>
                    <i class="bi bi-database"></i>
                    Information We Collect
                </h2>
                
                <h3>1. Personal Information</h3>
                <p>
                    We collect personal information that you provide directly to us, including:
                </p>
                <ul>
                    <li><strong>Contact Information:</strong> Name, phone number, email address, physical address</li>
                    <li><strong>Service Information:</strong> Service requests, property details, service history</li>
                    <li><strong>Payment Information:</strong> Billing address, payment method details (processed securely through third-party processors)</li>
                    <li><strong>Communication Records:</strong> Correspondence, feedback, complaints, and service inquiries</li>
                </ul>

                <h3>2. Automatically Collected Information</h3>
                <p>
                    When you visit our website, we automatically collect certain information:
                </p>
                <ul>
                    <li><strong>Device Information:</strong> IP address, browser type, device type, operating system</li>
                    <li><strong>Usage Data:</strong> Pages visited, time spent on pages, click patterns, referral sources</li>
                    <li><strong>Location Data:</strong> General geographic location (city/region level)</li>
                    <li><strong>Cookies and Tracking Technologies:</strong> See our Cookie Policy section below</li>
                </ul>

                <h3>3. Information from Third Parties</h3>
                <p>
                    We may receive information about you from:
                </p>
                <ul>
                    <li>Service providers and business partners</li>
                    <li>Social media platforms (if you interact with us on social media)</li>
                    <li>Public databases and directories</li>
                    <li>Referral sources</li>
                </ul>
            </div>

            <!-- How We Use Your Information -->
            <div class="privacy-card">
                <h2>
                    <i class="bi bi-gear"></i>
                    How We Use Your Information
                </h2>

                <h3>4. Service Provision</h3>
                <p>
                    We use your information to:
                </p>
                <ul>
                    <li>Process and fulfill your service requests</li>
                    <li>Schedule appointments and dispatch technicians</li>
                    <li>Communicate about your services (confirmations, updates, reminders)</li>
                    <li>Provide customer support and respond to inquiries</li>
                    <li>Process payments and send invoices</li>
                </ul>

                <h3>5. Business Operations</h3>
                <p>
                    Your information helps us:
                </p>
                <ul>
                    <li>Improve our services and customer experience</li>
                    <li>Conduct quality assurance and training</li>
                    <li>Manage our business operations</li>
                    <li>Comply with legal obligations and regulations</li>
                    <li>Prevent fraud and ensure security</li>
                </ul>

                <h3>6. Marketing and Communications</h3>
                <p>
                    With your consent, we may use your information to:
                </p>
                <ul>
                    <li>Send promotional materials and special offers</li>
                    <li>Notify you about new services or updates</li>
                    <li>Conduct surveys and gather feedback</li>
                    <li>Send newsletters and marketing communications</li>
                </ul>
                <p>
                    You can opt-out of marketing communications at any time by clicking the unsubscribe link in our emails or contacting us directly.
                </p>

                <h3>7. Legal Compliance</h3>
                <p>
                    We may use your information to:
                </p>
                <ul>
                    <li>Comply with UAE laws and regulations</li>
                    <li>Respond to legal requests and court orders</li>
                    <li>Protect our rights and property</li>
                    <li>Enforce our Terms of Service</li>
                </ul>
            </div>

            <!-- Information Sharing -->
            <div class="privacy-card">
                <h2>
                    <i class="bi bi-share"></i>
                    Information Sharing and Disclosure
                </h2>

                <h3>8. Service Providers</h3>
                <p>
                    We may share your information with trusted third-party service providers who assist us in:
                </p>
                <ul>
                    <li>Payment processing</li>
                    <li>Website hosting and maintenance</li>
                    <li>Email and communication services</li>
                    <li>Analytics and marketing services</li>
                    <li>Customer support tools</li>
                </ul>
                <p>
                    These service providers are contractually obligated to protect your information and use it only for the purposes we specify.
                </p>

                <h3>9. Business Transfers</h3>
                <p>
                    In the event of a merger, acquisition, or sale of assets, your information may be transferred to the acquiring entity. We will notify you of any such change in ownership.
                </p>

                <h3>10. Legal Requirements</h3>
                <p>
                    We may disclose your information if required by law or in good faith belief that such disclosure is necessary to:
                </p>
                <ul>
                    <li>Comply with legal obligations</li>
                    <li>Protect and defend our rights or property</li>
                    <li>Prevent or investigate possible wrongdoing</li>
                    <li>Protect the personal safety of users or the public</li>
                </ul>

                <h3>11. With Your Consent</h3>
                <p>
                    We may share your information with third parties when you have given us explicit consent to do so.
                </p>
            </div>

            <!-- Data Security -->
            <div class="privacy-card">
                <h2>
                    <i class="bi bi-shield-check"></i>
                    Data Security
                </h2>

                <h3>12. Security Measures</h3>
                <p>
                    We implement appropriate technical and organizational measures to protect your personal information:
                </p>
                <ul>
                    <li><strong>Encryption:</strong> SSL/TLS encryption for data transmission</li>
                    <li><strong>Access Controls:</strong> Limited access to personal information on a need-to-know basis</li>
                    <li><strong>Secure Storage:</strong> Protected servers and databases</li>
                    <li><strong>Regular Updates:</strong> Security patches and system updates</li>
                    <li><strong>Employee Training:</strong> Privacy and security awareness training</li>
                    <li><strong>Monitoring:</strong> Regular security audits and monitoring</li>
                </ul>

                <div class="highlight-box">
                    <p>
                        <i class="bi bi-exclamation-triangle me-2" style="color: #3e6ae1;"></i>
                        <strong>Important:</strong> While we strive to protect your information, no method of transmission over the internet or electronic storage is 100% secure. We cannot guarantee absolute security.
                    </p>
                </div>

                <h3>13. Data Breach Procedures</h3>
                <p>
                    In the event of a data breach that may affect your personal information, we will:
                </p>
                <ul>
                    <li>Investigate the breach immediately</li>
                    <li>Notify relevant authorities as required by law</li>
                    <li>Notify affected individuals without undue delay</li>
                    <li>Take steps to mitigate the impact and prevent future breaches</li>
                </ul>
            </div>

            <!-- Your Rights -->
            <div class="privacy-card">
                <h2>
                    <i class="bi bi-person-check"></i>
                    Your Privacy Rights
                </h2>

                <h3>14. Access and Correction</h3>
                <p>
                    You have the right to:
                </p>
                <ul>
                    <li>Access your personal information we hold</li>
                    <li>Request correction of inaccurate or incomplete information</li>
                    <li>Request updates to your information</li>
                </ul>

                <h3>15. Deletion and Restriction</h3>
                <p>
                    You may request:
                </p>
                <ul>
                    <li>Deletion of your personal information (subject to legal retention requirements)</li>
                    <li>Restriction of processing your information</li>
                    <li>Objection to certain types of processing</li>
                </ul>

                <h3>16. Data Portability</h3>
                <p>
                    You have the right to receive your personal information in a structured, commonly used format and to transmit it to another service provider.
                </p>

                <h3>17. Opt-Out Rights</h3>
                <p>
                    You can opt-out of:
                </p>
                <ul>
                    <li>Marketing communications (emails, SMS, calls)</li>
                    <li>Non-essential cookies and tracking</li>
                    <li>Data sharing for marketing purposes</li>
                </ul>

                <h3>18. Exercising Your Rights</h3>
                <p>
                    To exercise any of these rights, please contact us at:
                </p>
                <ul>
                    <li>Email: <a href="mailto:{{ config('company.email') }}" style="color: #3e6ae1; text-decoration: none;">{{ config('company.email') }}</a></li>
                    <li>Phone: <a href="https://wa.me/971509227536" target="_blank" rel="noopener" style="color: #3e6ae1; text-decoration: none;">+971 50 922 7536</a></li>
                    <li>Address: {{ config('company.address.locality') }}, {{ config('company.address.country') }}</li>
                </ul>
                <p>
                    We will respond to your request within 30 days.
                </p>
            </div>

            <!-- Cookies and Tracking -->
            <div class="privacy-card">
                <h2>
                    <i class="bi bi-cookie"></i>
                    Cookies and Tracking Technologies
                </h2>

                <h3>19. Types of Cookies</h3>
                <p>
                    We use various types of cookies and tracking technologies:
                </p>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Purpose</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Essential Cookies</strong></td>
                            <td>Required for website functionality and security</td>
                        </tr>
                        <tr>
                            <td><strong>Analytics Cookies</strong></td>
                            <td>Help us understand how visitors use our website</td>
                        </tr>
                        <tr>
                            <td><strong>Marketing Cookies</strong></td>
                            <td>Used to deliver relevant advertisements and track campaign effectiveness</td>
                        </tr>
                        <tr>
                            <td><strong>Preference Cookies</strong></td>
                            <td>Remember your preferences and settings</td>
                        </tr>
                    </tbody>
                </table>

                <h3>20. Managing Cookies</h3>
                <p>
                    You can control cookies through:
                </p>
                <ul>
                    <li>Your browser settings (most browsers allow you to refuse or delete cookies)</li>
                    <li>Our cookie consent banner (when available)</li>
                    <li>Third-party opt-out tools (for advertising cookies)</li>
                </ul>
                <p>
                    Note: Disabling certain cookies may affect website functionality.
                </p>
            </div>

            <!-- Data Retention -->
            <div class="privacy-card">
                <h2>
                    <i class="bi bi-clock-history"></i>
                    Data Retention
                </h2>

                <h3>21. Retention Period</h3>
                <p>
                    We retain your personal information for as long as necessary to:
                </p>
                <ul>
                    <li>Provide our services to you</li>
                    <li>Comply with legal obligations</li>
                    <li>Resolve disputes and enforce agreements</li>
                    <li>Maintain business records</li>
                </ul>

                <h3>22. Retention Periods</h3>
                <ul>
                    <li><strong>Service Records:</strong> 7 years (for accounting and legal compliance)</li>
                    <li><strong>Marketing Data:</strong> Until you opt-out or request deletion</li>
                    <li><strong>Website Analytics:</strong> 26 months (Google Analytics default)</li>
                    <li><strong>Communication Records:</strong> 3 years</li>
                </ul>

                <h3>23. Deletion</h3>
                <p>
                    When we no longer need your information, we will securely delete or anonymize it in accordance with our data retention policies.
                </p>
            </div>

            <!-- Children's Privacy -->
            <div class="privacy-card">
                <h2>
                    <i class="bi bi-people"></i>
                    Children's Privacy
                </h2>

                <h3>24. Age Restrictions</h3>
                <p>
                    Our services are not directed to individuals under the age of 18. We do not knowingly collect personal information from children. If you believe we have collected information from a child, please contact us immediately, and we will take steps to delete such information.
                </p>
            </div>

            <!-- International Transfers -->
            <div class="privacy-card">
                <h2>
                    <i class="bi bi-globe"></i>
                    International Data Transfers
                </h2>

                <h3>25. Data Location</h3>
                <p>
                    Your personal information is primarily stored and processed in the United Arab Emirates. However, some of our service providers may be located outside the UAE. When we transfer data internationally, we ensure appropriate safeguards are in place to protect your information.
                </p>
            </div>

            <!-- Third-Party Links -->
            <div class="privacy-card">
                <h2>
                    <i class="bi bi-link-45deg"></i>
                    Third-Party Links
                </h2>

                <h3>26. External Websites</h3>
                <p>
                    Our website may contain links to third-party websites. We are not responsible for the privacy practices or content of these external sites. We encourage you to review the privacy policies of any third-party sites you visit.
                </p>
            </div>

            <!-- Policy Updates -->
            <div class="privacy-card">
                <h2>
                    <i class="bi bi-arrow-repeat"></i>
                    Policy Updates
                </h2>

                <h3>27. Changes to This Policy</h3>
                <p>
                    We may update this Privacy Policy from time to time to reflect changes in our practices or legal requirements. We will:
                </p>
                <ul>
                    <li>Post the updated policy on our website</li>
                    <li>Update the "Last Updated" date</li>
                    <li>Notify you of significant changes via email or website notice</li>
                </ul>
                <p>
                    Your continued use of our services after changes become effective constitutes acceptance of the updated policy.
                </p>
            </div>

            <!-- Contact Information -->
            <div class="privacy-card">
                <h2>
                    <i class="bi bi-envelope"></i>
                    Contact Us
                </h2>

                <h3>28. Privacy Inquiries</h3>
                <p>
                    If you have questions, concerns, or requests regarding this Privacy Policy or our data practices, please contact us:
                </p>
                <ul>
                    <li><strong>Company:</strong> OneCall Technical Services</li>
                    <li><strong>Email:</strong> <a href="mailto:{{ config('company.email') }}" style="color: #3e6ae1; text-decoration: none;">{{ config('company.email') }}</a></li>
                    <li><strong>Phone:</strong> <a href="https://wa.me/971509227536" target="_blank" rel="noopener" style="color: #3e6ae1; text-decoration: none;">+971 50 922 7536</a></li>
                    <li><strong>Address:</strong> {{ config('company.address.locality') }}, {{ config('company.address.country') }}</li>
                </ul>

                <h3>29. Data Protection Officer</h3>
                <p>
                    For privacy-related inquiries, you can reach our data protection team at the contact information above.
                </p>
            </div>

            <!-- Contact CTA -->
            <div class="contact-cta">
                <h3>
                    <i class="bi bi-question-circle"></i>
                    Questions About Your Privacy?
                </h3>
                <p>
                    We're here to help. Contact us if you have any questions about how we handle your personal information.
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
                    <a href="{{ route('terms') }}" class="btn btn-outline-primary px-4">
                        <i class="bi bi-file-text me-2"></i>
                        Terms of Service
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
