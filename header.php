<<<<<<< HEAD
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</head>
<body <?php body_class('bg-white antialiased'); ?>>
<?php wp_body_open(); ?>

<header class="header">
    <div class="nav-container">
        <div style="gap: 20px; display: flex; align-items: center; flex: 1;">
            <div>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                    <h2 class="logo-text">Recruiter Go</h2>
                </a>
            </div>
            <nav class="main-nav" style="flex: 1; justify-content: space-between;">
                <ul class="nav-links" style="margin-left: 30px;">
                    <li class="nav-item has-dropdown">
                        <a href="#" class="nav-link">Our Services <svg class="dropdown-arrow" width="10" height="6" viewBox="0 0 10 6" fill="none"><path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                        <div class="dropdown-menu services-dropdown">
                            <div class="dropdown-content">
                                <div class="dropdown-header">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M17 5H3C2.44772 5 2 5.44772 2 6V14C2 14.5523 2.44772 15 3 15H17C17.5523 15 18 14.5523 18 14V6C18 5.44772 17.5523 5 17 5Z" stroke="#FF5722" stroke-width="1.5"/>
                                    </svg>
                                    <span>Our Services</span>
                                </div>
                                <div class="dropdown-grid">
                                    <a href="#" class="dropdown-item">
                                        <div class="item-title">Recruiter Go Registration</div>
                                        <div class="item-description">Register your recruiter go with the USPTO</div>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <div class="item-title">Recruiter Go Monitoring</div>
                                        <div class="item-description">Monitor and protect your recruiter go</div>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <div class="item-title">Recruiter Go Renewal</div>
                                        <div class="item-description">Renew your existing recruiter go</div>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <div class="item-title">Office Action Response</div>
                                        <div class="item-description">Respond to USPTO office actions</div>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <div class="item-title">Filing an Extension</div>
                                        <div class="item-description">Extend your recruiter go filing deadline</div>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <div class="item-title">DMCA Takedown Engine</div>
                                        <div class="item-description">Remove copyright infringement</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item has-dropdown">
                        <a href="#" class="nav-link">Resources <svg class="dropdown-arrow" width="10" height="6" viewBox="0 0 10 6" fill="none"><path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                        <div class="dropdown-menu resources-dropdown">
                            <div class="dropdown-content">
                                <div class="dropdown-sections">
                                    <div class="dropdown-section">
                                        <div class="dropdown-header">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M12 2H4C3.44772 2 3 2.44772 3 3V17C3 17.5523 3.44772 18 4 18H16C16.5523 18 17 17.5523 17 17V7L12 2Z" stroke="#FF5722" stroke-width="1.5"/>
                                            </svg>
                                            <span>Learn</span>
                                        </div>
                                        <a href="<?php echo esc_url(home_url('/blog.php')); ?>" class="dropdown-item">Blog</a>
                                    </div>
                                    <div class="dropdown-section">
                                        <div class="dropdown-header">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="#FF5722" stroke-width="1.5"/>
                                                <path d="M15 15L19 19" stroke="#FF5722" stroke-width="1.5" stroke-linecap="round"/>
                                            </svg>
                                            <span>FAQs</span>
                                        </div>
                                        <a href="#" class="dropdown-item">Recruiter Go FAQS</a>
                                        <a href="#" class="dropdown-item">Copyright FAQS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item" style="align-content: center;"><a href="#" class="nav-link">About us</a></li>
                </ul>
                <div class="nav-buttons">
                    <a href="#" class="nav-link">My Account</a>
                    <a href="#" class="btn-nav">Register my Recruiter Go</a>
                </div>
                <button class="mobile-menu-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
            </nav>
        </div>
    </div>
</header>

<main class="pt-16"><!-- Main content starts here -->
=======
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</head>
<body <?php body_class('bg-white antialiased'); ?>>
<?php wp_body_open(); ?>

<header class="header">
    <div class="nav-container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            <h2 class="logo-text">trademark engine</h2>
        </a>
        <nav class="main-nav">
            <ul class="nav-links">
                <li class="nav-item has-dropdown">
                    <a href="#" class="nav-link">Our Services <svg class="dropdown-arrow" width="10" height="6" viewBox="0 0 10 6" fill="none"><path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                    <div class="dropdown-menu services-dropdown">
                        <div class="dropdown-content">
                            <div class="dropdown-header">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M17 5H3C2.44772 5 2 5.44772 2 6V14C2 14.5523 2.44772 15 3 15H17C17.5523 15 18 14.5523 18 14V6C18 5.44772 17.5523 5 17 5Z" stroke="#FF5722" stroke-width="1.5"/>
                                </svg>
                                <span>Our Services</span>
                            </div>
                            <div class="dropdown-grid">
                                <a href="#" class="dropdown-item">
                                    <div class="item-title">Trademark Registration</div>
                                    <div class="item-description">Register your trademark with the USPTO</div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="item-title">Trademark Monitoring</div>
                                    <div class="item-description">Monitor and protect your trademark</div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="item-title">Trademark Renewal</div>
                                    <div class="item-description">Renew your existing trademark</div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="item-title">Office Action Response</div>
                                    <div class="item-description">Respond to USPTO office actions</div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="item-title">Filing an Extension</div>
                                    <div class="item-description">Extend your trademark filing deadline</div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="item-title">DMCA Takedown Engine</div>
                                    <div class="item-description">Remove copyright infringement</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item has-dropdown">
                    <a href="#" class="nav-link">Resources <svg class="dropdown-arrow" width="10" height="6" viewBox="0 0 10 6" fill="none"><path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                    <div class="dropdown-menu resources-dropdown">
                        <div class="dropdown-content">
                            <div class="dropdown-sections">
                                <div class="dropdown-section">
                                    <div class="dropdown-header">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M12 2H4C3.44772 2 3 2.44772 3 3V17C3 17.5523 3.44772 18 4 18H16C16.5523 18 17 17.5523 17 17V7L12 2Z" stroke="#FF5722" stroke-width="1.5"/>
                                        </svg>
                                        <span>Learn</span>
                                    </div>
                                    <a href="#" class="dropdown-item">Blog</a>
                                </div>
                                <div class="dropdown-section">
                                    <div class="dropdown-header">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="#FF5722" stroke-width="1.5"/>
                                            <path d="M15 15L19 19" stroke="#FF5722" stroke-width="1.5" stroke-linecap="round"/>
                                        </svg>
                                        <span>FAQs</span>
                                    </div>
                                    <a href="#" class="dropdown-item">Trademark FAQS</a>
                                    <a href="#" class="dropdown-item">Copyright FAQS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="#" class="nav-link">About us</a></li>
            </ul>
            <div class="nav-buttons">
                <a href="#" class="nav-link">My Account</a>
                <a href="#" class="btn-nav">Register my trademark</a>
            </div>
            <button class="mobile-menu-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
        </nav>
    </div>
</header>

<main class="pt-16"><!-- Main content starts here --> 
>>>>>>> 30443a6d13b92f51dac1800baea9a905d4eb27e4
