<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<!-- GOOGLE TAG MANAGER -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KPJ2674');</script>
	<!-- FIN GOOGLE TAG MANAGER -->
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
             
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

	<?php wp_head(); ?>

	<!-- MENU -->
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-menu-new.css?v04" rel="stylesheet">
	<!-- FOOTER -->
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-footer.css?v02" rel="stylesheet">
	<!-- OVERLAY -->
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-overlay.css?v04" rel="stylesheet">
	<!-- LOADER -->
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-loader.css?v01" rel="stylesheet">
	<!-- EVENTS -->
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-events.css?v08" rel="stylesheet">
	<!-- IKIGAI -->
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-ikigai.css?v5" rel="stylesheet">
	<!-- FINTECH -->
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-fintech.css?v9" rel="stylesheet">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


	<?php if(is_page('boussole')) :?> 
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
	<!-- BOUSSOLE -->
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-boussole.css?v04" rel="stylesheet"> 
	

	<?php else : ?>

	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-src.css" rel="stylesheet"> 
	
	<!-- GENERAL -->
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-general.css?v09" rel="stylesheet">

	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap-theme.min.css" rel="stylesheet">

	<?php if(is_page('boussole')) :?> 
	<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
	<?php endif; ?>

	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-lieu.css?v02" rel="stylesheet">


	<style type="text/css">
		#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	</style>



	<?php endif; ?>

	<style>

		@font-face {
		    font-family: Raleway-Thin;
		    src: url('<?php echo bloginfo('stylesheet_directory').'/fonts/Raleway/Raleway-Thin.ttf';?>');
		    font-weight: normal;
		}
		@font-face {
		    font-family: Raleway-Medium;
		    src: url('<?php echo bloginfo('stylesheet_directory').'/fonts/Raleway/Raleway-Medium.ttf';?>');
		    font-weight: normal;
		}
		@font-face {
		    font-family: Raleway-Regular;
		    src: url('<?php echo bloginfo('stylesheet_directory').'/fonts/Raleway/Raleway-Regular.ttf';?>');
		    font-weight: normal;
		}
		@font-face {
		    font-family: Raleway-Black;
		    src: url('<?php echo bloginfo('stylesheet_directory').'/fonts/Raleway/Raleway-Black.ttf';?>');
		    font-weight: normal;
		}
		@font-face {
		    font-family: Raleway-Bold;
		    src: url('<?php echo bloginfo('stylesheet_directory').'/fonts/Raleway/Raleway-Bold.ttf';?>');
		    font-weight: normal;
		}
		@font-face {
		    font-family: "Raleway-ExtraBold";
		    src: url('<?php echo bloginfo('stylesheet_directory').'/fonts/Raleway/Raleway-ExtraBold.ttf';?>');
		}


		.row-form {
			display:
				<?php 
					if(is_page('cgv' )) 
						{
							echo "none";
						}
					elseif(is_page('mentions-legales'))
						{
							echo "none";
						}
				?>;
		}
		.header-footer {
			display:
				<?php 
					if(is_page('cgv' )) 
						{
							echo "none";
						}
					elseif(is_page('mentions-legales'))
						{
							echo "none";
						}
				?>;
		}

		.main-footer {
			background: url('<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/bg-footer.png';?>');
			background-repeat: no-repeat;
			background-position: center top;
			background-color: transparent;
			background-size: cover;
		}

	</style>

	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','https://connect.facebook.net/en_US/fbevents.js');
	// Insert Your Custom Audience Pixel ID below.// 
	fbq('init', '287560581786127');
	fbq('track', 'PageView');
	</script>
	<!-- Insert Your Custom Audience Pixel ID below. -->
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=287560581786127&ev=PageView&noscript=1"/></noscript>
	<!-- End Facebook Pixel Code -->

	


</head>

<body <?php body_class(); ?>>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KPJ2674"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->


<?php if(is_page('confirmation')) :?> 

<?php else : ?>

<div id="loader"></div>

<?php endif; ?>

<div class="se-pre-con">

<div id="page" class="site">
	  
	<div class="site-inner">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main-2">
			</div><!-- .site-header-main -->
		</header><!-- .site-header -->

		<div id="content" class="site-content">

