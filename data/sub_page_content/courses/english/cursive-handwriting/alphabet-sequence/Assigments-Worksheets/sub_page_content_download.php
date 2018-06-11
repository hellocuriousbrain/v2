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
    $level3 = "12";
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
<div class="center">      <h1> Assigments and Worksheets - Cursive Handwriting</h1> </div>

      <p>
Assignment for cursive handwriting is available.
If you practise more your handwriting will get improve more.
So please go through all the assignment and write in one line note book or four line notebook.
You can see improvement bu practising more.

</p>


      <p>
Post photo of these assignments to our whats app number or through any social media network. We will let you know if you have made any mistake in handwriting.</p>
<div class="center">      
<h2><b>
Assignment 1 :- </h2> </b>
<img src="../../../../../data/images/courses/english/cursive-handwriting/alphabet-sequence/Assigments-Worksheets/assignment-1.jpg" />

<br>
<br>
<br>
<br>
<h2><b>
Assignment 2 :- </h2> </b>
<img src="../../../../../data/images/courses/english/cursive-handwriting/alphabet-sequence/Assigments-Worksheets/assignment-2.jpg" />

<br>
<br>
<br>
<br>
<h2><b>
Assignment 3 :- </h2> </b>
<img src="../../../../../data/images/courses/english/cursive-handwriting/alphabet-sequence/Assigments-Worksheets/assignment-3.jpg" />

<br>
<br>
<br>
<br>
<h2><b>
Assignment 4 :- </h2> </b>
<img src="../../../../../data/images/courses/english/cursive-handwriting/alphabet-sequence/Assigments-Worksheets/assignment-4.jpg" />

<br>
<br>
<br>
<br>
<h2><b>
Worksheet :- </h2> </b>
<img src="../../../../../data/images/courses/english/cursive-handwriting/alphabet-sequence/Assigments-Worksheets/assignment-line.jpg" />


</div>


<p>
We hope it will help to improve your cursive handwriting. 
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

