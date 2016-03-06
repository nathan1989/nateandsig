<?php
/**
 * Template Name: Gallery Template
 */
?>


<ul class="uk-thumbnav uk-margin-large-top uk-flex-center">
<?php $this_page_id=$wp_query->post->ID; ?>

	<?php query_posts(array('post_parent' => $this_page_id, 'post_type' => 'page')); while (have_posts()) { the_post(); ?>

        <li>
            <a href="<?php echo get_permalink(); ?>">
        	    <figure class="uk-overlay uk-overlay-hover">
        	        <img class="uk-overlay-scale" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="<?php the_title(); ?>">
        	        <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-ignore"><?php the_title(); ?></figcaption>
        	    </figure>
            </a>
        </li>

<?php } ?>
</ul>
