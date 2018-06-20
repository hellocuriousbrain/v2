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
	<div id="wrappergallery">
			<div id="gallery">
			
			
			<!-- start -->

					<div id="outputGallery">
						<img src="../../../../images/1.jpg" alt="" />
					</div>
					
					<div id="captions">
					
						
						
						<span class="line">Monument Valley</span>
						
						<br class="clear" />
					</div>			

					<ul class="thumbnailsG category1">
						<li class="first"><img src="../../../../../images/1_thumb.jpg" title="Monument Valley ; A scenic shot of Monument Valley in Utah." alt="" width="100" height="75" /></li>
						<li><img src="../../../../images/2_thumb.jpg" title="Honey Bee ; A honey bee hovering in front of a flower." alt="" width="100" height="75" /></li>
						<li><img src="../../../../images/3_thumb.jpg" title="Cup of Coffee ; An ornate cup of coffee sitting on a matching saucer." alt="" width="100" height="75" /></li>
						<li><img src="../../../../images/4_thumb.jpg" title="Grand Tetons ; The Grand Tetons in Wyoming with a barn in the foreground." alt="" width="100" height="75" /></li>
						<li><img src="../../../../images/5_thumb.jpg" title="LA Skyline ; Upwards shot of a small portion of Los Angeles' skyline." alt="" width="100" height="75" /></li>
					</ul>

					<br class="clear" />
					
				

			<!-- end -->			
			
			
			</div>

			
        </div>

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

