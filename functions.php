<?php
if (!defined('ABSPATH')) exit;

function trademark_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('menus');
    
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'trademark-theme'),
        'footer-menu' => __('Footer Menu', 'trademark-theme'),
    ));
}
add_action('after_setup_theme', 'trademark_theme_setup');

function trademark_theme_styles() {
    // Enqueue Tailwind CSS
    wp_enqueue_style('trademark-tailwind', get_template_directory_uri() . '/dist/output.css', array(), '1.0.0');
    
    // Enqueue main stylesheet
    wp_enqueue_style('trademark-main', get_template_directory_uri() . '/style.css', array('trademark-tailwind'), '1.0.0');
    
    // Add custom CSS inline
    $custom_css = "
        :root {
            --navy-900: #1a365d;
            --navy-800: #2c5282;
            --orange-500: #ff5722;
            --orange-600: #f4511e;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-600: #4b5563;
            --gray-900: #111827;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: var(--gray-900);
        }
        
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        
        .hero-section {
            color: white;
            padding: 8rem 0;
        }
        
        .btn-primary {
            background-color: var(--orange-500);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 600;
            transition: all 0.2s;
        }
        
        .btn-primary:hover {
            background-color: var(--orange-600);
            transform: translateY(-1px);
        }
        
        .feature-card {
            background: white;
            border-radius: 0.5rem;
            padding: 2rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: all 0.2s;
        }
        
        .feature-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
    ";
    wp_add_inline_style('trademark-main', $custom_css);
}
add_action('wp_enqueue_scripts', 'trademark_theme_styles');

// Generate Tailwind CSS
function trademark_generate_tailwind() {
    $input = get_template_directory() . '/css/tailwind.css';
    $output = get_template_directory() . '/dist/output.css';
    
    if (!file_exists($input)) {
        file_put_contents($input, '@tailwind base;
@tailwind components;
@tailwind utilities;');
    }
    
    if (!is_dir(dirname($output))) {
        mkdir(dirname($output), 0755, true);
    }
}

/**
 * Register Custom Page Templates
 */
function trademark_register_page_templates() {
    // Add the Comprehensive Trademark Search template
    add_filter('theme_page_templates', function($templates) {
        $templates['comprehensive-search.php'] = 'Comprehensive Trademark Search';
        $templates['free-search.php'] = 'Free Trademark Search';
        $templates['copyright-registration.php'] = 'Copyright Registration';
        $templates['statement-of-use.php'] = 'Statement of Use';
        return $templates;
    });
}
add_action('after_setup_theme', 'trademark_register_page_templates'); 
