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

$limit = 10;  
if (isset($_GET["site"])) {
	$site  = $_GET["site"]; 
}else{ 
	$site=1;
};  
$start_from = ($site-1) * $limit;

site_secure();
secure_url();

if (isset($_GET["support"])) $support = trim(htmlentities($_GET["support"]));
elseif (isset($_POST["support"])) $support = trim(htmlentities($_POST["support"]));
else $support = "view";

if ($support == "remoticket") {
	if(isset($_POST['sup_rem'])){
		$sql3 = "DELETE FROM support";
		$result3 = mysqli_query($conn, $sql3);
		if($result3)
		{
			site_header("".USERSUPPORT."");
			site_navi_logged();
			site_content_logged();	
		echo "
			<!-- Page Header-->
			<div class='bg-dash-dark-2 py-4'>
				<div class='container-fluid'>
					<h2 class='h5 mb-0'>".WELCOMETO." ".USERSUPPORT."!</h2>
				</div>
			</div>
			<!-- Breadcrumb-->
			<div class='container-fluid py-2'>
				<nav aria-label='breadcrumb'>
					<ol class='breadcrumb mb-0 py-3 px-0'>
						<li class='breadcrumb-item'><a href='index.php'>".$_SESSION['username']['site_settings_site_name']."</a></li>
						<li class='breadcrumb-item active' aria-current='page'>".USERSUPPORT."</li>					
					</ol>
				</nav>
			</div>
			<section class='pt-0'>
			<div class='container-fluid'>
			<div class='row gy-4'>
			<div class='col-lg-12'>
                    <div class='card'>				
                        <div class='body'>
                            <p class='m-t-15 m-b-30'>
								".SUPPORTDELETEINFO."<br><br>".SUPPORTDELETE1."
                            </p>
                        </div>				
                    </div>					
			</div>
			</div>
			</div>
			</section>";
			//$conn->close();
			site_footer();
			die();
		} 
	}		           		
} 

if ($support == "addticket") {
	if(isset($_POST['posted_sup'])){
		if(empty($_POST['username']) || empty($_POST['msg']) || empty($_POST['bug'])){
		echo"
			<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
				<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
					<div class='toast-header'>
						<strong class='me-auto'>".USERSUPPORT."</strong>
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
			$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
			$msg 	= filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_STRING);
			$bug 	= filter_input(INPUT_POST, 'bug', FILTER_SANITIZE_STRING);
			$posted 	= date('Y-m-d H:i:s');

		// The 2nd check to make sure that nothing bad can happen.
		if (preg_match('/[A-Za-z0-9]+/', $_POST['username']) == 0) {
            		echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".USERSUPPORT."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".MSG_10."
						</div>
					</div>
				</div>";
		}
		if (preg_match('/[A-Za-z0-9]+/', $_POST['msg']) == 0) {
           		 echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".USERSUPPORT."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".MSG_10."
						</div>
					</div>
				</div>";
		}
		if (preg_match('/[A-Za-z0-9]+/', $_POST['bug']) == 0) {
            		echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".USERSUPPORT."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".MSG_10."
						</div>
					</div>
				</div>";			
		}			
			$sql = "insert into support (username, msg, bug, posted) value('".$username."', '".$msg."', '".$bug."', NOW())";
			$result = mysqli_query($conn, $sql);
			if($result)
			{
			echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".USERSUPPORT."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".SUPPORTADDDONE."
						</div>
					</div>
				</div>";			
			}
		}
	}
	
	site_header("".USERSUPPORT."");
	site_navi_logged();
	site_content_logged();

	echo"
			<!-- Page Header-->
			<div class='bg-dash-dark-2 py-4'>
				<div class='container-fluid'>
					<h2 class='h5 mb-0'>".WELCOMETO." ".USERSUPPORT."!</h2>
				</div>
			</div>
			<!-- Breadcrumb-->
			<div class='container-fluid py-2'>
				<nav aria-label='breadcrumb'>
					<ol class='breadcrumb mb-0 py-3 px-0'>
						<li class='breadcrumb-item'><a href='index.php'>".$_SESSION['username']['site_settings_site_name']."</a></li>
						<li class='breadcrumb-item active' aria-current='page'>".USERSUPPORT."</li>					
					</ol>
				</nav>
			</div>
	    <section class='pt-0'>
		<div class='container-fluid'>
            <div class='row gy-4'>
              <div class='col-lg-12'>
                <div class='card'>
                  <div class='card-body'>
					".SUPPORTINFO."
				  </div>							
				</div>
			  </div>
			</div>
		  </div>
		</section>"; 
			
	$sql = "SELECT username FROM accounts WHERE id = ".$_SESSION['username']['secure_first']."";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($support = $result->fetch_assoc()) {
		echo"
	    <section class='pt-0'>
		<div class='container-fluid'>
            <div class='row gy-4'>
              <div class='col-lg-12'>
                <div class='card'>
                  <div class='card-body'>				  
					<form action='".$_SERVER['PHP_SELF']."?support=addticket' method='post' enctype='multipart/form-data'>
                      <tr>				  
                        <td>
							<h6 class='title'>
								".SUPPORTUSERNAME."
								<small class='text-muted'>".SUPPORTUSERINFO1."</small>
							</h6>
							<div class='input-group'>
								<input style='box-shadow: 0 0 1px rgba(0,0,0, .4);' type='text' name='username' size='50' maxlength='60' class='form-control' value='".htmlentities($support['username'], ENT_QUOTES, 'UTF-8')."' required>
							</div>	
                        </td>
					  </tr>
                      <tr>				  
                        <td>
							<h6 class='title'>
								".SUPPORTSUBJECT."
								<small class='text-muted'>".SUPPORTUSERINFO2."</small>
							</h6>
							<div class='input-group'>
								<input style='box-shadow: 0 0 1px rgba(0,0,0, .4);' type='text' name='bug' size='50' maxlength='60' class='form-control' required>
							</div>	
                        </td>
					  </tr>
                      <tr>					  
                        <td>
							<h6 class='title'>
								".SUPPORTMSG."
								<small class='text-muted'>".SUPPORTUSERINFO3."</small>
							</h6>
							<div class='input-group'>				
								<textarea style='box-shadow: 0 0 1px rgba(0,0,0, .4);' type='text' name='msg' size='50' maxlength='260' class='form-control textarea' required></textarea>
							</div>	
                        </td>						
                      </tr>					  
                      <tr>					  
						<td>						
							<button type='submit' name='posted_sup' class='btn btn-dark btn-round' data-target='successLiveToast'>
								".SUPPORTSAVE."
							</button>
							</submit>
                        </td>							
                      </tr>				  						
					</form>
				  </div>							
				</div>
			  </div>
			</div>
		  </div>
		</section>";
		}
	}
	site_footer();
	die();		
}

