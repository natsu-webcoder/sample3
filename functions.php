<?php

//css, js読み込み
function my_enqueue_scripts()
{
  $uri = esc_url(get_template_directory_uri());
  wp_enqueue_script('jquery');
  wp_enqueue_script('bundle_js', $uri . '/js/script.js');
  wp_enqueue_style('my_styles', $uri . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');


//titleタグ
function display_title()
{
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'display_title');

function change_title_separator($sep)
{
  $sep = ' | ';
  return $sep;
}
add_filter('document_title_separator', 'change_title_separator');

function remove_tagline($title_parts)
{
  if (is_front_page()) {
    unset($title_parts['tagline']);
  }
  return $title_parts;
}
add_filter('document_title_parts', 'remove_tagline');


// アイキャッチ画像を有効化
function setup_post_thumnails()
{
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'setup_post_thumnails');

function img_uncompressed()
{
  return 100;
}
add_filter('jpeg_quality', 'img_uncompressed');

// MW WP FORM pタグ、brタグを除去
function mvwpform_autop_filter() {
  if (class_exists('MW_WP_Form_Admin')) {
    $mw_wp_form_admin = new MW_WP_Form_Admin();
    $forms = $mw_wp_form_admin->get_forms();
    foreach ($forms as $form) {
      add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
    }
  }
}
mvwpform_autop_filter();
