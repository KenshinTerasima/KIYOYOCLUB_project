<?php
function my_scripts_method() {
    wp_enqueue_script(
        'custom_script',
        get_template_directory_uri() . '/script.js',
        array(), // 依存するスクリプトがあれば配列で指定
        '1.0',    // スクリプトのバージョン
        true      // ページの最後にスクリプトを出力するかどうか
    );
}
add_action('wp_enqueue_scripts', 'my_scripts_method');
?>
