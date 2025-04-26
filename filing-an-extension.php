<?php
/**
 * Template Name: Filing an Extension
 * 
 * Template for displaying the Statement of Use Extension filing page
 */

get_header();

// Enqueue custom CSS for this template
function extension_filing_styles() {
    wp_enqueue_style('office-action-style', get_template_directory_uri() . '/css/office-action-style.css');
}
add_action('wp_enqueue_scripts', 'extension_filing_styles');
?>

<!-- Hero Section -->
<div class="hero-wrapper">
    <div class="office-action-hero">
        <div class="office-action-container">
            <div class="hero-content-wrapper">
                <div class="hero-text">
                    <h1>File Your Statement of Use Extension Online.</h1>
                    <p>Need more time to file your Trademark Statement of Use Extension with the USPTO? Let us help you extend your deadline for another six months.</p>
                    
                    <ul class="hero-features">
                        <li>35,000+ five-star reviews</li>
                        <li>Rated 4.8 by Forbes Advisor</li>
                        <li>Rated 4.5+ on Trust Pilot</li>
                    </ul>
                    
                    <a href="#get-started" class="office-action-button">Start my Extension Filing</a>
                </div>
                
                <div class="hero-image">
                    <!-- Image can be added here via CSS background or as an img tag -->
                </div>
            </div>
        </div>
        
        <div class="recommendation-bar">
            <div class="container">
                <p>98% of customers recommend our Statement of Use Extension filings</p>
            </div>
        </div>
    </div>
</div>

<!-- Steps Section -->
<section class="info-section">
    <div class="container">
        <h2>Fast and Easy 3 Steps</h2>
        <p class="section-text">You've worked hard to protect your brand. Don't let it lapse.</p>
        
        <div class="steps-container">
            <div class="step">
                <div class="step-icon">1</div>
                <h4>Answer a few questions</h4>
                <p>Whether you know your serial number or not, in less than five minutes you can answer the questions needed to start the process.</p>
            </div>
            <div class="step">
                <div class="step-icon">2</div>
                <h4>Review your Application</h4>
                <p>We will send your application to you for your review and signature.</p>
            </div>
            <div class="step">
                <div class="step-icon">3</div>
                <h4>Application Filed</h4>
                <p>We will file the application and pay your fees so you can focus on building your brand.</p>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits-section">
    <div class="container">
        <h2>Why use Trademark Engine for your Statement of Use Extension?</h2>
        <ul class="benefits-list">
            <li>With or without your serial number, we can make sure your filing is complete and done right.</li>
            <li>Our questionnaire includes step-by-step instructions to help you.</li>
            <li>You will have a chance to review and sign the filing before it is filed.</li>
            <li>Access to your cloud-based account for all documents, status updates and deadlines.</li>
            <li>Full customer service support via phone, email or chat.</li>
        </ul>
    </div>
</section>

