/**
 * Statement of Use Page JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    // FAQ Accordion functionality
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            // Check if this item is already active
            const isActive = item.classList.contains('active');
            
            // Close all FAQ items
            faqItems.forEach(faqItem => {
                faqItem.classList.remove('active');
            });
            
            // If the clicked item wasn't active, open it
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 100, // Offset for fixed header if needed
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Testimonials rotation (if needed)
    const testimonials = document.querySelectorAll('.testimonial');
    let currentTestimonial = 0;
    
    // Only apply rotation if we have more than 2 testimonials and on mobile
    if (testimonials.length > 2 && window.innerWidth < 768) {
        // Hide all except the first one on mobile
        testimonials.forEach((testimonial, index) => {
            if (index > 0) {
                testimonial.style.display = 'none';
            }
        });
        
        // Rotate testimonials every 5 seconds
        setInterval(() => {
            testimonials[currentTestimonial].style.display = 'none';
            currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            testimonials[currentTestimonial].style.display = 'block';
        }, 5000);
    }
});

jQuery(document).ready(function($) {
    // FAQ accordion functionality
    $('.faq-question').on('click', function() {
        // Toggle the active class on the clicked question
        $(this).toggleClass('active');
        
        // Toggle the visibility of the answer
        const answer = $(this).next('.faq-answer');
        answer.slideToggle(300);
        
        // Toggle the icon
        $(this).find('.toggle-icon').toggleClass('open');
        
        // Close other open FAQ items (optional - for accordion style)
        // $('.faq-question').not(this).removeClass('active');
        // $('.faq-question').not(this).find('.toggle-icon').removeClass('open');
        // $('.faq-answer').not(answer).slideUp(300);
    });
    
    // Initialize: hide all answers initially
    $('.faq-answer').hide();
}); 