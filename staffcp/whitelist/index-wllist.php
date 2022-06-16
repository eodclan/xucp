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
site_secure_staff_check();

$limit = 10;  
if (isset($_GET["site"])) {
	$site  = $_GET["site"]; 
}else{ 
	$site=1;
};  
$start_from = ($site-1) * $limit;

site_header("".FRAGE_HEADER_2."");
site_navi_logged();
site_content_logged();

echo "
		<!-- Page Header-->
		<div class='bg-dash-dark-2 py-4'>
			<div class='container-fluid'>
				<h2 class='h5 mb-0'>".WELCOMETO." ".FRAGE_HEADER_2."!</h2>
			</div>
		</div>
		<!-- Breadcrumb-->
		<div class='container-fluid py-2'>
			<nav aria-label='breadcrumb'>
				<ol class='breadcrumb mb-0 py-3 px-0'>
					<li class='breadcrumb-item'><a href='/staffcp/whitelist/index-wllist.php'>".$_SESSION['username']['site_settings_site_name']."</a></li>
					<li class='breadcrumb-item active' aria-current='page'>".FRAGE_HEADER_2."</li>					
                </ol>
			</nav>
		</div>
	    <section class='pt-0'>
		<div class='container-fluid'>
            <div class='row gy-4'>
              <div class='col-lg-12'>
                <div class='card'>
                  <div class='card-body'>
					<table class='table'>
						<thead>
							<tr>
								<th>ID</th>
								<th>Username</th>
								<th>Charakter Name</th>
								<th>Aktionen</th>
							</tr>
						</thead>
						<tbody>";
					$sqlposted = "SELECT * FROM whitelist";
					$resultposted = $conn->query($sqlposted);

					if ($resultposted->num_rows > 0) {
						// output data of each row
						while($whitelist = $resultposted->fetch_assoc()) {			
						echo"		
							<tr>
								<td>".$whitelist['id']."</td>
								<td>".$whitelist['ucpname']."</td>
								<td>".$whitelist['charname']."</td>
								<td>
									<a href='index-wllist-view.php?id=".$whitelist['id']."' class='btn btn-dark'>
										<i class='material-icons' data-toggle='tooltip' title='Bearbeiten'>
											<svg class='svg-icon svg-icon-xs svg-icon-heavy'>
												<use xlink:href='#reading-1'> </use>
											</svg>&nbsp;".FRAGE_VIEW."										
										</i>
									</a>
								</td>
							</tr>";	
						}
					}
					echo "
						</tbody>
					</table>";
				$result_db = mysqli_query($conn,"SELECT COUNT(id) FROM whitelist"); 
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