<?php
    // function load_css(){
    //     wp_register_style('my-plugin', plugins_url('/css/style.css'));
    //     wp_enque_style('my-plugin');
    // }

    /**
 * Enqueue scripts and styles.
 */
function university_theme_scripts() {
	wp_enqueue_style( 'output', get_template_directory_uri() . '/dist/output.css', array() );
}
add_action( 'wp_enqueue_scripts', 'university_theme_scripts' );
?>