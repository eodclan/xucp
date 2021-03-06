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
// * Prevent direct PHP call
// ************************************************************************************//
if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {        
	header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
	setCookie("PHPSESSID", "", 0x7fffffff,  "/");
  	session_destroy();
	die( header( 'location: /404.php' ) );
}
function site_footer() {
  echo "
        <!-- Page Footer-->
        <footer class='position-absolute bottom-0 bg-dash-dark-2 text-white text-center py-3 w-100 text-xs' id='footer'>
          <div class='container-fluid text-center'>
            <p class='mb-0 text-dash-gray'>&copy; ".$_SESSION['username']['site_settings_site_name'].". All rights reserved.</p>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src='/themes/".$_SESSION['username']['site_settings_themes']."/vendor/bootstrap/js/bootstrap.bundle.min.js'></script>
    <script src='/themes/".$_SESSION['username']['site_settings_themes']."/vendor/just-validate/js/just-validate.min.js'></script>
    <script src='/themes/".$_SESSION['username']['site_settings_themes']."/vendor/chart.js/Chart.min.js'></script>
    <script src='/themes/".$_SESSION['username']['site_settings_themes']."/vendor/choices.js/public/assets/scripts/choices.min.js'></script>
    <script src='/themes/".$_SESSION['username']['site_settings_themes']."/js/charts-home.js'></script>
    <script src='/themes/".$_SESSION['username']['site_settings_themes']."/js/components-notifications.js'></script>
    <script src='/themes/".$_SESSION['username']['site_settings_themes']."/js/components-preloader.js'></script>
    <!-- Main File-->
    <script src='/themes/".$_SESSION['username']['site_settings_themes']."/vendor/simple-datatables/simple-datatables.js'></script>
    <!-- Main File-->
    <script src='/themes/".$_SESSION['username']['site_settings_themes']."/js/front.js'></script>
    <!-- Main Default File-->
    <script src='/themes/".$_SESSION['username']['site_settings_themes']."/js/home-default.js'></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open('GET', path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement('div');
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('/themes/".$_SESSION['username']['site_settings_themes']."/vendor/icons/orion-svg-sprite.svg'); 
      
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.1/css/all.css' integrity='sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr' crossorigin='anonymous'>
  </body>
</html>";   
}

?>