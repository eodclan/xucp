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
include(dirname(__FILE__) . "/include/features.php");
secure_url();
site_header_nologged("".HOME_NOLOGGED."");
site_navi_nologged();
site_content_nologged();
echo "
		<!-- Page Header-->
		<div class='bg-dash-dark-2 py-4'>
			<div class='container-fluid'>
				<h2 class='h5 mb-0'>".WELCOMETO." ".$_SESSION['username']['site_settings_site_name']."!</h2>
			</div>
		</div>
		<!-- Breadcrumb-->
		<div class='container-fluid py-2'>
			<nav aria-label='breadcrumb'>
				<ol class='breadcrumb mb-0 py-3 px-0'>
					<li class='breadcrumb-item'><a href='/index.php'>".$_SESSION['username']['site_settings_site_name']."</a></li>
					<li class='breadcrumb-item active' aria-current='page'>".HOME_NOLOGGED."</li>					
                </ol>
			</nav>
		</div>
	    <section class='pt-0'>
		<div class='container-fluid'>
            <div class='row gy-4'>
              <div class='col-lg-12'>
                <div class='card'>
                  <div class='card-body'>		  
					".INDEXTEXT."	
                </div>
              </div>
            </div>
          </div>
        </section>";			
site_footer();
?>