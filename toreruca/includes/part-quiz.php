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
      
      <div class="startquiz">
      	<div class="box_qa" class="clearfix">
        	<p class="title_quiz">クイズへようこそ</p>
            <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>
        </div>
        
        <p id="start-now" class="btn_slide_qa">Start Quiz</p>
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
          <div id="slide_qa" class="box_qa_inner clearfix">
            <?php 
              /** load quiz from custom fields **/ 
              $number_question = 15;
              $quiz_page_id = 20; //15
              $args = array( 'page_id' => $quiz_page_id );
              $the_query = new WP_Query( $args );

              if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post(); 
                  for($i=1; $i <= $number_question; $i++) {
                    $question = "question-".$i;
                    if($i <= 9) {
                      $question = "question-0".$i;  
                      $quesID = "ques0".$i;
                      $answer = "answer-0".$i;
                    } else {
                      echo $i;
                      $question = "question-".$i;
                      $quesID = "ques".$i;
                      $answer = "answer-".$i;
                    }
                    $question_field = get_field($question,$quiz_page_id);
                  ?>
                    <div class="slide list_qa" id="<?php echo $quesID; ?>">
                      <div class="list_qa_inner">
                        <h3 class="title_qa">質問 <?php echo $i; ?></h3>
                        <p class="question_txt"><span><?php echo $i; ?>.<?php echo $question_field; ?></span></p>
                        <div class="box_ans clearfix">
                          <ul>
                          <?php
                            if( have_rows($answer) ):
                              $j = 0;
                              while( have_rows($answer) ) : the_row(); 
                                $j++;
                                $checkID = "fa-".$i.$j;
                                $optID = "opt".$j;
                          ?>
                                <li>
                                  <input id="<?php echo $checkID; ?>" type="checkbox" value="<?php echo $optID; ?>" />
                                  <label for="<?php echo $checkID; ?>"><?php the_sub_field('answer'); ?></label>
                                </li>
                              <?php
                              endwhile;
                            endif;
                          ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <?php 
                  } // end for
                ?>
                <?php endwhile;
                wp_reset_postdata();
              else : ?>
              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            
            <?php endif; ?>
              
          </div>
          <div id="notification" class="errors">
            <p>少なくとも1つの項目をチェックしてください</p>
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

      <div class="endquiz">
        <div class="box_qa" class="clearfix">
          <p class="title_quiz title_contact">お問い合わせ</p>
          <p class="title_quiz title_thanks">ありがとうございました</p>
          
          <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
          <div id="result"></div>
          <div class="thankyou_mess">
            <p>
              ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー
            </p>
          </div>
          <div class="center"><p id="reset-quiz" class="btn_slide_qa">再び行います</p></div>
        </div>
      <!--end endquiz --></div>

      </div>
    </div>
  </div>
</div>