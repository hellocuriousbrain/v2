<?php 
	$currpage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
	$currpageId = substr($currpage, 0 , -4);
	include '../../data/common/misc/shop-products.php';
	new_page($currpageId); 
?>
