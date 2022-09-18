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
site_secure_staff_check_rank();

site_header("".KEY_HEADER."");
site_navi_logged();
site_content_logged();

if(isset($_POST['add_key'])){
    if(empty($_POST['key1']) || empty($_POST['key2']) || empty($_POST['key3']) || empty($_POST['key4']) || empty($_POST['key5']) || empty($_POST['key6']) || empty($_POST['key7']) || empty($_POST['key8']) || empty($_POST['key9']) || empty($_POST['key10']) || empty($_POST['key11']) || empty($_POST['key12']) || empty($_POST['key13']) || empty($_POST['key14']) || empty($_POST['key15']) || empty($_POST['key16']) || empty($_POST['key17']) || empty($_POST['key18']) || empty($_POST['key19'])){
		echo"
			<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
				<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
					<div class='toast-header'>
						<strong class='me-auto'>".KEY_HEADER."</strong>
						<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
					</div>
					<div class='toast-body'>
						".KEYNOTE."
					</div>
				</div>
			</div>";
    }
    else
    {
        $key1 	= filter_input(INPUT_POST, 'key1', FILTER_SANITIZE_STRING);
        $key2 	= filter_input(INPUT_POST, 'key2', FILTER_SANITIZE_STRING);
        $key3 	= filter_input(INPUT_POST, 'key3', FILTER_SANITIZE_STRING);
        $key4 	= filter_input(INPUT_POST, 'key4', FILTER_SANITIZE_STRING);
        $key5 	= filter_input(INPUT_POST, 'key5', FILTER_SANITIZE_STRING);
        $key6 	= filter_input(INPUT_POST, 'key6', FILTER_SANITIZE_STRING);
        $key7 	= filter_input(INPUT_POST, 'key7', FILTER_SANITIZE_STRING);
        $key8 	= filter_input(INPUT_POST, 'key8', FILTER_SANITIZE_STRING);
        $key9 	= filter_input(INPUT_POST, 'key9', FILTER_SANITIZE_STRING);
        $key10 	= filter_input(INPUT_POST, 'key10', FILTER_SANITIZE_STRING);
        $key11 	= filter_input(INPUT_POST, 'key11', FILTER_SANITIZE_STRING);
        $key12 	= filter_input(INPUT_POST, 'key12', FILTER_SANITIZE_STRING);
        $key13 	= filter_input(INPUT_POST, 'key13', FILTER_SANITIZE_STRING);
        $key14 	= filter_input(INPUT_POST, 'key14', FILTER_SANITIZE_STRING);
        $key15 	= filter_input(INPUT_POST, 'key15', FILTER_SANITIZE_STRING);
        $key16 	= filter_input(INPUT_POST, 'key16', FILTER_SANITIZE_STRING);
        $key17 	= filter_input(INPUT_POST, 'key17', FILTER_SANITIZE_STRING);
        $key18 	= filter_input(INPUT_POST, 'key18', FILTER_SANITIZE_STRING);
        $key19 	= filter_input(INPUT_POST, 'key19', FILTER_SANITIZE_STRING);		
        
        $sql = "UPDATE xucp_keys SET key1='".$key1."', key2='".$key2."', key3='".$key3."', key4='".$key4."', key5='".$key5."', key6='".$key6."', key7='".$key7."', key8='".$key8."', key9='".$key9."', key10='".$key10."', key11='".$key11."', key12='".$key12."', key13='".$key13."', key14='".$key14."', key15='".$key15."', key16='".$key16."', key17='".$key17."', key18='".$key18."', key19='".$key19."' WHERE id = '1'";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
		echo"
			<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
				<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
					<div class='toast-header'>
						<strong class='me-auto'>".KEY_HEADER."</strong>
						<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
					</div>
					<div class='toast-body'>
						".KEYDONE."
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
				<h2 class='h5 mb-0'>".WELCOMETO." ".KEY_HEADER."!</h2>
			</div>
		</div>
		<!-- Breadcrumb-->
		<div class='container-fluid py-2'>
			<nav aria-label='breadcrumb'>
				<ol class='breadcrumb mb-0 py-3 px-0'>
					<li class='breadcrumb-item'><a href='/staffcp/keyboard/index.php'>".$_SESSION['username']['site_settings_site_name']."</a></li>
					<li class='breadcrumb-item active' aria-current='page'>".KEY_HEADER."</li>					
                </ol>
			</nav>
		</div>

	    <section class='pt-0'>
		<div class='container-fluid'>
            <div class='row gy-4'>
              <div class='col-lg-12'>
                <div class='card'>
                  <div class='card-header'>
                	<h4 class='mb-0'>".KEY_HEADER."</h4>
                  </div>
                  <div class='card-body'>";
				$sql = "SELECT key1, key2, key3, key4, key5, key6, key7, key8, key9, key10, key11, key12, key13, key14, key15, key16, key17, key18, key19 FROM xucp_keys WHERE id = 1";
				$resultx = $conn->query($sql);

				if ($resultx->num_rows > 0) {
					// output data of each row
					while($faq = $resultx->fetch_assoc()) {
					echo"
				<form action='".$_SERVER['PHP_SELF']."' method='post' enctype='multipart/form-data'>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".KEY1."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='key1' size='50' maxlength='256' class='form-control' value='".$faq["key1"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".KEY2."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='key2' size='50' maxlength='256' class='form-control' value='".$faq["key2"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".KEY3."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='key3' size='50' maxlength='256' class='form-control' value='".$faq["key3"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".KEY4."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='key4' size='50' maxlength='256' class='form-control' value='".$faq["key4"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".KEY5."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='key5' size='50' maxlength='256' class='form-control' value='".$faq["key5"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".KEY6."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='key6' size='50' maxlength='256' class='form-control' value='".$faq["key6"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".KEY7."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='key7' size='50' maxlength='256' class='form-control' value='".$faq["key7"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".KEY8."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='key8' size='50' maxlength='256' class='form-control' value='".$faq["key8"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".KEY9."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='key9' size='50' maxlength='256' class='form-control' value='".$faq["key9"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".KEY10."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='key10' size='50' maxlength='256' class='form-control' value='".$faq["key10"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".KEY11."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='key11' size='50' maxlength='256' class='form-control' value='".$faq["key11"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".KEY12."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='key12' size='50' maxlength='256' class='form-control' value='".$faq["key12"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".KEY13."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='key13' size='50' maxlength='256' class='form-control' value='".$faq["key13"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".KEY14."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='key14' size='50' maxlength='256' class='form-control' value='".$faq["key14"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".KEY15."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='key15' size='50' maxlength='256' class='form-control' value='".$faq["key15"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".KEY16."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='key16' size='50' maxlength='256' class='form-control' value='".$faq["key16"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".KEY17."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='key17' size='50' maxlength='256' class='form-control' value='".$faq["key17"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".KEY18."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='key18' size='50' maxlength='256' class='form-control' value='".$faq["key18"]."' required>
							</div>	
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-3 col-form-label'>
							".KEY19."
						</label>
						<div class='col-sm-12'>
							<div class='input-group'>
								<input type='text' name='key19' size='50' maxlength='256' class='form-control' value='".$faq["key19"]."' required>
							</div>	
						</div>
					</div>					  						
					<button type='submit' name='add_key' class='btn btn-primary btn-round' data-target='successLiveToast'>
						".KEYDONEBTN."
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
						".KEYNOTE."
					</div>
				  </div>							
				</div>
			  </div>
			</div>
		  </div>
		</section>";
site_footer();
?>