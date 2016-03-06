<header class="banner">
    <!-- giant image thing goes here (homepage only) -->
    <?php
    use Roots\Soil\CustomNav;

    if (  is_front_page() ) { ?>
      <div class="uk-container uk-container-center uk-margin-top uk-margin-bottom">
        <img src="https://placeholdit.imgix.net/~text?txtsize=70&txt=750%C3%97500&w=750&h=500" class="ns-cover-image" />
        <!-- <img src="<?= get_template_directory_uri(); ?>/dist/images/cover.jpg" class="ns-cover-image" /> -->
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
        // wp_nav_menu(['primary_navigation' => 'primary_navigation', 'menu_class' => 'uk-navbar-nav uk-clearfix ns-main-nav']);
        wp_nav_menu( array(
          'theme_location' => 'primary_navigation',
          'walker' => new NavWalker(),
        ) );
      endif;
      ?>
        <!-- <ul class="uk-navbar-nav uk-clearfix ns-main-nav">
            <li class="uk-active"><a href="">Active</a></li>
            <li><a href="">Item</a></li>
            <li class="uk-parent" data-uk-dropdown>
                <a href>Parent <i class="uk-icon-caret-down"></i></a>

                <div class="uk-dropdown uk-dropdown-navbar">
                    <ul class="uk-nav uk-nav-navbar">
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Another item</a></li>
                        <li><a href="#">Separated item</a></li>
                    </ul>
                </div>

            </li>
        </ul> -->
    </nav>
</header>
