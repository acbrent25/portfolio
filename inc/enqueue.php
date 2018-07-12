<?php
/**
 * Enqueue scripts and styles.
 */
function adam_champagne_scripts() {

  // Enqueue Styles
  wp_enqueue_style( 'adam-champagne-style', get_stylesheet_uri() );
  // Web Fonts
  wp_enqueue_style( 'ac-gfonts', 'https://fonts.googleapis.com/css?family=Lora|Montserrat:400,500,600,700|Open+Sans:400,400i,700', array(), 1111 );
  // Bootstrap core CSS
  wp_enqueue_style( 'ac-bootstrap', get_stylesheet_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), 1111  );
  // Icon Fonts
  wp_enqueue_style( 'ac-font-awesome', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css', array(), 1111  );
  wp_enqueue_style( 'ac-themify-icons', get_stylesheet_directory_uri() . '/assets/css/themify-icons.css', array(), 1111  );
  wp_enqueue_style( 'ac-et-line', get_stylesheet_directory_uri() . '/assets/css/et-line.css', array(), 1111  );
  // Plugins
  wp_enqueue_style( 'ac-owl-carousel-css', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.css', array(), 1111  );
  wp_enqueue_style( 'ac-magnific-popup', get_stylesheet_directory_uri() . '/assets/css/magnific-popup.css', array(), 1111  );
  wp_enqueue_style( 'ac-vertical', get_stylesheet_directory_uri() . '/assets/css/vertical.min.css', array(), 1111  );
  wp_enqueue_style( 'ac-animate', get_stylesheet_directory_uri() . '/assets/css/animate.css', array(), 1111  );
  // Core CSS
  wp_enqueue_style( 'ac-template', get_stylesheet_directory_uri() . '/assets/css/template.css', array(), 1111  );
  // Custom CSS
  wp_enqueue_style( 'ac-custom-css', get_stylesheet_directory_uri() . '/assets/css/template.css', array(), 1111  );

  
  // Enqueu Scripts
  wp_enqueue_script( 'jquery');
  wp_enqueue_script( 'ac-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', array(), '1111', true );
  wp_enqueue_script( 'adam-bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), '1111', true );
  wp_enqueue_script( 'ac-g-maps', 'http://maps.googleapis.com/maps/api/js?key=AIzaSyA0rANX07hh6ASNKdBr4mZH0KZSqbHYc3Q', array(), '1111', true );
  wp_enqueue_script( 'ac-plugins', get_template_directory_uri() . '/assets/js/plugins.min.js', array(), '1111', true );
  wp_enqueue_script( 'ac-custom', get_template_directory_uri() . '/assets/js/custom.min.js', array(), '1111', true );

  
  wp_enqueue_script( 'adam-champagne-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'adam-champagne-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'adam_champagne_scripts' );