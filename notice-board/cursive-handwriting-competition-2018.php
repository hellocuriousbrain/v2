<?php 
	$currpage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
	$currpageId = substr($currpage, 0 , -4);
	include '../data/common/misc/notice_board_main_page.php';
	new_page($currpageId); 
?>
