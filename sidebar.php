<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ljc
 */

if ( ! is_active_sidebar( 'ljc-sidebar' ) ) :
	return;
endif;
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'ljc-sidebar' ); ?>
</aside><!-- #secondary -->
