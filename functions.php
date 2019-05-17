<?php

/**********************************************
 * 
 * phpファイルを読み込むショートコード
 * 投稿内でネットワークホームurlを取得[home_url]
 * 【出力カスタマイズ】固定ページで抜粋の機能を有効化
 * 概要（抜粋）の文字数調整
 * 概要（抜粋）の末の設定
 * アイキャッチ画像
 * タイトルの出力
 * パンくずリスト
 ***********************************************/

// add_filter( 'tiny_mce_before_init', 'override_mce_options' );

/*
* phpファイルを読み込むショートコード
*/
function loop_main( $atts ) {
	ob_start();
	get_template_part( 'parts-template/loop-main' ); // parts-template/loop-main.phpを読みこみ
	return ob_get_clean();
}
add_shortcode( 'loop', 'loop_main' );

/*
* 投稿内でネットワークホームurlを取得[home_url]
*/
function homeUrl() {
  return network_home_url();
}
add_shortcode('home_url', 'homeUrl');

/*
*【出力カスタマイズ】固定ページで抜粋の機能を有効化
*/
add_post_type_support( 'page', 'excerpt' );

/*
* 概要（抜粋）の文字数調整
*/
function new_excerpt_mblength( $length ) {
	return 29; // 抜粋する文字数を29文字に設定(高さ100になるように)
}
add_filter( 'excerpt_mblength', 'new_excerpt_mblength' );


/*
* 概要（抜粋）の末の設定
*/
function new_excerpt_more( $more ) {
	return '…';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

/*
* アイキャッチ画像
*/
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 350, 250, true );

/*
* タイトルの出力
*/
add_theme_support( 'title-tag' );
function change_title_tag( $title ) {
	if ( is_category() ) { /* カテゴリーアーカイブの場合 */
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) { /* タグアーカイブの場合 */
		$title = single_tag_title( '', false );
	} elseif ( is_post_type_archive( 'parts' ) ) { /* parts投稿タイプのアーカイブの場合 */
		$title = '任意のタイトル';
	}
	return $title;
}
add_filter( 'pre_get_document_title', 'change_title_tag' );

