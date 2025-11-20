// ===================================
// EWARDD - JavaScript Functions
// ===================================

// Mobile Menu Toggle
function toggleMobileMenu() {
    const nav = document.querySelector('.main-nav');
    const toggle = document.querySelector('.mobile-menu-toggle');
    nav.classList.toggle('active');
    toggle.classList.toggle('active');
}

// Submenu Toggle for Mobile
document.addEventListener('DOMContentLoaded', function() {
    const hasSubmenu = document.querySelectorAll('.has-submenu > a');
    
    hasSubmenu.forEach(item => {
        item.addEventListener('click', function(e) {
            if (window.innerWidth <= 992) {
                e.preventDefault();
                this.parentElement.classList.toggle('active');
            }
        });
    });
});

// Hero Slider
let currentSlide = 0;
const slides = document.querySelectorAll('.hero-slide');
const indicators = document.querySelectorAll('.hero-indicator');

function updateIndicators() {
    indicators.forEach((indicator, index) => {
        if (index === currentSlide) {
            indicator.classList.add('active');
        } else {
            indicator.classList.remove('active');
        }
    });
}

function showSlide(index) {
    slides.forEach(slide => slide.classList.remove('active'));
    
    if (index >= slides.length) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = slides.length - 1;
    } else {
        currentSlide = index;
    }
    
    slides[currentSlide].classList.add('active');
    updateIndicators();
}

function changeSlide(direction) {
    showSlide(currentSlide + direction);
}

function goToSlide(index) {
    showSlide(index);
}

// Auto slide with pause on hover
let autoSlideInterval;

function startAutoSlide() {
    if (slides.length > 0) {
        autoSlideInterval = setInterval(() => {
            changeSlide(1);
        }, 5000);
    }
}

function stopAutoSlide() {
    clearInterval(autoSlideInterval);
}

startAutoSlide();

// Pause on hover
const heroSection = document.querySelector('.hero-section');
if (heroSection) {
    heroSection.addEventListener('mouseenter', stopAutoSlide);
    heroSection.addEventListener('mouseleave', startAutoSlide);
}

// Scroll to Top Button
window.addEventListener('scroll', function() {
    const scrollBtn = document.querySelector('.scroll-to-top');
    if (scrollBtn) {
        if (window.pageYOffset > 300) {
            scrollBtn.classList.add('visible');
        } else {
            scrollBtn.classList.remove('visible');
        }
    }
});

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

// Smooth Scroll for Anchor Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (href !== '#' && href !== '') {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    });
});

// ===================================
// ADVANCED SCRAP PRICE CALCULATOR
// ===================================

// Toggle category expansion
function toggleCategory(element) {
    const category = element.parentElement;
    category.classList.toggle('active');
}

// Increment quantity
function incrementQty(button) {
    const input = button.previousElementSibling;
    const currentValue = parseInt(input.value) || 0;
    input.value = currentValue + 1;
    updateCalculator();
}

// Decrement quantity
function decrementQty(button) {
    const input = button.nextElementSibling;
    const currentValue = parseInt(input.value) || 0;
    if (currentValue > 0) {
        input.value = currentValue - 1;
        updateCalculator();
    }
}

// Update calculator totals and selected items
function updateCalculator() {
    const selectedItemsDiv = document.getElementById('selectedItems');
    const items = document.querySelectorAll('.calculator-item');
    let total = 0;
    let selectedHtml = '';
    let hasItems = false;
    
    items.forEach(item => {
        const qty = parseInt(item.querySelector('.qty-input').value) || 0;
        if (qty > 0) {
            hasItems = true;
            const name = item.querySelector('.item-name').textContent;
            const price = parseInt(item.dataset.price);
            const itemTotal = qty * price;
            total += itemTotal;
            
            selectedHtml += `
                <div class="selected-item">
                    <div>
                        <div class="selected-item-name">${name}</div>
                        <div class="selected-item-qty">Quantity: ${qty}</div>
                    </div>
                    <div class="selected-item-price">₹${itemTotal.toLocaleString()}</div>
                </div>
            `;
        }
    });
    
    if (hasItems) {
        selectedItemsDiv.innerHTML = selectedHtml;
    } else {
        selectedItemsDiv.innerHTML = '<p class="empty-message">Select items to see estimate</p>';
    }
    
    document.querySelector('.total-amount').textContent = '₹' + total.toLocaleString();
}

// Request accurate quote
function requestQuote() {
    const items = [];
    const calculatorItems = document.querySelectorAll('.calculator-item');
    
    calculatorItems.forEach(item => {
        const qty = parseInt(item.querySelector('.qty-input').value) || 0;
        if (qty > 0) {
            const name = item.querySelector('.item-name').textContent;
            items.push({
                name: name,
                quantity: qty
            });
        }
    });
    
    if (items.length === 0) {
        showNotification('Please select at least one item to get a quote.', 'info');
        return;
    }
    
    // Store selected items and redirect to contact page
    sessionStorage.setItem('calculatorItems', JSON.stringify(items));
    
    showNotification('Redirecting to contact form...', 'success');
    
    setTimeout(() => {
        window.location.href = 'contact.php?from=calculator';
    }, 1500);
}

