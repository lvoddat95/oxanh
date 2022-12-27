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

// var_dump(get_include_path());
function get_site_url($root=false) 
{
    // output: /myproject/index.php
    $currentPath = $_SERVER['PHP_SELF']; 

    // output: Array ( 
        // [dirname] => /myproject 
        // [basename] => index.php 
        // [extension] => php 
        // [filename] => index ) 
 

    if ($root == true) {

        $appName = (APP_NAME !== 'inc') ? APP_NAME : "";

        $path = '/'.$appName;

        $whitelist = array(
            '127.0.0.1',
            '172.32.0.2',
            '::1'
        );

        if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
            $path = '';
        }

        $pathInfo = $path;
    }

    // output: localhost
    $hostName = $_SERVER['HTTP_HOST']; 

    $isSecure = false;
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
        $isSecure = true;
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
        $isSecure = true;
    }
    $protocol = $isSecure ? 'https' : 'http';

    // return: http://localhost/myproject/
    return $protocol.'://'.$hostName.$pathInfo;
}


function inc($view,$require_once=true,$extend=''){
    if ($require_once == true) {
        if (!empty($extend)) {
            $GLOBALS["gv"] = $extend;
        }
        
        require_once $view;
    }else{
        if (!empty($extend)) {
            $GLOBALS["gv"] = $extend;
        }
        require $view;
    }
}

