<?php include("../inc/global-stat-vars.php"); ?>

<?php

	// Getting the received JSON into $json variable.
	$json = file_get_contents('php://input');

	// decoding the received JSON and store into $obj variable.
 	$obj = json_decode($json,true);

 	// Populate Data
 	$R_ROUND = $obj['round'];
 	$R_RID = $obj['roundID'];
 	$R_SID = $obj['seasonID'];
 	$R_FINAL = $obj['final'];
 	$R_COMP = $obj['comp'];
 	$date = date('Y-m-d H:i:s');
 	$i = 1;
 	$Sql_Query = "";

 	// Creating SQL query and insert the record into MySQL database table.
 	foreach($obj['players'] as $item) {
		$inserts[] = "('$R_ROUND', '$R_RID', '".$item['pid']."', '".$item['formControlsTextPts'.$i]."', '".$item['formControlsTextFTA'.$i]."', '".$item['formControlsTextFTM'.$i]."', '".$item['formControlsText3pt'.$i]."', '".$item['formControlsTextFls'.$i]."', '".$item['played']."', '$R_SID', '$R_FINAL', '$R_COMP', '$date')";
		$i++;
	}
	 
	if(mysqli_query($con, 'INSERT INTO `tb_stats` (`Round`, RoundID, `PID`, `TotalPoints`, `FTA`, `FTM`, `3PT`, `Fouls`, `GmsPlayed`, `seasonID`, `final`, comp, date) VALUES' .implode(',',$inserts))){
	 
		 // If the record inserted successfully then show the message.
		$MSG = 'Record Successfully Inserted Into MySQL Database.' ;
	 
		// Converting the message into JSON format.
		$json = json_encode($MSG);
		 
		// Echo the message.
		 echo $json ;
	 
	 }

	 else{
	 	echo 'Try Again';
	 }

	 mysqli_close($con);

?>
