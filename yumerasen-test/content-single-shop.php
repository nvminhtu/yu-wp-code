<?php
  /*
  * @include tempalte for single shop page
  */
 ?>
 <?php
   //step 1: get userID from CTF
   if( get_field('shop_user') ):
     $userinfo = get_field('shop_user');
     $userid = $userinfo['ID'];


     //step 2: get posts by user id
     $arg = array(
              'author' => $userid,
              'cat' => 10
            );
     $query = new WP_Query( $arg );
     if ( $query->have_posts() ) { ?>
     <div id="shop_news" class="clearfix">
       <div class="shop_news_inner clearfix">
         <p class="shop_news_title"><?php the_title(); ?>からのお知らせ</p>
         <div class="news_des clearfix">
           <?php while ( $query->have_posts() ) {
             $query->the_post();
             echo '<dl>';
             echo '<dt>' .get_the_time('Y.m.d') . '</dt>';
             echo '<dd><a href="#model-'.$query->post->ID.'">' .get_the_title($query->post->ID ). '</a></dd>';
             echo '</dl>';
             ?>
             <div id="model-<?php echo $query->post->ID; ?>" class="mfp-hide white-popup-block">
               <p class="title_news_modal"><?php echo get_the_title($query->post->ID ); ?></p>
               <p class="txt_news_modal"><?php echo get_the_content($query->post->ID ); ?></p>
             </div>
           <?php } ?>
         </div>
       </div>
     </div>
     <?php  wp_reset_postdata(); ?>

   <?php }
 endif; ?>

<div id="content">
   <div class="clearfix shop_detail">
     <div class="shop clearfix ">
       <h4><?php the_title(); ?></h4>
     </div>

     <div class="box_shop01 clearfix">
       <h4 class="service">店舗風景</h4>
       <div id="slide_img_shop" class=" clearfix">
         <?php
            // check if the repeater field has rows of data
            if( have_rows('shop_picture') ):
             	// loop through the rows of data
              while ( have_rows('shop_picture') ) : the_row();
                // display a sub field value
                ?>
                <div class="box_img_shop clearfix">
                  <?php
                    $picID = get_sub_field('picture_thumb');
                    $picS = wp_get_attachment_image_src($picID, 'pic_thumbnail');
                    $picL = wp_get_attachment_image_src($picID, 'full');
                    $smallURL = $picS[0];
                    $largeURL = $picL[0];
                  ?>
                  <p class="shop_img01"><a href="<?php echo $largeURL; ?>" data-lightbox="shop_detail">
                  <span class="img_title"><?php the_sub_field('picture_title'); ?></span>
                  <img src="<?php echo $smallURL; ?>" alt="" width="<?php echo $picS[1]; ?>" height="<?php echo $picS[2]; ?>" /></a></p>
                  <p class="shop_cm_img01"><?php the_sub_field('picture_comment'); ?></p>
                </div>
                <?php
              endwhile;
            else :

            endif;
            ?>
       </div>
     </div>

     <div class="box_shop01 clearfix">
       <h4 class="service">スタッフメッセージ</h4>
       <div class="box_customer_cm clearfix">
         <div class="box_img_owner">
           <?php if( get_field('owner_picture') ):
                 $picOwner = get_field('owner_picture');
                 $picOwnerSrc = wp_get_attachment_image_src($picOwner, 'owner_picture');
            ?>
           <p class="img_owner">
             <img src="<?php echo $picOwnerSrc[0]; ?>" />
           </p>
          <?php endif; ?>
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
