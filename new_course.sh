
#CourseName   :- english 
#ChapterName  :- cursive-handwriting 
#CourseType   :- alphabet-sequence 
#LessonNumber :- lesson-1 
#PageName     :- cursive-handwriting-capital-letters-A-I

[ -z $5 ] && { echo "Usage: sh new_course.sh <CourseName> <ChapterName>
<CourseType> <LessonNumber> <PageName>"; exit 1; }


CourseName=$1
ChapterName=$2
CourseType=$3
LessonNumber=$4
PageName=$5

URL=courses/$CourseName/$ChapterName/$CourseType/$LessonNumber/

#mkdir 

#Main File 
mkdir -p ${URL}

#metadata
mkdir -p data/metadata/${URL}

#Page Cover
mkdir -p data/page_cover/${URL}

#Main Contain 
mkdir -p data/sub_page_content/${URL}

#Social Media
mkdir -p data/sm_comment/${URL}
mkdir -p data/sm_share/${URL}

#Images Folder :-
mkdir -p data/images/${URL}/page_cover/


#Copy :-

#Main File :- No edit
cp data/utility/sample/new_lesson_course/new_lesson.php ${URL}/${PageName}.php

#Page-Cover :- Edit
cp data/utility/sample/new_lesson_course/page_cover_new_lesson.php data/page_cover/${URL}/page_cover_${PageName}.php

#Main Contain :- Edit
cp data/utility/sample/new_lesson_course/sub_page_content_new_lesson.php data/sub_page_content/${URL}/sub_page_content_${PageName}.php

#Social Media Comments :- Edit
#cp data/utility/sample/new_lesson_course/sm_comment_new_lesson.php data/sm_comment/${URL}/sm_comment_${PageName}.php
#cp data/utility/sample/new_lesson_course/sm_share_new_lesson.php data/sm_share/${URL}/sm_share_${PageName}.php

#Title :- Edit
cp data/utility/sample/new_lesson_course/new_metadata.php data/metadata/${URL}/metadata_${PageName}.php


#Images Copy
cp data/utility/sample/new_lesson_course/page_cover_new_course.jpg data/images/${URL}/page_cover/${PageName}.jpg

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

