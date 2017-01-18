<?php 
  /* QA: Load custom post type */
?>
<!-- #container08 -->
<div id="container08" class="clearfix">
  <div id="container08_inner" class="clearfix">
    <div class="inner clearfix">
      <h3 class="ttl_h301">よくある質問<span>Q&nbsp;&amp;&nbsp;A</span></h3>
      <div class="list_qa clearfix">
        <?php 
          global $post;
          global $wp_query;
          $args = array(
            'post_type' =>'qa',
            'numberposts' => -1,
            'orderby' => date,
            'order' => desc,
            'field' => 'slug'
          );
          $qa_posts = get_posts($args);
          if($qa_posts) {
            $i=1;
            foreach($qa_posts as $post) : 
              setup_postdata($post);  
              $post_categories = wp_get_post_categories( get_the_ID() );
              $thumb = get_post_thumbnail_id();
              $img_url = wp_get_attachment_url($thumb,'full'); 

            //get full URL to image
            $img_blog = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog');
            
            $time = get_the_date('Y.m.d', $post->ID);
            $nd = get_the_content();
            $id= get_the_ID();
            $i++; 
          ?>
            <dl>
              <dt>
                <p><span>Q.</span><?php the_title(); ?>？</p>
              </dt>
              <dd><span>A.</span><?php the_content(); ?></dd>
            </dl>
          <?php endforeach;
          wp_reset_query();
          wp_reset_postdata();
        } 
        ?>
      </div>
    </div>
  </div>
</div>
<!-- end: #container08 --> 