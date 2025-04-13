</div><!-- Close min-h-screen div from header.php -->

<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-center mb-12">Explore Our Resources</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow">
                <img src="<?php echo get_template_directory_uri(); ?>/images/resource-1.svg" alt="Resource" class="w-16 h-16 mb-4">
                <h3 class="font-bold mb-2">Trademark Search Tips</h3>
                <p class="text-gray-600">Learn how to effectively search for trademarks</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <img src="<?php echo get_template_directory_uri(); ?>/images/resource-2.svg" alt="Resource" class="w-16 h-16 mb-4">
                <h3 class="font-bold mb-2">Filing Guide</h3>
                <p class="text-gray-600">Step-by-step guide to filing your trademark</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <img src="<?php echo get_template_directory_uri(); ?>/images/resource-3.svg" alt="Resource" class="w-16 h-16 mb-4">
                <h3 class="font-bold mb-2">FAQ</h3>
                <p class="text-gray-600">Common questions about trademarks</p>
            </div>
        </div>
    </div>
</section>

<?php wp_footer(); ?>
</main>

<footer class="bg-navy-900 text-white pt-16 pb-8">
    <div class="container mx-auto">
        <!-- Footer Top Section -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12 px-4">
            <!-- Company Info -->
            <div class="space-y-4">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/trademark-logo-white.svg" alt="Trademark Engine" class="h-8">
                </a>
                <p class="text-gray-400 text-sm">
                    Fast and affordable trademark registration services
                </p>
                <div class="flex items-center space-x-4">
                    <a href="tel:855-873-6275" class="flex items-center text-gray-400 hover:text-white">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        855-873-6275
                    </a>
                </div>
            </div>

            <!-- Trademark Services -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Trademark Services</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-400 hover:text-white text-sm">Trademark Search</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white text-sm">Trademark Registration</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white text-sm">Trademark Monitoring</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white text-sm">Office Action Response</a></li>
                </ul>
            </div>

            <!-- Resources -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Resources</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-400 hover:text-white text-sm">Learning Center</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white text-sm">FAQ</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white text-sm">Blog</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white text-sm">Contact Us</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Contact</h3>
                <ul class="space-y-3">
                    <li class="text-gray-400 text-sm">
                        1801 N. Lamar Street<br>
                        Suite 200<br>
                        Dallas, TX 75202
                    </li>
                    <li>
                        <a href="mailto:support@trademarkengine.com" class="text-gray-400 hover:text-white text-sm">
                            support@trademarkengine.com
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom Section -->
        <div class="border-t border-gray-800 pt-8 px-4">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <!-- Copyright -->
                <div class="text-gray-400 text-sm">
                    © <?php echo date('Y'); ?> Trademark Engine. All rights reserved.
                </div>

                <!-- Legal Links -->
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Disclaimer</a>
                </div>

                <!-- Payment Methods -->
                <div class="flex items-center space-x-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/visa.svg" alt="Visa" class="h-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mastercard.svg" alt="Mastercard" class="h-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/amex.svg" alt="American Express" class="h-6">
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html> 