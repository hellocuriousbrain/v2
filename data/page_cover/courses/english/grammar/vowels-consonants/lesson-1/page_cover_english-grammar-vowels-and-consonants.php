
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
      <li><a href="../../../../../courses/english/grammar/grammar.php">English Grammar</a></li>
      <li><a href="../../../../../courses/english/grammar/vowels-consonants/lesson-1/english-grammar-vowels-and-consonants.php">Vowels and Consonants</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<?php } ?>
