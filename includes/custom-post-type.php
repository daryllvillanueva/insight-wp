<?php

function cvd_custom_post(){
    $servicePost_label = array(
        'name'          => __('Service Post','textdomain'),
        'singular_name' => __('Service Post','textdomain'),
        'add_new'       => __('Add Service Post', 'textdomain'),
        'add_new_item'  => __('Add new Service Post', 'textdomain'),
        'edit_item'     => __('Edit Service Post', 'textdomain'),
        'all_items'     => __('Service Post', 'textdomain'),
    );

    $servicePost_args = array(
        'labels'            => $servicePost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('servicePost', $servicePost_args);
}

add_action('init', 'cvd_custom_post');

function cvd_custom_trend_post(){
    $trendPost_label = array(
        'name'          => __('Latest Trend','textdomain'),
        'singular_name' => __('Latest Trend','textdomain'),
        'add_new'       => __('Add Trend Post', 'textdomain'),
        'add_new_item'  => __('Add new Trend Post', 'textdomain'),
        'edit_item'     => __('Edit Trend Post', 'textdomain'),
        'all_items'     => __('Latest Trend Post', 'textdomain'),
    );

    $trendPost_args = array(
        'labels'            => $trendPost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('trendPost', $trendPost_args);
}

add_action('init', 'cvd_custom_trend_post');