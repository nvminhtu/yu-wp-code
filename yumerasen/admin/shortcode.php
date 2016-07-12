<?php

/* テーマファイルのあるディレクトリ */
add_shortcode('tmpurl', 'shortcode_tmpurl');
function shortcode_tmpurl() {
	return get_bloginfo('template_url');
}

/* トップページのURL */
add_shortcode('url', 'shortcode_url');
function shortcode_url() {
	return get_bloginfo('url');
}

/* お知らせ */
add_shortcode('whatsnew', 'shortcode_whatsnew');
function shortcode_whatsnew() {
	$work = "<div class=\"news\">\n";
	$work .= "<table>\n";
	
	// 最大5件表示
	query_posts('posts_per_page=5');
	// 投稿データ読み込み
	while(have_posts()) {
		the_post();
		
		// 日付の取得
		$work_date = get_the_time('Y/m/d');
		// タイトルの取得
		$work_title = get_the_title();
		
		$work .= "<tr><th>$work_date</th><td>$work_title  $work_post</td></tr>\n";
		
	}
	
	// 投稿記事のリセット
	wp_reset_query();
	
	$work_url = get_bloginfo('url');
	
	$work .= "</table>\n";
	$work .= "<!-- /.news --></div>\n";
	$work .= "<p class=\"alignR\"><a href=\"$work_url/topics/\">お知らせ一覧を見る</a></p>\n";
	
	return $work;
}

/* 症例一覧 */
add_shortcode('cases', 'shortcode_cases');
function shortcode_cases() {
	$cases = new WP_Query('post_type=case&orderby=menu_order&order=ASC');
	if ($cases->have_posts()) :
		$work = '';
		while ($cases->have_posts()) : $cases->the_post();
			$caseImgs[0] = get_post_meta($post->ID,'case_img_01',TRUE);
			$caseImgs[1] = get_post_meta($post->ID,'case_img_02',TRUE);
			$caseImgs[2] = get_post_meta($post->ID,'case_img_03',TRUE);
			$work .= '<div class="section">' . "\n";
			$work .= '<h4>' . get_the_title() . '</h4>' . "\n";
			if($caseImgs[2] == ''):
				if($caseImgs[1] == ''):
					$work .= '<p class="img_l">' . fs_get_attachment_image($caseImgs[0], 'medium') . '</p>' . "\n";
					$work .= '<p>' . str_replace("\n", "<br />\n", get_post_meta($post->ID,'case_text_01',TRUE)) . '</p>' . "\n";
				else:
					$work .= '<div class="case2 clearfix">' . "\n";
					$work .= '<div class="case1of2">' . "\n";
					$work .= '<p>' . fs_get_attachment_image($caseImgs[0], 'medium') . '</p>' . "\n";
					$work .= '<p>' . str_replace("\n", "<br />\n", get_post_meta($post->ID,'case_text_01',TRUE)) . '</p>' . "\n";
					$work .= '</div>' . "\n";
					$work .= '<div class="case2of2">' . "\n";
					$work .= '<p>' . fs_get_attachment_image($caseImgs[1], 'medium') . '</p>' . "\n";
					$work .= '<p>' . str_replace("\n", "<br />\n", get_post_meta($post->ID,'case_text_02',TRUE)) . '</p>' . "\n";
					$work .= '</div>' . "\n";
					$work .= '</div>' . "\n";
				endif;
			else:
			
			endif;
			unset($caseImgs);
			$work .= '<!-- /.section --></div>' . "\n";
		endwhile;
	endif;
	return $work;
}

/* よくある質問一覧 */
add_shortcode('faqs', 'shortcode_faqs');
function shortcode_faqs() {
	$work = '<dl class="faq">' . "\n";
	$faqs = new WP_Query('post_type=faq&orderby=date&order=DESC');
	if ($faqs->have_posts()) :
		while ($faqs->have_posts()) : $faqs->the_post();
			$work .= '<dt>' . get_the_title() . '</dt>' . "\n";
			$work .= '<dd>' . get_the_content() . '</dd>' . "\n";
		endwhile;
	endif;
	$work .= '</dl>' . "\n";
	return $work;
}



/* 12/03/23追加　お客様の声 */
add_shortcode('voice', 'shortcode_voice');
function shortcode_voice() {
	$loop = new WP_Query('post_type=voice&orderby=date&order=DESC');
	if ($loop->have_posts()) :
		$work = '';
		while ($loop->have_posts()) : $loop->the_post();
			$work .= '<p class="index_text02">' . get_the_date() . '</p>'."\n";
			$work .= '<p class="index_text03">' . get_the_title() . '</p>'."\n";
		endwhile;
	endif;
	
	return $work;
}




/* 12/03/23追加　症例 */
add_shortcode('works', 'shortcode_works');
function shortcode_works() {
	$loop = new WP_Query('post_type=works&orderby=date&order=DESC');
	if ($loop->have_posts()) :
		$work = '';
		while ($loop->have_posts()) : $loop->the_post();
			$work .= '<p class="index_text02">' . get_the_date() . '</p>'."\n";
			$work .= '<p class="index_text03"><a href="'. get_permalink().'">' . get_the_title() . '</a></p>'."\n";
		endwhile;
	endif;
	
	return $work;
}






?>
