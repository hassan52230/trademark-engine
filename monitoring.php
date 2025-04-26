<?php
/**
 * Template Name: Monitoring
 * The template for displaying the trademark monitoring page
 */

// Enqueue the custom CSS
function enqueue_monitoring_styles() {
    wp_enqueue_style('monitoring-styles', get_template_directory_uri() . '/css/monitoring-style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_monitoring_styles');

get_header();
?>

<div class="monitoring-hero">
    <div class="monitoring-container">
        <div class="hero-content-wrapper">
            <div class="hero-text">
                <h1>Trademark Monitoring</h1>
                <p>You focus on your business while we focus on your trademark. Starting at $199</p>
                
                <ul class="hero-features">
                    <li>Thousands have protected their brand by monitoring their trademark.</li>
                    <li>35,000+ five-star reviews</li>
                    <li>Rated 4.8 by Forbes Advisor</li>
                </ul>

                <a href="#monitoring" class="monitoring-button">Start Your Trademark Monitoring Today</a>

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
            <div class="hero-image">
                <!-- Image placeholder - will be added by user later -->
                <div class="image-placeholder">Trademark Monitoring Image Placeholder</div>
            </div>
        </div>
    </div>
    <div class="recommendation-bar">
        <p>98% of customers recommend our Trademark Monitoring service</p>
    </div>
</div>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <h2>Trademark Monitoring FAQs</h2>
        <p class="faq-subtitle">Still have questions? Call 1 (877) 721-4579 or LIVE CHAT with us for real-time support.</p>
        
        <div class="faq-list">
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What does an applicant need to do to protect the mark after it is registered?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>Once properly registered, trademarks generally need to be renewed by filing a Declaration of Continued Use. The first Declaration of Continued Use is usually due between the 5th and 6th anniversary date of the filing. The next renewal usually falls between the ninth and tenth year. Thereafter renewals are generally every ten years. Trademark Engine provides notice of the applicable deadlines and allows filing of the necessary paperwork via its personalized portal with just a few clicks of the mouse or with some minor updated information.</p>
                    <p>At the five year mark, assuming continued use of the mark, we can also help file a "Declaration of Incontestability," which provides additional protection under trademark law. This may prevent others from contesting the trademark on several common grounds, such as: (1) the mark is not inherently distinctive; (2) it is confusingly similar to a mark someone else began using first; or (3) the mark is simply functional as opposed to identifying the source of the goods or services.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What do I do if someone is infringing?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>Often a trademark owner will send a cease and desist letter demanding that the infringing party stop using the mark. The infringement may not be on purpose and the infringing party may stop when notified that their conduct is in clear violation of another's rights.</p>
                    <p>The infringing party may also ignore the demand or take the position that they are not infringing. At that point, you may consider a trademark infringement lawsuit. You should talk with an attorney if you believe a lawsuit might be the right choice for you.</p>
                    <p>Successful lawsuits have common characteristics and you should discuss with a lawyer whether any of these are present in your situation:</p>
                    <ul>
                        <li>The plaintiff is the owner of a valid mark - which is ordinarily presumed if they have a federal trademark registration</li>
                        <li>The other side is using the mark without authority in connection with the sale of goods or services</li>
                        <li>The other side is using the mark in a manner that is likely to cause confusion to reasonable consumers</li>
                    </ul>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>Is it possible to make changes to the mark after it is filed?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>It is possible to amend an application, but the process and the associated fees generally depend on the timing of the changes. Changes before the trademark has been published in the Official Gazette can be made by logging into your Trademark Engine account and request that a change be made. Additional fees to Trademark Engine and filing fees to the USPTO may apply.</p>
                    <p>Changes once the trademark has been published in the Official Gazette generally require a Post-Publication Amendment, which Trademark Engine can assist with.</p>
                    <p>Depending on the scope of the amendment, an applicant may need to file a new application instead. For example, amendments that broaden the scope of a description or add international categories may require additional fees and may require a new application. Clerical errors, on the other hand, are generally easy to fix and typically won't affect the applicant's place in line or require a new application.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>Is it possible to sell, license, or assign a trademark?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>Yes, like any other business asset, a trademark can be sold, licensed or assigned. Validity requirements generally still apply, so someone usually needs to continue to use the mark in commerce and it is helpful to register assignments with the USPTO. If you enter into such an agreement, we can help with a transfer of the trademark with the PTO. Sometimes, individuals register the mark before a company is officially set up. Then, once the company is formed, the mark needs to be transferred into the company.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What is Trademark Infringement?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>According to the USPTO, trademark infringement is the unauthorized use of a trademark or service mark on or in connection with goods and/or services in a manner that is likely to cause confusion, deception, or mistake about the source of the goods and/or services.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What factors go into determining whether the similarity of a mark might cause consumer confusion?</span>
                    <svg class="arrow" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden">
                    <p>According to the USPTO,"the key factors considered in most cases are the degree of similarity between the marks at issue and whether the parties' goods and/or services are sufficiently related that consumers are likely to assume (mistakenly) that they come from a common source. Other factors that courts typically consider include how and where the parties' goods or services are advertised, marketed, and sold; the purchasing conditions; the range of prospective purchasers of the goods or services; whether there is any evidence of actual confusion caused by the allegedly infringing mark; the defendant's intent in adopting its mark; and the strength of the plaintiff's mark." These are all fact intensive inquiries.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Monitoring Info Section -->
<section id="monitoring" class="monitoring-section">
    <div class="container">
        <h2>Focus on your business while we focus on your trademark</h2>
        <p class="monitoring-subtitle">Thousands have protected their brand by monitoring their trademark.</p>
        
        <a href="#" class="monitoring-button">Start Monitoring My Trademark Today</a>
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