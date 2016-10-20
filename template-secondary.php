<?php 
/*
*	Template Name: Secondary
*/

get_header();
 ?>

<?php if(get_field('inner_top_banner')): ?>
	<section class="inner-banner parallax" style="background-image: url('<?php echo get_field('inner_top_banner'); ?>');">
	</section>
<?php else: ?>
	<section class="inner-banner parallax" style="background-image: url('<?php bloginfo('template_url'); ?>/compressed/uploads/Woodbury_Samples_TestColours_0001.jpg');">
	</section>	
<?php endif; ?>

<section class="inner-intro section-4 section-4a">
	<div class="edges">
		<div class="container">
			<h1><?php the_title(); ?></h1>

			<?php if(have_rows('inner_page_sections')): ?> <!-- 1 if -->
				<?php while (have_rows('inner_page_sections')): the_row(); ?>
					
					<?php $introPara = get_sub_field('intro_paragraph'); ?>
					<?php if($introPara): ?>
					
						<?php echo $introPara; ?>

					<?php endif; ?>

					<?php $fullWidth = get_sub_field('text_area_full_width'); ?>
					<?php if($fullWidth): ?>

						<?php echo $fullWidth; ?>

					<?php endif; ?>	

					<?php 
						$leftCol = get_sub_field('left_column');
						$rightCol = get_sub_field('right_column');
					 ?>
					<?php if ($leftCol || $rightCol): ?>
						<div class="col-2">
							<?php echo $leftCol; ?>
						</div>
						<div class="col-2">
							<?php echo $rightCol; ?>
						</div>
	 				<?php endif; ?>

	 				<?php 
	 					$twoThird 	= 	get_sub_field('text_area_23');
	 					$oneThird 	= 	get_sub_field('text_area_13');
	 				 ?>

	 				 <?php if($twoThird || $oneThird): ?>
						<div class="two-third">
							<?php echo $twoThird; ?>
						</div>
						<div class="one-third">
							<?php echo $oneThird; ?>
						</div>
	 				<?php endif; ?>

					<?php 
						$adviserImage 	= 	get_sub_field('advisers_profile_image');
						$adviserCat 	=	get_sub_field('advisers_category');
						$adviserName 	= 	get_sub_field('advisers_name');
						$adviserPos	 	= 	get_sub_field('advisers_position');
					 ?>

					 <?php if($adviserImage): ?>
						<section class="team">
							
						</section>
					<?php endif; ?>

				<?php endwhile; ?> <!-- sections -->
			<?php endif; ?> <!-- sections -->	
		</div>
	</div>
</section>
	


<?php get_footer(); ?>