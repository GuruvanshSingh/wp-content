<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blush_Theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footerLink">
			<div class="footerLeft">
			<h4>Newsletter</h4>
			<h2>Do You Want Extra Discount?</h2>
			<h3>Subscribe to our Newsletters.</h3>
			</div>
			<div class="footerCenter">
			<a href="http://sweetscoop.local/about/"><h3>About</h3></a>
			<a href="http://sweetscoop.local/blog/"><h3>Blog</h3></a>
			<a href="http://sweetscoop.local/contact/"><h3>Contact</h3></a>
		</div>
			<div class="footerRight">
				<div class="logo">
					Sweet <br> Scoop
				</div>
			</div>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'blushthm' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'blushthm' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'blushthm' ), 'blushthm', '<a href="http://guruvanshgarry.com">Guruvansh Singh</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
