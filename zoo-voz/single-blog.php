<?php get_header(); ?>

<?php
  if ( have_posts() ) :
  	while ( have_posts() ) : the_post();
      $thumb = get_post_thumbnail_id();
      $img_url = wp_get_attachment_url($thumb,'full'); //get full URL to image
      $time = get_the_date('Y.m.d', $post->ID);
      $nd = get_the_content();
      $id= get_the_ID();
    ?>
    <!-- main start -->
    <div id="main" class="clearfix">
      <div class="inner ftb">
        <div id="topic_path" class="clearfix">
          <ul>
            <li><a href="<?php bloginfo('siteurl'); ?>">HOME</a> &gt; </li>
            <li><a href="<?php bloginfo('siteurl'); ?>/blog/">ブログ一覧</a> &gt; </li>
            <li><?php the_title(); ?></li>
          </ul>
        </div>
        <div id="container" class="clearfix blog_detail">
          <div id="content" class="blog_detail">
            <p class="blog_time"><?php echo $time; ?></p>
            <h1 class="bh"><?php the_title(); ?></h1>
            <div class="dblog_in clearfix">
              <div class="blogd_cate_list clearfix">
                <?php
                // 01. Load Cats of Blog
                $terms = wp_get_post_terms($post->ID, 'blog-cat', '');
                if ( !empty( $terms ) && !is_wp_error( $terms ) ){
                     echo "<ul>";
                     foreach ( $terms as $term ) {
                       echo "<li><a href='".get_term_link($term)."'>" . $term->name . "</a></li>";
                     }
                     echo "</ul>";
                 }
                ?>
              </div>
              <div class="blogd_tag_list clearfix">
                <?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
              </div>
            </div>
            <div class="blogd_content clearfix">
              <p class="center"><img src="<?php echo $img_url; ?>" /></p>
              <?php the_content(); ?>
              <?php echo do_shortcode('[related_blogs]'); ?>
              
              <div id="social_share" class="clearfix">
              <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.6&appId";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
              	   <ul id="so_like">

        <li><div class="fb-share-button" data-href="<?php get_permalink(); ?>" data-layout="button_count" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php get_permalink(); ?>">Share</a></div></li>
        <li><a href="http://twitter.com/share" class="twitter-share-button" data-text="Share post" data-count="horizontal" data-lang="ja" data-url="<?php get_permalink(); ?>">ツイート</a><script type="text/javascript" charset="utf-8" src="http://platform.twitter.com/widgets.js"></script></li>
      </ul>
              </div>

              <div class="adsense_area_box clearfix">
                <div class="adsense_box clearfix">
                  <!-- Start Adsense code -->
                  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				  	<!-- groovoost.com - under blog articles 300×250 2 -->
				  	<ins class="adsbygoogle"
				  	style="display:inline-block;width:300px;height:250px"
				  	data-ad-client="ca-pub-7469938523971093"
				  	data-ad-slot="5845613165"></ins>
				  	<script>
				  	(adsbygoogle = window.adsbygoogle || []).push({});
				  </script>
                  <!-- End Adsense code -->
                </div>
                <div class="adsense_box clearfix">
                  <!-- Start Adsense code -->
                  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				  	<!-- groovoost.com - under blog articles 300×250 2 -->
				  	<ins class="adsbygoogle"
				  	style="display:inline-block;width:300px;height:250px"
				  	data-ad-client="ca-pub-7469938523971093"
				  	data-ad-slot="5845613165"></ins>
				  	<script>
				  	(adsbygoogle = window.adsbygoogle || []).push({});
				  </script>
                  <!-- End Adsense code -->
                </div>
              <!-- .adsense_area_box --></div>


              <div class="person_box clearfix">
            	 <p class="ptitle_01">記事を書いたひと</p>
               <?php
                //get the author meta information
                $firstname = get_the_author_meta( 'user_firstname' );
                $lastname = get_the_author_meta( 'user_lastname' );
                $biographical = get_the_author_meta( 'description' );
                $fullname = $firstname.' '.$lastname;
                $author_id = get_the_author_meta('ID');
                $user_position = get_field('user_position', 'user_'. $author_id);
              ?>
            	 <div class="img_person clearfix">
                 	<p><?php echo get_avatar( get_the_author_meta( 'user_email' ), $author_avatar_size );  ?></p>
            	</div>
            			<div class="info_person clearfix">
            				<p class="person_name"><?php echo $fullname; ?></p>
            					<p class="person_positon"><?php echo $user_position; ?></p>
            			</div>
            			<p class="person_des"><?php echo $biographical; ?></p>
            	</div>

            </div>
          </div>
          <!-- #### sidebar ####-->
          <?php get_sidebar(); ?>
          <!-- #### //sidebar ####-->
        </div>
      </div>
    </div>
    <!-- main end -->
  	<?php endwhile;
  else :
  endif;
?>
<?php get_footer(); ?>
