
<?php
function location() { 
  wp_enqueue_style( 'blogger', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.3.6' ); 
    wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/availability-calendar.css' );  
	 wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/font-awesome.min.css' );  
	  wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/ion.rangeSlider.css' );  
	   wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/ion.rangeSlider.skinFlat.css' );  
	    wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/linearicons.css' );  
		 wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/magnific-popup.css' );  
		  wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/main.css' );  
		   wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/nice-select.css' );  
		   wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/owl.carousel.css' );
	 wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/jquerysctipttop.css', array( 'jquery' ), '3.3.6', true ); } add_action( 'wp_enqueue_scripts', 'location' )
	 ?>
