<?php
//error_reporting(E_ALL ^ E_DEPRECATED);
//error_reporting(E_ALL);
ob_flush();
ob_start();
// Database Constants
defined('DBDRIVER') ? null : define("DBDRIVER", "mysql");
defined('DB_SERVER') ? null : define("DB_SERVER", "localhost");
defined('DB_USER')   ? null : define("DB_USER", "root");
defined('DB_PASS')   ? null : define("DB_PASS", "");
defined('DB_NAME')   ? null : define("DB_NAME", "sobsite");
defined('PREFIX')   ? null : define("PREFIX", "");
