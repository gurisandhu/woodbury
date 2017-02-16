<?php 
/*
*	Template Name: Advisers
*/

get_header();
 ?>

<?php include (TEMPLATEPATH . '/top-section.php'); ?>

<section class="inner-intro section-4 team">
	<div class="edges">
		<div class="container">
			
			<?php include (TEMPLATEPATH . '/intro-section.php'); ?>
				<?php if(have_rows('advisers_repeater')): ?>
				<section>
					<?php while (have_rows('advisers_repeater')): the_row(); ?>
				
						<?php if (!get_sub_field('advisers_category')): ?>
					
							<div class="col-2 team-fade-in">
								<div class="member" style="background-image: url('<?php echo get_sub_field('advisers_profile_image') ?>');">
								</div>
								<h5><?php echo get_sub_field('advisers_name'); ?></h5>
								<h4><?php echo get_sub_field('advisers_position'); ?></h4>
							</div>

				<?php endif; ?>
				<?php endwhile; ?> 
					</section>
				<?php endif; ?>
				
				<?php if(have_rows('advisers_repeater')): ?>
				<section>
				<h3 class="row department">Support Staff</h3>
					<?php while (have_rows('advisers_repeater')): the_row(); ?>
				
						<?php if (get_sub_field('advisers_category')): ?>
					
							<div class="col-2 team-fade-in">
								<div class="member" style="background-image: url('<?php echo get_sub_field('advisers_profile_image') ?>');">
								</div>
								<h5><?php echo get_sub_field('advisers_name'); ?></h5>
								<h4><?php echo get_sub_field('advisers_position'); ?></h4>
							</div>
				<?php endif; ?>
				<?php endwhile; ?> 
					</section>
				<?php endif; ?>
			
				
		</div>
	</div>
</section>

<?php include (TEMPLATEPATH . '/bottom-section.php'); ?>

<?php include (TEMPLATEPATH . '/lets-talk.php'); ?>
	

<?php get_footer(); ?>