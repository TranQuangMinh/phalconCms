<?php
date_default_timezone_set('Asia/Bangkok');
ini_set('display_errors', true);
error_reporting(E_ALL);


chdir(dirname(__DIR__));

define('ROOT', __DIR__);
define('HOST_HASH', substr(md5($_SERVER['HTTP_HOST']), 0, 12));

define('APPLICATION_PATH', dirname(__DIR__) . '/app');

require_once APPLICATION_PATH . '/Bootstrap.php';

$bootstrap = new VINA\Bootstrap();
$bootstrap->run();
