
<?php
function page_cover_fun($currentCourseName,$currentChapterName, $currentType, $currentLessonNumber, $currpageId) {
   ?>
    
       <div class="wrapper cover_bgded cover_overlay" style="background-image:url('../../../../../data/images/courses/<?php echo$currentCourseName ?>/<?php echo$currentChapterName ?>/<?php echo$currentType ?>/<?php echo$currentLessonNumber ?>/page_cover/<?php echo $currpageId  ?>.jpg');">
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="../../../../../index.php">Home</a></li>
      <li><a href="../../../../../courses/courses.php">Courses</a></li>
      <li><a href="../../../../../courses/english/english.php">English</a></li>
      <li><a href="../../../../../courses/english/cursive-handwriting/cursive_handwriting.php">cursive handwriting</a></li>
      <li><a href="../../../../../courses/english/cursive-handwriting/alphabet-sequence/lesson-8/page_cover_how-to-join-letters-one-line-notebook.php">cursive handwriting lesson#8</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<?php } ?>
