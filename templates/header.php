<header class="banner">
    <!-- giant image thing goes here (homepage only) -->
    <?php
    use Roots\Soil\Nav;

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
        // wp_nav_menu( array(
        //   'theme_location' => 'primary_navigation',
        //   'walker' => new NavWalker(),
        // ) );
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
    <!-- Nav, every page -->
    <?php
      $menu_name = 'primary_navigation';
      $locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
      $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
    ?>

    <nav class="uk-navbar uk-text-center">
    <ul class="uk-navbar-nav uk-clearfix ns-main-nav">
        <?php
        $count = 0;
        $submenu = false;
        foreach( $menuitems as $item ):
            $link = $item->url;
            $title = $item->title;
            // item does not have a parent so menu_item_parent equals 0 (false)
            if ( !$item->menu_item_parent):
            // save this id for later comparison with sub-menu items
            $parent_id = $item->ID;

        ?>
        <li class="uk-parent<?php if (is_page($title)) echo ' uk-active'; ?>" data-uk-dropdown>
            <a href="<?php echo $link; ?>">
                <?php echo $title; ?>
            </a>
        <?php endif; ?>

            <?php if ( $parent_id == $item->menu_item_parent ): ?>
                <?php if ( !$submenu ): $submenu = true; ?>
                <div class="uk-dropdown uk-dropdown-navbar">
                <ul class="uk-nav uk-nav-navbar">
                <?php endif; ?>

                    <li class="item">
                        <a href="<?php echo $link; ?>" class="title"><?php echo $title; ?></a>
                    </li>

                <?php if ( !isset($menuitems[ $count + 1 ]) || $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
                </ul>
                </div>
                <?php $submenu = false; endif; ?>

            <?php endif; ?>

        <?php if ( !isset($menuitems[ $count + 1 ]) || $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
        </li>                           
        <?php $submenu = false; endif; ?>

    <?php $count++; endforeach; ?>

    </ul>
    </nav>
</header>
