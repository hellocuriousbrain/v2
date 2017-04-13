[ -z $3 ] && { echo "Usage: sh new_author_first_quotes_copy.sh <Author Id> <Photo Absolute Path> <Flop 0 or 1>"; exit 1; }


Author_Id=$1
Absolute_Path=$2
Flop=$3
sh new_author_first_mkdir.sh $Author_Id 1;
sh new_author_first_quotes_copy.sh $Author_Id 1 $Absolute_Path $Flop;
sh new_author_second_mkdir.sh $Author_Id 2;
sh new_author_second_quotes_copy.sh $Author_Id 2 $Absolute_Path;
sh new_author_second_mkdir.sh $Author_Id 3;
sh new_author_second_quotes_copy.sh $Author_Id 3 $Absolute_Path;
