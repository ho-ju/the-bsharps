<?php include("../inc/global-stat-vars.php"); ?>

<?php

	$sth = mysqli_query($con, "SELECT * FROM `tb_schedule` WHERE gamePlayed = 1 order by roundID desc limit 0,1") or die(mysql_error());

	$rows = array();

	while($r = mysqli_fetch_assoc($sth)) {
	    $rows[] = $r;
	}

	$latestRound = array("latestRound" => $rows);

	print json_encode($latestRound, JSON_NUMERIC_CHECK);

?>
