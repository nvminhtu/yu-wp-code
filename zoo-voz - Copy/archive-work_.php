<?php get_header('page'); ?>
<!-- main start -->
<div id="main" class="clearfix">
  <div class="inner ftb">
    <div id="topic_path" class="clearfix">
      <ul>
        <li><a href="<?php bloginfo('siteurl'); ?>">HOME</a> &gt; </li>
        <li>実績・事例紹介</li>
      </ul>
    </div>

    <h3 class="title_h301"> WORKS <br>
    <span>実績・事例紹介</span></h3>

    <!-- #show content 01 -->
    <div id="list_cate_works" class="clearfix" data-cat-name="cate0">
      <div class="squaredThree">
        <ul>
          <li><input class="conditon_work" type="checkbox" value="None" id="cate0" name="check" checked="checked" /><label for="cate0">全て</label></li>
          <?php
            $default_posts_per_page = get_option( 'posts_per_page' );
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $my_c = get_query_var( 'category' );
            echo $my_c;

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
            foreach($blog_posts as $post) : setup_postdata($post);
          ?>
          <li class="<?php echo get_the_slug($post->ID); ?>"><input class="conditon_work" type="checkbox" value="None" id="cate<?php echo $i; ?>" name="check" /><label for="cate<?php echo $i; ?>"><?php echo get_the_title($post->ID); ?></label></li>
          <?php
                  $i++;
              endforeach;
              wp_reset_postdata();
            }
          ?>
        </ul>
       </div>
    </div>

    <!-- #show content 01 -->
    <div id="show_content" class="clearfix">
      	<p id="ajax_bg"></p>
        <div class="list_w clearfix">

        <?php
            global $post;
            global $wp_query;
            $args = array(
              'post_type' =>'work',
              'orderby' => date,
              'field' => 'slug',
              'paged' => $paged
            );
            $the_query = new WP_Query( $args );
            $blog_posts = get_posts($args);
            if($blog_posts) {
              $i=1;
          ?>
          <?php
          foreach($blog_posts as $post) : setup_postdata($post);
            $post_categories = wp_get_post_categories(get_the_ID());
            $thumb = get_post_thumbnail_id();
            $img_url = wp_get_attachment_url($thumb,'full'); //get full URL to image
            $img_works_home = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_works_home');
            $img_works_home_src = $img_works_home[0];
            $time = get_the_date('Y.m.d', $post->ID);
            $nd = get_the_content();
            $work_id= get_the_ID();
            $work_title = get_the_title($work_id);
            $work_content = get_the_content($work_id);
          ?>

          <?php
            $post_objects = get_field('selected_service',$post->ID);

            if( $post_objects ):
              foreach( $post_objects as $post):
                setup_postdata($post);
                $field_id = get_the_ID();
                $color_code = get_field('service_color',$field_id);
                  ?>
                  <div class="catew cate1 cate2 box_w clearfix" data-service-color="<?php echo $color_code; ?>">
                    <div class="box_w_top clearfix">
                      <p class="img_lworks"><img src="<?php bloginfo('template_url'); ?>/images/works_img01.jpg" alt="" /></p>
                      <div class="box_lworks_on">
                        <p class="lworks_on_title">「着物企業の採用・ブランディング」 1</p>
                        <p class="lworks_on_title_sub">- 香川県丸亀市 - </p>
                        <p class="lworks_on_des">関西、静岡、四国に着物販売を展開する企業。香川県の亀店店で着物クリーニング事業の広告戦略を展開。夢を持って働ける場所として、社員もいきいきとした姿が出ています。</p>
                        <ul class="list_price">
                          <li>広告費：10万円/月</li>
                          <li>コンバージョン数：20件前後/月</li>
                        </ul>
                        <p class="btn btn_site_adv"><a href="http://www.yumerasen.co.jp/lp" target="_blank">詳しくみる</a></p>
                      </div>
                    </div>
                    <div class="lworks_btitle clearfix">
                      <p class="name_cate_w"><span>サイト制作</span></p>
                      <p class="title_cate_w">人材採用サイト - 夢がある。だから、ここで働く。<br />
                        <span>株式会社夢楽染</span></p>
                    </div>
                  </div>
                  <?php

              endforeach;
              wp_reset_postdata();
            endif;
            $i++;
          endforeach;
        }
        ?>

        </div>
      </div>
    <!-- //#show content 01 -->


  </div>
</div>

<!-- main end -->
<?php get_footer(); ?>
