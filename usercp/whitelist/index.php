<?php 
// ************************************************************************************//
// * xUCP
// ************************************************************************************//
// * Author: DerStr1k3r
// ************************************************************************************//
// * Version: 1.2
// * 
// * Copyright (c) 2022 DerStr1k3r. All rights reserved.
// ************************************************************************************//
// * License Typ: GNU GPLv3
// ************************************************************************************//
include(dirname(__FILE__) . "/../../include/features.php");

site_secure();
secure_url();

// error_reporting(E_ALL);
if (isset($_GET["mywhitelist"])) $mywhitelist = trim(htmlentities($_GET["mywhitelist"]));
elseif (isset($_POST["mywhitelist"])) $mywhitelist = trim(htmlentities($_POST["mywhitelist"]));
else $mywhitelist = "view";

if ($mywhitelist == "addwl") {
	if(isset($_POST['myaddwl'])){
		$ucpname    =$_POST['ucpname'];
		$charname     =$_POST['charname'];
		$charstory     =$_POST['charstory'];
		$frage1     =$_POST['frage1'];
		$frage2     =$_POST['frage2'];
		$frage3     =$_POST['frage3'];
		$frage4     =$_POST['frage4'];
		$frage5     =$_POST['frage5'];
		$frage6     =$_POST['frage6'];
		$frage7     =$_POST['frage7'];
		$frage8     =$_POST['frage8'];
		$frage9     =$_POST['frage9'];
		$frage10    =$_POST['frage10'];
		$frage11    =$_POST['frage11'];
		$frage12    =$_POST['frage12'];

		$sql = "INSERT INTO whitelist SET ucpname='".$ucpname."', charname='".$charname."', charstory='".$charstory."', frage1='".$frage1."', frage2='".$frage2."', frage3='".$frage3."', frage4='".$frage4."', frage5='".$frage5."', frage6='".$frage6."', frage7='".$frage7."', frage8='".$frage8."', frage9='".$frage9."', frage10='".$frage10."', frage11='".$frage11."', frage12='".$frage12."'";
   
		if (mysqli_query($conn, $sql)) {
			header('location: index-done.php');
		} else {
			header('location: index-error.php');
		}
	}		
}

site_header("Whitelist System");
site_navi_logged();
site_content_logged();

