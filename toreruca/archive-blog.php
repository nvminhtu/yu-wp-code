<?php get_header(); ?>

<div id="header" class="clearfix">
  <div id="head_info">
    <div class="inner clearfix">
        <h1 id="logo"><a href=""><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="その助成金トレルカ？toreruca" /></a></h1>
        <h2>BLOG</h2>
        <div class="btn_main_pc">
        </div> 
      </div>
  </div>
</div>
<?php include('includes/part-quiz.php'); ?>
<!-- main start -->
<div id="main" class="clearfix"> 
  <div id="container03" class="clearfix">
    <div class="inner clearfix" style="height: 900px;">
      <?php 
        $default_posts_per_page = get_option( 'posts_per_page' );
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        global $post;
        global $wp_query;
        $args = array(
          'post_type' =>'blog',
          'numberposts' => $default_posts_per_page,
          'orderby' => date,
          'order' => desc,
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
          $img_blog = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog');
          $time = get_the_date('Y.m.d', $post->ID);
          $nd = get_the_content();
          $id= get_the_ID();
        ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
        <?php the_content(); ?><br>
        <?php
          $i++;
      endforeach;
    } 
    ?>
      <div class="navi_list clearfix">
        <?php wp_pagenavi( array( 'query' => $the_query ) ); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>