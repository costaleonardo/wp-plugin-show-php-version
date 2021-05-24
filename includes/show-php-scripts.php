<?php 

function spv_enqueue_scripts( $hook ) {

  // Run only on dashboard page
	if ( 'index.php' !== $hook ) {
		return;
  }


  // Load JS
  wp_enqueue_script( 'spv_script', plugin_dir_url( __DIR__ ) . 'js/spv.js', array(), 1.0 );

  // Load CSS
  wp_enqueue_style('spv_style', plugin_dir_url( __DIR__ ) . 'css/show-php.css', array(), 1.0 );
  
  // Get PHP version
  $fullver = mysqli_get_server_info( mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME ) );

  // Pass PHP version to JavaScript
  wp_localize_script( 'spv_script', 'spvObj', array(
		'phpversion' => phpversion(),
    'mysqlversion' => $fullver
	) );
}

add_action( 'admin_enqueue_scripts', 'spv_enqueue_scripts' );

?>