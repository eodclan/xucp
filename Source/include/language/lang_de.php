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
define("HOME_NOLOGGED","Startseite");
define("USERPROFILE","User Profil");
define("USERACCOUNT","Account Tools");
define("USERPROFILECHANGE","User Profil bearbeiten");
define("USERSUPPORT","Support");
define("WELCOMETO","Willkommen bei");
define("STAFF_NEWSACP","News System");
define("STAFF_RULESACP","Regelwerk System");
define("SITE_LOGOUT","Abmelden");
define("FAQ","FAQs");
define("NEWS","Neuigkeiten: ");
define("SECURE_SYSTEM","Secure System");
define("MYCHARACTERS","Mein Charakter");
define("FROM_WL","von");
define("GSERVER_INFO_HEAD","Client & Server");
define("GSERVER_INFO_01","Hier in der Auflistung siehst du alle Informationen zu unseren Game Server!");
define("GSERVER_INFO_02","F&uuml;r weitere Fragen wende dich bitte an den Support!");

// ************************************************************************************//
// * My Whitelist Status Language Section - Main 
// ************************************************************************************//
define("MYWHITELIST_STATUS","Deine Whitelist ist f&uuml;r unseren Server freigegeben. Wir w&uuml;nschen dir Viel Spa&szlig; bei uns!");
define("MYWHITELIST_STATUS_2","Du hast noch keine Whitelist gestellt bzw. deine Whitelist ist vielleicht noch in Bearbeitung! <a href='/usercp/whitelist/index.php?mywhitelist=addwl'><button class='btn btn-dark'>Zur Whitelist</button></a>");
define("MYWHITELIST_STATUS_3","Dein Whitelist Fragebogen wurde an unser Team gesendet. Bitte warte nun ab bis du zum Teamspeak Gespr&auml;ch eingeladen wirst.");
define("MYWHITELIST_STATUS_4","Dein Whitelist Fragebogen konnte leider nicht an unser Team gesendet werden. Wende dich Bitte an unser Support Team.");
define("MYWHITELIST_STATUS_5","Herzlich Willkommen im Whitelist System, Nimm dir bitte ausreichend Zeit und beantworte die Fragen nach deinen eigenen Ermessen!");

// ************************************************************************************//
// * My Character Language Section - Main 
// ************************************************************************************//
define("MY_CHAR_IBAN","Iban");
define("MY_CHAR_PHONE_NUMBER","Telefonnr.");
define("MY_CHAR_BDAY","Geburtstag");
define("MY_CHAR_BIRTHPLACE","Geburtsort");
define("MY_CHAR_PLATE","Kennzeichen");
define("MY_CHAR_FUEL","Tank");
define("MY_CHAR_KM","Km");
define("MY_CHAR_VEHID","Id");
define("MY_CHAR_MAINACCOUNT","Hauptkonto");
define("MY_CHAR_MONEY","Betrag");
define("MY_CHAR_PINCODE","Pincode");
define("MY_CHAR_CLOSED","Gesperrt");
define("MY_CHAR_JOB","Job");
define("MY_CHAR_ADRESS","Wohnort");
define("MY_CHAR_VEHLIST","Deine Fahrzeuge");
define("MY_CHAR_MONEYLIST","Deine Bank Daten");
define("MY_CHAR_NOCHAR","Du hast noch keine Charaktere.");
define("MY_CHAR_NOVEH","Du hast noch keine Fahrzeuge.");

define("MY_CHAR_STATUS","Das Feature wird momentan &uuml;berarbeitet!");

// ************************************************************************************//
// * Whitelist Language Section - Main 
// ************************************************************************************//
define("FRAGE1","Frage 1");
define("FRAGE2","Frage 2");
define("FRAGE3","Frage 3");
define("FRAGE4","Frage 4");
define("FRAGE5","Frage 5");
define("FRAGE6","Frage 6");
define("FRAGE7","Frage 7");
define("FRAGE8","Frage 8");
define("FRAGE9","Frage 9");
define("FRAGE10","Frage 10");
define("FRAGE11","Frage 11");
define("FRAGE12","Frage 12");
define("FRAGEDONE","Deine Eintr&auml;ge waren erfolgreich!");
define("FRAGENOTE","Es m&uuml;ssen alle Fragen eingetragen werden!");
define("FRAGEDONEBTN","Bearbeiten");
define("FRAGE_HEADER","Whitelist Fragen");
define("FRAGE_HEADER_2","Whitelist Bewerbungen");
define("FRAGE_VIEW","Bewerbung anschauen");
define("FRAGE_SEND","Bewerbung abschicken");

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
define("KEY15","T&uuml;ren");
define("KEY16","Sonstiges");
define("KEY17","Siren Stummschalten");
define("KEY18","Handy Hoch");
define("KEY19","Handy Runter");
define("KEYDONE","Deine Eintr&auml;ge waren erfolgreich!");
define("KEYNOTE","Es m&uuml;ssen alle Keys eingetragen werden!");
define("KEYERROR","Das war nicht erfolgreich!");
define("KEYDONEBTN","Bearbeiten");
define("KEY_HEADER","Tastaturbelegung Manager");
define("KEY_HEADER_2","Tastaturbelegung");


