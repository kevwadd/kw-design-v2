<?php 
$slides = get_field('hp_slides', 'options');
$slide_counter = 0;
//echo '<pre>';print_r($slides);echo '</pre>';
 ?>

<section class="lg-banner">

	<div id="home-slider" class="carousel slide" data-ride="carousel">
	
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
	  
	  <?php foreach ($slides as $slide) { 
	  $slide_counter++; 
	  $area = get_post($slide['area']);
	  $img = $slide['slider_img']['sizes']['img-1170-820-cropped'];
	  ?>
	   <div id="slide-<?php echo $area->post_name; ?>" class="item<?php echo ($slide_counter == 1) ? ' active':'';?>">
	   	  <div class="container">
	   	  	 <div class="slide-img" style="background-image: url(<?php echo $img; ?>);"></div>
	   	  </div>
	    </div>
	  <?php } ?>
	  
	  </div>
	
	</div>
	
	<div class="shadow"></div>

</section>