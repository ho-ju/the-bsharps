<?php include("../inc/global-stat-vars.php"); ?>

<?php

	// Getting the received JSON into $json variable.
	$json = file_get_contents('php://input');

	// decoding the received JSON and store into $obj variable.
 	$obj = json_decode($json,true);

 	// Populate Data
 	$R_T1 = $obj['rt1'];
 	$R_Res = $obj['res'];
 	$R_T2 = $obj['rt2'];
 	$R_gmPlayed = $obj['gmPlayed'];
 	$R_RID = $obj['roundID'];


 	// Creating SQL query and insert the record into MySQL database table.
	 $Sql_Query = "UPDATE tb_schedule SET resultT1='$R_T1', result='$R_Res', resultT2='$R_T2', gamePlayed='$R_gmPlayed' WHERE roundID='$R_RID'";
	 
	if(mysqli_query($con,$Sql_Query)){
	 
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
