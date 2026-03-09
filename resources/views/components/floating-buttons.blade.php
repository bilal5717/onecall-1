<!-- Add Font Awesome CDN in your head section if not already present -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- Floating WhatsApp and Call Buttons -->
<div class="floating-buttons">
    <!-- WhatsApp Button -->
    <a href="https://wa.me/971509227536" 
       target="_blank" 
       class="floating-btn floating-btn-whatsapp" 
       aria-label="Contact us on WhatsApp"
       title="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
        <span class="floating-btn-tooltip">Chat on WhatsApp</span>
    </a>
    
    <!-- WhatsApp (direct) Button -->
    <a href="https://wa.me/971509227536" class="floating-btn floating-btn-call" aria-label="WhatsApp" title="WhatsApp" target="_blank" rel="noopener">
        <i class="fa fa-phone" aria-hidden="true"></i>
        <span class="floating-btn-tooltip">WhatsApp</span>
    </a>
</div>

<style>
/* Ensure the buttons are visible */
.floating-buttons {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 999999; /* Increased z-index */
    display: flex;
    flex-direction: column;
    gap: 15px;
    /* Remove pointer-events: none from container */
}

.floating-btn {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex !important; /* Force display */
    align-items: center;
    justify-content: center;
    color: white !important; /* Force color */
    font-size: 24px;
    text-decoration: none !important; /* Remove underline */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    cursor: pointer;
    border: none;
    outline: none;
    animation: float 3s ease-in-out infinite;
    /* Ensure it's clickable */
    pointer-events: auto !important;
    z-index: 1000000;
}

.floating-btn-whatsapp {
    background: linear-gradient(135deg, #25D366, #128C7E);
}

.floating-btn-call {
    background: linear-gradient(135deg, #3e6ae1, #111d45);
}

/* Hover effects */
.floating-btn:hover {
    transform: translateY(-5px) scale(1.1);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
    color: white !important;
}

.floating-btn-whatsapp:hover {
    background: linear-gradient(135deg, #128C7E, #25D366);
}

.floating-btn-call:hover {
    background: linear-gradient(135deg, #111d45, #3e6ae1);
}

/* Animation */
@keyframes float {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}

.floating-btn:nth-child(2) {
    animation-delay: 0.5s;
}

/* Tooltip */
.floating-btn-tooltip {
    position: absolute;
    right: 70px;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.9);
    color: white;
    padding: 8px 12px;
    border-radius: 8px;
    font-size: 14px;
    white-space: nowrap;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    pointer-events: none;
    font-weight: 500;
    z-index: 1000001;
}

.floating-btn-tooltip::after {
    content: '';
    position: absolute;
    left: 100%;
    top: 50%;
    transform: translateY(-50%);
    border: 6px solid transparent;
    border-left-color: rgba(0, 0, 0, 0.9);
}

.floating-btn:hover .floating-btn-tooltip {
    opacity: 1;
    visibility: visible;
    right: 75px;
}

/* Pulse animation */
.floating-btn-call::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: inherit;
    animation: pulse-ring 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    z-index: -1;
    pointer-events: none;
}

@keyframes pulse-ring {
    0% {
        transform: scale(1);
        opacity: 1;
    }
    100% {
        transform: scale(1.5);
        opacity: 0;
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .floating-buttons {
        bottom: 15px;
        right: 15px;
        gap: 12px;
    }
    
    .floating-btn {
        width: 55px;
        height: 55px;
        font-size: 22px;
    }
    
    .floating-btn-tooltip {
        display: none;
    }
}

@media (max-width: 480px) {
    .floating-buttons {
        bottom: 10px;
        right: 10px;
    }
    
    .floating-btn {
        width: 50px;
        height: 50px;
        font-size: 20px;
    }
}
</style>