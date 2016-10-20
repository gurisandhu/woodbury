<?php 
/*
*	Template Name: Two Columns
*/

get_header();
 ?>

<?php include (TEMPLATEPATH . '/top-section.php'); ?>

<section class="inner-intro section-4 section-4c">
	<div class="edges">
		<div class="container">
			
			<?php include (TEMPLATEPATH . '/intro-section.php'); ?>

			<section>
				<?php if(have_rows('two_columns_repeater')): ?>
					<?php while (have_rows('two_columns_repeater')): the_row(); ?>
				
						<?php if(get_sub_field('half_column')): ?>
					
							<div class="col-2">
								<?php echo get_sub_field('half_column'); ?>
							</div>


				<?php endif; endwhile; endif; ?>
			</section>
		</div>
	</div>
</section>

<?php include (TEMPLATEPATH . '/bottom-section.php'); ?>

<?php include (TEMPLATEPATH . '/lets-talk.php'); ?>
	

<?php get_footer(); ?>