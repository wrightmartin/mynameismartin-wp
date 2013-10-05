<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>

		<title><?php
			if(!is_home() ) {
				wp_title("");

		  ?> | <?php }  bloginfo( 'name' ); ?></title>


		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />


		<?php wp_head(); ?>

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="author" href="https://plus.google.com/u/0/116176995575308074443/posts"/>

		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>

		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/webfonts/ss-social.css" media="all">
		<link rel="stylesheet" href="https://get.gridsetapp.com/5488/" />

		<!--[if lt IE 9]>
				<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5shiv.js"></script>
		<![endif]-->

		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/medium.min.css" media="all and (min-width:30em)">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/large.min.css" media="all and (min-width: 53.75em)">
		<!--[if lt IE 9]>
				<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/medium.min.css">
				<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/large.min.css">
				<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ie.min.css">
		<![endif]-->

	</head>
	<body <?php body_class(); ?> <?php if (get_field('background_image') || is_front_page() || is_404())  { ?> id="photo" <?php  } else {?>id="no-photo"<?php  } ?>>


