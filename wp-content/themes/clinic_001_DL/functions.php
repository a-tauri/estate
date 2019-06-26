<?php
add_action('admin_menu', 'my_menu');

function my_menu() {
    add_menu_page('My Page Title', '不動産物件情報の管理', 'manage_options', 'my-page-slug', 'my_function');
}

function my_function() {
    echo 'Hello world!';
}
?>