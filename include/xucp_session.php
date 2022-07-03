<?php 
// ************************************************************************************//
// * xUCP
// ************************************************************************************//
// * Author: DerStr1k3r
// ************************************************************************************//
// * Version: 1.1
// * 
// * Copyright (c) 2022 DerStr1k3r. All rights reserved.
// ************************************************************************************//
// * License Typ: GNU GPLv3
// ************************************************************************************//
// * Session Site Settings System
// ************************************************************************************//
$xucp_sql = "SELECT id, site_dl_section, site_rage_section, site_altv_section, site_fivem_section, site_redm_section, site_online, site_name, site_themes, site_teamspeak, site_gserverport, site_gserverip, site_gservername from config WHERE id = 1";
$xucp_result = $conn->query($xucp_sql);

if ($xucp_result->num_rows > 0) {
	// output data of each row
	while($xucp = $xucp_result->fetch_assoc()) {
		$_SESSION['username']['site_settings_site_online'] = $xucp["site_online"];
		$_SESSION['username']['site_settings_site_name'] = $xucp["site_name"];
		$_SESSION['username']['site_settings_themes'] = $xucp["site_themes"];
		$_SESSION['username']['site_settings_dl_section'] = $xucp["site_dl_section"];		  
		$_SESSION['username']['site_settings_dl_section_ragemp'] = $xucp["site_rage_section"];
		$_SESSION['username']['site_settings_dl_section_altv'] = $xucp["site_altv_section"];
		$_SESSION['username']['site_settings_dl_section_fivem'] = $xucp["site_fivem_section"];
		$_SESSION['username']['site_settings_dl_section_redm'] = $xucp["site_redm_section"];
		$_SESSION['username']['site_settings_teamspeak'] = $xucp["site_teamspeak"];
		$_SESSION['username']['site_settings_gserverport'] = $xucp["site_gserverport"];
		$_SESSION['username']['site_settings_gserverip'] = $xucp["site_gserverip"];
		$_SESSION['username']['site_settings_gservername'] = $xucp["site_gservername"];

		if(intval($_SESSION['username']['site_settings_site_online']) >= 1) {
			// Site Online Status = 1 | Online
		}else{
		// Site Online Status = 0 | Offline
			site_header_nologged("".SITECONFIG_ONLINE."");
			site_navi_nologged();
			site_content_nologged();
            echo"
		<!-- Page Header-->
		<div class='bg-dash-dark-2 py-4'>
			<div class='container-fluid'>
				<h2 class='h5 mb-0'>".WELCOMETO." ".SITECONFIG_ONLINE."!</h2>
			</div>
		</div>
		<!-- Breadcrumb-->
		<div class='container-fluid py-2'>
			<nav aria-label='breadcrumb'>
				<ol class='breadcrumb mb-0 py-3 px-0'>
					<li class='breadcrumb-item'><a href='/index.php'>".$_SESSION['username']['site_settings_site_name']."</a></li>
					<li class='breadcrumb-item active' aria-current='page'>".SITECONFIG_ONLINE."</li>					
                </ol>
			</nav>
		</div>
	    <section class='pt-0'>
		<div class='container-fluid'>
            <div class='row gy-4'>
              <div class='col-lg-12'>
                <div class='card'>
                  <div class='card-body'>
					".SITECONFIG_ONLINENOTE."
				  </div>							
				</div>
			  </div>
			</div>
		  </div>
		</section>";
		site_footer();
		setCookie("PHPSESSID", "", 0x7fffffff,  "/");
		session_destroy();	
		die();		
		}
	}
}
?>