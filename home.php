<?php
/*
* Template Name: Homepage
*/
  get_header(); ?>
  <?php if ( have_posts () ) : while ( have_posts () ) : the_post (); ?>
<?php get_template_part( 'inc/content/welcome-module' ); ?>
<?php get_template_part( 'inc/content/speaker-module' ); ?>
<?php get_template_part( 'inc/content/schedule-module' ); ?>
<?php get_template_part( 'inc/content/conference-location' ); ?>
<?php get_template_part( 'inc/content/conference-sponsors' ); ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>