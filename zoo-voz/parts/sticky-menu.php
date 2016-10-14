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
      <!-- nav for blog inner -->

      <div id="blog_menu_top">
        <div class="list_cate_menu clearfix">
          <div class="list_cate_menu_inner clearfix">
            <ul id="list_cate_menu01">
              <?php
                $terms = get_terms(array(
                            'taxonomy' => 'blog-cat',
                            'hide_empty' => true,
                        ));
                $i = 0;
                if ( !empty( $terms ) && !is_wp_error( $terms ) ){
                  foreach ( $terms as $term ) {
                    $i++;
                    ?>
                    <li><a <?php if($i==1) { echo 'class="is-active"'; } ?> href="<?php echo get_term_link($term); ?>" role="#<?php echo $term->slug;?>">
                      <?php echo $term->name; ?></a>
                    </li>
                  <?php }
                }
              ?>
            </ul>
          </div>
        </div>
        <div class="list_single_menu clearfix">
          <div class="list_single_menu_inner clearfix">
            <?php
              $terms = get_terms(array(
                          'taxonomy' => 'blog-cat',
                          'hide_empty' => false,
                      ));
              $i = 0;
              if ( !empty( $terms ) && !is_wp_error( $terms ) ){
                foreach ( $terms as $term ) {
                  $i++;
                  ?>
                  <div id="<?php echo $term->slug; ?>" class="listsgPost clearfix">
                    <ul>
                      <?php
                        global $post;
                        global $wp_query;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $query = new WP_Query( array(
                            'post_type' => 'blog',       // name of post type.
                            'posts_per_page' => 5,
                            'paged' => $paged,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'blog-cat',   // taxonomy name
                                    'field' => 'slug',         // term_id, slug or name
                                    'terms' => $term->slug     // term id, term slug or term name
                                )
                            )
                          ) );
                          $number_blogs = $query->found_posts;
                          while ( $query->have_posts() ) : $query->the_post();
                              $img_sub_menu = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_archive_blog');
                              $img_sub_menu_src = $img_sub_menu[0];
                            ?>
                            <li>
                              <a href="<?php echo get_permalink(); ?>" class="header-dropdown-item">
                                <img class="header-dropdown-image" src="<?php echo $img_sub_menu_src; ?>" >
                                <p class="header-dropdown-title"><?php echo get_the_title(); ?></p>
                              </a>
                            </li>
                          <?php endwhile;
                          wp_reset_query();
                        ?>
                        <li>
                          <div class="header-dropdown-more">
                            <p class="btn btn01 btn_hblue"><a href="<?php echo get_term_link($term); ?>"><span>もっと見る</span></a></p>
                          </div>
                        </li>
                    </ul>
                  </div>
                  <?php }
              }
            ?>
          </div>
        </div>
      </div>
      <!-- //nav for blog inner -->

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
