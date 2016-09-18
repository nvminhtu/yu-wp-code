<?php
/* ショートコードを定義しているファイルのインクルード */
require_once(dirname(__FILE__).'/admin/shortcode.php');

// アイキャッチ画像を利用できるようにします。
add_theme_support('post-thumbnails');

// アイキャッチ画像サイズ設定
set_post_thumbnail_size(90, 90 ,true);

// サイドバー用画像サイズ設定
add_image_size('small_thumbnail', 60, 60, true);

//トップ用画像サイズ設定
add_image_size('top_thumbnail', 140, 140, true);

// アーカイブ用画像サイズ設定
add_image_size('large_thumbnail', 120, 120, true);

// 中ヘッダー用画像サイズ設定
add_image_size('inpage_image', 800, 140);

//投稿ページの画像アップロード（wp_get_attachment_image）の自動リサイズ指定
add_image_size('tate-long', 300, 400);

//投稿ページの画像アップロード（wp_get_attachment_image）の自動リサイズ指定
add_image_size('yoko-long', 360, 270);

//投稿ページのギャラリー画像（wp_get_attachment_image）の自動リサイズ指定
add_image_size('gallary-large', 680, 510);

//投稿ページのギャラリー画像（wp_get_attachment_image）の自動リサイズ指定
add_image_size('gallary-small', 100, 75);

// 抜粋文が自動的に生成される場合に最後に付与される文字列を変更します。
function cms_excerpt_more() {
  return '...';
}
add_filter('excerpt_more', 'cms_excerpt_more');


// 抜粋文が自動的に生成される場合にデフォルトの文字数を変更します。
function cms_excerpt_length() {
  return 120;
}
add_filter('excerpt_mblength', 'cms_excerpt_length');


// 固定ページで抜粋を入力できるようにする。
add_post_type_support('page', 'excerpt');


// 30文字表示抜粋（自動生成時）表示テンプレートタグの定義
function the_short_excerpt() {
  add_filter('excerpt_mblength', 'short_excerpt_length', 11);
  the_excerpt();
  remove_filter('excerpt_mblength', 'short_excerpt_length', 11);
}

function short_excerpt_length() {
  return 30;
}

// 58文字表示抜粋表示テンプレートタグの定義
function the_pickup_excerpt() {
  add_filter('get_the_excerpt', 'get_pickup_excerpt', 0);
  add_filter('excerpt_mblength', 'pickup_excerpt_length', 11);
  the_excerpt();
  remove_filter('get_the_excerpt', 'get_pickup_excerpt', 0);
  remove_filter('excerpt_mblength', 'pickup_excerpt_length', 11);
}

// トップページのピックアップ部分の抜粋文を切り詰める。
function get_pickup_excerpt($excerpt) {
  if ($excerpt) {
    $excerpt = strip_tags($excerpt);
    $excerpt_len = mb_strlen($excerpt);
    if ($excerpt_len > 58) {
      $excerpt = mb_substr($excerpt, 0, 58) . ' ...';
    }
  }
  return $excerpt;
}

function pickup_excerpt_length() {
  return 58;
}

// 投稿ページと固定ページで抜粋を入力できるようにする。
add_post_type_support('post', 'excerpt');
add_post_type_support('page', 'excerpt');

// OGPのための各種設定
// アイキャッチ画像のURL取得
function get_thumbnail_image_url() {
  $img_id = get_post_thumbnail_id();
  $img_url = wp_get_attachment_image_src($img_id, 'thumbnail', true);
  return $img_url[0];
}


// ogp用description取得
function get_ogp_excerpted_content($content) {
  $content = strip_tags($content);
  $content = mb_substr($content, 0, 120, 'UTF-8');
  $content = preg_replace('/\s\s+/', '', $content);
  $content = preg_replace('/[\r\n]/', '', $content);
  $content = esc_attr($content) . ' ...';
  return $content;
}

require_once('inc/custom-post-types.php');
// function include_com() {
//     locate_template( array( 'inc/custom-post-types.php' ), true, true );
// }
// add_action( 'after_setup_theme', 'include_com' );
