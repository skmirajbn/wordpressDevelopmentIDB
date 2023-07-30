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
// Adding custom fonts
function equeue_custom_fonts() {
    $custom_fonts_css = "
    @font-face {
        font-family: 'Font Awesome 6 Free';
        font-style: normal;
        font-weight: 400;
        font-display: block;
        src: url('" . get_template_directory_uri() . "/dist/webfont/fa-regular-400.woff2') format('woff2'), url('" . get_template_directory_uri() . "/dist/webfont/fa-regular-400.ttf') format('truetype'); }
      
      .far,
      .fa-regular {
        font-weight: 400; }
      :root, :host {
        --fa-style-family-classic: 'Font Awesome 6 Free';
        --fa-font-solid: normal 900 1em/1 'Font Awesome 6 Free'; }
      
      @font-face {
        font-family: 'Font Awesome 6 Free';
        font-style: normal;
        font-weight: 900;
        font-display: block;
        src: url('" . get_template_directory_uri() . "/dist/webfont/fa-solid-900.woff2') format('woff2'), url('" . get_template_directory_uri() . "/dist/webfont/fa-solid-900.ttf') format('truetype'); }
      
      .fas,
      .fa-solid {
        font-weight: 900; }
      @font-face {
        font-family: 'Font Awesome 5 Brands';
        font-display: block;
        font-weight: 400;
        src: url('" . get_template_directory_uri() . "/dist/webfont/fa-brands-400.woff2') format('woff2'), url('" . get_template_directory_uri() . "/dist/webfont/fa-brands-400.ttf') format('truetype'); }
      
      @font-face {
        font-family: 'Font Awesome 5 Free';
        font-display: block;
        font-weight: 900;
        src: url('" . get_template_directory_uri() . "/dist/webfont/fa-solid-900.woff2') format('woff2'), url('" . get_template_directory_uri() . "/dist/webfont/fa-solid-900.ttf') format('truetype'); }
      
      @font-face {
        font-family: 'Font Awesome 5 Free';
        font-display: block;
        font-weight: 400;
        src: url('" . get_template_directory_uri() . "/dist/webfont/fa-regular-400.woff2') format('woff2'), url('" . get_template_directory_uri() . "/dist/webfont/fa-regular-400.ttf') format('truetype'); }
      @font-face {
        font-family: 'FontAwesome';
        font-display: block;
        src: url('" . get_template_directory_uri() . "/dist/webfont/fa-solid-900.woff2') format('woff2'), url('" . get_template_directory_uri() . "/dist/webfont/fa-solid-900.ttf') format('truetype'); }
      
      @font-face {
        font-family: 'FontAwesome';
        font-display: block;
        src: url('" . get_template_directory_uri() . "/dist/webfont/fa-brands-400.woff2') format('woff2'), url('" . get_template_directory_uri() . "/dist/webfont/fa-brands-400.ttf') format('truetype'); }
      
      @font-face {
        font-family: 'FontAwesome';
        font-display: block;
        src: url('" . get_template_directory_uri() . "/dist/webfont/fa-regular-400.woff2') format('woff2'), url('" . get_template_directory_uri() . "/dist/webfont/fa-regular-400.ttf') format('truetype');
        unicode-range: U+F003,U+F006,U+F014,U+F016-F017,U+F01A-F01B,U+F01D,U+F022,U+F03E,U+F044,U+F046,U+F05C-F05D,U+F06E,U+F070,U+F087-F088,U+F08A,U+F094,U+F096-F097,U+F09D,U+F0A0,U+F0A2,U+F0A4-F0A7,U+F0C5,U+F0C7,U+F0E5-F0E6,U+F0EB,U+F0F6-F0F8,U+F10C,U+F114-F115,U+F118-F11A,U+F11C-F11D,U+F133,U+F147,U+F14E,U+F150-F152,U+F185-F186,U+F18E,U+F190-F192,U+F196,U+F1C1-F1C9,U+F1D9,U+F1DB,U+F1E3,U+F1EA,U+F1F7,U+F1F9,U+F20A,U+F247-F248,U+F24A,U+F24D,U+F255-F25B,U+F25D,U+F271-F274,U+F278,U+F27B,U+F28C,U+F28E,U+F29C,U+F2B5,U+F2B7,U+F2BA,U+F2BC,U+F2BE,U+F2C0-F2C1,U+F2C3,U+F2D0,U+F2D2,U+F2D4,U+F2DC; }
      
      @font-face {
        font-family: 'FontAwesome';
        font-display: block;
        src: url('" . get_template_directory_uri() . "/dist/webfont/fa-v4compatibility.woff2') format('woff2'), url('" . get_template_directory_uri() . "/dist/webfont/fa-v4compatibility.ttf') format('truetype');
        unicode-range: U+F041,U+F047,U+F065-F066,U+F07D-F07E,U+F080,U+F08B,U+F08E,U+F090,U+F09A,U+F0AC,U+F0AE,U+F0B2,U+F0D0,U+F0D6,U+F0E4,U+F0EC,U+F10A-F10B,U+F123,U+F13E,U+F148-F149,U+F14C,U+F156,U+F15E,U+F160-F161,U+F163,U+F175-F178,U+F195,U+F1F8,U+F219,U+F27A; }
    ";

    wp_add_inline_style('custom_fonts', $custom_fonts_css);
}
add_action('wp_enqueue_scripts', 'equeue_custom_fonts');
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
add_filter('nav_menu_css_class', 'add_custom_classes_to_menu_items', 10, 4)

    ?>