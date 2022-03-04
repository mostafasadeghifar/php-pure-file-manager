<?php

function url($url):string
{
//$protocol = $_SERVER['SERVER_PROTOCOL'] == 'http'?'http':'https';                 //todo: set protocol
    return 'http'.'://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].'/'.$url;
}