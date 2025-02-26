<?php
/**
 * Plugin Name: WP Test Plugin
 * Plugin URI: https://github.com/seliruslan/abz
 * Description: Test plugin for WordPress
 * Version: 1.0.0
 * Author: Ruslan
 * Author URI: https://github.com/seliruslan
 * Text Domain: wp-test-plugin
 */

if (!defined('ABSPATH')) {
    exit;
}
// Add admin menu page
function wp_test_plugin_menu() {
    add_menu_page(
        'WP Test Plugin',
        'WP Test',
        'manage_options',
        'wp-test-plugin',
        'wp_test_plugin_page',
        'dashicons-admin-tools',
        100
    );
}
add_action('admin_menu', 'wp_test_plugin_menu');

// Plugin page content
function wp_test_plugin_page() {
    echo '<div class="wrap">';
    echo '<h1>WP Test Plugin</h1>';
    echo '<p>PHP Version: ' . phpversion() . '</p>';
    echo '<p>WordPress Version: ' . get_bloginfo('version') . '</p>';
    echo '<p>MySQL Version: ' . $GLOBALS['wpdb']->db_version() . '</p>';
    echo '<p>Theme: ' . wp_get_theme() . '</p>';
    echo '</div>';
}
