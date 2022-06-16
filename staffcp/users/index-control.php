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

site_header("".STAFF_USERCONTROL."");
site_navi_logged();
site_content_logged();

$limit = 10;  
if (isset($_GET["site"])) {
	$site  = $_GET["site"]; 
}else{ 
	$site=1;
};  
$start_from = ($site-1) * $limit;

echo "
		<!-- Page Header-->
		<div class='bg-dash-dark-2 py-4'>
			<div class='container-fluid'>
				<h2 class='h5 mb-0'>".WELCOMETO." ".STAFF_USERCONTROL."!</h2>
			</div>
		</div>
		<!-- Breadcrumb-->
		<div class='container-fluid py-2'>
			<nav aria-label='breadcrumb'>
				<ol class='breadcrumb mb-0 py-3 px-0'>
					<li class='breadcrumb-item'><a href='index-control.php'>".$_SESSION['username']['site_settings_site_name']."</a></li>
					<li class='breadcrumb-item active' aria-current='page'>".STAFF_USERCONTROL."</li>					
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
							</thead>
						<tbody>";

					$sql = "SELECT id, username, email, whitelisted FROM accounts ORDER BY id ASC LIMIT ".$start_from.", ".$limit."";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						// output data of each row
						while($userchange = $result->fetch_assoc()) {
							echo "
							<tr>
								<td>
									" . $userchange["id"]. "
								</td>
								<td>
									" . $userchange["username"]. "
								</td>						
								<td>
									" . $userchange["email"]. "
								</td>
								<td>
									" . $userchange["whitelisted"]. "
								</td>
							</tr>";
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