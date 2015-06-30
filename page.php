
<div class="content-page">
  <!-- contenuto qui -->
</div>

<!-- contenuto qui -->
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php get_header(); ?>
<div id="content">
  <?php the_post(); ?>
  <?php get_template_part( 'content', 'page' ); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>