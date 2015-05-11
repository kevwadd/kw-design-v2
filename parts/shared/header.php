<nav class="side-nav">
	<button id="close-nav" class="btn btn-default"><i class="fa fa-angle-double-right fa-lg"></i><span class="sr-only">Close Navigation</span></button>
	<?php wp_nav_menu(array( 
	'container' => 'false', 
	'menu' => 'Main nav', 
	'menu_class'  => 'menu list-unstyled',
	'fallback_cb' => false ) ); 
	?>
</nav>

<div class="wrapper nav-closed">
	<header role="banner">
		
		<div class="container">
			<div class="row">
				<div class="col-xs-9">
					<a href="/"><?php bloginfo( 'name' ); ?></a>
				</div>
				
				<div class="col-xs-3">
					<button id="site-nav-btn" class="btn btn-default"><i class="fa fa-bars"></i><span class="sr-only">Site Navigation</span></button>
				</div>
		
			</div>
		</div>
		
	</header>
	
	<div id="content">