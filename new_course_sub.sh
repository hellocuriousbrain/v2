
#CourseName   :- english 
#ChapterName  :- cursive-handwriting 
#PageName     :- cursive-handwriting-capital-letters-A-I

[ -z $3 ] && { echo "Usage: sh new_course.sh <CourseName> <ChapterName>
 <PageName>"; exit 1; }


CourseName=$1
ChapterName=$2
#CourseType=$3
#LessonNumber=$4
PageName=$3

#URL=courses/$CourseName/$ChapterName/$CourseType/$LessonNumber/

#mkdir 

#Main File 
#mkdir -p ${URL}

#touch courses/$CourseName/$ChapterName/${PageName}.php

#title
#mkdir -p data/title/${URL}

#Page Cover
#mkdir -p data/page_cover/${URL}

#Main Contain 
#mkdir -p data/sub_page_content/${URL}

#Social Media
#mkdir -p data/sm_comment/${URL}
#mkdir -p data/sm_share/${URL}

#Images Folder :-
#mkdir -p data/images/${URL}/page_cover/


#Copy :-

#Main File :- No edit
cp data/utility/sample/l3-page/MainPage.php courses/$CourseName/$ChapterName/${PageName}.php

#Page-Cover :- Edit
cp data/utility/sample/l3-page/page_cover_MainPage.php data/page_cover/courses/$CourseName/$ChapterName/page_cover_${PageName}.php

#Main Contain :- Edit
cp data/utility/sample/l3-page/sub_page_content_MainPage.php data/sub_page_content/courses/$CourseName/$ChapterName/sub_page_content_${PageName}.php

#Social Media Comments :- Edit
cp data/utility/sample/l3-page/sm_comment_MainPage.php data/sm_comment/courses/$CourseName/$ChapterName/sm_comment_${PageName}.php
cp data/utility/sample/l3-page/sm_share_MainPage.php data/sm_share/courses/$CourseName/$ChapterName/sm_share_${PageName}.php

#Title :- Edit
cp data/utility/sample/l3-page/new_title.php data/title/courses/$CourseName/$ChapterName/title_${PageName}.php


#Images Copy
cp data/utility/sample/new_lesson_course/page_cover_new_course.png data/images/courses/$CourseName/$ChapterName/page_cover/${PageName}.png

#Main Page :-
#courses/english/cursive-handwriting/alphabet-sequence/lesson-1/cursive-handwriting-capital-letters-A-I.php

#Page-Cover :-
#data/page_cover/courses/english/cursive-handwriting/alphabet-sequence/lesson-1/page_cover_cursive-handwriting-capital-letters-A-I.php

#sm Comment :-
#data/sm_comment/courses/english/cursive-handwriting/alphabet-sequence/lesson-1/sm_comment_cursive-handwriting-capital-letters-A-I.php

#sm Share :-
#data/sm_share/courses/english/cursive-handwriting/alphabet-sequence/lesson-1/sm_share_cursive-handwriting-capital-letters-A-I.php

#Main Contain :-
#data/sub_page_content/courses/english/cursive-handwriting/alphabet-sequence/lesson-1/sub_page_content_cursive-handwriting-capital-letters-A-I.php

#Title :-
#data/title/courses/english/cursive-handwriting/alphabet-sequence/lesson-1/title_cursive-handwriting-capital-letters-A-I.php

# Images:-
#data/images/courses/english/cursive-handwriting/alphabet-sequence/lesson-1/page_cover/cursive-handwriting-capital-letters-A-I.png

