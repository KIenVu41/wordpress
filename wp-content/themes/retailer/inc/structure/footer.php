<?php
/**
 * Template functions used for the site footer.
 *
 * @package retailer
 */

if ( ! function_exists( 'retailer_credit' ) ) {
	/**
	 * Display the theme credit
	 * @since  1.0.0
	 * @return void
	 */
	function retailer_credit() {
		?>
		<div class="site-info">
			<?php echo esc_html( apply_filters( 'storefront_copyright_text', $content = '&copy; ' . get_bloginfo( 'name' ) . ' ' . date( 'Y' ) ) ); ?>
			<?php if ( apply_filters( 'storefront_credit_link', true ) && is_home() || is_front_page()) { ?>
			<?php printf( __( '| Thanks to %1$s - %2$s Theme by %3$s.', 'retailer' ), '<a href="https://wordpress.org/" alt="WordPress &lt; Blog Tool, Publishing Platform, and CMS" title="WordPress › Blog Tool, Publishing Platform, and CMS" rel="nofollow" target="_blank">WordPress</a>', '<a href="https://wpdevshed.com/themes/retailer/" rel="nofollow" alt="Retailer Theme" title="Retailer Theme" target="_blank">Retailer</a>' ,'WP Dev Shed' ); ?>
			<?php } ?>
		</div><!-- .site-info -->
		<?php
	}
}