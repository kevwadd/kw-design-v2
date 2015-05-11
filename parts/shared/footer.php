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
							<?php } ?>
							<?php if ($social_links_total > 10) { ?>
							<li class="more-link"><button><i class="fa fa-angle-double-down fa-2x"></i> <span>More</span></button></li>
							<?php }  ?>
						</ul>
					</div>
				</div>
				
				<div class="col-xs-3 col-xs-push-6">
					<div class="icon-list">
						<h3>Skills</h3>
						<ul class="list-unstyled">
						<?php
						$skills = get_field('skills', 'option');
						//echo '<pre>';print_r($skills);echo '</pre>';
						$skills_counter = 0;
						$skills_total = count($skills);
						?>
							<?php foreach ($skills as $skill) { 
							$skills_counter++;	
							?>
							<li class="<?php echo ($skills_total > 10 && $skills_counter > 9) ? 'hidden-link': 'visible-link'; ?>"><figure><img src="<?php echo $skill['skill_icon']; ?>" height="40" width="auto" alt="<?php echo $link['skill_title']; ?>"></figure><span><?php echo $skill['skill_title']; ?></span></li>

							<?php } ?>
							<?php if ($skills_total > 10) { ?>
							<li class="more-link"><button class="inactive"><i class="fa fa-angle-double-down fa-2x"></i><i class="fa fa-angle-double-up fa-2x"></i> <span>More</span></button></li>
							<?php }  ?>
						</ul>
					</div>
				</div>
				
				<div class="col-xs-3 col-xs-pull-3">
					
					<div class="row">
						<div class="col-xs-7 work-links">
						<h3>Work</h3>
						<?php wp_nav_menu(array( 
						'container' => 'false', 
						'menu' => 'Footer work menu', 
						'menu_class'  => 'footer-links list-unstyled',
						'fallback_cb' => false ) ); 
						?>
						</div>
						
						<div class="col-xs-5 info-links">
						<h3>Info</h3>
						<?php wp_nav_menu(array( 
						'container' => 'false', 
						'menu' => 'Footer info menu', 
						'menu_class'  => 'footer-links list-unstyled',
						'fallback_cb' => false ) ); 
						?>
						</div>
					</div>
				
				</div>
				<div class="col-xs-3 col-xs-pull-3 git-links">
					
						<h3>Get in touch</h3>
						<ul class="list-unstyled contact-links">
						<?php
						$footer_emails = get_field('footer_emails', 'option');
						$footer_tel = get_field('footer_tel', 'option');
						?>
							<?php foreach ($footer_emails as $email) { ?>
							<li><a href="mailto:<?php echo $email['footer_email']; ?>" title=""><i class="fa <?php echo $email['email_icon']; ?>"></i> <span><?php echo$email['footer_email']; ?></span></a></li>
							<?php } ?>
							<li><a href="tel:<?php echo $footer_tel; ?>" title=""><i class="fa fa-comments"></i> <span><?php echo $footer_tel; ?></span></a></li>
						</ul>
				
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
						<?php wp_nav_menu(array( 
						'container' => 'false', 
						'menu' => 'Legal Menu', 
						'menu_class'  => 'legal-links list-unstyled',
						'fallback_cb' => false ) ); 
						?>
					</div>
				</div>
				
			</div>
		</div>
	</footer>
	
	<div class="mask"></div>
	
</div>