// ************************************************************************************//
// * English Language Section - Main Site Settings 
// ************************************************************************************//
define("SITECONFIG_HEADER","Seiteneinstellungen");
define("SITECONFIG_HEADERNOTE","Bitte beachten Sie, dass einige Einstellungen mit 0 oder 1 eingestellt werden müssen!");
define("SITECONFIG_ONLINE","Site Online Status");
define("SITECONFIG_ONLINENOTE","Unser UCP ist momentan nicht erreichbar!");
define("SITECONFIG_NAME","Site Name");
define("SITECONFIG_DOWNLOAD_SECTION","Download Section");
define("SITECONFIG_RAGEMP","Rage.MP");
define("SITECONFIG_ALTV","AltV");
define("SITECONFIG_FIVEM","FiveM");
define("SITECONFIG_DONE","<strong>Erfolgreich!</strong> Die Seiteneinstellungen wurden erfolgreich gespeichert!");
define("SITECONFIG_ERROR","<strong>Error!</strong> Die Seiteneinstellungen wurden nicht erfolgreich gespeichert!");
define("SITECONFIG_TEAMSPEAK","Teamspeak Adresse");
define("SITECONFIG_REDM","RedM");
define("SITECONFIG_GSERVERNAME","Game Server Name");
define("SITECONFIG_GSERVERIP","Game Server IP");
define("SITECONFIG_GSERVERPORT","Game Server Port");
define("SITECONFIG_THEMES","Design");
define("SITECONFIG_THEMES_INFO","W&auml;hlen Sie das Design, das Sie verwenden m&ouml;chten.");
define("SITECONFIG_THEMES_BLACK","Schwarz");
define("SITECONFIG_THEMES_BLUE","Blau");
define("SITECONFIG_THEMES_GREEN","Gr&uuml;n");
define("SITECONFIG_THEMES_RED","Rot");

// ************************************************************************************//
// * German Language Section - Message System 
// ************************************************************************************//
define("MSG_1","Sie sollten sich zuerst <a href='/login.php'>einloggen</a>!");
define("MSG_2","Du bist kein Supporter!");
define("MSG_3","<b>Du hast den Account erfolgreich bearbeitet!</b>");
define("MSG_4","<b>Dein Ticket wurde gesendet!</b><br><br><a href='support.php'>Zurück</a>");
define("MSG_5","<b>Dein Tweet wurde erfolgreich gesendet!</b><br><br><a href='dashboard.php'>Zur&uuml;ck zum Dashboard</a>");
define("MSG_6","<b>Dein Like in den Tweet wurde erfolgreich gesetzt!</b><br><br><a href='dashboard.php'>Zur&uuml;ck zum Dashboard</a>");
define("MSG_7","<b>Deine Änderungen konnten nicht gespeichert werden!</b>");
define("MSG_8","<b>Du hast dein Account erfolgreich bearbeitet!</b>");
define("MSG_9","<b>Deine Registrierung ist abgeschlossen!</b>");
define("MSG_10","<b>Bitte f&uuml;llen Sie sowohl den Benutzernamen als auch das Passwortfeld aus!</b>");
define("MSG_11","<b>Falsches Passwort!</b>");
define("MSG_12","<b>Kein Benutzer gefunden!</b>");
define("MSG_13","<b>Die E-Mail ist keine g&uuml;ltige!</b>");
define("MSG_14","<b>Username nicht g&uuml;ltig</b>");
define("MSG_15","<b>Das Passwort muss zwischen 5 und 20 Zeichen lang sein!</b>");
define("MSG_16","<b>Account schon vorhanden</b>");
define("MSG_17","<b>Dein Logout war erfolgreich!</b>");
define("MSG_18","<b>Dein News Eintrag war nicht erfolgreich!</b>");
define("MSG_19","<b>Bitte geben Sie sowohl den deutschen als auch den englischen Titel ein!</b>");
define("MSG_20","<b>Bitte f&uuml;llen Sie sowohl den deutschen als auch den englischen Kontent aus!</b>");
define("MSG_21","<b>Dein News Eintrag war erfolgreich!</b>");
define("MSG_22","<b>Dein Regelwerk Eintrag war erfolgreich!</b>");
define("MSG_23","<b>Dein Regelwerk Eintrag war nicht erfolgreich!</b>");
define("MSG_24","<b>Dein FAQ Eintrag war erfolgreich!</b>");
define("MSG_25","<b>Dein FAQ Eintrag war nicht erfolgreich!</b>");
define("MSG_26","<b>Dein Rang ist f&uuml;r diese Seite nicht freigeschaltet!</b>");

