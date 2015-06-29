<?php

/**
 * @package worpress
 * @subpackage dragon
*/

?>

<!--  tipo documento -->

<!DOCTYPE html>

<!-- lingua -->

<html <?php language_attributes(); ?>>

		<!-- codifica pagine -->
		
	<head>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		
		<!-- formattazione titolo pagine -->
		
		<title>
		
			<?php
		    	global $page, $paged;
		    	wp_title( '|', true, 'right' );
		    	bloginfo( 'name' );
		    	$description = get_bloginfo( 'description', 'display' );
		    if ( $description && ( is_home() || is_front_page() ) )
		        echo " | $description";
		    if ( $paged >= 2 || $page >= 2 )
		        echo ' | ' . sprintf( __( 'Pagina %s', 'tema' ), max( $paged, $page ) );
			?>
			
		</title>
		
		<!-- collegamento foglio stile -->
		
		
		<link rel="stylesheet" type="text/css" media="screen" 
				href="<?php bloginfo( 'stylesheet_url' ); ?>" 
		/>
		
		<!-- gestione commenti -->
		
		<?php 
			if ( is_singular() && get_option( 'thread_comments' ) ) 
				wp_enqueue_script( 'comment-reply' ); 
		?>
		
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
			
		<!-- chiusura head -->
			
			
		<?php wp_head(); ?>
		
	</head>

		<!-- inizio body -->
		
	<body <?php body_class(); ?>>

		<!-- contenitore sito -->
	
	<div id="site">
	
	<div id="widgetized-header">

		    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('header')) : else : ?>
		
		    	<div class="pre-widget">
					
					<!--messaggio alternativo -->
				</div>
		
			<?php endif; ?>

	</div>
		<!-- struttura header -->
		
	<div id="branding">

	    <h1>
	      	<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
	        	<?php bloginfo( 'name' ); ?>
	      	</a>
	    </h1>
	    
	    	<p id="description"><?php bloginfo( 'description' ); ?></p>

	</div>
	
		<!-- navigazione home page -->
	
	<div id="navigation">

 	 <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

 	 </div>
	
		<!-- contenuto loop -->
		
	<div id="content">
  
  	<div id="main">
  	
  	</div>
  	</div>
  	
  		<!-- wp list -->
  		
  	<?php wp_list_pages(); ?>
  	
  		<!-- profondità navigazione -->
  		
  	<?php wp_list_pages('depth=1'); ?>
  	
  		<!-- personalizzare menu -->
  		
  	<?php add_theme_support( 'menus' ); ?>
 
 
	</div>
</body>

</html>	