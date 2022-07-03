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

site_header_nologged("".REGISTER."");
site_navi_nologged();
site_content_nologged();

if (isset($_GET["myregister"])) $myregister = trim(htmlentities($_GET["myregister"]));
elseif (isset($_POST["myregister"])) $myregister = trim(htmlentities($_POST["myregister"]));
else $myregister = "view";

if ($myregister == "register") {
	if(isset($_POST['now_register'])){
		$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
		$email 	= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
		$password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);
		$hashPassword = password_hash($password,PASSWORD_BCRYPT);
		$socialid = (int)0;

		// The 2nd check to make sure that nothing bad can happen.
		if (preg_match('/[A-Za-z0-9]+/', $_POST['username']) == 0) {
            echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".REGISTER."</strong>
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
							<strong class='me-auto'>".REGISTER."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".MSG_15."
						</div>
					</div>
				</div>";
		}
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".REGISTER."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".MSG_13."
						</div>
					</div>
				</div>";			
		}

		// CHECK IF USER IS ALREADY REGISTERED
		$check_user = mysqli_query($conn, "SELECT `username` FROM `accounts` WHERE username = '$username' LIMIT 1");

		if(mysqli_num_rows($check_user) > 0){
            echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".REGISTER."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".MSG_16."
						</div>
					</div>
				</div>";			
		}else{
			$sql = "INSERT INTO accounts (username, email, password, socialid) VALUES ('$username', '$email', '$hashPassword', '$socialid')";
			//$sql = "INSERT INTO accounts SET username='".$username."', email='".$email."', password='".$hashPassword."'";
   
			if ($conn->query($sql) === TRUE) {
				echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".REGISTER."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".MSG_9."
						</div>
					</div>
				</div>";				
			} else {
				echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".REGISTER."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".MSG_7."
						</div>
					</div>
				</div>";					
			}
		}	
	}
	$conn->close();   	
}
if ($myregister == "register") {	
echo "
		<!-- Page Header-->
		<div class='bg-dash-dark-2 py-4'>
			<div class='container-fluid'>
				<h2 class='h5 mb-0'>".WELCOMETO." ".REGISTER."!</h2>
			</div>
		</div>
		<!-- Breadcrumb-->
		<div class='container-fluid py-2'>
			<nav aria-label='breadcrumb'>
				<ol class='breadcrumb mb-0 py-3 px-0'>
					<li class='breadcrumb-item'><a href='index.php'>".$_SESSION['username']['site_settings_site_name']."</a></li>
					<li class='breadcrumb-item active' aria-current='page'>".REGISTER."</li>					
                </ol>
			</nav>
		</div>
	    <section class='pt-0'>
		<div class='container-fluid'>
            <div class='row gy-4'>
              <div class='col-lg-12'>
                <div class='card'>
                  <div class='card-body'>		  
					<form action='".$_SERVER['PHP_SELF']."?myregister=register' method='post' enctype='multipart/form-data' autocomplete='off'>
						<div class='form-group'>
							<div class='form-line'>
								<label class='title' for='exampleFormControlInput1'>".USERNAME." *</label>
								<input required type='text' name='username' class='form-control' placeholder='".USERNAME." *' value='' maxlength='30' id='border-right6' autocomplete='off'/>
							</div>
						</div>		
						<div class='form-group'>
							<div class='form-line'>
								<label class='title' for='exampleFormControlInput1'>".EMAIL." *</label>
								<input required type='text' name='email' class='form-control' placeholder='".EMAIL." *' value='' maxlength='45' id='border-right6' autocomplete='off'/>
							</div>
						</div>										
						<div class='form-group'>										
							<div class='form-line'>
								<label class='title' for='exampleFormControlInput1'>".PASSWORD." *</label>
								<input required type='password' name='password' class='form-control' placeholder='".PASSWORD." *' value='' maxlength='30' id='border-right6' autocomplete='off'/>
							</div>				
						</div>			
						<div class='form-group'>
							<div class='form-line'>
								".NOTE."
							</div>
						</div>
						<button type='submit' class='btn btn-primary' name='now_register' data-target='successLiveToast'>".REGISTER."</submit>	
					</form>	
                </div>
              </div>
            </div>
          </div>
        </section>";
}		
site_footer();	 	
?>