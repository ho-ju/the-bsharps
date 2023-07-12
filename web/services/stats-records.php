<?php include("../inc/global-stat-vars.php"); ?>

<?php

	$tPts = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, TotalPoints as stat, DATE_FORMAT(s.date,'%b ''%y') as date, sc.seasonID, sc.comp FROM tb_stats s, tb_players p, tb_schedule sc WHERE s.pid = p.pid and s.roundID = sc.roundID $selected_season $selected_league $isFinals ORDER BY stat desc, s.date DESC, p.PName ASC LIMIT 0,5") or die(mysql_error());
	$t3pts = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, 3PT as stat, DATE_FORMAT(s.date,'%b ''%y') as date, sc.seasonID, sc.comp FROM tb_stats s, tb_players p, tb_schedule sc WHERE s.pid = p.pid and s.roundID = sc.roundID $selected_season $selected_league $isFinals ORDER BY stat desc, s.date DESC, p.PName ASC LIMIT 0,5") or die(mysql_error());
	$tFouls = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, Fouls as stat, DATE_FORMAT(s.date,'%b ''%y') as date, sc.seasonID, sc.comp FROM tb_stats s, tb_players p, tb_schedule sc WHERE s.pid = p.pid and s.roundID = sc.roundID $selected_season $selected_league $isFinals ORDER BY stat desc, s.date DESC, p.PName ASC LIMIT 0,5") or die(mysql_error());
	$tFta = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, FTA as stat, DATE_FORMAT(s.date,'%b ''%y') as date, sc.seasonID, sc.comp FROM tb_stats s, tb_players p, tb_schedule sc WHERE s.pid = p.pid and s.roundID = sc.roundID $selected_season $selected_league $isFinals ORDER BY stat desc, s.date DESC, p.PName ASC LIMIT 0,5") or die(mysql_error());
	$tFtm = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, FTM as stat, DATE_FORMAT(s.date,'%b ''%y') as date, sc.seasonID, sc.comp FROM tb_stats s, tb_players p, tb_schedule sc WHERE s.pid = p.pid and s.roundID = sc.roundID $selected_season $selected_league $isFinals ORDER BY stat desc, s.date DESC, p.PName ASC LIMIT 0,5") or die(mysql_error());
	$tFtp = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, ROUND((FTM)/(FTA) * 100 ,1) as stat, DATE_FORMAT(s.date,'%b ''%y') as date, sc.seasonID, sc.comp FROM tb_stats s, tb_players p, tb_schedule sc WHERE s.pid = p.pid and s.roundID = sc.roundID $selected_season $selected_league $isFinals ORDER BY stat desc, s.date DESC, p.PName ASC LIMIT 0,5") or die(mysql_error());
	$tGms = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, p.active, SUM(gmsPlayed) as stat from tb_stats s, tb_players p WHERE s.PID = p.PID $selected_season $selected_league $isFinals GROUP BY PID ORDER By stat DESC LIMIT 0,5") or die(mysql_error());

	$aPts = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, DATE_FORMAT(s.date,'%b ''%y') as date, s.seasonID, s.comp, SUM(gmsPlayed) as gms, ROUND(SUM(TotalPoints) / SUM(gmsPlayed),1) as stat from tb_stats s, tb_players p WHERE s.PID = p.PID $selected_season $selected_league $isFinals GROUP BY seasonID, PID ORDER By stat DESC LIMIT 0,5") or die(mysql_error());
	$a3pts = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, DATE_FORMAT(s.date,'%b ''%y') as date, s.seasonID, s.comp, SUM(gmsPlayed) as gms, ROUND(SUM(3PT) / SUM(gmsPlayed),1) as stat from tb_stats s, tb_players p WHERE s.PID = p.PID $selected_season $selected_league $isFinals GROUP BY seasonID, PID ORDER By stat DESC LIMIT 0,5") or die(mysql_error());
	$aFouls = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, DATE_FORMAT(s.date,'%b ''%y') as date, s.seasonID, s.comp, SUM(gmsPlayed) as gms, ROUND(SUM(Fouls) / SUM(gmsPlayed),1) as stat from tb_stats s, tb_players p WHERE s.PID = p.PID $selected_season $selected_league $isFinals GROUP BY seasonID, PID ORDER By stat DESC LIMIT 0,5") or die(mysql_error());
	$aFta = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, DATE_FORMAT(s.date,'%b ''%y') as date, s.seasonID, s.comp, SUM(gmsPlayed) as gms, ROUND(SUM(FTA) / SUM(gmsPlayed),1) as stat from tb_stats s, tb_players p WHERE s.PID = p.PID $selected_season $selected_league $isFinals GROUP BY seasonID, PID ORDER By stat DESC LIMIT 0,5") or die(mysql_error());
	$aFtm = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, DATE_FORMAT(s.date,'%b ''%y') as date, s.seasonID, s.comp, SUM(gmsPlayed) as gms, ROUND(SUM(FTM) / SUM(gmsPlayed),1) as stat from tb_stats s, tb_players p WHERE s.PID = p.PID $selected_season $selected_league $isFinals GROUP BY seasonID, PID ORDER By stat DESC LIMIT 0,5") or die(mysql_error());
	$aFtp = mysqli_query($con, "SELECT p.pid, p.pname, p.pNo, p.posAbbr, p.height, p.url, p.image, DATE_FORMAT(s.date,'%b ''%y') as date, s.seasonID, s.comp, ROUND(SUM(FTM)/SUM(FTA) * 100 ,1) as stat from tb_stats s, tb_players p WHERE s.PID = p.PID $selected_season $selected_league $isFinals GROUP BY seasonID, PID ORDER By stat DESC LIMIT 0,5") or die(mysql_error());

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
	while($r12 = mysqli_fetch_assoc($aFtp)) {
	    $rows12[] = $r12;
	}
	while($r13 = mysqli_fetch_assoc($tGms)) {
	    $rows13[] = $r13;
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
	$ttlGms = array("ttlGms" => $rows13);

	print json_encode($ttlPts + $ttl3pts + $ttlFouls + $ttlFTA + $ttlFTM + $ttlFTP + $avgPts + $avg3pts + $avgFouls + $avgFTA + $avgFTM + $avgFTP + $ttlGms, JSON_NUMERIC_CHECK);

?>
