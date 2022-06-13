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

site_header("Mein Charakter");
site_navi_logged();
site_content_logged();

echo"
		<!-- Page Header-->
		<div class='bg-dash-dark-2 py-4'>
			<div class='container-fluid'>
				<h2 class='h5 mb-0'>".WELCOMETO." ".MYCHARACTERS."!</h2>
			</div>
		</div>
		<!-- Breadcrumb-->
		<div class='container-fluid py-2'>
			<nav aria-label='breadcrumb'>
				<ol class='breadcrumb mb-0 py-3 px-0'>
					<li class='breadcrumb-item'><a href='mycharacter.php'>".$_SESSION['username']['site_settings_site_name']."</a></li>
					<li class='breadcrumb-item active' aria-current='page'>".MYCHARACTERS."</li>					
                </ol>
			</nav>
		</div>
			
		<section class='pt-0'>
          <div class='container-fluid'>
            <div class='row gy-4'>
              <div class='col-lg-6'>
                    <!-- User block-->
                    <div class='card'>
                      <div class='card-body'>
                        <div class='text-center'>";

                $sql = "SELECT * FROM accounts WHERE id=".$_SESSION['username']['secure_first']."";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
                    $accountId = $row["id"];
                }
                $sql2 = "SELECT * FROM accounts_characters WHERE accountId='$accountId'";
                $result = mysqli_query($conn, $sql2);
                if (!isset($accountId)){
					echo "
					<span>".MY_CHAR_NOCHAR."</span>";
                }else {
                    while($account=$result->fetch_assoc()){
						echo "
                          <h3 class='h5 mb-0'>".htmlentities($account['charname'], ENT_QUOTES, 'UTF-8')."</h3>
                          <p class='text-sm fw-light'>".MY_CHAR_PHONE_NUMBER.": ".htmlentities($account['phonenumber'], ENT_QUOTES, 'UTF-8')."</p>
                          <div class='d-inline-block py-1 px-4 rounded-pill bg-dash-dark-3 fw-light text-sm mb-4'><i class='far fa-address-card'></i> ".MY_CHAR_ADRESS.": ".htmlentities($account['address'], ENT_QUOTES, 'UTF-8')."</div>
                          <ul class='list-inline text-center mb-0 d-flex justify-content-between text-sm mb-0'>                
                            <li class='list-inline-item'><i class='fab fa-blogger-b me-2'></i>".MY_CHAR_BDAY.": ".htmlentities($account['birthdate'], ENT_QUOTES, 'UTF-8')."</li>
                            <li class='list-inline-item'><i class='fas fa-code-branch me-2'></i>".MY_CHAR_BIRTHPLACE.": ".htmlentities($account['birthplace'], ENT_QUOTES, 'UTF-8')."</li>
                            <li class='list-inline-item'><i class='fab fa-gg me-2'></i>".MY_CHAR_JOB.": ".htmlentities($account['job'], ENT_QUOTES, 'UTF-8')."</li>
                          </ul>";						
					}
                }
				echo "
                        </div>
                      </div>
                    </div>
              </div>
              <div class='col-lg-6'>
                    <!-- User block-->
                    <div class='card'>
                      <div class='card-body'>
                        <div class='text-center'>
                          <h3 class='h5 mb-0'>".MY_CHAR_MONEYLIST."</h3>";

                $sql = "SELECT * FROM accounts WHERE id=".$_SESSION['username']['secure_first']."";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
                    $accountId = $row["id"];
                }
                $sql2 = "SELECT * FROM characters_bank WHERE charid='$accountId'";
                $result = mysqli_query($conn, $sql2);
                if (!isset($accountId)){
					echo "
					<span>".MY_CHAR_NOCHAR."</span>";
                }else {
                    while($account=$result->fetch_assoc()){
						echo "
                          <p class='text-sm fw-light'>".MY_CHAR_IBAN.": ".htmlentities($account['accountnumber'], ENT_QUOTES, 'UTF-8')."</p>
                          <div class='d-inline-block py-1 px-4 rounded-pill bg-dash-dark-3 fw-light text-sm mb-4'><i class='fas fa-money-check-alt'></i> ".MY_CHAR_MONEY.": ".htmlentities($account['money'], ENT_QUOTES, 'UTF-8')."$</div>
                          <ul class='list-inline text-center mb-0 d-flex justify-content-between text-sm mb-0'>                
                            <li class='list-inline-item'><i class='fas fa-shekel-sign me-2'></i>".MY_CHAR_PINCODE.": ".htmlentities($account['pin'], ENT_QUOTES, 'UTF-8')."</li>
                            <li class='list-inline-item'><i class='fas fa-file-invoice-dollar me-2'></i>".MY_CHAR_MAINACCOUNT.": ".htmlentities($account['mainaccount'], ENT_QUOTES, 'UTF-8')."</li>
                            <li class='list-inline-item'><i class='fas fa-money-check me-2'></i>".MY_CHAR_CLOSED.": ".htmlentities($account['closed'], ENT_QUOTES, 'UTF-8')."</li>
                          </ul>";						
					}
                }
				echo "
                        </div>
                      </div>
                    </div>
              </div>
            </div>
          </div>
        </section>			  
	    <section class='pt-0'>
		<div class='container-fluid'>
            <div class='row gy-4'>
              <div class='col-lg-12'>
                <div class='card'>
				  <div class='card-header'>".MY_CHAR_VEHLIST."
					<div class='card-body'>
						<div class='table-responsive'>
							<table class='table'>
								<thead class=' text-primary'>
									<th>
										".MY_CHAR_VEHID."
									</th>
									<th>
										".MY_CHAR_PLATE."
									</th>					  
									<th>
										".MY_CHAR_FUEL."
									</th>				  
									<th>
										".MY_CHAR_KM."
									</th>
								</thead>
								<tbody>";

                $sql = "SELECT * FROM accounts WHERE id=".$_SESSION['username']['secure_first']."";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
                    $accountId = $row["id"];
                }
                $sql2 = "SELECT * FROM server_vehicles WHERE charid='$accountId'";
                $result = mysqli_query($conn, $sql2);
                if (!isset($accountId)){
					echo "
					<span>".MY_CHAR_NOVEH."</span>";
                }else {
                    while($account=$result->fetch_assoc()){
						echo "
									<tr>
										<td>
											".htmlentities($account['id'], ENT_QUOTES, 'UTF-8')."
										</td>
										<td>
											".htmlentities($account['plate'], ENT_QUOTES, 'UTF-8')."
										</td>						
										<td>
											".htmlentities($account['fuel'], ENT_QUOTES, 'UTF-8')."
										</td>
										<td>
											".htmlentities($account['km'], ENT_QUOTES, 'UTF-8')."
										</td>
									</tr>";						
					}
                }
				echo "
								</tbody>
							</table>
						</div>
					</div>
				</div>
            </div>
          </div>
        </section>";
site_footer();	
?>