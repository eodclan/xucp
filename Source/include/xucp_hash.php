<?php 
// ************************************************************************************//
// * xUCP Free
// ************************************************************************************//
// * Author: DerStr1k3r
// ************************************************************************************//
// * Version: 1.3.1
// * 
// * Copyright (c) 2022 DerStr1k3r. All rights reserved.
// ************************************************************************************//
// * License Typ: GNU GPLv3
// ************************************************************************************//
// * Site hash system from session system
// ************************************************************************************//
function sitehash($var,$addtext="",$addsecure="02fb9ff482dfb6d9baf1a56b6d1f17zufr67r45403f643eeb1204b3012391f8ee63bfe4f4e")
{
    return hash('sha512','This xUCP Free ".$addtext.$var.$addtext."".$addsecure." is the new user control panel system for all roleplay projects!');
}
?>