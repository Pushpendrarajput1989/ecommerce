<?php
/**
 * Review Comments Template
 *
 * Closing li is left out on purpose!.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/review.php.
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
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div class="additional_info_sub_grids">
	<div class="col-xs-2 additional_info_sub_grid_left">
		<?php
		/**
		 * The woocommerce_review_before hook
		 *
		 * @hooked woocommerce_review_display_gravatar - 10
		 */
		do_action( 'woocommerce_review_before', $comment );
		?>
	</div>
	<div class="col-xs-10 additional_info_sub_grid_right">
		<div class="additional_info_sub_grid_rightl">
		<?php 
			do_action( 'woocommerce_review_meta', $comment ); 
			do_action( 'woocommerce_review_before_comment_text', $comment ); 
			do_action( 'woocommerce_review_comment_text', $comment );
			do_action( 'woocommerce_review_after_comment_text', $comment );
		?>
		</div>
		<div class="additional_info_sub_grid_rightr">
			<?php do_action( 'woocommerce_review_before_comment_meta', $comment ); ?>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
</div>
