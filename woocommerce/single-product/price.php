<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.9
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">

	<p class="price"><?php echo $product->get_price_html(); ?></p>

	<?php if (!wc_memberships_is_user_active_member( $user_id, 'premium-membership' )) {
		$normal_price = get_post_meta( get_the_ID(), '_regular_price', true);
		$normal_sale = get_post_meta( get_the_ID(), '_sale_price', true);
		if($sale) {
			$memPrice = round($sale * 0.8, 2);
		} else {
			$memPrice = round($price * 0.8, 2);
		}
		echo '<span class="mem-price">Premium Member Sale Price: $'.$memPrice.'</span>';

	} elseif (wc_memberships_is_user_active_member( $user_id, 'premium-membership' )) {
		$price = get_post_meta( get_the_ID(), '_regular_price', true);
		$sale = get_post_meta( get_the_ID(), '_sale_price', true);
		if($sale) {
			$memPrice = round($sale * 0.8, 2);
		} else {
			$memPrice = round($price * 0.8, 2);
		}
		
		echo '<span class="mem-price mem-price-premium">Premium Member Sale Price: $'.$memPrice.'</span>';
	}
	?>

	<meta itemprop="price" content="<?php echo esc_attr( $product->get_price() ); ?>" />
	<meta itemprop="priceCurrency" content="<?php echo esc_attr( get_woocommerce_currency() ); ?>" />
	<link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />

</div>
