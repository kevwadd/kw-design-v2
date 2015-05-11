<?php 
$areas_pg = get_page_by_title("Areas");
$areas_children = get_pages('parent='.$areas_pg->ID);
$area_counter = 0;
//echo '<pre>';print_r($areas_children);echo '</pre>';
 ?>

<section id="areas-section" class="black-section section-block">

	<div class="container">
		
		<div class="section-header">
			<h3 class="header-rotated"><?php echo $areas_pg->post_title; ?></h3>
			<a href="<?php echo get_permalink($areas_pg->ID); ?>" class="btn btn-default"><i class="fa fa-angle-double-right"></i><span class="sr-only">View more Information about <?php echo $areas_pg->post_title; ?><</span></a>
		</div>
	
		<div class="row">
			<div class="col-xs-11">
				<div class="row">
				
					<?php foreach ($areas_children as $area) { 
					$area_counter++;
					$intro = get_field('intro_txt', $area->ID);	
					$icon = get_field('icon', $area->ID);
					//echo '<pre>';print_r($icon);echo '</pre>';
					?>
					<div class="col-xs-4">
						<div id="area-panel-<?php echo $area->post_name; ?>" class="icon-panel">
							<div class="icon <?php echo ($area_counter == 1) ? 'active':'normal'; ?>"><i class="fa <?php echo $icon; ?> fa-lg"></i></div>
							<h4><a href="<?php echo get_permalink($area->ID); ?>" title="View: <?php echo $area->post_title; ?>"><?php echo $area->post_title; ?></a></h4>
							<p><?php echo $intro; ?></p>
						</div>
					</div>
					<?php } ?>

				</div>
			</div>
		</div>
		
	</div>

</section>