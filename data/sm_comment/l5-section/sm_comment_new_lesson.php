<?php
function sub_page_comment($currentCourseName,$currentChapterName,$currentType,$currentLessonNumber,  $currpageId) {
?>

<div class="fb-comments" data-href="http://www.hellocuriousbrain.com/courses/<?php echo$currentCourseName ?>/<?php echo$currentChapterName ?>/<?php echo$currentType ?>/<?php echo$currentLessonNumber ?>/<?php echo$currpageId ?>.php" data-width="700" data-numposts="5"></div>

<?php } ?>

