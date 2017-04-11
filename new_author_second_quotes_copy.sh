
[ -z $3 ] && { echo "Usage: sh new_author_second_quotes_copy.sh <Author Id> <Quote Number> <Photo Absolute Path>"; exit 1; }

QuotesAuthorId=$1
QuotesNumber=$2

URL=author/${QuotesAuthorId}/quotes
SampleURL=data/utility/sample/new_author_first_quotes

#Main Files, No Need to Edit
cp ${SampleURL}/new_author_sub.php ${URL}/$2/$1.php

#Enter Quotes, Need to Edit
cp ${SampleURL}/new_author_quotes.php data/${URL}/$2/$1.php

#Enter Title, Need to Edit
cp ${SampleURL}/title_new_author_sub.php data/title/${URL}/$2/title_$1.php

#Main Contain, No Need to Edit
#cp ${SampleURL}/sub_page_content_new_author_sub.php data/sub_page_content/${URL}/$2/sub_page_content_$1.php

#Data, Need to Edit
cp $3/$1_Quotes.jpg data/images/${URL}/$2/$1-Quotes.jpg

#Social Media Share, Need to Edit
cp ${SampleURL}/sm_share_new_author_sub.php ${SampleURL}/sm_share_new_author_sub_modify.php 
sed -i "s/new-author/$QuotesAuthorId/g" ${SampleURL}/sm_share_new_author_sub_modify.php 
sed -i "s/quotes-number/$QuotesNumber/g" ${SampleURL}/sm_share_new_author_sub_modify.php 
mv ${SampleURL}/sm_share_new_author_sub_modify.php  data/sm_share/author/$1/$2/sm_share_$1.php

#Social Media Comments, Need to Edit
cp ${SampleURL}/sm_comment_new_author_sub.php ${SampleURL}/sm_comment_new_author_sub_modify.php
sed -i "s/new-author/$QuotesAuthorId/g" ${SampleURL}/sm_comment_new_author_sub_modify.php
sed -i "s/quotes-number/$QuotesNumber/g" ${SampleURL}/sm_comment_new_author_sub_modify.php
mv ${SampleURL}/sm_comment_new_author_sub_modify.php data/sm_comment/author/$1/$2/sm_comment_$1.php

#Data, Need to Edit

convert $3/Quotes/$QuotesAuthorId/$2/3_*.png $3/Quotes/$QuotesAuthorId/$2/${1}_Quotes.jpg
jpegoptim --size=65% $3/Quotes/$QuotesAuthorId/$2/${1}_Quotes.jpg
cp $3/Quotes/$QuotesAuthorId/$2/${1}_Quotes.jpg data/images/author/$1/quotes/$2/${1}-Quotes.jpg
chmod 777 data/images/author/$1/quotes/$2/${1}-Quotes.jpg
