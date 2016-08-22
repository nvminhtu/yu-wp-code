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
        <h2><span>最大1,850万円、</span>うちの会社でも取れるか？<br />
          <span class="h2_l">500社以上が利用する<br class="box_sp_sm" />「助成金診断サービス」</span></h2>
            <div class="btn_main_pc">
        <p class="open_quiz btn_main btn_ques btn_ques01 hover"><a href="javascript:void(0)">Webで診断 <br class="box_sp_sm" />（15個の質問に答えて診断）<span>※約5分</span></a></p>
        <p class="btn_main btn_tel hover"><a href="">電話で診断 <br class="box_sp_sm" />（050-3638-2525）<span>※10:00-17:00</span></a></p>
    </div> </div>
  </div>
</div>
<!-- button for Sp -->
<div class="btn_main_sp">
  <p class="btn_main btn_ques btn_ques01 hover"><a href="javascript:void(0)">Webで診断 <br class="box_sp_sm03" />（15個の質問に答えて診断）<span>※約5分</span></a></p>
  <p class="btn_main btn_tel hover"><a href="">電話で診断 <br class="box_sp_sm03" />（050-3638-2525）<span>※10:00-17:00</span></a></p>
</div>
<?php include('includes/part-quiz.php'); ?>
<!-- main start -->
<div id="main" class="clearfix"> 
	<?php include('includes/part-container-1.php'); ?>
	<?php include('includes/part-container-2.php'); ?>
	<?php include('includes/part-container-3.php'); ?>
	<?php include('includes/part-container-4.php'); ?>
	<?php include('includes/part-container-5.php'); ?>
	<?php include('includes/part-container-6.php'); ?>
</div>

<?php get_footer();?>
