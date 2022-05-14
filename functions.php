<?php
// カスタム投稿タイプの追加
function add_custom_post_type()
{
    // 制作実績
    register_post_type(
        'works', // 1.投稿タイプ名 
        array(   // 2.オプション 
            'label' => '制作実績', // 投稿タイプの名前
            'public'        => true, // 利用する場合はtrueにする 
            'has_archive'   => true, // この投稿タイプのアーカイブを有効にする
            'menu_position' => 5, // この投稿タイプが表示されるメニューの位置
            'menu_icon'     => 'dashicons-edit', // メニューで使用するアイコン
            'supports' => array( // サポートする機能
                'title',
                'editor',
            )
        )
    );
}

// 初期化にサポートする項目を増やす。具体的には、このテーマではサムネイル（アイキャッチ画像のこと）をサポートするという項目。
add_action('init', function () {
    // titleタグを自動生成する。
    add_theme_support('title-tag');

    // サムネイル画像を表示できるようにする。
    add_theme_support('post-thumbnails');

    // メニューをサポートする。
    register_nav_menus([
        'global_nav' => 'グローバルナビゲーション'
    ]);

    // カスタム投稿タイプ「スタイル一覧」を登録する。
    register_post_type(
        'style', // 1.投稿タイプ名 
        array(   // 2.オプション 
            'label' => 'スタイル一覧', // 投稿タイプの名前
            'public'        => true, // 利用する場合はtrueにする 
            'has_archive'   => true, // この投稿タイプのアーカイブを有効にする
            'menu_position' => 5, // この投稿タイプが表示されるメニューの位置
            'menu_icon'     => 'dashicons-edit', // メニューで使用するアイコン
            'supports' => array( // サポートする機能
                'title',
                'editor',
            )
        )
    );

    // カスタム投稿タイプ「スタイル紹介」のカスタム分類「スタイルカテゴリー」を登録する。
    register_taxonomy(
        'style-category', // 1.タクソノミーの名前
        'style',     // 2.利用する投稿タイプ
        array(       // 3.オプション
            'label' => 'スタイルカテゴリー', // タクソノミーの表示名
            'hierarchical' => true, // 階層を持たせるかどうか（trueにすると、投稿画面でカテゴリーの一覧が表示されてチェックしやすい）
            'public' => true, // 利用する場合はtrueにする
        )
    );
});

// ページをリロードする度に強制的にSCSSのコンパイルを実行する。
define('WP_SCSS_ALWAYS_RECOMPILE', true);

// 対象記事のアイキャッチ画像URLを取得する関数。もし未設定なら、デフォルト画像のURLを取得する。
function getEyecatchUrl($id)
{
    if (has_post_thumbnail()) {
        $img = wp_get_attachment_image_src($id, 'large');
    } else {
        $img = array(wp_upload_dir()['baseurl'] . '/2022/05/01d5fbf26e836dbe18f6162f409dc9a6.jpg');
    }

    return $img[0];
}

function my_archive_title($title)
{
    if (is_category()) {
        $title = single_cat_title('', false); //カテゴリー：を消す
    } elseif (is_tag()) {
        $title = single_tag_title('', false); //タグ：を消す
    } elseif (is_date()) {
        $title = get_the_time('Y年n月');  //月：を消す
    };
    return $title;
};
add_filter('get_the_archive_title', 'my_archive_title');
