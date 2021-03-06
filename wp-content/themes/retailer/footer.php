<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package retailer
 */
?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php if( class_exists( 'WooCommerce' ) ): ?>
			<?php if( !is_cart() && !is_checkout()): ?>
				<div class="col-full">

					<?php
					/**
					 * @hooked storefront_footer_widgets - 10
					 * 
					 */
					do_action( 'retailer_footer_widgets' ); ?>

				</div><!-- .col-full -->
			<?php endif; ?>

		<?php else: ?>
			
			<div class="col-full">

				<?php
				/**
				 * @hooked storefront_footer_widgets - 10
				 * 
				 */
				do_action( 'retailer_footer_widgets' ); ?>

			</div><!-- .col-full -->

		<?php endif; ?>
		<div class="credits-area">
			<div class="col-full">
			<?php
			/**
			 * @hooked retailer_credit - 20
			 * 
			 */
			do_action( 'retailer_credit_area' ); ?>

			</div><!-- .col-full -->

		</div>
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>