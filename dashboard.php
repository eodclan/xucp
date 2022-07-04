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
include(dirname(__FILE__) . "/include/features.php");

site_secure();
secure_url();

site_header("".DASHBOARD."");
site_navi_logged();
site_content_logged();

$stmt = $conn->prepare("SELECT * from accounts WHERE id=".$_SESSION['username']['secure_first']."");
$stmt->execute();
$result2 =$stmt->get_result();
while ($row2 = $result2->fetch_assoc()) {
	$id = htmlentities($row2['username'], ENT_QUOTES, 'UTF-8');
}

$sqlwl = "SELECT * from accounts WHERE id ='".$_SESSION['username']['secure_first']."'";
$result = mysqli_query($conn, $sqlwl);
$rowwl = mysqli_fetch_assoc($result);
if (htmlentities($rowwl['whitelisted'], ENT_QUOTES, 'UTF-8') == 1) {			
echo "	
		<!-- Page Header-->
		<div class='bg-dash-dark-2 py-4'>
			<div class='container-fluid'>
				<h2 class='h5 mb-0'>".MYWHITELIST_STATUS."!</h2>
			</div>
		</div>";
} else {
echo "	
		<!-- Page Header-->
		<div class='bg-dash-dark-2 py-4'>
			<div class='container-fluid'>
				<h2 class='h5 mb-0'>".MYWHITELIST_STATUS_2."!</h2>
			</div>
		</div>";					
}					
echo" 
		<!-- Breadcrumb-->
		<div class='container-fluid py-2'>
			<nav aria-label='breadcrumb'>
				<ol class='breadcrumb mb-0 py-3 px-0'>
					<li class='breadcrumb-item'><a href='dashboard.php'>".$_SESSION['username']['site_settings_site_name']."</a></li>
					<li class='breadcrumb-item active' aria-current='page'>".DASHBOARD."</li>					
                </ol>
			</nav>
		</div>";
if(intval($_SESSION['username']['secure_staff']) >= 5) {
echo "
		<section class='pt-0'>
          <div class='container-fluid'>
            <div class='row gy-4'>";

		$sqlsupport = "SELECT id FROM support ORDER by id DESC LIMIT 1";
		$resultsupport = $conn->query($sqlsupport);

		if ($resultsupport->num_rows > 0) {
			// output data of each row
			while($dashboard = $resultsupport->fetch_assoc()) {
			echo "
              <div class='col-md-6 col-sm-12'>
                <div class='card mb-0'>
                  <div class='card-body'>
                    <div class='d-flex align-items-end justify-content-between mb-2'>
                      <div class='me-2'>
                            <svg class='svg-icon svg-icon-sm svg-icon-heavy text-gray-600 mb-2'>
                              <use xlink:href='#stack-1'> </use>
                            </svg>
                        <p class='text-sm text-uppercase text-gray-600 lh-1 mb-0'>".DASHBOARDSUPPORT."</p>
                      </div>
                      <p class='text-xxl lh-1 mb-0 text-dash-color-1'>".htmlentities($dashboard['id'], ENT_QUOTES, 'UTF-8')."</p>
                    </div>
                    <div class='progress' style='height: 3px'>
                      <div class='progress-bar bg-dash-color-1' role='progressbar' style='width: ".htmlentities($dashboard['id'], ENT_QUOTES, 'UTF-8')."%' aria-valuenow='".htmlentities($dashboard['id'], ENT_QUOTES, 'UTF-8')."' aria-valuemin='0' aria-valuemax='100'></div>
                    </div>
                  </div>
                </div>
              </div>";
			}
		}					
		$sqlusers = "SELECT id FROM accounts ORDER by id DESC LIMIT 1";
		$resultusers = $conn->query($sqlusers);

		if ($resultusers->num_rows > 0) {
			// output data of each row
			while($dashboard = $resultusers->fetch_assoc()) {
			echo "
              <div class='col-md-6 col-sm-12'>
                <div class='card mb-0'>
                  <div class='card-body'>
                    <div class='d-flex align-items-end justify-content-between mb-2'>
                      <div class='me-2'>
                            <svg class='svg-icon svg-icon-sm svg-icon-heavy text-gray-600 mb-2'>
                              <use xlink:href='#user-1'> </use>
                            </svg>					  
                        <p class='text-sm text-uppercase text-gray-600 lh-1 mb-0'>".DASHBOARDUSERS."</p>
                      </div>
                      <p class='text-xxl lh-1 mb-0 text-dash-color-2'>".htmlentities($dashboard['id'], ENT_QUOTES, 'UTF-8')."</p>
                    </div>
                    <div class='progress' style='height: 3px'>
                      <div class='progress-bar bg-dash-color-2' role='progressbar' style='width: ".htmlentities($dashboard['id'], ENT_QUOTES, 'UTF-8')."%' aria-valuenow='".htmlentities($dashboard['id'], ENT_QUOTES, 'UTF-8')."' aria-valuemin='0' aria-valuemax='100'></div>
                    </div>
                  </div>
                </div>
              </div>";
			}
		}					
echo "							
            </div>
          </div>
        </section>";

}

	$query = "select * from news_lang";
	$result = mysqli_query($conn,$query);

	while($dashboard = mysqli_fetch_array($result)){
		$title_field = "title";
		$content_field = "content";
		if(isset($_SESSION['username']['secure_lang']) && $_SESSION['username']['secure_lang'] == 'de'){
			$title_field = "title_de";
			$content_field = "content_de";
		}
		$id = $dashboard['id'];
		$title = $dashboard[$title_field];
		$content = $dashboard[$content_field];
		$shortcontent = substr($content, 0, 260)."...";					
		echo "
		<section class='pt-0'>
          <div class='container-fluid'>		
			<div class='card mb-4'>
              <div class='card-header'>
                <h4 class='mb-0'>".NEWS." ".$title."</h4>
              </div>
              <div class='card-body pt-0'>               
                <p>
                   $shortcontent</p>
              </div>
            </div>
          </div>
        </section>";
	}
site_footer();	
?>