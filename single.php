<?php
/**
 * The posts file
 */
?>
<?php get_header(); ?>

<?php get_template_parts( array( 'parts/shared/header' ) ); ?>

<div class="container">
	
	<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
    <?php if(function_exists('bcn_display')){ bcn_display();}?>
	</div>	

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	<?php if (has_post_thumbnail()) { ?>
	
	<figure class="feat-img">
	
	<?php the_post_thumbnail('featured-img', array( 'class' => 'img-responsive' )); ?>	
		
		<div class="spacer">
	</figure>
	
	<?php } ?>
	
	<div class="row">
	
		<div class="col-xs-9 col-xs-push-3">
		
			<article <?php post_class(); ?>>
			
				<div class="row">
					<div class="col-xs-2">
						<time class="publish-date" datetime="<?php the_time( 'Y-m-d' ); ?>">
						<span class="month"><?php echo get_the_date('M'); ?></span>
						<span class="day"><?php echo get_the_date('d'); ?></span>
						<span class="year"><?php echo get_the_date('Y'); ?></span>
						</time>
					</div>
					
					<div class="col-xs-8">
						<h1><?php the_title(); ?></h1>
					
						<div class="entry">
						<?php the_content(); ?>
						</div>
					</div>
					
					<div class="col-xs-2">
						<div class="share-btns">
							<?php echo do_shortcode('[ssba]'); ?>
						</div>
					</div>
				
				</div>
				
				<div class="next-prev-posts">
				<?php 
				$next_post = get_adjacent_post( true, '', false);
				$prev_post = get_adjacent_post( true, '', true);
				//echo '<pre>';print_r($prev_post);echo '</pre>';
				?>
				<div class="row">
					<div class="col-xs-6">
						<?php if (!empty($prev_post)) { ?>
						<a href="<?php echo get_permalink($prev_post->ID); ?>" title="View previous post" class="prev-post">
							<i class="fa fa-angle-double-left fa-lg"></i><?php echo $prev_post->post_title; ?>
						</a>
						<?php } else { ?>
						<div class="placeholder prev-post-ph"></div>
						<?php } ?>

					</div>
					<div class="col-xs-6">
						<?php if (!empty($next_post)) { ?>
						<a href="<?php echo get_permalink($next_post->ID); ?>" title="View next post" class="next-post">
							<?php echo $next_post->post_title; ?><i class="fa fa-angle-double-right fa-lg"></i>
						</a>
						<?php } else { ?>
						<div class="placeholder next-post-ph"></div>
						<?php } ?>
					</div>
				</div>
			
			</div>
				
			</article>
		
		</div>
		
		<div class="col-xs-3 col-xs-pull-9">
		<?php get_sidebar('single'); ?>	
		</div>
		
	</div>
	
	<?php endwhile; ?>

</div>

<?php if ( comments_open() || get_comments_number() ) {  
global $cpage;
//echo '<pre>';print_r($cpage);echo '</pre>';	
?>
<div id="post-comments" class="<?php echo (get_comments_number() > 0) ? 'comments-open':'comments-closed' ?>">
	<div class="container">
	<div class="row">
		<div class="col-xs-9 col-xs-offset-3">
			<header class="comments-header">
				<h2>Comments <i class="fa fa-comment"></i><span><?php echo get_comments_number(); ?></span></h2>
				<button class="btn btn-default" id="comments-btn"><span class="sr-only">View comments</span></button>
			</header>
			<div class="comments-content">
			<?php comments_template(); ?>
			</div>
		</div>
	</div>
	</div>
</div>
<?php } ?>

<?php get_footer(); ?>