<?php
function example_college_files(){
    wp_enqueue_style('example_college_styles',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','example_college_files')
?>