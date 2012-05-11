<<<<<<< HEAD
<<<<<<< HEAD
<!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title>
		<?php
			/*
=======
=======
>>>>>>> 89d93479215046255d0738824a1ef51cc0947a54
<?php
/**
 * The Header for our theme.
 *
 *
 * @package WordPress
 * @subpackage CodeBrue™
 * @since 
 */

?>

<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<!-- <meta charset="utf-8"> -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<!--
		Make a DNS handshake with a foreign domain, so the connection
		goes faster when the user eventually needs to access it.
		This works well for loading in assets (like images) from another domain,
		or a JavaScript library from a CDN.
	-->
	<link rel="dns-prefetch" href="//ajax.googleapis.com">

	<!-- Hide page from search engines. !IMPORTANT -->
	<meta name="robots" content="noindex">

	<!-- Use the .htaccess and remove these lines to avoid edge case issues. More info: h5bp.com/b/378 -->
	<!--
		IE10 does not support plugins, such as Flash, in Metro Mode.
		If your site requires plugins, you can let users know that via the
		X-UA-Compatible meta element (requiresActiveX=true), which will prompt them to switch to Desktop Mode.
	-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true">

	<title>
		<?php
		/*
<<<<<<< HEAD
>>>>>>> 89d93479215046255d0738824a1ef51cc0947a54
=======
>>>>>>> 89d93479215046255d0738824a1ef51cc0947a54
			 * Print the <title> tag based on what is being viewed.
			 * We filter the output of wp_title() a bit -- see
			 * boilerplate_filter_wp_title() in functions.php.
			 */
<<<<<<< HEAD
<<<<<<< HEAD
			//wp_title( '|', true, 'right' );
			$title = single_post_title(false, false);
		?>
		<?php echo $title ? $title : 'Make us a '; ?>  &ndash; Codebr.eu 
	</title>
	
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/global.css" /> 
    
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/layout.css" media="all and (min-width: 30em)">
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/layout.css" media="all">
    <![endif]-->
    
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>

	
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
	?>
</head>
<body <?php body_class(); ?>>
	
	<div id="wrapper">

		<header id="header" role="banner">
        
            <a id="logo" href="<?php bloginfo('url');?>" title="Stick a br.eu on">
            	<img src="<?php bloginfo('template_directory'); ?>/assets/images/codebreu-logo.png" alt="Codebr.eu Logo - markup &amp; tea" role="logo" />
            </a>
<?php /*?>        
			<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Input/Output<?php // bloginfo( 'name' ); ?></a></h1>
			<p><?php bloginfo( 'description' ); ?></p>

			<nav id="navigation" role="navigation">
			
				<?php
					// Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.
				?>
				<?php
					//wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) );
				?>

			</nav><!-- #access -->
<?php */?>
		</header>

=======
=======
>>>>>>> 89d93479215046255d0738824a1ef51cc0947a54
			wp_title( '-', true, 'right' );
		?>
	</title>

	<!-- META -->
	<meta http-equiv="Content-Language" content="en-gb">
	<meta http-equiv="imagetoolbar" content="false">
	<meta name="MSSmartTagsPreventParsing" content="true">
	<meta name="robots" content="all">

	<meta name="Author" content="">
	<link type="text/plain" rel="author" href="humans.txt" />
	<meta name="Copyright" content="">

	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="keywords" content="">

	<!--
		Signal to search engines and others "Use this URL for this page!"
		Useful when parameters after a # or ? is used to control the display state of a page.
	-->
	<link rel="canonical" href="">

	<!--
		Enabling your application for pinning will allow IE9 users to add it to their Windows Taskbar and Start Menu.
		Without this rule, Windows will use the page title as the name for your application.
	-->
	<meta name="application-name" content=""> <!-- title -->
	<!-- Tooltip-tip that shit, yo'! -->
	<meta name="msapplication-tooltip" content=""> <!-- tooltip description -->

	<!-- FACEBOOK OPEN GRAPH -->
	<meta property="og:title" content=""/> <!-- subject title -->
	<meta property="og:type" content=""/> <!-- More information: http://developers.facebook.com/docs/opengraph/ -->
	<meta property="og:image" content=""/> <!-- image must be at least 50px by 50px with a maximum ratio of 3:1 -->
	<meta property="og:url" content=""/> <!-- URL of the page being liked -->
	<meta property="og:site_name" content=""/> <!-- A human-readable name for your site -->
	<meta property="og:description" content=""/> <!-- basic site description -->
	<!-- A comma-separated list of Facebook user IDs or application IDs -->
	<meta property="fb:admins" content=""/> <!-- admin ID -->
	<meta property="fb:app_id" content=""/> <!-- app ID -->


	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/reset.css" /> <!-- reset with clearfix -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/core.css"> <!-- core stylesheet -->

	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/libs/modernizr.min.js?v=2.5.0"></script> <!-- Always check for latest version -->

</head>

	<body <?php body_class(); ?>>
		<header role="banner">
			<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<p><?php bloginfo( 'description' ); ?></p>
		</header>
		<nav id="access" role="navigation">
		  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
			<a id="skip" href="#content" title="<?php esc_attr_e( 'Skip to content', 'boilerplate' ); ?>"><?php _e( 'Skip to content', 'boilerplate' ); ?></a>
			<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #access -->
<<<<<<< HEAD
>>>>>>> 89d93479215046255d0738824a1ef51cc0947a54
=======
>>>>>>> 89d93479215046255d0738824a1ef51cc0947a54
		<section id="content" role="main">
