<?php include("../inc/global-stat-vars.php"); ?>

<?php

	$sqlLeagues = mysqli_query($con, "SELECT * FROM tb_leagues ORDER BY comp") or die(mysql_error());
	$sqlSeasons = mysqli_query($con, "SELECT * FROM tb_seasons ORDER BY seasonID DESC") or die(mysql_error());

	$sqlSelectedLeague = mysqli_query($con, "SELECT * FROM tb_leagues s WHERE s.comp IS NOT NULL $selected_league") or die(mysql_error());
	$sqlSelectedSeasons = mysqli_query($con, "SELECT * FROM tb_seasons s WHERE s.seasonID IS NOT NULL $selected_season") or die(mysql_error());

	$sqlLeaguesForSeason = mysqli_query($con, "SELECT l.comp, l.leagueName, l.leagueAbbr, l.leagueVenue FROM tb_leagues l, tb_stats s WHERE s.comp = l.comp $selected_season GROUP BY l.comp") or die(mysql_error());

	$sqlRoundsForSeasonLeague = mysqli_query($con, "SELECT s.roundName, s.roundID FROM tb_schedule s WHERE s.roundID > 0 AND s.resultT1 !='' $selected_season $selected_league ORDER BY s.roundID DESC") or die(mysql_error());

	$sqlSelectedRound = mysqli_query($con, "SELECT s.roundName from tb_schedule s WHERE s.roundID = $selected_round_id") or die(mysql_error());


	$rows = array();
	$rows2 = array();
	$rows3 = array();
	$rows4 = array();
	$rows5 = array();
	$rows6 = array();
	$rows7 = array();

	while($r = mysqli_fetch_assoc($sqlLeagues)) {
	    $rows[] = $r;
	}
	while($r2 = mysqli_fetch_assoc($sqlSeasons)) {
	    $rows2[] = $r2;
	}
	while($r3 = mysqli_fetch_assoc($sqlSelectedSeasons)) {
		$rows3[] = $r3;
	}
	while($r4 = mysqli_fetch_assoc($sqlSelectedLeague)) {
		$rows4[] = $r4;
	}
	while($r5 = mysqli_fetch_assoc($sqlLeaguesForSeason)) {
		$rows5[] = $r5;
	}
	while($r6 = mysqli_fetch_assoc($sqlRoundsForSeasonLeague)) {
		$rows6[] = $r6;
	}
	while($r7 = mysqli_fetch_assoc($sqlSelectedRound)) {
		$rows7[] = $r7;
	}

	$availLeagues = array("availLeagues" => $rows);
	$availSeasons = array("availSeasons" => $rows2);
	$selSeason = array("selSeason" => $rows3);
	$selLeague = array("selLeague" => $rows4);
	$availLeaguesForSeason = array("availLeaguesForSeason" => $rows5);
	$availRoundsForSeasonLeague = array("availRoundsForSeasonLeague" => $rows6);
	$selRound = array("selRound" => $rows7);

	print json_encode($availSeasons + $availLeagues + $selSeason + $selLeague + $availLeaguesForSeason + $availRoundsForSeasonLeague + $selRound);

?>
