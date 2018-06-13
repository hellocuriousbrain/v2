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
    $level3 = "9";
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
<div class="center">      <h1> How to write speedily - Cursive Handwriting </h1> </div>

      <p>
We are going to explain common problems faced while writing cursive handwriting.
</p>


      <p>
 <b> 1) How to Improve Handwriting ? </b>
<br>
 a) Make good shape of letters
<br>
 b) Practice more and more
<br>
 c) Make letters mostly in round shape
<br>
 d) Proper distance between letters and words
</p>
      <p> <b>
2) How Beginners should start ?
</b>
<br>
 a) Start practice with pencil
<br>
 b) Start practice in four line notebook
<br>
 c) Practice more and more
</p>


<p> <b>
3) How to write speedily ?
</b>
<br>
 Write lines with fixing timer, check how much time it is taking to write, then write same thing in speed, writing may be poor but this time concentrate on speed. After speed is proper then handwriting will come automatically because you have improved handwriting already.
</p>

<p> <b>
4) How to write in un-ruled notebook ?
</b>
<br>
 Write first word, by seeing first word write next word,by this when 1 line get completes, then take a reference of first line to write in next line. Continue link this.
</p>

<br>
<h2 class="heading_h2">
 Cursive handwriting lesson 9, common problems,How Beginners should start,How to write speedily are explained in below <a href="https://www.youtube.com/watch?v=7DXB3bAj1tw&list=PL7qb-DIeorTRVtECGbpL6WtZ-ZBbuY3CV&index=9" target="_blank" title="Cursive Handwriting Lessons">youtube Video</a> :-
</h2>
<div class="center">
<iframe width="320" height="180" src="https://www.youtube.com/embed/7DXB3bAj1tw" frameborder="0" allowfullscreen></iframe>
</div>
<br>
<br>
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

