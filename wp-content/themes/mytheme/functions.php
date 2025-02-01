<?php
   
function university_theme_styles_scripts() {
	wp_enqueue_style( 'output', get_template_directory_uri() . '/dist/output.css', array() );
}
add_action( 'wp_enqueue_scripts', 'university_theme_styles_scripts' );



function create_university_programs() {
    register_post_type('program',
        array(
            'labels'      => array(
                'name'          => 'Programs',
                'singular_name' => 'Program',
            ),
            'public'      => true,
            'has_archive' => true,
            'supports'    => array('title', 'editor', 'thumbnail', 'excerpt'),
            'show_in_rest' => true, // Enables REST API support
        )
    );
}
add_action('init', 'create_university_programs');


function register_courses_post_type() {
    register_post_type('course', array(
        'public' => true,
        'labels' => array(
            'name' => 'Courses',
            'singular_name' => 'Course'
        ),
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    ));
}
add_action('init', 'register_courses_post_type');

function register_professors_post_type() {
    register_post_type('professor', array(
        'public' => true,
        'labels' => array(
            'name' => 'Professors',
            'singular_name' => 'Professor'
        ),
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    ));
}
add_action('init', 'register_professors_post_type');

function register_news_post_type() {
    register_post_type('news', array(
        'public' => true,
        'labels' => array(
            'name' => 'News',
            'singular_name' => 'news'
        ),
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    ));
}
add_action('init', 'register_news_post_type');

function register_events_post_type() {
    register_post_type('course', array(
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    ));
}
add_action('init', 'register_events_post_type');
?>