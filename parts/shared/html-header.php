<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	  	
	  	<?php if (wp_is_mobile()) { ?>
  		<meta name="apple-mobile-web-app-capable" content="yes" />
  		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0" />
	  	<?php } else { ?>
		 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 	
	  	<?php } ?>
	  	

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<!-- <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/> -->
		<?php wp_head(); ?>
		<?php
			if (is_home()) {
			$body_class = 'blog';	
			}
		?>
	</head>
	<body <?php body_class($body_class); ?>>
