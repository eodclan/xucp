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
define("SITESTAFF","Staff Tools");
define("DASHBOARD","Dashboard");
define("HOME_NOLOGGED","Home");
define("RULES","Rules");
define("USERPROFILE","User Profile");
define("USERACCOUNT","Account Tools");
define("USERPROFILECHANGE","User Profile Change");
define("USERSUPPORT","Support");
define("WELCOMETO","Welcome to");
define("STAFF_NEWSACP","News System");
define("STAFF_RULESACP","Rules System");
define("SITE_LOGOUT","Logout");
define("FAQ","FAQs");
define("NEWS","News: ");
define("SECURE_SYSTEM","Secure System");
define("MYCHARACTERS","My Character");
define("SITECONFIG_TEAMSPEAK","Teamspeak Adress");
define("FROM_WL","from");
define("GSERVER_INFO_HEAD","Client & Server");
define("GSERVER_INFO_01","Here in the list you can see all information about our game servers!");
define("GSERVER_INFO_02","For further questions please contact the support!");

// ************************************************************************************//
// * My Whitelist Status Language Section - Main 
// ************************************************************************************//
define("MYWHITELIST_STATUS","Your whitelist is approved for our server. We wish you a lot of fun with us!");
define("MYWHITELIST_STATUS_2","You have not yet created a whitelist or your whitelist may still be in progress! <a href='/usercp/whitelist/index.php?mywhitelist=addwl'><button class='btn btn-dark'>To the white list</button></a>");
define("MYWHITELIST_STATUS_3","Your whitelist questionnaire has been sent to our team. Please wait until you are invited to the Teamspeak interview.");
define("MYWHITELIST_STATUS_4","Unfortunately, your whitelist questionnaire could not be sent to our team. Please contact our support team.");
define("MYWHITELIST_STATUS_5","Welcome to the whitelist system, please take your time and answer the questions at your own discretion!");

// ************************************************************************************//
// * My Character Language Section - Main 
// ************************************************************************************//
define("MY_CHAR_IBAN","Iban");
define("MY_CHAR_PHONE_NUMBER","Phonenumber");
define("MY_CHAR_BDAY","Birthdate");
define("MY_CHAR_BIRTHPLACE","Birthplace");
define("MY_CHAR_PLATE","Plate");
define("MY_CHAR_FUEL","Fuel");
define("MY_CHAR_KM","Km");
define("MY_CHAR_VEHID","Id");
define("MY_CHAR_MAINACCOUNT","Main Account");
define("MY_CHAR_MONEY","Amount");
define("MY_CHAR_PINCODE","Pincode");
define("MY_CHAR_CLOSED","Closed");
define("MY_CHAR_JOB","Job");
define("MY_CHAR_ADRESS","Adress");
define("MY_CHAR_VEHLIST","Your Vehicles");
define("MY_CHAR_MONEYLIST","Your Bank Details");
define("MY_CHAR_NOCHAR","You don't have any characters yet.");
define("MY_CHAR_NOVEH","You don't have any vehicles yet.");

define("MY_CHAR_STATUS","The feature is currently being revised!");

// ************************************************************************************//
// * Whitelist Language Section - Main 
// ************************************************************************************//
define("FRAGE1","Question 1");
define("FRAGE2","Question 2");
define("FRAGE3","Question 3");
define("FRAGE4","Question 4");
define("FRAGE5","Question 5");
define("FRAGE6","Question 6");
define("FRAGE7","Question 7");
define("FRAGE8","Question 8");
define("FRAGE9","Question 9");
define("FRAGE10","Question 10");
define("FRAGE11","Question 11");
define("FRAGE12","Question 12");
define("FRAGEDONE","Your entries were successful!");
define("FRAGENOTE","All questions must be entered!");
define("KEYERROR","That was unsuccessful!");
define("FRAGEDONEBTN","Edit");
define("FRAGE_HEADER","Whitelist Questions");
define("FRAGE_HEADER_2","Whitelist Applications");
define("FRAGE_VIEW","View Application");
define("FRAGE_SEND","Submit application");

// ************************************************************************************//
// * Keyboard Section - Main 
// ************************************************************************************//
define("KEY1","Voice Range");
define("KEY2","LSPD Police Shield (anlegen)");
define("KEY3","LSPD Police Shield (ablegen)");
define("KEY4","Auto Farming");
define("KEY5","Dimension");
define("KEY6","Tablet");
define("KEY7","Staatliches Aktensystem");
define("KEY8","Animationen");
define("KEY9","Animation Stop");
define("KEY10","Kleidungsrad");
define("KEY11","Interagieren");
define("KEY12","Inventar");
define("KEY13","Zeigen");
define("KEY14","Funk");
define("KEY15","Türen");
define("KEY16","Sonstiges");
define("KEY17","Siren Stummschalten");
define("KEY18","Handy Hoch");
define("KEY19","Handy Runter");
define("KEYDONE","Your entries were successful!");
define("KEYNOTE","All questions must be entered!");
define("KEYDONEBTN","Edit");
define("KEY_HEADER","Keyboard Manager");
define("KEY_HEADER_2","Keyboard");

