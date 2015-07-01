<?php
/**
 * @package WordPress
 * @subpackage dragon
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php
			
				// Start the Loop.
				
				while ( have_posts() ) : the_post();
	
					get_template_part( 'content', get_post_format() );

					// If comments are open or we have at least one comment, load up the comment template.

					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
			
		</div><!-- #content -->
	</div><!-- #primary -->