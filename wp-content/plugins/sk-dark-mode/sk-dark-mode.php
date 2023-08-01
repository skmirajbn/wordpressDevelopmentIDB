<?php
/*
Plugin Name: Dark Mode Toggle
Description: Adds a toggle for enabling dark mode.
Version: 1.0
Author: Your Name
*/

// Enqueue the script on the frontend
function dark_mode_toggle_enqueue_scripts() {
    wp_enqueue_script('sk-dark-mode', plugins_url('sk-dark-mode.js', __FILE__), array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'dark_mode_toggle_enqueue_scripts');


// Add settings menu to the admin dashboard
// Add custom admin menu for the Scroll to Top settings
function scroll_to_top_add_admin_menu() {
    add_menu_page(
        'Scroll to Top Settings', // Page title
        'Scroll to Top', // Menu title
        'manage_options', // Capability required to access the page
        'scroll-to-top-settings', // Menu slug
        'scroll_to_top_render_settings_page', // Callback function to render the page content
        'dashicons-arrow-up-alt2' // Icon (optional, you can choose from the Dashicons library)
    );
}
add_action('admin_menu', 'scroll_to_top_add_admin_menu');

function scroll_to_top_render_settings_page() {
    ?>
    <div class="wrap">
        <h1>Scroll to Top Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('scroll_to_top_settings_group');
            do_settings_sections('scroll-to-top-settings');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function scroll_to_top_register_settings() {
    add_settings_section(
        'scroll_to_top_custom_section', // Section ID
        'Custom Settings', // Section title
        'scroll_to_top_custom_section_callback', // Callback function to render section description (optional)
        'scroll-to-top-settings' // Page slug where the section should be displayed
    );

    add_settings_field(
        'scroll_to_top_button_color', // Field ID
        'Button Color', // Field title
        'scroll_to_top_button_color_callback', // Callback function to render the field input
        'scroll-to-top-settings', // Page slug where the field should be displayed
        'scroll_to_top_custom_section' // Section ID where the field should be added
    );

    // Add other custom settings fields as needed...

    register_setting(
        'scroll_to_top_settings_group', // Group name (matches the settings_fields() call)
        'scroll_to_top_settings', // Setting name (matches the name attribute of the input field)
        'scroll_to_top_sanitize_settings' // Sanitization callback
    );
}
add_action('admin_init', 'scroll_to_top_register_settings');

function scroll_to_top_sanitize_settings($input) {
    // Create a new array to hold the sanitized settings
    $sanitized_settings = array();

    // Sanitize button color
    if (isset($input['button_color'])) {
        $sanitized_settings['button_color'] = sanitize_hex_color($input['button_color']);
    }

    // Sanitize other settings as needed...

    return $sanitized_settings;
}

function scroll_to_top_custom_section_callback() {
    echo 'Customize the Scroll to Top button below:';
}

function scroll_to_top_button_color_callback() {
    $settings = get_option('scroll_to_top_settings', array());
    $button_color = isset($settings['button_color']) ? $settings['button_color'] : '#0073aa';
    ?>
    <input type="color" name="scroll_to_top_settings[button_color]" value="<?php echo esc_attr($button_color); ?>" />
    <?php
}