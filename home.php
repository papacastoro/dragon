<?php get_header();?>
<div id="content">
	<!-- qui il contenuto -->
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<!-- qui il contenuto -->
<div id="bio">
	<h1><?php echo get_the_author();?></h1>
	<p class="author-desc">
		<?php echo get_the_author_meta('description');?>
	</p>
</div>