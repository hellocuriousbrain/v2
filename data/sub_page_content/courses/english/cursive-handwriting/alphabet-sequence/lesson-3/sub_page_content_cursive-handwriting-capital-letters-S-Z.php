<?php
function sub_page_content($currentCourseName,$currentChapterName, $currentType, $currentLessonNumber, $currpageId) {
?>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first"> 
      <!-- ################################################################################################ -->

<?php include "../../../../../data/left_menu/left_menu_english.php";
    $level1 = "1";
    $level2 = "1";
    $level3 = "3";
    $chapter = "1";
	left_menu_fun($currpageId, $level1,$level2,$level3,$chapter);
?>
      <div class="sdb_holder">
        
      </div>
      <div class="sdb_holder">
        
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter"> 
      <!-- ################################################################################################ -->
<div class="center">      <h1> Capital letters from S to Z - Cursive Handwriting </h1> </div>

      <p>
We are going to explain method for Cursive Handwriting from Alphabet S to Z.



</p>


      <p>
Beginner can use four line of Notebook. Follow the instructions and steps which is explained in this youtube video. 
</p>
      <p>
S, T, U, V, W, X, Y, Z alphabet are covered in this video one by one.
</p>

<br>
<h2 class="heading_h2">
 Steps and Methods for Cursive Handwriting Lesson #3 in Capital Letters S to Z are explained in below <a href="https://www.youtube.com/watch?v=5dH1xyfUfp8&list=PL7qb-DIeorTRVtECGbpL6WtZ-ZBbuY3CV&index=3" target="_blank" title="Cursive Handwriting Lessons">youtube Video</a> :-
</h2>
<div class="center">
<iframe width="320" height="180" src="https://www.youtube.com/embed/5dH1xyfUfp8" frameborder="0" allowfullscreen></iframe>
</div>
<br>
<br>
<p>
We hope it will help to improve your cursive handwriting. We will be explaining cursive handwriting from a to a in next video lesson.
</p>
<p>
Please leave comments in below section.
</p>

      <div id="comments">
        <h2>Write A Comment</h2>
            <?php include "../../../../../data/sm_comment/courses/$currentCourseName/$currentChapterName/$currentType/$currentLessonNumber/sm_comment_$currpageId.php"; ?>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>


<!-- / FB share  -->
<div id="facebook_share">
    <div class="sm_share">
            <?php include "../../../../../data/sm_share/courses/$currentCourseName/$currentChapterName/$currentType/$currentLessonNumber/sm_share_$currpageId.php"; ?>
    </div>
</div>

<?php } ?>

