<?php
    // Url Structure 
    //author/Thomas_Hobbes/quotes/1/Thomas_Hobbes.php
    $path = $_SERVER['REQUEST_URI']; // this gives you /folder1/folder2/THIS_ONE/file.php
    $folders = explode("/", $path); // splits folders in array
    $currentQuoteNumber = $folders[4];
	$currpage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
    $currQuoteAutherId = substr($currpage, 0 , -4);
	include '../../../../data/common/misc/new_quote_page.php';
	new_page($currQuoteAutherId,$currentQuoteNumber); 
?>

