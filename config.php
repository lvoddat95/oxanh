<?php 
require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/inc/helper.php";
require __DIR__ . "/inc/const.php";

// Cau hinh thu muc nhan include
$include_paths = array(
    $_SERVER['DOCUMENT_ROOT'].'/partials/',
    $_SERVER['DOCUMENT_ROOT'].'/oxanh/partials/',
);
set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $include_paths));

define('DIR', dirname(__FILE__));

define('APP_NAME', strtok(str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', __FILE__), DIRECTORY_SEPARATOR));

define('HTTP_PATH', get_site_url('',true)); 

define('SOURCE', HTTP_PATH);

define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT'].'/'.APP_NAME); 

