<?php
/**
 * Template Name: Comprehensive Trademark Search
 * 
 * The template for displaying the Comprehensive Trademark Search page
 */

get_header();
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/comprehensive-search-style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<main id="primary" class="site-main">

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1>Comprehensive Trademark Search</h1>
                    <p>Discover if your trademark idea is available with our in-depth professional search. Minimize the risk of rejection and potential legal issues.</p>
                    <div class="hero-buttons">
                        <a href="#pricing" class="btn btn-light">View Pricing</a>
                        <a href="/contact" class="btn btn-outline-secondary">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recommendation Bar -->
    <div class="recommendation-bar">
        <div class="container">
            <span class="recommendation-percentage">98%</span> of customers recommend our Comprehensive Trademark Search service
        </div>
    </div>

    <!-- How It Works Section -->
    <section class="how-it-works" id="how-it-works">
        <div class="container">
            <div class="section-title">
                <h2>How Our Search Process Works</h2>
                <p>We help you understand if your trademark is available through a thorough three-step process.</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="step-card">
                        <div class="step-number">1</div>
                        <h3>Submit Your Request</h3>
                        <p>Fill out our simple form with information about your trademark, including the mark and the goods/services you plan to offer.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="step-card">
                        <div class="step-number">2</div>
                        <h3>We Conduct the Search</h3>
                        <p>Our team of experts performs a comprehensive search of USPTO databases, state registrations, common law uses, and domain names.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="step-card">
                        <div class="step-number">3</div>
                        <h3>Review Your Results</h3>
                        <p>Within 3-5 business days, we'll provide you with a detailed report including an analysis of any potential conflicts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section">
        <div class="container">
            <div class="section-title">
                <h2>Why Run a Comprehensive Search?</h2>
                <p>A thorough search can save you time, money, and heartache in the long run.</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="benefit-content">
                            <h3>Avoid Application Rejection</h3>
                            <p>The USPTO rejects applications for trademarks that conflict with existing marks. Our comprehensive search helps identify potential conflicts before you apply.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="benefit-content">
                            <h3>Prevent Legal Disputes</h3>
                            <p>Using a trademark that's already in use can lead to costly legal battles. Our thorough search helps you avoid infringing on others' rights.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="benefit-content">
                            <h3>Save Money</h3>
                            <p>The cost of a comprehensive search is significantly less than the expenses associated with changing your brand after launch or defending against infringement claims.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <div class="benefit-content">
                            <h3>Make Informed Decisions</h3>
                            <p>Our detailed report helps you understand the trademark landscape, allowing you to make better decisions about your brand strategy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Concerns Section -->
    <section class="concerns-section">
        <div class="container">
            <div class="section-title">
                <h2>Common Concerns with Brand Names & Logos</h2>
                <p>Many business owners don't realize the potential issues with their chosen names until it's too late.</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="concern-item">
                        <h3>Similar Existing Marks</h3>
                        <p>Even if not identical, similar marks in related industries can prevent your trademark registration. Our search identifies not just exact matches but also similar marks.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="concern-item">
                        <h3>Common Law Usage</h3>
                        <p>Some businesses have trademark rights even without registration. We check for unregistered uses that could impact your ability to register or use your mark.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="concern-item">
                        <h3>Descriptive or Generic Terms</h3>
                        <p>Terms that merely describe your products or services are difficult to protect. Our analysis helps you understand the strength and registrability of your chosen mark.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section" id="pricing">
        <div class="container">
            <div class="section-title">
                <h2>Our Search Packages</h2>
                <p>Choose the right level of protection for your trademark needs.</p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="price-card">
                        <h3>Basic Search</h3>
                        <div class="price">$199</div>
                        <div class="price-description">Perfect for startups with limited budgets</div>
                        <ul class="feature-list">
                            <li><i class="fas fa-check"></i> Federal trademark database search</li>
                            <li><i class="fas fa-check"></i> Exact match identification</li>
                            <li><i class="fas fa-check"></i> One class of goods/services</li>
                            <li><i class="fas fa-check"></i> Basic analysis report</li>
                            <li><i class="fas fa-check"></i> Results within 2-3 business days</li>
                        </ul>
                        <a href="/order-search?package=basic" class="btn btn-outline-secondary">Order Now</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="price-card featured">
                        <span class="featured-badge">Most Popular</span>
                        <h3>Comprehensive Search</h3>
                        <div class="price">$399</div>
                        <div class="price-description">Recommended for most businesses</div>
                        <ul class="feature-list">
                            <li><i class="fas fa-check"></i> Federal & state database search</li>
                            <li><i class="fas fa-check"></i> Similar mark identification</li>
                            <li><i class="fas fa-check"></i> Common law usage check</li>
                            <li><i class="fas fa-check"></i> Domain name availability</li>
                            <li><i class="fas fa-check"></i> Up to two classes of goods/services</li>
                            <li><i class="fas fa-check"></i> Detailed analysis report</li>
                            <li><i class="fas fa-check"></i> Results within 3-5 business days</li>
                        </ul>
                        <a href="/order-search?package=comprehensive" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="price-card">
                        <h3>Global Search</h3>
                        <div class="price">$799</div>
                        <div class="price-description">For businesses with international aspirations</div>
                        <ul class="feature-list">
                            <li><i class="fas fa-check"></i> All Comprehensive Search features</li>
                            <li><i class="fas fa-check"></i> International trademark database search</li>
                            <li><i class="fas fa-check"></i> Up to five international jurisdictions</li>
                            <li><i class="fas fa-check"></i> Up to three classes of goods/services</li>
                            <li><i class="fas fa-check"></i> Social media username check</li>
                            <li><i class="fas fa-check"></i> Comprehensive global analysis</li>
                            <li><i class="fas fa-check"></i> Results within 7-10 business days</li>
                        </ul>
                        <a href="/order-search?package=global" class="btn btn-outline-secondary">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" id="faq">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Get answers to common questions about our trademark search service.</p>
            </div>
            <div class="faq-accordion">
                <div class="faq-item">
                    <div class="faq-question">What's the difference between a free search and a comprehensive search?</div>
                    <div class="faq-answer">
                        <p>A free search typically only checks the USPTO database for exact matches of your trademark. A comprehensive search examines federal and state databases, common law uses, similar-sounding marks, and checks across multiple classes of goods and services, providing a much more thorough analysis of potential conflicts.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">How long does a comprehensive trademark search take?</div>
                    <div class="faq-answer">
                        <p>Our comprehensive search takes approximately 3-5 business days to complete. This timeline allows our experts to conduct a thorough analysis across multiple databases and sources to identify potential conflicts.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">What information do I need to provide for the search?</div>
                    <div class="faq-answer">
                        <p>You'll need to provide your proposed trademark (word, logo, or both), the goods and services you plan to offer under the mark, and the class(es) of goods/services you're interested in. If you're unsure about the classes, our team can help determine the appropriate ones for your business.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">What if the search finds potential conflicts?</div>
                    <div class="faq-answer">
                        <p>If our search identifies potential conflicts, we'll provide a detailed analysis in your report. This will help you understand the level of risk associated with using your proposed mark. In some cases, we may suggest modifications to reduce the likelihood of conflicts or opposition.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Can I file a trademark application without a comprehensive search?</div>
                    <div class="faq-answer">
                        <p>Yes, you can file without a comprehensive search, but it's not recommended. Filing without proper research increases the risk of rejection and potential legal disputes. A comprehensive search is a small investment that can save you significant time, money, and headaches in the long run.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Is the search fee applied to the cost of filing a trademark application?</div>
                    <div class="faq-answer">
                        <p>The search fee is separate from the trademark application filing fees. However, the insights gained from the search are invaluable for preparing a strong trademark application, increasing your chances of successful registration.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Ready to Secure Your Brand?</h2>
            <p>Don't risk your business identity on an inadequate search. Our comprehensive trademark search provides the peace of mind you need to move forward confidently with your brand.</p>
            <a href="#pricing" class="btn btn-light">Get Started Today</a>
        </div>
    </section>

    <!-- Legal Disclaimer -->
    <div class="legal-disclaimer">
        <div class="container">
            <p>Disclaimer: While our comprehensive search is thorough, no search can guarantee absolute certainty of trademark availability or registration success. Results are provided for informational purposes and do not constitute legal advice.</p>
        </div>
    </div>

</main>

<script>
    // FAQ Accordion Functionality
    document.addEventListener('DOMContentLoaded', function() {
        const faqQuestions = document.querySelectorAll('.faq-question');
        
        faqQuestions.forEach(question => {
            question.addEventListener('click', function() {
                const answer = this.nextElementSibling;
                const isActive = this.classList.contains('active');
                
                // Close all other open questions
                document.querySelectorAll('.faq-question.active').forEach(activeQuestion => {
                    if (activeQuestion !== this) {
                        activeQuestion.classList.remove('active');
                        activeQuestion.nextElementSibling.style.maxHeight = '0';
                    }
                });
                
                // Toggle current question
                if (isActive) {
                    this.classList.remove('active');
                    answer.style.maxHeight = '0';
                } else {
                    this.classList.add('active');
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                }
            });
        });
    });
</script>

<?php
get_footer(); ?> 