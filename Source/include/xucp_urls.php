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
// * Site secure url system
// ************************************************************************************//
function secure_url() {
  $ct_spammer_def = array();                    // Reset Definition Array "Spammer"
  $ct_mailscn_def = array();                    // Reset Definition Array "Mailscan"
  $ct_userspm_def = array();                    // Reset Definition Array "Userblocks"
  $cracktrack = $_SERVER['QUERY_STRING'];
  $wormprotector = array('http_', '_server', 'delete%20', 'delete ', 'drop%20', 'drop ', 'create%20',
                  'create ', 'update%20', 'update ', 'insert%20', 'insert ',
                  'select%20', 'select ', 'bulk%20', 'bulk ', 'union%20', 'union ',
                  'or%20', 'or ', 'and%20', 'and ', 'exec', '@@', '%22', '"', 'openquery',
                  'openrowset', 'msdasql', 'sqloledb', 'sysobjects', 'syscolums',
                  'syslogins', 'sysxlogins', 'char%20', 'char ', 'into%20', 'into ',
                  'load%20', 'load ', 'msys', 'alert%20', 'alert ', 'eval%20', 'eval ',
                  'onkeyup', 'x5cx', 'fromcharcode', 'javascript:', 'javascript.', 'vbscript:',
                  'vbscript.', 'http-equiv', '->', 'expression%20', 'expression ',
                  'url%20', 'url ', 'innerhtml', 'document.', 'dynsrc', 'jsessionid',
                  'style%20', 'style ', 'phpsessid', '<applet', '<div', '<emded', '<iframe', '<img',
                  '<meta', '<object', '<script', '<textarea', 'onabort', 'onblur',
                  'onchange', 'onclick', 'ondblclick', 'ondragdrop', 'onerror',
                  'onfocus', 'onkeydown', 'onkeypress', 'onload', 'onmouse',
                  'onmove', 'onreset', 'onresize', 'onselect', 'onsubmit',
                  'onunload', 'onreadystatechange', 'xmlhttp', 'uname%20', 'uname ',
                  '%2C', 'union+', 'select+', 'delete+', 'create+', 'bulk+', 'or+', 'and+',
                    'into+', 'kill+', '+echr', '+chr', 'cmd+', '+1', 'user_password',
                  'id%20', 'id ', 'ls%20', 'LS  ', 'cat%20', 'cat ', 'rm%20', 'rm  ',
          'kill%20', 'kill ', 'mail%20', 'mail ', 'wget%20', 'wget ', 'wget(',
          'pwd%20', 'pwd ', 'objectclass', 'objectcategory', '<!-%20', '<!- ',
          'total%20', 'total ', 'http%20request', 'http request', 'phpb8b4f2a0',
          'phpinfo', 'php:', 'globals', '%2527', '%27', '\'', 'chr(',
                  'chr=', 'chr%20', 'chr ', '%20chr', ' chr', 'cmd=', 'cmd%20', 'cmd',
          '%20cmd', ' cmd', 'rush=', '%20rush', ' rush', 'rush%20', 'rush ',
          'union%20', 'union ', '%20union', ' union', 'union(', 'union=',
                  '%20echr', ' echr', 'esystem', 'cp%20', 'CP  ', 'cp(', '%20cp', ' cp',
          'mdir%20', 'mdir ', '%20mdir', ' mdir', 'mdir(', 'mcd%20', 'mcd ',
          'mrd%20', 'mrd ', 'rm%20', 'rm  ', '%20mcd', ' mcd', '%20mrd', ' mrd',
          '%20rm', ' rm', 'mcd(', 'mrd(', 'rm(', 'mcd=', 'mrd=', 'mv%20', 'mv  ',
                  'rmdir%20', 'rmdir ', 'mv(', 'rmdir(', 'chmod(', 'chmod%20', 'chmod ',
          'cc%20', 'CC  ', '%20chmod', ' chmod', 'chmod(', 'chmod=', 'chown%20', 'chown ',
          'chgrp%20', 'chgrp ', 'chown(', 'chgrp(', 'locate%20', 'locate ', 'grep%20', 'grep ',
          'locate(', 'grep(', 'diff%20', 'diff ', 'kill%20', 'kill ', 'kill(', 'killall',
          'passwd%20', 'passwd ', '%20passwd', ' passwd', 'passwd(', 'telnet%20', 'telnet ',
          'vi(', 'vi%20', 'vi ', 'nigga(', '%20nigga', ' nigga', 'nigga%20', 'nigga ',
          'fopen', 'fwrite', '%20like', ' like', 'like%20', 'like ', '$_',
                  '$get', '.system', 'http_php', '%20getenv', ' getenv', 'getenv%20', 'getenv ',
                  'new_password', '/password', 'etc/', '/groups', '/gshadow',
                  'http_user_agent', 'http_host', 'bin/', 'wget%20', 'wget ', 'uname%5c',
                  'uname\\', 'usr', '/chgrp', '=chown', 'usr/bin', 'g%5c',
                  'g\\', 'bin/python', 'bin/tclsh', 'bin/nasm', 'perl%20', 'perl ', '.pl',
                  'traceroute%20', 'traceroute ', 'tracert%20', 'tracert ', 'ping%20', 'ping ',
                  '/usr/x11r6/bin/xterm', 'lsof%20', 'lsof ', '/mail', '.conf', 'motd%20', 'motd ',
                  'http/1.', '.inc.php', 'config.php', 'UNION', 'SELECT', 'cgi-', '.eml', 'file%5c://',
                  'file\:', 'file://', 'window.open', 'img src', 'img%20src', 'img src',
                  '.jsp', 'ftp.', 'xp_enumdsn', 'xp_availablemedia',
                  'xp_filelist', 'nc.exe', '.htpasswd', 'servlet', '/etc/passwd', '/etc/shadow',
                  'wwwacl', '~root', '~ftp', '.js', '.jsp', '.history',
                  'bash_history', '~nobody', 'server-info', 'server-status',
                  '%20reboot', ' reboot', '%20halt', ' halt', '%20powerdown', ' powerdown',
          '/home/ftp', '=reboot', 'www/', 'init%20', 'init ','=halt', '=powerdown',
          'ereg(', 'secure_site', 'chunked', 'org.apache', '/servlet/con',
                  '/robot', 'mod_gzip_status', '.inc', '.system', 'getenv',
                  'http_', '_php', 'php_', 'phpinfo()', '<?php', '?>', '%3C%3Fphp',
                  '%3F>', 'sql=', '_global', 'global_', 'global[', '_server',
                  'server_', 'server[', '/modules', 'modules/', 'phpadmin',
                  'root_path', '_globals', 'globals_', 'globals[', 'iso-8859-1',
                  '?hl=', '%3fhl=', '.exe', '.sh', '%00', rawurldecode('%00'), '_env');
$checkworm = str_replace($wormprotector, 'X*X', $cracktrack);  

$ct_spammer_def = array(
    '*pills*',
    '*viagra*',
    '*phentermine*',
    '*buycheapphenter*',
    '*animalporn*',
    '*online*roulette*',
    '*on*line*casino*',
    '*casino*on*line*',
    '*masterbell.net*',
    '*Your*site*there*is*future*',
    '*online*dating*',
    '*forumgratis.com*',
    '*valium*',
    '*fantasticsex*',
    '*free-sex*',
    '*free*nice*pics*',
    '*you*search*friend*',
    '*dating*',
    '*flirt*',
    '*my_photos*');


$ct_mailscn_def = array(
    '*@bumpymail.com',
    '*@centermail.com',
    '*@centermail.net',
    '*@discardmail.com',
    '*@dodgeit.com',
    '*@dontsendmespam.de',
    '*@emailias.com',
    '*@ghosttexter.de',
    '*@jetable.net',
    '*@kasmail.com',
    '*@mailexpire.com',
    '*@mailinator.com',
    '*@messagebeamer.de',
    '*@mytrashmail.com',
    '*@trashmail.net',
    '*@nervmich.net',
    '*@nervtmich.net',
    '*@netzidiot.de',
    '*@nurfuerspam.de',
    '*@privacy.net',
    '*@punkass.com',
    '*@sneakemail.com',
    '*@sofort-mail.de',
    '*@spam.la',
    '*@spambob.com',
    '*@spamex.com',
    '*@spamgourmet.com',
    '*@spamhole.com',
    '*@spaminator.de',
    '*@spammotel.com',
    '*@spamtrail.com',
    '*@trash-mail.de',
    '*@emaildienst.de',
    '*@temporarily.de',
    '*@temporaryinbox.com',
    '*@willhackforfood.biz',
    '*@wegwerfadresse.de',
    '*@emailto.de',
    '*@dumpmail.de',
    '*@spamoff.de',
    '*@twinmail.de',
    '*@gawab.com',
    '*@mail.ru',
    '*@*boom.ru',
    '*@m-s-n.net',
    '*@*cigarettes.*',
    '*@*pharmacy.*',
    '*@net-search.org',
    '*@my-yep.com',
    '*@ezigaretten.*',
    '*@portsaid.cc',
    '*@pisem.net');


$ct_userspm_def = array(
    'funtklakow',
    'jtfoe1974',
    'unmmyns',
    'coldsorin',
    'fairlande',
    'largepafilis',
    'pirsrv',
    'sadlatour',
    'bighor-lam',
    'greatfintan',
    'budowa_cepa',
    'cepelin',
    'yuriyhoy',
    'printerxp',
    'kololos');
 
  if ($cracktrack != $checkworm)
  {
      $expl = explode("X*X" ,$checkworm);
      $manipulated = str_replace($expl[0] , "" ,$cracktrack);
      foreach ($expl as $delete)
      $manipulated = str_replace($delete , "'" ,$manipulated); 
      $cremotead = $_SERVER['REMOTE_ADDR'];
      $cuseragent = $_SERVER['HTTP_USER_AGENT'];
        die( "<font color=red>Attack detected! <br /><br /><b>has detected a potential attack on this site with a worm or exploit script so the Security System stopped the script.:</b><br />$cremotead - $cuseragent" );
  }
}
?>