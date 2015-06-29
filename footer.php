<?php 

/**
 * @package wordpress
 * @subpackage dragon
 */

?>

	<!-- contenitore footer -->
	
		<div id="footer" class="secondary"> 
		
			<div id="footer1"> 
		
		<?php 
		
			if(is_active_sidebar('footer1')){ 
			dynamic_sidebar('footer1'); 
			}
		?>
			</div>
		</div>
		
		//  navigazione footer
	
		<div id="nav-footer">
	
			<?php wp_nav_menu( array('theme_location' => 'footer-menu' ));?>
	
		</div>
	
	<!-- copyright -->
	
		<p>&copy; 
		
			<?php echo date("Y") ?> 
	
			<a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>">
	  
	  		<?php bloginfo('name'); ?>
		
			</a>
	
	<!-- chiusura footer -->
		
		
		<?php wp_footer();?>
		
		</body></html>
		
