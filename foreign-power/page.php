<?php get_header(); ?>
<body class="contact_confirm">
	<div id="wrapper">

		<div id="box_confirm" class="clearfix">
	    
	     	<div class="inner">
	     
		    <p id="button_close"><a href="index.html#contact"><img src="images/icon_close.png" alt="Close"></a></p>
		    <h1 class="ttl_h301">確認画面</h1>
		    <div class="contact_f clearfix">
		          <dl>
		            <dt>会社名</dt>
		            <dd>
		              <input type="text" name="name" value="Dummy Company" size="40" class="" placeholder="">
		            </dd>
		          </dl>
		          <dl>
		            <dt>担当者名</dt>
		            <dd>
		              <input type="text" name="name" value="担当者名" size="40" class="" placeholder="">
		            </dd>
		          </dl>
		          <dl>
		            <dt>メールアドレス</dt>
		            <dd>
		              <input type="text" name="name" value="abc@gmail.com" size="40" class="" placeholder="abc@gmail.com">
		            </dd>
		          </dl>
		          <dl>
		            <dt>お問い合わせ内容</dt>
		            <dd>
		              <textarea name="" id="" value="">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。"</textarea>
		            </dd>
		          </dl>
		          <p class="btn btn01">
		            <input type="submit" value="送　信">
		          </p>
		     </div>
	    
	    </div>
	 </div>   
		
	</div>

</body>
<?php
	// Start the loop.
	while ( have_posts() ) : the_post();
 		the_content();
	endwhile;
    // End of the loop.
	?>
<?php get_footer(); ?>
