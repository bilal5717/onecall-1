/**
 * Hero Carousel Component
 * Handles the hero section slider functionality
 */
document.addEventListener('DOMContentLoaded', function() {
    // Wait for heroCarouselData to be available (set by Blade template)
    function initCarousel() {
        // Check if data is available, if not wait a bit
        if (!window.heroCarouselData || !window.heroCarouselData.services) {
            setTimeout(initCarousel, 100);
            return;
        }

        // Use service data from Blade template
        const services = window.heroCarouselData.services;

        // DOM Elements
        const heroSection = document.getElementById('hero-slider');
        const serviceBadge = document.getElementById('service-badge');
        const serviceTitle = document.getElementById('service-title');
        const ctaButton = document.getElementById('cta-button');
        const dots = document.querySelectorAll('.slider-dot');
        const animatedElements = document.querySelectorAll('.animated-element');

        if (!heroSection || !serviceBadge || !serviceTitle || !ctaButton) {
            return; // Exit if required elements don't exist
        }

        let currentSlide = 0;
        let slideInterval;
        let isAnimating = false;

        // Set initial slide immediately on page load
        function initializeFirstSlide() {
            const firstService = services[0];
            heroSection.style.background = `linear-gradient(${firstService.bgColor}, #33333346), 
                                           url('${firstService.bgImage}')`;
            heroSection.style.backgroundSize = 'cover';
            heroSection.style.backgroundPosition = 'center';
            heroSection.style.backgroundAttachment = 'fixed';
            
            // Ensure content matches
            serviceBadge.innerHTML = firstService.badge;
            serviceTitle.textContent = firstService.title;
            const ctaIcon = ctaButton.querySelector('i');
            if (ctaIcon) {
                ctaIcon.className = `fa ${firstService.ctaIcon} me-2`;
            }
            if (dots[0]) {
                dots[0].classList.add('active');
            }
        }

        // Call initialization immediately
        initializeFirstSlide();

        // Animation function
        function animateOut(elements) {
            return new Promise((resolve) => {
                elements.forEach(element => {
                    element.style.opacity = '0';
                    element.style.transform = 'translateY(20px)';
                });
                
                setTimeout(resolve, 300);
            });
        }

        function animateIn(elements) {
            elements.forEach((element, index) => {
                setTimeout(() => {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }, index * 100);
            });
        }

        // Update slide function
        function updateSlide(slideIndex) {
            if (isAnimating) return;
            isAnimating = true;
            
            const service = services[slideIndex];
            
            // Animate elements out
            animateOut(animatedElements).then(() => {
                // Update all content
                serviceBadge.innerHTML = service.badge;
                serviceTitle.textContent = service.title;
                
                // Update CTA button icon
                const ctaIcon = ctaButton.querySelector('i');
                if (ctaIcon) {
                    ctaIcon.className = `fa ${service.ctaIcon} me-2`;
                }
                
                // Update background
                heroSection.style.background = `linear-gradient(${service.bgColor}, #33333346), 
                                               url('${service.bgImage}')`;
                heroSection.style.backgroundSize = 'cover';
                heroSection.style.backgroundPosition = 'center';
                heroSection.style.backgroundAttachment = 'fixed';
                
                // Update dots
                dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === slideIndex);
                });
                
                // Animate elements in
                animateIn(animatedElements);
                
                currentSlide = slideIndex;
                isAnimating = false;
            });
        }

        // Next slide function
        function nextSlide() {
            const nextIndex = (currentSlide + 1) % services.length;
            updateSlide(nextIndex);
        }

        // Auto-slide function
        function startAutoSlide() {
            slideInterval = setInterval(nextSlide, 7000);
        }

        // Stop auto-slide on hover
        function stopAutoSlide() {
            clearInterval(slideInterval);
        }

        // Dot click events
        dots.forEach(dot => {
            dot.addEventListener('click', function() {
                const slideIndex = parseInt(this.getAttribute('data-slide'));
                if (slideIndex !== currentSlide) {
                    updateSlide(slideIndex);
                    stopAutoSlide();
                    startAutoSlide();
                }
            });
        });

        // Pause auto-slide on hover
        heroSection.addEventListener('mouseenter', stopAutoSlide);
        heroSection.addEventListener('mouseleave', startAutoSlide);

        // Initialize with initial animation
        setTimeout(() => {
            animateIn(animatedElements);
        }, 100);
        
        startAutoSlide();
    }

    // Start initialization
    initCarousel();
});
