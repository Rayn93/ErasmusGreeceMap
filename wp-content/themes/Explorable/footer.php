<?php if ( ! et_is_listing_page() || ( is_single() && 'listing' == get_post_type() ) ) : ?>
	<footer id="main-footer">
		<div class="container">
			<?php get_sidebar( 'footer' ); ?>

			<p id="copyright"><?php printf( __( 'Created by %1$s', 'Explorable' ), '<a href="http://robertsaternus.pl" title="The Best Web Developer">Robert Saternus</a>' ); ?></p>
		</div> <!-- end .container -->
	</footer> <!-- end #main-footer -->
<?php endif; ?>

	<?php wp_footer(); ?>
</body>
</html>