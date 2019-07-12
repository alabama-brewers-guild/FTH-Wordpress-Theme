<?php
/**
 * Header-v6 template.
 *
 * @author     ThemeFusion
 * @copyright  (c) Copyright by ThemeFusion
 * @link       http://theme-fusion.com
 * @package    Avada
 * @subpackage Core
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<div class="fusion-header-sticky-height"></div>
<div class="fusion-header">
	<div class="fusion-row">
		<div class="fusion-column col-lg-4 col-md-4 col-sm-4">
			<?php get_template_part( 'templates/menu-mobile-modern' ); ?>
		</div>
		<div class="fusion-column col-lg-4 col-md-4 col-sm-4" style="text-align: center; font-size: 24px; line-height: 32px; font-weight: 400; text-transform: uppercase;vertical-align: middle;letter-spacing:0.1rem; margin: 10px 0;">
			<a href="https://freethehops.org" style="text-decoration: none; color: rgba(255,255,255,0.8);font-family: muli, Helvetica, Tahoma, Geneva, Arial, sans-serif">
				FREE THE HOPS
			</a>
		</div>
		<div class="fusion-column col-lg-4 col-md-4 col-sm-4">
		</div>
		<?php /*
		<div class="fusion-header-v6-content fusion-header-has-flyout-menu-content">
			FREE THE HOPS
			<?php
			$menu = avada_main_menu( true ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.OverrideProhibited
			?>

			<div class="fusion-flyout-menu-icons">
				<?php if ( class_exists( 'WooCommerce' ) && Avada()->settings->get( 'woocommerce_cart_link_main_nav' ) ) : ?>
					<?php
					global $woocommerce;

					$cart_link_text  = '';
					$cart_link_class = '';
					if ( Avada()->settings->get( 'woocommerce_cart_counter' ) && $woocommerce->cart->get_cart_contents_count() ) {
						$cart_link_text  = '<span class="fusion-widget-cart-number">' . $woocommerce->cart->get_cart_contents_count() . '</span>';
						$cart_link_class = ' fusion-widget-cart-counter';
					}
					?>
					<div class="fusion-flyout-cart-wrapper">
						<a href="<?php echo esc_attr( get_permalink( get_option( 'woocommerce_cart_page_id' ) ) ); ?>" class="fusion-icon fusion-icon-shopping-cart<?php echo esc_attr( $cart_link_class ); ?>" aria-hidden="true" aria-label="<?php esc_attr_e( 'Toggle Shopping Cart', 'Avada' ); ?>"><?php echo $cart_link_text; // WPCS: XSS ok. ?></a>
					</div>
				<?php endif; ?>

				<?php if ( 'menu' === Avada()->settings->get( 'slidingbar_toggle_style' ) && Avada()->settings->get( 'slidingbar_widgets' ) ) : ?>
					<?php $sliding_bar_label = esc_attr__( 'Toggle Sliding Bar', 'Avada' ); ?>
					<div class="fusion-flyout-sliding-bar-toggle">
						<a href="#" class="fusion-toggle-icon fusion-icon fusion-icon-sliding-bar" aria-label="<?php echo esc_attr( $sliding_bar_label ); ?>"></a>
					</div>
				<?php endif; ?>

				<?php if ( Avada()->settings->get( 'main_nav_search_icon' ) || Avada()->settings->get( 'mobile_menu_search' ) ) : ?>
					<div class="fusion-flyout-search-toggle">
						<div class="fusion-toggle-icon">
							<div class="fusion-toggle-icon-line"></div>
							<div class="fusion-toggle-icon-line"></div>
							<div class="fusion-toggle-icon-line"></div>
						</div>
						<a class="fusion-icon fusion-icon-search" aria-hidden="true" aria-label="<?php esc_attr_e( 'Toggle Search', 'Avada' ); ?>" href="#"></a>
					</div>
				<?php endif; ?>

				<a class="fusion-flyout-menu-toggle" aria-hidden="true" aria-label="<?php esc_attr_e( 'Toggle Menu', 'Avada' ); ?>" href="#">
					<div class="fusion-toggle-icon-line"></div>
					<div class="fusion-toggle-icon-line"></div>
					<div class="fusion-toggle-icon-line"></div>
				</a>
			</div>
		</div>

		<div class="fusion-main-menu fusion-flyout-menu" role="navigation" aria-label="Main Menu">
			<?php echo $menu; // WPCS: XSS ok. ?>
		</div>

		<?php if ( Avada()->settings->get( 'main_nav_search_icon' ) || Avada()->settings->get( 'mobile_menu_search' ) ) : ?>
			<div class="fusion-flyout-search">
				<?php get_search_form(); ?>
			</div>
		<?php endif; ?>

		<div class="fusion-flyout-menu-bg"></div>
		*/?>
	</div>
</div>
