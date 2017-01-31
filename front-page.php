<?php 
/*
*	Template Name: Front Page
*/
get_header(); ?>

<?php $front_banners = get_field('front_top_banners'); ?>
<?php if($front_banners): ?>
	<section class="slider-parallax-container scroll-1 section">
		<section class="slider-parallax show-loader">
			<div class="front-page-banner swiper-container">
				<div class="swiper-wrapper">
					<?php foreach($front_banners as $banner): ?>
						<section class="swiper-slide">
							<div class="front-page-intro table" style="background-image: url('<?php echo $banner['url']; ?>');">
								
							</div>
						</section>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="home-intro">
				<div class="table">
					<div class="table-cell">
					<div class="container">
						<?php if( get_field('front_page_title') ): ?>
							<h1 class="creme"><?php the_field('front_page_title'); ?></h1>
						<?php endif; ?>
				</div>		
				</div>
				</div>
			</div>
		</section>
	</section>
<?php endif; ?>

<?php if(get_field('section_with_testimonial_title')): ?>
<section class="section-2 common-section white-bg scroll-2 section">
	<div class="container">
		<div class="initial"><img src="<?php echo esc_url( home_url('')); ?>/wp-content/uploads/creme_w_logo.svg" alt=""></div>
		<h2><?php the_field('section_with_testimonial_title'); ?></h2>
		
		<?php the_field('section_with_testimonial_text'); ?>

	</div>
</section>
<?php endif; ?>

<?php if(get_field('section_with_testimonial_testimonial')): 
	  $testimonial_bg = get_field('section_with_testimonial_image');
?>
<section class="section-3 white-bg">
	<div class="container">
		<div class="col-2 fade-in" style="background-image: url('<?php echo $testimonial_bg; ?>');">
			<!-- bg img -->
		</div>
		<div class="col-2 table fade-in">
			<div class="table-cell">
				<blockquote>
					<?php the_field('section_with_testimonial_testimonial'); ?>
				</blockquote>
				
				<div class="quote-by">- <?php the_field('section_with_testimonial_by'); ?></div>
			</div>
			
		</div>
	</div>
</section>
<?php endif; ?>

<?php if(get_field('section_with_full_image_title')): ?>
<section class="section-4 common-section white-bg scroll-3 section">
	<div class="container" style="padding-left: 0px !important; padding-right: 0px !important;">
		<div class="initial"><img src="<?php echo esc_url( home_url('')); ?>/wp-content/uploads/creme_w_logo.svg" alt=""></div>
		<h2><?php the_field('section_with_full_image_title'); ?></h2>
		<?php the_field('section_with_full_image_text'); ?>
	</div>
</section>
<section class="banner-2 parallax" style="background-image: url('<?php echo get_field('section_with_full_image_image'); ?>');">
		<!-- banner-2 -->
</section>
<?php endif; ?>

<?php if(get_field('section_with_two_images_title')): ?>
<section class="section-5 common-section scroll-4 section">
	<div class="container">
		<div class="initial"><img src="<?php echo esc_url( home_url('')); ?>/wp-content/uploads/creme_w_logo.svg" alt=""></div>
		<h2><?php the_field('section_with_two_images_title'); ?></h2>
		<?php the_field('section_with_two_images_text'); ?>
	</div>
</section>
<section class="banner-2 col-2" style="background-image: url('<?php echo get_field('section_with_two_images_image_left'); ?>');">
		<!-- banner-2 -->
</section>
<section class="banner-2 col-2" style="background-image: url('<?php echo get_field('section_with_two_images_image_right'); ?>');">
	<!-- banner-2 -->
</section>
<?php endif; ?>

<?php if(get_field('section_with_testimonial_2_title')): ?>
<section class="section-2 common-section white-bg scroll-5 section">
	<div class="container">
		<div class="initial"><img src="<?php echo esc_url( home_url('')); ?>/wp-content/uploads/creme_w_logo.svg" alt=""></div>
		<h2><?php the_field('section_with_testimonial_2_title'); ?></h2>
		<?php the_field('section_with_testimonial_2_text'); ?>
	</div>
</section>
<section class="section-3 section-3c white-bg">
	<div class="container">
		<div class="col-2 fade-in" style="background-image: url('<?php echo get_field('section_with_testimonial_2_image'); ?>');">
			<!-- bg img -->
		</div>
		<div class="col-2 table fade-in">
			<div class="table-cell">
				<blockquote><?php the_field('section_with_testimonial_2_testimonial'); ?></blockquote>
			<div class="quote-by">- <?php the_field('section_with_testimonial_by_2'); ?></div>	
			</div>
			
		</div>
	</div>
</section>
<?php endif; ?>

<section class="banner-3 parallax" style="background-image: url('<?php echo get_field('front_bottom_image_image'); ?>');">
	<!-- banner-3 -->
</section>

<?php include (TEMPLATEPATH . '/lets-talk.php'); ?>

<div class="scroll-down-wrapper">
	<div class="scroll-down">
	<!-- Scroll more button on home page -->
	</div>
</div>


<?php get_footer(); ?>