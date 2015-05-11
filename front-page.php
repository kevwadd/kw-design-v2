<?php
/**
 * The main template file
 */
?>
<?php get_header(); ?>

<?php get_template_parts( array( 'parts/shared/header' ) ); ?>

<?php get_template_parts( array( 'parts/home-page/home-banner' ) ); ?>

<?php get_template_parts( array( 'parts/home-page/home-areas' ) ); ?>

<?php get_template_parts( array( 'parts/home-page/home-work' ) ); ?>

<?php get_template_parts( array( 'parts/home-page/home-blog' ) ); ?>

<?php get_footer(); ?>