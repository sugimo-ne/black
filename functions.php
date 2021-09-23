<?php
add_action( 'wp_enqueue_scripts', 'enqueue_vue' );

function enqueue_vue() {
  if( WP_DEBUG ) {
    wp_register_script( 'vue', 'https://cdn.jsdelivr.net/npm/vue/dist/vue.js', [], '', true );
  } else {
    wp_register_script( 'vue', 'https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js', [], '', true );
  }

  // your app code
  wp_register_script( 'my-app', get_stylesheet_directory_uri()
 . '/js/index.js', [], '', true );
}

add_shortcode( 'cost-calculator', 'shortcode_cost_calculator' );

function shortcode_cost_calculator( $atts ) {
  wp_enqueue_script( 'vue' );
  wp_enqueue_script( 'my-app' );

  // ...
}