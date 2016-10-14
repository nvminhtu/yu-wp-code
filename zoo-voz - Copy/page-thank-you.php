<?php get_header(); ?>

<!-- main start -->


<div id="main" class="clearfix">
  <div class="inner">
  <div class="content_inner clearfix">
      <div class="box_txt_contact clearfix">
    <?php
		// Start the loop.
		while ( have_posts() ) : the_post();
      the_content();
		endwhile;
    // End of the loop.
		?>
      <div class="box_link_contact clearfix">
        <?php
            global $post;
            global $wp_query;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array(
              'post_type' =>'blog',
              'numberposts' => 5,
              'posts_per_page' => 5,
              'orderby' => date,
              'order' => desc,
              'field' => 'slug',
              'paged' => $paged
            );

            $the_query = new WP_Query( $args );
            $blog_posts = get_posts($args);
            if($blog_posts) {
              foreach($blog_posts as $post) : setup_postdata($post);
                $thumb = get_post_thumbnail_id();
          			$img_url = wp_get_attachment_url($thumb,'full');
          			$img_blog_thanks = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog_thanks');
                $img_blog_src = $img_blog_thanks[0]; ?>
                <div class="bl_ct01 clearfix">
                	<a href="<?php echo get_permalink(); ?>">
                    <p class="bl_ct01_img">
                      <?php if(has_post_thumbnail($id)) { ?>
                        <img src="<?php echo $img_blog_src; ?>" alt="" />
                			<?php } else { ?>
                				<img src="<?php echo get_bloginfo('template_url'); ?>/images/dummy01.jpg" alt="" />
                			<?php } ?>
                    </p>
                    <p class="bl_ct01_title"><?php echo get_the_title(); ?></p>
                  </a>
                </div>
            <?php
              endforeach;
              wp_reset_query();
        			wp_reset_postdata();
        	 	}
        ?>
      </div>
    </div>

    <!-- .inner --></div>
  <!-- #main --></div>
<?php get_footer(); ?>
