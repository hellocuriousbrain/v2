
[ -z $2 ] && { echo "Usage: sh new_author_content_first_echo.sh <Author Id> <Quote Number>"; exit 1; }



#Quotes :-
echo "Add Quotes Here" > data/author/$1/quotes/$2/$1.php

#About short:-
echo "Add About Here" > data/author/$1/about/short/$1.php

#Title
echo "<title> Add Quotes Here :- Add Author Name here - Curious
Brain </title>" > data/title/author/$1/quotes/$2/title_$1.php

#Author Quotes Title
echo "<title> Add Author Name here Quotes - Curious Brain </title>" > data/title/author/$1/quotes/title_$1.php
