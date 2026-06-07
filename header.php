<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main-content">Skip to content</a>

<div id="announcementBar">
    <p>
        Classes &amp; workshops now run by <strong>Vahni</strong> in the same space.
        <a href="https://www.vahni.com" target="_blank" rel="noopener">Visit Vahni →</a>
    </p>
    <button class="ann-dismiss" aria-label="Close announcement">✕</button>
</div>

<nav id="mainNav">
    <div class="nav-inner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo-link" aria-label="The Shala School of Yoga">
            <img
                class="nav-logo-img"
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/logos/logo-nav.svg'); ?>"
                alt="The Shala School of Yoga"
            />
        </a>

        <div class="nav-links">
            <div class="nav-has-dropdown">
                <a href="<?php echo esc_url(home_url('/about/')); ?>" aria-haspopup="true">About</a>

                <div class="nav-dropdown" role="menu" aria-label="About menu">
                    <div class="nav-dropdown-grid">
                        <div class="nav-dropdown-col">
                            <a href="<?php echo esc_url(home_url('/about/')); ?>" role="menuitem">Our Story</a>
                            <a href="<?php echo esc_url(home_url('/faculty/')); ?>" role="menuitem">Our Faculty</a>
                            <a href="<?php echo esc_url(home_url('/our-space/')); ?>" role="menuitem">Our Space</a>
                            <a href="<?php echo esc_url(home_url('/gallery/')); ?>" role="menuitem">Gallery</a>
                            <a href="<?php echo esc_url(home_url('/testimonials/')); ?>" role="menuitem">Testimonials</a>
                        </div>

                        <div class="nav-dropdown-divider" aria-hidden="true"></div>

                        <div class="nav-dropdown-col">
                            <a href="<?php echo esc_url(home_url('/yoga-teacher-training-calendar/')); ?>" role="menuitem">Course Dates</a>
                            <a href="<?php echo esc_url(home_url('/new-student-advice/')); ?>" role="menuitem">New Students</a>
                            <a href="<?php echo esc_url(home_url('/bursaries/')); ?>" role="menuitem">Bursaries</a>
                            <a href="<?php echo esc_url(home_url('/faq/')); ?>" role="menuitem">FAQ</a>
                            <a href="<?php echo esc_url(home_url('/terms-and-conditions/')); ?>" role="menuitem">T&amp;Cs</a>
                            <a href="<?php echo esc_url(home_url('/contact/')); ?>" role="menuitem">Contact</a>
                        </div>
                    </div>
                </div>
            </div>

            <a href="<?php echo esc_url(home_url('/200-hour/')); ?>">200 Hour</a>
            <a href="<?php echo esc_url(home_url('/300-hour/')); ?>">300 Hour</a>
            <a href="<?php echo esc_url(home_url('/cpds/')); ?>">CPDs</a>
            <a href="<?php echo esc_url(home_url('/retreats/')); ?>">Retreats</a>
            <a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
            <a href="https://www.theshalalondon.com/studentlogin" class="nav-login">Log In</a>
            <a href="mailto:teachertraining@theshala.co.uk" class="nav-msg">Message Us</a>
        </div>

        <button
            class="nav-burger"
            id="navBurger"
            aria-label="Open menu"
            aria-expanded="false"
        >
            <span></span>
        </button>
    </div>
</nav>

<div class="nav-pink-rule" aria-hidden="true"></div>

<div class="nav-overlay" id="navOverlay"></div>

<aside class="nav-mobile-panel" id="navMobilePanel" aria-hidden="true">
    <div class="nav-mobile-accordion" id="navMobileAbout">
        <div class="nav-mobile-accordion-head">
            <a href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
            <button
                class="nav-mobile-accordion-toggle"
                aria-label="Expand About menu"
                aria-expanded="false"
            ></button>
        </div>

        <div class="nav-mobile-accordion-body">
            <a href="<?php echo esc_url(home_url('/about/')); ?>">Our Story</a>
            <a href="<?php echo esc_url(home_url('/faculty/')); ?>">Our Faculty</a>
            <a href="<?php echo esc_url(home_url('/our-space/')); ?>">Our Space</a>
            <a href="<?php echo esc_url(home_url('/gallery/')); ?>">Gallery</a>
            <a href="<?php echo esc_url(home_url('/testimonials/')); ?>">Testimonials</a>
            <a href="<?php echo esc_url(home_url('/yoga-teacher-training-calendar/')); ?>">Course Dates</a>
            <a href="<?php echo esc_url(home_url('/new-student-advice/')); ?>">New Students</a>
            <a href="<?php echo esc_url(home_url('/bursaries/')); ?>">Bursaries</a>
            <a href="<?php echo esc_url(home_url('/faq/')); ?>">FAQ</a>
            <a href="<?php echo esc_url(home_url('/terms-and-conditions/')); ?>">T&amp;Cs</a>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a>
        </div>
    </div>

    <a href="<?php echo esc_url(home_url('/200-hour/')); ?>">200 Hour</a>
    <a href="<?php echo esc_url(home_url('/300-hour/')); ?>">300 Hour</a>
    <a href="<?php echo esc_url(home_url('/cpds/')); ?>">CPDs</a>
    <a href="<?php echo esc_url(home_url('/retreats/')); ?>">Retreats</a>
    <a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
    <a href="https://www.theshalalondon.com/studentlogin" class="nav-mobile-login">Log In</a>
    <a href="mailto:teachertraining@theshala.co.uk" class="nav-mobile-msg">✉ Message Us</a>
</aside>