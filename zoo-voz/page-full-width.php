<?php
/**
 * Template Name: Full Width
 * @package WordPress
 * @subpackage GrooVoost
 * @since GrooVoost
 * Content will be gotten from admin editor
 */ ?>
<?php get_header('page'); ?>

<!-- main start -->
<div id="main" class="clearfix">
  <div class="inner ftb">
    <h3 class="title_h301 " data-wow-delay="0.3s">SERVICE<br />
        <span>サービス内容</span></h3>
    <?php
        $default_posts_per_page = get_option( 'posts_per_page' );
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        global $post;
        global $wp_query;

        $args = array(
          'post_type' =>'service',
          'posts_per_page' => -1,
          'orderby' => date,
          'order' => desc,
          'field' => 'slug'
        );
        $the_query = new WP_Query( $args );
        $blog_posts = get_posts($args);
        if($blog_posts) {
        $i=1;
      ?>
      <?php
        foreach($blog_posts as $post) : setup_postdata($post);
          $thumb = get_post_thumbnail_id();
          $img_url = wp_get_attachment_url($thumb,'full'); //get full URL to image

          $time = get_the_date('Y.m.d', $post->ID);
          $nd = get_the_content();
          $id= get_the_ID();
          $service_title = get_the_title($post->ID);
          $service_sub_text = get_field('service_sub_text',$post->ID);
          $service_heading_text = get_field('service_heading_text',$post->ID);
          $service_price = get_field('service_price',$post->ID);
          $service_period = get_field('service_period',$post->ID);
          $service_icon = get_field('service_icon',$post->ID);
          $color_code = get_field('service_color');
          $color_codes = explode("#", $color_code);
          $color_class= 'service-'.$color_codes[1];
          if($i%2==0) {
            $align_class = 'service_boxct_right';
          } else {
            $align_class = 'service_boxct_left';
          }
        ?>
        <a class="box" href="<?php echo get_permalink(); ?>">
          <div class="<?php echo $align_class; ?> service_box clearfix <?php echo $color_class;  ?>" data-cat-color="<?php echo $color_code; ?>">
            <div class="ser_boxct clearfix">
              <h4 id="title_service01" class="title_service"><span class="ser_icon"><img src="<?php echo $service_icon; ?>" /></span><?php echo $service_title; ?></h4>
                <?php echo $service_heading_text; ?>
                <?php the_content(); ?>
                <div class="info_ser clearfix">
                  <ul>
                      <li class="list_price"><?php echo $service_price; ?></li>
                      <li class="list_period"><?php echo $service_period; ?></li>
                    </ul>
                </div>
            </div>
            <div class="ser_img clearfix">
              <p><img src="<?php echo $img_url; ?>" alt="<?php echo $service_sub_text; ?>" /></p>
            </div>
          </div>
        </a>
        <?php
          $i++;
      endforeach;
    }
    ?>
  <!-- .inner ftb --></div>
<!-- #main --></div>

<!-- start blog list -->
<!-- #container03 -->
<div id="container03" class="clearfix">
  <div class="inner clearfix">
    <?php echo do_shortcode('[list_blog]'); ?>
  </div>
</div>
<!-- end blog list -->

<?php get_footer(); ?>
