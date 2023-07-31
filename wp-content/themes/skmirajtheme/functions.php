<?php
// My Theme Functoins


// Theme Title
add_theme_support('title-tag');

// Theme Css and jQuery File calling
function sk_css_js_file_calling() {
  wp_register_style('output', get_template_directory_uri() . '/css/output.css', array(), '1.0.0', 'all');
  wp_enqueue_style('output');

}
add_action('wp_enqueue_scripts', 'sk_css_js_file_calling');

// Menu Register
register_nav_menu('primary', __('Main Menu', 'skmiraj'));

// Menu classes

function add_custom_classes_to_menu_items($classes, $item, $args, $depth) {
  $classes[] = 'hover:text-orange-500';
  $classes[] = 'mt-4';
  $classes[] = 'md:mt-0';

  if ($args->theme_location === 'primary') {
    $args->container_class = 'flex';
  }
  return $classes;
}

// Add menu item

function add_menu_item($items, $args) {
  if ($args->theme_location === 'primary') {
    $myitems = <<<HTML
        <button class="dark:hidden" onclick="toggleDark()"><i class="fa-regular fa-moon"></i></button>
        <button class="dark:block hidden" onclick="toggleDark()"><i class="fa-solid fa-sun"></i></button>
        HTML;
    $myitems .= $items;
  }
  return $myitems;
}
add_filter('wp_nav_menu_items', 'add_menu_item', 10, 2);
add_filter('nav_menu_css_class', 'add_custom_classes_to_menu_items', 10, 4);

// Banner Section

function banner_section_add($wp_customize) {
  // Section
  $wp_customize->add_section('banner_section', array(
    'title' => 'Banner Section Area',
    'priority' => 30,
  ));
  // Settings
  $wp_customize->add_setting('banner_settings', array(

    'default' => get_template_directory_uri() . '/dist/img/Honda-cbr-photo.png',
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting('banner_text', array(
    'default' => 'Honda CBR 300R',
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting('banner_top_text', array(
    'default' => 'Computer-controlled digital transistorized with electronic advance',
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting('banner_des_text', array(
    'default' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit rem corporis aperiam, rerum consequuntur nihil labore qui cumque quam nostrum. Quidem adipisci dolores eveniet suscipit ipsa aliquid officia iure architecto.',
    'transport' => 'refresh',
  ));


  $wp_customize->add_control('banner-text', array(
    'label' => 'Banner Text',
    'type' => 'text',
    'section' => 'banner_section',
    'settings' => 'banner_text',
    'description' => "Enter Banner Text Here",

  ));
  $wp_customize->add_control('banner_top_text', array(
    'label' => 'Banner Top Text',
    'type' => 'text',
    'section' => 'banner_section',
    'settings' => 'banner_top_text',
    'description' => "Enter Banner Top Text Here",

  ));
  $wp_customize->add_control('banner_des_text', array(
    'label' => 'Banner Description Text',
    'type' => 'textarea',
    'section' => 'banner_section',
    'settings' => 'banner_des_text',
    'description' => "Enter Banner description Text Here",

  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'Banner_Image', array(
    'label' => 'Upload Banner image',
    'section' => 'banner_section',
    'settings' => 'banner_settings',
    'description' => 'Upload banner image here',

  )));
}
add_action('customize_register', 'banner_section_add');

// Client Section
function client_section_add($wp_customize) {
  // Section
  $wp_customize->add_section('client_Section', array(
    'title' => 'Client Section',
    'priority' => 25,
  ));
  // Settings
  $wp_customize->add_setting('client_image_1', array(
    'default' => get_template_directory_uri() . '/dist/img/happy-client-1.png',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'Cleint_image_1', array(
    'label' => "Upload Client Image 1",
    'section' => 'client_Section',
    'settings' => 'client_image_1',
  )));
}

add_action('customize_register', 'client_section_add');
?>