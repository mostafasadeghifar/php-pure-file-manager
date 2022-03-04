<?php

$users = file_get_contents(ROOT_DIR.'storage/user.json');


$data = file_get_contents(ROOT_DIR.'storage/data.json');
$data = json_decode($data,true);

$currentDir = $_GET['path']??'root';

$tmp = explode(',',$currentDir);

$dir = $data;

foreach ($tmp as $item){
    $dir = $dir[$item];
}

return view('file.index',$dir);