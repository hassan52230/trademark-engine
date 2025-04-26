<?php
/**
 * Template Name: Renewal
 * The template for displaying the trademark renewal page
 */

// Enqueue the custom CSS
function enqueue_renewal_styles() {
    wp_enqueue_style('renewal-styles', get_template_directory_uri() . '/css/renewal-style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_renewal_styles');

get_header();
?>

<div class="renewal-hero">
    <div class="renewal-container">
        <div class="hero-content-wrapper">
            <div class="hero-text">
                <h1>Keep your trademark alive with regular renewals</h1>
                <p>If you've had a registered trademark for five or more years, it may be time to file a renewal.</p>
                
                <ul class="hero-features">
                    <li>Maintain your registration rights</li>
                    <li>Protect your brand identity</li>
                    <li>Prevent your trademark from expiring</li>
                </ul>

                <div class="hero-ratings">
                    <div class="rating-badge">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/forbes-advisor.png" alt="Forbes Advisor" class="rating-logo">
                    </div>
                    <div class="inc-badge">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/inc-5000.png" alt="Inc. 5000" class="inc-logo">
                    </div>
                    <div class="shopper-approved">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/shopper-approved.png" alt="Shopper Approved" class="shopper-logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Why Renew Section -->
<section class="why-renew-section">
    <div class="container">
        <h2>Why should I file a trademark renewal?</h2>
        <p class="section-subtitle">Whether it's your 5th anniversary or your 50th, it's essential to renew your trademark to preserve your brand identity.</p>
        
        <div class="benefits-list">
            <div class="benefit-item">
                <h3>Maintain Your Mark</h3>
                <p>Extend your trademark rights to ensure continuous brand protection.</p>
            </div>
            <div class="benefit-item">
                <h3>Prevent Expiration</h3>
                <p>Keep your trademark alive by letting the USPTO know it's still in use.</p>
            </div>
            <div class="benefit-item">
                <h3>Save Time and Money</h3>
                <p>Avoid spending hundreds or thousands of dollars to reapply.</p>
            </div>
        </div>
        
        <div class="price-card">
            <div class="price-header">
                <h3>Trademark Registration Renewal</h3>
                <div class="price">$299 <span class="price-suffix">+ USPTO filing fees</span></div>
            </div>
            <a href="#" class="renewal-button">Start My Trademark Renewal</a>
        </div>
    </div>
</section>

<!-- Timeline Section -->
<section class="timeline-section">
    <div class="container">
        <h2>When do I need to renew my trademark?</h2>
        <p class="section-subtitle">A registered trademark can last forever, but only if you file maintenance documents throughout its lifespan.</p>
        
        <a href="#" class="renewal-button large">File My Trademark Renewal</a>
        
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-date">Between the 5th & 6th Year Anniversary</div>
                <div class="timeline-content">
                    <h3>File a Section 8 Declaration of Use</h3>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">Between the 9th & 10th Year Anniversary</div>
                <div class="timeline-content">
                    <h3>File a Section 8 and 9 Combined Statement of Continued Use</h3>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">Every 10 Years Afterward</div>
                <div class="timeline-content">
                    <h3>File a Section 8 and 9 Combined Statement of Continued Use</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="how-it-works-section">
    <div class="container">
        <h2>How it Works</h2>
        <p class="section-subtitle">Your work starts and ends with a simple questionnaire. We'll take it from there and handle every step it takes to renew your trademark with the USPTO.</p>
        
        <div class="steps-container">
            <div class="step">
                <div class="step-number">1</div>
                <h3>Leave the Paperwork to Us</h3>
                <p>Complete our questionnaire in seven minutes or less to start your renewal process.</p>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <h3>File Error-Free</h3>
                <p>Our experts prepare and file your renewal with 100% accuracy guaranteed. All you need to do is review and sign.</p>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <h3>Keep Your Trademark</h3>
                <p>Enjoy peace of mind knowing your trademark is secure for years.</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <h2>You worked hard to get your trademark; we can help you keep it.</h2>
        
        <div class="stats-container">
            <div class="stat">
                <div class="stat-number">120,000+</div>
                <div class="stat-text">trademarks filed and renewed since 2016</div>
            </div>
            <div class="stat">
                <div class="stat-number">35,000+</div>
                <div class="stat-text">five-star reviews</div>
            </div>
            <div class="stat">
                <div class="stat-number">4.8/5</div>
                <div class="stat-text">Rated by Forbes Advisor</div>
            </div>
        </div>
        
        <div class="testimonial">
            <p class="testimonial-text">Thank you! Very prompt and lovely service. Makes the process of filing a trademark easier, calmer and more comfortable. Also, more timely as they know what their doing! It will save you time and efforts hiring trademark engine to get your trademark approved.</p>
        </div>
        
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <p class="testimonial-text">"Outstanding service! So easy to work with, helpful, and attentive in every way. I highly recommend using them for your trademark needs!"</p>
                <div class="testimonial-author">J. Stinson</div>
                <div class="testimonial-source">Trustpilot Review</div>
            </div>
            <div class="testimonial-card">
                <p class="testimonial-text">"WOW Trademark Engine customer service is on point. I was struggling with my application process, and everyone I spoke to was helpful, knowledgeable, patient, and friendly... I would recommend Trademark Engine to family and friends. Thank you!"</p>
                <div class="testimonial-author">Jiel Parks</div>
                <div class="testimonial-source">Google Review</div>
            </div>
            <div class="testimonial-card">
                <p class="testimonial-text">"Few things are as challenging as following Federal regulatory protocols. For me, that's saying something, having worked in the securities industry for over thirty years! Trademark Engine made filing my branding tagline simple, straightforward, and very informative. They truly take an "advocate" role for their clients."</p>
                <div class="testimonial-author">Peter M.</div>
                <div class="testimonial-source">Trustpilot Review</div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <h2>Trademark Renewal FAQs</h2>
        <p class="faq-subtitle">Still have questions? Call 1 (877) 721-4579 or LIVE CHAT with us for real-time support.</p>
        
        <div class="faq-list">
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>Does a trademark need to be renewed?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>Trademark owners are only entitled to federal registration if they use the trademark in commerce. Because of this, the United States Patent and Trademark Office (USPTO) requires trademark owners to periodically prove that a mark is still in continuous use after its initial registration.</p>
                    <p>You were required to submit a specimen demonstrating your trademark use when it was first registered. To renew your trademark, you must submit a new specimen to prove that you still use it to sell goods or services.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>When do I need to renew my trademark registration?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>You will have to renew your trademark registration continuously throughout the trademark's lifespan:</p>
                    <ul>
                        <li>Between the fifth and sixth year anniversary: File a Declaration of Use and/or Excusable Nonuse under Section 8 of the Trademark Act.</li>
                        <li>Between the ninth and tenth year anniversary: File a Combined Declaration of Use and/or Excusable Nonuse/Application for Renewal under Sections 8 & 9 of the Trademark Act.</li>
                        <li>Every ten years afterward: File the Combined Declaration of Use and/or Excusable Nonuse/Application for Renewal under Sections 8 & 9 of the Trademark Act.</li>
                    </ul>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What if I miss the deadline for renewing my trademark?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>If you miss a renewal deadline, there is a six-month grace period in which the USPTO will still accept a renewal application. However, you must submit an additional late filing fee of $200 per class to the USPTO.</p>
                    <p>If you miss the six-month grace period, your trademark will expire, and the USPTO will cancel your registration. If you still want the benefits of trademark registration, you will have to complete the application process again.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What if I'm using my trademark differently than what was specified in my original registration?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>In some cases, you may have originally registered your trademark under multiple classes of goods or services in your initial registration but no longer use the trademark in one of those classes. During your trademark renewal, you can choose to limit your protection to cover only the classes in which you are actively using the trademark.</p>
                    <p>You can not add new classes of goods or services to your trademark through a renewal application.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>How much does it cost to renew a trademark?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>Your trademark renewal fees depend on the form you're submitting:</p>
                    <ul>
                        <li>Section 8 Declaration (5-6 Years): $325 per class</li>
                        <li>Section 15 Declaration of Incontestability (5-6 Years): $250 per class</li>
                        <li>Combined Section 8 & 15 Declaration (5-6 Years): $550 per class</li>
                        <li>Section 9 Declaration (9-10 Years): $350 per class</li>
                        <li>Combined Section 8 & 9 Declaration (9-10 Years): $650 per class</li>
                    </ul>
                    <p>Late trademark renewals submitted during the six-month grace period will include additional fees of $200 per class. Our cost for keeping your trademark alive starts at just $299, plus USPTO fees.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2>Secure your trademark protection today.</h2>
        <p>Keep your trademark alive starting at just $299, plus USPTO fees.</p>
        <a href="#" class="renewal-button">Renew My Trademark</a>
    </div>
</section>

<script>
function toggleFAQ(button) {
    const answer = button.nextElementSibling;
    const arrow = button.querySelector('.arrow');
    
    answer.classList.toggle('hidden');
    arrow.classList.toggle('rotate-180');
}
</script>

<?php get_footer(); ?> 