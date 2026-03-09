/**
 * WhatsApp Form Handler Utility
 * Reusable function to handle form submissions and send to WhatsApp
 */
function handleWhatsAppFormSubmission(formId, serviceName, options = {}) {
    const form = document.getElementById(formId);
    if (!form) return;

    form.addEventListener('submit', function(e) {
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
        
        // Get form values - using options.fieldMap if provided
        const fieldMap = options.fieldMap || {};
        const name = (fieldMap.name ? document.getElementById(fieldMap.name) : this.querySelector('input[type="text"]'))?.value.trim() || '';
        const phone = (fieldMap.phone ? document.getElementById(fieldMap.phone) : this.querySelector('input[type="tel"]'))?.value.trim() || '';
        const email = (fieldMap.email ? document.getElementById(fieldMap.email) : this.querySelector('input[type="email"]'))?.value.trim() || '';
        const serviceType = (fieldMap.serviceType ? document.getElementById(fieldMap.serviceType) : this.querySelector('select'))?.value || '';
        const address = (fieldMap.address ? document.getElementById(fieldMap.address) : this.querySelector('input[placeholder*="address" i], input[placeholder*="Address"]'))?.value.trim() || '';
        const message = (fieldMap.message ? document.getElementById(fieldMap.message) : this.querySelector('textarea'))?.value.trim() || '';
        
        // Get additional fields if specified
        const additionalFields = {};
        if (options.additionalFields) {
            options.additionalFields.forEach(field => {
                const element = document.getElementById(field.id);
                if (element) {
                    additionalFields[field.label] = element.type === 'checkbox' ? element.checked : element.value;
                }
            });
        }
        
        // Format WhatsApp message
        let whatsappMessage = `*${options.icon || '🔧'} ${serviceName} Request - OneCall Technical Services*\n\n` +
            `*Customer Information:*\n` +
            `━━━━━━━━━━━━━━━━━━━━\n` +
            `👤 *Name:* ${name}\n` +
            `📱 *Phone:* ${phone}\n`;
        
        if (email) {
            whatsappMessage += `📧 *Email:* ${email}\n`;
        }
        
        whatsappMessage += `\n*Service Details:*\n` +
            `━━━━━━━━━━━━━━━━━━━━\n`;
        
        if (serviceType) {
            const serviceTypeText = document.querySelector(`#${fieldMap.serviceType || form.querySelector('select').id} option[value="${serviceType}"]`)?.textContent || serviceType;
            whatsappMessage += `🔧 *Service Type:* ${serviceTypeText}\n`;
        }
        
        // Add additional fields
        Object.keys(additionalFields).forEach(label => {
            const value = additionalFields[label];
            if (value && value !== '' && value !== false) {
                if (typeof value === 'boolean') {
                    whatsappMessage += `✅ *${label}*\n`;
                } else {
                    whatsappMessage += `📋 *${label}:* ${value}\n`;
                }
            }
        });
        
        if (address) {
            whatsappMessage += `📍 *Address:* ${address}\n`;
        }
        
        if (message) {
            whatsappMessage += `\n📝 *Description:*\n${message}\n`;
        }
        
        whatsappMessage += `\n━━━━━━━━━━━━━━━━━━━━\n` +
            `⏰ *Request Time:* ${new Date().toLocaleString('en-US', { 
                weekday: 'short', 
                year: 'numeric', 
                month: 'short', 
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit'
            })}\n\n` +
            `_This request was submitted through our ${serviceName} page._`;
        
        // Encode message for URL
        const encodedMessage = encodeURIComponent(whatsappMessage);
        const whatsappUrl = `https://wa.me/971509227536?text=${encodedMessage}`;
        
        // Show success state briefly
        submitBtn.innerHTML = '<i class="fab fa-whatsapp me-2"></i> Opening WhatsApp...';
        
        // Open WhatsApp after short delay
        setTimeout(() => {
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
                ${options.successMessage || `Your ${serviceName} request has been sent to WhatsApp. Our team will contact you shortly.`}
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
                this.reset();
                this.classList.remove('was-validated');
            }, 2000);
        }, 500);
        
        this.classList.add('was-validated');
    });
}
