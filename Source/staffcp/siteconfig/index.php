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
include(dirname(__FILE__) . "/../../include/features.php");

site_secure();
secure_url();

site_secure_staff_check_rank();

if (isset($_GET["siteconfig"])) $siteconfig = trim(htmlentities($_GET["siteconfig"]));
elseif (isset($_POST["siteconfig"])) $siteconfig = trim(htmlentities($_POST["siteconfig"]));
else $siteconfig = "view";

$limit = 10;  
if (isset($_GET["site"])) {
	$site  = $_GET["site"]; 
}else{ 
	$site=1;
};  
$start_from = ($site-1) * $limit;

site_header("".SITECONFIG_HEADER."");
site_navi_logged();
site_content_logged();
$sql = "SELECT id, site_dl_section, site_rage_section, site_altv_section, site_fivem_section, site_redm_section, site_online, site_name, site_teamspeak, site_gservername, site_gserverip, site_gserverport, site_themes from xucp_config";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($siteconfigchange = $result->fetch_assoc()) {
    if ($siteconfig == "" . $siteconfigchange["id"]. "") {
      if(isset($_POST['submit'])){
		  $site_online 			= filter_input(INPUT_POST, 'site_online', FILTER_SANITIZE_STRING);
		  $site_name 			= filter_input(INPUT_POST, 'site_name', FILTER_SANITIZE_STRING);
          $site_dl_section 		= filter_input(INPUT_POST, 'site_dl_section', FILTER_SANITIZE_STRING);
          $site_rage_section 	= filter_input(INPUT_POST, 'site_rage_section', FILTER_SANITIZE_STRING);
          $site_altv_section 	= filter_input(INPUT_POST, 'site_altv_section', FILTER_SANITIZE_STRING);
          $site_fivem_section 	= filter_input(INPUT_POST, 'site_fivem_section', FILTER_SANITIZE_STRING);
          $site_redm_section 	= filter_input(INPUT_POST, 'site_redm_section', FILTER_SANITIZE_STRING);		  
		  $site_teamspeak 		= filter_input(INPUT_POST, 'site_teamspeak', FILTER_SANITIZE_STRING);
		  $site_gservername 	= filter_input(INPUT_POST, 'site_gservername', FILTER_SANITIZE_STRING);
		  $site_gserverip 		= filter_input(INPUT_POST, 'site_gserverip', FILTER_SANITIZE_STRING);
		  $site_gserverport 	= filter_input(INPUT_POST, 'site_gserverport', FILTER_SANITIZE_STRING);		  
		  $site_themes 			= filter_input(INPUT_POST, 'site_themes', FILTER_SANITIZE_STRING);	
		  
		  $sql = "UPDATE xucp_config SET site_dl_section='".$site_dl_section."', site_rage_section='".$site_rage_section."', site_altv_section='".$site_altv_section."', site_fivem_section='".$site_fivem_section."', site_redm_section='".$site_redm_section."', site_online='".$site_online."', site_name='".$site_name."', site_teamspeak='".$site_teamspeak."', site_gservername='".$site_gservername."', site_gserverip='".$site_gserverip."', site_gserverport='".$site_gserverport."', site_themes='".$site_themes."' WHERE id = ".$siteconfigchange['id']."";
		  $_SESSION['username']['site_settings_site_online'] = $site_online;
		  $_SESSION['username']['site_settings_site_name'] = $site_name;
		  $_SESSION['username']['site_settings_dl_section'] = $site_dl_section;		  
		  $_SESSION['username']['site_settings_dl_section_ragemp'] = $site_rage_section;
		  $_SESSION['username']['site_settings_dl_section_altv'] = $site_altv_section;
		  $_SESSION['username']['site_settings_dl_section_fivem'] = $site_fivem_section;
		  $_SESSION['username']['site_settings_dl_section_redm'] = $site_redm_section;		  
		  $_SESSION['username']['site_settings_teamspeak'] = $site_teamspeak;
		  $_SESSION['username']['site_settings_gservername'] = $site_gservername;
		  $_SESSION['username']['site_settings_gserverip'] = $site_gserverip;
		  $_SESSION['username']['site_settings_gserverport'] = $site_gserverport;
		  $_SESSION['username']['site_settings_themes'] = $site_themes;
          if (mysqli_query($conn, $sql)) {
            echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".SITECONFIG_HEADER."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".SITECONFIG_DONE."
						</div>
					</div>
				</div>";
          } else {
            echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".SITECONFIG_HEADER."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".SITECONFIG_ERROR."
						</div>
					</div>
				</div>";			  			  
          }
      }  
    }
  }
}
echo "
		<!-- Page Header-->
		<div class='bg-dash-dark-2 py-4'>
			<div class='container-fluid'>
				<h2 class='h5 mb-0'>".WELCOMETO." ".SITECONFIG_HEADER."!</h2>
			</div>
		</div>
		<!-- Breadcrumb-->
		<div class='container-fluid py-2'>
			<nav aria-label='breadcrumb'>
				<ol class='breadcrumb mb-0 py-3 px-0'>
					<li class='breadcrumb-item'><a href='/staffcp/siteconfig/index.php'>".$_SESSION['username']['site_settings_site_name']."</a></li>
					<li class='breadcrumb-item active' aria-current='page'>".SITECONFIG_HEADER."</li>					
                </ol>
			</nav>
		</div>

	    <section class='pt-0'>
		<div class='container-fluid'>
            <div class='row gy-4'>
              <div class='col-lg-12'>
                <div class='card'>
                  <div class='card-body'>";

				$sql = "SELECT id, site_dl_section, site_rage_section, site_altv_section, site_fivem_section, site_redm_section, site_online, site_name, site_teamspeak, site_gservername, site_gserverip, site_gserverport from xucp_config ORDER by id DESC LIMIT 1";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($siteconfigchange = $result->fetch_assoc()) {
					echo "
						<form class='form-horizontal' method='post' action='".$_SERVER['PHP_SELF']."?siteconfig=".$siteconfigchange['id']."' enctype='multipart/form-data'>
							<div class='row clearfix'>
								<div class='col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label'>
									<label for='email_address_2'>".SITECONFIG_ONLINE."</label>
								</div>
								<div class='col-lg-10 col-md-10 col-sm-8 col-xs-7'>
									<div class='form-group'>
										<div class='form-line'>
											<input type='text' name='site_online' size='12' maxlength='12' class='form-control' placeholder='".SITECONFIG_ONLINE."' value='" . $siteconfigchange["site_online"]. "' required>
										</div>
									</div>
								</div>
							</div>
							<div class='row clearfix'>
								<div class='col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label'>
									<label for='email_address_2'>".SITECONFIG_THEMES."</label>
								</div>
								<div class='col-lg-10 col-md-10 col-sm-8 col-xs-7'>
									<div class='form-group'>
										<div class='form-line'>
											<select name='site_themes' class='form-control show-tick' required>
												<option value=''>-- ".SITECONFIG_THEMES_INFO." --</option>
												<option value='default-black'>".SITECONFIG_THEMES_BLACK."</option>
												<option value='default-blue'>".SITECONFIG_THEMES_BLUE."</option>
												<option value='default-green'>".SITECONFIG_THEMES_GREEN."</option>
												<option value='default-red'>".SITECONFIG_THEMES_RED."</option>												
											</select>
										</div>
									</div>
								</div>
							</div>							
							<div class='row clearfix'>
								<div class='col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label'>
									<label for='password_2'>".SITECONFIG_NAME."</label>
								</div>
								<div class='col-lg-10 col-md-10 col-sm-8 col-xs-7'>
									<div class='form-group'>
										<div class='form-line'>
											<input type='text' name='site_name' size='12' maxlength='12' class='form-control' placeholder='".SITECONFIG_NAME."' value='" . $siteconfigchange["site_name"]. "' required>
										</div>
									</div>
								</div>
							</div>
							<div class='row clearfix'>
								<div class='col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label'>
									<label for='password_2'>".SITECONFIG_TEAMSPEAK."</label>
								</div>
								<div class='col-lg-10 col-md-10 col-sm-8 col-xs-7'>
									<div class='form-group'>
										<div class='form-line'>
											<input type='text' name='site_teamspeak' size='12' maxlength='64' class='form-control' placeholder='".SITECONFIG_TEAMSPEAK."' value='" . $siteconfigchange["site_teamspeak"]. "' required>
										</div>
									</div>
								</div>
							</div>
							<div class='row clearfix'>
								<div class='col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label'>
									<label for='password_2'>".SITECONFIG_DOWNLOAD_SECTION."</label>
								</div>
								<div class='col-lg-10 col-md-10 col-sm-8 col-xs-7'>
									<div class='form-group'>
										<div class='form-line'>
											<input type='text' name='site_dl_section' size='12' maxlength='12' class='form-control' placeholder='".SITECONFIG_DOWNLOAD_SECTION."' value='" . $siteconfigchange["site_dl_section"]. "' required>
										</div>
									</div>
								</div>
							</div>
							<div class='row clearfix'>
								<div class='col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label'>
									<label for='password_2'>".SITECONFIG_GSERVERNAME."</label>
								</div>
								<div class='col-lg-10 col-md-10 col-sm-8 col-xs-7'>
									<div class='form-group'>
										<div class='form-line'>
											<input type='text' name='site_gservername' size='12' maxlength='64' class='form-control' placeholder='".SITECONFIG_GSERVERNAME."' value='" . $siteconfigchange["site_gservername"]. "' required>
										</div>
									</div>
								</div>
							</div>
							<div class='row clearfix'>
								<div class='col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label'>
									<label for='password_2'>".SITECONFIG_GSERVERIP."</label>
								</div>
								<div class='col-lg-10 col-md-10 col-sm-8 col-xs-7'>
									<div class='form-group'>
										<div class='form-line'>
											<input type='text' name='site_gserverip' size='12' maxlength='64' class='form-control' placeholder='".SITECONFIG_GSERVERIP."' value='" . $siteconfigchange["site_gserverip"]. "' required>
										</div>
									</div>
								</div>
							</div>
							<div class='row clearfix'>
								<div class='col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label'>
									<label for='password_2'>".SITECONFIG_GSERVERPORT."</label>
								</div>
								<div class='col-lg-10 col-md-10 col-sm-8 col-xs-7'>
									<div class='form-group'>
										<div class='form-line'>
											<input type='text' name='site_gserverport' size='12' maxlength='64' class='form-control' placeholder='".SITECONFIG_GSERVERPORT."' value='" . $siteconfigchange["site_gserverport"]. "' required>
										</div>
									</div>
								</div>
							</div>								
							<div class='row clearfix'>
								<div class='col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label'>
									<label for='password_2'>".SITECONFIG_RAGEMP."</label>
								</div>
								<div class='col-lg-10 col-md-10 col-sm-8 col-xs-7'>
									<div class='form-group'>
										<div class='form-line'>
											<input type='text' name='site_rage_section' size='12' maxlength='12' class='form-control' placeholder='".SITECONFIG_RAGEMP."' value='" . $siteconfigchange["site_rage_section"]. "' required>
										</div>
									</div>
								</div>
							</div>
							<div class='row clearfix'>
								<div class='col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label'>
									<label for='password_2'>".SITECONFIG_ALTV."</label>
								</div>
								<div class='col-lg-10 col-md-10 col-sm-8 col-xs-7'>
									<div class='form-group'>
										<div class='form-line'>
											<input type='text' name='site_altv_section' size='12' maxlength='12' class='form-control' placeholder='".SITECONFIG_ALTV."' value='" . $siteconfigchange["site_altv_section"]. "' required>
										</div>
									</div>
								</div>
							</div>
							<div class='row clearfix'>
								<div class='col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label'>
									<label for='password_2'>".SITECONFIG_FIVEM."</label>
								</div>
								<div class='col-lg-10 col-md-10 col-sm-8 col-xs-7'>
									<div class='form-group'>
										<div class='form-line'>
											<input type='text' name='site_fivem_section' size='12' maxlength='12' class='form-control' placeholder='".SITECONFIG_FIVEM."' value='" . $siteconfigchange["site_fivem_section"]. "' required>
										</div>
									</div>
								</div>
							</div>
							<div class='row clearfix'>
								<div class='col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label'>
									<label for='password_2'>".SITECONFIG_REDM."</label>
								</div>
								<div class='col-lg-10 col-md-10 col-sm-8 col-xs-7'>
									<div class='form-group'>
										<div class='form-line'>
											<input type='text' name='site_redm_section' size='12' maxlength='12' class='form-control' placeholder='".SITECONFIG_REDM."' value='" . $siteconfigchange["site_redm_section"]. "' required>
										</div>
									</div>
								</div>
							</div>
							<div class='row clearfix'>
								<div class='col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5'>
									<button type='submit' class='btn btn-primary m-t-15 waves-effect' name='submit' data-target='successLiveToast'>".STAFF_USERCONTROLSAVE."</button>
								</div>
							</div>
						</form>";
					}
				}					

		echo "		  			
                </div>
              </div>
            </div>
          </div>
        </section>";
  site_footer();	
?>