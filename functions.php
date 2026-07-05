<?php

if (!defined('ABSPATH')) {
    exit;
}
// For highlighted text and line breaks
function theshala_highlight_text($text) {
    if (!$text) {
        return '';
    }

    // Escape everything first for safety.
    $text = esc_html($text);

    // Convert line breaks from the ACF textarea/text field into <br>.
    $text = nl2br($text);

    // Convert {{ highlighted words }} into <em>highlighted words</em>.
    return preg_replace(
        '/\{\{\s*(.*?)\s*\}\}/',
        '<em>$1</em>',
        $text
    );
}

function theshala_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'primary' => __('Primary Menu', 'theshala'),
        'footer'  => __('Footer Menu', 'theshala'),
    ]);
}
add_action('after_setup_theme', 'theshala_theme_setup');

function theshala_register_post_types() {
    register_post_type('course', [
        'labels' => [
            'name' => __('Courses', 'theshala'),
            'singular_name' => __('Course', 'theshala'),
            'add_new_item' => __('Add New Course', 'theshala'),
            'edit_item' => __('Edit Course', 'theshala'),
        ],
        'public' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'has_archive' => true,
        'rewrite' => [
            'slug' => 'courses',
        ],
        'supports' => [
            'title',
            'editor',
            'thumbnail',
            'excerpt',
        ],
        'show_in_rest' => true,
    ]);

    register_post_type('faculty', [
        'labels' => [
            'name' => __('Faculty', 'theshala'),
            'singular_name' => __('Faculty Member', 'theshala'),
            'add_new_item' => __('Add New Faculty Member', 'theshala'),
            'edit_item' => __('Edit Faculty Member', 'theshala'),
        ],
       'public' => true,
        'menu_icon' => 'dashicons-groups',
        'has_archive' => true,
        'rewrite' => [
            'slug' => 'yoga-teacher',
        ],
        'supports' => [
            'title',
            'editor',
            'thumbnail',
            'excerpt',
        ],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'theshala_register_post_types');

function theshala_faculty_archive_posts($query) {
    if (
        !is_admin() &&
        $query->is_main_query() &&
        is_post_type_archive('faculty')
    ) {
        $query->set('posts_per_page', -1);
    }
}
add_action('pre_get_posts', 'theshala_faculty_archive_posts');

function theshala_enqueue_assets() {
    wp_enqueue_style(
        'theshala-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'theshala-main',
        get_template_directory_uri() . '/assets/css/globals.css',
        [],
        filemtime(get_template_directory() . '/assets/css/globals.css')
    );

    wp_enqueue_style(
        'theshala-nav',
        get_template_directory_uri() . '/assets/css/nav.css',
        ['theshala-main'],
        filemtime(get_template_directory() . '/assets/css/nav.css')
    );

    wp_enqueue_style(
        'theshala-footer',
        get_template_directory_uri() . '/assets/css/footer.css',
        ['theshala-main'],
        filemtime(get_template_directory() . '/assets/css/footer.css')
    );

    wp_enqueue_style(
        'theshala-heroes',
        get_template_directory_uri() . '/assets/css/heroes.css',
        ['theshala-main'],
        filemtime(get_template_directory() . '/assets/css/heroes.css')
    );

    wp_enqueue_script(
        'theshala-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        wp_get_theme()->get('Version'),
        true
    );
    wp_enqueue_script(
        'theshala-nav',
        get_template_directory_uri() . '/assets/js/nav.js',
        [],
        filemtime(get_template_directory() . '/assets/js/nav.js'),
        true
    );

    if (is_singular('faculty')) {

        wp_enqueue_style(
            'theshala-teacher',
            get_template_directory_uri() . '/assets/css/teacher.css',
            ['theshala-main', 'theshala-heroes'],
            filemtime(get_template_directory() . '/assets/css/teacher.css')
        );

        wp_enqueue_script(
            'theshala-teacher',
            get_template_directory_uri() . '/assets/js/teacher.js',
            [],
            filemtime(get_template_directory() . '/assets/js/teacher.js'),
            true
        );

    }
    if (is_singular('course')) {
        wp_enqueue_style(
            'theshala-course',
            get_template_directory_uri() . '/assets/css/course.css',
            ['theshala-main', 'theshala-nav', 'theshala-footer', 'theshala-heroes'],
            filemtime(get_template_directory() . '/assets/css/course.css')
        );

        wp_enqueue_script(
            'theshala-course',
            get_template_directory_uri() . '/assets/js/course.js',
            [],
            filemtime(get_template_directory() . '/assets/js/course.js'),
            true
        );
    }

    if (is_front_page()) {
        wp_enqueue_style(
            'theshala-home',
            get_template_directory_uri() . '/assets/css/home.css',
            ['theshala-main', 'theshala-nav', 'theshala-footer', 'theshala-heroes'],
            filemtime(get_template_directory() . '/assets/css/home.css')
        );

        wp_enqueue_script(
            'theshala-home',
            get_template_directory_uri() . '/assets/js/home.js',
            [],
            filemtime(get_template_directory() . '/assets/js/home.js'),
            true
        );
    }

    if (is_page_template('page-about.php')) {
        wp_enqueue_style(
            'theshala-about',
            get_template_directory_uri() . '/assets/css/about.css',
            ['theshala-main', 'theshala-nav', 'theshala-footer', 'theshala-heroes'],
            filemtime(get_template_directory() . '/assets/css/about.css')
        );

        wp_enqueue_script(
            'theshala-about',
            get_template_directory_uri() . '/assets/js/about.js',
            [],
            filemtime(get_template_directory() . '/assets/js/about.js'),
            true
        );
    }

    if (is_page('faculty')) {
        wp_enqueue_style(
            'theshala-faculty-archive',
            get_template_directory_uri() . '/assets/css/faculty.css',
            ['theshala-main', 'theshala-nav', 'theshala-footer', 'theshala-heroes'],
            filemtime(get_template_directory() . '/assets/css/faculty.css')
        );

        wp_enqueue_script(
            'theshala-faculty-archive',
            get_template_directory_uri() . '/assets/js/faculty.js',
            [],
            filemtime(get_template_directory() . '/assets/js/faculty.js'),
            true
        );
    }

    if (is_page_template('page-cpds.php')) {
        wp_enqueue_style(
            'theshala-cpds',
            get_template_directory_uri() . '/assets/css/cpds.css',
            ['theshala-main', 'theshala-nav', 'theshala-footer', 'theshala-heroes'],
            filemtime(get_template_directory() . '/assets/css/cpds.css')
        );

        wp_enqueue_script(
            'theshala-cpds',
            get_template_directory_uri() . '/assets/js/cpds.js',
            [],
            filemtime(get_template_directory() . '/assets/js/cpds.js'),
            true
        );
    }

    if (is_page_template('page-200-hour.php')) {
        wp_enqueue_style(
            'theshala-200-hour',
            get_template_directory_uri() . '/assets/css/200-hour.css',
            ['theshala-main', 'theshala-nav', 'theshala-footer', 'theshala-heroes'],
            filemtime(get_template_directory() . '/assets/css/200-hour.css')
        );

        wp_enqueue_script(
            'theshala-200-hour',
            get_template_directory_uri() . '/assets/js/200-hour.js',
            [],
            filemtime(get_template_directory() . '/assets/js/200-hour.js'),
            true
        );
    }

    if (is_page_template('page-300-hour.php')) {
        wp_enqueue_style(
            'theshala-300-hour',
            get_template_directory_uri() . '/assets/css/300-hour.css',
            ['theshala-main', 'theshala-nav', 'theshala-footer', 'theshala-heroes'],
            filemtime(get_template_directory() . '/assets/css/300-hour.css')
        );

        wp_enqueue_script(
            'theshala-300-hour',
            get_template_directory_uri() . '/assets/js/300-hour.js',
            [],
            filemtime(get_template_directory() . '/assets/js/300-hour.js'),
            true
        );
    }
    
    if (is_page_template('page-our-space.php')) {
        wp_enqueue_style(
            'theshala-our-space',
            get_template_directory_uri() . '/assets/css/our-space.css',
            ['theshala-main', 'theshala-nav', 'theshala-footer', 'theshala-heroes'],
            filemtime(get_template_directory() . '/assets/css/our-space.css')
        );

        wp_enqueue_script(
            'theshala-our-space',
            get_template_directory_uri() . '/assets/js/our-space.js',
            [],
            filemtime(get_template_directory() . '/assets/js/our-space.js'),
            true
        );
    }

    if (is_page_template('page-retreats.php')) {
        wp_enqueue_style(
            'theshala-retreats',
            get_template_directory_uri() . '/assets/css/retreats.css',
            ['theshala-main', 'theshala-nav', 'theshala-footer', 'theshala-heroes'],
            filemtime(get_template_directory() . '/assets/css/retreats.css')
        );

        wp_enqueue_script(
            'theshala-retreats',
            get_template_directory_uri() . '/assets/js/retreats.js',
            [],
            filemtime(get_template_directory() . '/assets/js/retreats.js'),
            true
        );
    }
    if (is_page_template('page-gallery.php')) {
        wp_enqueue_style(
            'theshala-gallery',
            get_template_directory_uri() . '/assets/css/gallery.css',
            ['theshala-main', 'theshala-nav', 'theshala-footer', 'theshala-heroes'],
            filemtime(get_template_directory() . '/assets/css/gallery.css')
        );

        wp_enqueue_script(
            'theshala-gallery',
            get_template_directory_uri() . '/assets/js/gallery.js',
            [],
            filemtime(get_template_directory() . '/assets/js/gallery.js'),
            true
        );
    }
    if (is_page_template('page-testimonials.php')) {
        wp_enqueue_style(
            'theshala-testimonials',
            get_template_directory_uri() . '/assets/css/testimonials.css',
            ['theshala-main', 'theshala-nav', 'theshala-footer', 'theshala-heroes'],
            filemtime(get_template_directory() . '/assets/css/testimonials.css')
        );

        wp_enqueue_script(
            'theshala-testimonials',
            get_template_directory_uri() . '/assets/js/testimonials.js',
            [],
            filemtime(get_template_directory() . '/assets/js/testimonials.js'),
            true
        );
    }
    if (is_page_template('page-yoga-teacher-training-calendar.php')) {
        wp_enqueue_style(
            'theshala-course-calendar',
            get_template_directory_uri() . '/assets/css/yoga-teacher-training-calendar.css',
            ['theshala-main', 'theshala-nav', 'theshala-footer', 'theshala-heroes'],
            filemtime(get_template_directory() . '/assets/css/yoga-teacher-training-calendar.css')
        );

        wp_enqueue_script(
            'theshala-course-calendar',
            get_template_directory_uri() . '/assets/js/yoga-teacher-training-calendar.js',
            [],
            filemtime(get_template_directory() . '/assets/js/yoga-teacher-training-calendar.js'),
            true
        );
    }
    if (is_page_template('page-new-student-advice.php')) {
        wp_enqueue_style(
            'theshala-new-student-advice',
            get_template_directory_uri() . '/assets/css/new-student-advice.css',
            ['theshala-main', 'theshala-nav', 'theshala-footer', 'theshala-heroes'],
            filemtime(get_template_directory() . '/assets/css/new-student-advice.css')
        );

        wp_enqueue_script(
            'theshala-new-student-advice',
            get_template_directory_uri() . '/assets/js/new-student-advice.js',
            [],
            filemtime(get_template_directory() . '/assets/js/new-student-advice.js'),
            true
        );
    }
    if (is_page_template('page-bursaries.php')) {
        wp_enqueue_style(
            'theshala-bursaries',
            get_template_directory_uri() . '/assets/css/bursaries.css',
            ['theshala-main', 'theshala-nav', 'theshala-footer', 'theshala-heroes'],
            filemtime(get_template_directory() . '/assets/css/bursaries.css')
        );

        wp_enqueue_script(
            'theshala-bursaries',
            get_template_directory_uri() . '/assets/js/bursaries.js',
            [],
            filemtime(get_template_directory() . '/assets/js/bursaries.js'),
            true
        );
    }
    if (is_page_template('page-faq.php')) {

        wp_enqueue_style(
            'theshala-faq',
            get_template_directory_uri() . '/assets/css/faq.css',
            ['theshala-main', 'theshala-nav', 'theshala-footer', 'theshala-heroes'],
            filemtime(get_template_directory() . '/assets/css/faq.css')
        );

        wp_enqueue_script(
            'theshala-faq',
            get_template_directory_uri() . '/assets/js/faq.js',
            [],
            filemtime(get_template_directory() . '/assets/js/faq.js'),
            true
        );
    }
    if (is_page_template('page-terms-and-conditions.php')) {
        wp_enqueue_style(
            'theshala-terms-and-conditions',
            get_template_directory_uri() . '/assets/css/terms-and-conditions.css',
            ['theshala-main', 'theshala-nav', 'theshala-footer', 'theshala-heroes'],
            filemtime(get_template_directory() . '/assets/css/terms-and-conditions.css')
        );

        wp_enqueue_script(
            'theshala-terms-and-conditions',
            get_template_directory_uri() . '/assets/js/terms-and-conditions.js',
            [],
            filemtime(get_template_directory() . '/assets/js/terms-and-conditions.js'),
            true
        );
    }

    if (is_page_template('page-contact.php')) {
        wp_enqueue_style(
            'theshala-contact',
            get_template_directory_uri() . '/assets/css/contact.css',
            ['theshala-main', 'theshala-nav', 'theshala-footer', 'theshala-heroes'],
            filemtime(get_template_directory() . '/assets/css/contact.css')
        );

        wp_enqueue_script(
            'theshala-contact',
            get_template_directory_uri() . '/assets/js/contact.js',
            [],
            filemtime(get_template_directory() . '/assets/js/contact.js'),
            true
        );
    }

    if (is_page_template('page-seo.php')) {
        wp_enqueue_style(
            'theshala-seo',
            get_template_directory_uri() . '/assets/css/seo-page.css',
            ['theshala-main', 'theshala-nav', 'theshala-footer'],
            filemtime(get_template_directory() . '/assets/css/seo-page.css')
        );
    }

    if (is_404()) {
        wp_enqueue_style(
            'theshala-404',
            get_template_directory_uri() . '/assets/css/404.css',
            ['theshala-main', 'theshala-nav', 'theshala-footer'],
            filemtime(get_template_directory() . '/assets/css/404.css')
        );
    }

    if (is_page_template('page-signup.php')) {
        wp_enqueue_style(
            'theshala-signup',
            get_template_directory_uri() . '/assets/css/signup.css',
            ['theshala-main', 'theshala-nav', 'theshala-footer', 'theshala-heroes'],
            filemtime(get_template_directory() . '/assets/css/signup.css')
        );
    }

   if (is_singular('course') && get_post_field('post_name', get_queried_object_id()) === 'yoga-philosophy-club') {
        wp_enqueue_style(
            'shala-course-philosophy',
            get_template_directory_uri() . '/assets/css/course-philosophy.css',
            array(),
            filemtime(get_template_directory() . '/assets/css/course-philosophy.css')
        );
    }

    if (is_home()) {
        wp_enqueue_style(
            'theshala-blog',
            get_template_directory_uri() . '/assets/css/blog.css',
            ['theshala-main', 'theshala-nav', 'theshala-footer', 'theshala-heroes'],
            filemtime(get_template_directory() . '/assets/css/blog.css')
        );

        wp_enqueue_script(
            'theshala-blog-index',
            get_template_directory_uri() . '/assets/js/blog-index.js',
            [],
            filemtime(get_template_directory() . '/assets/js/blog-index.js'),
            true
        );
    }

    if (is_single()) {
        wp_enqueue_style(
            'theshala-single-blog',
            get_template_directory_uri() . '/assets/css/single-blog.css',
            ['theshala-main', 'theshala-nav', 'theshala-footer', 'theshala-heroes'],
            filemtime(get_template_directory() . '/assets/css/single-blog.css')
        );

        wp_enqueue_script(
            'theshala-single-blog',
            get_template_directory_uri() . '/assets/js/single-blog.js',
            [],
            filemtime(get_template_directory() . '/assets/js/single-blog.js'),
            true
        );
    }
}

add_action('wp_enqueue_scripts', 'theshala_enqueue_assets');