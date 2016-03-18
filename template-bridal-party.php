<?php
/**
 * Template Name: Bridal party Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
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

			<div class="uk-width-small-1-2 uk-text-center uk-margin-bottom">
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

			<div class="uk-width-small-1-2 uk-text-center uk-margin-bottom">
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

	<div class="uk-text-center uk-margin-large-bottom ns-people ns-people-small">
		<div>
	    	<img src="https://placeholdit.imgix.net/~text?txtsize=28&txt=image&w=180&h=180" alt="" class="uk-border-circle">
			<h2 class="uk-margin-small-top">Name name</h2>
			<div class="ns-people-caption">
				<p>
				Age: 29<br>
				Job: Retail manager<br>
				How they met us: Family<br>
				Fun fact: Tey ar gay
				</p>
			</div>
		</div>
		<div>
	    	<img src="https://placeholdit.imgix.net/~text?txtsize=28&txt=image&w=180&h=180" alt="" class="uk-border-circle">
			<h2 class="uk-margin-small-top">Name name</h2>
			<div class="ns-people-caption">
				<p>is cool blah blah blah blah blah blah blahis cool blah blah blah blah blah blah blahis cool blah blah blah blah blah blah blah</p>
			</div>
		</div>
		<div>
	    	<img src="https://placeholdit.imgix.net/~text?txtsize=28&txt=image&w=180&h=180" alt="" class="uk-border-circle">
			<h2 class="uk-margin-small-top">Name name</h2>
			<div class="ns-people-caption">
				<p>is cool blah blah blah blah blah blah blahis cool blah blah blah blah blah blah blahis cool blah blah blah blah blah blah blah</p>
			</div>
		</div>
		<div>
	    	<img src="https://placeholdit.imgix.net/~text?txtsize=28&txt=image&w=180&h=180" alt="" class="uk-border-circle">
			<h2 class="uk-margin-small-top">Name name</h2>
			<div class="ns-people-caption">
				<p>is cool blah blah blah blah blah blah blahis cool blah blah blah blah blah blah blahis cool blah blah blah blah blah blah blah</p>
			</div>
		</div>
	</div>

	<!-- <div class="uk-container-center ns-4-col-wrapper">
		<div class="uk-grid">
			<div class="uk-width-medium-1-4">
				<div class="uk-thumbnail">
					<figure class="uk-overlay">
				    	<img src="https://placeholdit.imgix.net/~text?txtsize=28&txt=image&w=200&h=200" alt="" class="uk-border-circle">
					    <figcaption class="uk-overlay-panel uk-text-center"><h2>Name</h2></figcaption>
					</figure>
				    <div class="uk-thumbnail-caption">
				    	wow just wow
				    </div>
				</div>
			</div>
			<div class="uk-width-medium-1-4">
				<div class="uk-thumbnail">
					<figure class="uk-overlay">
				    	<img src="https://placeholdit.imgix.net/~text?txtsize=28&txt=image&w=200&h=200" alt="" class="uk-border-circle">
					    <figcaption class="uk-overlay-panel uk-text-center"><h2>Name</h2></figcaption>
					</figure>
				    <div class="uk-thumbnail-caption">
				    	wow just wow
				    </div>
				</div>
			</div>
			<div class="uk-width-medium-1-4">
				<div class="uk-thumbnail">
					<figure class="uk-overlay">
				    	<img src="https://placeholdit.imgix.net/~text?txtsize=28&txt=image&w=200&h=200" alt="" class="uk-border-circle">
					    <figcaption class="uk-overlay-panel uk-text-center"><h2>Name</h2></figcaption>
					</figure>
				    <div class="uk-thumbnail-caption">
				    	wow just wow
				    </div>
				</div>
			</div>
			<div class="uk-width-medium-1-4">
				<div class="uk-thumbnail">
					<figure class="uk-overlay">
				    	<img src="https://placeholdit.imgix.net/~text?txtsize=28&txt=image&w=200&h=200" alt="" class="uk-border-circle">
					    <figcaption class="uk-overlay-panel uk-text-center"><h2>Name</h2></figcaption>
					</figure>
				    <div class="uk-thumbnail-caption">
				    	wow just wow
				    </div>
				</div>
			</div>
		</div>
	</div> -->

</div>


