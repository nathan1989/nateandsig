<header class="banner">
    <!-- giant image thing goes here (homepage only) -->
    <?php
    if (  is_front_page() ) { ?>
      <div class="uk-container uk-container-center uk-margin-top uk-margin-bottom">
        <img src="<?= get_template_directory_uri(); ?>/dist/images/cover.jpg" class="ns-cover-image" />
      </div>
    <?php } ?>
    <!-- Nathan and Sigourney text -->
    <div class="uk-text-center">
    <a class="uk-display-inline-block ns-logo" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    </div>

    <!-- Nav, every page -->
    <nav class="uk-navbar uk-text-center">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'uk-navbar-nav uk-clearfix ns-main-nav']);
      endif;
      ?>
    </nav>
</header>
