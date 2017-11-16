<?php
function sub_page_content($currentCourseName,$currentChapterName, $currentType, $currentLessonNumber, $currpageId) {
?>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first"> 
      <!-- ################################################################################################ -->

<?php include "../../../../../data/left_menu/left_menu_drawing.php";
    $level1 = "1";
    $level2 = "1";
    $level3 = "2";
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
<div class="center">      <h1> Lesson # 2 :- How to draw using capital letter C and D </h1> </div>

      <p class="bold">
How to Draw Fish using letter C ?
</p>
      <p class="bold">
How to Draw parrot using letter D ?
</p>
      <p>
In this lesson we are going to make a Fish and a parrot using capital letter C and D.
</p>
      <p>
So friends, what are you waiting for ? Get ready with you tools and let's draw.
</p>


<br>
<h2 class="heading_h2">
 Steps and Methods for Drawing using C and D are explained in below <a href="https://www.youtube.com/watch?v=Ar6NnZUK6-w" target="_blank" title="Drawing Lessons">youtube Video</a> :-
</h2>
<div class="center">
<iframe width="320" height="180" src="https://www.youtube.com/embed/Ar6NnZUK6-w" frameborder="0" allowfullscreen></iframe>
</div>
<br>
<br>
<p>
We hope it will help to improve your drawing. We will be explaining from C and D in next video lesson.

</p>
<p>
Please leave comments in below section.
</p>

      <div id="comments">
        <h2>Write A Comment</h2>
<?php include "../../../../../data/sm_comment/l5-section/sm_comment_new_lesson.php"; 
        sub_page_comment($currentCourseName,$currentChapterName,$currentType,$currentLessonNumber,  $currpageId)
            ?>
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
            <?php include "../../../../../data/sm_share/l5-section/sm_share_new_lesson.php"; 
        sub_page_share($currentCourseName,$currentChapterName,$currentType,$currentLessonNumber,  $currpageId)
?>
    </div>
</div>

<?php } ?>

