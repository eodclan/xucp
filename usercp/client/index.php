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
include(dirname(__FILE__) . "/../../include/features.php");

site_secure();
secure_url();

site_header("".GSERVER_INFO_HEAD."");
site_navi_logged();
site_content_logged();
	
	echo "
		<!-- Page Header-->
		<div class='bg-dash-dark-2 py-4'>
			<div class='container-fluid'>
				<h2 class='h5 mb-0'>".WELCOMETO." ".GSERVER_INFO_HEAD."!</h2>
			</div>
		</div>
		<!-- Breadcrumb-->
		<div class='container-fluid py-2'>
			<nav aria-label='breadcrumb'>
				<ol class='breadcrumb mb-0 py-3 px-0'>
					<li class='breadcrumb-item'><a href='gclient.php'>".$_SESSION['username']['site_settings_site_name']."</a></li>
					<li class='breadcrumb-item active' aria-current='page'>".GSERVER_INFO_HEAD."</li>					
                </ol>
			</nav>
		</div>
	    <section class='pt-0'>
		<div class='container-fluid'>
		<div class='row gy-4'>
		<div class='col-lg-12'>
		<div class='card'>
			<div class='card-header'>
				<h4 class='mb-0'>".GSERVER_INFO_HEAD."</h4>
			</div>
			<div class='card-body pt-0'>
				<p>".GSERVER_INFO_01."</p>
				<p class='mb-4'>".GSERVER_INFO_02."</p>
				<div class='row gy-3'>
					<div class='col-lg-6'>
						<label class='form-label'>".SITECONFIG_GSERVERNAME."</label>
					</div>
					<div class='col-lg-6'>
						<label class='form-label'>".$_SESSION['username']['site_settings_gservername']."</label>
					</div>
					<div class='col-lg-6'>
						<label class='form-label'>".SITECONFIG_GSERVERIP."</label>
					</div>
					<div class='col-lg-6'>
						<label class='form-label'>".$_SESSION['username']['site_settings_gserverip']."</label>
					</div>
					<div class='col-lg-6'>
						<label class='form-label'>".SITECONFIG_GSERVERPORT."</label>
					</div>
					<div class='col-lg-6'>
						<label class='form-label'>".$_SESSION['username']['site_settings_gserverport']."</label>
					</div>";
					if(intval($_SESSION['username']['site_settings_dl_section_ragemp']) >= 1) {
					echo"
					<div class='col-lg-6'>
						<label class='form-label'>Client</label>
					</div>					
					<div class='col-lg-6'>
						<label class='form-label'>
							<a href='https://cdn.rage.mp/public/files/RAGEMultiplayer_Setup.exe'>
								<span>".SITECONFIG_RAGEMP."</span>
							</a>						
						</label>
					</div>";
					}
					if(intval($_SESSION['username']['site_settings_dl_section_altv']) >= 1) {
					echo"
					<div class='col-lg-6'>
						<label class='form-label'>Client</label>
					</div>					
					<div class='col-lg-6'>
						<label class='form-label'>
							<a href='https://cdn.altv.mp/altv-release.zip'>
								<span>".SITECONFIG_ALTV."</span>
							</a>						
						</label>					
					</div>";
					}
					if(intval($_SESSION['username']['site_settings_dl_section_fivem']) >= 1) {
					echo"
					<div class='col-lg-6'>
						<label class='form-label'>Client</label>
					</div>					
					<div class='col-lg-6'>
						<label class='form-label'>
							<a href='https://runtime.fivem.net/client/FiveM.exe'>
								<span>".SITECONFIG_FIVEM."</span>
							</a>						
						</label>
					</div>";
					}
					if(intval($_SESSION['username']['site_settings_dl_section_redm']) >= 1) {
					echo"
					<div class='col-lg-6'>
						<label class='form-label'>Client</label>
					</div>					
					<div class='col-lg-6'>
						<label class='form-label'>
							<a href='https://runtime.fivem.net/redm/RedM.exe'>
								<span>".SITECONFIG_REDM."</span>
							</a>						
						</label>
					</div>";
					}					
					echo "					
				</div>				
			   </div>		
		      </div>
		     </div>
		    </div>
		  </div>
        </section>";	
site_footer();	
?>		