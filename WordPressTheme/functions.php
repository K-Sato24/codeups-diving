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

// カスタム投稿の表示数を指定
function modify_main_query($query)
{
  // 管理画面か、メインクエリでない場合は処理を終了する
  if (is_admin() || !$query->is_main_query()) {
    return; // 何もせず関数を終了
  }

  // カスタム投稿タイプ「campaign」のアーカイブページ、またはタクソノミー「campaign_category」のアーカイブページの場合
  if (is_post_type_archive('campaign') || is_tax('campaign_category')) {
    // 1ページに表示する投稿数を4に設定
    $query->set('posts_per_page', 4);
  }
  // カスタム投稿タイプ「voice」のアーカイブページ、またはタクソノミー「voice_category」のアーカイブページの場合
  elseif (is_post_type_archive('voice') || is_tax('voice_category')) {
    // 1ページに表示する投稿数を6に設定
    $query->set('posts_per_page', 6);
  }
}

// pre_get_postsフックを使ってクエリを変更
add_action('pre_get_posts', 'modify_main_query');


// 月別アーカイブのカスタマイズ（年別>月別でネスト表示させる）
function wp_get_custom_archives()
{
  global $wpdb, $wp_locale;

  // 最新の12か月のアーカイブを取得
  $months = $wpdb->get_results("
        SELECT DISTINCT YEAR(post_date) AS year, MONTH(post_date) AS month
        FROM $wpdb->posts
        WHERE post_type = 'post' AND post_status = 'publish'
        ORDER BY post_date DESC
        LIMIT 12
    ");

  if (empty($months)) {
    return;
  }

  $output = '';
  $current_year = 0;

  foreach ($months as $month) {
    $year = $month->year;
    $month_number = zeroise($month->month, 2);
    $month_name = $wp_locale->get_month($month_number);

    if ($current_year != $year) {
      if ($current_year != 0) {
        $output .= '</ul></details>'; // 前の年のリストを閉じる
      }
      $output .= '<details class="aside-archive__accordion js-details' . ($current_year == 0 ? ' is-opened" open>' : '">');

      $output .= '<summary class="aside-archive__year js-summary">' . $year . '</summary>';
      $output .= '<ul class="aside-archive__content js-accordion-content">';
      $current_year = $year;
    }

    $url = get_month_link($year, $month_number);
    $output .= '<li class="aside-archive__month"><a href="' . esc_url($url) . '">' . $month_name . '</a></li>';
  }

  $output .= '</ul></details>'; // 最後の年のリストを閉じる

  echo $output;
}

// 固定ページの不要な項目を非表示にする
function my_remove_post_editor_support()
{
  remove_post_type_support('page', 'title'); // タイトル
  remove_post_type_support('page', 'editor'); // 本文
  remove_post_type_support('page', 'thumbnail'); // アイキャッチ 

  // カスタム投稿タイプのスラッグを配列で指定
  $custom_post_types = array('campaign', 'voice'); // ここに複数のカスタム投稿タイプのスラッグを指定

  // ループで各カスタム投稿タイプから特定の要素を非表示にする
  foreach ($custom_post_types as $post_type) {
    // remove_post_type_support($post_type, 'title'); // タイトル
    remove_post_type_support($post_type, 'editor'); // 本文
    // remove_post_type_support($post_type, 'thumbnail'); // アイキャッチ画像

    // remove_post_type_support(('カスタム投稿タイプのスラッグ'), 'title'); // カスタム投稿のタイトル
    // remove_post_type_support(('カスタム投稿タイプのスラッグ'), 'editor'); // カスタム投稿の本文
    // remove_post_type_support(('カスタム投稿タイプのスラッグ'), 'thumbnail'); // カスタム投稿のアイキャッチ
  }
}
add_action('init', 'my_remove_post_editor_support');
// 固定ページのメタボックスを非表示にする
function remove_pageedit_metabox()
{
  remove_meta_box('postcustom', 'page', 'normal'); // カスタムフィールド
  remove_meta_box('commentstatusdiv', 'page', 'normal'); // ディスカッション
  remove_meta_box('slugdiv', 'page', 'normal'); // スラッグ
  remove_meta_box('authordiv', 'page', 'normal'); // 投稿者
  remove_meta_box('pageparentdiv', 'page', 'normal'); // ページ属性
  remove_meta_box('revisionsdiv', 'page', 'normal'); // リビジョン
  // remove_meta_box('submitdiv', 'page', 'side'); // 公開
}
add_action('admin_menu', 'remove_pageedit_metabox');

// プライバシーと利用規約の本文だけ編集可能にする
function my_enable_editor_for_specific_pages_by_slug()
{
  // 編集可能にしたいページのスラッグを配列に追加
  $editable_pages = array('privacy-policy', 'terms-of-service'); // スラッグを指定

  global $pagenow;

  // 現在のページが編集画面であるかをチェック
  if ('post.php' == $pagenow) {
    $post_id = isset($_GET['post']) ? intval($_GET['post']) : 0;
    if ($post_id) {
      $post = get_post($post_id);
      if ($post && in_array($post->post_name, $editable_pages)) {
        add_post_type_support('page', 'editor');
      }
    }
  }
}
add_action('admin_init', 'my_enable_editor_for_specific_pages_by_slug');

// 管理画面の「投稿」の名称を変更
function Change_menulabel()
{
  global $menu;
  global $submenu;
  $name = 'ブログ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name . '一覧';
  $submenu['edit.php'][10][0] = '新しい' . $name;
}
function Change_objectlabel()
{
  global $wp_post_types;
  $name = 'ブログ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name . 'の新規追加';
  $labels->edit_item = $name . 'の編集';
  $labels->new_item = '新規' . $name;
  $labels->view_item = $name . 'を表示';
  $labels->search_items = $name . 'を検索';
  $labels->not_found = $name . 'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}
add_action('init', 'Change_objectlabel');
add_action('admin_menu', 'Change_menulabel');

// ブログ記事ではロゴをdivタグに変更
function custom_header_tag()
{
  if (is_single()) {
    return 'div';
  } else {
    return 'h1';
  }
}
