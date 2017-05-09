
<?php
function left_menu_fun($currpageId, $level1,$level2,$level3) {
   ?>
    
<h2> Quick Links </h2>
      <nav class="sdb_holder">
        <ul>
        <li><a <?php if ($level1 == "1") { ?> class="bold" <?php } ?> href="../../../../../courses/english/english.php">English</a>
            <ul>
              <li><a <?php if ($level2 == "11") { ?> class="bold" <?php } ?> href="../../../../../courses/idioms.php">Idioms</a></li>
                  <ul>
                  <li><a <?php if ($level3 == "111") { ?> class="bold" <?php } ?> href="../../../../../courses/idioms_lesson_1.php">Idioms Lesson # 1</a></li>
                  <li><a <?php if ($level3 == "211") { ?> class="bold" <?php } ?> href="../../../../../courses/idioms_lesson_2.php">Idioms Lesson # 2</a></li>
                  <li><a <?php if ($level3 == "311") { ?> class="bold" <?php } ?> href="../../../../../courses/idioms_lesson_3.php">Idioms Lesson # 3</a></li>
                  <li><a <?php if ($level3 == "411") { ?> class="bold" <?php } ?> href="../../../../../courses/idioms_lesson_4.php">Idioms Lesson # 4</a></li>
                </ul>
              <li><a <?php if ($level2 == "21") { ?> class="bold" <?php } ?> href="../../../../../courses/english/cursive-handwriting/cursive_handwriting.php">Cursive handwriting</a>
                <ul>
                  <li><a <?php if ($level3 == "121") { ?> class="bold" <?php } ?> href="../../../../../courses/english/cursive-handwriting/alphabet-sequence/lesson-1/cursive-handwriting-capital-letters-A-I.php">Cursive handwriting Lesson #1 </a></li>
                  <li><a <?php if ($level3 == "221") { ?> class="bold" <?php } ?> href="../../../../../courses/english/cursive-handwriting/alphabet-sequence/lesson-2/cursive-handwriting-capital-letters-J-R.php">Cursive handwriting Lesson #2 </a></li>
                  <li><a <?php if ($level3 == "321") { ?> class="bold" <?php } ?> href="../../../../../courses/english/cursive-handwriting/alphabet-sequence/lesson-3/cursive-handwriting-capital-letters-S-Z.php">Cursive handwriting Lesson #3 </a></li>
                  <li><a <?php if ($level3 == "421") { ?> class="bold" <?php } ?> href="../../../../../courses/english/cursive-handwriting/alphabet-sequence/lesson-4/cursive-handwriting-small-letters-a-i.php">Cursive handwriting Lesson #4 </a></li>
                  <li><a <?php if ($level3 == "521") { ?> class="bold" <?php } ?> href="../../../../../courses/english/cursive-handwriting/alphabet-sequence/lesson-5/cursive-handwriting-small-letters-j-r.php">Cursive handwriting Lesson #5 </a></li>
                  <li><a <?php if ($level3 == "621") { ?> class="bold" <?php } ?> href="../../../../../courses/english/cursive-handwriting/alphabet-sequence/lesson-6/cursive-handwriting-small-letters-s-z.php">Cursive handwriting Lesson #6 </a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
<?php } ?>
