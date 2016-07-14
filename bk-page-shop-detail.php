<?php get_header(); ?>

<script src="<?php bloginfo('template_url'); ?>/js/jquery_add.js" type="text/javascript"></script>
<link  href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css" rel="stylesheet" type="text/css" />
<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js" type="text/javascript"></script>

<script src="<?php bloginfo('template_url'); ?>/js/lightbox.js" type="text/javascript"></script>
<link  href="<?php bloginfo('template_url'); ?>/css/lightbox.css" rel="stylesheet" type="text/css" />
<script>
$(document).ready(function(){
 "use strict";
	$('#slide_img_shop').owlCarousel({
			loop:true,
		margin:15,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplaySpeed: 600,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			320:{
				margin:20,
				items:1,
				nav:true,
				touchDrag: true,
			},
			480:{
				margin:20,
				items:2,
				nav:true,
				touchDrag: true,
			},

		}
	});
});
</script>
<style>
.shop_detail .shop{
	background:none;
}
#shop_news {
	border: 1px solid #FCD4D8;
	padding: 20px 15px;
	margin-bottom:35px;
	margin-top:20px;
		/* IE10+ */
background-image: -ms-linear-gradient(top, rgba(252,239,238,1) 0%, rgba(255,255,255,1) 15%);

/* Mozilla Firefox */
background-image: -moz-linear-gradient(top, rgba(252,239,238,1) 0%, rgba(255,255,255,1) 15%);

/* Opera */
background-image: -o-linear-gradient(top, rgba(252,239,238,1) 0%, rgba(255,255,255,1) 15%);

/* Webkit (Safari/Chrome 10) */
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgba(252,239,238,1)), color-stop(20, rgba(255,255,255,1)));

/* Webkit (Chrome 11+) */
background-image: -webkit-linear-gradient(top, rgba(252,239,238,1) 0%, rgba(255,255,255,1) 15%);

/* W3C Markup */
background-image: linear-gradient(to bottom, rgba(252,239,238,1) 0%, rgba(255,255,255,1) 15%);
}
.shop_news_title {
	padding-left: 35px;
	background: url(http://www.yumerasen.co.jp/sys/wp-content/themes/yumerasen-test/images/icon_news01.png) 0 center no-repeat;
	font-size: 18px;
	font-weight: bold;
	margin-bottom: 10px;
	color: #331C06;

}
.news_des {
	height: 165px;
	overflow: auto;
}
.news_des dl:after {
	content: ".";
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;
}
.news_des dl {
	border-bottom: 1px dotted #D0BA89;
	padding: 10px 0;

}
.news_des dt, .news_des dd {
	float: left;
	box-sizing: border-box;
}
.news_des dt {
	width: 150px;
	padding: 0 10px;
}
.news_des dd {
	width: calc(100% - 150px);
}
.news_des dd a{
	color:#333;
	text-decoration:underline;
}
#slide_img_shop{
	position:relative;
	padding:0 30px;
	width:100%;
	box-sizing:border-box;

}
.box_shop01{
	margin-bottom:35px;
}
.box_img_shop{
	width:200px;
	max-width:200px;
	float:left;
	margin-right:15px;
	border:1px solid #FCD4D8;
	box-sizing:border-box;
}
.shop_img01{
	margin-bottom:0;
}
.shop_cm_img01{
	padding:3%;
	margin-bottom:0
}
.box_customer_cm{
	background:#F9F9F9;
	padding:15px;
	box-sizing:border-box;
}
.box_img_owner{
	width:30%;
	float:left;
}
.img_owner{
	margin-bottom:0;

	}
.box_owner_info{
	width:70%;
	padding-left:12px;
	box-sizing:border-box;
	float:right;
}

