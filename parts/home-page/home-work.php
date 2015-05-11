<?php 
$work_pg = get_page_by_title("Work");
$work = get_field('hp_work', 'options');
//echo '<pre>';print_r($work);echo '</pre>';
 ?>

<section id="work-section" class="orange-section section-block<?php echo (wp_is_mobile()) ? ' mobile':''; ?>">

	<div class="container">
		
		<div class="section-header">
			<h3 class="header-rotated"><?php echo $work_pg->post_title; ?></h3>
			<a href="<?php echo get_permalink($work_pg->ID); ?>" class="btn btn-default"><i class="fa fa-angle-double-right"></i><span class="sr-only">View more Information about <?php echo $work_pg->post_title; ?></span></a>
		</div>
	
		<div class="row">
			<div class="col-xs-11">
				
				<div class="row">
				<?php foreach ($work as $work_id) { 
				$ID = $work_id['hp_work_item'];
				$work_title = get_the_title($ID);
				$attr = array('class' => 'responsive-img', 'title'	=> trim( strip_tags( $attachment->post_title ) ) );
				$thumb = get_the_post_thumbnail( $ID, 'img-1000-470-cropped', $attr );
				?>
					<div class="col-xs-6">
						<a href="<?php echo get_permalink($ID); ?>" class="img-link">
							<figure class="img-wrap">
								 <?php echo $thumb; ?>
								 <figcaption class="link-title"><?php echo $work_title; ?></figcaption>
							</figure>
						</a>
					</div>
				<?php } ?>
					
				</div>
				
			</div>
			
		</div>
		
	</div>

</section>