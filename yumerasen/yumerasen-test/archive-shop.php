<?php get_header(); ?>
<div id="main" class="clearfix page-shop">
<!-- content start -->
<div id="content">
  <div class="h3-midashi">
    <h3>夢楽染の店舗情報（大阪・兵庫・滋賀・静岡）</h3>
  </div>
  <?php
    $arg = array(
             'post_type' => 'shop',
             'posts_per_page' => '-1'
           );
    $query = new WP_Query( $arg );
    if ( $query->have_posts() ) { ?>
      <?php while ( $query->have_posts() ) {
            $query->the_post();
      ?>
      <div id="<?php if( get_field('slug',$post->ID) ):  echo $slug = get_field('slug',$post->ID);  endif; ?>">
        <div class="shop">
          <h4><?php echo get_the_title($post->ID ); ?></h4>
          <div class="fL">
            <p>
              <a href="<?php echo get_permalink( $post->ID ); ?>">
                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" id="placeholder0" alt="<?php echo get_the_title($post->ID ); ?>" />
              </a>
            </p>
          </div>
          <div class="fR">
            <table summary="<?php echo get_the_title($post->ID ); ?>">
              <tr class="bM">
                <th>住所</th>
                <td><?php if( get_field('address') ): the_field('address'); endif; ?></td>
              </tr>
              <tr class="bN">
                <th>営業時間</th>
                <td><?php if( get_field('opening_hour') ): the_field('opening_hour'); endif; ?></td>
              </tr>
              <tr class="bM">
                <th>TEL</th>
                <td><?php if( get_field('tel') ): the_field('tel'); endif; ?></td>
              </tr>
              <tr class="bN">
                <th>アクセス</th>
                <td><?php if( get_field('access') ): the_field('access'); endif; ?></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="btn-group">
          <p>
            <a href="<?php echo get_permalink( $post->ID ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/btn-detail_off.png" width="208" height="30" alt="詳細情報" /></a>
          </p>
        </div>
      </div>
      <?php
      }
      wp_reset_postdata();
    } ?>
</div>
<!-- content end -->
<?php get_sidebar(); ?>
</div>

	<!-- main end -->
<?php get_footer(); ?>
