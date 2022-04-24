<?php
include header_path.'topHeader.php';
include header_path.'siteBranding.php';
if($isIndex==true)
include header_path.'mainMenuIndex.php';
if($isShop==true)
include header_path.'mainMenuShop.php';
if($isCart==true)
include header_path.'mainMenuCart.php';
if($isSingleProduct==true)
include header_path.'mainMenuSingleProduct.php';
if($isCheckout==true)
include header_path.'mainMenuCheckout.php';
?>