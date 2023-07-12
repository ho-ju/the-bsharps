<?php include("../inc/global-stat-vars.php"); ?>

<?php

	$sth = mysqli_query($con, "SELECT p.pid, p.pname, p.pNickName, p.PNameFirst, p.PNameLast, p.pNo, p.posAbbr, p.height, p.url, gmsPlayed, ROUND(TtlPts,2) as TtlPts, ROUND(Ttl3pts,2) as Ttl3pts,ROUND(TtlFTM,2) as TtlFTM, ROUND(TtlFTA,2) as TtlFTA, ROUND(ttlMFT,2) as TtlMFT, ROUND(FTP,2) as FTP, ROUND(TtlFouls,2) as TtlFouls, ROUND(((TtlPts + Ttl3pts + TtlFTM + TtlFTA + IFNULL(FTP, 0) + TtlFouls)) - (TtlMFT * 2),2) as TOTAL from $selected_pers v, tb_players p where p.PID = v.PID order by total desc") or die(mysql_error());

	$rows = array();
	$rows2 = array();
	$rows3 = array();
	$rows4 = array();
	$rows5 = array();
	$rows6 = array();
	$rows7 = array();
	$rows8 = array();
	$rows9 = array();
	$rows10 = array();
	$rows11 = array();
	$rows12 = array();
	$rows13 = array();
	$rows14 = array();
	$rows15 = array();
	$rows16 = array();
	$rows17 = array();

	while($r = mysqli_fetch_assoc($sth)) {
	    $rows[] = $r;
	}

	$pers = array("pers" => $rows);

	print json_encode($pers, JSON_NUMERIC_CHECK);

?>
