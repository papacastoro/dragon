<?php

get_header()?>

<?php get_sidebar()?>

<?php dynamic_sidebar('sidebar1'); ?>  <!-- sidebar sinistra -->

 <?php the_widget( 'WP_Widget_Calendar'); ?> 

<?php dynamic_sidebar('sidebar2'); ?>  <!-- sidebar destra -->  