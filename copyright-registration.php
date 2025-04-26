<?php
/**
 * Template Name: Copyright Registration
 * 
 * The template for displaying the Copyright Registration page
 */

get_header();
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/copyright-registration-style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<main id="primary" class="site-main">

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h1>You've worked hard to create it. Now copyright it.</h1>
                    <p class="hero-subtitle">Turn Trademark Engine into your Copyright Engine and protect your story, song, movie, picture, art or other work. Starting at $99 + filing fees.</p>
                    
                    <ul class="hero-stats">
                        <li>120,000+ trademarks and copyrights filed since 2016</li>
                        <li>35,000+ five-star reviews</li>
                        <li>Rated 4.8 by Forbes Advisor</li>
                    </ul>
                    
                    <a href="#pricing" class="cta-button">Start My Copyright Registration</a>
                    
                    <div class="trust-badges">
                        <div class="badge">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/forbes-advisor.png" alt="Forbes Advisor">
                        </div>
                        <div class="badge">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/inc-5000.png" alt="Inc 5000">
                        </div>
                        <div class="badge">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/shopper-approved.png" alt="Shopper Approved">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/copyright-hero.jpg" alt="Copyright Registration">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recommendation Bar -->
    <div class="recommendation-bar">
        <div class="container">
            <p>98% of customers recommend our Copyright Registration service</p>
        </div>
    </div>

    <!-- How It Works Section -->
    <section class="how-it-works-section">
        <div class="container">
            <h2>How Copyright Engine works</h2>
            <p class="section-subtitle">Get your copyright registered in just 3 easy steps using our simple online questionnaire.</p>
            
            <div class="steps-container">
                <div class="step-card">
                    <h3>Answer a few questions</h3>
                    <p>Complete our simple questionnaire to begin the registration process. Most people finish in as little as 7 minutes.</p>
                </div>
                
                <div class="step-card">
                    <h3>Compile application</h3>
                    <p>We create the official application for you and send it to you online for your review and approval.</p>
                </div>
                
                <div class="step-card">
                    <h3>Application filing</h3>
                    <p>When you upload or send us your work, we will file your copyright application with the U.S. Copyright Office.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="pricing-section">
        <div class="container">
            <h2>Select your Copyright Registration package.</h2>
            
            <div class="pricing-container">
                <div class="price-card">
                    <div class="package-header">
                        <h3>Basic Package</h3>
                        <div class="price">$99</div>
                        <div class="price-note">+ federal filing fees</div>
                    </div>
                    
                    <a href="#" class="view-details">View more details</a>
                    
                    <div class="cta-wrapper">
                        <a href="#" class="cta-button">Get Started</a>
                    </div>
                    
                    <div class="features-list">
                        <div class="feature">
                            <h4>Professional preparation</h4>
                            <p>of your federal copyright application including a review by the copyright team for accuracy, completeness and common mistakes.</p>
                        </div>
                        
                        <div class="feature">
                            <h4>Federal E-Filing with USPTO</h4>
                            <p>Electronic filing of your application with the U.S Copyright Office with no need to wait for mail or dealing with paper files.</p>
                        </div>
                        
                        <div class="feature">
                            <h4>Certificate of Registration</h4>
                            <p>that will be mailed to you directly from the U.S. Copyright Office.</p>
                        </div>
                    </div>
                    
                    <a href="#" class="feature-details">Feature details</a>
                </div>
                
                <div class="price-card deluxe">
                    <div class="package-header">
                        <h3>Deluxe Package</h3>
                        <div class="price">$199</div>
                        <div class="price-note">+ federal filing fees</div>
                    </div>
                    
                    <a href="#" class="view-details">View more details</a>
                    
                    <div class="cta-wrapper">
                        <a href="#" class="cta-button">Get Started</a>
                    </div>
                    
                    <div class="includes-text">INCLUDES EVERYTHING FROM THE BASIC PACKAGE PLUS:</div>
                    
                    <div class="features-list">
                        <div class="feature">
                            <h4>Cease & Desist Letter</h4>
                            <p>A customer-specific form you can further customize if someone is infringing on your copyright.</p>
                        </div>
                        
                        <div class="feature">
                            <h4>Transfer/Assignment</h4>
                            <p>Custom assignment template. If you need to sell or otherwise convey your copyright, you have access to your pre-filled in template that you can further customize.</p>
                        </div>
                        
                        <div class="feature">
                            <h4>24-hour Expedited Processing</h4>
                            <p>of the preparation of your copyright application. Normal processing time is 5 business days in our Basic package.</p>
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
            <h2>Federal Copyright Registration FAQs</h2>
            <p class="faq-subtitle">Still have questions? Call 1 (877) 721-4579 with us for real-time support.</p>
            
            <div class="faq-accordion">
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        What can I Copyright?
                        <span class="faq-icon"></span>
                    </div>
                    <div class="faq-answer">
                        <p>Usually, determining whether something can be copyrighted is easy. Books, movies, and songs are copyrightable. Artistic drawings, paintings and photographs are also copyrightable. When you start moving towards more technical works and drawings, it can become a little trickier. Generally speaking, drawings, photographs, and other two-dimensional and three-dimensional expressions that visually depict three-dimensional objects are copyrightable. At the Trademark Engine, we can help you copyright your:</p>
                        <ul>
                            <li>Written work such as fiction, nonfiction, poetry, textbooks, reference works or articles</li>
                            <li>Directories or catalogs, advertising copy</li>
                            <li>Computer programs</li>
                            <li>Website or online materials</li>
                            <li>Photograph</li>
                            <li>Art Work</li>
                            <li>Maps</li>
                            <li>Technical Drawings</li>
                            <li>Recorded performance of music or sound</li>
                            <li>Written music & Lyrics, Screenplay or script</li>
                            <li>A Choreographic work</li>
                            <li>A recorded score for a movie or play</li>
                            <li>Feature film, documentary film, animated film, television show, video, or other Audi-Visual Work</li>
                        </ul>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        What is a common law copyright?
                        <span class="faq-icon"></span>
                    </div>
                    <div class="faq-answer">
                        <p>The law in the United States provides that you are granted a copyright in your work the minute you create it regardless of whether you register your work. Assuming your work is original and has a basic amount of creativity, you may claim ownership and protection. The problem is without registering, you have an incomplete form of protection in that you cannot enforce your rights in a court of law in America.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        What's the difference between copyright, patent and trademark?
                        <span class="faq-icon"></span>
                    </div>
                    <div class="faq-answer">
                        <p>A trademark generally protects a word, phrase, symbol and/or design that distinguishes the source of the goods -- what we think of as brand name and brand recognition. A patent generally protects an invention, including the functionality or design, or in other words, "any new and useful process, machine, manufacture, or composition of matter, or any new and useful improvement thereof." 35 U.S.C. § 101. Copyrights, meanwhile, generally protect artistic works such as books, photographs, arts, movies and music.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        What are the benefits to registering your work with the copyright office?
                        <span class="faq-icon"></span>
                    </div>
                    <div class="faq-answer">
                        <p>While you do not have to register your work in order to receive copyright protection, registration will guarantee you several additional protections including:</p>
                        <ul>
                            <li>The ability to file a lawsuit: If your work is not registered with the copyright office, you cannot file suit for copyright infringement.</li>
                            <li>Statutory damages: If not timely filed, you cannot sue for statutory damages. You would therefore have to prove that someone's copying of your work caused you actual damages that you can calculate and tie to the infringement of the other person. (more on this below)</li>
                            <li>Protection from imported infringing copies: Registration also allows you to record the registration with the U.S. Customs Service for protection against the importation of infringing copies.</li>
                            <li>Firm claim of ownership: Registration makes it more difficult for infringers to argue that they were unaware of their infringement as it acts as a notice to everyone that you own the copyright.</li>
                            <li>Image of Establishment: In some industries (such as film scripts), registration of copyright is a prerequisite to get some people (like agents) to take you seriously.</li>
                        </ul>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        How does an applicant decide which category to use?
                        <span class="faq-icon"></span>
                    </div>
                    <div class="faq-answer">
                        <p>There are a number of different categories (also known as an International Classes) that can be used to identify particular goods or services. The USPTO has developed a pre-determined list of trademark categories from which to choose. It may be helpful to register a mark within multiple classes (for example a company that operates a restaurant chain (Class 043) and sells items in grocery stores using the restaurant's name (Class 030)). Bear in mind that there is a USPTO filing fee for each selected category. Check out WIPO's Nice Classifications to see broader descriptions of each available category.</p>
                        <p>Before picking a category, it may be helpful to decide if you are selling a good or a service. Goods are generally physical items like nuts, bolts, beer and t-shirts. Services generally focus on particular activities such as legal, consulting or accounting services. In some circumstances, it may be helpful to register under multiple classes.</p>
                        <p>The selection is important because a registered trademark generally protects only the category listed in the application. Broader categories may provide more protection, but if the category does not accurately fit the applied for good or service, the registration could be invalidated. Also, changing the class designation can be difficult and require an additional filing fee.</p>
                        <p>Bear in mind that a company name and particular product names may each be trademarked separately and may each involve different categories. Each registration would require the payment of additional fees to the USPTO.</p>
                        <p>Tips for Picking the Right category</p>
                        <ul>
                            <li>Determine whether you are selling a good or service.</li>
                            <li>Try to be as accurate as possible because filing in the wrong class can be the basis of a rejection by the USPTO.</li>
                            <li>Pick the most accurate category from the USPTO list. These are all included on the drop-down menu on the Trademark Engine website.</li>
                            <li>Review the published information about categories, you can read here:</li>
                            <li>https://nclpub.wipo.int/en/nfr/?basic_numbers=show&class_number=1&explanatory_notes=show&gors=&lang=en&menulang=en&mode=flat&notion=&pagination=no&version=20240101</li>
                            <li>Focus on the finished product to the consumer and not on the ingredients that go into the goods or service.</li>
                            <li>Focus on what is actually sold to consumers and not extra things like the fact that employees may have shirts or hats with the company logo.</li>
                            <li>Don't think about the packaging. A fruit seller probably doesn't sell paper goods just because its logo appears on the packaging that comes with the fruit.</li>
                            <li>Although more expensive, some companies file under more than one category when they sell multiple products.</li>
                        </ul>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        How long does a copyright last?
                        <span class="faq-icon"></span>
                    </div>
                    <div class="faq-answer">
                        <p>In most cases, a copyright lasts for the life of the author plus 70 years. If the author of the work died in 2070, then the copyright, in most situations, would last until 2140. For works made for hire, and for anonymous and pseudonymous works, the duration of copyright is 95 years from publication or 120 years from creation (whichever is shorter).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Take action to protect your work today.</h2>
            <p>Thousands have protected their creative work by filing a copyright</p>
            <a href="#pricing" class="cta-button">Start My Copyright Registration</a>
        </div>
    </section>

    <!-- Legal Disclaimer -->
    <div class="legal-disclaimer">
        <div class="container">
            <p>Disclaimer: Trademark Engine is not a law firm and does not provide legal advice. Trademark Engine provides information and software only. Trademark Engine is not a substitute for the advice of an attorney.</p>
        </div>
    </div>
</main>

<script>
    function toggleFAQ(button) {
        const item = button.parentNode;
        const answer = button.nextElementSibling;
        
        // Check if this FAQ is already open
        const isOpen = item.classList.contains('active');
        
        // Close all FAQs
        document.querySelectorAll('.faq-item').forEach(faqItem => {
            faqItem.classList.remove('active');
        });
        
        // If the clicked FAQ wasn't open before, open it
        if (!isOpen) {
            item.classList.add('active');
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
</script>

<?php
get_footer(); ?> 