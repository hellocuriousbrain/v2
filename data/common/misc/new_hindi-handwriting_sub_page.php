<?php
function new_page($currentCourseName,$currentChapterName,$currpageId) {
   ?>

<!DOCTYPE html>
<html>
<head>
<?php include "./../../../data/title/courses/$currentCourseName/$currentChapterName/title_".$currpageId.".php" ?>
<?php include 'head.php' ?>
</head>
<body id="top">
<?php include_once("./../../../data/common/misc/analyticstracking.php") ?>
<?php include './../../../data/common/misc/facebooksdk.php'; ?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<?php include './../../../data/common/misc/topbar.php'; ?>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<?php include './../../../data/common/misc/main_menu.php' ?>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<?php 
//    include "./../../../data/page_cover/courses/$currentCourseName/$currentChapterName/page_cover_".$currpageId.".php";
//	page_cover_fun($currentCourseName,$currentChapterName,  $currpageId);
?>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<?php 
    include "./../../../data/sub_page_content/courses/$currentCourseName/$currentChapterName/sub_page_content_".$currpageId.".php"; 
    sub_page_content($currentCourseName,$currentChapterName,  $currpageId)
?>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<?php include './../../../data/common/misc/footer.php' ?>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<?php include './../../../data/common/misc/copyright.php' ?>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<?php include './../../../data/common/misc/feedback.php' ?>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<?php include './../../../data/common/misc/include-js.php' ?>
</body>
</html>

<?php } ?>

