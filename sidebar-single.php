<?php
$aside_classes = array('blog-sb');
if (has_post_thumbnail()) {
array_push($aside_classes, "yes-feat-img");	
}
$gallery = get_field('gallery');
//echo '<pre>';print_r($gallery);echo '</pre>';
$cats_list = get_categories('hierarchical=0&parent=0&hide_empty=0&exclude=1');
$cats = get_the_category( get_the_ID() );
$cat_ids = array();
$tag_ids = array();
foreach ($cats as $cat) {
array_push($cat_ids, $cat->term_id);	
}
$tags = get_the_tags();
foreach ($tags as $tag) {
array_push($tag_ids, $tag->term_id);	
}
//echo '<pre>';print_r($tags);echo '</pre>';
?>
<aside <?php post_class($aside_classes); ?>>
	<?php if ($gallery) { ?>
	
	<div class="sb-block gallery">
		<h3>Gallery</h3>
		<ul class="list-unstyled">
			<?php foreach ($gallery as $img) { 
			$thumb = $img['sizes']['thumbnail'];
			$lrg =  $img['sizes']['large'];
			$alt = $img['title'];
			if (!empty($img['caption'])) {
			$alt = $img['title'];	
			}
			if (!empty($img['caption'])) {
			$alt = $img['caption'];	
			}
			if (!empty($img['description'])) {
			$alt = $img['description'];	
			}
			?>
			<li><a href="<?php echo $lrg; ?>" rel="fancybox">
				<img src="<?php echo $thumb; ?>" width="100%" height="100%" alt="<?php echo $alt; ?>" class="img-responsive">
					<div class="zoom"><i class="fa fa-search-plus fa-2x"></i></div>
				</a>
				</li>
			<?php } ?>
		</ul>
	</div>
	
	<?php } ?>
	
	<?php if ($cats) { ?>
	<div class="sb-block links">
		<h3>Category</h3>
		<ul class="list-unstyled">
			<?php foreach ($cats_list as $cat_list) { 
				$kid_cats = get_categories('hierarchical=0&parent='.$cat_list->term_id);		
				?>
			<li <?php echo ( in_array($cat_list->term_id, $cat_ids) ) ? ' class="current-cat"':'' ?>>
				<a href="#" title="View category <?php echo $cat_list->name ?>"<?php echo ( $kid_cats ) ? ' class="with-sub-cats"':'' ?>><?php echo $cat_list->name ?></a>
				<?php if ($kid_cats) { ?>
				<ul class="list-unstyled">
					<?php foreach ($kid_cats as $kid_cat) { ?>
					<li<?php echo ( in_array($kid_cat->term_id, $cat_ids) ) ? ' class="current-sub-cat"':'' ?>><a href="#" title="View category <?php echo $kid_cat->name ?>"><?php echo $kid_cat->name ?></a></li>
					<?php } ?>
				</ul>
				<?php } ?>
			</li>
			<?php } ?>
		</ul>
	</div>
	<?php } ?>
	<?php if ($tags) { ?>
	<div class="sb-block tags">
		<h3>Tags</h3>
		<?php 
		$tag_args = array (
		'include' => $tag_ids	
		);
		wp_tag_cloud($tag_args); ?>
	</div>
	<?php } ?>
	
</aside>