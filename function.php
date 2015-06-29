<?php
/**
 * @package wordpress
 * @subpackage dragon
 */


	// Dimensioni contenuto

	if ( ! isset( $content_width ) ) {
		$content_width = 1080; /* pixels */
	}
	
	// Assegna versione a variabile
	 
	$theme 					= wp_get_theme( 'dragon' );
	$storefront_version 	= $theme['Version'];
	
	function dragon_widget_init(){
		require get_template_directory() . '/inc/widget.php';
			register('dragon_widget_init');
	// Nav menu 
	
	register_nav_menus( array(
			'primary'		=> __( 'Primary Menu', 'dragon' ),
			'secondary'		=> __( 'Secondary Menu', 'dragon' ),
	) );
	
	// sidebar sinistra
	
	register_sidebar( array(
			'name'          => __( 'Sidebar1', 'dragon' ),
			'id'            => 'sidebar-1',	'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
			
	) );

	// sidebar destra
	
	register_sidebar( array(
			'name'          => __( 'Sidebar2', 'dragon' ),
			'id'            => 'sidebar2',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',					
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
	) );
	
	// sidebar header
	
	register_sidebar( array(
			'name'          => __( 'Header', 'dragon' ),
			'id'            => 'header-1',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
			'name' 				=> __('Footer1', 'dragon' ),
			'id'				=> 'footer1',
			'description' 		=> 'Widgetized Footer Region %d.', 'dragon',
			'before_widget' 	=> '<aside id="%1$s" class="widget %2$s">',
			'after_widget' 		=> '</aside>',
			'before_title' 		=> '<h3>',
			'after_title' 		=> '</h3>',
	));
	}

	