if ($mywhitelist == "addwl") {
	$resultwlusers = $conn->query("SELECT * FROM config WHERE id=1");

	if ($resultwlusers->num_rows > 0) {
		// output data of each row
		while($dashboard = $resultwlusers->fetch_assoc()) {

echo "
		<!-- Page Header-->
		<div class='bg-dash-dark-2 py-4'>
			<div class='container-fluid'>
				<h2 class='h5 mb-0'>".WELCOMETO." Whitelist System!</h2>
			</div>
		</div>
		<!-- Breadcrumb-->
		<div class='container-fluid py-2'>
			<nav aria-label='breadcrumb'>
				<ol class='breadcrumb mb-0 py-3 px-0'>
					<li class='breadcrumb-item'><a href='/usercp/whitelist/index.php?mywhitelist=addwl'>".$_SESSION['username']['site_settings_site_name']."</a></li>
					<li class='breadcrumb-item active' aria-current='page'>Whitelist System</li>					
                </ol>
			</nav>
		</div>
	    <section class='pt-0'>
		<div class='container-fluid'>
            <div class='row gy-4'>
              <div class='col-lg-12'>
                <div class='card'>
                  <div class='card-body'>
					".MYWHITELIST_STATUS_5."
				  </div>
                  <div class='card-body'>				  
				<form class='forms-sample' name='form' method='post' action='".$_SERVER['PHP_SELF']."?mywhitelist=addwl'>
				<input type='hidden' name='new' value='1' />
				<div class='form-group'>
					<label class='col-sm-12 col-form-label'>Dein Benutzername</label>
					<div class='col-sm-12'>";
						$sqlx = "SELECT username FROM accounts WHERE id = ".$_SESSION['username']['secure_first']."";
						$resultx = $conn->query($sqlx);
						if ($resultx->num_rows > 0) {
							// output data of each row
							while($dash = $resultx->fetch_assoc()) {
						echo "	
						<input type='text' class='form-control' name='ucpname' value='".htmlentities($dash['username'], ENT_QUOTES, 'UTF-8')."'>";
							}
						}
						echo "
					</div>
				</div>	
				<div class='form-group'>
					<label class='col-sm-12 col-form-label'>Dein Charaktername</label>
					<div class='col-sm-12'>
						<input type='text' class='form-control' name='charname'>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-sm-12 col-form-label'>Deine Charakter Story</label>
					<div class='col-sm-12'>
						<input type='text' class='form-control' name='charstory'>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-sm-12 col-form-label'>".htmlentities($dashboard['frage1'], ENT_QUOTES, 'UTF-8')."</label>
					<div class='col-sm-12'>
						<textarea id='frage1' name='frage1' class='form-control' rows='3' cols='100'></textarea>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-sm-12 col-form-label'>".htmlentities($dashboard['frage2'], ENT_QUOTES, 'UTF-8')."</label>
					<div class='col-sm-12'>
						<textarea id='frage2' name='frage2' class='form-control' rows='3' cols='100'></textarea>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-sm-12 col-form-label'>".htmlentities($dashboard['frage3'], ENT_QUOTES, 'UTF-8')."</label>
					<div class='col-sm-12'>
						<textarea id='frage3' name='frage3' class='form-control' rows='3' cols='100'></textarea>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-sm-12 col-form-label'>".htmlentities($dashboard['frage4'], ENT_QUOTES, 'UTF-8')."</label>
					<div class='col-sm-12'>
						<textarea id='frage4' name='frage4' class='form-control' rows='3' cols='100'></textarea>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-sm-12 col-form-label'>".htmlentities($dashboard['frage5'], ENT_QUOTES, 'UTF-8')."</label>
					<div class='col-sm-12'>
						<textarea id='frage5' name='frage5' class='form-control' rows='3' cols='100'></textarea>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-sm-12 col-form-label'>".htmlentities($dashboard['frage6'], ENT_QUOTES, 'UTF-8')."</label>
					<div class='col-sm-12'>
						<textarea id='frage6' name='frage6' class='form-control' rows='3' cols='100'></textarea>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-sm-12 col-form-label'>".htmlentities($dashboard['frage7'], ENT_QUOTES, 'UTF-8')."</label>
					<div class='col-sm-12'>
						<textarea id='frage7' name='frage7' class='form-control' rows='3' cols='100'></textarea>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-sm-12 col-form-label'>".htmlentities($dashboard['frage8'], ENT_QUOTES, 'UTF-8')."</label>
					<div class='col-sm-12'>
						<textarea id='frage8' name='frage8' class='form-control' rows='3' cols='100'></textarea>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-sm-12 col-form-label'>".htmlentities($dashboard['frage9'], ENT_QUOTES, 'UTF-8')."</label>
					<div class='col-sm-12'>
						<textarea id='frage9' name='frage9' class='form-control' rows='3' cols='100'></textarea>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-sm-12 col-form-label'>".htmlentities($dashboard['frage10'], ENT_QUOTES, 'UTF-8')."</label>
					<div class='col-sm-12'>
						<textarea id='frage10' name='frage10' class='form-control' rows='3' cols='100'></textarea>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-sm-12 col-form-label'>".htmlentities($dashboard['frage11'], ENT_QUOTES, 'UTF-8')."</label>
					<div class='col-sm-12'>
						<textarea id='frage11' name='frage11' class='form-control'rows='3' cols='100'></textarea>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-sm-12 col-form-label'>".htmlentities($dashboard['frage12'], ENT_QUOTES, 'UTF-8')."</label>
					<div class='col-sm-12'>
						<textarea id='frage12' name='frage12' class='form-control' rows='3' cols='100'></textarea>
					</div>
				</div>			
				<center>
					<input name='myaddwl' type='submit' value='".FRAGE_SEND."' class='btn btn-dark mr-2' />
				</center>
			</form>";
		}
	}		
echo "
				  </div>							
				</div>
			  </div>
			</div>
		  </div>
		</section>";	  
}	
site_footer();	
?>