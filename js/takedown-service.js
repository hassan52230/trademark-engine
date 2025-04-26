/**
 * DMCA Takedown Service Page JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
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
    
    // Feature hover effect
    const features = document.querySelectorAll('.feature');
    
    features.forEach(feature => {
        feature.addEventListener('mouseenter', () => {
            feature.querySelector('i').style.transform = 'scale(1.2)';
        });
        
        feature.addEventListener('mouseleave', () => {
            feature.querySelector('i').style.transform = 'scale(1)';
        });
    });
    
    // Pricing box hover effect
    const pricingBoxes = document.querySelectorAll('.pricing-box');
    
    pricingBoxes.forEach(box => {
        box.addEventListener('mouseenter', () => {
            if (!box.classList.contains('featured')) {
                box.style.transform = 'translateY(-10px)';
                box.style.boxShadow = '0 15px 35px rgba(0,0,0,0.15)';
            }
        });
        
        box.addEventListener('mouseleave', () => {
            if (!box.classList.contains('featured')) {
                box.style.transform = 'translateY(0)';
                box.style.boxShadow = '0 10px 30px rgba(0,0,0,0.1)';
            }
        });
    });
});

jQuery(document).ready(function($) {
    // Mobile menu toggle
    $('.mobile-menu-toggle').on('click', function() {
        $('.main-navigation').toggleClass('active');
        $(this).toggleClass('active');
    });
    
    // Responsive testimonials slider for mobile
    function initTestimonialSlider() {
        if ($(window).width() < 768) {
            if (!$('.testimonials-slider').hasClass('slick-initialized')) {
                $('.testimonials-slider').slick({
                    dots: true,
                    arrows: false,
                    infinite: true,
                    speed: 500,
                    slidesToShow: 1,
                    adaptiveHeight: true,
                    autoplay: true,
                    autoplaySpeed: 5000
                });
            }
        } else {
            if ($('.testimonials-slider').hasClass('slick-initialized')) {
                $('.testimonials-slider').slick('unslick');
            }
        }
    }
    
    // Initialize on document ready
    initTestimonialSlider();
    
    // Re-initialize on window resize
    $(window).resize(function() {
        initTestimonialSlider();
    });
    
    // Animate elements when they come into view
    $(window).on('scroll', function() {
        $('.process-step, .pricing-box, .testimonial').each(function() {
            if ($(this).offset().top < ($(window).scrollTop() + $(window).height() * 0.75) && 
                !$(this).hasClass('animated')) {
                $(this).addClass('animated');
                $(this).css('opacity', '1');
                $(this).css('transform', 'translateY(0)');
            }
        });
    });
    
    // Initialize elements with initial state
    $('.process-step, .pricing-box, .testimonial').css({
        'opacity': '0',
        'transform': 'translateY(20px)',
        'transition': 'all 0.5s ease-out'
    });
    
    // Trigger scroll once to initialize animations for elements in view
    $(window).trigger('scroll');
}); 