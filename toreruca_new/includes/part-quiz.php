<?php
  /***
  *** include part: quiz
  ***/
?>
<div id="modal_quiz_out" class="clearfix">
  <div id="modal_quiz" class="clearfix">
    <div id="modal_quiz_he" class="clearfix">
      <div id="modal_quiz_inner" class="clearfix">
      <a id="btn_close" title="閉じる" href="#"><img src="<?php bloginfo('template_url'); ?>/images/btn_close.png" alt="閉じる" /></a>
      <p class="logo_l"><img src="<?php bloginfo('template_url'); ?>/images/logo_l.png" alt="" /></p>
      <!-- progressbar -->
      
      <div class="beforequiz">
        <div class="box_qa" class="clearfix">
          <p class="title_quiz">助成金とは？</p>
          <p>助成金とは、一言でいうと「雇用促進・活発化を行う企業に対し、<br />
            国（厚生労働省）が返済不要の金銭的支援をしてくれる」制度です。</p>

          <p>"利用しなければ損" とも言える制度である一方、<br />
            「うちの会社も対象なのか？いくら貰えるのか？が分からない」と言った声も多く、<br />
            助成金を申請できていない会社様が多いのが現状です。</p>

          <p>そんな経営者様のお悩みを解決するための手段として、<br />
            【知識ゼロでも、無料で、誰でも簡単に、助成金取得可能性を診断できるサイト】として、<br />
            toreruca（トレルカ）はサービスを開始いたしました。</p> 
        </div>
        <p id="get-started" class="btn_slide_qa">次へ</p>
      <!-- /.beforequiz --></div>
      
      <div class="startquiz">
      	<div class="box_qa" class="clearfix">
        	<p class="title_quiz">Let's トレルカ診断！（約5分）</p>
          <p>今から、貴社の現状に関する「15個の質問」いたします。。<br />
          それらの内容を元に、「どんな助成金が貴社で取れるか？」を診断させて頂きます。</p>
          <p>※ 回答が難しい部分があれば、「分からない」を選択ください。</p>
          <p>それでは、診断を開始しましょう！</p>
        </div>
        <p id="start-now" class="btn_slide_qa">トレルカ診断 START</p>
      <!-- start quiz --></div>
      
      <div class="inprogress">
        <div id="box_progressbar" class="clearfix">
          <div class="progress">
            <div class="progress-bar">
              <div id="number_answered" class="number_bar"><div class="number_bar_inner">回答済み(<span id="txt_number_answered">1</span>)</div></div>
             
            </div>
             <div class="progress-bar_remaining">
               <div id="number_remaining" class="number_bar"><div class="number_bar_inner">残り(<span id="txt_number_remaining">15</span>)</div></div>
             </div>
            
          </div>
        </div>
        
        <div class="box_qa" class="clearfix">
          <?php include('part-quiz-content.php'); ?>
          <div id="notify-checkbox" class="errors">
            <p>少なくとも1つの項目をチェックしてください</p>
          </div>
          <div id="notify-radio" class="errors">
            <p>少なくとも1つの項目をチェックしてください</p>
          </div>
          <div id="notify-select" class="errors">
            <p>少なくとも1つの項目をチェックしてください</p>
          </div>
          <div id="notify-textarea" class="errors">
            <p>Please input textarea</p>
          </div>
        <!--end box qa --></div>
        <!-- start button -->
        <ul class="list_btn_qa">
          <li id="slider-prev" class="btn_slide_qa"></li>
         <!--  <li id="slider-next" class="btn_slide_qa"></li> -->
         <li id="slider-check" class="btn_slide_qa">次へ</li>
        </ul>
        <!-- // end button -->
      <!-- in progress --></div>

      </div>
    </div>
  </div>
</div>