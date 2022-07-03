<?php 
// ************************************************************************************//
// * xUCP
// ************************************************************************************//
// * Author: DerStr1k3r
// ************************************************************************************//
// * Version: 1.1
// * 
// * Copyright (c) 2022 DerStr1k3r. All rights reserved.
// ************************************************************************************//
// * License Typ: GNU GPLv3
// ************************************************************************************//
include(dirname(__FILE__) . "/../../include/features.php");

site_secure();
secure_url();
site_secure_staff_check();

site_header("".FRAGE_HEADER."");
site_navi_logged();
site_content_logged();

if(isset($_POST['wlask_sup'])){
    if(empty($_POST['frage1']) || empty($_POST['frage2']) || empty($_POST['frage3']) || empty($_POST['frage4']) || empty($_POST['frage5']) || empty($_POST['frage6']) || empty($_POST['frage7']) || empty($_POST['frage8']) || empty($_POST['frage9']) || empty($_POST['frage10']) || empty($_POST['frage11']) || empty($_POST['frage12'])){
		echo"
			<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
				<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
					<div class='toast-header'>
						<strong class='me-auto'>".FRAGE_HEADER."</strong>
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
        $frage1 	= filter_input(INPUT_POST, 'frage1', FILTER_SANITIZE_STRING);
        $frage2 	= filter_input(INPUT_POST, 'frage2', FILTER_SANITIZE_STRING);
        $frage3 	= filter_input(INPUT_POST, 'frage3', FILTER_SANITIZE_STRING);
        $frage4 	= filter_input(INPUT_POST, 'frage4', FILTER_SANITIZE_STRING);
        $frage5 	= filter_input(INPUT_POST, 'frage5', FILTER_SANITIZE_STRING);
        $frage6 	= filter_input(INPUT_POST, 'frage6', FILTER_SANITIZE_STRING);
        $frage7 	= filter_input(INPUT_POST, 'frage7', FILTER_SANITIZE_STRING);
        $frage8 	= filter_input(INPUT_POST, 'frage8', FILTER_SANITIZE_STRING);
        $frage9 	= filter_input(INPUT_POST, 'frage9', FILTER_SANITIZE_STRING);
        $frage10 	= filter_input(INPUT_POST, 'frage10', FILTER_SANITIZE_STRING);
        $frage11 	= filter_input(INPUT_POST, 'frage11', FILTER_SANITIZE_STRING);
        $frage12 	= filter_input(INPUT_POST, 'frage12', FILTER_SANITIZE_STRING);
		
		// The 2nd check to make sure that nothing bad can happen.
        if (preg_match('/[A-Za-z0-9]+/', $_POST['frage1']) == 0) {
		echo"
			<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
				<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
					<div class='toast-header'>
						<strong class='me-auto'>".FRAGE_HEADER."</strong>
						<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
					</div>
					<div class='toast-body'>
						".MSG_19."
					</div>
				</div>
			</div>";

        }
        if (preg_match('/[A-Za-z0-9]+/', $_POST['frage2']) == 0) {
		echo"
			<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
				<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
					<div class='toast-header'>
						<strong class='me-auto'>".FRAGE_HEADER."</strong>
						<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
					</div>
					<div class='toast-body'>
						".MSG_19."
					</div>
				</div>
			</div>";

        }
        if (preg_match('/[A-Za-z0-9]+/', $_POST['frage3']) == 0) {
		echo"
			<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
				<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
					<div class='toast-header'>
						<strong class='me-auto'>".FRAGE_HEADER."</strong>
						<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
					</div>
					<div class='toast-body'>
						".MSG_19."
					</div>
				</div>
			</div>";

        }
        if (preg_match('/[A-Za-z0-9]+/', $_POST['frage4']) == 0) {
		echo"
			<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
				<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
					<div class='toast-header'>
						<strong class='me-auto'>".FRAGE_HEADER."</strong>
						<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
					</div>
					<div class='toast-body'>
						".MSG_19."
					</div>
				</div>
			</div>";

        }
        if (preg_match('/[A-Za-z0-9]+/', $_POST['frage5']) == 0) {
		echo"
			<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
				<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
					<div class='toast-header'>
						<strong class='me-auto'>".FRAGE_HEADER."</strong>
						<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
					</div>
					<div class='toast-body'>
						".MSG_19."
					</div>
				</div>
			</div>";

        }
        if (preg_match('/[A-Za-z0-9]+/', $_POST['frage6']) == 0) {
		echo"
			<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
				<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
					<div class='toast-header'>
						<strong class='me-auto'>".FRAGE_HEADER."</strong>
						<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
					</div>
					<div class='toast-body'>
						".MSG_19."
					</div>
				</div>
			</div>";

        }
        if (preg_match('/[A-Za-z0-9]+/', $_POST['frage7']) == 0) {
		echo"
			<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
				<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
					<div class='toast-header'>
						<strong class='me-auto'>".FRAGE_HEADER."</strong>
						<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
					</div>
					<div class='toast-body'>
						".MSG_19."
					</div>
				</div>
			</div>";

        }
        if (preg_match('/[A-Za-z0-9]+/', $_POST['frage8']) == 0) {
		echo"
			<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
				<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
					<div class='toast-header'>
						<strong class='me-auto'>".FRAGE_HEADER."</strong>
						<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
					</div>
					<div class='toast-body'>
						".MSG_19."
					</div>
				</div>
			</div>";

        }
        if (preg_match('/[A-Za-z0-9]+/', $_POST['frage9']) == 0) {
		echo"
			<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
				<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
					<div class='toast-header'>
						<strong class='me-auto'>".FRAGE_HEADER."</strong>
						<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
					</div>
					<div class='toast-body'>
						".MSG_19."
					</div>
				</div>
			</div>";

        }
        if (preg_match('/[A-Za-z0-9]+/', $_POST['frage10']) == 0) {
		echo"
			<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
				<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
					<div class='toast-header'>
						<strong class='me-auto'>".FRAGE_HEADER."</strong>
						<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
					</div>
					<div class='toast-body'>
						".MSG_19."
					</div>
				</div>
			</div>";

        }
        if (preg_match('/[A-Za-z0-9]+/', $_POST['frage11']) == 0) {
		echo"
			<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
				<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
					<div class='toast-header'>
						<strong class='me-auto'>".FRAGE_HEADER."</strong>
						<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
					</div>
					<div class='toast-body'>
						".MSG_19."
					</div>
				</div>
			</div>";

        }
        if (preg_match('/[A-Za-z0-9]+/', $_POST['frage12']) == 0) {
		echo"
			<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
				<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
					<div class='toast-header'>
						<strong class='me-auto'>".FRAGE_HEADER."</strong>
						<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
					</div>
					<div class='toast-body'>
						".MSG_19."
					</div>
				</div>
			</div>";

        }		
        
        $sql = "UPDATE config SET frage1='".$frage1."', frage2='".$frage2."', frage3='".$frage3."', frage4='".$frage4."', frage5='".$frage5."', frage6='".$frage6."', frage7='".$frage7."', frage8='".$frage8."', frage9='".$frage9."', frage10='".$frage10."', frage11='".$frage11."', frage12='".$frage12."' WHERE id = '1'";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
		echo"
			<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
				<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
					<div class='toast-header'>
						<strong class='me-auto'>".FRAGE_HEADER."</strong>
						<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
					</div>
					<div class='toast-body'>
						".FRAGEDONE."
					</div>
				</div>
			</div>";

        }
    }
}
echo "
		<!-- Page Header-->
		<div class='bg-dash-dark-2 py-4'>
			<div class='container-fluid'>
				<h2 class='h5 mb-0'>".WELCOMETO." ".FRAGE_HEADER."!</h2>
			</div>
		</div>
		<!-- Breadcrumb-->
		<div class='container-fluid py-2'>
			<nav aria-label='breadcrumb'>
				<ol class='breadcrumb mb-0 py-3 px-0'>
					<li class='breadcrumb-item'><a href='/staffcp/whitelist/index-wlask.php'>".$_SESSION['username']['site_settings_site_name']."</a></li>
					<li class='breadcrumb-item active' aria-current='page'>".FRAGE_HEADER."</li>					
                </ol>
			</nav>
		</div>

	    <section class='pt-0'>
		<div class='container-fluid'>
            <div class='row gy-4'>
              <div class='col-lg-12'>
                <div class='card'>
                  <div class='card-body'>";
				$sql = "SELECT frage1, frage2, frage3, frage4, frage5, frage6, frage7, frage8, frage9, frage10, frage11, frage12 FROM config WHERE id = 1";
				$resultx = $conn->query($sql);

				if ($resultx->num_rows > 0) {
					// output data of each row
					while($faq = $resultx->fetch_assoc()) {
					echo"
				<form action='".$_SERVER['PHP_SELF']."' method='post' enctype='multipart/form-data'>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".FRAGE1."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='frage1' size='50' maxlength='256' class='form-control' value='".$faq["frage1"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".FRAGE2."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='frage2' size='50' maxlength='256' class='form-control' value='".$faq["frage2"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".FRAGE3."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='frage3' size='50' maxlength='256' class='form-control' value='".$faq["frage3"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".FRAGE4."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='frage4' size='50' maxlength='256' class='form-control' value='".$faq["frage4"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".FRAGE5."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='frage5' size='50' maxlength='256' class='form-control' value='".$faq["frage5"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".FRAGE6."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='frage6' size='50' maxlength='256' class='form-control' value='".$faq["frage6"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".FRAGE7."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='frage7' size='50' maxlength='256' class='form-control' value='".$faq["frage7"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".FRAGE8."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='frage8' size='50' maxlength='256' class='form-control' value='".$faq["frage8"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".FRAGE9."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='frage9' size='50' maxlength='256' class='form-control' value='".$faq["frage9"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".FRAGE10."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='frage10' size='50' maxlength='256' class='form-control' value='".$faq["frage10"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".FRAGE11."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='frage11' size='50' maxlength='256' class='form-control' value='".$faq["frage11"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".FRAGE12."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='frage12' size='50' maxlength='256' class='form-control' value='".$faq["frage12"]."' required>
							</div>	
						</div>
					</div>					  						
					<button type='submit' name='wlask_sup' class='btn btn-primary btn-round' data-target='successLiveToast'>
						".FRAGEDONEBTN."
					</button>
					</submit>						
				</form>";

				}
				mysqli_close($conn);
			}
echo "
				<br>
					<div class='form-group'>
						<div class='form-line'></div>
						<br>
						".FRAGENOTE."
					</div>		
				  </div>							
				</div>
			  </div>
			</div>
		  </div>
		</section>";
site_footer();
?>