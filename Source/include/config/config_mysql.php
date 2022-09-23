<?php 
// ************************************************************************************//
// * xUCP Free
// ************************************************************************************//
// * Author: DerStr1k3r
// ************************************************************************************//
// * Version: 1.3.4
// * 
// * Copyright (c) 2022 DerStr1k3r. All rights reserved.
// ************************************************************************************//
// * License Typ: GNU GPLv3
// ************************************************************************************//
// * Enable us to use Headers
// ************************************************************************************//
ob_start();
// ************************************************************************************//
// * Prevent direct PHP call
// ************************************************************************************//
if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {        
	header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
	setCookie("PHPSESSID", "", 0x7fffffff,  "/");
  	session_destroy();
	die( header( 'location: /404.php' ) );
}
// ************************************************************************************//
// * Session starting
// ************************************************************************************//
$session_hash = 'sha512';
ini_set('session.use_trans_sid', FALSE);
ini_set('session.entropy_file', '/dev/urandom');
ini_set('session.hash_function', 'whirlpool');
ini_set('session.use_only_cookies', TRUE);
ini_set('session.cookie_httponly', TRUE);
ini_set('session.cookie_lifetime', 1200);
ini_set('session.cookie_secure', TRUE);
$cookieParams = session_get_cookie_params();
session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], true, true);
session_start();
session_regenerate_id(true);
// ************************************************************************************//
// * MySQL Database Connection
// ************************************************************************************//
define('MYSQL_USER', 'your_db_username');
define('MYSQL_PASSWORD', 'your_db_password');
define('MYSQL_HOST', 'localhost');
define('MYSQL_DATABASE', 'your_db_database_name');
define('MYSQL_PORT', '3306');
// ************************************************************************************//
// * MySQL Account Data Connect
// ************************************************************************************//
$conn = mysqli_connect(
			"" . MYSQL_HOST . "",
			"" . MYSQL_USER . "",
			"" . MYSQL_PASSWORD . "",
			"" . MYSQL_DATABASE . "",
			"" . MYSQL_PORT . "");

// ************************************************************************************//
// * MySQL Connection error failed Msg
// ************************************************************************************//		
if(!$conn){
	die("Database connection could not be queried!");	
}
?>