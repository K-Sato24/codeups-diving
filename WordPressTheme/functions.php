<?php
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // titleタグ自動生成
  add_theme_support('html5', array( // HTML5による出力
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'my_setup');

/* CSSとJavaScriptの読み込み */
function my_script_init()
{
  // Googleフォントの読み込み
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap', array(), null);

  // SwiperのCSS
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.1');

  // style.cssの読み込み
  wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.1');

  // WordPressに含まれているjquery.jsを読み込まない
  wp_deregister_script('jquery');

  // jQuery(CDN)の読み込み
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', true);

  // Swiper(CDN)の読み込み
  wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), '11.0.1', true);

  // GSAP(CDN)の読み込み
  wp_enqueue_script('gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array('jquery'), '3.12.5', true);

  // jquery.inview.min.jsの読み込み
  wp_enqueue_script('inview-js', get_template_directory_uri() . '/assets/js/jquery.inview.min.js', array('jquery', 'swiper', 'gsap'), '1.0.1', true);

  // gsap.jsの読み込み
  wp_enqueue_script('gsap-main-js', get_template_directory_uri() . '/assets/js/gsap.js', array('jquery', 'swiper', 'gsap', 'inview-js'), '1.0.1', true);

  // script.jsの読み込み
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery', 'swiper', 'gsap', 'inview-js', 'gsap-main-js'), '1.0.1', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');


// rel='preconnect'属性を追加する関数
function add_rel_preconnect($html, $handle, $href, $media)
{
  $preconnect_handles = ['google-fonts', 'swiper-css'];

  if (in_array($handle, $preconnect_handles)) {
    $html = <<<EOT
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
$html
EOT;
  }

  return $html;
}

add_filter('style_loader_tag', 'add_rel_preconnect', 10, 4);

function custom_posts_per_page($query)
{
  if (!is_admin() && $query->is_main_query()) {
    // カスタム投稿のスラッグを記述
    if (is_post_type_archive('works') || is_tax('genre')) {
      // 表示件数を指定
      $query->set('posts_per_page', 6);
    }
  }
}
add_action('pre_get_posts', 'custom_posts_per_page');

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}

// 親ページとその子ページも含めて条件分岐させる
function is_parent_slug()
{
  global $post;
  if ($post->post_parent) {
    $post_data = get_post($post->post_parent);
    return $post_data->post_name;
  }
}

// WordPressのバージョン情報を読み取られないようにする
// ヘッダー部分からWordPressのバージョン情報を削除
remove_action('wp_head', 'wp_generator');

// RSSフィードからWordPressのバージョン情報を削除
add_filter('the_generator', '__return_empty_string');

// スクリプトとスタイルシートのURLからバージョンパラメータを削除
function remove_version_scripts_styles($src)
{
  if (strpos($src, 'ver=')) {
    $src = remove_query_arg('ver', $src);
  }
  return $src;
}
add_filter('style_loader_src', 'remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'remove_version_scripts_styles', 9999);

// 404ページにnoindexする
function add_noindex_to_404()
{
  if (is_404()) {
    echo '<meta name="robots" content="noindex">';
  }
}
add_action('wp_head', 'add_noindex_to_404');


// wp_pagenavi()の出力をキャプチャしてカスタマイズ
// テンプレート内でwp_pagenavi()の代わりにcustom_wp_pagenavi()を呼び出す
function custom_wp_pagenavi()
{
  // 出力をキャプチャ
  ob_start();
  if (function_exists('wp_pagenavi')) {
    wp_pagenavi();
  }
  $pagination_html = ob_get_clean();

  // 前のリンクと次のリンクをチェック
  $previous_link = get_previous_posts_link();
  $next_link = get_next_posts_link();

  // 前のリンクが存在しない場合に擬似リンクを追加
  if (!$previous_link) {
    $previous_disabled = '<div class="pagination__prev disabled">
    <a href="/">
      <span class="pagination__prev-arrow"></span>
    </a>
  </div>';
    $pagination_html = $previous_disabled . $pagination_html;
  }

  // 次のリンクが存在しない場合に擬似リンクを追加
  if (!$next_link) {
    $next_disabled = '<div class="pagination__next disabled">
    <a href="/">
      <span class="pagination__next-arrow"></span>
    </a>
  </div>';
    $pagination_html .= $next_disabled;
  }

  // カスタマイズされたHTMLを出力
  echo $pagination_html;
}

// 人気記事を表示するために、アクセス数を記録する
// 投稿のビュー数を設定
function set_post_views($postID)
{
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if ($count == '') {
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
  } else {
    $count++;
    update_post_meta($postID, $count_key, $count);
  }
}

// 投稿が表示されるたびにビュー数を追跡
function track_post_views($post_id)
{
  if (!is_single()) return;
  if (empty($post_id)) {
    global $post;
    $post_id = $post->ID;
  }
  set_post_views($post_id);
}
add_action('wp_head', 'track_post_views');

//記事のアクセス数を表示
function getPostViews($postID)
{
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if ($count == '') {
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return "0 View";
  }
  return $count . ' Views';
}

//記事のアクセス数を保存
function setPostViews($postID)
{
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if ($count == '') {
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
  } else {
    $count++;
    update_post_meta($postID, $count_key, $count);
  }
}
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// カスタム投稿のシングルページを生成しない
add_filter('campaign_rewrite_rules', '__return_empty_array');
