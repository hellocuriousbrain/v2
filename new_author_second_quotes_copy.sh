
[ -z $2 ] && { echo "Usage: sh new_author_second_quotes_copy.sh <Author Id> <Quote Number> <Photo Absolute Path>"; exit 1; }


cp data/utility/sample/new_author_first_quotes/author/new_author/quotes/1/new_author.php author/$1/quotes/$2/$1.php
cp data/utility/sample/new_author_first_quotes/data/author/new_author/quotes/1/new_author.php data/author/$1/quotes/$2/$1.php
cp data/utility/sample/new_author_first_quotes/data/title/author/new_author/quotes/1/title_new_author.php data/title/author/$1/quotes/$2/title_$1.php
cp data/utility/sample/new_author_first_quotes/data/sub_page_content/author/new_author/quotes/1/sub_page_content_new_author.php data/sub_page_content/author/$1/quotes/$2/sub_page_content_$1.php
cp data/utility/sample/new_author_first_quotes/data/sub_page_content/author/new_author/quotes/sub_page_content_new_author.php data/sub_page_content/author/$1/quotes/sub_page_content_$1.php

cp data/utility/sample/new_author_first_quotes/data/sm_share/author/new_author/1/sm_share_new_author.php data/sm_share/author/$1/$2/sm_share_$1.php
cp data/utility/sample/new_author_first_quotes/data/sm_comment/author/new_author/1/sm_comment_new_author.php data/sm_comment/author/$1/$2/sm_comment_$1.php

cp $3/$1_Quotes.jpg data/images/author/$1/quotes/$2/$1_Quotes.jpg

