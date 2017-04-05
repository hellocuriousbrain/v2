
[ -z $2 ] && { echo "Usage: sh new_author_second_mkdir.sh <Author Id> <Quote Number>"; exit 1; }


mkdir -p author/$1/quotes/$2/
mkdir -p data/author/$1/quotes/$2/
mkdir -p data/title/author/$1/quotes/$2/
mkdir -p data/sub_page_content/author/$1/quotes/$2/
mkdir -p data/images/author/$1/quotes/$2/
mkdir -p data/sm_share/author/$1/$2/
mkdir -p data/sm_comment/author/$1/$2/
