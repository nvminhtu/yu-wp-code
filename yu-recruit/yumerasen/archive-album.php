<?php

get_header();?>


  <!-- #content -->
  <div id="content" class="clearfix">
      <div class="inner clearfix">
        <!-- .box_archive_album -->

        <div class="box_archive_album clearfix">
          <h3 class="titleh3_02"><span>動画ムービー</span></h3>
          <?php
            $youtube_api_key = prefixvideo_get_option( 'youtube_api_key' );
            $youtube_username = prefixvideo_get_option( 'youtube_username' );
            $youtube_thumbs_number = prefixvideo_get_option( 'youtube_thumbs_number' );
            $youtube_length_text = prefixvideo_get_option( 'youtube_length_text' );
            echo do_shortcode('[Youtube_Channel_Gallery user="'.$youtube_username.'" key="'.$youtube_api_key.'" player="2" maxitems="'.$youtube_length_text.'" thumb_columns_phones="1" description="1" description_words_number="'.$youtube_length_text.'" thumb_columns_tablets="3" title="1"]');
          ?>
          <h3 class="titleh3_02"><span>写真集</span></h3>
          <?php
            //step 1: get album list
            $arg = array(
                     'post_type' => 'album',
                     'posts_per_page' => '-1'
                   );

            $query = new WP_Query( $arg );
            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                    $query->the_post();
                    ?>
                    <div class="box_photo_out clearfix">
                      <h4 class="title_album_photo"><?php echo get_the_time('Y.m.d').' '.get_the_title(); ?></h4>
                      <div class="box_photo_inner clearfix">
                        <?php
                           // check if the repeater field has rows of data
                         if( have_rows('photos') ):
                          	// loop through the rows of data
                           while ( have_rows('photos') ) : the_row();
                             // display a sub field value
                             $picID = get_sub_field('photo');
                             $picL = wp_get_attachment_image_src($picID, 'full');
                             $largeURL = $picL[0];
                          ?>
                             <div class="col col4 box_photo">
                               <p class="img_photo01"> <a href="#"><img src="<?php echo $largeURL; ?>" alt="" /></a></p>
                             </div>
                    <?php endwhile;
                         else :
                           //if no photos - shown here
                         endif;
                    ?>
                      </div>
                      <p class="btn btn01 "> <a href="#">もっと見る</a> </p>
                    </div>
                <?php  }
              wp_reset_postdata(); ?>
          <?php } ?>

        <!-- //.box_archive_album -->

      </div>
      <!-- //#content -->
    </div>
  <!-- //#content -->
</div>
<!-- main end -->

<?php
get_footer();
?>
