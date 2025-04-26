<?php
/**
 * Template Name: DMCA Takedown Service
 *
 * The template for displaying the DMCA Takedown Service page.
 *
 * @package Trademark-Theme
 */

get_header();

// Enqueue the takedown service CSS and JS
wp_enqueue_style('takedown-service-style', get_template_directory_uri() . '/css/takedown-service-style.css');
wp_enqueue_script('takedown-service-js', get_template_directory_uri() . '/js/takedown-service.js', array('jquery'), '', true);
wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
?>

<div class="takedown-service-page">
    <!-- Hero Section -->
    <section class="dmca-hero">
        <div class="container">
            <div class="hero-content">
                <h1>Keep Copyright Content Thieves at Bay</h1>
                <p class="hero-subtitle">Don't let organizations or individuals steal your content and claim it as their own. Trademark Engine's DMCA Takedown service helps you safeguard your copyrighted materials with confidence.</p>
                <div class="hero-cta">
                    <a href="#pricing" class="cta-button">Start Your DMCA Takedown Today</a>
                </div>
                <div class="hero-features">
                    <div class="feature">
                        <i class="fas fa-check-circle"></i>
                        <span>35,000+ five-star reviews</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Rated 4.8 by Forbes Advisor</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Rated 4.5+ on Trust Pilot</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Badges Section -->
    <section class="trust-badges">
        <div class="container">
            <div class="badges-container">
                <div class="badge">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/forbes-advisor.png" alt="Forbes Advisor Badge">
                </div>
                <div class="badge">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/inc5000.png" alt="Inc 5000 Badge">
                </div>
                <div class="badge">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/shopper-approved.png" alt="Shopper Approved Badge">
                </div>
                <div class="badge">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/trustpilot.png" alt="Trustpilot Badge">
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <div class="section-header">
                <h2>98% of customers recommend our DMCA Takedown service</h2>
            </div>
            
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <div class="step-number">1</div>
                    <h3>Answer a brief questionnaire about the stolen work.</h3>
                </div>
                
                <div class="process-step">
                    <div class="step-icon">
                        <i class="fas fa-file-signature"></i>
                    </div>
                    <div class="step-number">2</div>
                    <h3>We'll craft a DMCA takedown notice for you.</h3>
                </div>
                
                <div class="process-step">
                    <div class="step-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="step-number">3</div>
                    <h3>You protect your copyright worry-free!</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Pitch Section -->
    <section class="pitch-section">
        <div class="container">
            <div class="pitch-content">
                <p>If someone is using your images, video, audio, or products without your permission, we're here to help. Take down your stolen content today for $65, or get unlimited takedowns for only $4.99/month. It's affordable, fast, and easier than hiring a lawyer.</p>
                <p class="cta-text">Don't wait — protect your copyright today!</p>
                <div class="cta-container">
                    <a href="#pricing" class="cta-button">Start Your DMCA Takedown Today</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="testimonials-slider">
                <div class="testimonial">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"Outstanding service! So easy to work with, helpful, and attentive in every way. I highly recommend using them for your trademark needs!"</p>
                    <div class="testimonial-author">J. Stinson</div>
                    <div class="testimonial-source">Trustpilot Review</div>
                </div>
                
                <div class="testimonial">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"WOW Trademark Engine customer service is on point. I was struggling with my application process, and everyone I spoke to was helpful, knowledgeable, patient, and friendly... I would recommend Trademark Engine to family and friends. Thank you!"</p>
                    <div class="testimonial-author">Jiel Parks</div>
                    <div class="testimonial-source">Google Review</div>
                </div>
                
                <div class="testimonial">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"Few things are as challenging as following Federal regulatory protocols. For me, that's saying something, having worked in the securities industry for over thirty years! Trademark Engine made filing my branding tagline simple, straightforward, and very informative. They truly take an "advocate" role for their clients."</p>
                    <div class="testimonial-author">Peter M.</div>
                    <div class="testimonial-source">Trustpilot Review</div>
                </div>
                
                <div class="testimonial">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"I had a great experience at Trademark Engine! My customer service representative was exceptional! She was professional and knowledgeable when explaining the process of how to copyright my work. She supported me until my work was ready for review. Trademark Engine is well deserving of a 5-star rating."</p>
                    <div class="testimonial-author">Sterline Cryer</div>
                    <div class="testimonial-source">Trustpilot Review</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="pricing-section">
        <div class="container">
            <div class="section-header">
                <h2>Protect Your Copyright Content</h2>
                <p class="subtitle">Affordable options to safeguard your creative work</p>
            </div>
            
            <div class="pricing-container">
                <div class="pricing-box">
                    <div class="pricing-header">
                        <h3>One-Time Takedown</h3>
                        <div class="price">$65</div>
                        <p class="price-note">Single DMCA takedown notice</p>
                    </div>
                    <div class="pricing-features">
                        <ul>
                            <li><i class="fas fa-check"></i> Professional DMCA notice creation</li>
                            <li><i class="fas fa-check"></i> Help identifying proper contacts</li>
                            <li><i class="fas fa-check"></i> Guidance on submission</li>
                            <li><i class="fas fa-check"></i> Customer service support</li>
                        </ul>
                    </div>
                    <div class="pricing-cta">
                        <a href="#" class="cta-button">Get Started</a>
                    </div>
                </div>
                
                <div class="pricing-box featured">
                    <div class="pricing-badge">Most Popular</div>
                    <div class="pricing-header">
                        <h3>Unlimited Takedowns</h3>
                        <div class="price">$4.99<span class="price-period">/month</span></div>
                        <p class="price-note">Unlimited DMCA takedown notices</p>
                    </div>
                    <div class="pricing-features">
                        <ul>
                            <li><i class="fas fa-check"></i> Unlimited DMCA notices</li>
                            <li><i class="fas fa-check"></i> Professional notice creation</li>
                            <li><i class="fas fa-check"></i> Priority customer support</li>
                            <li><i class="fas fa-check"></i> Cancel anytime</li>
                            <li><i class="fas fa-check"></i> Monthly detailed reports</li>
                        </ul>
                    </div>
                    <div class="pricing-cta">
                        <a href="#" class="cta-button">Subscribe Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="final-cta">
        <div class="container">
            <h2>Take action to protect your name today.</h2>
            <p>Thousands have protected their brand by monitoring their trademark.</p>
            <a href="#pricing" class="cta-button">Start Your DMCA Takedown Today</a>
        </div>
    </section>
</div>

<?php
get_footer();
?> 