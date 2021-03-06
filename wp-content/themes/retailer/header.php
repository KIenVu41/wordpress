<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package retailer
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="hfeed site">
	<?php
	do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="top-area">
			<div class="col-full">
				<?php

				do_action('retailer_skip_links');

				/**
				* retailer_social_media_links hook
				*
				* @hooked retailer_social_media_links - 10
				* @hooked retailer_secondary_navigation - 15
				*/	
				do_action( 'retailer_header_top' ); ?>
			</div>
		</div> <!-- second-nav -->
		<div class="col-full">

			<?php
			do_action( 'retailer_header_logo' );
			?>
			<div class="navigation-area">
				<?php 
				/**
				* retailer_header_nav hook
				*
				* @hooked storefront_header_cart - 60
				*/	
				do_action( 'retailer_header_nav' ); ?>
			</div>
			<span class="clearfix"></span>
		</div>
	</header><!-- #masthead -->
	
	<?php if(is_page_template( 'template-homepage.php' )){ ?>
	<div id="banner-area">
			<?php
				/**
				* retailer_slider hook
				*
				* @hooked retailer_featured_slider - 60
				*/	 
				do_action('retailer_slider');
			?>

	</div> <!-- banner-area -->
	<?php }  ?>

	<?php if(!is_front_page()){ ?>
	<div class="title-holder" <?php if ( get_header_image() != '' ) { echo 'style="background-image: url(' . esc_url( get_header_image() ) . ');"'; } ?>>
		<div class="col-full">
			<div class="breadcrumbs-area">
				<?php
				/**
				 * @hooked woocommerce_breadcrumb - 10
				 */
				do_action( 'retailer_breadcrumb' ); ?>
			</div>
				<?php
				/**
				 * @hooked retailer_inner_title - 10
				 */
				do_action( 'retailer_title' ); ?>
			
			<span class="clearfix"></span>
		</div>
		<span class="overlay"></span>
	</div>
	<?php } ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">
				<?php
				/**
				 * @hooked retailer_shop_messages - 10
				 */
				do_action( 'retailer_shop_messages' ); ?>