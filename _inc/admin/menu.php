<?php

/**
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_menu_page()
{
    add_menu_page(
        'Custom Menu Title',
        'custom menu',
        'manage_options',
        'create_users',
        'my_custom_menu_page',

    );
    add_submenu_page('create_users', 'creat new user', 'users list', 'manage_options', 'create_user', 'creat_new_user_form');
}
add_action('admin_menu', 'wpdocs_register_my_custom_menu_page');

/**
 * Display a custom menu page
 */
function my_custom_menu_page()
{
    esc_html_e('Admin Page Test', 'textdomain');
}
function creat_new_user_form()
{
    echo 'HELLOOOO';
}
