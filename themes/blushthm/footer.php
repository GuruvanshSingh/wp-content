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

<!-- A custom WP_Query() for my Cake posts -->
<div class="grid-container">
	<div class="grid-x grid-padding-x">
		<?php
		$cake_args = array(
			'post_type' => 'blushthm_cake',
			'posts_per_page' => 3,
		);

		$cake_query = new WP_Query( $cake_args );

		if ( $cake_query->have_posts() ) {
			while ( $cake_query->have_posts() ) {
				$cake_query->the_post();
				?>
					<!-- Title -->
					<div class= "small-12 large-12 cell">
						<h3 class= "qTitle"><?php the_title(); ?></h3>
					</div>
					<!-- Featured Image post type -->
					<div class= "qpic">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class= "small-12 large-12 cell text">
						<!-- Excerpt of post type -->
						<p class= "qExcerpt"><?php the_excerpt(); ?></p>
						<!-- Post Link of post type -->
						<p class= "qPostLink"><?php echo '<a href="' . esc_url( get_permalink() ) . '" class="qLink">Read more</a>'?></p>
					</div>
				<?php
			}
		}
		?>
	</div>
</div>


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
