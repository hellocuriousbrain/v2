<?php
function sub_page_content($currQuoteAutherId,$currentQuoteNumber) {
    $hostname="localhost";
	$username="root";
	$password="Ytf(bkU3@q";
    $dbname="curiousbrain";
    $authorRecordTable="authorRecord";
    $nameField = "name";
    $numberOfQuotesField = "numberOfQuotes";
    $uniqueIdField = "uniqueId";
    $author_idField = "author_id";
    
    
    mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
	mysql_select_db($dbname);
	$authorRecordGetQuery = "SELECT * FROM $authorRecordTable where author_id='$currQuoteAutherId'";
    $resultRecord = mysql_query($authorRecordGetQuery);
    
    if($resultRecord){
        while($row = mysql_fetch_array($resultRecord)){
            $authorName = $row["$nameField"];
            $quotesNumber = $row["$numberOfQuotesField"];
            $uniqueIdFieldVal = $row["$uniqueIdField"];
            $authorId = $currQuoteAutherId;
        }
    }
?>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first"> 
      <!-- ################################################################################################ -->
        <?php include "../../../data/left_menu/left_menu_author_quotes.php";
	    left_menu_fun($currQuoteAutherId,$authorRecordTable, $uniqueIdFieldVal,$nameField,$author_idField);
    ?>

        <div class="sdb_holder">
        
        </div>
        <div class="sdb_holder">
        
        </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    
    <div class="content three_quarter"> 
      <!-- ################################################################################################ -->

        <?php
	    
        ?>
        <h1 class="center"> <?php echo $authorName ?> Quotes </h1>

        <?php
            for( $i = 1; $i<=$quotesNumber; $i++ ) {
            ?>

            <br>
            <div class="borderedbox_quotes">
                <ul class="nospace btmspace-10 group font-xs">
                    <li class="fl_left">

                    <a class="font_size_32"> #<?php echo $i ?> </a>
                    </li>
                    <li class="fl_right"> <a class="font_size_30" href="../../../../author/<?php echo $authorId ?>/quotes/<?php echo $authorId ?>.php">By <?php echo $authorName ?></a></li>
                </ul>
                <hr class="quotes_main">
                <a href="../../../../author/<?php echo $authorId ?>/quotes/<?php echo $i ?>/<?php echo $authorId ?>.php"><img class="imgl borderedbox inspace-5" src="../../../data/images/author/<?php echo $authorId ?>/quotes/<?php echo $i ?>/<?php echo $authorId ?>_Quotes.jpg" alt=""></a>
                <p class="font_size_30 center">
                <?php include "../../../data/author/$authorId/quotes/$i/$authorId.php"; ?>

                </p>
                <br>
                <div class="borderedbox ">
                    <br>
                    <h3 class="heading_h3 center">
                    <a href="../../../../author/<?php echo $authorId ?>/quotes/<?php echo $authorId ?>.php"> About <?php echo $authorName ?> </a>
                    </h3>
                    <hr class="quotes_about">
                    <img class="imgl borderedbox inspace-5" src="../../../data/images/author/<?php echo $authorId ?>/profile/<?php echo $authorId ?>.jpg" alt="">
                    <p>
                    <?php include "../../../data/author/$authorId/about/short/$authorId.php"; ?>
                    </p>
                    <br>
                </div>
                <br>
                <br>
            </div>
        <?php } ?>
        <br>
        <br>

        <div id="comments">
            <h2>Write A Comment</h2>
            <div class="fb-comments" data-href="http://www.hellocuriousbrain.com/courses/idioms.php" data-width="900" data-numposts="5"></div>
        </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
    <!-- / FB share  -->
<div id="facebook_share">
    <div class="sm_share">
        <div class="fb-share-button" data-href="http://www.hellocuriousbrain.com/courses/courses.php" data-layout="box_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.hellocuriousbrain.com%2Fcourses%2Fcourses.php&amp;src=sdkpreparse">Share</a></div>
    </div>
</div>

<?php } ?>

