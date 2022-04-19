<?php
$level='';
if($iscontainerCart==true)
include $level.content_path.'containerCart.php';

if($iscontainerCheckout==true)
include $level.content_path.'containerCheckout.php';

if($iscontainerIndex==true)
include $level.content_path.'containerIndex.php';

if($iscontainerShop==true)
include $level.content_path.'containerShop.php';

if($iscontainerSingleProduct==true)
include $level.content_path.'containerSingleProduct.php';
?>
