
<?php
function left_menu_fun($currpageId, $level1,$level2,$level3,$chapter) {
   ?>
    
<h2> English </h2>
      <nav class="sdb_holder">
        <ul>
        <li><a <?php if ($level1 == "1" or $level1 == "11") { ?> class="bold" <?php } ?> href="../../../../../courses/english/cursive-handwriting/cursive_handwriting.php">Cursive handwriting</a>
<?php if ($chapter == "1") { ?>
            <ul>
                  <li><a <?php if ($level1 == "1" and $level2 == "1" and $level3 == "1") { ?> class="bold" <?php } ?> href="../../../../../courses/english/cursive-handwriting/alphabet-sequence/lesson-1/cursive-handwriting-capital-letters-A-I.php">Cursive handwriting Lesson #1 </a></li>
                  <li><a <?php if ($level1 == "1" and $level2 == "1" and $level3 == "2") { ?> class="bold" <?php } ?> href="../../../../../courses/english/cursive-handwriting/alphabet-sequence/lesson-2/cursive-handwriting-capital-letters-J-R.php">Cursive handwriting Lesson #2 </a></li>
                  <li><a <?php if ($level1 == "1" and $level2 == "1" and $level3 == "3") { ?> class="bold" <?php } ?> href="../../../../../courses/english/cursive-handwriting/alphabet-sequence/lesson-3/cursive-handwriting-capital-letters-S-Z.php">Cursive handwriting Lesson #3 </a></li>
                  <li><a <?php if ($level1 == "1" and $level2 == "1" and $level3 == "4") { ?> class="bold" <?php } ?> href="../../../../../courses/english/cursive-handwriting/alphabet-sequence/lesson-4/cursive-handwriting-small-letters-a-i.php">Cursive handwriting Lesson #4 </a></li>
                  <li><a <?php if ($level1 == "1" and $level2 == "1" and $level3 == "5") { ?> class="bold" <?php } ?> href="../../../../../courses/english/cursive-handwriting/alphabet-sequence/lesson-5/cursive-handwriting-small-letters-j-r.php">Cursive handwriting Lesson #5 </a></li>
                  <li><a <?php if ($level1 == "1" and $level2 == "1" and $level3 == "6") { ?> class="bold" <?php } ?> href="../../../../../courses/english/cursive-handwriting/alphabet-sequence/lesson-6/cursive-handwriting-small-letters-s-z.php">Cursive handwriting Lesson #6 </a></li>
                    <li><a <?php if ($level1 == "1" and $level2 == "1" and $level3 == "7") { ?> class="bold" <?php } ?> href="../../../../../courses/english/cursive-handwriting/alphabet-sequence/lesson-7/how-to-join-letters.php">Cursive handwriting Lesson #7 </a></li>
                  <li><a <?php if ($level1 == "1" and $level2 == "1" and $level3 == "8") { ?> class="bold" <?php } ?> href="../../../../../courses/english/cursive-handwriting/alphabet-sequence/lesson-8/how-to-join-letters-one-line-notebook.php">Cursive handwriting Lesson #8 </a></li>
            </ul>
<?php } ?>
          </li>
        </ul>



<ul>
        <li><a <?php if ($level1 == "3" or $level1 == "11") { ?> class="bold" <?php } ?> href="../../../../../courses/english/english-handwriting/english-handwriting.php">English handwriting</a>
<?php if ($chapter == "3") { ?>
            <ul>
                  <li><a <?php if ($level1 == "3" and $level2 == "1" and $level3 == "1") { ?> class="bold" <?php } ?> href="../../../../../courses/english/english-handwriting/alphabet-sequence/lesson-1/english-handwriting-capital-letters-A-I.php">English handwriting Lesson #1 </a></li>
                  <li><a <?php if ($level1 == "3" and $level2 == "1" and $level3 == "2") { ?> class="bold" <?php } ?> href="../../../../../courses/english/english-handwriting/alphabet-sequence/lesson-2/english-handwriting-capital-letters-J-R.php">English handwriting Lesson #2 </a></li>
                  <li><a <?php if ($level1 == "3" and $level2 == "1" and $level3 == "3") { ?> class="bold" <?php } ?> href="../../../../../courses/english/english-handwriting/alphabet-sequence/lesson-3/english-handwriting-capital-letters-S-Z.php">English handwriting Lesson #3 </a></li>
            </ul>
<?php } ?>
          </li>
        </ul>



<ul>
        <li><a <?php if ($level1 == "2" or $level1 == "11") { ?> class="bold" <?php } ?> href="../../../../../courses/english/grammar/grammar.php">Grammar</a>
<?php if ($chapter == "2") { ?>
            <ul>
              <li><a <?php if ($level1 == "2" and $level2 == "1") { ?> class="bold" <?php } ?> href="../../../../../courses/english/grammar/vowels-consonants/lesson-1/english-grammar-vowels-and-consonants.php">Vowels and Consonants</a>
                <ul>
                  <li><a <?php if ($level1 == "2" and $level2 == "1" and $level3 == "1") { ?> class="bold" <?php } ?> href="../../../../../courses/english/grammar/vowels-consonants/lesson-1/english-grammar-vowels-and-consonants.php">Lesson #1 </a></li>
                </ul>
<li><a <?php if ($level1 == "2" and $level2 == "19") { ?> class="bold" <?php } ?> href="../../../../../courses/idioms.php">Idioms</a></li>
                  <ul>
                  <li><a <?php if ($level1 == "2" and $level2 == "19" and $level3 == "1") { ?> class="bold" <?php } ?> href="../../../../../courses/idioms_lesson_1.php">Idioms Lesson # 1</a></li>
                  <li><a <?php if ($level1 == "2" and $level2 == "19" and $level3 == "2") { ?> class="bold" <?php } ?> href="../../../../../courses/idioms_lesson_2.php">Idioms Lesson # 2</a></li>
                  <li><a <?php if ($level1 == "2" and $level2 == "19" and $level3 == "3") { ?> class="bold" <?php } ?> href="../../../../../courses/idioms_lesson_3.php">Idioms Lesson # 3</a></li>
                  <li><a <?php if ($level1 == "2" and $level2 == "19" and $level3 == "4") { ?> class="bold" <?php } ?> href="../../../../../courses/idioms_lesson_4.php">Idioms Lesson # 4</a></li>
                </ul>
              </li>
            </ul>
<?php } ?>
          </li>
        </ul>
      </nav>
<?php } ?>
