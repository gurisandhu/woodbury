<?php 
/*
*	Template Name: Resources
*/

get_header();
 ?>

<?php include (TEMPLATEPATH . '/top-section.php'); ?>

<section class="inner-intro section-4 downloads">
	<div class="edges">
		<div class="container">
			
			<?php include (TEMPLATEPATH . '/intro-section.php'); ?>

			<section>
				<?php if(have_rows('resources_repeater')): ?>
					<ul>
					<?php while (have_rows('resources_repeater')): the_row(); ?>
				
						<?php if(get_sub_field('download_title')): ?>
					
							<li><a href="<?php echo get_sub_field('download_source'); ?>" download><?php echo get_sub_field('download_title'); ?></a></li>
					<?php endif; endwhile;?> 
					</ul>
				<?php endif; ?>
			</section>
		</div>
	</div>
</section>

<?php include (TEMPLATEPATH . '/bottom-section.php'); ?>

<?php include (TEMPLATEPATH . '/lets-talk.php'); ?>
	

<?php get_footer(); ?>