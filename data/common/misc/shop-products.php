<?php
function new_page($currpageId) {
   ?>

<!DOCTYPE html>
<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
  var spData = null;
  function doData(json) {
      spData = json.feed.entry;
  }
  
  function readData(parent) {
      var data = spData;
      var rowData = [];
      var s = 2;
          var cell = data[s]["gs$cell"];
          var val = cell["$t"];
          var cell1 = data[s+1]["gs$cell"];
          var val1 = cell1["$t"];
           document.getElementById("data").innerHTML = val;
           document.getElementById("data1").innerHTML = val1;
  }
  $(document).ready(function(){
      readData($("#data"));
      readData($("#data1"));
  });
  </script>   
<script src="https://spreadsheets.google.com/feeds/cells/17l1vBQGCi6oiDELYng5VEkcuF6FzYv5dXzswB__94lo/1/public/values?alt=json-in-script&callback=doData"></script>
<?php include '../../data/common/misc/include-js.php' ?>
	<script type="text/javascript">

						$.gallerax({
							outputSelector: 		'#outputGallery img',				// Output selector
							thumbnailsSelector:		'.thumbnailsG li img',		// Thumbnails selector
							captionSelector:		'#captions .line',			// Caption selector
							captionLines:			1,							// Caption lines (3 lines)
							fade: 					'fast',						// Transition speed (fast)
							navNextSelector:		'#nav a.navNext',			// 'Next' selector
							navPreviousSelector:	'#nav a.navPrevious',		// 'Previous' selector
							navFirstSelector:		'#nav a.navFirst',			// 'First' selector
							navLastSelector:		'#nav a.navLast',			// 'Last' selector
							navStopAdvanceSelector:	'#nav a.navStopAdvance',	// 'Stop Advance' selector
							navPlayAdvanceSelector:	'#nav a.navPlayAdvance',	// 'Play Advance' selector
							advanceFade:			'slow',						// Advance transition speed (slow)
							advanceDelay:			4000,						// Advance delay (4 seconds)
							advanceResume:			12000,						// Advance resume (12 seconds)
							thumbnailsFunction: 	function(s) {				// Thumbnails function
							
								return s.replace(/_thumb\.jpg$/, '.jpg');
								
							}
						});

					</script>
<?php include "./../../data/metadata/shop/products/metadata_".$currpageId.".php";
metadata($currpageId)
?>
<?php include 'head.php' ?>
</head>
<body id="top">
<?php include_once("./../../data/common/misc/analyticstracking.php") ?>
<?php include './../../data/common/misc/facebooksdk.php'; ?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<?php include '../../data/common/misc/topbar.php'; ?>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<?php include '../../data/common/misc/main_menu.php' ?>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<?php 
//    include "../../data/page_cover/courses/english/page_cover_".$currpageId.".php";
//	page_cover_fun($currpageId);
?>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<?php include "../../data/page_content/shop/products/".$currpageId.".php";
page_content($currpageId)
?>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<?php include '../../data/common/misc/footer.php' ?>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<?php include '../../data/common/misc/copyright.php' ?>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<?php include '../../data/common/misc/feedback.php' ?>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
</body>
</html>

<?php } ?>