// Auto-open first category
document.addEventListener('DOMContentLoaded', function() {
    const firstCategory = document.querySelector('.item-category');
    if (firstCategory) {
        firstCategory.classList.add('active');
    }
});

// Form Submissions
const priceForm = document.getElementById('priceForm');
if (priceForm) {
    priceForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const data = Object.fromEntries(formData);
        
        // Show success message
        showNotification('Thank you! Our team will contact you shortly with the best price quote.', 'success');
        
        // Reset form
        this.reset();
        
        // In production, send data to server
        // fetch('submit-price-form.php', {
        //     method: 'POST',
        //     body: formData
        // });
    });
}

// Contact Form
const contactForm = document.getElementById('contactForm');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        
        // Show success message
        showNotification('Thank you for contacting us! We will get back to you within 24 hours.', 'success');
        
        // Reset form
        this.reset();
        
        // In production, send data to server
        // fetch('submit-contact-form.php', {
        //     method: 'POST',
        //     body: formData
        // });
    });
}

// Notification System
function showNotification(message, type = 'info') {
    // Remove existing notifications
    const existing = document.querySelector('.notification');
    if (existing) {
        existing.remove();
    }
    
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <div class="notification-content">
            <i class="fas fa-${type === 'success' ? 'check-circle' : 'info-circle'}"></i>
            <span>${message}</span>
        </div>
        <button class="notification-close" onclick="this.parentElement.remove()">
            <i class="fas fa-times"></i>
        </button>
    `;
    
    document.body.appendChild(notification);
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        if (notification.parentElement) {
            notification.classList.add('fade-out');
            setTimeout(() => notification.remove(), 300);
        }
    }, 5000);
}

// FAQ Accordion
const faqItems = document.querySelectorAll('.faq-item');
faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    if (question) {
        question.addEventListener('click', function() {
            // Close other items
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Toggle current item
            item.classList.toggle('active');
        });
    }
});

// Animate on Scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate-in');
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Observe elements
document.addEventListener('DOMContentLoaded', function() {
    const animateElements = document.querySelectorAll('.feature-card, .service-card, .step-card, .testimonial-card, .case-study-card');
    animateElements.forEach(el => {
        observer.observe(el);
    });
});

// Counter Animation
function animateCounter(element, target, duration = 2000) {
    let start = 0;
    const increment = target / (duration / 16);
    
    const timer = setInterval(() => {
        start += increment;
        if (start >= target) {
            element.textContent = target.toLocaleString();
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(start).toLocaleString();
        }
    }, 16);
}

// Initialize counters when visible
const counters = document.querySelectorAll('.counter');
counters.forEach(counter => {
    const target = parseInt(counter.getAttribute('data-target'));
    
    const counterObserver = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(counter, target);
                counterObserver.unobserve(counter);
            }
        });
    });
    
    counterObserver.observe(counter);
});

// Image Upload Preview
const imageInputs = document.querySelectorAll('input[type="file"]');
imageInputs.forEach(input => {
    input.addEventListener('change', function(e) {
        const files = e.target.files;
        if (files.length > 0) {
            const preview = document.createElement('div');
            preview.className = 'file-preview';
            preview.innerHTML = `<i class="fas fa-file-image"></i> ${files.length} file(s) selected`;
            
            // Remove existing preview
            const existing = input.nextElementSibling;
            if (existing && existing.classList.contains('file-preview')) {
                existing.remove();
            }
            
            input.parentElement.insertBefore(preview, input.nextSibling);
        }
    });
});

// Header Scroll Effect
let lastScroll = 0;
const header = document.querySelector('.site-header');

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    
    if (currentScroll > 100) {
        header.style.padding = '10px 0';
        header.style.boxShadow = '0 2px 15px rgba(0,0,0,0.1)';
    } else {
        header.style.padding = '15px 0';
        header.style.boxShadow = '0 4px 6px rgba(0,0,0,0.07)';
    }
    
    lastScroll = currentScroll;
});

// WhatsApp Click Tracking
const whatsappButton = document.querySelector('.whatsapp-float');
if (whatsappButton) {
    whatsappButton.addEventListener('click', function() {
        console.log('WhatsApp button clicked');
        // Add analytics tracking here
    });
}

// Close mobile menu when clicking outside
document.addEventListener('click', function(e) {
    const nav = document.querySelector('.main-nav');
    const toggle = document.querySelector('.mobile-menu-toggle');
    
    if (nav && nav.classList.contains('active')) {
        if (!nav.contains(e.target) && !toggle.contains(e.target)) {
            nav.classList.remove('active');
            toggle.classList.remove('active');
        }
    }
});

console.log('EWARDD Website Loaded Successfully ✓');

