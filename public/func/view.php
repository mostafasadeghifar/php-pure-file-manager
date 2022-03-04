<?php

/**
 * @param $view
 * @param null $data
 * @return bool
 */
function view($view,$data=null):bool
{
    $view = str_replace('.','/',$view);
    if (file_exists(ROOT_DIR.'view/'.$view.'.php')) {
        include ROOT_DIR.'view/'.$view.'.php';
        return true;
    }else{
        echo "view not found";
        return false;
    }
}