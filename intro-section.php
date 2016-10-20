<h1><?php the_title(); ?></h1>

<?php if(get_field('intro_paragraph')): ?>
	<div class="intro-text">
		<?php echo get_field('intro_paragraph'); ?>
	</div>
<?php endif; ?>

<?php  if(get_field('text_area_full_width')): ?>
			
	<?php echo get_field('text_area_full_width'); ?>

<?php endif; ?>