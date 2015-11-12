<?php
spl_autoload_register();
error_reporting(0);
ini_set('display_errors', false);
$req = [];
foreach([$_GET, $_POST] as $global_var) {
    foreach($global_var as $key => $value) {
        is_string($value) && $req[$key] = addslashes($value);
    }
}
$userinfo = isset($_COOKIE["userinfo"]) ? unserialize($_COOKIE["userinfo"]) : [];

define("UPLOAD_DIR", "upload/");

function redirect($location)
{
    header("Location: {$location}");
    exit;
}

function randmd5()
{
    $len = 16;
    $ret = "";  
    for ($i = 0; $i < $len; $i++)
    {  
        $ret .= chr(mt_rand(0, 255));
    }
    return md5($ret);
}  