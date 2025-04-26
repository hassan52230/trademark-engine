<?php
/**
 * Template Name: Statement of Use
 *
 * The template for displaying the Statement of Use page.
 *
 * @package Trademark-Theme
 */

get_header();

// Enqueue the statement of use CSS and JS
wp_enqueue_style('statement-of-use-style', get_template_directory_uri() . '/css/statement-of-use-style.css');
wp_enqueue_script('statement-of-use-js', get_template_directory_uri() . '/js/statement-of-use.js', array('jquery'), '', true);
wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
?>

<div class="statement-of-use-page">
    <!-- Hero Section -->
    <section class="sou-hero">
        <div class="container">
            <div class="hero-content">
                <h1>Statement of Use</h1>
                <p class="hero-subtitle">File your Statement of Use with the USPTO</p>
                <p>Did you file an Intent to Use application and now need to show the USPTO you are using your mark? We can help you file your Statement of Use, sometimes called an Allegation of Use.</p>
                <div class="hero-cta">
                    <a href="#pricing" class="cta-button">Start my Statement of Use</a>
                </div>
                <div class="hero-features">
                    <div class="feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Simple online filing</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Professional filing experts</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Help with specimen selection</span>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/img/inc5000.png" alt="Inc 5000 Badge">
                </div>
                <div class="badge">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/shopper-approved.png" alt="Shopper Approved Badge">
                </div>
                <div class="badge">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/forbes-advisor.png" alt="Forbes Advisor Badge">
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
                <h2>Fast and Easy Statement of Use Filing</h2>
                <p class="subtitle">You've started the process with your Intent to Use, now finish it.</p>
            </div>
            
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <div class="step-number">1</div>
                    <h3>Online Questions</h3>
                    <p>Fill out our simple online questionnaire that will take a few minutes with helpful information every step of the way.</p>
                </div>
                
                <div class="process-step">
                    <div class="step-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="step-number">2</div>
                    <h3>Review of Your Information</h3>
                    <p>We will review the information you provided and correct any common errors or gaps in your application.</p>
                </div>
                
                <div class="process-step">
                    <div class="step-icon">
                        <i class="fas fa-file-signature"></i>
                    </div>
                    <div class="step-number">3</div>
                    <h3>Filed and Done!</h3>
                    <p>We will file your application and give you access to your own secure on-line account with 24/7 access to all of your documents and your deadlines.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section">
        <div class="container">
            <div class="section-header">
                <h2>Why use Trademark Engine for your Statement of Use?</h2>
            </div>
            
            <div class="benefits-container">
                <div class="benefits-content">
                    <ul class="benefits-list">
                        <li>
                            <i class="fas fa-check"></i>
                            <span>With or without your serial number, we can make sure your filing is complete and done right.</span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i>
                            <span>Our questionnaire includes step-by-step instructions to help you.</span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i>
                            <span>You will have a chance to review and sign the filing before it is filed.</span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i>
                            <span>Access to your cloud-based account for all documents, status updates and deadlines.</span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i>
                            <span>Full customer service support via phone, email or chat.</span>
                        </li>
                    </ul>
                </div>
                <div class="benefits-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/statement-of-use-benefit.jpg" alt="Statement of Use Benefits">
                </div>
            </div>
        </div>
    </section>

    <!-- Complete Process Section -->
    <section class="complete-process-section">
        <div class="container">
            <div class="section-header">
                <h2>Complete the Process with a Few Clicks of the Mouse</h2>
            </div>
            <div class="complete-process-content">
                <p>If you filed an Intent to Use application, you already got your place in line before you were actually using your mark. Now, that you are using your mark in commerce, finish the process with your Allegation or Statement of Use to officially register it. The Trademark Engine team is ready to complete the race with you.</p>
                <a href="#pricing" class="secondary-button">Get Started Now</a>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="pricing-section">
        <div class="container">
            <div class="section-header">
                <h2>Our Pricing</h2>
                <p class="subtitle">Simple, transparent pricing with no hidden fees</p>
            </div>
            
            <div class="pricing-container">
                <div class="pricing-box">
                    <div class="pricing-header">
                        <h3>Statement of Use</h3>
                        <div class="price">$129</div>
                        <p class="price-note">+USPTO filing fee of $150 per class</p>
                    </div>
                    <div class="pricing-features">
                        <ul>
                            <li><i class="fas fa-check"></i> Guidance on specimen selection</li>
                            <li><i class="fas fa-check"></i> Document preparation</li>
                            <li><i class="fas fa-check"></i> USPTO electronic filing</li>
                            <li><i class="fas fa-check"></i> 24/7 account access</li>
                            <li><i class="fas fa-check"></i> Customer service support</li>
                        </ul>
                    </div>
                    <div class="pricing-cta">
                        <a href="#" class="cta-button">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header">
                <h2>What Our Customers Say</h2>
                <p class="subtitle">Thousands of satisfied customers have trusted us with their trademark needs</p>
            </div>
            
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

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header">
                <h2>Statement of Use Filing FAQs</h2>
                <p class="subtitle">Still have questions? Call 1 (877) 721-4579 with us for real-time support.</p>
            </div>
            
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        What is a Statement of Use?
                        <span class="toggle-icon"><i class="fas fa-chevron-down"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>If trademark applicants aren't using their mark in commerce, the applicant can file an Intent to Use Application and generally, if all goes well, receive a Notice of Allowance. Within six months of being granted the Notice of Allowance, the applicant generally has to prove that it is now using the mark or request up to five six-month extensions. The USPTO requires a specimen to prove use in commerce when a Statement of Use is filed.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        What are the requirements for a Statement of Use?
                        <span class="toggle-icon"><i class="fas fa-chevron-down"></i></span>
                    </div>
                    <div class="faq-answer">
                        <ol>
                            <li>A $150 per class USPTO fee.</li>
                            <li>A specimen of the mark showing that it is in use in commerce.</li>
                            <li>Verification that the mark is in use as indicated on the application.</li>
                        </ol>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        What is the deadline for a Statement of Use?
                        <span class="toggle-icon"><i class="fas fa-chevron-down"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>A Statement of Use is generally due within six months from when the USPTO issued the Notice of Allowance, or within six months of a previously granted extension. Generally, missing the deadline means the application will be considered "abandoned." Future efforts to register the trademark will typically require the applicant to start all over including payment of new USPTO filing fees.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        What is the cost of filing a Statement of Use?
                        <span class="toggle-icon"><i class="fas fa-chevron-down"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>In addition to Trademark Engine's service fee, the USPTO charges $150 per class, which is the USPTO filing fee.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        What does it mean to use the mark in commerce?
                        <span class="toggle-icon"><i class="fas fa-chevron-down"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>According to 15 U.S.C. § 1127, a mark used in commerce in the following ways is "in commerce":</p>
                        <p>With regard to goods, use in commerce generally occurs when the mark (A) is placed in any manner on the goods or their containers, the displays associated therewith or on the tags or labels affixed thereto (if the nature of the goods makes such placement impracticable, then on documents associated with the goods or their sale), and (B) the goods are sold or transported in commerce.</p>
                        <p>With regard to service, use in commerce generally occurs when the mark is used or displayed in the sale or advertising of services and the services are rendered in commerce, or the services are rendered in more than one State or in the United States and a foreign country and the person rendering the services is engaged in commerce in connection with the services.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        What is a valid specimen?
                        <span class="toggle-icon"><i class="fas fa-chevron-down"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>Typically, a specimen is a real-world sample of how the mark is actually in use with the goods and/or services identified in the application. It is what the consumers actually see when they are purchasing the goods or services.</p>
                        <p>Here are some more detailed tips from the USPTO:</p>
                        <p>A specimen for goods (products) usually shows the mark on the actual goods, on labels/tags affixed to the goods, on packaging, or in a product display for the goods (like a window display). Advertising materials are generally not acceptable as a specimen for goods, nor are materials used to carry out your daily business (e.g., invoices, packing slips, etc.). The USPTO typically accepts the following specimens for goods:</p>
                        <ul>
                            <li>A photograph of the product showing the mark directly on the product (e.g., the bottom of a coffee mug)</li>
                            <li>Product labels and tags showing the mark (e.g., the label on a t-shirt)</li>
                            <li>Product packaging showing the mark (e.g., detergent soap packaging)</li>
                            <li>Signage used in a product display at a store (e.g., a photograph of the display)</li>
                            <li>A webpage showing or describing the product near the mark and with purchasing information (e.g., a webpage showing a photograph of a computer laptop, the mark for the laptop appearing above the photograph, the price appearing below the photograph, and a shopping cart button/link appearing on the page)</li>
                            <li>For downloadable software, copies of the instruction manual and screen printouts from (1) web pages showing the mark in connection with ordering or purchasing information or information sufficient to download the software, (2) the actual program that shows the mark in the title bar, or (3) launch screens that show the mark in an introductory message box that appears after opening the program</li>
                        </ul>
                        <p>A specimen for services generally shows the mark used in the sale, rendering, or advertising of the services. A consumer should be able to directly associate your mark with the services you identified in the application on the specimen. The USPTO typically accepts the following specimens for services:</p>
                        <ul>
                            <li>Print or Internet advertising</li>
                            <li>Brochures and leaflets</li>
                            <li>Menus for restaurants</li>
                            <li>Business cards and letterhead</li>
                            <li>Marketing and promotional materials</li>
                            <li>A photograph of business signage and billboards</li>
                            <li>A photograph of a musical band performing with the band's name displayed during the performance (e.g., on the band's drum)</li>
                        </ul>
                        <p>*Specimens consisting of advertising, marketing, and/or promotional materials must show a direct association between the mark and the services. However, if your mark itself references the services, the specimen would show a sufficient direct association (e.g., ABC MEDICAL for a medical clinic).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="final-cta">
        <div class="container">
            <h2>File your Statement of Use today.</h2>
            <p>Thousands have relied on Trademark Engine to handle trademark filings needs.</p>
            <a href="#pricing" class="cta-button">Start My Statement of Use</a>
        </div>
    </section>
</div>

<?php
get_footer();
?> 