<!-- Pricing Section -->
<section id="get-started" class="pricing-section">
    <div class="container">
        <h2>Complete the Process with a Few Clicks of the Mouse</h2>
        <p class="section-text">If you filed an Intent to Use application, you already got your place in line before you were actually using your mark. If you haven't quite started using your mark in commerce yet, it's OK. The USPTO allows up to five six-month extensions. Request your extension today to hold you place in line.</p>
        
        <div class="price-row">
            <div class="price-box">
                <div class="price-header">
                    <h3>Statement of Use Extension</h3>
                    <div class="price">$99</div>
                </div>
                <p class="price-note">+ USPTO filing fee of $125 per class</p>
                <a href="#" class="office-action-button price-button">Get Started</a>
            </div>
            
            <div class="testimonials-container">
                <div class="testimonial">
                    <p class="testimonial-text">Outstanding service! So easy to work with, helpful, and attentive in every way. I highly recommend using them for your trademark needs!</p>
                    <p class="testimonial-author">J. Stinson</p>
                    <p class="testimonial-source">Trustpilot Review</p>
                </div>
                
                <div class="testimonial">
                    <p class="testimonial-text">WOW Trademark Engine customer service is on point. I was struggling with my application process, and everyone I spoke to was helpful, knowledgeable, patient, and friendly... I would recommend Trademark Engine to family and friends. Thank you!</p>
                    <p class="testimonial-author">Jiel Parks</p>
                    <p class="testimonial-source">Google Review</p>
                </div>
                
                <div class="testimonial">
                    <p class="testimonial-text">Few things are as challenging as following Federal regulatory protocols. For me, that's saying something, having worked in the securities industry for over thirty years! Trademark Engine made filing my branding tagline simple, straightforward, and very informative. They truly take an "advocate" role for their clients.</p>
                    <p class="testimonial-author">Peter M.</p>
                    <p class="testimonial-source">Trustpilot Review</p>
                </div>
                
                <div class="testimonial">
                    <p class="testimonial-text">I had a great experience at Trademark Engine! My customer service representative was exceptional! She was professional and knowledgeable when explaining the process of how to copyright my work. She supported me until my work was ready for review. Trademark Engine is well deserving of a 5-star rating.</p>
                    <p class="testimonial-author">Sterline Cryer</p>
                    <p class="testimonial-source">Trustpilot Review</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <h2>Statement of Use Extension Filing FAQs</h2>
        <p class="faq-subtitle">Still have questions? Call 1 (877) 721-4579 with us for real-time support.</p>
        
        <div class="faq-list">
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What is the deadline to request an extension or file a Statement of Use?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>A Statement of Use is generally due within six months from when the USPTO issued the Notice of Allowance, or within six months of a previously granted extension. Generally, missing the deadline means the application will be considered "abandoned." Future efforts to register the trademark will typically require the applicant to start all over including payment of new USPTO filing fees. Learn more about our Statement of Use filing services.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What if an applicant has not started using its mark in the six-month period since the Notice of Allowance was issued?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>Applicants who are not using the mark in commerce within six months after filing an Intent to Use application may need to file an extension request and the required fee(s) to avoid abandonment. The USPTO generally allows applicants to file up to five six-month extensions.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What is the cost for the Statement of Use Extension?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>In addition to Trademark Engine's service fee, the USPTO charges $150 per class, which is the USPTO filing fee.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What if someone who filed an intent to use is now using the mark as to one class, but not another?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>Under such circumstances, an applicant can do what is referred to as "dividing an application." There are additional UPSTO fees to do this because it creates what the USPTO calls a "child" and "parent" application. There is also a slightly increased Trademark Engine service fee because of the extra processing. But, dividing an application is an option that some companies choose in order to register a mark as one class of goods while preserving rights on another. This can allow extension of the six-month deadline for the class of goods not yet in use, but register for the class of goods or service that are already in use.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What is a Statement of Use?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>If trademark applicants aren't using their mark in commerce, the applicant can file an Intent to Use Application and generally, if all goes well, receive a Notice of Allowance. Within six months of being granted the Notice of Allowance, the applicant generally has to prove that it is now using the mark or request up to five six-month extensions. The USPTO requires a specimen to prove use in commerce when a Statement of Use is filed.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What are the requirements for a Statement of Use?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <ol>
                        <li>A $150 per class USPTO fee.</li>
                        <li>A specimen of the mark showing that it is in use in commerce.</li>
                        <li>Verification that the mark is in use as indicated on the application.</li>
                    </ol>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What does it mean to use the mark in commerce?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>According to 15 U.S.C. § 1127, a mark used in commerce in the following ways is "in commerce":</p>
                    <p>With regard to goods, use in commerce generally occurs when the mark (A) is placed in any manner on the goods or their containers, the displays associated therewith or on the tags or labels affixed thereto (if the nature of the goods makes such placement impracticable, then on documents associated with the goods or their sale), and (B) the goods are sold or transported in commerce.</p>
                    <p>With regard to service, use in commerce generally occurs when the mark is used or displayed in the sale or advertising of services and the services are rendered in commerce, or the services are rendered in more than one State or in the United States and a foreign country and the person rendering the services is engaged in commerce in connection with the services.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What is a valid specimen?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
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
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What if the applicant no longer wants to pursue a trademark as to one class of goods, but wants to proceed with another?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>If an applicant is granted a Notice of Allowance for multiple classes, but decides not to pursue a registration for one or more of those classes, the applicant may simply disclaim the unwanted class when filing the Statement of Use. By disclaiming a class, the USPTO will generally treat the application as abandoned as to that class while proceeding with the class or classes still being pursued.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What if the applicant is only selling some of the goods or services within the class in the Intent to Use application?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>To understand this, let's look at the common example of clothing. Many people file an Intent to Use under Class 25 for clothing and then list, shirts, pants and shoes. In this example, let's say the applicant is selling shirts, but not pants or shoes. Just like with a class, any description of goods within a class not included in the Statement of Use generally will be permanently deleted from the trademark registration. The applicant will have to file a new trademark application to cover any of the items left off of the Statement of Use. While the USPTO may request a specimen showing the use for one type of good or service only within the class (for our example, a shirt), the applicant will have to state, subject to perjury, that it actually is using the mark for all of the goods listed on the Allegation of Use. Therefore, an applicant only selling some of the items within a class may want to file an extension or divide the application.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2>File your Extension today.</h2>
        <p>Thousands have relied on Trademark Engine to handle trademark filings needs.</p>
        <a href="#get-started" class="office-action-button">Start My Statement of Use Extension</a>
    </div>
</section>

<!-- Footer Section -->
<footer class="footer-section">
    <div class="container">
        <div class="footer-main">
            <div class="trademark-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trademark-logo.png" alt="Trademark Logo">
            </div>
            
            <div class="contact-info">
                <h3>Any Questions?</h3>
                <p>Use the Live Chat for any immediate assistance.</p>
                
                <h3>Call Us</h3>
                <p>(877) 721-4579</p>
                <p>Mon-Fri 9AM-6PM CST</p>
            </div>
            
            <div class="footer-links">
                <div class="links-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">Trademark Registration</a></li>
                        <li><a href="#">Comprehensive Search</a></li>
                        <li><a href="#">Trademark Monitoring</a></li>
                        <li><a href="#">Free Trademark Search</a></li>
                        <li><a href="#">Copyright Registration</a></li>
                        <li><a href="#">Office Action Response</a></li>
                    </ul>
                </div>
                
                <div class="links-column">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Our Guarantee</a></li>
                        <li><a href="#">Privacy Settings</a></li>
                    </ul>
                </div>
                
                <div class="links-column">
                    <h3>Connect With Us</h3>
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                    
                    <h3>Follow Us</h3>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>Trademark Engine provides information and software only. Trademark Engine is not a "lawyer referral service" and does not provide legal advice or participate in any legal representation. Use of Trademark Engine is subject to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.</p>
            
            <div class="payment-methods">
                <span class="payment-icon visa"></span>
                <span class="payment-icon mastercard"></span>
                <span class="payment-icon amex"></span>
                <span class="payment-icon discover"></span>
            </div>
            
            <p class="copyright">© Copyright <?php echo date('Y'); ?> Trademark Engine, LLC</p>
        </div>
    </div>
</footer>

<script>
    function toggleFAQ(button) {
        const answer = button.nextElementSibling;
        const arrow = button.querySelector('.arrow');
        
        // Toggle the answer visibility
        answer.classList.toggle('hidden');
        
        // Toggle the arrow direction
        arrow.classList.toggle('rotate-180');
    }
</script>

<?php get_footer(); ?> 