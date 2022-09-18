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
site_secure_staff_check();

site_header("".FRAGE_HEADER_2."");
site_navi_logged();
site_content_logged();

$id = $_REQUEST['id'];
$query = "SELECT * FROM xucp_whitelist WHERE id='".$id."'";
$result = mysqli_query($conn, $query) or die( mysqli_error());
$row = mysqli_fetch_assoc($result);

echo"
		<!-- Page Header-->
		<div class='bg-dash-dark-2 py-4'>
			<div class='container-fluid'>
				<h2 class='h5 mb-0'>".WELCOMETO." ".FRAGE_HEADER_2." ".FROM_WL." " .$row['ucpname']. "!</h2>
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
						<form class='forms-sample' name='form' method='post' action='index-wllist-view.php?id=".$id."'>
                            <input type='hidden' name='new' value='1' />
                            <div class='form-group'>
								<div class='form-line'>
									<label  class='col-sm-3 col-form-label'>UCP Name</label>
									<div class='col-sm-9'>
										" .$row['ucpname']. "
									</div>
								</div>
                            </div>
                            <div class='form-group'>
								<div class='form-line'>
									<label  class='col-sm-3 col-form-label'>Charakter Name</label>
									<div class='col-sm-9'>
										" .$row['charname']. "
									</div>
								</div>							
                            </div>
                            <div class='form-group'>
								<div class='form-line'>
									<label  class='col-sm-3 col-form-label'>Charakter Story</label>
									<div class='col-sm-9'>
										" .$row['charstory']. "
									</div>
								</div>							
                            </div>
                            <div class='form-group'>
								<div class='form-line'>
									<label  class='col-sm-3 col-form-label'>".FRAGE1."</label>
									<div class='col-sm-9'>
										" .$row['frage1']. "
									</div>
								</div>							
                            </div>
                            <div class='form-group'>
								<div class='form-line'>
									<label  class='col-sm-3 col-form-label'>".FRAGE2."</label>
									<div class='col-sm-9'>
										" .$row['frage2']. "
									</div>
								</div>							
                            </div>
                            <div class='form-group'>
								<div class='form-line'>
									<label  class='col-sm-3 col-form-label'>".FRAGE3."</label>
									<div class='col-sm-9'>
										" .$row['frage3']. "
									</div>
								</div>							
                            </div>
                            <div class='form-group'>
								<div class='form-line'>
									<label  class='col-sm-3 col-form-label'>".FRAGE4."</label>
									<div class='col-sm-9'>
										" .$row['frage4']. "
									</div>
								</div>							
                            </div>
                            <div class='form-group'>
								<div class='form-line'>
									<label  class='col-sm-3 col-form-label'>".FRAGE5."</label>
									<div class='col-sm-9'>
										" .$row['frage5']. "
									</div>
								</div>							
                            </div>
                            <div class='form-group'>
								<div class='form-line'>
									<label  class='col-sm-3 col-form-label'>".FRAGE6."</label>
									<div class='col-sm-9'>
										" .$row['frage6']. "
									</div>
								</div>							
                            </div>
                            <div class='form-group'>
								<div class='form-line'>
									<label  class='col-sm-3 col-form-label'>".FRAGE7."</label>
									<div class='col-sm-9'>
										" .$row['frage7']. "
									</div>
								</div>							
                            </div>
                            <div class='form-group'>
								<div class='form-line'>
									<label  class='col-sm-3 col-form-label'>".FRAGE8."</label>
									<div class='col-sm-9'>
										" .$row['frage8']. "
									</div>
								</div>							
                            </div>
                            <div class='form-group'>
								<div class='form-line'>
									<label  class='col-sm-3 col-form-label'>".FRAGE9."</label>
									<div class='col-sm-9'>
										" .$row['frage9']. "
									</div>
								</div>							
                            </div>
                            <div class='form-group'>
								<div class='form-line'>
									<label  class='col-sm-3 col-form-label'>".FRAGE10."</label>
									<div class='col-sm-9'>
										" .$row['frage10']. "
									</div>
								</div>							
                            </div>
                            <div class='form-group'>
								<div class='form-line'>
									<label  class='col-sm-3 col-form-label'>".FRAGE11."</label>
									<div class='col-sm-9'>
										" .$row['frage11']. "
									</div>
								</div>							
                            </div>
                            <div class='form-group'>
								<div class='form-line'>
									<label  class='col-sm-3 col-form-label'>".FRAGE12."</label>
									<div class='col-sm-9'>
										" .$row['frage12']. "
									</div>
								</div>							
                            </div>
						</form>
						</div>							
					</div>
				</div>
			</div>
		</section>";
site_footer();
?>