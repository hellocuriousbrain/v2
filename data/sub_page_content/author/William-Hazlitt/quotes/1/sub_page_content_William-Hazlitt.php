<?php
function sub_page_content($currQuoteAutherId,$currentQuoteNumber) {
    $hostname="localhost";
	$username="root";
	$password="Ytf(bkU3@q";
    $dbname="curiousbrain";
    $authorRecordTable="authorRecord";
    $nameField = "name";
    $uniqueIdField = "uniqueId";
    $author_idField = "author_id";
    
	mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
    mysql_select_db($dbname);
    $authorRecordGetQuery = "SELECT * FROM $authorRecordTable where author_id='$currQuoteAutherId'";
    $resultRecord = mysql_query($authorRecordGetQuery);

	if($resultRecord){
        while($row = mysql_fetch_array($resultRecord)){
			$authorName = $row["$nameField"];
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
    <?php include "../../../../data/left_menu/left_menu_author_quotes.php";
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
   
    <h1 class="center"> <?php echo $authorName ?> Quotes </h1>

        <div class="borderedbox_quotes">
            <ul class="nospace btmspace-10 group font-xs">
                <li class="fl_left">
                <a class="font_size_32"> #<?php echo $currentQuoteNumber ?> </a>
                </li>
                <li class="fl_right"> <a class="font_size_30" href="../../../../author/<?php echo $authorId ?>/quotes/<?php echo $authorId ?>.php">By <?php echo $authorName ?></a></li>
            </ul>
            <hr class="quotes_main">
            <img class="imgl borderedbox inspace-5" src="../../../../data/images/author/<?php echo $authorId ?>/quotes/<?php echo $currentQuoteNumber ?>/<?php echo $authorId ?>-Quotes.jpg" alt="">
            <p class="font_size_30 center">
            <?php include "../../../../data/author/$authorId/quotes/$currentQuoteNumber/$authorId.php"; ?>
            </p>
            <br>
            <div class="borderedbox ">
                <br>
                <h3 class="heading_h3 center">
                <a href="../../../../author/<?php echo $authorId ?>/quotes/<?php echo $authorId ?>.php"> About <?php echo $authorName ?> </a>
                </h3>
                <hr class="quotes_about">
                <img class="imgl borderedbox inspace-5" src="../../../../data/images/author/<?php echo $authorId ?>/profile/<?php echo $authorId ?>.jpg" alt="">
                <p>
                <?php include "../../../../data/author/$authorId/about/short/$authorId.php"; ?>
                </p>
                <br>
            </div>

            <p class="font_size_24" >
            <a  class="fl_right" href="../../../../author/<?php echo $authorId ?>/quotes/<?php echo $authorId ?>.php"> Check more <?php echo $authorName ?> Quotes »</a>
            </p>
            <br>
            <br>
        </div>

        <br>
        <br>

        <div id="comments">
            <h2>Write A Comment</h2>
            <?php include "../../../../data/sm_comment/author/$authorId/$currentQuoteNumber/sm_comment_$authorId.php"; ?> 
        </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear">
    </div>
  </main>
</div>


    <!-- / FB share  -->
<div id="facebook_share">
    <div class="sm_share">
        <?php include "../../../../data/sm_share/author/$authorId/$currentQuoteNumber/sm_share_$authorId.php"; ?> 
    </div>
</div>

<?php } ?>

