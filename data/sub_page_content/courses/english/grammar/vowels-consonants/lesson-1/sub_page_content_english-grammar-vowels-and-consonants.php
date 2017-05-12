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
    $level2 = "21";
    $level3 = "121";
	left_menu_fun($currpageId, $level1,$level2,$level3);
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
<div class="center">      <h1> Vowels and Consonants </h1> </div>

      <p>
We are going to explain which letters are vowels and which are consonants.
</p>


      

<h3 class="heading_h3">
Alphabet
</h3>
      <p>
A B C D E F G H I J K L M N O P Q R S T U V W X Y Z
</p>

<p>
Letters from alphabet are classfied into vowels and consonants.
</p>

<h3 class="heading_h3">
Vowels
</h3>
      <p>
a e i o u
</p>
<h4 class="heading_h4">
Vowels Definition
</h4>
<p>
Letters that are spoken with the help of other consonants are called vowels. They are 5 in number. 
</p>


<h3 class="heading_h3">
Consonants
</h3>
      <p>
b c d  f g h  j k l m n  p q r s t  v w x y z
</p>
<h4 class="heading_h4">
Consonants Definition
</h4>
<p>
These are 21 in numbers, all these letters are called consonants. They are spoken with the help of vowels. 
</p>

<h3 class="heading_h3">
Words Made from Vowels
</h3>
      <p>
1) bat pen pin pot cup
<br>
2) Cat ten tin hot tub
<br>
3) Hat hen bin cot rub
<br>
4) Rat men fin rot jug
</p>

<h3 class="heading_h3">
Practice
</h3>
<h4 class="heading_h4">
Separating Vowels 
</h4>
      <p>
1) Owl  Grey    Fig  Ant   Bus  
<br>
2) Swan  Red  Pink    Cow  Tub
<br>
3) Cat  Duck   Lily   Dog   Hen
<br>
4) Fox   Sub   Fir  Rat   Den
<br>
5) Birch  Men  Swan  Frog    Jug

</p>
<h4 class="heading_h4">
Fill in the Vowel
</h4>
      <p>
1) B _ T     ( p, a )
<br>
2) C _ RN    ( o, l )
<br>
3) H _ N     ( c, e )
<br>
4) R _ B     ( u, k )
<br>
5) M _ NT    ( k, i )


</p>
<p>
Please download the attached below pdf file for answers. (Below to <a href="https://www.youtube.com/watch?v=uqk8M8fgSH0" target="_blank" title="Cursive Handwriting Lessons">youtube Video lesson</a>)  
</p>
<br>
<h2 class="heading_h2">
 Consonants and vowels are explained in detail in this <a href="https://www.youtube.com/watch?v=uqk8M8fgSH0" target="_blank" title="Cursive Handwriting Lessons">youtube Video</a> :-
</h2>
<div class="center">
<iframe width="320" height="180" src="https://www.youtube.com/embed/uqk8M8fgSH0" frameborder="0" allowfullscreen></iframe>
</div>
<br>
<br>
<h3 class="heading_h3">
 You Can download .PDF file for Vowels and Consonants Lesson and answers  by clicking on Below Link:-
</h3>

<div class="center">
<p>
<a class="btn medium inverse" href="https://drive.google.com/open?id=0By7hLECWNpZETVpGMVJJWEI5LTQ" target="_blank"> Download  »</a>
</p>

<p>
We hope it will help to learn you Consonants and vowels.
</p>
<p>
Please leave comments in below section.
</p>
</div>


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

