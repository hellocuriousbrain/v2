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
    $level1 = "3";
    $level2 = "1";
    $level3 = "6";
    $chapter = "3";
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
<div class="center">      <h1> Steps and Methods for English Handwriting Lesson # 6 </h1> </div>

      <p>
We are going to explain method for English Handwriting from Alphabet s to z.



</p>


      <p>
Beginner can use four line of Notebook. Follow the instructions and steps which is explained in this youtube video. 
</p>
      <p>
s,t,u,v,w,x,y,z alphabet are covered in this video one by one.
</p>

<br>
<h2 class="heading_h2">
 Steps and Methods for English Handwriting Lesson #6 in Small Letters s to z are explained in below <a href="https://www.youtube.com/watch?v=LmjRef31iTU" target="_blank" title="English Handwriting Lessons">youtube Video</a> :-
</h2>
<div class="center">
<iframe width="320" height="180" src="https://www.youtube.com/embed/LmjRef31iTU" frameborder="0" allowfullscreen></iframe>
</div>
<br>
<br>
<p>
We hope it will help to improve your english handwriting. We will be explaining from s to z in next video lesson.
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

