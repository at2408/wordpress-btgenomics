<?php 
function demo_include_bootstrap()
{
    wp_register_style('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');

    wp_register_style('font','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
    wp_enqueue_style('font');

    wp_register_style('styles', get_template_directory_uri() . '/common/global.css', array(), 1, 'all');
    wp_enqueue_style('styles');

    

}
add_action('wp_enqueue_scripts','demo_include_bootstrap');


function add_js()
{    
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js');
    wp_enqueue_script('jquery');

    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
    wp_enqueue_script('popper');

    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
    wp_enqueue_script('bootstrap');

    wp_register_script('scripts', get_template_directory_uri() . '/common/scripts.js', array(), 1, 1, 1);
    wp_enqueue_script('scripts');

}
add_action('wp_enqueue_scripts','add_js');
?>


