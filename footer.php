<!-- contenitore footer -->

	<div id="footer">...</div>

<!--  navigazione footer -->

	<div id="nav-footer">

		<?php wp_nav_menu( array('theme_location' => 'footer-menu' ));?>

	</div>

<!--  widget -->


	<?php if (!dynamic_sidebar( 'Footer' ) ) : ?>

  	<!-- widget qui -->

	<?php endif ?>

<!--  metadati -->

	<p>

		<a href="<?php bloginfo('rss2_url'); ?>" rel="nofollow">Feed RSS </a>
 | 
 		<a href="<?php bloginfo('comments_rss2_url'); ?>" rel="nofollow">RSS </a>

	</p>

<!-- copyright -->


	<p>&copy; 
	
		<?php echo date("Y") ?> 

		<a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>">
  
  		<?php bloginfo('name'); ?>
	
		</a>. Vietata la vendita.
	</p>

<!-- chiusura footer -->
	
	
	<?php wp_footer();?>
	
	</body></html>
	
