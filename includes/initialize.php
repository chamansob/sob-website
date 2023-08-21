<?php

// Define the core paths
// Define them as absolute paths to make sure that include works as expected

// DIRECTORY_SEPARATOR is a PHP pre-defined constant
// (\ for Windows, / for Unix)
defined('DS') ? null : define('DS', '/');
$path = realpath(dirname(__FILE__));
date_default_timezone_set('Asia/Kolkata');
$path = explode("\includes", $path);
defined('SITE_ROOT') ? null :
    define('SITE_ROOT', $path[0]);
defined('MYF') ? null : define('MYF', 'sob-website' . DS);
defined('BASE_FOLDER') ? null : define('BASE_FOLDER', 'public');
defined('BACK_UPLOAD_PATH') ? null : define('BACK_UPLOAD_PATH', '../../' . BASE_FOLDER . '/editor/files/Uploads/');
defined('UPLOAD_PATH') ? null : define('UPLOAD_PATH', '/editor/files/Uploads/');
defined('FULL_PATH') ? null : define('FULL_PATH', BASE_FOLDER . '/editor/files/Uploads/');
$act = ['filemanager', 'settings', 'forget_password'];
define('act', $act);
if (isset($_SERVER['HTTPS'])) {
    $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    $base_url = $protocol . "://" . $_SERVER['SERVER_NAME'] . DS . MYF;
} else {
    $protocol = 'http';
    $base_url = $protocol . "://" . $_SERVER['SERVER_NAME'] . DS . MYF;
}

defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT . DS . 'includes');
defined('BASE_PATH') ? null : define('BASE_PATH', $base_url);
//defined('TP_FRONT') ? null : define('TP_FRONT', $base_url.DS.'includes');
defined('TP_BACK') ? null : define('TP_BACK', $base_url . BASE_FOLDER . DS);
defined('TP_BACK_FRONT') ? null : define('TP_BACK_FRONT', $base_url . "assets" . DS);
defined('TP_BACK_AD') ? null : define('TP_BACK_AD', $base_url . BASE_FOLDER . DS . "admin" . DS);
defined('TP_BACK_PU') ? null : define('TP_BACK_PU', $base_url . BASE_FOLDER . DS);
defined('TP_BACK_SIDE') ? null : define('TP_BACK_SIDE', $base_url . BASE_FOLDER . DS . 'admin/dashboard/');
// load config file first
require_once LIB_PATH . DS . 'vendor/autoload.php';

include LIB_PATH . DS . 'config.php';

// load basic functions next so that everything after can use them
include LIB_PATH . DS . 'functions.php';
include LIB_PATH . DS . 'session.php';
include LIB_PATH . DS . 'debugbar.php';
include LIB_PATH . DS . 'database.php';
include LIB_PATH . DS . 'traits/mainTrait.php';


//include(LIB_PATH.DS."phpMailer".DS."class.phpmailer.php");
//include(LIB_PATH.DS."phpMailer".DS."class.smtp.php");
//include(LIB_PATH.DS."phpMailer".DS."language".DS."phpmailer.lang-en.php");

// load database-related classes
