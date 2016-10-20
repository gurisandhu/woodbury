<?php if(get_field('inner_top_banner')): ?>
	<section class="inner-banner parallax" style="background-image: url('<?php echo get_field('inner_top_banner'); ?>');">
	</section>
<?php else: ?>
	<section class="inner-banner parallax" style="background-image: url('<?php bloginfo('template_url'); ?>/compressed/uploads/Woodbury_Samples_TestColours_0001.jpg');">
	</section>	
<?php endif; ?>