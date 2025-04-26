<?php
/**
 * Template Name: Office Action Response
 * 
 * Template for displaying the Office Action Response page
 */

get_header();

// Enqueue custom CSS for this template
function office_action_styles() {
    wp_enqueue_style('office-action-style', get_template_directory_uri() . '/css/office-action-style.css');
}
add_action('wp_enqueue_scripts', 'office_action_styles');
?>

<!-- Hero Section -->
<div class="hero-wrapper">
    <div class="office-action-hero">
        <div class="office-action-container">
            <div class="hero-content-wrapper">
                <div class="hero-text">
                    <h1>USPTO Office Action Response</h1>
                    <p>If you received an Office Action to your trademark application, we may be able to help you. Don't delay. Starting at $399</p>
                    
                    <ul class="hero-features">
                        <li>35,000+ five-star reviews</li>
                        <li>Rated 4.8 by Forbes Advisor</li>
                        <li>Rated 4.5 on Trust Pilot</li>
                    </ul>
                    
                    <a href="#respond" class="office-action-button">Respond to My Office Action</a>
                </div>
                
                <div class="hero-image">
                    <!-- Image can be added here via CSS background or as an img tag -->
                </div>
            </div>
        </div>
        
        <div class="recommendation-bar">
            <div class="container">
                <p>98% of customers recommend our Extension Filing service</p>
            </div>
        </div>
    </div>
</div>

