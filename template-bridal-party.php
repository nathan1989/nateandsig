<?php
/**
 * Template Name: Bridal party Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
<?php endwhile; ?>
<div class="ns-people-wrapper">

	<?php if( have_rows('about_us') ):?>

		<!-- top section -->
		<div class="uk-text-center uk-margin-large-bottom ns-people ns-people-large">
		<?php while( have_rows('about_us') ): the_row();

			// vars
			$image = get_sub_field('about_us_photo');
			$size = 'medium';
			$name = get_sub_field('about_us_name');
			$content = get_sub_field('about_us_content');

			$photo = wp_get_attachment_image_src($image, $size);

			?>

			<div class="">
		    	<img src="<?php echo $photo[0]; ?>" alt="<?php echo $name; ?>" class="uk-border-circle">
			    <div class="ns-people-caption">
				    <h2 class="uk-text-center"><?php echo $name; ?></h2>
				    <?php echo $content; ?>
			    </div>
			</div>

		<?php endwhile; ?>
		</div>

	<?php endif; 

	 if( have_rows('about_groomsmen') ):?>

		<div class="uk-container-center">
		<div class="uk-grid uk-width-medium-2-3 uk-container-center uk-grid-collapse">
		<?php while( have_rows('about_groomsmen') ): the_row();

			// vars
			$image = get_sub_field('about_groomsmen_photo');
			$size = 'bridal-medium';
			$name = get_sub_field('about_groomsmen_name');
			$content = get_sub_field('about_groomsmen_content');

			$photo = wp_get_attachment_image_src($image, $size);

			?>

			<div class="uk-width-small-1-2 uk-text-center uk-margin-bottom" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay: 400}">
				<?php if($image): ?>
		    		<img src="<?php echo $photo[0]; ?>" alt="<?php echo $name; ?>" class="uk-border-circle">
				<?php else: ?>
					<img src="https://placeholdit.imgix.net/~text?txtsize=28&txt=image&w=200&h=200" alt="" class="uk-border-circle">
		    	<?php endif; ?>
			    <div class="ns-people-caption">
				    <h2 class="uk-text-center"><?php echo $name; ?></h2>
				    <?php echo $content; ?>
			    </div>
			</div>

		<?php endwhile; ?>
		</div>

	<?php endif; 
	if( have_rows('about_bridesmaids') ):?>

		<div class="uk-grid uk-width-medium-2-3 uk-container-center uk-grid-collapse">
		<?php while( have_rows('about_bridesmaids') ): the_row();

			// vars
			$image = get_sub_field('about_bridesmaids_photo');
			$size = 'bridal-medium';
			$name = get_sub_field('about_bridesmaids_name');
			$content = get_sub_field('about_bridesmaids_content');

			$photo = wp_get_attachment_image_src($image, $size);

			?>

			<div class="uk-width-small-1-2 uk-text-center uk-margin-bottom" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay: 400}">
				<?php if($image): ?>
		    		<img src="<?php echo $photo[0]; ?>" alt="<?php echo $name; ?>" class="uk-border-circle">
				<?php else: ?>
					<img src="https://placeholdit.imgix.net/~text?txtsize=28&txt=image&w=200&h=200" alt="" class="uk-border-circle">
		    	<?php endif; ?>
			    <div class="ns-people-caption">
				    <h2 class="uk-text-center"><?php echo $name; ?></h2>
				    <?php echo $content; ?>
			    </div>
			</div>

		<?php endwhile; ?>
		</div>

	<?php endif; ?>

	</div>


	<?php if( have_rows('about_flower_girls') ):?>

		<div class="uk-text-center uk-margin-large-bottom ns-people ns-people-small">
		<?php
			$i = -100;
			 while( have_rows('about_flower_girls') ): the_row();
			 $i+=100;
			// vars
			$image = get_sub_field('about_flower_girls_photo');
			$size = 'bridal-small';
			$name = get_sub_field('about_flower_girls_name');
			$content = get_sub_field('about_flower_girls_content');

			$photo = wp_get_attachment_image_src($image, $size);

			?>

			<div data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay: <?php echo $i; ?>}">
				<?php if($image): ?>
		    		<img src="<?php echo $photo[0]; ?>" alt="<?php echo $name; ?>" class="uk-border-circle">
				<?php else: ?>
		    		<img src="https://placeholdit.imgix.net/~text?txtsize=28&txt=image&w=180&h=180" alt="" class="uk-border-circle">
		    	<?php endif; ?>
				<div class="ns-people-caption">
					<h2 class="uk-text-center"><?php echo $name; ?></h2>
					<?php echo $content; ?>
				</div>
			</div>

		<?php endwhile; ?>
		</div>

	<?php endif; ?>

</div>