// ************************************************************************************//
// * English Language Section - Main Site Settings 
// ************************************************************************************//
define("SITECONFIG_HEADER","Site Settings");
define("SITECONFIG_HEADERNOTE","Please note that some settings have to be set with 0 or 1!");
define("SITECONFIG_ONLINE","Site Online Status");
define("SITECONFIG_ONLINENOTE","Our UCP is currently unavailable!");
define("SITECONFIG_NAME","Site Name");
define("SITECONFIG_DOWNLOAD_SECTION","Download Section");
define("SITECONFIG_RAGEMP","Rage.MP");
define("SITECONFIG_ALTV","AltV");
define("SITECONFIG_FIVEM","FiveM");
define("SITECONFIG_DONE","<strong>Success!</strong> The site settings have been saved successfully!");
define("SITECONFIG_ERROR","<strong>Error!</strong> The site settings were not saved successfully!");
define("SITECONFIG_REDM","RedM");
define("SITECONFIG_GSERVERNAME","Game Server Name");
define("SITECONFIG_GSERVERIP","Game Server IP");
define("SITECONFIG_GSERVERPORT","Game Server Port");
define("SITECONFIG_THEMES","Themes");
define("SITECONFIG_THEMES_INFO","Choose the theme you want to use.");
define("SITECONFIG_THEMES_BLACK","Black");
define("SITECONFIG_THEMES_BLUE","Blue");
define("SITECONFIG_THEMES_GREEN","Green");
define("SITECONFIG_THEMES_RED","Red");

// ************************************************************************************//
// * English Language Section - Message System 
// ************************************************************************************//
define("MSG_1","You should look first <a href='/login.php'>login</a>!");
define("MSG_2","You are not a supporter!");
define("MSG_3","<b>You have successfully edited the account!</b><br><br><a href='staff_userchanged.php'>go back</a>");
define("MSG_4","<b>Your ticket has been sent!</b>");
define("MSG_5","<b>Your tweet was sent successfully!</b><br><br><a href='dashboard.php'>Back to the dashboard</a>");
define("MSG_6","<b>Your like in the tweet was successfully set!</b><br><br><a href='dashboard.php'>Back to the dashboard</a>");
define("MSG_7","<b>Your changes could not be saved!</b>");
define("MSG_8","<b>You have successfully edited your account!</b>");
define("MSG_9","<b>Your registration is complete!</b>");
define("MSG_10","<b>Please fill in both the username and the password field!</b>");
define("MSG_11","<b>Wrong password!</b>");
define("MSG_12","<b>No user found!</b>");
define("MSG_13","<b>E-Mail is not valid!</b>");
define("MSG_14","<b>Username is not valid!</b>");
define("MSG_15","<b>Password must be between 5 and 20 characters long!</b>");
define("MSG_16","<b>Account already exists</b>");
define("MSG_17","<b>Your logout was successful!</b>");
define("MSG_18","<b>Your news entry was not successful!</b>");
define("MSG_19","<b>Please fill in both the German title and the English title!</b>");
define("MSG_20","<b>Please fill in both the German content and the English content!</b>");
define("MSG_21","<b>Your news entry was successful!</b>");
define("MSG_22","<b>Your rules entry was successful!</b>");
define("MSG_23","<b>Your rules entry was not successful!</b>");
define("MSG_24","<b>Your faq entry was successful!</b>");
define("MSG_25","<b>Your faq entry was not successful!</b>");
define("MSG_26","<b>Your rank is not unlocked for this page!</b>");

// ************************************************************************************//
// * English Language Section - My Profile Change
// ************************************************************************************//
define("WHITELIST","For the whitelist");
define("TWITTER","For the upcoming Twitter module");
define("RPSERVER","UCP as well as for the game server");
define("MYPROFILENOTE","You have to fill in all fields with every change!");
define("SIGNATUR","Signature");
define("SIGNOTE","Your signature for your profile view!");
define("AVATAR","Avatar url");
define("AVANOTE","Your avatar picture for your profile!");
define("MYPROFILESAVE","Save");
define("LANGUAGE","Website language");
define("LANGUAGENOTE","Here you have the option to change the language of the UCP.");
define("CHANGE_MYPROFILE_DASHNOTE","Please note");
define("CHANGE_MYPROFILE_PASSWORD","Change Password");
define("CHANGE_MYPROFILE_SIGNATUR","Change signature");
define("CHANGE_MYPROFILE_USERNAME","Change username");
define("CHANGE_MYPROFILE_EMAIL","Change E-Mail address");
define("CHANGE_MYPROFILE_AVATAR","Change avatar");
define("CHANGE_MYPROFILE_AVATARNOTE","Drop files here or click to upload.");
define("CHANGE_MYPROFILE_LANGUAGE","Change website language");
define("CHANGE_MYPROFILE_LANGUAGENOTE","Please select");
define("CHANGE_MYPROFILE_LANGUAGE_SELECT_EN","English");
define("CHANGE_MYPROFILE_LANGUAGE_SELECT_DE","German");

