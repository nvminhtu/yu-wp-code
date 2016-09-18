<?php if(is_home()||is_front_page()) {
    $menu_class = " fixed";
} else {
    $menu_class = '';
} ?>

<div id="sticky_menu_header" class="clearfix<?php echo $menu_class; ?>">
  <div class="inner clearfix">
    <div class="sticky_menu_top">
      <p id="stiky_logo"><a href="<?php bloginfo('siteurl'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo_sticky.png" alt="" /></a></p>
      <div id="btn_menu"><a href="javascript:void(0)">
        <div id="nav-icon"> <span></span> <span></span> <span></span> <span></span> </div>
        </a></div>
      <!-- nav for PC -->
      <?php
      $arg_sticky = array (
                        'theme_location' => 'sticky-menu-pc',
                        'menu_id' => 'list_menutop_sticky'
                      );
        wp_nav_menu($arg_sticky);
      ?>
      
      <!-- nav for PC -->

      <!-- nav for SP -->
      <?php
       $arg_sticky_2 = array (
                        'theme_location' => 'sticky-menu-sp',
                        'menu_id' => 'nav_menu_sp'
                      );
        wp_nav_menu($arg_sticky_2);

      ?>



      <!-- nav for SP -->
    </div>
  </div>
</div>
