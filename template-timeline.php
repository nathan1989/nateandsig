<?php
/**
 * Template Name: Timeline Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<?php if( have_rows('timeline_entry') ): ?>

	<ul class="uk-list tl-wrapper">

	<?php while( have_rows('timeline_entry') ): the_row(); 

		// vars
		$image = get_sub_field('timeline_photo');
		$size = 'medium';
		$title = get_sub_field('timeline_title');
		$text = get_sub_field('timeline_text');

		$photo = wp_get_attachment_image_src($image, $size);

		?>

		<li class="uk-position-relative tl-row">
			<img src="<?php echo $photo[0]; ?>" alt="<?php echo $title; ?>" class="uk-border-circle tl-image" />
			<div class="tl-text">
				<h2 class="uk-h3 tl-title"><?php echo $title; ?></h2>
			    <?php echo $text; ?>
		    </div>
		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>
