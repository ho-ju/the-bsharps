<?php include("../inc/global-stat-vars.php"); ?>

<?php

	$sth = mysqli_query($con, "SELECT * FROM tb_players ORDER BY active DESC, RAND()") or die(mysql_error());

	$rows = array();
	$rows2 = array();
	$rows3 = array();
	$rows9 = array();

	while($r = mysqli_fetch_assoc($sth)) {
	    $rows[] = $r;
	}

	$players = array("players" => $rows);

	print json_encode($players, JSON_NUMERIC_CHECK);

?>
