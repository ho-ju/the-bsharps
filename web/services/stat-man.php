<?php include("../inc/global-stat-vars.php"); ?>

<?php

	$sth = mysqli_query($con, "SELECT roundID, roundName, t.teamname as t1, tv.teamname as t2, s.date, venue, seasonID, comp, final FROM tb_schedule s, tb_teams t, tb_teams_vs tv WHERE result = '' AND t.tid = s.team1 and tv.tid = s.team2 $selected_season $selected_league Group by roundID Order by s.date ASC limit 0,1") or die(mysql_error());

	$players = mysqli_query($con, "SELECT PID, pno, PName, active FROM `tb_players` WHERE active ORDER BY PID ASC") or die(mysql_error());

	$prevRoundId = mysqli_query($con, "SELECT sc.roundID, s.round FROM `tb_schedule` sc, `tb_stats` s WHERE result != '' AND sc.roundID = s.roundID GROUP BY roundID ORDER BY roundID DESC LIMIT 0,1") or die(mysql_error());

	$sqlSelectedLeague = mysqli_query($con, "SELECT * FROM tb_leagues s WHERE s.comp IS NOT NULL $selected_league") or die(mysql_error());
	$sqlSelectedSeasons = mysqli_query($con, "SELECT * FROM tb_seasons s WHERE s.seasonID IS NOT NULL $selected_season") or die(mysql_error());

	$rows = array();
	$rows2 = array();
	$rows3 = array();
	$rows4 = array();
	$rows5 = array();

	while($r = mysqli_fetch_assoc($sth)) {
	    $rows[] = $r;
	}
	while($r2 = mysqli_fetch_assoc($players)) {
	    $rows2[] = $r2;
	}
	while($r3 = mysqli_fetch_assoc($prevRoundId)) {
	    $rows3[] = $r3;
	}
	while($r4 = mysqli_fetch_assoc($sqlSelectedLeague)) {
		$rows4[] = $r4;
	}
	while($r5 = mysqli_fetch_assoc($sqlSelectedSeasons)) {
		$rows5[] = $r5;
	}

	$latestRound = array("latestRound" => $rows);
	$players = array("players" => $rows2);
	$prevRound = array("prevRound" => $rows3);
	$selLeague = array("selLeague" => $rows4);
	$selSeason = array("selSeason" => $rows5);

	print json_encode($latestRound + $prevRound + $players + $selSeason + $selLeague, JSON_NUMERIC_CHECK);

?>
