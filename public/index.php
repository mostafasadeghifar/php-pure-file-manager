<?php

define('ROOT_DIR',$_SERVER['DOCUMENT_ROOT'].'/../');
include 'func/view.php';    //relative path
include 'func/url/url.php';

$uri = $_SERVER['REQUEST_URI'];

// component uri
$urlComponent = parse_url($uri);

$path = $urlComponent['path'];

/**
 * if uri just '/' for main page
 */
if ($path == '/') {
    include ROOT_DIR.'app/main.php';
    return true;
}


if (file_exists(ROOT_DIR.'app/'.$path.'.php')) {
    include ROOT_DIR.'app/'.$path.'.php';
}else{
    echo "url not found";
}

