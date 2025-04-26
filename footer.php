</div><!-- Close min-h-screen div from header.php -->


<?php wp_footer(); ?>
</main>

<footer class="bg-blue-900 text-white">
    <div class="container mx-auto px-4 py-16">
        <!-- First Row - Links Section -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Any Questions Column -->
            <div class="col-span-1">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block mb-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/trademark-logo-white.svg" alt="Trademark Engine" class="h-8">
                </a>
                <div class="mt-6">
                    <h3 class="text-lg font-semibold mb-4">Any Questions?</h3>
                    <p class="text-white/80 text-sm mb-4">Use the Live Chat for any immediate assistance.</p>
                    <div class="space-y-2">
                        <h4 class="font-medium">Call Us</h4>
                        <a href="tel:8777214579" class="text-white text-xl font-medium block">(877) 721-4579</a>
                        <p class="text-white/80 text-sm">Mon-Fri 9AM-6PM CST</p>
                    </div>
                </div>
            </div>

            <!-- Quick Links Column -->
            <div class="col-span-1">
                <h3 class="text-lg font-semibold mb-6">Quick Links</h3>
                <ul class="space-y-4">
                    <li><a href="#" class="text-white/80 hover:text-white transition-colors">Trademark Registration</a></li>
                    <li><a href="#" class="text-white/80 hover:text-white transition-colors">Comprehensive Search</a></li>
                    <li><a href="#" class="text-white/80 hover:text-white transition-colors">Trademark Monitoring</a></li>
                    <li><a href="#" class="text-white/80 hover:text-white transition-colors">Free Trademark Search</a></li>
                    <li><a href="#" class="text-white/80 hover:text-white transition-colors">Copyright Registration</a></li>
                    <li><a href="#" class="text-white/80 hover:text-white transition-colors">Office Action Response</a></li>
                </ul>
            </div>

            <!-- Company Column -->
            <div class="col-span-1">
                <h3 class="text-lg font-semibold mb-6">Company</h3>
                <ul class="space-y-4">
                    <li><a href="#" class="text-white/80 hover:text-white transition-colors">About Us</a></li>
                    <li><a href="#" class="text-white/80 hover:text-white transition-colors">Careers</a></li>
                    <li><a href="#" class="text-white/80 hover:text-white transition-colors">Our Guarantee</a></li>
                    <li><a href="#" class="text-white/80 hover:text-white transition-colors">Privacy Settings</a></li>
                </ul>
            </div>

            <!-- Connect With Us Column -->
            <div class="col-span-1">
                <h3 class="text-lg font-semibold mb-6">Connect With Us</h3>
                <ul class="space-y-4 mb-8">
                    <li><a href="#" class="text-white/80 hover:text-white transition-colors">Contact Us</a></li>
                    <li><a href="<?php echo esc_url(home_url('/blog/')); ?>" class="text-white/80 hover:text-white transition-colors">Blog</a></li>
                </ul>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white/80 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-white/80 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-white/80 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Row - Privacy Policy Section -->
        <div class="border-t border-white/10 pt-8 mt-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="text-white/80 text-sm max-w-3xl">
                    <p>Trademark Engine provides information and software only. Trademark Engine is not a "lawyer referral service" and does not provide legal advice or participate in any legal representation. Use of Trademark Engine is subject to our <a href="#" class="text-white hover:underline">Terms of Service</a> and <a href="#" class="text-white hover:underline">Privacy Policy</a>.</p>
                </div>
                <div class="flex items-center space-x-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/visa.svg" alt="Visa" class="h-8">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mastercard.svg" alt="Mastercard" class="h-8">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/amex.svg" alt="American Express" class="h-8">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/discover.svg" alt="Discover" class="h-8">
                </div>
            </div>
            <div class="text-center mt-6 text-white/80 text-sm">
                © Copyright <?php echo date('Y'); ?> Trademark Engine, LLC
            </div>
        </div>
    </div>
</footer>

</body>

</html>