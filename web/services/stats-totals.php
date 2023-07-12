<?php include("../inc/global-stat-vars.php"); ?>

<?php

	$tPts = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, SUM(gmsPlayed) as gms, SUM(TotalPoints) as stat from tb_stats s, tb_players p WHERE s.PID = p.PID AND gmsPlayed > 0 $selected_season $selected_league $isFinals GROUP BY PID ORDER By stat DESC") or die(mysql_error());
	$t3pts = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, SUM(gmsPlayed) as gms, SUM(3PT) as stat from tb_stats s, tb_players p WHERE s.PID = p.PID AND gmsPlayed > 0 $selected_season $selected_league $isFinals GROUP BY PID ORDER By stat DESC") or die(mysql_error());
	$tFouls = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, SUM(gmsPlayed) as gms, SUM(Fouls) as stat from tb_stats s, tb_players p WHERE s.PID = p.PID AND gmsPlayed > 0 $selected_season $selected_league $isFinals GROUP BY PID ORDER By stat DESC") or die(mysql_error());
	$tFta = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, SUM(gmsPlayed) as gms, SUM(FTA) as stat from tb_stats s, tb_players p WHERE s.PID = p.PID AND gmsPlayed > 0 $selected_season $selected_league $isFinals GROUP BY PID ORDER By stat DESC") or die(mysql_error());
	$tFtm = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, SUM(gmsPlayed) as gms, SUM(FTM) as stat from tb_stats s, tb_players p WHERE s.PID = p.PID AND gmsPlayed > 0 $selected_season $selected_league $isFinals GROUP BY PID ORDER By stat DESC") or die(mysql_error());
	$tFtp = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, SUM(gmsPlayed) as gms, ROUND(SUM(FTM)/SUM(FTA) * 100 ,1) as stat from tb_stats s, tb_players p WHERE s.PID = p.PID AND gmsPlayed > 0 $selected_season $selected_league $isFinals GROUP BY PID ORDER By stat DESC") or die(mysql_error());

	$aPts = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, SUM(gmsPlayed) as gms, ROUND(SUM(TotalPoints) / SUM(gmsPlayed),1) as stat from tb_stats s, tb_players p WHERE s.PID = p.PID AND gmsPlayed > 0 $selected_season $selected_league $isFinals GROUP BY PID ORDER By stat DESC") or die(mysql_error());
	$a3pts = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, SUM(gmsPlayed) as gms, ROUND(SUM(3PT) / SUM(gmsPlayed),1) as stat from tb_stats s, tb_players p WHERE s.PID = p.PID AND gmsPlayed > 0 $selected_season $selected_league $isFinals GROUP BY PID ORDER By stat DESC") or die(mysql_error());
	$aFouls = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, SUM(gmsPlayed) as gms, ROUND(SUM(Fouls) / SUM(gmsPlayed),1) as stat from tb_stats s, tb_players p WHERE s.PID = p.PID AND gmsPlayed > 0 $selected_season $selected_league $isFinals GROUP BY PID ORDER By stat DESC") or die(mysql_error());
	$aFta = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, SUM(gmsPlayed) as gms, ROUND(SUM(FTA) / SUM(gmsPlayed),1) as stat from tb_stats s, tb_players p WHERE s.PID = p.PID AND gmsPlayed > 0 $selected_season $selected_league $isFinals GROUP BY PID ORDER By stat DESC") or die(mysql_error());
	$aFtm = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, SUM(gmsPlayed) as gms, ROUND(SUM(FTM) / SUM(gmsPlayed),1) as stat from tb_stats s, tb_players p WHERE s.PID = p.PID AND gmsPlayed > 0 $selected_season $selected_league $isFinals GROUP BY PID ORDER By stat DESC") or die(mysql_error());

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

	while($r = mysqli_fetch_assoc($tPts)) {
	    $rows[] = $r;
	}
	while($r2 = mysqli_fetch_assoc($t3pts)) {
	    $rows2[] = $r2;
	}
	while($r3 = mysqli_fetch_assoc($tFouls)) {
	    $rows3[] = $r3;
	}
	while($r4 = mysqli_fetch_assoc($tFta)) {
	    $rows4[] = $r4;
	}
	while($r5 = mysqli_fetch_assoc($tFtm)) {
	    $rows5[] = $r5;
	}
	while($r6 = mysqli_fetch_assoc($tFtp)) {
	    $rows6[] = $r6;
	}
	while($r7 = mysqli_fetch_assoc($aPts)) {
	    $rows7[] = $r7;
	}
	while($r8 = mysqli_fetch_assoc($a3pts)) {
	    $rows8[] = $r8;
	}
	while($r9 = mysqli_fetch_assoc($aFouls)) {
	    $rows9[] = $r9;
	}
	while($r10 = mysqli_fetch_assoc($aFta)) {
	    $rows10[] = $r10;
	}
	while($r11 = mysqli_fetch_assoc($aFtm)) {
	    $rows11[] = $r11;
	}

	$ttlPts = array("ttlPts" => $rows);
	$ttl3pts = array("ttl3pts" => $rows2);
	$ttlFouls = array("ttlFouls" => $rows3);
	$ttlFTA = array("ttlFTA" => $rows4);
	$ttlFTM = array("ttlFTM" => $rows5);
	$ttlFTP = array("ttlFTP" => $rows6);
	$avgPts = array("avgPts" => $rows7);
	$avg3pts = array("avg3pts" => $rows8);
	$avgFouls = array("avgFouls" => $rows9);
	$avgFTA = array("avgFTA" => $rows10);
	$avgFTM = array("avgFTM" => $rows11);
	$avgFTP = array("avgFTP" => $rows12);

	print json_encode($ttlPts + $ttl3pts + $ttlFouls + $ttlFTA + $ttlFTM + $ttlFTP + $avgPts + $avg3pts + $avgFouls + $avgFTA + $avgFTM, JSON_NUMERIC_CHECK);

?>
