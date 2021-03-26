<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blush_Theme
 */

/**
 * check if sidebar allowed
 */
if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>

<!--  Widget section -->
<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar' ); ?>
</aside><!-- #secondary -->