// ************************************************************************************//
// * German Language Section - My Profile Change
// ************************************************************************************//
define("WHITELIST","F&uuml;r die Whitelist");
define("TWITTER","F&uuml;r das Twitter Modul");
define("RPSERVER","UCP sowie f&uuml;r den Game Server");
define("MYPROFILENOTE","Du musst bei jeder Änderung alle Felder ausf&uuml;hlen!");
define("SIGNATUR","Signatur");
define("SIGNOTE","Deine Signatur f&uuml;r deine Profil Ansicht!");
define("AVATAR","Avatar URL");
define("AVANOTE","Dein Avatar Bild f&uuml;r dein Profil!");
define("MYPROFILESAVE","Speichern");
define("LANGUAGE","Webseiten Sprache");
define("LANGUAGENOTE","Du hast hier die M&ouml;glichkeit die Sprache des UCP zu &auml;ndern.");
define("CHANGE_MYPROFILE_DASHNOTE","Bitte beachten");
define("CHANGE_MYPROFILE_PASSWORD","Passwort &auml;ndern");
define("CHANGE_MYPROFILE_SIGNATUR","Signatur &auml;ndern");
define("CHANGE_MYPROFILE_USERNAME","Benutzername &auml;ndern");
define("CHANGE_MYPROFILE_EMAIL","E-Mail Adresse &auml;ndern");
define("CHANGE_MYPROFILE_AVATAR","Avatar &auml;ndern");
define("CHANGE_MYPROFILE_AVATARNOTE","Legen Sie Dateien hier ab oder klicken Sie zum Hochladen.");
define("CHANGE_MYPROFILE_LANGUAGE","Webseiten Sprache &auml;ndern");
define("CHANGE_MYPROFILE_LANGUAGENOTE","Bitte ausw&auml;hlen");
define("CHANGE_MYPROFILE_LANGUAGE_SELECT_EN","Englisch");
define("CHANGE_MYPROFILE_LANGUAGE_SELECT_DE","Deutsch");

// ************************************************************************************//
// * German Language Section - My Profile
// ************************************************************************************//
define("PLAYERID","Spieler ID");
define("PLAYERSOCIALCLUB","Social Club");
define("PLAYEREMAIL","E-Mail");
define("PLAYERBANNED","Gebannt");
define("PLAYERADMIN","Admin Level");
define("PLAYERWHITELISTED","Whitelistet");
define("PLAYERFIRSTLOGIN","Erster Login");
define("PLAYERNOTE1","Auf unseren Projekt wird jede Whitelist in unseren Teamspeak Server abgehalten.");
define("PLAYERNOTE2","Unser Motto");
define("PLAYERSIGNATURE","Signatur");
define("PLAYERABOUTME","&uuml;BER MICH");
define("AVATAR_CHECK_BACK","Deine Avatar URL ist nicht erlaubt!");
define("AVATAR_CHECK_OKAY","Deine Avatar URL wurde erlaubt!!");

// ************************************************************************************//
// * German Language Section - Dashboard
// ************************************************************************************//
define("DASHBOARDUSERS","Registrierte Users");
define("DASHBOARDSUPPORT","Support Tickets");

