<?php

add_action("wp_ajax_filter-category", "filter_ajax_category");
add_action("wp_ajax_nopriv_filter-category", "filter_ajax_category");

function filter_ajax_category(){
  
  global $wpdb, $_POST;
  
  $term_id=$_POST["data_id"];
  include get_template_directory().'/views/ajax-annonces.php';
  
  die();
}