<!-- Info Section -->
<section class="info-section">
    <div class="container">
        <h2>Responding to Office Actions</h2>
        <p class="section-text">An examining attorney will issue an office action when they find an error or other legal deficiency in your trademark application. The issues raised in an Office Action have to be addressed or you risk the abandonment of your registration. Pursuant to your request, a Swyft Legal attorney will review your office action to help you determine the best course of action for your trademark registration. Whether you have a simple clerical matter to be corrected, or you need a legal argument submitted, don't delay and act today.</p>
        
        <div class="steps-container">
            <div class="step">
                <div class="step-icon">1</div>
                <h4>Provide us some basic information about your mark</h4>
            </div>
            <div class="step">
                <div class="step-icon">2</div>
                <h4>Your information and Office Action is reviewed to confirm engagement</h4>
            </div>
            <div class="step">
                <div class="step-icon">3</div>
                <h4>You will sign off on the response a few days later</h4>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="respond" class="pricing-section">
    <div class="container">
        <h6 class="pricing-label">Pricing</h6>
        <h2>Receive an Office Action? It's OK. We May Be Able to Help.</h2>
        <p class="section-text">Over 60% of trademark applications receive Office Actions from the USPTO. Although it may seem distressing, it doesn't have to be. Many Office Actions can be cleared up with some clerical fixes and agreeing to some changes proposed by the USPTO. You shouldn't give up your application because of this hurdle.</p>
        
        <div class="price-row">
            <div class="price-box">
                <div class="price-header">
                    <h3>Office Action Responses</h3>
                    <div class="price">$399</div>
                </div>
                
                <a href="#" class="office-action-button price-button">Get Started</a>
            </div>
            
            <div class="features-container">
                <div class="feature">
                    <div class="feature-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="feature-content">
                        <h4>Simple Process</h4>
                        <p>Answer a few quick questions to get started.</p>
                    </div>
                </div>
                
                <div class="feature">
                    <div class="feature-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="feature-content">
                        <h4>Review and Preparation</h4>
                        <p>If eligible, your information will be reviewed and a response will be composed.</p>
                    </div>
                </div>
                
                <div class="feature">
                    <div class="feature-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="feature-content">
                        <h4>Consult and Approve</h4>
                        <p>You will consult with your attorney and approve the response for filing.</p>
                    </div>
                </div>
                
                <a href="#" class="feature-details">Feature details</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <h2>Office Action Filing FAQs</h2>
        <p class="faq-subtitle">Still have questions? Call 1 (877) 721-4579 with us for real-time support.</p>
        
        <div class="faq-list">
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What is an Office Action?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>"Office Action" is the term the UPSTO uses when it has an issue or a question about a trademark application. The examining attorney within the USPTO typically sends an Office Action to notify an applicant about issues with his or her application. The letter will most often include the reason why registration is being refused or what requirements need to be satisfied. In most cases, an applicant must respond to an Office Action within three months from the date the Office Action is issued or the USPTO will abandon the application, the application fee will not be refunded, and the mark will not register. An office action may have important legal consequences and you should consider consulting with an attorney about the appropriate response.</p>
                    <p>There are generally two types of office actions:</p>
                    <ol>
                        <li>Non-final actions: This type of Office Action raises an issue for the first time and a response can be made to the examining attorney.</li>
                        <li>Final actions: This type of action issues when the applicant's response to the prior Office Action fails to address or overcome all issues. An applicant's response to final Office Action generally is either compliance with the requirements or an appeal to the Trademark Trial and Appeal Board.</li>
                    </ol>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What is the significance of an Office Action asking the applicant to move the application to the Supplemental Register?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>Most people initially apply for a mark to be on the Principal Register. The Supplemental Register is another option. A descriptive mark, a surname or a geographic term, may be more appropriate for the Supplemental Register. Often times, the USPTO will issue an Office Action suggesting filing on the Supplemental Register instead of the Principal Register.</p>
                    <p>According to the USPTO, on the Supplemental Register, you can still:</p>
                    <ul>
                        <li>Use the ® symbol</li>
                        <li>Put others on notice that you are already using the mark</li>
                        <li>File a trademark infringement suit in federal court</li>
                        <li>Prevent others from obtaining confusingly similar marks from the USPTO - even on the Principal Register.</li>
                    </ul>
                    <p>Unfortunately, a company with a mark on the Supplemental Register may not the presumed owner of a valid mark if there is a lawsuit. A Supplemental Register mark generally cannot be used to prevent the importation of counterfeit goods. Finally, Supplemental Register marks are generally not eligible to become incontestable like a mark on the Principal Register can. However, if a mark obtains secondary meaning, the owner can refile for acceptance on the Principal Register even if they first filed on the Supplemental Register.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What is the significance of an office action that asks an applicant to "disclaim" part of the trademark?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>A mark is often (but not always) a group of words with one or more of them describing the product (e.g., tires) or it may be merely descriptive (e.g., great). While it may be appropriate to register the mark as a whole, the USPTO may question an attempt to claim some of the individual product or descriptive terms. Thus, some companies decide to disclaim those words without giving up on registering the mark as a whole or the USPTO may ask an applicant to do so after the fact.</p>
                    <p>The disclaimer does not remove the unregistrable part of a mark or affect its appearance. A disclaimer appears on the USPTO database that lets the world know the company is not making an exclusive claim to that particular part of the mark. Failure to disclaim part of a mark may be cause for rejection. Often times (but not always), the USPTO can issue an Action Letter seeking to disclaim the unregistrable parts of a mark, which may delay the application. At this point, there are generally two options: agree with the USPTO or decide to fight the request to disclaim. Because it may have significant legal ramifications on the protections associated with the mark, consider consulting with an attorney after receiving an Action Letter with a request to disclaim part of a mark.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What percentage of trademark applications receive Office Actions?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>A recent statistic reported that more than 60% of trademark applications receive some type of Office Action. This is from the total population of filings which includes filings from lawyers, individuals and third-party service providers.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What is the deadline to respond to the USPTO Office Action?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>In most cases, the deadline is three months from receipt of the Office Action notice from the USPTO.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What if an applicant does not respond to an Office Action?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>In most cases, the USPTO treats applications in which an Office Action is not answered as abandoned by the applicant if no response is received within three months. The USPTO filing fee is generally not refunded and future efforts to register the trademark will typically require the applicant to start all over, including payment of new USPTO filing fees.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h6>Get Started</h6>
        <h2>Respond to my Office Action today.</h2>
        <p>Trust Swyft Legal to address your Office Action response needs.</p>
        <a href="#respond" class="office-action-button">Get Started Now</a>
    </div>
</section>

<!-- Legal Disclaimer -->
<div class="legal-disclaimer">
    <div class="container">
        <p>The law firm responsible for the portion of this page constituting an advertisement is Swyft Legal, LLC who can be reached at [email protected]. Swyft Legal, LLC is licensed by the Arizona Supreme Court under license number 70173. All legal services provided in connection with the attorney-led trademark process are provided by Swyft Legal, LLC. Trademark Engine is an affiliate of Swyft Legal, LLC.</p>
    </div>
</div>

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