// ************************************************************************************//
// * English Language Section - My Profile
// ************************************************************************************//
define("PLAYERID","Player ID");
define("PLAYERSOCIALCLUB","Social Club");
define("PLAYEREMAIL","E-Mail");
define("PLAYERBANNED","Banned");
define("PLAYERADMIN","Admin Level");
define("PLAYERWHITELISTED","Whitelisted");
define("PLAYERFIRSTLOGIN","First Login");
define("PLAYERNOTE1","From our Project every whitelist is held in our Teamspeak server.");
define("PLAYERNOTE2","Our statement");
define("PLAYERSIGNATURE","Signature");
define("PLAYERABOUTME","ABOUT ME");
define("AVATAR_CHECK_BACK","Your avatar URL is not allowed!");
define("AVATAR_CHECK_OKAY","Your avatar URL has been allowed!");

// ************************************************************************************//
// * English Language Section - Dashboard
// ************************************************************************************//
define("DASHBOARDUSERS","Registered users");
define("DASHBOARDSUPPORT","Support Tickets");

// ************************************************************************************//
// * English Language Section - News System
// ************************************************************************************//
define("NEWS_HEADER","News System");
define("NEWS_INFO","You have to fill in all fields!");
define("NEWS_TITLE_EN","Title English");
define("NEWS_TITLE_EN_TEXT","The English Title");
define("NEWS_TITLE_DE","Title German");
define("NEWS_TITLE_DE_TEXT","The German Title");
define("NEWS_CONTENT_EN","Content Englisch");
define("NEWS_CONTENT_EN_TEXT","The English Content");
define("NEWS_CONTENT_DE","Content German");
define("NEWS_CONTENT_DE_TEXT","The German Content");
define("NEWS_SAVE","Save");

// ************************************************************************************//
// * English Language Section - Rules System
// ************************************************************************************//
define("RULES_INFO","You have to fill in all fields!");
define("RULES_TITLE_EN","Title English");
define("RULES_TITLE_EN_TEXT","The English Title");
define("RULES_TITLE_DE","Title German");
define("RULES_TITLE_DE_TEXT","The German Title");
define("RULES_CONTENT_EN","Content Englisch");
define("RULES_CONTENT_EN_TEXT","The English Content");
define("RULES_CONTENT_DE","Content German");
define("RULES_CONTENT_DE_TEXT","The German Content");
define("RULES_SAVE","Save");

// ************************************************************************************//
// * English Language Section - Support
// ************************************************************************************//
define("SUPPORTUSERID", "Player ID");
define("SUPPORTINFO", "Your support ticket should be described as precisely as possible.");
define("SUPPORTUSERINFO1", "Enter your username");
define("SUPPORTUSERINFO2", "What bug did you find?");
define("SUPPORTUSERINFO3", "Your description should be described as precisely as possible.");
define("SUPPORTUSERNAME", "Username");
define("SUPPORTEMAIL", "E-Mail");
define("SUPPORTSUBJECT", "Subject");
define("SUPPORTMSG", "Message");
define("SUPPORTDATE", "Date");
define("SUPPORTSAVE","Save");
define("SUPPORTDELETEINFO","You have deleted all support tickets");
define("SUPPORTDELETE1","Now go back to the <a href='support.php'>Support Tickets</a>!");
define("SUPPORTDELETE2","Delete tickets");
define("SUPPORTADDTICKET1", "Now create your ticket!");
define("SUPPORTADDTICKET2", "click me");
define("SUPPORTADDDONE", "Your support ticket has been sent!");

// ************************************************************************************//
// * English Language Section - No Logged & Logged Section
// ************************************************************************************//
define("REGISTER", "Register");
define("LOGIN", "Login");
define("SOCIALCLUBNAME", "Social Club Name");
define("USERNAME", "Username");
define("EMAIL", "Email");
define("PASSWORD", "Password");
define("SUBMIT", "Submit");
define("NOTE", "<b>Note:</b> Fields with <span class='pflichtfeld'>*</span> have to be filled out.");
define("NOTE2", "<b>Note:</b> The username and the social club name must be the same.");
define("INDEXTEXT", "We bring the roleplay to a new level, with our realistic handling, there are no limits!");

// ************************************************************************************//
// * English Language Section - Staff Member 
// ************************************************************************************//
define("STAFF_USERCAHNEGED","Player Changer");
define("STAFF_USERCONTROL","Playerlist");
define("STAFF_USERCONTROLUSERID","Player ID");
define("STAFF_USERCONTROLUSERNAME","Player Username");
define("STAFF_USERCONTROLSOCIALCLUB","Player Social Club");
define("STAFF_USERCONTROLEMAIL","Player E-Mail");
define("STAFF_USERCONTROLACCOUNTWHITELIST","Player Whitelisted");
define("STAFF_USERCONTROLOPTION","Settings");
define("STAFF_USERCONTROLSAVE","Save");
define("STAFF_USERCONTROLDELETE","Delete");
?>