/*
* パンくずリスト
*/
if ( ! function_exists( 'custom_breadcrumb' ) ) {
	function custom_breadcrumb( $wp_obj = null ) {

		// トップページでは何も出力しない
		// if ( is_home() || is_front_page() ) {
		// 	return false;
		// }

		// そのページのWPオブジェクトを取得
		$wp_obj = $wp_obj ?: get_queried_object();

		echo '<div id="topic-path">' . // id名などは任意で
				'<ul>' .
					'<li>' .
						'<a href="' . home_url() . '"><span>HOME</span></a>' .
					'</li>';

		if ( is_attachment() ) {

			/**
			 * 添付ファイルページ ( $wp_obj : WP_Post )
			 * ※ 添付ファイルページでは is_single() も true になるので先に分岐
			 */
			echo '<li><span>' . $wp_obj->post_title . '</span></li>';

		} elseif ( is_single() ) {

			/**
			 * 投稿ページ ( $wp_obj : WP_Post )
			 */
			$post_id    = $wp_obj->ID;
			$post_type  = $wp_obj->post_type;
			$post_title = $wp_obj->post_title;

			// カスタム投稿タイプかどうか
			if ( $post_type !== 'post' ) {

				$the_tax = '';  // そのサイトに合わせ、投稿タイプごとに分岐させて明示的に指定してもよい

				// 投稿タイプに紐づいたタクソノミーを取得 (投稿フォーマットは除く)
				$tax_array = get_object_taxonomies( $post_type, 'names' );
				foreach ( $tax_array as $tax_name ) {
					if ( $tax_name !== 'post_format' ) {
						$the_tax = $tax_name;
						break;
					}
				}

				// カスタム投稿タイプ名の表示
				echo '<li>' .
						'<a href="' . get_post_type_archive_link( $post_type ) . '">' .
							'<span>' . get_post_type_object( $post_type )->label . '</span>' .
						'</a>' .
					 '</li>';

			} else {
				$the_tax = 'category';  // 通常の投稿の場合、カテゴリーを表示
			}

			// タクソノミーが紐づいていれば表示
			if ( $the_tax !== '' ) {

				$child_terms  = array();   // 子を持たないタームだけを集める配列
				$parents_list = array();  // 子を持つタームだけを集める配列

				// 投稿に紐づくタームを全て取得
				$terms = get_the_terms( $post_id, $the_tax );

				if ( ! empty( $terms ) ) {

					// 全タームの親IDを取得
					foreach ( $terms as $term ) {
						if ( $term->parent !== 0 ) {
							$parents_list[] = $term->parent;
						}
					}

					// 親リストに含まれないタームのみ取得
					foreach ( $terms as $term ) {
						if ( ! in_array( $term->term_id, $parents_list ) ) {
							$child_terms[] = $term;
						}
					}

					// 最下層のターム配列から一つだけ取得
					$term = $child_terms[0];

					if ( $term->parent !== 0 ) {

						// 親タームのIDリストを取得
						$parent_array = array_reverse( get_ancestors( $term->term_id, $the_tax ) );

						foreach ( $parent_array as $parent_id ) {
							$parent_term = get_term( $parent_id, $the_tax );
							echo '<li>' .
									'<a href="' . get_term_link( $parent_id, $the_tax ) . '">' .
									  '<span>' . $parent_term->name . '</span>' .
									'</a>' .
								 '</li>';
						}
					}

					// 最下層のタームを表示
					echo '<li>' .
							'<a href="' . get_term_link( $term->term_id, $the_tax ) . '">' .
							  '<span>' . $term->name . '</span>' .
							'</a>' .
						 '</li>';
				}
			}

			// 投稿自身の表示
			echo '<li><span>' . $post_title . '</span></li>';

		} elseif ( is_page() ) {

			/**
			 * 固定ページ ( $wp_obj : WP_Post )
			 */
			$page_id    = $wp_obj->ID;
			$page_title = $wp_obj->post_title;

			// 親ページがあれば順番に表示
			if ( $wp_obj->post_parent !== 0 ) {
				$parent_array = array_reverse( get_post_ancestors( $page_id ) );
				foreach ( $parent_array as $parent_id ) {
					echo '<li>' .
							'<a href="' . get_permalink( $parent_id ) . '">' .
								'<span>' . get_the_title( $parent_id ) . '</span>' .
							'</a>' .
						 '</li>';
				}
			}
			// 投稿自身の表示
			echo '<li><span>' . $page_title . '</span></li>';

		} elseif ( is_post_type_archive() ) {

			/**
			 * 投稿タイプアーカイブページ ( $wp_obj : WP_Post_Type )
			 */
			echo '<li><span>' . $wp_obj->label . '</span></li>';

		} elseif ( is_date() ) {

			/**
			 * 日付アーカイブ ( $wp_obj : null )
			 */
			$year  = get_query_var( 'year' );
			$month = get_query_var( 'monthnum' );
			$day   = get_query_var( 'day' );

			if ( $day !== 0 ) {
				// 日別アーカイブ
				echo '<li><a href="' . get_year_link( $year ) . '"><span>' . $year . '年</span></a></li>' .
					 '<li><a href="' . get_month_link( $year, $month ) . '"><span>' . $month . '月</span></a></li>' .
					 '<li><span>' . $day . '日</span></li>';

			} elseif ( $month !== 0 ) {
				// 月別アーカイブ
				echo '<li><a href="' . get_year_link( $year ) . '"><span>' . $year . '年</span></a></li>' .
					 '<li><span>' . $month . '月</span></li>';

			} else {
				// 年別アーカイブ
				echo '<li><span>' . $year . '年</span></li>';

			}
		} elseif ( is_author() ) {

			/**
			 * 投稿者アーカイブ ( $wp_obj : WP_User )
			 */
			echo '<li><span>' . $wp_obj->display_name . ' の執筆記事</span></li>';

		} elseif ( is_archive() ) {

			/**
			 * タームアーカイブ ( $wp_obj : WP_Term )
			 */
			$term_id   = $wp_obj->term_id;
			$term_name = $wp_obj->name;
			$tax_name  = $wp_obj->taxonomy;

			/* ここでタクソノミーに紐づくカスタム投稿タイプを出力しても良いでしょう。 */

			// 親ページがあれば順番に表示
			if ( $wp_obj->parent !== 0 ) {

				$parent_array = array_reverse( get_ancestors( $term_id, $tax_name ) );
				foreach ( $parent_array as $parent_id ) {
					$parent_term = get_term( $parent_id, $tax_name );
					echo '<li>' .
							'<a href="' . get_term_link( $parent_id, $tax_name ) . '">' .
								'<span>' . $parent_term->name . '</span>' .
							'</a>' .
						 '</li>';
				}
			}

			// ターム自身の表示
			echo '<li>' .
					'<span>' . $term_name . '</span>' .
				'</li>';

		} elseif ( is_search() ) {

			/**
			 * 検索結果ページ
			 */
			echo '<li><span>「' . get_search_query() . '」で検索した結果</span></li>';

		} elseif ( is_404() ) {

			/**
			 * 404ページ
			 */
			echo '<li><span>お探しの記事は見つかりませんでした。</span></li>';

		} else {

			/**
			 * その他のページ（無いと思うが一応）
			 */
			echo '<li><span>' . get_the_title() . '</span></li>';
		}

		echo '</ul></div>';  // 冒頭に合わせて閉じタグ

	}
}

/////////////////////////////////////////////////////////

//PHPを使う[usephp file=name]
function short_php($params = array()) {
  extract(shortcode_atts(array(
    'file' => 'default'
  ), $params));
  ob_start();
  include(get_theme_root() . '/' . get_template() . "/php/$file.php");
  return ob_get_clean();
}
add_shortcode('usephp', 'short_php');

