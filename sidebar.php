    <div id="sidebar">
	<?php if ( ! dynamic_sidebar( 'Sidebar' )) : ?>
		<li id="sidebar-search" class="widget">
			<h3>Cerca</h3>
			<?php get_search_form();?>
		</li>
		<li id="sidebar-nav" class="widget menu">
			<h3>Navigazione</h3>
			<ul>
				<?php wp_nav_menu( array( 'theme_location' =>'sidebar-menu' ) );?>
			</ul>
		</li>
		<li id="sidebar-archives" class="widget">
			<h3>Archivi</h3>
			<ul>
				<?php wp_get_archives( 'type=monthly' ); ?>
			</ul>
		</li>
	<?php endif; ?>
</div>