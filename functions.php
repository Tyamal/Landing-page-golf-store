function enqueue_custom_scripts() {
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');