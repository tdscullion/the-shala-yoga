<?php

if (!defined('ABSPATH')) {
    exit;
}

function theshala_highlight_text($text) {
    if (!$text) {
        return '';
    }

    $text = esc_html($text);

    return preg_replace(
        '/\{\{(.*?)\}\}/',
        '<span class="highlight-text">$1</span>',
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
            'slug' => 'faculty',
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

    wp_enqueue_style(
        'theshala-course',
        get_template_directory_uri() . '/assets/css/course.css',
        ['theshala-main'],
        filemtime(get_template_directory() . '/assets/css/course.css')
    );

    wp_enqueue_script(
        'theshala-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        wp_get_theme()->get('Version'),
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
        wp_enqueue_script(
            'theshala-course',
            get_template_directory_uri() . '/assets/js/course.js',
            [],
            filemtime(get_template_directory() . '/assets/js/course.js'),
            true
        );
    }
}

add_action('wp_enqueue_scripts', 'theshala_enqueue_assets');