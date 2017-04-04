<?php
function left_menu_fun($currQuoteAutherId, $authorRecordTable,$uniqueIdFieldVal,$nameField,$author_idField) {
?>
<h2> Quick Links </h2>
      <nav class="sdb_holder">
        <ul>
<?php
    $authorRecordCountGetQuery = "SELECT * FROM $authorRecordTable";
    $countRecord = mysql_query($authorRecordCountGetQuery);
    $totalRows = mysql_num_rows($countRecord);
    $rowExceedVal = $totalRows-4;

    $currentUniqueIdVal = $uniqueIdFieldVal;
    if($uniqueIdFieldVal > 4 && $uniqueIdFieldVal <= $rowExceedVal ){
        $leftUniqueIdVal = $uniqueIdFieldVal-4 ;
    }elseif($uniqueIdFieldVal <= 4){
        $leftUniqueIdVal = $uniqueIdFieldVal ;
    }elseif( $uniqueIdFieldVal > $rowExceedVal){
        $leftUniqueIdVal = $uniqueIdFieldVal-8;
    }

    for ($i = 0;$i <= 8; $i++ ){
    $authorRecordNameGetQuery = "SELECT * FROM $authorRecordTable where uniqueId='$leftUniqueIdVal'";
    $resultNameRecord = mysql_query($authorRecordNameGetQuery);

	if($resultNameRecord){
        while($row = mysql_fetch_array($resultNameRecord)){
			$authorLeftName = $row["$nameField"];
			$authorLeftId = $row["$author_idField"];
		}
    }
    $leftUniqueIdVal++;
?>
        <li><a <?php if ($currentUniqueIdVal == $leftUniqueIdVal) { ?> class="bold" <?php } ?> href="../../../../author/<?php echo $authorLeftId ?>/quotes/<?php echo $authorLeftId ?>.php"><?php echo $authorLeftName ?></a>
          </li>


<?php } ?>

        </ul>
      </nav>
<?php } ?>
