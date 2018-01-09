<?php

  function register_style() {

    wp_register_style('animate', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style('animate');

    wp_register_style('my_bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('my_bootstrap');

    wp_register_style('flexslider', get_template_directory_uri() . '/css/flexslider.css');
    wp_enqueue_style('flexslider');

    wp_register_style('icomoon', get_template_directory_uri() . '/css/icomoon.css');
    wp_enqueue_style('icomoon');

    wp_register_style('magnific', get_template_directory_uri() . '/css/magnific-popup.css');
    wp_enqueue_style('magnific');

    wp_register_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style');

    wp_register_style('owl.carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('owl.carousel');

    wp_register_style('owl.theme.default', get_template_directory_uri() . '/css/owl.theme.default.min.css');
    wp_enqueue_style('owl.theme.default');

    wp_register_style('fonts',  'http://fonts.googleapis.com/css?family=Nunito:400,300,700');
    wp_enqueue_style('fonts');

    wp_register_style('font-awasome',  'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
    wp_enqueue_style('font-awasome');
  }

add_action( 'wp_enqueue_scripts', 'register_style' );


function register_script() {

  wp_deregister_script( 'jquery' );
  	wp_register_script( 'jquery',  get_template_directory_uri() . '/js/jquery.min.js');
  	wp_enqueue_script( 'jquery' );

  wp_register_script('modernizr_custom', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js');
  wp_enqueue_script('modernizr_custom');

  wp_register_script('my_bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
  wp_enqueue_script('my_bootstrap');

  wp_register_script('jquery.count', get_template_directory_uri() . '/js/jquery.countTo.js');
  wp_enqueue_script('jquery.count');

  wp_register_script('jquery.easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js');
  wp_enqueue_script('jquery.easing');

  wp_register_script('jquery.magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js');
  wp_enqueue_script('jquery.magnific-popup');

  wp_register_script('jquery.way', get_template_directory_uri() . '/js/jquery.waypoints.min.js');
  wp_enqueue_script('jquery.way');

  wp_register_script('magnific-popup-options', get_template_directory_uri() . '/js/magnific-popup-options.js');
  wp_enqueue_script('magnific-popup-options');

  wp_register_script('main', get_template_directory_uri() . '/js/main.js');
  wp_enqueue_script('main');

  wp_register_script('owl', get_template_directory_uri() . '/js/owl.carousel.min.js');
  wp_enqueue_script('owl');

  wp_register_script('respond', get_template_directory_uri() . '/js/respond.min.js');
  wp_enqueue_script('respond');

}

add_action( 'wp_enqueue_scripts', 'register_script' );
