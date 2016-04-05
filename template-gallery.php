<?php
/**
 * Template Name: Gallery Template
 */
?>


<?php get_template_part('templates/page', 'header'); ?>
<ul class="uk-thumbnav uk-margin-large-top uk-flex-center">
<?php $this_page_id=$wp_query->post->ID; ?>

	<?php 
		query_posts(array('post_parent' => $this_page_id, 'post_type' => 'page')); while (have_posts()) { the_post(); 
		$image = wp_get_attachment_image( get_post_thumbnail_id($post->ID), 'gallery-album-cover', false, array( 'class' => 'uk-overlay-scale' )  );
	?>

        <li>
            <a href="<?php echo get_permalink(); ?>">
        	    <figure class="uk-overlay uk-overlay-hover">

        	        <?= $image ?>
        	        <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-ignore"><?php the_title(); ?></figcaption>
        	    </figure>
            </a>
        </li>

<?php } ?>
</ul>