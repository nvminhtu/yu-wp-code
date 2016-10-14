
<div id="footer" class="clearfix">
    <!--#to_top start -->
    <div id="to_top">
      <p> <a href="#wrapper">PAGE TOP</a> </p>
    </div>
    <!--#to_top end -->
    <!--#footer_top start -->
    <div id="footer_top" class="clearfix">
      <div class="inner clearfix">
        <div class="footer_top_ct clearfix">
          <div id="footer_link" class="clearfix">
            <div class="flink flink01 clearfix">
              <?php dynamic_sidebar( 'Footer Menu 1' ); ?>
            </div>
            <div class="flink flink02 clearfix">
              <?php dynamic_sidebar( 'Footer Menu 2' ); ?>
            </div>
            <div class="flink flink03 clearfix">
              <?php //dynamic_sidebar( 'Footer Menu 3' ); ?>
              <dl>
                <dt>BLOG</dt>
                <dd>
                  <?php
                    $terms = get_terms( 'blog-cat', array( 'orderby' => 'count', 'hide_empty' => 0, 'order' => 'DESC'));
                    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                      echo '<ul>';
                      $i = 0;
                      foreach ( $terms as $term ) {
                          if($i < 4) {
                            echo '<li><a href="'.get_term_link($term).'">' . $term->name . '</a></li>';
                          }
                          $i++;
                      }
                      echo '</ul>';
                    }
                   ?>
                </dd>
              </dl>
            </div>
          </div>
          <div id="footer_contact" class="clearfix">
            <p class="title_footer_contact">パートナー募集</p>
            <p class="des_footer_contact">Groovoost Inc.では、動画、デザイナー、ライター、カメラマンなど、各クリエイター様とのパートナーを募集しております。ご希望いただける方は、お問い合わせくださいませ。</p>
            <p class="btn_footer_contact btn btn01 btn_hblue"><a href="<?php bloginfo('siteurl'); ?>/contact/"><span>お問い合わせ</span></a></p>
          </div>
        </div>
      </div>
    </div>
    <!--#footer_top end -->
    <!--#footer_info start -->
    <div id="footer_info" class="clearfix">
      <div class="inner clearfix">
        <p id="footer_logo"> <a href="<?php bloginfo('siteurl'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/footer_logo.png" alt="" /></a> </p>
        <div class="box_info_footer">
          <p class="title_name_footer">グルーブースト株式会社<span>Groovoost Inc.</span></p>
          <p class="address_footer ">〒108-0022　東京都港区海岸3-17-7　高取ビル3F</p>
        </div>
        <address>
        &copy; Groovoost Inc.
        </address>
        <p class="totop wow">&nbsp;</p>
      </div>
    </div>
    <!--#footer_info end -->
  </div>
</div>
 <script src="<?php bloginfo('template_url'); ?>/js/jquery.js" type="text/javascript"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/jquery.scroll.js" type="text/javascript"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/rollover.min.js" type="text/javascript"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js" type="text/javascript"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/sweetlink.js" type="text/javascript"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/common.js" type="text/javascript"></script>
 <?php if(is_home()||is_front_page()) { ?>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.bxslider.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/top.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/top-works.js" type="text/javascript"></script>
 <?php }
 else if(is_page('thank-you')){ ?>
	  <script src="<?php bloginfo('template_url'); ?>/js/thanks.js" type="text/javascript"></script>
<?php	}
 
  else { ?>
   <script src="<?php bloginfo('template_url'); ?>/js/under.js" type="text/javascript"></script>
      <script src="<?php bloginfo('template_url'); ?>/js/work.js" type="text/javascript"></script>
 <?php }?>
 <?php if(is_singular('service')) { ?>
 <script src="<?php bloginfo('template_url'); ?>/js/service.js" type="text/javascript"></script>
 <?php } ?>
 <?php if(is_post_type_archive('work')) { ?>
 <script src="<?php bloginfo('template_url'); ?>/js/work-color.js" type="text/javascript"></script>
 <?php } ?>
 <?php if(is_tag()) { ?>
 <script src="<?php bloginfo('template_url'); ?>/js/tag.js" type="text/javascript"></script>
 <?php } ?>
 <?php if(is_post_type_archive('service')) { ?>
 <script src="<?php bloginfo('template_url'); ?>/js/service-archive.js" type="text/javascript"></script>
 <?php } ?>
 <?php
      $blog_cat_exist = taxonomy_exists( 'blog-cat' );
      if(is_post_type_archive('blog')|| is_tax('blog-cat')) { ?>
 <script src="<?php bloginfo('template_url'); ?>/js/blog.js" type="text/javascript"></script>
 <?php } ?>
<script src="<?php bloginfo('template_url'); ?>/js/heightLine.js" type="text/javascript"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/wow.js" type="text/javascript"></script>

 <script>
  $(document).ready(function(e) {
    wow = new WOW(
             {
             boxClass:     'wow',      // default
             animateClass: 'animated', // default
             offset:       0,          // default
             mobile:       true,       // default
             live:         true        // default
           }
           )
           wow.init();
 });
</script>




 <?php wp_footer(); ?>
</body></html>
