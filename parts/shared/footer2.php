	</div>
	
	<footer role="site-info">
		<div class="container">
			<div class="row">
				<div class="col-xs-3">
					<div class="icon-links">
						<h3>Social</h3>
						<ul class="list-unstyled">
						<?php
						$social_links = get_field('social_links', 'option');
						$social_links_counter = 0;
						$social_links_total = count($social_links);
						?>
						
							<?php foreach ($social_links as $link) { 
							$social_links_counter++;	
							?>
							<li class="<?php echo ($social_links_total > 10 && $social_links_counter > 9) ? 'hidden-link': 'visible-link'; ?>">
								<a href="<?php echo $link['social_url']; ?>" title="View: <?php echo $link['social_title']; ?>" target="_blank">
									<i class="fa <?php echo $link['social_icon']; ?> fa-2x"></i> 
									<span><?php echo $link['social_title']; ?></span>
							</a>
							</li>
							
								<?php if ($social_links_total > 10) { ?>
								<li class="more-link"><button><i class="fa fa-angle-double-down fa-2x"></i> <span>More</span></button></li>
								<?php }  ?>
								
							<?php } ?>
						</ul>
					</div>
				</div>
				
				<div class="col-xs-3 col-xs-push-6">
					<div class="icon-list">
						<h3>Skills</h3>
						
					</div>
				</div>
				
				<div class="col-xs-6 col-xs-pull-3">
					
					<div class="row">
						<div class="col-xs-3">
						<h3>Work</h3>
						<ul class="list-unstyled footer-links">
							<li><a href="#" title=""><span>Graphic design</span></a></li>
							<li><a href="#" title=""><span>Editorial design</span></a></li>
							<li><a href="#" title=""><span>Web design</span></a></li>
							<li><a href="#" title=""><span>Illustration</span></a></li>
						</ul>

						</div>
						<div class="col-xs-3">
						<h3>Info</h3>
						<ul class="list-unstyled footer-links">
							<li><a href="#" title=""><span>About</span></a></li>
							<li><a href="#" title=""><span>Contact</span></a></li>
							<li><a href="#" title=""><span>Areas</span></a></li>
							<li><a href="#" title=""><span>Blog</span></a></li>
						</ul>
						</div>
						<div class="col-xs-5">
						<h3>Get in touch</h3>
						</div>
					</div>
				
				</div>
			</div>
		</div>
		<div class="extras">
			<div class="container">
				<div class="row">
					<div class="col-xs-6">
						<small class="copyright">&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</small>
					</div>
					<div class="col-xs-6">
						<ul class="list-unstyled legal-links">
							<li><a href="#" title="">Website Terms</a></li>
							<li><a href="#" title="">Privacy Policy</a></li>
							<li><a href="#" title="">Cookie Policy</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</footer>
	
	<div class="mask"></div>
	
</div>