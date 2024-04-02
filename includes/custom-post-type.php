<?php

function cvd_features_post(){
    $featuresPost_label = array(
        'name'          => __('Features Post','textdomain'),
        'singular_name' => __('Features Post','textdomain'),
        'add_new'       => __('Add Features Post', 'textdomain'),
        'add_new_item'  => __('Add new Features Post', 'textdomain'),
        'edit_item'     => __('Edit Features Post', 'textdomain'),
        'all_items'     => __('Features Post', 'textdomain'),
    );

    $featuresPost_args = array(
        'labels'            => $featuresPost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('featuresPost', $featuresPost_args);
}

add_action('init', 'cvd_features_post');


// For project section, in Wordpress - Project Post

function cvd_project_post(){
    $projectPost_label = array(
        'name'          => __('Project Post','textdomain'),
        'singular_name' => __('Project Post','textdomain'),
        'add_new'       => __('Add Project Post', 'textdomain'),
        'add_new_item'  => __('Add new Project Post', 'textdomain'),
        'edit_item'     => __('Edit Project Post', 'textdomain'),
        'all_items'     => __('Project Post', 'textdomain'),
    );

    $projectPost_args = array(
        'labels'            => $projectPost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('projectPost', $projectPost_args);
}

add_action('init', 'cvd_project_post');


