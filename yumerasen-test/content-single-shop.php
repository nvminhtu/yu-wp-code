<?php
  /*
  * @include tempalte for single shop page
  */
 ?>

<div id="shop_news" class="clearfix">
  <div class="shop_news_inner clearfix">
    <p class="shop_news_title">○○○店からのお知らせ</p>
    <div class="news_des clearfix">
      <?php
          //step 1: get userID from CTF
          if( get_field('shop_user') ):
            $userinfo = get_field('shop_user');
            $userid = $userinfo['ID'];
          endif;

          //step 2: get posts by user id
          $arg = array(
                   'author' => $userid,
                   'cat' => 10
                 );
          $query = new WP_Query( $arg );
          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
              echo '<dl>';
              echo '<dt>' .get_the_time('Y.m.d') . '</dt>';
              echo '<dd><a href="'.get_permalink().'">' .get_the_title($query->post->ID ). '</a></dd>';
              echo '</dl>';
            }
            wp_reset_postdata();
          }
        ?>
    </div>
  </div>
</div>
<div id="content">
 <div class="clearfix shop_detail">
   <div class="shop clearfix ">
     <h4><?php the_title(); ?></h4>
   </div>
   <div class="box_shop01 clearfix">
     <h4 class="service">店舗風景</h4>
     <div id="slide_img_shop" class=" clearfix">
       <div class="box_img_shop clearfix">
         <p class="shop_img01"><a href="http://www.yumerasen.co.jp/sys/wp-content/themes/yumerasen-test/images/concept.jpg" data-lightbox="shop_detail">
         <span class="img_title">外観</span>
         <img src="<?php bloginfo('template_url'); ?>/images/img_shop01.jpg" alt="" /></a></p>
         <p class="shop_cm_img01">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
       </div>
       <div class="box_img_shop clearfix">
         <p class="shop_img01"><a href="http://www.yumerasen.co.jp/sys/wp-content/themes/yumerasen-test/images/concept.jpg" data-lightbox="shop_detail">
           <span class="img_title">店内風景</span>
         <img src="<?php bloginfo('template_url'); ?>/images/img_shop01.jpg" alt="" /></a></p>
         <p class="shop_cm_img01">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
       </div>
       <div class="box_img_shop clearfix">
         <p class="shop_img01"><a href="http://www.yumerasen.co.jp/sys/wp-content/themes/yumerasen-test/images/concept.jpg" data-lightbox="shop_detail">
           <span class="img_title">おすすめ商品</span>
         <img src="<?php bloginfo('template_url'); ?>/images/img_shop01.jpg" alt="" /></a></p>
         <p class="shop_cm_img01">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
       </div>
       <div class="box_img_shop clearfix">
         <p class="shop_img01"><a href="http://www.yumerasen.co.jp/sys/wp-content/themes/yumerasen-test/images/concept.jpg" data-lightbox="shop_detail">
         <span class="img_title">外観</span>
         <img src="<?php bloginfo('template_url'); ?>/images/img_shop01.jpg" alt="" /></a></p>
         <p class="shop_cm_img01">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
       </div>
       <div class="box_img_shop clearfix">
         <p class="shop_img01"><a href="http://www.yumerasen.co.jp/sys/wp-content/themes/yumerasen-test/images/concept.jpg" data-lightbox="shop_detail">
           <span class="img_title">店内風景</span>
         <img src="<?php bloginfo('template_url'); ?>/images/img_shop01.jpg" alt="" /></a></p>
         <p class="shop_cm_img01">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
       </div>
       <div class="box_img_shop clearfix">
         <p class="shop_img01"><a href="http://www.yumerasen.co.jp/sys/wp-content/themes/yumerasen-test/images/concept.jpg" data-lightbox="shop_detail">
           <span class="img_title">おすすめ商品</span>
         <img src="<?php bloginfo('template_url'); ?>/images/img_shop01.jpg" alt="" /></a></p>
         <p class="shop_cm_img01">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
       </div>
     </div>
   </div>
   <div class="box_shop01 clearfix">
     <h4 class="service">店舗風景</h4>
     <div class="box_customer_cm clearfix">
       <div class="box_img_owner">
         <p class="img_owner"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" /></p>
       </div>
       <div class="box_owner_info">
         <p class="owner_name"><?php if( get_field('owner_name') ): the_field('owner_name'); endif; ?></p>
         <p class="owner_title"><?php if( get_field('owner_title') ): the_field('owner_title'); endif; ?></p>
         <p class="txt_cm"><?php if( get_field('owner_message') ): the_field('owner_message'); endif; ?></p>
       </div>
     </div>
   </div>
   <div class="box_shop01 clearfix">
     <h4 class="service">アクセスマップ・お問い合わせ</h4>
     <div class="shop_info clearfix">
       <div class="map_info">
          <dl>
             <dt>住所</dt>
             <dd><?php if( get_field('address') ): the_field('address'); endif; ?></dd>
          </dl>
           <dl>
             <dt>営業時間</dt>
             <dd><?php if( get_field('opening_hour') ): the_field('opening_hour'); endif; ?></dd>
          </dl>
           <dl>
             <dt>TEL</dt>
             <dd><?php if( get_field('tel') ): the_field('tel'); endif; ?></dd>
          </dl>
           <dl>
             <dt>アクセス</dt>
             <dd><?php if( get_field('access') ): the_field('access'); endif; ?></dd>
          </dl>

       </div>
       <div class="gmap01">
         <div class="gMap gMapZoom15 gMapMinifyInfoWindow" style="width: 100%; height: 400px;">
           <div class="gMapCenter">
             <?php
                if( get_field('latitude') ): $latitude = get_field('latitude'); endif;
                if( get_field('longtitude') ): $longtitude = get_field('longtitude'); endif;
              ?>
             <p class="gMapLatLng"><?php echo $latitude.','.$longtitude; ?></p>
           </div>
           <div class="gMapMarker">
             <p class="gMapLatLng"><?php echo $latitude.','.$longtitude; ?></p>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
