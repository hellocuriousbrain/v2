for file in page_cover*;
do
    echo $file;
    cp page_cover_About_Us.php $file;
done
