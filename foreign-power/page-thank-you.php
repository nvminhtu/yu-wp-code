<?php
/**
 * Template Name: Thank you
 * @package WordPress
 * @subpackage ForeignPower
 * @since ForeignPower
 * Content will be gotten from admin editor
 */ ?>
<?php get_header(); ?>
<body class="thank_page">
	<div id="wrapper">
	  	<div id="box_thank" class="clearfix">
	   		<div class="inner">
		   		<p id="logo02"><a href=""><img src="<?php bloginfo('template_url'); ?>/images/logo02.png" alt="Foreign Power"></a></p> 
		    	<h1>外国人アルバイト人材提供サービス</h1>
		    	<h2 class="ttl_h301">ご依頼・お問い合わせ完了</h2>
		    	<div class="txt_thank">
		    		<p>この度はご連絡いただきありがとうございます。<br>
					後ほど、担当者よりご連絡をさせていただきます。なお、しばらくたっても連絡がない場合は、<br>
					お客様によりご入力いただいた内容に誤りがある場合がございます。<br>
					その際は、お手数ですが再度送信いただくか、お電話（000-000-000）にてご連絡いただけますと幸いです。</p>
				</div>
				<div class="contact_f">
		 			<p class="btn btn01">
		              <span class="txt_btn">ホームに戻る</span>
		            </p>
		  		</div>  
	    		<p class="txt_address">株式会社ベジコープ<br>
	              〒104-0045 東京都中央区築地4丁目14-19　ヨンキュウビル5F<br>
	              &copy; foreign-power.com</p>
	    	</div>
	    </div>
	  
		<div id="footer" class="clearfix">
		    <div class="footer_add">
		      <address>
		      Copyright (C) cordial CO., LTD. All Rights Reserved.
		      </address>
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
