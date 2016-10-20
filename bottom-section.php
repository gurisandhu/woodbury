<?php if(get_field('testimonial_&_image_testimonial')): ?>
<section class="section-3b white-bg-2">
	<div class="container">
		<div class="col-2 fade-in" style="background-image: url('<?php echo get_field('testimonial_&_image_image'); ?>');">
			<!-- bg img -->
		</div>
		<div class="col-2 table fade-in">
			<div class="table-cell">
				<blockquote><?php echo get_field('testimonial_&_image_testimonial'); ?></blockquote>
			<div class="quote-by">- <?php echo get_field('testimonial_&_image_quote_by'); ?></div>	
			</div>
			
		</div>
	</div>
</section>
<?php endif; ?>

<?php if(get_field('bottom_image_image')): ?>
<section class="banner-4 parallax" style="background-image: url('<?php echo get_field('bottom_image_image'); ?>');">
	<!-- banner-4 -->
</section>
<?php endif; ?>	