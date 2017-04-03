
[ -z $2 ] && { echo "Usage: sh new_author_content_second_echo.sh <Author Id> <Quote Number>"; exit 1; }


#Quotes :-
echo "Add Quotes Here" > data/author/$1/quotes/$2/$1.php

#Title
echo "<title> Add Quote Here </title>" > data/title/author/$1/quotes/$2/title_$1.php