// ************************************************************************************//
// * German Language Section - News System
// ************************************************************************************//
define("NEWS_HEADER","News System");
define("NEWS_INFO","Du musst alle Felder ausf&uuml;hlen!");
define("NEWS_TITLE_EN","Titel Englisch");
define("NEWS_TITLE_EN_TEXT","Der Englische Titel");
define("NEWS_TITLE_DE","Titel Deutsch");
define("NEWS_TITLE_DE_TEXT","Der Deutsche Titel");
define("NEWS_CONTENT_EN","Kontent Englisch");
define("NEWS_CONTENT_EN_TEXT","Der Englische Content");
define("NEWS_CONTENT_DE","Kontent Deutsch");
define("NEWS_CONTENT_DE_TEXT","Der Deutsche Kontent");
define("NEWS_SAVE","Speichern");

// ************************************************************************************//
// * German Language Section - Rules System
// ************************************************************************************//
define("RULES_INFO","Du musst alle Felder ausfühlen!");
define("RULES_TITLE_EN","Titel Englisch");
define("RULES_TITLE_EN_TEXT","Der Englische Titel");
define("RULES_TITLE_DE","Titel Deutsch");
define("RULES_TITLE_DE_TEXT","Der Deutsche Titel");
define("RULES_CONTENT_EN","Kontent Englisch");
define("RULES_CONTENT_EN_TEXT","Der Englische Kontent");
define("RULES_CONTENT_DE","Kontent Deutsch");
define("RULES_CONTENT_DE_TEXT","Der Deutsche Kontent");
define("RULES_SAVE","Speichern");

// ************************************************************************************//
// * German Language Section - Support
// ************************************************************************************//
define("SUPPORTUSERID", "Spieler ID");
define("SUPPORTINFO", "Dein Support Ticket sollte m&ouml;glichst genau beschrieben werden.");
define("SUPPORTUSERINFO1", "Gebe dein Username ein");
define("SUPPORTUSERINFO2", "Welchen Bug hast du gefunden?");
define("SUPPORTUSERINFO3", "Deine Beschreibung sollte m&ouml;glichst genau beschrieben sein.");
define("SUPPORTUSERNAME", "Username");
define("SUPPORTEMAIL", "E-Mail");
define("SUPPORTSUBJECT", "Betreff");
define("SUPPORTMSG", "Nachricht");
define("SUPPORTDATE", "Datum");
define("SUPPORTSAVE","Speichern");
define("SUPPORTDELETEINFO","Du hast alle Support Tickets gel&ouml;scht");
define("SUPPORTDELETE1","<b>Gehe nun zur&uuml;ck zu den <a href='support.php'>Support Tickets</a>!</b>");
define("SUPPORTDELETE2","Tickets l&ouml;schen!");
define("SUPPORTADDTICKET1", "Erstelle nun dein Ticket!");
define("SUPPORTADDTICKET2", "Klick mich");
define("SUPPORTADDDONE", "Dein Support Ticket wurde gesendet!");

// ************************************************************************************//
// * German Language Section - No Logged & Logged Section
// ************************************************************************************//
define("REGISTER", "Registrieren");
define("LOGIN", "Einloggen");
define("SOCIALCLUBNAME", "Social Club Name");
define("USERNAME", "Benutzername");
define("EMAIL", "E-Mail");
define("PASSWORD", "Passwort");
define("SUBMIT", "Senden");
define("NOTE", "<b>Hinweis:</b> Felder mit <span class='pflichtfeld'>*</span> m&uuml;ssen ausgef&uuml;llt werden.");
define("NOTE2", "<b>Hinweis:</b> Der Username sowie der Social Club Name m&uuml;ssen gleich sein.");
define("INDEXTEXT", "Wir Bringen Das Roleplay Auf Ein Neues Level, Mit Unserer Realistischen Handhabung, Sind Uns Keine Grenzen Gesetzt!");

// ************************************************************************************//
// * German Language Section - Staff Member 
// ************************************************************************************//
define("STAFF_USERCAHNEGED","Spieler bearbeiten");
define("STAFF_USERCONTROL","Spielerliste");
define("STAFF_USERCONTROLUSERID","Spieler ID");
define("STAFF_USERCONTROLUSERNAME","Spieler Username");
define("STAFF_USERCONTROLSOCIALCLUB","Spieler Social Club");
define("STAFF_USERCONTROLEMAIL","Spieler E-Mail");
define("STAFF_USERCONTROLACCOUNTWHITELIST","Spieler Whitelisted");
define("STAFF_USERCONTROLOPTION","Einstellung");
define("STAFF_USERCONTROLSAVE","Speichern");
define("STAFF_USERCONTROLDELETE","L&ouml;schen");
?>