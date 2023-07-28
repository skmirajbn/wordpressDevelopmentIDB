<?php
// My Theme Functoins


// Theme Title
add_theme_support('title-tag');

// Theme Css and jQuery File calling
function sk_css_js_file_calling() {
    wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.0.2', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('sk-style', get_stylesheet_uri());
    wp_enqueue_style('custom');

    //jQuery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '5.0.2', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);

}
add_action('wp_enqueue_scripts', 'sk_css_js_file_calling');

//Google Fonts Enqueue
function sk_add_google_fonts() {
    wp_enqueue_style('sk_google_font', 'https://fonts.googleapis.com/css2?family=Oswald&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans&display=swap', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'sk_add_google_fonts');

//theme Function
function sk_customizer_register($wp_customize) {
    $wp_customize->add_section('sk_header_area', array(
        "title" => __('Header Area', 'skmiraj'),
        'description' => 'If you interested to update your header area, you can do it here.',
    ));
    $wp_customize->add_setting('sk_logo', array(
        'default' => get_bloginfo('template_directory', '/img/Tech Revolutoin Logo.jpg')
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sk_logo', array(
        'label' => 'Logo Upload',
        'description' => 'If you interested to change or update your logo you can do it.',
        'setting' => 'sk_logo',
        'section' => 'sk_header_area',
    )));
}
add_action('customize_register', 'sk_customizer_register');

// Menu Register
register_nav_menu('primary', __('Main Menu', 'skmiraj'));



?>