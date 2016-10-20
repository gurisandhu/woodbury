<?php 
/*
*	Template Name: Contact page
*/

get_header();
 ?>

<?php include (TEMPLATEPATH . '/top-section.php'); ?>

<section class="inner-intro section-4 contact">
	<div class="edges">
		<div class="container">
			
			<?php include (TEMPLATEPATH . '/intro-section.php'); ?>
			<section>
				<?php if(have_rows('contact_repeater')): ?>
					<?php while (have_rows('contact_repeater')): the_row(); ?>
						<ul>
						<?php if(get_sub_field('contacts_title')): ?>
							<li><?php echo get_sub_field('contacts_title'); ?></li>
						<?php endif;?> 
						<?php if(get_sub_field('contacts_phone')): ?>
							<li><a href="tel:<?php echo get_sub_field('contacts_phone'); ?>">P  <?php echo get_sub_field('contacts_phone'); ?></a></li>
						<?php endif;?> 
						<?php if(get_sub_field('contact_fax')): ?>
							<li>F  <?php echo get_sub_field('contact_fax'); ?></li>
						<?php endif;?> 
						<?php if(get_sub_field('contact_email')): ?>
							<li><a href="mailto:<?php echo get_sub_field('contact_email'); ?>">E  <?php echo get_sub_field('contact_email'); ?></a></li>
						<?php endif;?> 
						<?php if(get_sub_field('contact_address_title')): ?>
							<li><?php echo get_sub_field('contact_address_title'); ?></li>
						<?php endif;?> 
						<?php if(get_sub_field('contact_street_address')): ?>
							<li><a target="_blank" href="http://maps.google.com/?q=<?php echo get_sub_field('contact_street_address'); ?> <?php echo get_sub_field('contact_area'); ?>"><?php echo get_sub_field('contact_street_address'); ?><br><?php echo get_sub_field('contact_area'); ?></a></li>
						<?php endif;?> 
						</ul>
				<?php endwhile; endif; ?>
			</section>
		</div>
	</div>
</section>

<?php include (TEMPLATEPATH . '/bottom-section.php'); ?>

<?php include (TEMPLATEPATH . '/lets-talk.php'); ?>
	

<?php get_footer(); ?>