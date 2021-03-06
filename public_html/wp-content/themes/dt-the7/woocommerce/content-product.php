<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<?php do_action( 'presscore_before_post' ); ?>

<article <?php post_class( 'post' ); ?>>

	<?php
	woocommerce_show_product_loop_sale_flash();
	if('list' === presscore_config()->get( 'layout' )){
		dt_woocommerce_template_product_desc_for_list();
	}else {

		// if ( 'under_image' == presscore_get_config()->get( 'post.preview.description.style' ) || 'wc_btn_on_hoover' == presscore_get_config()->get( 'post.preview.description.style' ) || 'wc_btn_on_img' == presscore_get_config()->get( 'post.preview.description.style' ) ) {

			dt_woocommerce_template_product_desc_under();

		//}
	}
	?>

</article>

<?php do_action( 'presscore_after_post' ); ?>
