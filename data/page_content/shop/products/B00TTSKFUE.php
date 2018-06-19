<?php
function page_content($currpageId) {
?>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first"> 
      <!-- ################################################################################################ -->

<?php include "../../data/left_menu/left_menu_english.php";
    $level1 = "1";
    $level2 = "1";
    $level3 = "10";
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
<div class="center">      <h1> <a id="data"> </a>  </h1> </div>

      <p>
We are going to explain methods for join of two letters in cursive handwriting . 
</p>
      <p>
This is practise lesson. We will learn to join of two letters from A to Z in this lesson. 
</p>
      <p>
You can practise like this for joining of two letters.</p>

<br>
<h2 class="heading_h2">
 Steps and Methods for Joining of two letters from a to z are explained in below <a href="https://www.youtube.com/watch?v=X2kSqDAEeUY&index=11&list=PL7qb-DIeorTRVtECGbpL6WtZ-ZBbuY3CV" target="_blank" title="Cursive Handwriting Lessons">youtube Video</a> :-
</h2>
<div class="center">
<iframe width="320" height="180" src="https://www.youtube.com/embed/X2kSqDAEeUY" frameborder="0" allowfullscreen></iframe>
</div>
<br>
<br>
<p>
We hope it will help to improve your cursive handwriting. We will be learn to join three letters in next video lesson.
</p>
<p>
Please leave comments in below section.
</p>

      <div id="comments">
        <h2>Write A Comment</h2>
<?php include "../../data/sm_comment/shop/products/comments.php"; 
        page_comment($currpageId)
            ?>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>


    </div>
</div>

<?php } ?>

