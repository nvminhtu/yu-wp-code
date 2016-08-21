

<div id="sidebar" class="clearfix">

<?php 
/* blog */
if( is_page('blog')||get_post_type( get_the_ID() ) == 'post' || is_category() )
{ 
?>
  <dl class="list_post list_cate_sb">
    <dt>カテゴリー</dt>
    <dd>
      <?php  include (TEMPLATEPATH . '/includes/list_category.php');  ?>
    </dd>
  </dl>
  <?php  include (TEMPLATEPATH . '/includes/list_blog_sb.php');
  
  }
/* voice */
else if(get_post_type( get_the_ID()) == 'voice' || is_tax( 'voice' ))
{ 
  include (TEMPLATEPATH . '/includes/list_category_voice.php'); 
  include (TEMPLATEPATH . '/includes/list_voice_sb.php');
} 

?> 
  
</div>
