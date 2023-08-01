<?php
// My Theme Functoins


// Theme Title
add_theme_support('title-tag');

// Theme Css and jQuery File calling
// function sk_css_js_file_calling() {
//   wp_register_style('output', get_template_directory_uri() . '/css/output.css', array(), '1.0.0', 'all');
//   wp_enqueue_style('output');

// }
// add_action('wp_enqueue_scripts', 'sk_css_js_file_calling');

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
        <button class="dark:hidden darkbtn"><i class="fa-regular fa-moon"></i></button>
        <button class="dark:block hidden darkbtn"><i class="fa-solid fa-sun"></i></button>
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


  $wp_customize->add_control('banner_text_control', array(
    'label' => 'Banner Text',
    'type' => 'text',
    'section' => 'banner_section',
    'settings' => 'banner_text',
    'description' => "Enter Banner Text Here",
  ));
  $wp_customize->add_control('banner_top_text_control', array(
    'label' => 'Banner Top Text',
    'type' => 'text',
    'section' => 'banner_section',
    'settings' => 'banner_top_text',
    'description' => "Enter Banner Top Text Here",
  ));
  $wp_customize->add_control('banner_des_text_control', array(
    'label' => 'Banner Description Text',
    'type' => 'textarea',
    'section' => 'banner_section',
    'settings' => 'banner_des_text',
    'description' => "Enter Banner description Text Here",
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image_control', array(
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
    'priority' => 35,
  ));
  // Client 1
  // Client 1 Name
  $wp_customize->add_setting('client_1_name', array(
    'default' => 'Regina Miles',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('Client_1_name_control', array(
    'label' => "Client 1 Name",
    'section' => 'client_Section',
    'settings' => 'client_1_name',
    'description' => 'Enter client 1 Name',
    'type' => 'text',
  ));
  // Client 1 Designation
  $wp_customize->add_setting('client_1_designation', array(
    'default' => 'Banker',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('Client_1_designation_control', array(
    'label' => "Client 1 Designation",
    'section' => 'client_Section',
    'settings' => 'client_1_designation',
    'type' => 'text',
  ));
  // Client 1 Review text
  $wp_customize->add_setting('client_1_reviewtext', array(
    'default' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque illo ipsa tempore mollitia possimus numquam libero facere eveniet id at!',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('Client_1_reviewtext_control', array(
    'label' => "Client 1 review text",
    'section' => 'client_Section',
    'settings' => 'client_1_reviewtext',
    'type' => 'textarea',
  ));
  // Client 1 Image
  $wp_customize->add_setting('client_image_1', array(
    'default' => get_template_directory_uri() . '/dist/img/happy-client-1.png',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'Client_image_1', array(
    'label' => "Upload Client Image 1",
    'section' => 'client_Section',
    'settings' => 'client_image_1',
  )));





  // Client 2
  // Client 2 Name
  $wp_customize->add_setting('client_2_name', array(
    'default' => 'Regina Miles',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('Client_2_name_control', array(
    'label' => "Client 2 Name",
    'section' => 'client_Section',
    'settings' => 'client_2_name',
    'type' => 'text',
  ));
  // Client 2 Designation
  $wp_customize->add_setting('client_2_designation', array(
    'default' => 'Banker',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('Client_2_designation_control', array(
    'label' => "Client 2 Designation",
    'section' => 'client_Section',
    'settings' => 'client_2_designation',
    'type' => 'text',
  ));
  // Client 2 Review text
  $wp_customize->add_setting('client_2_reviewtext', array(
    'default' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque illo ipsa tempore mollitia possimus numquam libero facere eveniet id at!',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('Client_2_reviewtext_control', array(
    'label' => "Client 2 review text",
    'section' => 'client_Section',
    'settings' => 'client_2_reviewtext',
    'type' => 'textarea',
  ));
  // Client 2 Image
  $wp_customize->add_setting('client_image_2', array(
    'default' => get_template_directory_uri() . '/dist/img/happy-client-2.png',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'Client_image_2', array(
    'label' => "Upload Client Image 2",
    'section' => 'client_Section',
    'settings' => 'client_image_2',
  )));
  // Client 3
  // Client 3 Name
  $wp_customize->add_setting('client_3_name', array(
    'default' => 'Regina Miles',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('Client_3_name_control', array(
    'label' => "Client 3 Name",
    'section' => 'client_Section',
    'settings' => 'client_3_name',
    'type' => 'text',
  ));
  // Client 3 Designation
  $wp_customize->add_setting('client_3_designation', array(
    'default' => 'Banker',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('Client_3_designation_control', array(
    'label' => "Client 3 Designation",
    'section' => 'client_Section',
    'settings' => 'client_3_designation',
    'type' => 'text',
  ));
  // Client 3 Review text
  $wp_customize->add_setting('client_3_reviewtext', array(
    'default' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque illo ipsa tempore mollitia possimus numquam libero facere eveniet id at!',
    'transport' => 'refresh',

  ));
  $wp_customize->add_control('Client_3_reviewtext_control', array(
    'label' => "Client 3 review text",
    'section' => 'client_Section',
    'settings' => 'client_3_reviewtext',
    'type' => 'textarea',
  ));
  $wp_customize->add_setting('client_image_3', array(
    'default' => get_template_directory_uri() . '/dist/img/happy-client-3.png',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'Client_image_3', array(
    'label' => "Upload Client Image 3",
    'section' => 'client_Section',
    'settings' => 'client_image_3',
  )));
}

add_action('customize_register', 'client_section_add');
?>