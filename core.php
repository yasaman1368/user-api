<?php
/*
Plugin Name:USER_ API ;
Plugin URI: user crud;
Description: structure of plugin
Version: 1.0.0
Author: moham madhossein aalipor
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later

*/
defined('ABSPATH') || exit;
// define('YAS_PLUGIN_DIR', plugin_dir_path(__FILE__));
// define('yas_PLUGIN_URL', plugin_dir_url(__FILE__));
// const YAS_PLUGIN_INC = YAS_PLUGIN_DIR . '_inc/';
if (is_admin()) {
    include plugin_dir_path(__FILE__) . '_inc/' . 'admin/user_api.php';
    include plugin_dir_path(__FILE__) . '_inc/' . 'admin/menu.php';
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        alert('viva Palestin')
    </script>
</body>

</html>