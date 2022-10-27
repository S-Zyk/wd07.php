<?php
include_once __DIR__."/../src/functions.php";
include_once __DIR__."/../src/db.php";
$url = $_SERVER['REQUEST_URI'];

$url = explode('?', $url);
$url = $url[0];

if ($url == '/'){
    include_once __DIR__."/../src/pages/blog.php";
}

if ($url == '/add_post_form'){
    include_once __DIR__."/../src/pages/add_post.php";
}

if ($url == '/form'){
    include_once __DIR__."/../homework/form.php";
}

if ($url == '/edit_post'){
    include_once __DIR__."/../src/pages/edit_post.php";
}

if ($url == '/delete_page'){
$id = $_GET['post'];
$sql = "DELETE FROM posts WHERE id = '$id'";
    mysqli_query($connection, $sql);
}

if (strpos($url, '/page/') === 0) {
    $tmp = explode('/', $url);
    $pageId = array_pop($tmp);
//    debug($pageId);
    include_once __DIR__."/../src/pages/page.php";
}


