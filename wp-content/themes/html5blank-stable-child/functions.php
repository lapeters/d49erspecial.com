<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
?>
<?php
    // De-register HTML5 Blank styles
    function html5blank_styles_make_child_active()
    {
    wp_deregister_style('html5blank'); // Enqueue it!
    }
    add_action('wp_enqueue_scripts', 'html5blank_styles_make_child_active', 100); // Add Theme Child Stylesheet

    // Load HTML5 Blank Child styles
    function html5blank_styles_child()
    {
    wp_register_style('html5blank-child', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('html5blank-child'); // Enqueue it!
    }
    add_action('wp_enqueue_scripts', 'html5blank_styles_child'); // Add Theme Child Stylesheet
    ?>