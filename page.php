<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php 
  // SINGLE GALLERY PAGE
  $images = get_field('gallery_images');

  if( $images ): ?>
      <div data-uk-grid="{gutter: 10}">
          <?php foreach( $images as $image ): ?>
                <div class="uk-width-small-1-2 uk-width-medium-1-4">
          	      <a href="<?php echo $image['sizes']['gallery-image']; ?>" data-uk-lightbox="{group:'group1'}" title="">
          	          <img src="<?php echo $image['sizes']['gallery-image-preview']; ?>" width="800" alt="<?php echo $image['alt']; ?>">
          	      </a>
                </div>
          <?php endforeach; ?>
      </div>
  <?php endif; ?>

<?php endwhile; ?>
