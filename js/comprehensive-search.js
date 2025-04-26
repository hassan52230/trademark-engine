/**
 * Comprehensive Trademark Search page JavaScript
 *
 * Handles interactive elements on the Comprehensive Trademark Search page
 */

document.addEventListener('DOMContentLoaded', function() {
    // Handle FAQ accordion functionality
    const faqQuestions = document.querySelectorAll('.faq-question');
    
    faqQuestions.forEach(question => {
        question.addEventListener('click', function() {
            const answer = this.nextElementSibling;
            const arrow = this.querySelector('.arrow i');
            
            // Toggle answer visibility
            answer.classList.toggle('hidden');
            
            // Change arrow direction
            if (arrow.classList.contains('fa-chevron-down')) {
                arrow.classList.remove('fa-chevron-down');
                arrow.classList.add('fa-chevron-up');
            } else {
                arrow.classList.remove('fa-chevron-up');
                arrow.classList.add('fa-chevron-down');
            }
            
            // Close other FAQs
            faqQuestions.forEach(otherQuestion => {
                if (otherQuestion !== this) {
                    const otherAnswer = otherQuestion.nextElementSibling;
                    const otherArrow = otherQuestion.querySelector('.arrow i');
                    
                    if (!otherAnswer.classList.contains('hidden')) {
                        otherAnswer.classList.add('hidden');
                        otherArrow.classList.remove('fa-chevron-up');
                        otherArrow.classList.add('fa-chevron-down');
                    }
                }
            });
        });
    });
    
    // Smooth scroll for navigation links
    const navLinks = document.querySelectorAll('a[href^="#"]');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Pricing toggle functionality (if applicable)
    const pricingToggle = document.querySelector('.pricing-toggle');
    
    if (pricingToggle) {
        pricingToggle.addEventListener('click', function() {
            const monthlyPrices = document.querySelectorAll('.price-monthly');
            const yearlyPrices = document.querySelectorAll('.price-yearly');
            
            // Toggle active class on buttons
            document.querySelector('.toggle-monthly').classList.toggle('active');
            document.querySelector('.toggle-yearly').classList.toggle('active');
            
            // Toggle price visibility
            monthlyPrices.forEach(price => price.classList.toggle('hidden'));
            yearlyPrices.forEach(price => price.classList.toggle('hidden'));
        });
    }
    
    // Form validation for contact/quote forms
    const contactForm = document.querySelector('.contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            let isValid = true;
            const requiredFields = this.querySelectorAll('[required]');
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('error');
                } else {
                    field.classList.remove('error');
                }
                
                // Email validation
                if (field.type === 'email' && field.value.trim()) {
                    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailPattern.test(field.value)) {
                        isValid = false;
                        field.classList.add('error');
                    }
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                document.querySelector('.form-error-message').classList.remove('hidden');
            }
        });
    }
    
    // Sticky header on scroll
    const header = document.querySelector('.site-header');
    const headerHeight = header ? header.offsetHeight : 0;
    
    window.addEventListener('scroll', function() {
        if (header && window.scrollY > headerHeight) {
            header.classList.add('sticky');
        } else if (header) {
            header.classList.remove('sticky');
        }
    });
}); 