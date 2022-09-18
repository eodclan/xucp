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
// * Prevent direct PHP call
// ************************************************************************************//
if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {        
	header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
	setCookie("PHPSESSID", "", 0x7fffffff,  "/");
  	session_destroy();
	die( header( 'location: /404.php' ) );
}
function site_navi_logged() {
echo "
      <nav id='sidebar'>
        <!-- Sidebar Header-->
		<span class='text-uppercase text-gray-600 text-xs mx-3 px-2 heading mb-2'>".$_SESSION['username']['site_settings_site_name']."</span>
        <ul class='list-unstyled'>
              <li class='sidebar-item'><a class='sidebar-link' href='/dashboard.php'> 
                      <svg class='svg-icon svg-icon-sm svg-icon-heavy'>
                        <use xlink:href='#real-estate-1'> </use>
                      </svg><span>".DASHBOARD." </span></a></li>
              <li class='sidebar-item'><a class='sidebar-link' href='/usercp/rules/index.php'> 
                      <svg class='svg-icon svg-icon-sm svg-icon-heavy'>
                        <use xlink:href='#bookmark-1'> </use>
                      </svg><span>Regelwerk </span></a></li>
              <li class='sidebar-item'><a class='sidebar-link' href='ts3server://".$_SESSION['username']['site_settings_teamspeak']."'> 
                      <svg class='svg-icon svg-icon-sm svg-icon-heavy'>
                        <use xlink:href='#security-shield-1'> </use>
                      </svg><span>Teamspeak </span></a></li>
		</ul><span class='text-uppercase text-gray-600 text-xs mx-3 px-2 heading mb-2'>".USERACCOUNT."</span>					  
        <ul class='list-unstyled'>
              <li class='sidebar-item'><a class='sidebar-link' href='/usercp/profile/index.php?myprofile=dashboard'> 
                      <svg class='svg-icon svg-icon-sm svg-icon-heavy'>
                        <use xlink:href='#settings-1'> </use>
                      </svg><span>".USERPROFILECHANGE." </span></a></li>
              <li class='sidebar-item'><a class='sidebar-link' href='/usercp/chars/index.php'> 
                      <svg class='svg-icon svg-icon-sm svg-icon-heavy'>
                        <use xlink:href='#bookmark-1'> </use>
                      </svg><span>".MYCHARACTERS." </span></a></li>
              <li class='sidebar-item'><a class='sidebar-link' href='/usercp/support/index.php'> 
                      <svg class='svg-icon svg-icon-sm svg-icon-heavy'>
                        <use xlink:href='#helpline-24h-1'> </use>
                      </svg><span>".USERSUPPORT." </span></a></li>
              <li class='sidebar-item'><a class='sidebar-link' href='/usercp/client/index.php'> 
                      <svg class='svg-icon svg-icon-sm svg-icon-heavy'>
                        <use xlink:href='#multiple-windows-1'> </use>
                      </svg><span>".GSERVER_INFO_HEAD." </span></a></li>
              <li class='sidebar-item'><a class='sidebar-link' href='/usercp/keyboard/index.php'> 
                      <svg class='svg-icon svg-icon-sm svg-icon-heavy'>
                        <use xlink:href='#multiple-windows-1'> </use>
                      </svg><span>Tastaturbelegung </span></a></li>
        </ul>";
	if(intval($_SESSION['username']['secure_staff']) >= 5) {
	secure_url();
	echo "
	<span class='text-uppercase text-gray-600 text-xs mx-3 px-2 heading mb-2'>Bereich: Support</span>					  
        <ul class='list-unstyled'>
              <li class='sidebar-item'><a class='sidebar-link' href='/staffcp/users/index-change.php'> 
                      <svg class='svg-icon svg-icon-sm svg-icon-heavy'>
                        <use xlink:href='#imac-screen-1'> </use>
                      </svg><span>".STAFF_USERCAHNEGED." </span></a></li>
              <li class='sidebar-item'><a class='sidebar-link' href='/staffcp/users/index-control.php'> 
                      <svg class='svg-icon svg-icon-sm svg-icon-heavy'>
                        <use xlink:href='#chart-1'> </use>
                      </svg><span>".STAFF_USERCONTROL." </span></a></li>
              <li class='sidebar-item'><a class='sidebar-link' href='/staffcp/whitelist/index-wlquestion.php'> 
                      <svg class='svg-icon svg-icon-sm svg-icon-heavy'>
                        <use xlink:href='#checkmark-1'> </use>
                      </svg><span>Whitelist Fragen &Uuml;bersicht </span></a></li>
              <li class='sidebar-item'><a class='sidebar-link' href='/staffcp/whitelist/index-wllist.php'> 
                      <svg class='svg-icon svg-icon-sm svg-icon-heavy'>
                        <use xlink:href='#quality-1'> </use>
                      </svg><span>".FRAGE_HEADER_2." </span></a></li>

        </ul>";
	}

	if(intval($_SESSION['username']['secure_staff']) >= 100) {
	secure_url();
	echo "
	<span class='text-uppercase text-gray-600 text-xs mx-3 px-2 heading mb-2'>Bereich: Projektleitung</span>					  
        <ul class='list-unstyled'>
              <li class='sidebar-item'><a class='sidebar-link' href='/staffcp/siteconfig/index.php'> 
                      <svg class='svg-icon svg-icon-sm svg-icon-heavy'>
                        <use xlink:href='#configuration-1'> </use>
                      </svg><span>".SITECONFIG_HEADER." </span></a></li>
              <li class='sidebar-item'><a class='sidebar-link' href='/staffcp/whitelist/index-wlask.php'> 
                      <svg class='svg-icon svg-icon-sm svg-icon-heavy'>
                        <use xlink:href='#checkmark-1'> </use>
                      </svg><span>".FRAGE_HEADER." </span></a></li>
              <li class='sidebar-item'><a class='sidebar-link' href='/staffcp/news/index.php'> 
                      <svg class='svg-icon svg-icon-sm svg-icon-heavy'>
                        <use xlink:href='#news-1'> </use>
                      </svg><span>".NEWS_HEADER." </span></a></li>
              <li class='sidebar-item'><a class='sidebar-link' href='/staffcp/rules/index.php'> 
                      <svg class='svg-icon svg-icon-sm svg-icon-heavy'>
                        <use xlink:href='#news-1'> </use>
                      </svg><span>".STAFF_RULESACP." </span></a></li>					  
              <li class='sidebar-item'><a class='sidebar-link' href='/staffcp/keyboard/index.php'> 
                      <svg class='svg-icon svg-icon-sm svg-icon-heavy'>
                        <use xlink:href='#configuration-1'> </use>
                      </svg><span>".KEY_HEADER." </span></a></li>
        </ul>";
	}	echo "
      </nav>"; 
}

function site_navi_nologged() {
echo "
      <nav id='sidebar'>
        <!-- Sidebar Header-->
		<span class='text-uppercase text-gray-600 text-xs mx-3 px-2 heading mb-2'>".$_SESSION['username']['site_settings_site_name']."</span>
        <ul class='list-unstyled'>
              <li class='sidebar-item'><a class='sidebar-link' href='/login.php'> 
                      <svg class='svg-icon svg-icon-sm svg-icon-heavy'>
                        <use xlink:href='#disable-1'> </use>
                      </svg><span>".LOGIN." </span></a></li>
              <li class='sidebar-item'><a class='sidebar-link' href='/register.php?myregister=register'> 
                      <svg class='svg-icon svg-icon-sm svg-icon-heavy'>
                        <use xlink:href='#disable-2'> </use>
                      </svg><span>".REGISTER." </span></a></li>
        </ul>
      </nav>";   
}

?>