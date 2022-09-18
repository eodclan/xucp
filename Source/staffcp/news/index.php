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

site_header("".NEWS_HEADER."");
site_navi_logged();
site_content_logged();

if(isset($_POST['news_sup'])){
    if(empty($_POST['title']) || empty($_POST['title_de']) || empty($_POST['content']) || empty($_POST['content_de'])){
			echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".NEWS_HEADER."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".MSG_18."
						</div>
					</div>
				</div>";		
    }
    else
    {
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
        $title_de 	= filter_input(INPUT_POST, 'title_de', FILTER_SANITIZE_STRING);
        $content 	= filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
        $content_de 	= filter_input(INPUT_POST, 'content_de', FILTER_SANITIZE_STRING);

		// The 2nd check to make sure that nothing bad can happen.		
        if (preg_match('/[A-Za-z0-9]+/', $_POST['title']) == 0) {
			echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".NEWS_HEADER."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".MSG_19."
						</div>
					</div>
				</div>";			
        }
        if (preg_match('/[A-Za-z0-9]+/', $_POST['title_de']) == 0) {
			echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".NEWS_HEADER."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".MSG_19."
						</div>
					</div>
				</div>";
        }
        if (preg_match('/[A-Za-z0-9]+/', $_POST['content']) == 0) {
			echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".NEWS_HEADER."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".MSG_20."
						</div>
					</div>
				</div>";			
        }
        if (preg_match('/[A-Za-z0-9]+/', $_POST['content_de']) == 0) {
			echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".NEWS_HEADER."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".MSG_20."
						</div>
					</div>
				</div>";
        }
        
        $sql = "UPDATE xucp_news SET title='".$title."', title_de='".$title_de."', content='".$content."', content_de='".$content_de."' WHERE id = '1'";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
			echo"
				<div class='position-fixed bottom-0 end-0 p-3' style='z-index: 11'>
					<div id='liveToast' class='toast hide' role='alert' aria-live='assertive' aria-atomic='true'>
						<div class='toast-header'>
							<strong class='me-auto'>".NEWS_HEADER."</strong>
							<button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
						</div>
						<div class='toast-body'>
							".MSG_21."
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
				<h2 class='h5 mb-0'>".WELCOMETO." ".NEWS_HEADER."!</h2>
			</div>
		</div>
		<!-- Breadcrumb-->
		<div class='container-fluid py-2'>
			<nav aria-label='breadcrumb'>
				<ol class='breadcrumb mb-0 py-3 px-0'>
					<li class='breadcrumb-item'><a href='/staffcp/news/index.php'>".$_SESSION['username']['site_settings_site_name']."</a></li>
					<li class='breadcrumb-item active' aria-current='page'>".NEWS_HEADER."</li>					
                </ol>
			</nav>
		</div>

	    <section class='pt-0'>
		<div class='container-fluid'>
            <div class='row gy-4'>
              <div class='col-lg-12'>
                <div class='card'>
                  <div class='card-body'>";
				$sql = "SELECT title, title_de, content, content_de FROM xucp_news WHERE id = 1";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($news = $result->fetch_assoc()) {
					echo"
					<form action='".$_SERVER['PHP_SELF']."' method='post' enctype='multipart/form-data'>
                      <tr>				  
                        <td>
							<h6>
								".NEWS_TITLE_EN."
								<small class='text-muted'>".NEWS_TITLE_EN_TEXT."</small>
							</h6>
							<div class='input-group'>
								<input type='text' name='title' size='50' maxlength='100' class='form-control' value='".$news["title"]."' required>
							</div>	
                        </td>
					  </tr>
                      <tr>				  
                        <td>
							<h6>
								".NEWS_TITLE_DE."
								<small class='text-muted'>".NEWS_TITLE_DE_TEXT."</small>
							</h6>
							<div class='input-group'>
								<input type='text' name='title_de' size='50' maxlength='100' class='form-control' value='".$news["title_de"]."' required>
							</div>	
                        </td>
					  </tr>
                      <tr>					  
                        <td>
							<h6>
								".NEWS_CONTENT_EN."
								<small class='text-muted'>".NEWS_CONTENT_EN_TEXT."</small>
							</h6>
							<div class='input-group'>					
								<textarea type='text' name='content' size='450' maxlength='1260' class='form-control' value='".$news["content"]."' required></textarea>
							</div>	
                        </td>						
                      </tr>
                      <tr>					  
                        <td>
							<h6>
								".NEWS_CONTENT_DE."
								<small class='text-muted'>".NEWS_CONTENT_DE_TEXT."</small>
							</h6>
							<div class='input-group'>					
								<textarea type='text' name='content_de' size='450' maxlength='1260' class='form-control' value='".$news["content_de"]."' required></textarea>
							</div>	
                        </td>						
                      </tr>                      					  
                      <tr>					  
						<td>
							".NEWS_INFO."
							<br>
							<button type='submit' name='news_sup' class='btn btn-primary btn-round' data-target='successLiveToast'>
								".NEWS_SAVE."
							</button>
							</submit>
                        </td>							
                      </tr>						
					</form>";

					}
					mysqli_close($conn);
				}
echo "	
				  </div>
				</div>					
              </div>
            </div>
          </div>
        </section>";
site_footer();
?>