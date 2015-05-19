<?php
/**
 * The page file
 */
?>
<?php get_header(); ?>

<?php get_template_parts( array( 'parts/shared/header' ) ); ?>

<div class="container">
	
	<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
    <?php if(function_exists('bcn_display')){ bcn_display();}?>
	</div>	

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<article <?php post_class(); ?>>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</article>
	<?php endwhile; ?>

</div>

<?php get_footer(); ?>