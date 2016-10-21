<?php get_header(); ?>

<section class="inner-banner parallax" style="background-image: url('<?php bloginfo('template_url'); ?>/compressed/uploads/Woodbury_Samples_TestColours_0001.jpg');">
	
</section>
<section class="inner-intro section-4 contact">
	<div class="edges">
		<div class="container">
			<h1>404 Error: Page Not Found</h1>
			<p class="intro-text">
				Whoops. looks like the page you were looking for does not exit. Maybe try checking in Menu or <a href="<?php echo esc_url( home_url('')); ?>/contact/">contact us</a>.
			</p>
		</div><!-- container -->
	</div><!-- edges -->
</section>

<?php include (TEMPLATEPATH . 'lets-talk.php'); ?>

<?php get_footer(); ?>