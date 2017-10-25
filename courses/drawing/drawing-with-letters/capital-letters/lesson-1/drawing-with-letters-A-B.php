<?php
    // Url structure
    //courses/english/cursive-handwriting/alphabet-sequence/lesson-1/cursive-handwriting-capital-letters-A-I.php
    $path = $_SERVER['REQUEST_URI']; // this gives you /folder1/folder2/THIS_ONE/file.php
    $folders = explode("/", $path); // splits folders in array
    $currentCourseName = $folders[2];
    $currentChapterName = $folders[3];
    $currentType = $folders[4];
    $currentLessonNumber = $folders[5];
	$currpage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
	$currpageId = substr($currpage, 0 , -4);
	include '../../../../../data/common/misc/new_drawing-with-capital-letters_sub_page.php';
	new_page($currentCourseName,$currentChapterName, $currentType, $currentLessonNumber, $currpageId); 
?>
