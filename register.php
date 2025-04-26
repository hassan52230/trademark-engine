<?php
/**
 * Template Name: Register
 * The template for displaying the registration page
 */

// Enqueue the custom CSS
function enqueue_register_styles() {
    wp_enqueue_style('register-styles', get_template_directory_uri() . '/css/register-style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_register_styles');

get_header();
?>

<div class="register-hero">
    <div class="register-container">
        <div class="hero-content-wrapper">
            <div class="hero-text">
                <h1>Register your name, <br>slogan, or logo today.</h1>
                <p>Protect your brand online in just minutes with Trademark Engine. Starting at $49 + USPTO fees.</p>
                
                <ul class="hero-features">
                    <li>120,000+ trademarks filed since 2016</li>
                    <li>35,000+ five-star reviews</li>
                    <li>Rated 4.8 by Forbes Advisor</li>
                </ul>

                <a href="#pricing" class="register-button">Register my trademark</a>

                <div class="hero-ratings">
                    <div class="rating-badge">
                        <span class="rating-number">4.8</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/forbes-advisor.png" alt="Forbes Advisor" class="rating-logo">
                    </div>
                    <div class="inc-badge">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/inc-5000.png" alt="Inc 5000" class="inc-logo">
                        <span class="inc-text">America's Fastest Growing Private Companies</span>
                    </div>
                    <div class="shopper-approved">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/shopper-approved.png" alt="Shopper Approved" class="shopper-logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="recommendation-bar">
        <p>98% of customers recommend our Trademark Registration service</p>
    </div>
</div>

<!-- Pricing Section -->
<section id="pricing" class="pricing-section">
    <div class="container">
        <h2>Start protecting your business today</h2>
        <p class="pricing-subtitle">Choose the package that best suits your needs and let our experienced legal team guide you through the trademark registration process with professionalism and care.</p>

        <div class="pricing-grid">
            <!-- Basic Package -->
            <div class="pricing-card">
                <h3>Basic Package</h3>
                <p class="package-subtitle">I only need what it takes to file</p>
                <div class="price">$49 <span class="price-suffix">+ applicable fees</span></div>
                <a href="#" class="choose-button">Choose Basic</a>
                <div class="includes-header">Includes:</div>
                <ul class="feature-list">
                    <li class="feature-item">
                        <div class="checkmark">✓</div>
                        <span>Direct-Hit Search of the Federal USPTO Database: Ensure your trademark is unique and available.</span>
                    </li>
                    <li class="feature-item">
                        <div class="checkmark">✓</div>
                        <span>Customer Trademark Classification: Using the USPTO's ID manual, our attorneys will devise a class and description of goods and services that best matches what you seek to protect with your trademark registration.</span>
                    </li>
                </ul>
                <a href="#" class="feature-details">Feature Details</a>
            </div>

            <!-- Standard Package -->
            <div class="pricing-card popular">
                <span class="popular-badge">Most Popular</span>
                <h3>Standard Package</h3>
                <p class="package-subtitle">I want legal care to protect my trademark</p>
                <div class="price">$299 <span class="price-suffix">+ applicable fees</span></div>
                <a href="#" class="choose-button primary">Choose Standard</a>
                <div class="includes-header">Includes basic package, plus:</div>
                <ul class="feature-list">
                    <li class="feature-item">
                        <div class="checkmark">✓</div>
                        <span>One-on-One Consultation with a Trademark Lawyer: 15-minute session to address your specific needs.</span>
                    </li>
                    <li class="feature-item">
                        <div class="checkmark">✓</div>
                        <span>Privacy Protection: Keep your personal contact information confidential in the USPTO database</span>
                    </li>
                    <li class="feature-item">
                        <div class="checkmark">✓</div>
                        <span>Cease and Desist Letter: Take action against potential infringements</span>
                    </li>
                </ul>
                <a href="#" class="feature-details">Feature Details</a>
            </div>

            <!-- Premium Package -->
            <div class="pricing-card">
                <h3>Premium Package</h3>
                <p class="package-subtitle">I want premium legal support for best success</p>
                <div class="price">$539 <span class="price-suffix">+ applicable fees</span></div>
                <a href="#" class="choose-button">Choose Premium</a>
                <div class="includes-header">Includes standard package, plus:</div>
                <ul class="feature-list">
                    <li class="feature-item">
                        <div class="checkmark">✓</div>
                        <span>One-on-One Consultation with a Trademark Lawyer: Extended 1-hour session for in-depth assistance.</span>
                    </li>
                    <li class="feature-item">
                        <div class="checkmark">✓</div>
                        <span>Rush Processing: Priority 48-hour processing</span>
                    </li>
                    <li class="feature-item">
                        <div class="checkmark">✓</div>
                        <span>Trademark Monitoring infringement alerts (free trial*)</span>
                    </li>
                </ul>
                <a href="#" class="feature-details">Feature Details</a>
            </div>
        </div>
    </div>
</section>

<!-- Reviews Section -->
<section class="reviews-section">
    <div class="container">
        <h2>Don't just take our word for it</h2>
        <p class="reviews-subtitle">Trademark Engine is rated 4.5 out of 5 based on 31,500 reviews.</p>
        
        <div class="testimonials-slider">
            <div class="testimonial">
                <p class="testimonial-text">"Outstanding service! So easy to work with, helpful, and attentive in every way. I highly recommend using them for your trademark needs!"</p>
                <div class="testimonial-author">J. Stinson</div>
                <div class="testimonial-source">Trustpilot Review</div>
            </div>
            <div class="testimonial">
                <p class="testimonial-text">"WOW Trademark Engine customer service is on point. I was struggling with my application process, and everyone I spoke to was helpful, knowledgeable, patient, and friendly... I would recommend Trademark Engine to family and friends. Thank you!"</p>
                <div class="testimonial-author">Jiel Parks</div>
                <div class="testimonial-source">Google Review</div>
            </div>
        </div>
    </div>
</section>

<!-- Why Get Trademark Section -->
<section class="info-section">
    <div class="container">
        <div class="info-grid">
            <div class="info-content">
                <h2>Why get a trademark?</h2>
                <p>Most of the brands, logos and slogans you love, know and trust have been registered. A registered mark gives you a presumption of ownership and a presumed right to use the brand nationwide giving you broader protection in courts.</p>
                <ul class="benefit-list">
                    <li class="benefit-item">
                        <div class="checkmark">✓</div>
                        <span>Presumed validity of the mark if you have to sue</span>
                    </li>
                    <li class="benefit-item">
                        <div class="checkmark">✓</div>
                        <span>Additional remedies in court</span>
                    </li>
                    <li class="benefit-item">
                        <div class="checkmark">✓</div>
                        <span>May increase the value of your company</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Search Info Section -->
<section class="search-info-section">
    <div class="container">
        <h2>Why run a search for similar marks?</h2>
        <p>Before spending your time and money filing an application, you should do a search to see if your mark is already in use or registered by someone else. A search will help avoid obvious duplications of pre-existing marks. If the USPTO rejects your application, the fees to Trademark Engine and the USPTO are not refundable.</p>
        <p>If your company is just beginning, it's better to make name changes now rather than invest in building a brand only to learn that you have to change the name and lose all of your goodwill. All packages include a free, federal direct-hit search.</p>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <h2>Federal Trademark Registration FAQs</h2>
        <p class="faq-subtitle">Still have questions? Call 1 (877) 721-4579 or LIVE CHAT with us for real-time support.</p>
        
        <div class="faq-list">
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What is a trademark and what does it do?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>One way to understand a trademark is that it is a word, phrase, symbol, and/or design that identifies and distinguishes the source of the goods of one party from those of another party. A "service" mark distinguishes the source of a service, rather than a good, but the two are typically simply referred to as a "trademark" or "mark".</p>
                    <p>In more general terms, getting a trademark protects a brand. Many of the well-known brands, logos and slogans you love, know and trust have been registered with the United States Patent and Trademark Office.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What is a common law trademark and why bother to register a mark?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>Under U.S. law, a "common law trademark" is generally established when someone uses a company name, logo or slogan in commerce, even if it is not registered. So, why pay to register a trademark when a common law trademark may already exist?</p>
                    <p>Common law rights ordinarily are limited to the geographic area where the mark is used as opposed to the nationwide protection customarily obtained when a mark is registered with the USPTO. Registration of a trademark can give the person holding the registered trademark a leg up in court as to the validity of the mark and the date of usage in later trademark infringement litigation.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>Should companies trademark their name or logo?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>There may be advantages to registering both a name and an associated logo. But bear in mind, each filing requires its own application, government filing fees and processing fees.</p>
                    <p>A more budget-friendly option could involve registering just the name trademark. Wrongful use of names seems to be more common than wrongful use of logos. Trademarking a name generally provides broader protection because it prevents any use of the name that causes confusion, even if someone tries to use the name within a unique logo.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2>Take action to protect your name today.</h2>
        <p>Thousands have protected their brand by filing a trademark.</p>
        <a href="#pricing" class="register-button">Register my trademark</a>
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