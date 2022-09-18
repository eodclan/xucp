<?php 
// ************************************************************************************//
// * xUCP Free
// ************************************************************************************//
// * Author: DerStr1k3r
// ************************************************************************************//
// * Version: 1.3
// * 
// * Copyright (c) 2022 DerStr1k3r. All rights reserved.
// ************************************************************************************//
// * License Typ: GNU GPLv3
// ************************************************************************************//
include(dirname(__FILE__) . "/../../include/features.php");

site_secure();
secure_url();

site_header("Regelwerk");
site_navi_logged();
site_content_logged();
	
	echo "
		<!-- Page Header-->
		<div class='bg-dash-dark-2 py-4'>
			<div class='container-fluid'>
				<h2 class='h5 mb-0'>".WELCOMETO." Regelwerk!</h2>
			</div>
		</div>
		<!-- Breadcrumb-->
		<div class='container-fluid py-2'>
			<nav aria-label='breadcrumb'>
				<ol class='breadcrumb mb-0 py-3 px-0'>
					<li class='breadcrumb-item'><a href='/dashboard.php'>".$_SESSION['username']['site_settings_site_name']."</a></li>
					<li class='breadcrumb-item active' aria-current='page'>Regelwerk</li>					
                </ol>
			</nav>
		</div>
	    <section class='pt-0'>
		<div class='container-fluid'>
		<div class='row gy-4'>
		<div class='col-lg-12'>
		<div class='card'>
			<div class='card-header'>
				<h4 class='mb-0'>";
				$query = "select * from xucp_rules";
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
		$shortcontent = substr($content, 0, 80000)."...";					
		echo "
		<section class='pt-0'>
          <div class='container-fluid'>		
			<div class='card mb-4'>
              <div class='card-header'>
                <h4 class='mb-0'>".$title."</h4>
              </div>
              <div class='card-body pt-0'>               
                <p>
                   $shortcontent</p>
              </div>
            </div>
          </div>
        </section>";
	}				

	echo "
				</h4>
			</div>	
		      </div>
		     </div>
		    </div>
		  </div>
        </section>";	
site_footer();	
?>		