.owner_name{
	font-weight:bold;
	font-size:18px;
	margin-bottom:5px;
}
.owner_title{
	font-weight:bold;
	font-size:16px;
		margin-bottom:5px;
}
@media screen and (max-width:640px) {
	.box_img_shop{
		width:100%;
		margin:0 auto;
		float:none;
	}
	.news_des dt {
		margin-bottom:6px;
		font-weight:bold;
	}
	.news_des dt ,.news_des dd {
	width: 100%;
	padding: 0 10px;
	box-sizing:border-box;
	float:none;
}

}
</style>
<div id="main" class="clearfix">
  <!-- content start -->
  <div id="shop_news" class="clearfix">
    <div class="shop_news_inner clearfix">
      <p class="shop_news_title">○○○店からのお知らせ</p>
      <div class="news_des clearfix">
        <dl>
          <dt>2016.07.27</dt>
          <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
        </dl>
        <dl>
          <dt>2016.07.27</dt>
          <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
        </dl>
        <dl>
          <dt>2016.07.27</dt>
          <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
        </dl>
        <dl>
          <dt>2016.07.27</dt>
          <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
        </dl>
        <dl>
          <dt>2016.07.27</dt>
          <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
        </dl>
        <dl>
          <dt>2016.07.27</dt>
          <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
        </dl>
        <dl>
          <dt>2016.07.27</dt>
          <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
        </dl>
        <dl>
          <dt>2016.07.27</dt>
          <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
        </dl>
      </div>
    </div>
  </div>
  <div id="content">
    <div class="clearfix shop_detail">
      <div class="shop clearfix ">
        <h4>甲子園店</h4>
      </div>
      <div class="box_shop01 clearfix">
        <h4 class="service">店舗風景</h4>
        <div id="slide_img_shop" class=" clearfix">
          <div class="box_img_shop clearfix">
            <p class="shop_img01"><a href="http://www.yumerasen.co.jp/sys/wp-content/themes/yumerasen-test/images/concept.jpg" data-lightbox="shop_detail"><img src="<?php bloginfo('template_url'); ?>/images/img_shop01.jpg" alt="" /></a></p>
            <p class="shop_cm_img01">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>
          <div class="box_img_shop clearfix">
            <p class="shop_img01"><a href="http://www.yumerasen.co.jp/sys/wp-content/themes/yumerasen-test/images/concept.jpg" data-lightbox="shop_detail"><img src="<?php bloginfo('template_url'); ?>/images/img_shop01.jpg" alt="" /></a></p>
            <p class="shop_cm_img01">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>
          <div class="box_img_shop clearfix">
            <p class="shop_img01"><a href="http://www.yumerasen.co.jp/sys/wp-content/themes/yumerasen-test/images/concept.jpg" data-lightbox="shop_detail"><img src="<?php bloginfo('template_url'); ?>/images/img_shop01.jpg" alt="" /></a></p>
            <p class="shop_cm_img01">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>
          <div class="box_img_shop clearfix">
            <p class="shop_img01"><a href="http://www.yumerasen.co.jp/sys/wp-content/themes/yumerasen-test/images/concept.jpg" data-lightbox="shop_detail"><img src="<?php bloginfo('template_url'); ?>/images/img_shop01.jpg" alt="" /></a></p>
            <p class="shop_cm_img01">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>
          <div class="box_img_shop clearfix">
            <p class="shop_img01"><a href="http://www.yumerasen.co.jp/sys/wp-content/themes/yumerasen-test/images/concept.jpg" data-lightbox="shop_detail"><img src="<?php bloginfo('template_url'); ?>/images/img_shop01.jpg" alt="" /></a></p>
            <p class="shop_cm_img01">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>
        </div>
      </div>
      <div class="box_shop01 clearfix">
        <h4 class="service">店舗風景</h4>
        <div class="box_customer_cm clearfix">
          <div class="box_img_owner">
            <p class="img_owner"><img src="<?php bloginfo('template_url'); ?>/images/shop_img_d01.jpg" /></p>
          </div>
          <div class="box_owner_info">
            <p class="owner_name">○○○店　店長</p>
            <p class="owner_title">テキストが入ります。</p>
            <p class="txt_cm">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>
        </div>
      </div>
      <div class="box_shop01 clearfix">
        <h4 class="service">店舗風景</h4>
        <div class="map_info"> </div>
      </div>
    </div>
</div>
<!-- content end -->
<?php get_sidebar(); ?>
</div>

<!-- main end -->
<?php get_footer(); ?>
