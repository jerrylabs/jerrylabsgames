<?php

function load_stylesheets() {
  wp_register_style('jerrylabs_css', get_template_directory_uri() . '/css/jerrylabs.min.css');
  wp_enqueue_style('jerrylabs_css');
  wp_register_style('jerrylabs_games', get_template_directory_uri() . '/css/jerrylabsgames.css');
  wp_enqueue_style('jerrylabs_games');
  wp_register_style('fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css');
  wp_enqueue_style('fancybox');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function include_jquery() {
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.0.min.js');
  add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');

function loadjs() {
  wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js');
  add_action('wp_enqueue_scripts', 'fancybox');
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/scripts.js');
  add_action('wp_enqueue_scripts', 'customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('custom-templates');
add_theme_support('title-tag');

register_nav_menus(
  array(
    'main-menu' => __('Main menu', 'theme'),
    'social-menu' => __('Social menu', 'theme')
  )
);

add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);

function add_tags_to_pages() {
  register_taxonomy_for_object_type( 'post_tag', 'page' );
}
add_action('init', 'add_tags_to_pages');

// custom functions

function jumbotron_title() {
  if (has_post_thumbnail()) : ?>
    <div class="jumbotron">
      <div class="jumbotron__bg" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
      <div class="container">
        <h1 class="jumbotron__title"><?php the_title(); ?></h1>
      </div>
    </div>
  <?php else : ?>
    <div class="container">
      <h1><?php the_title(); ?></h1 >
    </div>
  <?php endif;
}

function jerrylabs_image() {
  if (has_post_thumbnail()) : the_post_thumbnail_url();
  else : echo(get_template_directory_uri() . "img/logo-jerrylabs-white.png");
  endif;
}
?>