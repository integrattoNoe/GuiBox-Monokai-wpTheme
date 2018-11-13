<?php 


add_theme_support( 'post-thumbnails' ); 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
//add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
add_theme_support( 'woocommerce' );
}

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );



/*C:\Program Files\Intel\WiFi\bin\;C:\Program Files\Common Files\Intel\WirelessCommon\;C:\AppServ\Apache24\bin;C:\AppServ\php7;C:\AppServ\MySQL\bin;C:\Users\Noe\AppData\Roaming\Composer\vendor\bin;C:\Users\Noe\AppData\Roaming\npm;%NVM_HOME%;%NVM_SYMLINK%

C:\Program Files\Intel\WiFi\bin\;C:\Program Files\Common Files\Intel\WirelessCommon\;C:\AppServ\Apache24\bin;C:\AppServ\php5;C:\AppServ\MySQL\bin;C:\Users\Noe\AppData\Roaming\Composer\vendor\bin;C:\Users\Noe\AppData\Roaming\npm;%NVM_HOME%;%NVM_SYMLINK%*/
?>




