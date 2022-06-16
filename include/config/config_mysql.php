<?php 
// ************************************************************************************//
// * xUCP
// ************************************************************************************//
// * Author: DerStr1k3r
// ************************************************************************************//
// * Version: 1.0.1
// * 
// * Copyright (c) 2022 DerStr1k3r. All rights reserved.
// ************************************************************************************//
// * License Typ: GNU GPLv3
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
session_start();
$params = session_get_cookie_params();
setcookie("PHPSESSID", session_id(), 0, $params["path"], $params["domain"],
false, // this is the secure flag you need to set. Default is false.
true // this is the httpOnly flag you need to set
);
// ************************************************************************************//
// * MySQL Database Connection
// ************************************************************************************//
define('MYSQL_USER', 'your_username');
define('MYSQL_PASSWORD', 'your_database_password');
define('MYSQL_HOST', 'localhost');
define('MYSQL_DATABASE', 'your_database_name');
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
