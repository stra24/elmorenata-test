<?php
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
