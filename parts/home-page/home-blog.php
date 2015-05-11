<?php 
$blog_page_id = get_option("page_for_posts");
$blog_page = get_post($blog_page_id);
//echo '<pre>';print_r($blog_page);echo '</pre>';
 ?>
<section id="blog-section" class="blue-section section-block">

	<div class="container">
	
		<div class="row">
			<div class="col-xs-7">
				<div class="row">
				
					<div class="col-xs-1 col-xs-push-11">
						<div class="section-header indent">
						<h3 class="header-rotated">Instagram</h3>
						</div>
					</div>
				
					<div class="col-xs-11 col-xs-pull-1">
						<?php
							echo do_shortcode('[alpine-phototile-for-instagram id=153 user="kevwaddell" src="user_recent" imgl="fancybox" style="cascade" col="3" size="M" num="6" border="1" highlight="1" align="left" max="100" nocredit="1"]');
						?>
					</div>
				
				</div>
			</div>
			<div class="col-xs-4">
				<?php if ( is_active_sidebar( 'home-blog-feed' ) ) : ?>
					<?php dynamic_sidebar( 'home-blog-feed' ); ?>
				<?php endif; ?>
			</div>
		</div>
		
		<div class="section-header">
			<h3 class="header-rotated"><?php echo $blog_page->post_title; ?></h3>
			<a href="<?php echo get_permalink($blog_page->ID); ?>" class="btn btn-default"><i class="fa fa-angle-double-right"></i><span class="sr-only">View <?php echo $blog_page->post_title; ?></span></a>
		</div>
		
	</div>

</section>