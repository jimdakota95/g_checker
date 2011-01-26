<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
ini_set('log_errors', 'Off');

include_once 'config.php';
include_once 'assoc_define.php';
include_once 'lib.php';
include_once 'classes/dwooAutoload.php';
include_once 'classes/db.php';
include_once 'classes/database/PostgreSQLDataManager.php';
//include_once 'classes/database/MySQLDataManager.php';
include_once 'classes/page.php';

header('Content-type: text/html; charset=utf-8');

$manager = new PostgreSQLDataManager($db_host, $db_name, $db_user, $db_passwd);

$page = new Page();

session_start();


if(array_key_exists('theme', $_COOKIE))
  $page->theme = urldecode($_COOKIE['theme']);

// TODO theme を cookieに？ sessionに？
// random = 存在しないtheme or nullを設定する




?>
