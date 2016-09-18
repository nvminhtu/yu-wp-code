<meta property="fb:admins" content="100001659772490" />
<meta property="og:title" content="<?php the_title(); ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php the_permalink(); ?>" />
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<meta property="og:locale" content="ja_JP" />
<?php
  if (has_post_thumbnail()) :
?>
<meta property="og:image" content="<?php echo get_thumbnail_image_url(); ?>" />
<?php
  else:
?>
<meta property="og:image" content="<?php echo bloginfo('template_url'); ?>/images/fb_default_img.png" />
<?php
  endif;
?>
<meta property="og:description" content="<?php echo get_ogp_excerpted_content($post->post_content); ?>" />