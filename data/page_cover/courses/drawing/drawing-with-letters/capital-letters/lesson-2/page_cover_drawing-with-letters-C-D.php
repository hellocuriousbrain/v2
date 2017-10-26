
<?php
function page_cover_fun($currentCourseName,$currentChapterName, $currentType, $currentLessonNumber, $currpageId) {
   ?>
    
       <div class="wrapper cover_bgded cover_overlay" style="background-image:url('../../../../../data/images/courses/<?php echo$currentCourseName ?>/<?php echo$currentChapterName ?>/<?php echo$currentType ?>/<?php echo$currentLessonNumber ?>/page_cover/<?php echo $currpageId  ?>.png');">
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="../../../../../index.php">Home</a></li>
      <li><a href="../../../../../courses/courses.php">Courses</a></li>
      <li><a href="../../../../../courses/drawing/drawing.php">Drawing</a></li>
      <li><a href="../../../../../courses/drawing/drawing-with-letters/drawing-with-letters.php">Drawing with Letters</a></li>
      <li><a href="../../../../../courses/drawing/drawing-with-letters/capital-letters/lesson-2/drawing-with-letters-C-D.php">Drawing lesson#1</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<?php } ?>
