<?php
	
	
	$hostname="localhost";
	$username="root";
	$password="Ytf(bkU3@q";
	$dbname="curiousbrain";
	$usertable="authorNumber";
	$yourfield = "number";
    $date_today = date("m") . date("d") ;

	mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
	mysql_select_db($dbname);
	
	# Check If Record Exists
	
    $query = "SELECT * FROM $usertable where date='$date_today'";
	
	$result = mysql_query($query);

	if($result){
        while($row = mysql_fetch_array($result)){
			$name = $row["$yourfield"];
			echo "Name: ".$name."<br/>";
		}
    }
    for( $i = 1; $i<=$name; $i++ ) {
    echo "ivalue: ".$i."<br/>";
         }
    
?>
