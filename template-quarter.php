<?php 
/*
*	Template Name: Quarter
*/

get_header();
 ?>

<?php include (TEMPLATEPATH . '/top-section.php'); ?>

<section class="inner-intro section-4 section-4c">
	<div class="edges">
		<div class="container">
			
			<?php include (TEMPLATEPATH . '/intro-section.php'); ?>

			<section>

				<?php if (get_field('text_area_23') || get_field('text_area_13')): ?>
				
				<div class="two-third">
					<?php echo get_field('text_area_23'); ?>
				</div>
				<div class="one-third">
					<?php echo get_field('text_area_13'); ?>
				</div>
				
				<?php endif; ?>

			</section>
		</div>
	</div>
</section>

<?php include (TEMPLATEPATH . '/bottom-section.php'); ?>

<?php include (TEMPLATEPATH . '/lets-talk.php'); ?>
	

<?php get_footer(); ?>