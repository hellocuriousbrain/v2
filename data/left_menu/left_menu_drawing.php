
<?php
function left_menu_fun($currpageId, $level1,$level2,$level3,$chapter) {
   ?>
    
<h2> Hindi </h2>
      <nav class="sdb_holder">
        <ul>
        <li><a <?php if ($level1 == "1" or $level1 == "11") { ?> class="bold" <?php } ?> href="../../../../../courses/hindi/hindi-handwriting/hindi-handwriting.php">Hindi handwriting</a>
<?php if ($chapter == "1") { ?>
            <ul>
                  <li><a <?php if ($level1 == "1" and $level2 == "1" and $level3 == "1") { ?> class="bold" <?php } ?> href="../../../../../courses/hindi/hindi-handwriting/in-sequence/lesson-1/hindi-handwriting-lesson-1.php">Hindi handwriting Lesson #1 </a></li>
                  <li><a <?php if ($level1 == "1" and $level2 == "1" and $level3 == "2") { ?> class="bold" <?php } ?> href="../../../../../courses/hindi/hindi-handwriting/in-sequence/lesson-1/hindi-handwriting-lesson-2.php">Hindi handwriting Lesson #2 </a></li>
                  <li><a <?php if ($level1 == "1" and $level2 == "1" and $level3 == "3") { ?> class="bold" <?php } ?> href="../../../../../courses/hindi/hindi-handwriting/in-sequence/lesson-1/hindi-handwriting-lesson-3.php">Hindi handwriting Lesson #3 </a></li>
                  <li><a <?php if ($level1 == "1" and $level2 == "1" and $level3 == "4") { ?> class="bold" <?php } ?> href="../../../../../courses/hindi/hindi-handwriting/in-sequence/lesson-1/hindi-handwriting-lesson-4.php">Hindi handwriting Lesson #4 </a></li>
                  <li><a <?php if ($level1 == "1" and $level2 == "1" and $level3 == "5") { ?> class="bold" <?php } ?> href="../../../../../courses/hindi/hindi-handwriting/in-sequence/lesson-1/hindi-handwriting-lesson-5.php">Hindi handwriting Lesson #5 </a></li>
                  <li><a <?php if ($level1 == "1" and $level2 == "1" and $level3 == "6") { ?> class="bold" <?php } ?> href="../../../../../courses/hindi/hindi-handwriting/in-sequence/lesson-1/hindi-handwriting-lesson-6.php">Hindi handwriting Lesson #6 </a></li>
                  <li><a <?php if ($level1 == "1" and $level2 == "1" and $level3 == "7") { ?> class="bold" <?php } ?> href="../../../../../courses/hindi/hindi-handwriting/in-sequence/lesson-1/hindi-handwriting-lesson-7.php">Hindi handwriting Lesson #7 </a></li>
                  <li><a <?php if ($level1 == "1" and $level2 == "1" and $level3 == "8") { ?> class="bold" <?php } ?> href="../../../../../courses/hindi/hindi-handwriting/in-sequence/lesson-1/hindi-handwriting-lesson-8.php">Hindi handwriting Lesson #8 </a></li>
                  <li><a <?php if ($level1 == "1" and $level2 == "1" and $level3 == "9") { ?> class="bold" <?php } ?> href="../../../../../courses/hindi/hindi-handwriting/in-sequence/lesson-1/hindi-handwriting-lesson-9.php">Hindi handwriting Lesson #9 </a></li>
                  <li><a <?php if ($level1 == "1" and $level2 == "1" and $level3 == "10") { ?> class="bold" <?php } ?> href="../../../../../courses/hindi/hindi-handwriting/in-sequence/lesson-1/hindi-handwriting-lesson-10.php">Hindi handwriting Lesson #10 </a></li>
            </ul>
<?php } ?>
          </li>
        </ul>
      </nav>
<?php } ?>