//採用情報に関して
add_action('init', 'create_post_type');
function create_post_type(){
  // カスタム投稿タイプ：採用情報
  $labels = array(
    'name' => _x('採用情報', 'post type general name'),
    'singular_name' => _x('採用情報', 'post type singular name'),
    'menu_name' => _x('採用情報', 'admin menu'),
    'name_admin_bar' => _x('採用情報', 'add new on admin bar'),
    'add_new' => _x('募集追加','blog'),
    'add_new_item' => __('募集を新規追加'),
    'new_item' => __('採用情報'),
    'edit_item' => __('採用情報を編集'),
    'view_item' => __('採用情報を表示'),
    'all_items' => __('採用情報一覧'),
    'search_items' => __('採用情報検索'),
    'parent_item_colon' => '',
    'not_found' => __('採用情報が見つかりませんでした。'),
    'not_found_in_trash' => __('ゴミ箱内に採用情報が見つかりませんでした。'),
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'exclude_from_search' => false,
    'query_var' => true,
    'rewrite' => array('slug' => '', 'with_front' => false),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array('title', 'stuff_setting'),//'editor'を付与すると本文入力ができる
  );
  register_post_type('stuff', $args);
  //カスタムタクソノミー：blogカテゴリー
  $labels = array(
    'name' => _x( '業種', 'taxonomy general name' ),
    'singular_name' => _x( '業種', 'taxonomy singular name' ),
    'add_new_item' => __( '新規業種を追加' ),
    'edit_item' => __( '業種の編集' ),
    'update_item' => __( '業種を更新' ),
    'search_items' => __( '業種を検索' ),
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_ui' => true,
    'show_admin_column' => true,
    'rewrite' => array('slug' => 'blog', 'with_front' => false),
    'hierarchical' => true,
    'update_count_callback' => '_update_post_term_count',
  );
  register_taxonomy('blog_category', 'stuff', $args);
}
// 固定カスタムフィールドボックス
function add_stuff_fields() {
	//add_meta_box(表示される入力ボックスのHTMLのID, ラベル, 表示する内容を作成する関数名, 投稿タイプ, 表示方法)
	//第4引数のpostをpageに変更すれば固定ページにオリジナルカスタムフィールドが表示されます(custom_post_typeのslugを指定することも可能)。
	//第5引数はnormalの他にsideとadvancedがあります。
	add_meta_box( 'stuff_setting', '採用情報', 'insert_stuff_fields', 'stuff', 'normal');
}
add_action('admin_menu', 'add_stuff_fields');
// カスタムフィールドの入力エリア
function insert_stuff_fields() {
	global $post;
	//下記に管理画面に表示される入力エリアを作ります。「get_post_meta()」は現在入力されている値を表示するための記述です。
	echo '仕事内容： <input type="text" name="stuff_type" value="'.get_post_meta($post->ID, 'stuff_type', true).'" size="50" /><br>';
	echo '勤務時間： <input type="text" name="stuff_time" value="'.get_post_meta($post->ID, 'stuff_time', true).'" size="50" /><br>';
	echo '給与： <input type="text" name="stuff_price" value="'.get_post_meta($post->ID, 'stuff_price', true).'" size="50" />　<br>';
	echo '備考： <input type="text" name="stuff_info" value="'.get_post_meta($post->ID, 'stuff_info', true).'" size="50" />　<br>';
}
// カスタムフィールドの値を保存
function save_stuff_fields( $post_id ) {
	if(!empty($_POST['stuff_type'])){ //題名が入力されている場合
		update_post_meta($post_id, 'stuff_type', $_POST['stuff_type'] ); //値を保存
	}else{ //題名未入力の場合
		delete_post_meta($post_id, 'stuff_type'); //値を削除
	}
	if(!empty($_POST['stuff_time'])){
		update_post_meta($post_id, 'stuff_time', $_POST['stuff_time'] );
	}else{
		delete_post_meta($post_id, 'stuff_time');
	}
	if(!empty($_POST['stuff_price'])){
		update_post_meta($post_id, 'stuff_price', $_POST['stuff_price'] );
	}else{
		delete_post_meta($post_id, 'stuff_price');
	}
	if(!empty($_POST['stuff_info'])){
		update_post_meta($post_id, 'stuff_info', $_POST['stuff_info'] );
	}else{
		delete_post_meta($post_id, 'stuff_info');
	}
}
add_action('save_post', 'save_stuff_fields');

/*カテゴリ共有*/
add_action('init', 'central_taxonomies');
add_action('switch_blog', 'central_taxonomies');
function central_taxonomies () {
  global $wpdb;
  $wpdb->terms =  $wpdb->base_prefix."terms";
  $wpdb->term_taxonomy =  $wpdb->base_prefix."term_taxonomy";
}
