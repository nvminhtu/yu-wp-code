<?php

/* Template directory */
add_shortcode('tmpurl', 'shortcode_tmpurl');
function shortcode_tmpurl() {
	return get_bloginfo('template_url');
}

/* Top page URL */
add_shortcode('url', 'shortcode_url');
function shortcode_url() {
	return get_bloginfo('url');
}


/* facebook button */
add_shortcode('facebook_button_count', 'shortcode_facebook_button');
function shortcode_facebook_button() {
	?>
 <iframe src="//www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;locale=ja_JP&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe>
	<?php
}

/* col2 */
add_shortcode('col2' , 'shortcode_col2' );
function shortcode_col2($atts) {
	 $col2 = shortcode_atts( array(
        'title' => '',
		'des' => '',
    ), $atts );	
    $return = '<li><p class="heading_primary"><i class="icon_star"></i><span>';
    $return .= $col2['title'];
    $return .= '</span></p><p>';
	$return .= $col2['des'];
	$return .= '</p></li>'; 
    return $return;
}

/* partner */
add_shortcode('partner' , 'shortcode_partner' );
function shortcode_partner($atts) {
	 $partner = shortcode_atts( array(
        'title' => '',
		'des' => '',
		'url' => '',
    ), $atts );	
    $return = '<div id="partner" class="clearfix"><div class="inner"><h3 class="title_partner">';
    $return .= $partner['title'];
    $return .= '</h3><p class="des_partner">';
	$return .= $partner['des'];
	$return .= '</p><p class="btn_01"><a href="'; 
	$return .= $partner['url'];
	$return .= '" class="fade"><img src="'. do_shortcode('[tmpurl]') .'/images/btn01.png" alt="partner" /></a></p></div></div>'; 
    return $return;
}














