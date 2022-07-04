<?php 
// ************************************************************************************//
// * xUCP
// ************************************************************************************//
// * Author: DerStr1k3r
// ************************************************************************************//
// * Version: 1.1.1
// * 
// * Copyright (c) 2022 DerStr1k3r. All rights reserved.
// ************************************************************************************//
// * License Typ: GNU GPLv3
// ************************************************************************************//
include(dirname(__FILE__) . "/../../include/features.php");

site_secure();
secure_url();

if (isset($_GET["profilechange"])) $profilechange = trim(htmlentities($_GET["profilechange"]));
elseif (isset($_POST["profilechange"])) $profilechange = trim(htmlentities($_POST["profilechange"]));
else $profilechange = "view";

if ($profilechange == "changemydata") {
	if(isset($_POST['submit'])){
		if(empty($_POST['usersig']) && empty($_POST['email']) && empty($_POST['language']) && empty($_POST['password'])){
				echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".USERPROFILECHANGE."</strong>
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
			$usersig = filter_input(INPUT_POST, 'usersig', FILTER_SANITIZE_STRING);
			$userava = filter_input(INPUT_POST, 'userava', FILTER_SANITIZE_STRING);
			$email 	= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
			$language 	= filter_input(INPUT_POST, 'language', FILTER_SANITIZE_STRING);			
			$password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);
			$hashPassword = password_hash($password,PASSWORD_BCRYPT);			

			if (!is_image($userava))
			{
				echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".USERPROFILECHANGE."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".AVATAR_CHECK_BACK."
						</div>
					</div>
				</div>";
			} else {
				echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".USERPROFILECHANGE."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".AVATAR_CHECK_OKAY."
						</div>
					</div>
				</div>";
			}
			
			// The 2nd check to make sure that nothing bad can happen.
			if (preg_match('/[A-Za-z0-9]+/', $_POST['usersig']) == 0) {
				echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".USERPROFILECHANGE."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".MSG_14."
						</div>
					</div>
				</div>";				
			}
			// The 2nd check to make sure that nothing bad can happen.
			if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
				echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".USERPROFILECHANGE."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".MSG_15."
						</div>
					</div>
				</div>";				
			}
			// The 2nd check to make sure that nothing bad can happen.
			if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".USERPROFILECHANGE."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".MSG_13."
						</div>
					</div>
				</div>";				
			}			

			$sql = "UPDATE accounts SET usersig='".$usersig."', email='".$email."', language='".$language."', password='".$hashPassword."', userava='".$userava."' WHERE id = '".$_SESSION['username']['secure_first']."'";
   
			if (mysqli_query($conn, $sql)) {
            	echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".USERPROFILECHANGE."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".MSG_8."
						</div>
					</div>
				</div>";
			} else {
            	echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".USERPROFILECHANGE."</strong>
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
}

site_header("".USERPROFILECHANGE."");
site_navi_logged();
site_content_logged();

echo "
		<!-- Page Header-->
		<div class='bg-dash-dark-2 py-4'>
			<div class='container-fluid'>
				<h2 class='h5 mb-0'>".WELCOMETO." ".USERPROFILECHANGE."!</h2>
			</div>
		</div>
		<!-- Breadcrumb-->
		<div class='container-fluid py-2'>
			<nav aria-label='breadcrumb'>
				<ol class='breadcrumb mb-0 py-3 px-0'>
					<li class='breadcrumb-item'><a href='/usercp/profile/index.php'>".$_SESSION['username']['site_settings_site_name']."</a></li>
					<li class='breadcrumb-item active' aria-current='page'>".USERPROFILECHANGE."</li>					
                </ol>
			</nav>
		</div>
		
		<section class='pt-0'>
			<div class='container-fluid'>
				<div class='row gy-4'>
					<div class='col-lg-4'>
						<div class='card card-profile mb-4'>";
						$sql = "SELECT userava FROM accounts WHERE id = ".$_SESSION['username']['secure_first']."";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($account = $result->fetch_assoc()) {
								echo "
							<div class='card-header'></div>
							<div class='card-body text-center'><img class='card-profile-img' src='".htmlentities($account['userava'], ENT_QUOTES, 'UTF-8')."' title='...'>";
							}	
						}		
						echo "
							<h3 class='mb-3 text-gray-400'>";
							$sql = "SELECT username FROM accounts WHERE id = ".$_SESSION['username']['secure_first']."";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								// output data of each row
								while($account = $result->fetch_assoc()) {
									echo "
											".htmlentities($account['username'], ENT_QUOTES, 'UTF-8')."";
								}
							}
						echo "
							</h3>";
						$sql = "SELECT usersig FROM accounts WHERE id = ".$_SESSION['username']['secure_first']."";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($account = $result->fetch_assoc()) {
								echo "
								<p class='mb-4'>
									".htmlentities($account['usersig'], ENT_QUOTES, 'UTF-8')."
								</p>";
							}
						}
							
						echo "
							</div>
						</div>
					</div>
					<div class='col-lg-8'>";
					$sql = "SELECT email, password, usersig, language, userava FROM accounts WHERE id = ".$_SESSION['username']['secure_first']."";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					// output data of each row
						while($account = $result->fetch_assoc()) {					
						echo "
						<form class='card' action='".$_SERVER['PHP_SELF']."?profilechange=changemydata' method='post' enctype='multipart/form-data'>
							<div class='card-body'>
								<h3 class='card-title'>".USERPROFILECHANGE."</h3>
								<div class='row gy-4'>
									<div class='col-sm-6'>
										<label class='form-label'>".EMAIL."</label>
										<input class='form-control' type='text' name='email' placeholder='".EMAIL."' value='".htmlentities($account['email'], ENT_QUOTES, 'UTF-8')."' required>
									</div>
									<div class='col-sm-6'>
										<label class='form-label'>".PASSWORD."</label>
										<input class='form-control' type='password' name='password' placeholder='".PASSWORD."' required>
									</div>
									<div class='col-md-12'>
										<label class='form-label'>".LANGUAGE."</label>
										<div class='bootstrap-select form-control show-tick'>
											<select name='language' class='form-control show-tick' required>
												<option value=''>-- ".CHANGE_MYPROFILE_LANGUAGENOTE." --</option>
												<option value='en'>".CHANGE_MYPROFILE_LANGUAGE_SELECT_EN."</option>
												<option value='de'>".CHANGE_MYPROFILE_LANGUAGE_SELECT_DE."</option>
											</select>
										</div>
									</div>
									<div class='col-md-12'>
										<label class='form-label'>".AVATAR."</label>
										<input class='form-control' type='text' name='userava' placeholder='".AVATAR."' value='".htmlentities($account['userava'], ENT_QUOTES, 'UTF-8')."'>
									</div>									
									<div class='col-md-12'>
										<label class='form-label'>".SIGNATUR."</label>
										<textarea class='form-control' type='text' name='usersig' placeholder='".SIGNATUR."' value='".htmlentities($account['usersig'], ENT_QUOTES, 'UTF-8')."'></textarea>
									</div>
								</div>
							</div>
							<div class='card-footer text-end'>
								<button class='btn btn-dark' type='submit' name='submit' data-target='successLiveToast'>".MYPROFILESAVE."</button>
							</div>
						</form>";
						}
						mysqli_close($conn);
					}
					echo "
				</div>
			</section>";

site_footer();	
?>