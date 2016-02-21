<?php
/**
 * Template Name: Bridal party Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
<div class="ns-thumbnail-wrapper">

	<?php if( have_rows('about_us') ):?>

		<!-- top section -->
		<div class="uk-container-center ns-2-col-wrapper">
			<div class="uk-grid">

		<?php while( have_rows('about_us') ): the_row();

			// vars
			$image = get_sub_field('about_us_photo');
			$size = 'medium';
			$name = get_sub_field('about_us_name');
			$content = get_sub_field('about_us_content');

			$photo = wp_get_attachment_image_src($image, $size);

			?>

			<div class="uk-width-medium-1-2">
				<div class="uk-thumbnail">
			    	<img src="<?php echo $photo[0]; ?>" alt="<?php echo $name; ?>" class="uk-border-circle">
				    <div class="uk-thumbnail-caption">
					    <h2 class="uk-text-center"><?php echo $name; ?></h2>
					    <?php echo $content; ?>
				    </div>
				</div>
			</div>

		<?php endwhile; ?>

			</div>
		</div>

	<?php endif; ?>

	<div class="uk-container-center ns-8-col-wrapper">
		<div class="uk-grid">

			<div class="uk-grid uk-width-medium-1-2 uk-grid-collapse">
				<div class="uk-width-medium-1-2">
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
				<div class="uk-width-medium-1-2">
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
				<div class="uk-width-medium-1-2">
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
				<div class="uk-width-medium-1-2">
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

			<div class="uk-grid uk-width-medium-1-2 uk-grid-collapse">
				<div class="uk-width-medium-1-2">
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
				<div class="uk-width-medium-1-2">
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
				<div class="uk-width-medium-1-2">
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
				<div class="uk-width-medium-1-2">
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

		</div>
	</div>

	<div class="uk-container-center ns-4-col-wrapper">
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
	</div>

</div>


