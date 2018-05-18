
<div>
    <div id="main" class="hoc clear"> 
      <section class="slider">
        <div class="flexslider carousel">
          <ul class="slides">
            <li>
  	    	    <a href="../courses/english/cursive-handwriting/alphabet-sequence/lesson-1/cursive-handwriting-capital-letters-A-I.php"><img src="../data/images/slider/cursive-handwriting-slider.jpg" /></a>
  	    		</li>
  	    		<li>
  	    	    <img src="../data/images/slider/drawing-handwriting-slider.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="../data/images/slider/Hindi-handwriting-slider.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="../data/images/slider/english-handwriting-slider.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="../data/images/slider/kids-zone-slider.jpg" />
  	    		</li>
          </ul>
        </div>
      </section>
    </div>

  </div>

  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="./layout/scripts/jquery.flexslider.js"></script>

   <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        slideshowSpeed: 3000,
        animationSpeed: 1000, 
        itemWidth: 210,
        itemMargin: 5,
        minItems: 2,
        maxItems: 4,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>




<!-- 
<div class="wrapper bgded overlay" style="background-image:url('../data/images/background/01.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <div class="flexslider basicslider">
      <ul class="slides">
        <li>
          <article class="group">
            <div class="one_half first">
              <p class="uppercase">Cursive Handwriting</p>
              <h1 class="heading_h11">Complete Lesson for Cursive Handwriting </h1>
              <p> How to write cursive Handwriting easily ? How to writing Capital Cursive handwriting? How to write small cursive Handwriting? </p>
              <p><a class="btn medium" href="../courses/english/cursive-handwriting/cursive_handwriting.php">Read More &raquo;</a></p>
            </div>
            <div class="one_half"><a href="../courses/english/cursive-handwriting/cursive_handwriting.php"><img src="../data/images/slider/Cursive-Handwriting.jpg" alt=""></a></div>
          </article>
        </li>
        <li>
          <article class="group">
            <div class="one_half first">
              <p class="uppercase">Hindi Handwriting</p>
              <h1 class="heading_h11">Tutorial to improve hindi Handwriting </h1>
              <p>How to write beautiful hindi Handwriting easily ? How to improve Hindi Handwriting? Video tutorial for Hindi Handwriting.</p>
              <p><a class="btn medium inverse" href="../courses/hindi/hindi-handwriting/hindi-handwriting.php">Read More &raquo;</a></p>
            </div>
            <div class="one_half"><a href="../courses/hindi/hindi-handwriting/hindi-handwriting.php"><img src="../data/images/slider/Hindi-Varnamala.jpg" alt=""></a></div>
          </article>
        </li>
        <li>
          <article class="group">
            <div class="one_half first">
              <p class="uppercase">Drawing</p>
              <h1 class="heading_h11">How to teach kids to Draw using Letters ?</h1>
              <p>Drawing for kids with letters in easy steps. The complete tutorial for drawing from A to Z. Video tutorials are also available. </p>
              <p><a class="btn medium inverse" href="../courses/drawing/drawing.php">Read More &raquo;</a></p>
            </div>
            <div class="one_half"><a href="../courses/drawing/drawing.php"><img src="../data/images/slider/Speak_of_the_devil.jpeg" alt=""></a></div>
          </article>
        </li>
      </ul>
    </div>
  </div>
</div>
-->
