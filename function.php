<?php 

function dragon_setup() {
	load_teme_textdomain('dragon');
	
function register_my_menus() {
	register_nav_menus(
			array(
					'header-menu' => __( 'Header Menu' ),
					'extra-menu' => __( 'Extra Menu' )
			)
	);
}
add_action( 'init', 'register_my_menus' );}
add_action( 'widgets_init', function(){
	register_widget( 'My_Widget' );
});
?>