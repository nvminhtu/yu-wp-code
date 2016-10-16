<?php get_header(); ?>
<!-- main start -->

<div id="main" class="clearfix">
  <div class="inner ftb">
    <div id="topic_path" class="clearfix">
      <ul>
        <li><a href="<?php bloginfo('siteurl'); ?>">HOME</a> &gt; </li>
        <li>お知らせ</li>
      </ul>
    </div>
    <div id="container" class="clearfix">
      <div id="content" class="clearfix">
        <div class="box_archive_news clearfix">
          <?php
            global $post;
            global $wp_query;
            global $numposts;

            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array(
          		'post_type' =>'news',
          		'posts_per_page' => -1,
          		'orderby' => date,
          		'order' => desc,
          		'field' => 'slug',
          		'paged' => $paged
          	);

            $blog_posts = get_posts($args);
        		if($blog_posts) {
              foreach($blog_posts as $post) : setup_postdata($post);
                $time = get_the_date('Y.m.d', $post->ID);
                $firstname = get_the_author_meta( 'user_firstname' );
                $lastname = get_the_author_meta( 'user_lastname' );
                $img_news = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_news');
                $img_news_src = $img_news[0];
              ?>
              <div class="box_list_news clearfix">
                <div class="ar_news_img clearfix">
                  <p>
                    <a href="<?php echo get_permalink(); ?>">
                      <?php if(has_post_thumbnail()) { ?>
                        <img src="<?php echo $img_news_src; ?>" width="" />
                      <?php } else { ?>
                        <img src="<?php bloginfo('template_url'); ?>/images/groovoost-featured-image.png" width="" />
                      <?php }?>
                    </a>
                  </p>
                </div>
                <div class="ar_news_ct clearfix">
                  <div class="ar_news_ct_inner clearfix">
                    <p class="ar_news_title clearfix"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a><p>
                    <p class="ar_news_time clearfix"><?php echo $time; ?></p>
                  </div>
                </div>
              </div>
              <?php endforeach;
            }
          ?>

          <!--end news list--></div>
        <!-- <p class="btn btn01 btn_hblue btn_mw500"><a id="more_blog" href="javascript:void(0)"><span>もっと見る</span></a></p> -->
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<!-- main end -->
<?php get_footer(); ?>
