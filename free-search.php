<?php
/**
 * Template Name: Free Trademark Search
 * 
 * The template for displaying the Free Trademark Search page
 */

get_header();
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/free-search-style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<main id="primary" class="site-main">

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1>Search millions of Trademarks for Free</h1>
                    <p>Search millions of trademarks that are live or pending with the USPTO</p>
                    
                    <!-- Search Form -->
                    <div class="search-container">
                        <form id="free-trademark-search-form" class="search-form">
                            <input type="text" id="trademark-search-input" placeholder="Enter trademark name..." required>
                            <button type="submit" class="search-button">
                                <i class="fas fa-search"></i> Search
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Value Proposition -->
    <section class="value-section">
        <div class="container">
            <h2>Know More. Do Better. Save Time and Money.</h2>
            <p>The free search only finds exact matches with the USPTO – Do you need more? Check out our Comprehensive Search Reports below.</p>
            
            <div class="search-options">
                <div class="row">
                    <div class="col-md-4">
                        <div class="search-option-card">
                            <h4>Federal and State Search</h4>
                            <div class="price">Only $149</div>
                            <p>Search for your name, slogan or logo with the USPTO and all 50 States and receive a full detailed report based on similar trademarks across multiple classes and sub-classes.</p>
                            <a href="#" class="btn btn-outline">Learn more</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="search-option-card">
                            <h4>Federal, State & Common Law</h4>
                            <div class="price">Only $299</div>
                            <p>You need to know if someone is already using your mark even if they have not registered. Our Federal, State & Common Law search scours numerous sources to help you find it.</p>
                            <a href="#" class="btn btn-outline">Learn more</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="search-option-card">
                            <h4>Global U.S. & International Search</h4>
                            <div class="price">Only $499</div>
                            <p>Includes everything from the Federal, State and Common Law Search, but also searches international databases including Canada, the U.K., the E.U. and WIPO.</p>
                            <a href="#" class="btn btn-outline">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Companies -->
    <section class="featured-companies">
        <div class="container">
            <h2>Featured Companies</h2>
            <div class="companies-grid">
                <div class="company-card">
                    <div class="company-logo amazon-logo"></div>
                    <h4>Amazon</h4>
                    <a href="#" class="company-link">View all Amazon trademarks</a>
                </div>
                <div class="company-card">
                    <div class="company-logo apple-logo"></div>
                    <h4>Apple</h4>
                    <a href="#" class="company-link">View all Apple trademarks</a>
                </div>
                <div class="company-card">
                    <div class="company-logo att-logo"></div>
                    <h4>AT&T</h4>
                    <a href="#" class="company-link">View all AT&T trademarks</a>
                </div>
                <div class="company-card">
                    <div class="company-logo zoom-logo"></div>
                    <h4>Zoom</h4>
                    <a href="#" class="company-link">View all Zoom trademarks</a>
                </div>
                <div class="company-card">
                    <div class="company-logo slack-logo"></div>
                    <h4>Slack</h4>
                    <a href="#" class="company-link">View all Slack trademarks</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories-section">
        <div class="container">
            <h2>Search by Categories</h2>
            
            <div class="category-container">
                <h3>Popular Goods</h3>
                <div class="category-items">
                    <a href="#" class="category-item">Chemicals</a>
                    <a href="#" class="category-item">Paints</a>
                    <a href="#" class="category-item">Cosmetics and Cleaning Products</a>
                    <a href="#" class="category-item">Lubricants and Fuels</a>
                    <a href="#" class="category-item">Pharmaceuticals</a>
                    <a href="#" class="category-item">Metal Products</a>
                </div>
                <a href="#" class="see-more">See More</a>
            </div>
            
            <div class="category-container">
                <h3>Popular Services</h3>
                <div class="category-items">
                    <a href="#" class="category-item">Advertising and business</a>
                    <a href="#" class="category-item">Insurance and financial</a>
                    <a href="#" class="category-item">Building construction and repair</a>
                    <a href="#" class="category-item">Telecommunications</a>
                    <a href="#" class="category-item">Transportation and storage</a>
                    <a href="#" class="category-item">Treatment of materials</a>
                </div>
                <a href="#" class="see-more">See More</a>
            </div>
            
            <div class="category-container">
                <h3>Browse by Filing Date</h3>
                <div class="category-items">
                    <a href="#" class="category-item">2025</a>
                    <a href="#" class="category-item">2024</a>
                    <a href="#" class="category-item">2023</a>
                    <a href="#" class="category-item">2022</a>
                    <a href="#" class="category-item">2021</a>
                    <a href="#" class="category-item">2020</a>
                </div>
                <a href="#" class="see-more">See More</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2>Trademark Engine FAQs</h2>
            <p class="faq-subtitle">Still have questions? Call 1 (877) 721-4579 or LIVE CHAT with us for real-time support.</p>
            <a href="#" class="help-center-link">Visit the help center</a>
            
            <div class="faq-accordion">
                <div class="faq-item">
                    <div class="faq-question">Why run a search for similar trademarks?</div>
                    <div class="faq-answer">
                        <p>It may be more time efficient and cost effective to do a quick search before registering a trademark. A search may help avoid obvious duplications of pre-existing marks and the expenditure of nonrefundable applications fees.</p>
                        <p>Newer companies may more easily make name changes while they are getting off the ground than years later and after substantial investment in a brand and associated goodwill.</p>
                        <p>Running searches with the USPTO does not guarantee superior rights to a particular mark. There could be someone already using a similar mark, but who did not register it with the USPTO. In that case, a registration could be subject to challenge by the owner of the earlier-used mark based on of common law trademark rights.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">Why you may need to search more than just exact matches with the USPTO?</div>
                    <div class="faq-answer">
                        <p>Running searches just with the USPTO does not mean you will automatically have superior rights to the mark. There could be someone out there already using a similar mark, but who did not register it with the USPTO. In that case, you may get a registration, but it is subject to challenge by the owner of the earlier-used mark who has because of common law trademark rights. Someone could have filed only with the state meaning your later-filed USPTO registration does not grant you rights in that state.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">What comes with each search?</div>
                    <div class="faq-answer">
                        <p>Our Trademark Engine Federal Trademark Search reviews the USPTO data base and is limited to direct matches, phonetically similar, similar in terms of translation, or appearance by way of design.</p>
                        <p>Our Trademark Engine Federal, State & Common Law Search reviews the USPTO database, the databases of all 50 states, a business registry and the database of domain names. It is limited to direct matches, phonetically similar, similar in terms of translation, or appearance by way of design.</p>
                        <p>Our Trademark Engine Global Search reviews the USPTO database, the databases of all 50 states, a business registry, the database of domain names, the World Intellectual Property Organization ("WIPO") database, the Canadian Federal Trademark database, the European Community database, the France Federal database and the German federal database. It is limited to direct matches, phonetically similar, similar in terms of translation, or appearance by way of design.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">What is a common law trademark and why bother to register a mark?</div>
                    <div class="faq-answer">
                        <p>Under U.S. law, a "common law trademark" is generally established when someone uses a company name, logo or slogan in commerce, even if it is not registered. So, why pay to register a trademark when a common law trademark may already exist? Common law rights ordinarily are limited to the geographic area where the mark is used as opposed to the nationwide protection customarily obtained when a mark is registered with the USPTO. So, unless registered, the use of a mark can be geographically limited, which hampers the ability to expand the brand. On the other hand, a person using a mark in a limited geographic area could be boxed in by someone else who offensively registers a similar mark. In addition, registration of a trademark can give the person holding the registered trademark a leg up in court as to the validity of the mark and the date of usage in later trademark infringement litigation, if it comes to that. There are also favorable remedies available to registered trademark owners in the event of litigation. Finally, once a trademark is accepted by the USPTO, it will be maintained in the USPTO database, which can discourage others from using the mark in the future. Future companies should be on notice that the mark is already spoken for, which should in turn help avoid at least some disputes.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">Am I guaranteed to get clearance on my trademark if I run a search and it comes up relatively clean?</div>
                    <div class="faq-answer">
                        <p>Unfortunately not. We use proprietary commercially reasonable methods to identify marks that may be matches to the ones you seek to use. We, however, cannot guarantee that your mark will make it through and be approved even if you use our search services. There may be a number of reasons the USPTO rejects your mark and there are circumstances where an automated search may not identify a mark the USPTO identifies as a reason to reject your mark.</p>
                        <p>Likewise, when your order covers common law mark searches, we use commercially reasonable methods to identify marks that may be matches to the ones you seek to use. We, however, cannot guarantee that your mark will be free of or prevail to all claims or challenges made by holders of common law rights to all marks. There are circumstances where an automated search may not identify a common law mark that may be similar to your mark.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">Can I perform a trademark search for free?</div>
                    <div class="faq-answer">
                        <p>Yes, you can perform a trademark search for free. Our free trademark search tool will complete a basic search; no card required. You can also search your trademark through the Trademark Search System, the USPTO's trademark database.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">How long does it take to receive trademark search results?</div>
                    <div class="faq-answer">
                        <p>Most free basic search tools will return instant results, which can be sufficient for a preliminary search. If you want a comprehensive trademark search, be prepared to wait a few days for your results.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">How can I verify the ability to trademark a name?</div>
                    <div class="faq-answer">
                        <p>You can verify your desired trademark name by performing a trademark search. A basic trademark search will give you insights into direct name matches at the federal level. On the other hand, a comprehensive trademark search will also scan for existing marks that are even slightly similar and could cause confusion.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">How much does it cost to register my trademark?</div>
                    <div class="faq-answer">
                        <p>The cost of registering a trademark primarily depends on how many classes of goods and services you want to trademark and which filing option you use. Trademark registration is per class, so the more trademark classes you register, the more you'll pay.</p>
                        <p>For filing options, if you utilize the entries of the Trademark ID Manual for the description of your goods/services, you'll pay a filing fee of $350 per class. If you don't use the Trademark ID manual for the description of your goods/services, the filing fee will be $550 per class.</p>
                        <p>Keep in mind that there also might be some additional fees if you submit an "Intent to Use" trademark application, ranging from $125 to $150 per class.</p>
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
            <div class="cta-buttons">
                <a href="#" class="btn btn-primary">Register My Own Trademark</a>
                <a href="#" class="btn btn-secondary">Run a Comprehensive Search</a>
            </div>
        </div>
    </section>
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
        
        // Search Form Functionality
        const searchForm = document.getElementById('free-trademark-search-form');
        if (searchForm) {
            searchForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const searchValue = document.getElementById('trademark-search-input').value.trim();
                
                if (searchValue) {
                    // In a real implementation, this would send the search to the server
                    // For now, we'll just alert the search term
                    alert('Searching for: ' + searchValue);
                    
                    // You would typically redirect to a results page or show results dynamically
                    // window.location.href = '/trademark-search-results?q=' + encodeURIComponent(searchValue);
                }
            });
        }
    });
</script>

<?php
get_footer(); ?> 