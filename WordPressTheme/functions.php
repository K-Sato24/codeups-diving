<?php
/**
 * Functions and definitions
 *
 * @package WordPressTheme
 */

/**
 * テーマのセットアップを行う関数
 *
 * テーマに必要なサポート機能を追加
 *
 * @return void
 */
function my_setup() {
	add_theme_support( 'post-thumbnails' ); // アイキャッチ画像を有効化.
	add_theme_support( 'automatic-feed-links' ); // 投稿とコメントのRSSフィードのリンクを有効化.
	add_theme_support( 'title-tag' ); // titleタグ自動生成.
	add_theme_support(
		'html5',
		array( // HTML5による出力.
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );


/**
 * CSSとJavaScriptの読み込みを行う関数
 *
 * 必要なスタイルシートとスクリプトを読み込みます。
 *
 * @return void
 */
function my_script_init() {
	// Googleフォントの読み込み.
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap', array(), '1.0.0' );

	// SwiperのCSS.
	wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.1' );

	// style.cssの読み込み.
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.1' );

	// WordPressに含まれているjquery.jsを読み込まない.
	wp_deregister_script( 'jquery' );

	// jQuery(CDN)の読み込み.
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', true );

	// Swiper(CDN)の読み込み.
	wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array( 'jquery' ), '11.0.1', true );

	// GSAP(CDN)の読み込み.
	wp_enqueue_script( 'gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array( 'jquery' ), '3.12.5', true );

	// jquery.inview.min.jsの読み込み.
	wp_enqueue_script( 'inview-js', get_template_directory_uri() . '/assets/js/jquery.inview.min.js', array( 'jquery', 'swiper', 'gsap' ), '1.0.1', true );

	// gsap.jsの読み込み.
	wp_enqueue_script( 'gsap-main-js', get_template_directory_uri() . '/assets/js/gsap.js', array( 'jquery', 'swiper', 'gsap', 'inview-js' ), '1.0.1', true );

	// script.jsの読み込み.
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery', 'swiper', 'gsap', 'inview-js', 'gsap-main-js' ), '1.0.1', true );
}
add_action( 'wp_enqueue_scripts', 'my_script_init' );


/**
 * スタイルシートに rel='preconnect' 属性を追加する関数
 *
 * @param string $html   リンクタグのHTML.
 * @param string $handle スタイルハンドル名.
 * @return string 修正されたリンクタグのHTML.
 */
function add_rel_preconnect( $html, $handle ) {
	$preconnect_handles = array( 'google-fonts', 'swiper-css' );

	if ( in_array( $handle, $preconnect_handles, true ) ) {
		$html = <<<EOT
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
$html
EOT;
	}

	return $html;
}
add_filter( 'style_loader_tag', 'add_rel_preconnect', 10, 2 );


/**
 * Contact Form 7で自動挿入されるPタグ、brタグを削除
 *
 * @return bool false を返して自動挿入を無効にする
 */
function wpcf7_autop_return_false() {
	return false;
}
add_filter( 'wpcf7_autop_or_not', 'wpcf7_autop_return_false' );


/**
 * 親ページとその子ページも含めて条件分岐させる
 *
 * @return string 親ページのスラッグ
 */
function is_parent_slug() {
	global $post;
	if ( $post->post_parent ) {
		$post_data = get_post( $post->post_parent );
		return $post_data->post_name;
	}
}


/**
 * WordPressのバージョン情報をヘッダーから削除する
 */
remove_action( 'wp_head', 'wp_generator' );


/**
 * RSSフィードからWordPressのバージョン情報を削除する
 *
 * @return string 空の文字列を返す
 */
add_filter( 'the_generator', '__return_empty_string' );


/**
 * スクリプトとスタイルシートのURLからバージョンパラメータを削除
 *
 * @param string $src スクリプトまたはスタイルのURL
 * @return string バージョンパラメータを削除したURL
 */
function remove_version_scripts_styles( $src ) {
	if ( strpos( $src, 'ver=' ) ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
}
add_filter( 'style_loader_src', 'remove_version_scripts_styles', 9999 );
add_filter( 'script_loader_src', 'remove_version_scripts_styles', 9999 );


/**
 * 404ページにnoindexを追加する
 */
function add_noindex_to_404() {
	if ( is_404() ) {
		echo '<meta name="robots" content="noindex">';
	}
}
add_action( 'wp_head', 'add_noindex_to_404' );


/**
 * 投稿のビュー数を設定する関数
 *
 * @param int $post_id 投稿ID.
 * @return void
 */
function set_post_views( $post_id ) {
	$count_key = 'post_views_count';
	$count     = get_post_meta( $post_id, $count_key, true );
	if ( $count == '' ) {
		$count = 0;
		delete_post_meta( $post_id, $count_key );
		add_post_meta( $post_id, $count_key, '0' );
	} else {
		++$count;
		update_post_meta( $post_id, $count_key, $count );
	}
}


/**
 * 投稿が表示されるたびにビュー数を追跡する関数
 *
 * @param int $post_id 投稿ID.
 * @return void
 */
function track_post_views( $post_id ) {
	if ( ! is_single() ) {
		return;
	}
	if ( empty( $post_id ) ) {
		global $post;
		$post_id = $post->ID;
	}
	set_post_views( $post_id );
}
add_action( 'wp_head', 'track_post_views' );


/**
 * 投稿のビュー数を取得する関数
 *
 * @param int $post_id 投稿ID.
 * @return string 投稿のビュー数
 */
function get_post_views( $post_id ) {
	$count_key = 'post_views_count';
	$count     = get_post_meta( $post_id, $count_key, true );
	if ( $count == '' ) {
		delete_post_meta( $post_id, $count_key );
		add_post_meta( $post_id, $count_key, '0' );
		return '0 View';
	}
	return $count . ' Views';
}


/**
 * 投稿のビュー数を保存する関数
 *
 * @param int $post_id 投稿ID.
 * @return void
 */
function set_post_views_count( $post_id ) {
	$count_key = 'post_views_count';
	$count     = get_post_meta( $post_id, $count_key, true );
	if ( '' === $count ) {
		$count = 0;
		delete_post_meta( $post_id, $count_key );
		add_post_meta( $post_id, $count_key, '0' );
	} else {
		++$count;
		update_post_meta( $post_id, $count_key, $count );
	}
}

remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );


/**
 * メインクエリをカスタマイズする関数
 *
 * @param WP_Query $query WP_Queryオブジェクト.
 * @return void
 */
function modify_main_query( $query ) {
	// 管理画面か、メインクエリでない場合は処理を終了する.
	if ( is_admin() || ! $query->is_main_query() ) {
		return; // 何もせず関数を終了.
	}

	// カスタム投稿タイプ「campaign」のアーカイブページ、またはタクソノミー「campaign_category」のアーカイブページの場合.
	if ( is_post_type_archive( 'campaign' ) || is_tax( 'campaign_category' ) ) {
		// 1ページに表示する投稿数を4に設定.
		$query->set( 'posts_per_page', 4 );
	}
	// カスタム投稿タイプ「voice」のアーカイブページ、またはタクソノミー「voice_category」のアーカイブページの場合.
	elseif ( is_post_type_archive( 'voice' ) || is_tax( 'voice_category' ) ) {
		// 1ページに表示する投稿数を6に設定.
		$query->set( 'posts_per_page', 6 );
	}
}
add_action( 'pre_get_posts', 'modify_main_query' );


/**
 * 月別アーカイブのカスタマイズ（年別>月別でネスト表示させる）
 *
 * @return void
 */
function wp_get_custom_archives() {
	global $wp_locale;

	// キャッシュからデータを取得.
	$months = wp_cache_get( 'custom_archives_months' );

	if ( false === $months ) {
		// キャッシュが存在しない場合、データベースから取得.
		$months = array();

		$args = array(
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'posts_per_page' => -1,
			'orderby'        => 'post_date',
			'order'          => 'DESC',
			'fields'         => 'ids', // 投稿IDのみ取得.
			'date_query'     => array(
				array(
					'after' => '1 year ago',
				),
			),
		);

		$posts = get_posts( $args );

		if ( $posts ) {
			foreach ( $posts as $post_id ) {
				$year  = get_the_date( 'Y', $post_id );
				$month = get_the_date( 'm', $post_id );

				$months[ "$year-$month" ] = (object) array(
					'year'  => $year,
					'month' => $month,
				);
			}

			// 重複を排除し、月ごとにユニークにする.
			$months = array_unique( $months, SORT_REGULAR );
		}

		// キャッシュに保存（1時間の有効期限）.
		wp_cache_set( 'custom_archives_months', $months, '', HOUR_IN_SECONDS );
	}

	if ( empty( $months ) ) {
		return;
	}

	$output       = '';
	$current_year = 0;

	foreach ( $months as $month ) {
		$year         = $month->year;
		$month_number = zeroise( $month->month, 2 );
		$month_name   = $wp_locale->get_month( $month_number );

		if ( $year !== $current_year ) {
			if ( 0 !== $current_year ) {
				$output .= '</ul></details>'; // 前の年のリストを閉じる.
			}
			$output .= '<details class="aside-archive__accordion js-details' . ( 0 === $current_year ? ' is-opened" open>' : '">' );

			$output      .= '<summary class="aside-archive__year js-summary">' . $year . '</summary>';
			$output      .= '<ul class="aside-archive__content js-accordion-content">';
			$current_year = $year;
		}

		$url     = get_month_link( $year, $month_number );
		$output .= '<li class="aside-archive__month"><a href="' . $url . '">' . $month_name . '</a></li>';
	}

	$output .= '</ul></details>'; // 最後の年のリストを閉じる.

	// エスケープ処理を適用して出力.
	echo wp_kses_post( $output );
}


/**
 * 固定ページの不要な項目を非表示にする
 *
 * @return void
 */
function my_remove_post_editor_support() {
	// remove_post_type_support('page', 'title'); // タイトル.
	remove_post_type_support( 'page', 'editor' ); // 本文.
	remove_post_type_support( 'page', 'thumbnail' ); // アイキャッチ.

	// カスタム投稿タイプのスラッグを配列で指定.
	$custom_post_types = array( 'campaign', 'voice' ); // ここに複数のカスタム投稿タイプのスラッグを指定.

	// ループで各カスタム投稿タイプから特定の要素を非表示にする.
	foreach ( $custom_post_types as $post_type ) {
		// remove_post_type_support($post_type, 'title'); // タイトル.
		remove_post_type_support( $post_type, 'editor' ); // 本文.
		// remove_post_type_support($post_type, 'thumbnail'); // アイキャッチ画像.
	}
}
add_action( 'init', 'my_remove_post_editor_support' );


/**
 * 固定ページのメタボックスを非表示にする
 *
 * @return void
 */
function remove_pageedit_metabox() {
	remove_meta_box( 'postcustom', 'page', 'normal' ); // カスタムフィールド.
	remove_meta_box( 'commentstatusdiv', 'page', 'normal' ); // ディスカッション.
	// remove_meta_box('slugdiv', 'page', 'normal'); // スラッグ.
	remove_meta_box( 'authordiv', 'page', 'normal' ); // 投稿者.
	remove_meta_box( 'pageparentdiv', 'page', 'normal' ); // ページ属性.
	remove_meta_box( 'revisionsdiv', 'page', 'normal' ); // リビジョン.
	// remove_meta_box('submitdiv', 'page', 'side'); // 公開.
}
add_action( 'admin_menu', 'remove_pageedit_metabox' );


/**
 * 特定のページでエディタを有効にする関数
 *
 * @return void
 */
function my_enable_editor_for_specific_pages_by_slug() {
	// 編集可能にしたいページのスラッグを配列に追加.
	$editable_pages = array( 'privacy-policy', 'terms-of-service' ); // スラッグを指定.

	global $pagenow;

	// 現在のページが編集画面であるかをチェック.
	if ( 'post.php' == $pagenow ) {
		$post_id = isset( $_GET['post'] ) ? intval( $_GET['post'] ) : 0;
		if ( $post_id ) {
			$post = get_post( $post_id );
			if ( $post && in_array( $post->post_name, $editable_pages ) ) {
				add_post_type_support( 'page', 'editor' );
			}
		}
	}
}
add_action( 'admin_init', 'my_enable_editor_for_specific_pages_by_slug' );


/**
 * 管理画面の「投稿」の名称を変更する関数
 *
 * @return void
 */
function change_menu_label() {
	global $menu, $submenu;

	// メニュー項目を変更.
	foreach ( $menu as &$menu_item ) {
		if ( 'edit.php' === $menu_item[2] ) {
			$menu_item[0] = 'ブログ';
			break;
		}
	}

	// サブメニュー項目を変更.
	if ( isset( $submenu['edit.php'] ) ) {
		foreach ( $submenu['edit.php'] as &$submenu_item ) {
			switch ( $submenu_item[2] ) {
				case 'edit.php':
					$submenu_item[0] = 'ブログ一覧';
					break;
				case 'post-new.php':
					$submenu_item[0] = '新しいブログ';
					break;
			}
		}
	}
}
add_action( 'admin_menu', 'change_menu_label' );


/**
 * 投稿オブジェクトのラベルを変更する関数
 *
 * @return void
 */
function change_object_label() {
	global $wp_post_types;

	$name   = 'ブログ';
	$labels = &$wp_post_types['post']->labels;

	$labels->name               = $name;
	$labels->singular_name      = $name;
	$labels->add_new            = _x( '追加', 'ブログ' );
	$labels->add_new_item       = $name . 'の新規追加';
	$labels->edit_item          = $name . 'の編集';
	$labels->new_item           = '新規' . $name;
	$labels->view_item          = $name . 'を表示';
	$labels->search_items       = $name . 'を検索';
	$labels->not_found          = $name . 'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}
add_action( 'init', 'change_object_label' );


/**
 * campaignのタクソノミーの取得関数を定義
 *
 * @return array タクソノミーのターム
 */
function get_campaign_taxonomy_terms() {
	// 'campaign_category' タクソノミーのタームを取得.
	$terms = get_terms(
		array(
			'taxonomy'   => 'campaign_category', // 正しいタクソノミースラッグを指定.
			'hide_empty' => false,
		)
	);

	// タームが存在するか確認.
	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
		$options = array();
		foreach ( $terms as $term ) {
			// タームのスラッグを値、名前をラベルとして配列に追加.
			$options[ $term->slug ] = $term->name;
		}
		return $options;
	}
	return array();
}


/**
 * Contact Form 7のタグ生成フィルタを追加する関数
 *
 * @param array $tag タグ属性.
 * @return array 修正されたタグ属性.
 */
function dynamic_campaign_selectbox( $tag ) {
	// name属性が'category'の時だけ処理を行う.
	if ( 'category' !== $tag['name'] ) {
		return $tag;
	}

	$options       = get_campaign_taxonomy_terms();
	$tag['values'] = array();
	$tag['labels'] = array();

	// 最初のオプションを追加.
	$tag['values'][] = 'default';
	$tag['labels'][] = 'キャンペーン内容を選択';

	if ( ! empty( $options ) ) {
		foreach ( $options as $value => $label ) {
			$tag['values'][] = $value;  // 値としてスラッグを設定.
			$tag['labels'][] = $label;  // 表示ラベルとして名前を設定.
		}
	}

	return $tag;
}
add_filter( 'wpcf7_form_tag', 'dynamic_campaign_selectbox', 10, 2 );


/**
 * Priceの配列を提議（page-price.phpとfront-page.phpで使用）
 *
 * @return array Priceのグループ名とラベルの配列.
 */
function get_group_names() {
	return array(
		'license_course' => 'ライセンス講習',
		'trial_diving'   => '体験ダイビング',
		'fun_diving'     => 'ファンダイビング',
		'special_diving' => 'スペシャルダイビング',
	);
}