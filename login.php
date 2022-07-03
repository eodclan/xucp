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
include(dirname(__FILE__) . "/include/features.php");
secure_url();

if('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['login'])){
	if(empty($_POST['username']) || empty($_POST['password'])){
		echo"
			<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
				<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
					<div class='toast-header'>
						<strong class='me-auto'>".LOGIN."</strong>
						<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
					</div>
					<div class='toast-body'>
						".MSG_10."
					</div>
				</div>
			</div>";
	}
	else
	{	
		session_regenerate_id();
		$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
		$password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);

		// The 2nd check to make sure that nothing bad can happen.
		if (preg_match('/[A-Za-z0-9]+/', $_POST['username']) == 0) {
            echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".LOGIN."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".MSG_14."
						</div>
					</div>
				</div>";			
		}
		if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
            echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".LOGIN."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".MSG_15."
						</div>
					</div>
				</div>";			
		}

		$sql = "select * from accounts where username = '".$username."' LIMIT 1";
		$rs = mysqli_query($conn,$sql);
		$numRows = mysqli_num_rows($rs);
	
		if($numRows  == 1){
			$account = mysqli_fetch_assoc($rs);
			if(password_verify($password,$account['password'])){
				$sqlsession = "SELECT id, site_dl_section, site_rage_section, site_altv_section, site_fivem_section, site_online, site_name, site_themes from config WHERE id = 1";
				$resultsession = $conn->query($sqlsession);

				if ($resultsession->num_rows > 0) {
					// output data of each row
					while($session = $resultsession->fetch_assoc()) {
						if ($session["site_online"] == "1") {
							$_SESSION['username']['site_settings_site_online'] = $session["site_online"];
							$_SESSION['username']['site_settings_site_name'] = $session["site_name"];
							$_SESSION['username']['site_settings_dl_section'] = $session["site_dl_section"];
							$_SESSION['username']['site_settings_dl_section_ragemp'] = $session["site_rage_section"];
							$_SESSION['username']['site_settings_dl_section_altv'] = $session["site_altv_section"];
							$_SESSION['username']['site_settings_dl_section_fivem'] = $session["site_fivem_section"];
							$_SESSION['username']['site_settings_themes'] = $session["site_themes"];
						}
					}
				}
				
				$_SESSION['username']['secure_first'] = $account["id"];
				$_SESSION['username']['secure_granted'] = "granted";
				$_SESSION['username']['secure_staff'] = $account["adminlevel"];
				$_SESSION['username']['secure_lang'] = $account["language"];
				$_SESSION['username']["secure_key"] = sitehash($username);
				header("Location:dashboard.php");
			}else{
				echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".LOGIN."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".MSG_11."
						</div>
					</div>
				</div>";				
			}
		}else{
			echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".LOGIN."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".MSG_12."
						</div>
					</div>
				</div>";			
		}
		mysqli_close($conn);
	}	
}

site_header_nologged("".LOGIN."");
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
					<li class='breadcrumb-item'><a href='index.php'>".$_SESSION['username']['site_settings_site_name']."</a></li>
					<li class='breadcrumb-item active' aria-current='page'>".LOGIN."</li>					
                </ol>
			</nav>
		</div>
	    <section class='pt-0'>
		<div class='container-fluid'>
            <div class='row gy-4'>
              <div class='col-lg-12'>
                <div class='card'>
                  <div class='card-body'>		  
					<form action='".$_SERVER['PHP_SELF']."' method='post' enctype='multipart/form-data' autocomplete='off'>
						<div class='form-group'>
							<div class='form-line'>
								<label class='title' for='exampleFormControlInput1'> ".USERNAME." *</label>
								<input required aria-label='Social Club Name' type='text' name='username' class='form-control' placeholder='".USERNAME." *' value='' maxlength='30' id='exampleInputEmail1' autocomplete='off'/>
							</div>
						</div>										
						<div class='form-group'>										
							<div class='form-line'>
								<label class='title' for='exampleFormControlInput1'> ".PASSWORD." *</label>
								<input required aria-label='Password' type='password' name='password' class='form-control' placeholder='".PASSWORD." *' value='' maxlength='30' id='exampleInputPassword1' autocomplete='off'/>
							</div>				
						</div>
						<div class='form-group'>
							<div class='form-line'>
								".NOTE."
							</div>
						</div>						
						<button type='submit' class='btn btn-primary' name='login' data-target='successLiveToast'>".LOGIN."</submit>					
					</form>	
                </div>
              </div>
            </div>
          </div>
        </section>";
site_footer();	  
?>