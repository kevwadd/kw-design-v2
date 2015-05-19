<?php
/**
 * The main template file
 */
?>
<?php get_header(); ?>

<?php get_template_parts( array( 'parts/shared/header' ) ); ?>

<div class="container">
	
	<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
    <?php if(function_exists('bcn_display')){ bcn_display();}?>
	</div>
	
	<main id="main-content">
		<?php if ( have_posts() ): ?>
		
		<div class="side-header">
			<h1 class="header-rotated">Blog</h1>
		</div>
			
		<div class="row">
			<div class="col-xs-11">
				<ol class="row list-unstyled posts-grid">
				<?php while ( have_posts() ) : the_post(); ?>
					<li class="col-xs-4">
					<a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark">
						<span class="post-img"><?php the_post_thumbnail('thumbnail', array( 'class' => 'img-responsive' )); ?></span>
						<span class="post-title"><?php the_title(); ?></span>
						</a>
					</li>
				<?php endwhile; ?>
				</ol>
			</div>
		</div>
		<?php else: ?>
		<h2>No posts to display</h2>
		<?php endif; ?>
	</main>	
	
</div>

<?php get_footer(); ?>