<?php
  /***
  *** template: homepage
  ***/
?>
<?php get_header(); ?>

<div id="header" class="clearfix">
  <div id="head_info">
    <div class="inner clearfix">
        <h1 id="logo"><a href=""><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="その助成金トレルカ？toreruca" /></a></h1>
        
        
        <!--<h2><span>最大1,850万円、</span>うちの会社でも取れるか？<br />
          <span class="h2_l">500社以上が利用する<br class="box_sp_sm" />「助成金診断サービス」</span></h2>-->
        
          <h2>
          <span class="h2_l">助成金<span class="txt_box_pc">の可能性</span>を、すべての経営者に。</span>
          <span class="h2line sp_mar">あなたの会社で申請可能な<br class="box_sp_sm" />助成金は？ その金額は？</span>
          <span class="h2line">診断実績は1,000社を突破。<br class="box_sp_sm" />受給見込金額は平均500万円以上。</span></h2>
          
          
            <div class="btn_main_pc">
        <p class="open_quiz btn_main btn_ques btn_ques01 hover"><a href="javascript:void(0)">Webで診断 <br class="box_sp_sm" />（15個の質問に答える）<span>※約5分</span></a></p>
   <p class="btn_main btn_tel hover"><a href="tel:05068697951" class="sweetlink btn_call">電話で診断 <br class="box_sp_sm" />（050-6869-7951）<span>※10:00-17:00</span></a></p>
       

        
    </div> </div>
  </div>
</div>
<!-- button for Sp -->
<div class="btn_main_sp">
  <p class="open_quiz btn_main btn_ques btn_ques01 hover"><a href="javascript:void(0)">Webで診断 <br class="box_sp_sm03" /><span class="btn_main_line02">（15個の質問に答えて診断）</span><span>※約5分</span></a></p>
  <p class="btn_main btn_tel hover"><a href="tel:05068697951" class="sweetlink btn_call">電話で診断 <br class="box_sp_sm03" /><span class="btn_main_line02">（050-6869-7951）</span><span>※10:00-17:00</span></a></p>
</div>
<?php include('includes/part-quiz.php'); ?>
<!-- main start -->
<div id="main" class="clearfix">
  <?php
      $args = array(
          'post_type' => 'page',//it is a Page right?
          'post_status' => 'publish',
          'meta_query' => array(
              array(
                'key' => '_wp_page_template',
                'value' => 'template-homepage.php'
              )
          )
      );
      $my_query = new WP_Query($args);
      if ( $my_query->have_posts() ) : ?>
        <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

    <?php else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
 
  <?php // include('includes/part-news.php'); ?>
</div>

<?php get_footer();?>
