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
include(dirname(__FILE__) . "/../../include/features.php");
	
site_secure();
secure_url();

site_secure_staff_check();

if (isset($_GET["ucpchanger"])) $ucpchanger = trim(htmlentities($_GET["ucpchanger"]));
elseif (isset($_POST["ucpchanger"])) $ucpchanger = trim(htmlentities($_POST["ucpchanger"]));
else $ucpchanger = "view";

$limit = 10;  
if (isset($_GET["site"])) {
	$site  = $_GET["site"]; 
}else{ 
	$site=1;
};  
$start_from = ($site-1) * $limit;

site_header("".STAFF_USERCAHNEGED."");
site_navi_logged();
site_content_logged();
$sql = "SELECT id, username, email, whitelisted from accounts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($userchange = $result->fetch_assoc()) {
    if ($ucpchanger == "" . $userchange["id"]. "") {

      if(isset($_POST['submit'])){
          $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
          $email 	= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
          $whitelisted 	= filter_input(INPUT_POST, 'whitelisted', FILTER_SANITIZE_STRING);

			// The 2nd check to make sure that nothing bad can happen.    
			if (preg_match('/[A-Za-z0-9]+/', $_POST['username']) == 0) {
			echo "
			<div class='row clearfix'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='card'>				
                        <div class='header'>
                            <h2>
								".PROJECTNAME."
                            </h2>
                        </div>
                        <div class='body'>
                            <p class='m-t-15 m-b-30'>
								".MSG_14."
                            </p>
                        </div>				
                    </div>					
                </div>
            </div>";
			}
			if (preg_match('/[A-Za-z0-9]+/', $_POST['email']) == 0) {
			echo "
			<div class='row clearfix'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='card'>				
                        <div class='header'>
                            <h2>
								".PROJECTNAME."
                            </h2>
                        </div>
                        <div class='body'>
                            <p class='m-t-15 m-b-30'>
								".MSG_14."
                            </p>
                        </div>				
                    </div>					
                </div>
            </div>";
			}
			if (preg_match('/[A-Za-z0-9]+/', $_POST['whitelisted']) == 0) {
			echo "
			<div class='row clearfix'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='card'>				
                        <div class='header'>
                            <h2>
								".PROJECTNAME."
                            </h2>
                        </div>
                        <div class='body'>
                            <p class='m-t-15 m-b-30'>
								".MSG_14."
                            </p>
                        </div>				
                    </div>					
                </div>
            </div>";
			}
			if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			echo "
			<div class='row clearfix'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='card'>				
                        <div class='header'>
                            <h2>
								".PROJECTNAME."
                            </h2>
                        </div>
                        <div class='body'>
                            <p class='m-t-15 m-b-30'>
								".MSG_13."
                            </p>
                        </div>				
                    </div>					
                </div>
            </div>";
			}

	        $sql = "UPDATE accounts SET username='".$username."', email='".$email."', whitelisted='".$whitelisted."' WHERE id = ".$userchange['id']."";
   
          if (mysqli_query($conn, $sql)) {
            site_userchanged_done();
          } else {
			echo "
			<div class='row clearfix'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='card'>				
                        <div class='header'>
                            <h2>
								".PROJECTNAME."
                            </h2>
                        </div>
                        <div class='body'>
                            <p class='m-t-15 m-b-30'>
								".MSG_7."
								<br>
								" . mysqli_error($conn) . "
                            </p>
                        </div>				
                    </div>					
                </div>
            </div>";
          }
          mysqli_close($conn);
        }            		
      }
      if(isset($_POST['delete'])){
        if(empty($_POST['username']) || empty($_POST['email'])){
			echo "
			<div class='row clearfix'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='card'>				
                        <div class='header'>
                            <h2>
								".PROJECTNAME."
                            </h2>
                        </div>
                        <div class='body'>
                            <p class='m-t-15 m-b-30'>
								".MSG_10."
                            </p>
                        </div>				
                    </div>					
                </div>
            </div>";
        } else {
          $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
          $email 	= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
          $whitelisted 	= filter_input(INPUT_POST, 'whitelisted', FILTER_SANITIZE_STRING);

			// The 2nd check to make sure that nothing bad can happen.    
			if (preg_match('/[A-Za-z0-9]+/', $_POST['username']) == 0) {
			echo "
			<div class='row clearfix'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='card'>				
                        <div class='header'>
                            <h2>
								".PROJECTNAME."
                            </h2>
                        </div>
                        <div class='body'>
                            <p class='m-t-15 m-b-30'>
								".MSG_14."
                            </p>
                        </div>				
                    </div>					
                </div>
            </div>";
			}
			if (preg_match('/[A-Za-z0-9]+/', $_POST['email']) == 0) {
			echo "
			<div class='row clearfix'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='card'>				
                        <div class='header'>
                            <h2>
								".PROJECTNAME."
                            </h2>
                        </div>
                        <div class='body'>
                            <p class='m-t-15 m-b-30'>
								".MSG_14."
                            </p>
                        </div>				
                    </div>					
                </div>
            </div>";
			}
			if (preg_match('/[A-Za-z0-9]+/', $_POST['whitelisted']) == 0) {
			echo "
			<div class='row clearfix'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='card'>				
                        <div class='header'>
                            <h2>
								".PROJECTNAME."
                            </h2>
                        </div>
                        <div class='body'>
                            <p class='m-t-15 m-b-30'>
								".MSG_14."
                            </p>
                        </div>				
                    </div>					
                </div>
            </div>";
			}
			if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			echo "
			<div class='row clearfix'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='card'>				
                        <div class='header'>
                            <h2>
								".PROJECTNAME."
                            </h2>
                        </div>
                        <div class='body'>
                            <p class='m-t-15 m-b-30'>
								".MSG_13."
                            </p>
                        </div>				
                    </div>					
                </div>
            </div>";
			}

	        $delsql = "DELETE FROM accounts WHERE id = ".$userchange['id']."";
   
          if (mysqli_query($conn, $delsql)) {
			echo "
			<div class='row clearfix'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='card'>				
                        <div class='header'>
                            <h2>
								".PROJECTNAME."
                            </h2>
                        </div>
                        <div class='body'>
                            <p class='m-t-15 m-b-30'>
								".MSG_3."
                            </p>
                        </div>				
                    </div>					
                </div>
            </div>";
          } else {
			echo "
			<div class='row clearfix'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='card'>				
                        <div class='header'>
                            <h2>
								".PROJECTNAME."
                            </h2>
                        </div>
                        <div class='body'>
                            <p class='m-t-15 m-b-30'>
								".MSG_7."
								<br>
								" . mysqli_error($conn) . "
                            </p>
                        </div>				
                    </div>					
                </div>
            </div>";
          }
          mysqli_close($conn);
        }            		
      }	  
    }
}
echo "
		<!-- Page Header-->
		<div class='bg-dash-dark-2 py-4'>
			<div class='container-fluid'>
				<h2 class='h5 mb-0'>".WELCOMETO." ".STAFF_USERCAHNEGED."!</h2>
			</div>
		</div>
		<!-- Breadcrumb-->
		<div class='container-fluid py-2'>
			<nav aria-label='breadcrumb'>
				<ol class='breadcrumb mb-0 py-3 px-0'>
					<li class='breadcrumb-item'><a href='index-change.php'>".$_SESSION['username']['site_settings_site_name']."</a></li>
					<li class='breadcrumb-item active' aria-current='page'>".STAFF_USERCAHNEGED."</li>					
                </ol>
			</nav>
		</div>
	    <section class='pt-0'>
		<div class='container-fluid'>
            <div class='row gy-4'>
              <div class='col-lg-12'>
                <div class='card'>
                  <div class='card-body'>
								<div class='table-responsive'>
									<table class='table'>
										<thead class=' text-primary'>
											<th>
												".STAFF_USERCONTROLUSERID."
											</th>
											<th>
												".STAFF_USERCONTROLUSERNAME."
											</th>					  
											<th>
												".STAFF_USERCONTROLEMAIL."
											</th>				  
											<th>
												".STAFF_USERCONTROLACCOUNTWHITELIST."
											</th>
											<th>
												".STAFF_USERCONTROLOPTION."
											</th>					  
										</thead>
									<tbody>";

									$sql = "SELECT id, username, email, whitelisted from accounts ORDER BY id ASC LIMIT ".$start_from.", ".$limit."";
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {
										// output data of each row
										while($userchange = $result->fetch_assoc()) {
										echo "
											<form method='post' action='".$_SERVER['PHP_SELF']."?ucpchanger=".$userchange['id']."' enctype='multipart/form-data'>
												<tr>
													<td>
														<p class='btn btn-*'>" . $userchange["id"]. "</p>
													</td>
													<td>			
														<input type='text' name='username' size='50' maxlength='60' class='form-control' value='" . $userchange["username"]. "' required>
													</td>						
													<td>						
														<input type='text' name='email' size='50' maxlength='60' class='form-control' value='" . $userchange["email"]. "' required>
													</td>
													<td>
														<input type='text' name='whitelisted' size='1' maxlength='1' class='form-control' value='" . $userchange["whitelisted"]. "' required>
													</td>
													<td>
														<button type='submit' class='btn btn-dark' name='submit'>".STAFF_USERCONTROLSAVE."</button></submit>&nbsp;
														<button type='submit' class='btn btn-dark' name='delete'>".STAFF_USERCONTROLDELETE."</button></submit>
													</td>													
												</tr>						
											</form>";
										}
									}					

									echo "		  
										</tbody>
									</table>";
									
									$result_db = mysqli_query($conn,"SELECT COUNT(id) FROM accounts"); 
									$userchange_db = mysqli_fetch_row($result_db);  
									$total_records = $userchange_db[0];  
									$total_sites = ceil($total_records / $limit); 
									$siteLink = "
										<div class='dataTable-bottom'>
											<nav class='dataTable-pagination'>
												<ul class='dataTable-pagination-list'>";  
												for ($i=1; $i<=$total_sites; $i++) {
												$siteLink .= "
													<li>
														<a href='".$_SERVER['PHP_SELF']."?site=".$i."' data-page='".$i."'>".$i."</a>
													</li>";	
												}
												echo $siteLink . "
												</ul>
											</nav>
										</div>
								</div>
                </div>
              </div>
            </div>
          </div>
        </section>";
  site_footer();	
?>