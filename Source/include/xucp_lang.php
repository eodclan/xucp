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
// * Set Language variable
// ************************************************************************************//
if(isset($_GET['secure_lang']) && !empty($_GET['secure_lang'])){
        $_SESSION['username']['secure_lang'] = $_GET['secure_lang'];
       
        if(isset($_SESSION['username']['secure_lang']) && $_SESSION['username']['secure_lang'] != $_GET['secure_lang']){
         echo "<script type='text/javascript'> location.reload(); </script>";
        }
}
// ************************************************************************************//       
// Include Language file
// ************************************************************************************//
if(isset($_SESSION['username']['secure_lang'])){
	$sqllang = "SELECT language FROM accounts WHERE id = ".$_SESSION['username']['secure_first']."";
	$resultlang = $conn->query($sqllang);

	if ($resultlang->num_rows > 0) {
		// output data of each row
		while($row = $resultlang->fetch_assoc()) {
			include(dirname(__FILE__) . "/language/lang_".htmlentities($row['language'], ENT_QUOTES, 'UTF-8').".php");
		}
	}else{
			include(dirname(__FILE__) . "/language/lang_".SITE_LANGUAGE.".php");
	}
}else{
	include(dirname(__FILE__) . "/language/lang_".SITE_LANGUAGE.".php");
}
?>