site_header("".USERSUPPORT."");
site_navi_logged();
site_content_logged();

	echo"
			<!-- Page Header-->
			<div class='bg-dash-dark-2 py-4'>
				<div class='container-fluid'>
					<h2 class='h5 mb-0'>".WELCOMETO." ".USERSUPPORT."!</h2>
				</div>
			</div>
			<!-- Breadcrumb-->
			<div class='container-fluid py-2'>
				<nav aria-label='breadcrumb'>
					<ol class='breadcrumb mb-0 py-3 px-0'>
						<li class='breadcrumb-item'><a href='index.php'>".$_SESSION['username']['site_settings_site_name']."</a></li>
						<li class='breadcrumb-item active' aria-current='page'>".USERSUPPORT."</li>					
					</ol>
				</nav>
			</div>
	    <section class='pt-0'>
		<div class='container-fluid'>
            <div class='row gy-4'>
              <div class='col-lg-12'>
                <div class='card'>
                  <div class='card-header'>
								".SUPPORTADDTICKET1."
								<a href='".$_SERVER['PHP_SELF']."?support=addticket'><div class='btn btn-dark btn-round'>".SUPPORTADDTICKET2."</div></a>
				  </div>							
				</div>
			  </div>
			</div>
		  </div>
		</section>";
			
if(intval($_SESSION['username']['secure_staff']) >= 3) {
	echo"
	    <section class='pt-0'>
		<div class='container-fluid'>
            <div class='row gy-4'>
              <div class='col-lg-12'>
                <div class='card'>
                  <div class='card-header'>
								".USERSUPPORT."
								<form method='post' action='".$_SERVER['PHP_SELF']."?support=remoticket' enctype='multipart/form-data' style='float:right;'>
									<button type='submit' name='sup_rem' class='btn btn-dark btn-round'>".SUPPORTDELETE2."</submit>
								</form>
                  </div>
                  <div class='card-body'>

                <div class='table-responsive'>
                  <table class='table'>
                    <thead class=' text-primary'>
                      <th>
                        ".SUPPORTUSERID."
                      </th>
                      <th>
					  	".SUPPORTUSERNAME."
                      </th>					  
                      <th>
					  	".SUPPORTSUBJECT."
                      </th>
                      <th>
					  	".SUPPORTMSG."
                      </th>				  
                      <th>
					  	".SUPPORTDATE."
                      </th>				  
                    </thead>
                    <tbody>";
					
			$sql = "SELECT id, username, msg, bug, posted FROM support ORDER BY id ASC LIMIT ".$start_from.", ".$limit."";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
						// output data of each row
				while($support = $result->fetch_assoc()) {
	echo"					
                      <tr>
                        <td>
							".htmlentities($support['id'], ENT_QUOTES, 'UTF-8')."
                        </td>
                        <td>
							".htmlentities($support['username'], ENT_QUOTES, 'UTF-8')."
                        </td>						
                        <td>
							".htmlentities($support['bug'], ENT_QUOTES, 'UTF-8')."
                        </td>
                        <td>
							".htmlentities($support['msg'], ENT_QUOTES, 'UTF-8')."
                        </td>
                        <td>
							".htmlentities($support['posted'], ENT_QUOTES, 'UTF-8')."
                        </td>					
                      </tr>";	  
				}
			}
	echo"									  
                    </tbody>
                  </table>";
				$result_db = mysqli_query($conn,"SELECT COUNT(id) FROM support"); 
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
}
site_footer();
?>