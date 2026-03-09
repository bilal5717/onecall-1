/**
 * Home Page Component
 * Handles home page specific functionality
 */

// SEO-friendly URL for service areas
const serviceAreas = [
    "Deira", "Bur Dubai", "Karama", "Satwa", "Business Bay", 
    "Downtown Dubai", "Dubai Marina", "Jumeirah", "JLT", "JVC",
    "JVT", "Palm Jumeirah", "Al Barsha", "Al Quoz", "Al Nahda",
    "Discovery Gardens", "Mirdif", "Arabian Ranches", "Dubai Silicon Oasis", "DIP",
    "Dubai Sports City", "Motor City", "Damac Hills", "The Greens", "The Springs",
    "Meadows", "Emirates Hills", "Academic City", "Al Safa", "Al Rashidiya",
    "Al Warqa", "Al Mizhar", "Meydan", "Dubai Hills", "Umm Suqeim", "International City"
];

// Create area badges with SEO-friendly links
function createAreaBadges() {
    const container = document.querySelector('.area-badges');
    if (!container) return;
    
    serviceAreas.forEach(area => {
        const badge = document.createElement('a');
        badge.href = `/services/areas/${area.toLowerCase().replace(/\s+/g, '-')}`;
        badge.className = 'area-badge';
        badge.textContent = area;
        badge.setAttribute('aria-label', `Services in ${area}`);
        container.appendChild(badge);
    });
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    createAreaBadges();
    
    // Add current year for copyright
    const yearSpan = document.querySelector('#current-year');
    if (yearSpan) {
        yearSpan.textContent = new Date().getFullYear();
    }
    
    // Performance: Defer non-critical JavaScript
    if ('requestIdleCallback' in window) {
        window.requestIdleCallback(() => {
            // Load non-critical functionality here
        });
    }
});
