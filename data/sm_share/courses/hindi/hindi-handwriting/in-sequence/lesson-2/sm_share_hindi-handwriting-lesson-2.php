<?php
function sub_page_share($currentCourseName,$currentChapterName,$currentType,$currentLessonNumber,  $currpageId) {
?>

<div class="fb-share-button" data-href="http://www.hellocuriousbrain.com/courses/<?php echo$currentCourseName ?>/<?php echo$currentChapterName ?>/<?php echo$currentType ?>/<?php echo$currentLessonNumber ?>/<?php echo$currpageId ?>.php" data-layout="box_count" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.hellocuriousbrain.com%2Fcourses%2F<?php echo$currentCourseName ?>%2F<?php echo$currentChapterName ?>%2F<?php echo$currentType ?>%2F<?php echo$currentLessonNumber ?>%2F<?php echo$currpageId ?>.php&amp;src=sdkpreparse">Share</a></div>

<?php } ?>

