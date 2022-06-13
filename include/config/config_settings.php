<?php 
// ************************************************************************************//
// * xUCP
// ************************************************************************************//
// * Author: DerStr1k3r
// ************************************************************************************//
// * Version: 1.0
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
// * Default Site Language ( english = en | german = de )
// ************************************************************************************//
define("SITE_LANGUAGE","en");
// ************************************************************************************//
// * Themes Settings
// ************************************************************************************//
define("SITE_THEMES","default");
?>