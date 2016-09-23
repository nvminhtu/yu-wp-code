<div id="sticky_footer" class="clearfix">
  <div class="inner clearfix">
    <div class="box_btn01">
       <p class="sticky_btn sticky_btn_tel hover"><a href="tel:05068697951" class="sweetlink btn_call">電話で診断<span class="clear_line">050-6869-7951（平日10時~17時）</span></a></p>
    </div>
    <div class="box_btn02">
      <p class="open_quiz sticky_btn sticky_btn_ques btn_ques01 hover"><a href="javascript:void(0)">Webで診断<span class="clear_line">15の質問に答える<span class="txt_24small">（約5分）</span></span></a></p>
    </div>
    <div class="box_slide_question">
       <div class="box_slide_question_list">
        <li><a href="#">助成金がトレルカ？<br />今すぐ診断スタート！</a></li>
      </div>
    </div>
  </div>
</div>

  <div id="footer" class="clearfix">
    <div class="inner clearfix">
      <div class="footer_tel_box">

       <p class="footer_tel"><a href="tel:05068697951" class="sweetlink btn_call">050-6869-7951</a></p>
          <p class="footer_mail"><a href="mailto:info@joseikin.site" target="_blank">info@joseikin.site</a></p>
      </div>
      <div class="footer_right">
        <ul class="footer_link">
          <!--<li><a href="">トップに戻る</a></li>-->
          <li><a href="http://idealogic.co.jp/" target="_blank">運営会社</a></li>
        </ul>
        <address>&copy; toreruca.com</address>
      </div>
    </div>
  </div>
  <div id="popup_tel" class="clearfix">
  	<div class="popup_tel_inner clearfix">
    <a id="btn_close_popup_tel" href="javascript:void(0)" title="閉じる">
<img alt="閉じる" src="<?php bloginfo('template_url'); ?>/images/btn_close.png">
</a>
    	<p><span>お電話でのお問い合わせ・お申し込みは</span><br />
050-6869-7951までどうぞ。<br />
※営業時間：平日10:00-17:00</p>
    </div>
  </div>
  <p id="toTop"><a href="#wrapper"><img src="<?php bloginfo('template_url'); ?>/images/totop.png" /></a></p>
</div>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.scroll.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/rollover.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/sweetlink.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/common.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.bxslider.js"></script>
<link href="<?php bloginfo('template_url'); ?>/css/jquery.bxslider.css" rel="stylesheet" />
<script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.min.js" type="text/javascript"></script>
<?php /* if(is_front_page()) { ?>
  <script src="<?php bloginfo('template_url'); ?>/js/question.js" type="text/javascript"></script>
<?php } */ ?>

<?php if(is_page('contact')||is_page('confirmation')||is_page('thank-you')) { ?>
  <script src="<?php bloginfo('template_url'); ?>/js/question.js" type="text/javascript"></script>
<?php } else { ?>
  <script src="<?php bloginfo('template_url'); ?>/js/all-page-question.js" type="text/javascript"></script>
<?php }?>

<script src="<?php bloginfo('template_url'); ?>/js/contact.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/top.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/heightLine.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/sweetlink.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/detect.js" type="text/javascript"></script>
<?php wp_footer(); ?>
</body></html>
