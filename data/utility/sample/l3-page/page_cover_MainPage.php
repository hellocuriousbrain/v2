
<?php
function page_cover_fun($currentCourseName,$currentChapterName,  $currpageId) {
   ?>
    
       <div class="wrapper cover_bgded cover_overlay" style="background-image:url('../../../data/images/courses/<?php echo$currentCourseName ?>/<?php echo$currentChapterName?>/page_cover/<?php echo$currpageId?>.png');">
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="../../../index.php">Home</a></li>
      <li><a href="../../../courses/courses.php">Courses</a></li>
      <li><a href="../../../courses/<?php echo$currentCourseName ?>/<?php echo$currentCourseName?>.php">Hindi</a></li>
      <li><a href="../../../courses/<?php echo$currentCourseName ?>/<?php echo$currentChapterName?>/<?php echo$currpageId?>.php ">Hindi Handwriting</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<?php } ?>

