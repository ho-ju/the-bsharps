<?php include("../inc/global-stat-vars.php"); ?>

<?php

	$sth = mysqli_query($con, "SELECT roundID, roundName, t.teamname as t1, tv.teamname as t2, s.date, DATE_FORMAT(s.date,'%a, %b %D') as dateF, DATE_FORMAT(s.date,'%a') as day, DATE_FORMAT(time, '%l:%i %p') as time, venue, seasonID, comp, resultT1, result, resultT2, tv.tid as t2id, grading FROM tb_schedule s, tb_teams t, tb_teams_vs tv WHERE t.tid = s.team1 and tv.tid = s.team2 $selected_season $selected_league Group by roundID Order by s.date asc") or die(mysql_error());

	$totalsSummary = mysqli_query($con, "SELECT (SELECT COUNT(Result) AS totals FROM tb_schedule s, tb_teams t WHERE t.tid = s.team1 and s.result='DEF' AND grading = 0 $selected_season $selected_league) as TotWins, (SELECT COUNT(Result) AS totals FROM tb_schedule s, tb_teams t WHERE t.tid = s.team1 and s.result='LST' AND grading = 0 $selected_season $selected_league) as TotLoss, (SELECT COUNT(Result) AS totals FROM tb_schedule s, tb_teams t WHERE t.tid = s.team1 and s.result='DRW' AND grading = 0 $selected_season $selected_league) as TotDraws") or die(mysql_error());

	$nextMatch = mysqli_query($con, "SELECT s.roundID as upcomingRoundID, s.roundName FROM tb_schedule s WHERE s.date >= CURDATE() ORDER BY s.date LIMIT 1") or die(mysql_error());

	$resultDate = mysqli_query($con, "SELECT DATE_FORMAT(date,'%b %e, %Y') as dateF FROM tb_stats ORDER BY date DESC LIMIT 0,1") or die(mysql_error());

	$rows = array();
	$rows2 = array();
	$rows3 = array();
	$rows9 = array();

	while($r = mysqli_fetch_assoc($sth)) {
	    $rows[] = $r;
	}
	while($r2 = mysqli_fetch_assoc($totalsSummary)) {
	    $rows2[] = $r2;
	}
	while($r3 = mysqli_fetch_assoc($nextMatch)) {
	    $rows3[] = $r3;
	}
	while($r9 = mysqli_fetch_assoc($resultDate)) {
		$rows9[] = $r9;
	}


	$games = array("games" => $rows);
	$totals = array("totalsSummary" => $rows2);
	$currRdId = array("currentRound" => $rows3);
	$lastUpdated = array("lastUpdated" => $rows9);

	print json_encode($games + $totals + $currRdId + $lastUpdated, JSON_NUMERIC_CHECK);

?>
