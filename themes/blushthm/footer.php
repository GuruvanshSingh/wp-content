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
<div class="large-12 cell custom-title"> You Want a Piece of Me?</div>

	<div class="grid-x grid-padding-x custom-posts-section">
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
				<div class= "small-12 large-4 cell">
					<!-- Title -->
					<div class= "custom-post-title">
						<h3 class= "qTitle"><?php the_title(); ?></h3>
					</div>
					<!-- Featured Image post type -->
					<div class= "custom-post-image">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class= "custom-post-excerpt">
						<!-- Excerpt of post type -->
						<p class= "qExcerpt"><?php the_excerpt(); ?></p>
						<!-- Post Link of post type -->
						<p class= "qPostLink"><?php echo '<a href="' . esc_url( get_permalink() ) . '" class="qLink">Read more</a>'?></p>
					</div>
			</div>
				<?php
			}
		}
		?>
	</div>
	
<!-- Custom post ended -->



<!-- Footer Begins -->
	<div class="grid-x grid-padding-x grid-container ">
		<!-- Footer left column -->
        <div class="large-4 footer columns">
			<h4 class="h3-subtitle" style="margin-top: 20px;">Newsletter</h4>
			<h2>Do You Want Extra Discount?</h2>
			<h3>Subscribe to our Newsletters.</h3>
		</div>
				<!-- Footer senter column -->
        <div class="large-4 columns">
			<ul class="menu vertical">
				<a class="footer-links" href="http://sweetscoop.local/about/"><h3>About</h3></a>
				<a class="footer-links" href="http://sweetscoop.local/blog/"><h3>Blog</h3></a>
				<a class="footer-links" href="http://sweetscoop.local/contact/"><h3>Contact</h3></a>
			</ul>
        </div>
				<!-- Footer right column -->
        <div class="large-4 footer columns">
			<div class="site-branding">
				<?php
					the_custom_logo();  //footer logo
				?>
			</div>
        </div>
    </div>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
