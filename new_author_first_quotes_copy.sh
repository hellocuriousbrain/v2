
[ -z $2 ] && { echo "Usage: sh new_author_first_quotes_copy.sh <Author Id> <Quote Number> <Photo Absolute Path>"; exit 1; }

QuotesAuthorId=$1
QuotesNumber=$2

URL=author/${QuotesAuthorId}/quotes
SampleURL=data/utility/sample/new_author_first_quotes

#Main Files, No Need to Edit
cp ${SampleURL}/new_author_sub.php ${URL}/$2/$1.php
cp ${SampleURL}/new_author_main.php ${URL}/$1.php

#Enter Quotes, Need to Edit
cp ${SampleURL}/new_author_quotes.php data/${URL}/$2/$1.php

#Enter About Author, Need to Edit
cp ${SampleURL}/new_author_about_short.php data/author/$1/about/short/$1.php

#Enter Title, Need to Edit
cp ${SampleURL}/title_new_author_sub.php data/title/${URL}/$2/title_$1.php
cp ${SampleURL}/title_new_author_main.php data/title/${URL}/title_$1.php

#Page Cover, No Need to Edit
cp ${SampleURL}/page_cover_new_author.php data/page_cover/${URL}/page_cover_$1.php

#Main Contain, No Need to Edit
cp ${SampleURL}/sub_page_content_new_author_sub.php data/sub_page_content/${URL}/$2/sub_page_content_$1.php
cp ${SampleURL}/sub_page_content_new_author_main.php data/sub_page_content/${URL}/sub_page_content_$1.php

#Social Media Share, Need to Edit
cp ${SampleURL}/sm_comment_new_author_sub.php data/sm_share/author/$1/$2/sm_share_$1.php
cp ${SampleURL}/sm_share_new_author_main.php data/sm_share/author/$1/sm_share_$1.php

#Social Media Comments, Need to Edit
cp ${SampleURL}/sm_comment_new_author_sub.php data/sm_comment/author/$1/$2/sm_comment_$1.php
cp ${SampleURL}/sm_comment_new_author_main.php data/sm_comment/author/$1/sm_comment_$1.php

#Data, Need to Edit
cp $3/profile_$1.jpg data/images/author/$1/profile/$1.jpg

cp $3/page_cover_$1.jpg data/images/author/$1/page_cover/quotes/$1.jpg

cp $3/$1_Quotes.jpg data/images/${URL}/$2/$1-Quotes.jpg

