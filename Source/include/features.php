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
// Settings files from this xucp
// ************************************************************************************//
require_once(dirname(__FILE__) . "/config/config_mysql.php");
require_once(dirname(__FILE__) . "/config/config_settings.php");
// ************************************************************************************//
// Functions files from this xucp
// ************************************************************************************//
require_once(dirname(__FILE__) . "/xucp_lang.php");
require_once(dirname(__FILE__) . "/xucp_session.php");
require_once(dirname(__FILE__) . "/xucp_avatar.php");
require_once(dirname(__FILE__) . "/xucp_hash.php");
require_once(dirname(__FILE__) . "/xucp_session.php");
require_once(dirname(__FILE__) . "/xucp_urls.php");
// ************************************************************************************//
// Themes System
// ************************************************************************************//
include(dirname(__FILE__) . "/../themes/".$_SESSION['username']['site_settings_themes']."/templates/xucp_header.php");
include(dirname(__FILE__) . "/../themes/".$_SESSION['username']['site_settings_themes']."/templates/xucp_leftnavi.php");
include(dirname(__FILE__) . "/../themes/".$_SESSION['username']['site_settings_themes']."/templates/xucp_content.php");
include(dirname(__FILE__) . "/../themes/".$_SESSION['username']['site_settings_themes']."/templates/xucp_footer.php");
include(dirname(__FILE__) . "/../themes/".$_SESSION['username']['site_settings_themes']."/templates/xucp_secure.php");
// ************************************************************************************//
// Logout System
// ************************************************************************************//
if(isset($_POST['logout'])){
  site_header_nologged("".HOME_NOLOGGED."");
  setCookie("PHPSESSID", "", 0x7fffffff,  "/");
  session_destroy();
  site_navi_nologged();
  site_content_nologged();
  echo "
		<!-- Page Header-->
		<div class='bg-dash-dark-2 py-4'>
			<div class='container-fluid'>
				<h2 class='h5 mb-0'>".WELCOMETO." ".SECURE_SYSTEM."!</h2>
			</div>
		</div>
		<!-- Breadcrumb-->
		<div class='container-fluid py-2'>
			<nav aria-label='breadcrumb'>
				<ol class='breadcrumb mb-0 py-3 px-0'>
					<li class='breadcrumb-item'><a href='/login.php'>".$_SESSION['username']['site_settings_site_name']."</a></li>
					<li class='breadcrumb-item active' aria-current='page'>".SECURE_SYSTEM."</li>					
                </ol>
			</nav>
		</div>
	    <section class='pt-0'>
		<div class='container-fluid'>
            <div class='row gy-4'>
              <div class='col-lg-12'>
                <div class='card'>
                  <div class='card-body'>
					".MSG_17."
				  </div>							
				</div>
			  </div>
			</div>
		  </div>
		</section>";					
  site_footer(); 
  exit();  
}

?>