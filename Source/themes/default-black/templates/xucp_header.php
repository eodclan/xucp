<?php 
// ************************************************************************************//
// * xUCP Free
// ************************************************************************************//
// * Author: DerStr1k3r
// ************************************************************************************//
// * Version: 1.3
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
function site_header($SITESUBTITLE = "") {
  // starting secure urls
  secure_url();
  // starting header section
  echo "
<!DOCTYPE html>
<html>
  <head>
	<!-- ####################################################### -->
	<!-- #   Powered by xUCP Free Version 1.3                  # -->
	<!-- #   Copyright (c) 2022 DerStr1k3r.                    # -->
	<!-- #   All rights reserved.                              # -->
	<!-- ####################################################### -->  
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>".$_SESSION['username']['site_settings_site_name']." | ".$SITESUBTITLE."</title>
    <meta name='description' content=''>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='robots' content='all,follow'>
    <!-- Simple DataTables CSS-->
    <link rel='stylesheet' href='/themes/".$_SESSION['username']['site_settings_themes']."/vendor/simple-datatables/style.css'>
    <!-- Choices.js-->
    <link rel='stylesheet' href='/themes/".$_SESSION['username']['site_settings_themes']."/vendor/choices.js/public/assets/styles/choices.min.css'>
    <!-- Google fonts - Muli-->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Muli:300,400,700'>
    <!-- theme stylesheet-->
    <link rel='stylesheet' href='/themes/".$_SESSION['username']['site_settings_themes']."/css/style.default.min.css' id='theme-stylesheet'>
    <!-- Custom stylesheet - for your changes-->
    <link rel='stylesheet' href='/themes/".$_SESSION['username']['site_settings_themes']."/css/custom.css'>
    <!-- Favicon-->
    <link rel='shortcut icon' href='/themes/".$_SESSION['username']['site_settings_themes']."/img/favicon.ico'>";
  
  header("X-XSS-Protection: 1; mode=block");
  header("X-Content-Type-Options: nosniff");
  header("Strict-Transport-Security: max-age=31536000");
  header("Referrer-Policy: origin-when-cross-origin");
  header("Expect-CT: max-age=7776000, enforce");
  header("Feature-Policy: vibrate 'self'; usermedia *; sync-xhr 'self'");

  echo " 
</head>
  <body>
    <!-- CSS Spinner-->
    <div class='spinner-wrapper'>
      <div class='spinner sk-spinner-pulse'></div>
    </div>
    <header class='header'>   
      <nav class='navbar navbar-expand-lg py-3 bg-dash-dark-2 border-bottom border-dash-dark-1 z-index-10'>
        <div class='container-fluid d-flex align-items-center justify-content-between py-1'>
          <div class='navbar-header d-flex align-items-center'><a class='navbar-brand text-uppercase text-reset' href='/dashboard.php'>
              <div class='brand-text brand-big'><strong class='text-primary'>".$_SESSION['username']['site_settings_site_name']."</strong></div>
              <div class='brand-text brand-sm'><strong class='text-primary'>".$_SESSION['username']['site_settings_site_name']."</strong></div></a>
          </div>
          <ul class='list-inline mb-0'>
            <!-- Mega menu-->
            <li class='list-inline-item logout px-lg-2'>
				<a href='javascript:void(0);' class='nav-link text-sm text-reset px-1 px-lg-0' id='logout' data-toggle='dropdown' role='button'>
					<form action='".$_SERVER['PHP_SELF']."' method='post' enctype='multipart/form-data'>							
						<button type='submit' name='logout' class='btn btn-dark'>
							<svg class='svg-icon svg-icon-xs svg-icon-heavy'>
								<use xlink:href='#disable-1'> </use>
							</svg>&nbsp;".SITE_LOGOUT."
						</button>							
					</form>						
				</a>
			</li>
          </ul>
        </div>
      </nav>
    </header>
    <div class='d-flex align-items-stretch'>";
}

function site_header_nologged($SITESUBTITLE = "") {
  // starting secure urls  
  secure_url();
  // Secure Header
  header("X-XSS-Protection: 1; mode=block");
  header("X-Content-Type-Options: nosniff");
  header("Strict-Transport-Security: max-age=31536000");
  header("Referrer-Policy: origin-when-cross-origin");
  header("Expect-CT: max-age=7776000, enforce");
  header("Feature-Policy: vibrate 'self'; usermedia *; sync-xhr 'self'");
  // starting header section  
  echo "
<!DOCTYPE html>
<html>
  <head>
	<!-- ####################################################### -->
	<!-- #   Powered by xUCP Free Version 1.3                  # -->
	<!-- #   Copyright (c) 2022 DerStr1k3r.                    # -->
	<!-- #   All rights reserved.                              # -->
	<!-- ####################################################### -->  
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>".$_SESSION['username']['site_settings_site_name']." | ".$SITESUBTITLE."</title>
    <meta name='description' content=''>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='robots' content='all,follow'>
    <!-- Simple DataTables-->
    <link rel='stylesheet' href='/themes/".$_SESSION['username']['site_settings_themes']."/vendor/simple-datatables/style.css'>
    <!-- Choices.js-->
    <link rel='stylesheet' href='/themes/".$_SESSION['username']['site_settings_themes']."/vendor/choices.js/public/assets/styles/choices.min.css'>
    <!-- Google fonts - Muli-->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Muli:300,400,700'>
    <!-- theme stylesheet-->
    <link rel='stylesheet' href='/themes/".$_SESSION['username']['site_settings_themes']."/css/style.default.min.css' id='theme-stylesheet'>
    <!-- Custom stylesheet - for your changes-->
    <link rel='stylesheet' href='/themes/".$_SESSION['username']['site_settings_themes']."/css/custom.css'>
    <!-- Favicon-->
    <link rel='shortcut icon' href='/themes/".$_SESSION['username']['site_settings_themes']."/img/favicon.ico'>";

  echo " 
</head>
  <body>
    <!-- CSS Spinner-->
    <div class='spinner-wrapper'>
      <div class='spinner sk-spinner-pulse'></div>
    </div>
    <header class='header'>   
      <nav class='navbar navbar-expand-lg py-3 bg-dash-dark-2 border-bottom border-dash-dark-1 z-index-10'>
        <div class='container-fluid d-flex align-items-center justify-content-between py-1'>
          <div class='navbar-header d-flex align-items-center'><a class='navbar-brand text-uppercase text-reset' href='/index.php'>
              <div class='brand-text brand-big'><strong class='text-primary'>".$_SESSION['username']['site_settings_site_name']."</strong></div>
              <div class='brand-text brand-sm'><strong class='text-primary'>".$_SESSION['username']['site_settings_site_name']."</strong></div></a>
          </div>
        </div>
      </nav>
    </header>
    <div class='d-flex align-items-stretch'>";	
}
?>