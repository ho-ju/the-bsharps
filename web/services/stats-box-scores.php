<?php include("../inc/global-stat-vars.php"); ?>
<?php

	$sth = mysqli_query($con, "SELECT *, (SELECT p.PName FROM tb_players p WHERE s.PID = p.PID) as playerName, (SELECT p.PNameFirst FROM tb_players p WHERE s.PID = p.PID) as playerNameFirst, (SELECT p.PNameLast FROM tb_players p WHERE s.PID = p.PID) as playerNameLast, (SELECT p.pno FROM tb_players p WHERE s.PID = p.PID) as playerNo, (SELECT p.posAbbr FROM tb_players p WHERE s.PID = p.PID) as playerPos, (SELECT p.pid FROM tb_players p WHERE s.PID = p.PID) as PID, (SELECT p.url FROM tb_players p WHERE s.PID = p.PID) as url, ROUND((((TotalPoints - FTM - (3PT * 3)) / 2) + 3PT) , 0) as FGMade, ROUND(((FTM)/(FTA)*100),0) AS FTPercentage, 3PT as threePoint FROM tb_stats s WHERE s.roundId = $selected_round_id $selected_season $selected_league") or die(mysql_error());

	$sqlGameResult = mysqli_query($con, "SELECT s.roundName, s.resultT1, s.result, s.resultT2, DATE_FORMAT(s.date,'%W %D %b, %Y') AS dateF, s.venue, s.time, s.team2 as teamId, (SELECT t.TeamName FROM tb_teams t, tb_schedule s WHERE t.TID = teamId group by TeamName) as teamVName FROM tb_schedule s WHERE s.roundID = $selected_round_id $selected_season $selected_league") or die(mysql_error());

	$sqlTeamTotals = mysqli_query($con, "SELECT SUM(s.TotalPoints) as ttlPts, SUM(s.FTA) as ttlFta, SUM(s.FTM) as ttlFtm, TRUNCATE((SUM(s.FTM) / SUM(s.FTA)*100),0) as ftPer, SUM(s.3PT) as ttl3pt, SUM(s.Fouls) as ttlFls, ROUND((((SUM(s.TotalPoints) - SUM(s.FTM) - (SUM(s.3PT) * 3)) / 2) + SUM(s.3PT)) , 0) as ttlFGM FROM tb_stats s WHERE s.roundID = $selected_round_id $selected_season $selected_league") or die(mysql_error());

	$totalsSummary = mysqli_query($con, "SELECT (SELECT COUNT(Result) AS totals FROM tb_schedule s, tb_teams t WHERE t.tid = s.team1 and s.result='DEF' AND grading = 0 $selected_season $selected_league) as TotWins, (SELECT COUNT(Result) AS totals FROM tb_schedule s, tb_teams t WHERE t.tid = s.team1 and s.result='LST' AND grading = 0 $selected_season $selected_league) as TotLoss, (SELECT COUNT(Result) AS totals FROM tb_schedule s, tb_teams t WHERE t.tid = s.team1 and s.result='DRW' AND grading = 0 $selected_season $selected_league) as TotDraws") or die(mysql_error());

	$rows = array();
	$rows2 = array();
	$rows3 = array();
	$rows4 = array();


	while($r = mysqli_fetch_assoc($sth)) {
	    $rows[] = $r;
	}
	while($r2 = mysqli_fetch_assoc($sqlGameResult)) {
	    $rows2[] = $r2;
	}
	while($r3 = mysqli_fetch_assoc($sqlTeamTotals)) {
		$rows3[] = $r3;
	}
	while($r11 = mysqli_fetch_assoc($totalsSummary)) {
		$rows11[] = $r11;
	}

	$games = array("stats" => $rows);
	$gameResult = array("gameResult" => $rows2);
	$teamTotals = array("teamTotals" => $rows3);
	$totals = array("totalsSummary" => $rows11);

	print json_encode($games + $gameResult + $teamTotals + $totals, JSON_NUMERIC_CHECK);

?>
