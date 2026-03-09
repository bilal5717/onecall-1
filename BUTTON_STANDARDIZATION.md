# Button Standardization Documentation

## Overview
All buttons across the website now use standardized CSS classes based on the footer button design. This ensures consistency and removes redundant inline styles.

## Standardized Button Classes

### 1. Call Now / Primary Buttons
**Class:** `btn btn-primary`
**Style:** 
- Background: `linear-gradient(135deg, var(--primary), var(--primary-dark))`
- Color: White
- Border: None
- Border-radius: 8px

**Usage:**
```html
<a href="tel:+971509227536" class="btn btn-primary">Call Now</a>
```

### 2. WhatsApp Buttons
**Class:** `btn btn-success`
**Style:**
- Background: `linear-gradient(135deg, var(--tesla-green), #1da851)`
- Color: White
- Border: None
- Border-radius: 8px

**Usage:**
```html
<a href="https://wa.me/971509227536" class="btn btn-success">WhatsApp</a>
```

### 3. Email / Outline Buttons
**Class:** `btn btn-outline-primary`
**Style:**
- Background: Transparent
- Border: 1px solid var(--primary-light)
- Color: var(--primary-light)
- Border-radius: 8px

**Usage:**
```html
<a href="mailto:info@onecall.ae" class="btn btn-outline-primary">Email</a>
```

### 4. Compact Buttons (for service cards)
**Class:** `btn-compact`
**Style:** Same as btn-primary but with smaller padding

**Usage:**
```html
<a href="tel:+971509227536" class="btn-compact">Call</a>
```

## CSS Location
All button styles are defined in: `public/css/custom.css`

## Automatic Conversions
The CSS automatically converts:
- `btn-light[href*="tel:"]` → Uses primary button style
- `btn-light[href*="wa.me"]` → Uses success/WhatsApp button style

## Files Updated
- ✅ `layouts/footer.blade.php` - Footer buttons standardized
- ✅ `pages/contact-us.blade.php` - All buttons updated
- ✅ `pages/about.blade.php` - Call Now & WhatsApp buttons
- ✅ `pages/home.blade.php` - Call Now button
- ✅ `pages/services.blade.php` - All Call Now buttons
- ✅ `components/why-choose.blade.php` - Call Now & WhatsApp buttons
- ✅ `components/faqs.blade.php` - Call Now button
- ✅ All service pages - Call Now & WhatsApp buttons

## Benefits
1. **Consistency** - All buttons look the same across the site
2. **Maintainability** - Change styles in one place (CSS file)
3. **Performance** - Reduced inline styles = smaller HTML
4. **Accessibility** - Consistent button styling improves UX

## Notes
- Service-specific buttons (like those in service detail pages) may retain custom colors for visual distinction
- All Call Now, WhatsApp, and Email buttons now use standardized classes
- Inline styles have been removed where possible
