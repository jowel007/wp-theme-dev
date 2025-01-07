<?php

add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

// register_nav_menu('header menu', 'Header menu'); single menu register

register_nav_menus(array(
    'header menu' => __('Header Menu'),
    'footer-menu' => __('Footer Menu'),
    'sidebar-menu' => __('Sidebar Menu'),
));
