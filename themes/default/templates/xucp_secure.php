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
function site_secure() {
	if(!isset($_SESSION['username']['secure_first']) || $_SESSION['username']['secure_granted'] !== 'granted' || $_SESSION['username']['site_settings_site_online'] !== '1') {
		site_header_nologged("".SECURE_SYSTEM."");
		site_navi_nologged();
		site_content_nologged();
  echo "
		<!-- Page Header-->
		<div class='bg-dash-dark-2 py-4'>
			<div class='container-fluid'>
				<h2 class='h5 mb-0'>".WELCOMETO." ".LOGIN."!</h2>
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
			".MSG_1."
				  </div>							
				</div>
			  </div>
			</div>
		  </div>
		</section>";		
		site_footer();
		die();
	}  
}

function site_secure_logout() {
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


function site_secure_staff_check() {
	if(intval($_SESSION['username']['secure_staff']) < 12) {
		site_header_nologged("".SECURE_SYSTEM."");
		site_navi_nologged();
		site_content_nologged();
  echo "
		<!-- Page Header-->
		<div class='bg-dash-dark-2 py-4'>
			<div class='container-fluid'>
				<h2 class='h5 mb-0'>".WELCOMETO." ".LOGIN."!</h2>
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
			".MSG_2."
				  </div>							
				</div>
			  </div>
			</div>
		  </div>
		</section>";
		site_footer();
		die();		
   }
}

?>