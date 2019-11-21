<?php
/**
 * Theme Header
 *
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @since   1.0.0
 * @package themezero
 *
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />

	<?php wp_head(); ?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-K2P6PKF');</script>
	<!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K2P6PKF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Preloader -->
<div class="preloader">
	<div class="preloader-inner">
		  <span class="fa fa-spinner fa-spin" aria-hidden="true"></span>
	</div>
</div>	
<!-- ./Preloader -->
<!-- Site-header -->
<header id="masthead" class="site-header" itemscope itemtype="http://schema.org/WPHeader">
	<div class="site-header__top">
		<div class="container">
			 <div class="grid">
			 	 <div class="col--left">
			 	 	<?php 
			 	 		$header_info = get_theme_mod('header_info');

			 	 		if( $header_info ) : ?>
			 	 		<span><?php echo $header_info; ?></span>
			 	 	<?php endif; ?>
			 	 </div>
			 	 <div class="col--right">
			 	 	<?php 
			 	 		$header_info2 = get_theme_mod('header_info_2');

			 	 		if( $header_info2 ) : ?>
			 	 		<?php echo $header_info2; ?>
			 	 	<?php endif; ?>
				 </div>
			 </div>
		</div>
	</div>
	<div class="site-header__middle">
		<div class="container">

			<!-- Site-logo --> 
			<div class="site-logo">
				<a href="<?php echo site_url() ?>"><?php themezero_get_logo() ?></a>
			</div>
			<!-- ./Site-logo --> 

			<?php if ( has_nav_menu( 'top' ) ) : ?>
				<!-- Site Nav --> 
				<div class="site-nav">
					<?php get_template_part( 'template-parts/navigation/main', 'menu' ); ?>
					<!-- <?php //if( get_theme_mod('header_button') ) : ?>
			 	 		<?php //echo get_theme_mod('header_button') ?>
			 	 	<?php //endif; ?> -->
				</div>
				<!-- . Site Nav -->
			<?php endif; ?>
		</div>	
	</div>
</header>
<!-- ./Site-header -->
<!-- Accessibility -->
<div class="container screen-reader-text">
	<a href="#main"><?php __( 'Skip to main content', 'themezero') ?></a>	
</div>
<!-- ./Accessibility -->