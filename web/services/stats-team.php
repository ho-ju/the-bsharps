<?php include("../inc/global-stat-vars.php"); ?>

<?php

	$sth = mysqli_query($con, "SELECT sum(gamePlayed) as gmsPlayed FROM tb_schedule") or die(mysql_error());

	$ptsChart = mysqli_query($con, "SELECT Round(((SUM(3pt)*3) / SUM(TotalPoints)*100), 2) as 3ptWT, Round((SUM(FTM) / SUM(TotalPoints)*100), 2) as FtWT, ROUND(((SUM(TotalPoints) - SUM(FTM) - (SUM(3PT) * 3)) / SUM(TotalPoints)*100) , 2) as 2ptWT FROM tb_stats s") or die(mysql_error());

	$careerAvg = mysqli_query($con, "SELECT (SELECT SUM(gamePLayed) from tb_schedule) as tGp, ROUND(SUM(TotalPoints) / (SELECT SUM(gamePLayed)from tb_schedule), 1) as tPts, ROUND(SUM(3PT) / (SELECT SUM(gamePLayed)from tb_schedule), 1) as t3pt, ROUND(SUM(Fouls) / (SELECT SUM(gamePLayed)from tb_schedule), 1) as tFouls, ROUND(SUM(FTA) / (SELECT SUM(gamePLayed)from tb_schedule), 1) as tFTA, ROUND(SUM(FTM) / (SELECT SUM(gamePLayed)from tb_schedule), 1) as tFTM, ROUND((SUM(FTM) / SUM(FTA)) * 100, 1) as tFTP, ROUND(ROUND((((SUM(TotalPoints) - SUM(FTM) - (SUM(3PT) * 3)) / 2) + SUM(3PT)), 0)  / (SELECT SUM(gamePLayed)from tb_schedule),1) as tFGM FROM tb_stats s") or die(mysql_error());

	$latestSeason = mysqli_query($con, "SELECT se.seasonName, se.seasonID, l.leagueAbbr, s.round, SUM(TotalPoints) as tPts, sc.resultT2 as tPtsAg, SUM(FTA) as tFTA, SUM(FTM) as tFTM, SUM(3PT) as t3pt, SUM(Fouls) as tFouls, (SELECT sum(gameplayed) FROM tb_schedule WHERE seasonID = s.seasonID AND comp = s.comp) as tGp, ROUND((SUM(FTM) / SUM(FTA) * 100),1) as tFTP, ROUND((((SUM(s.TotalPoints) - SUM(s.FTM) - (SUM(s.3PT) * 3)) / 2) + SUM(s.3PT)) , 0) as tFGM FROM tb_stats s, tb_seasons se, tb_leagues l, tb_schedule sc WHERE s.seasonID = se.seasonID and s.comp = l.comp and s.roundID = sc.roundId $selected_season GROUP BY s.roundID, s.comp ORDER by s.roundID DESC") or die(mysqli_error());

	$latestSeasonTotal = mysqli_query($con, "SELECT SUM(TotalPoints) as tPts, (SELECT SUM(resultT2) from tb_schedule s WHERE  s.roundID > 0 $selected_season) as tPtsAg, SUM(FTA) as tFTA, SUM(FTM) as tFTM, SUM(3PT) as t3pt, SUM(Fouls) as tFouls, SUM(GmsPlayed) as tGp, ROUND((SUM(FTM) / SUM(FTA) * 100),1) as tFTP, ROUND((((SUM(s.TotalPoints) - SUM(s.FTM) - (SUM(s.3PT) * 3)) / 2) + SUM(s.3PT)) , 0) as tFGM FROM tb_stats s WHERE s.roundID > 0 $selected_season") or die(mysqli_error());


	$careerBySeasonLeague = mysqli_query($con, "SELECT se.seasonName, se.seasonID, l.leagueAbbr, SUM(TotalPoints) as tPts, (SELECT SUM(resultT2) from tb_schedule sc where sc.seasonID = se.seasonID and sc.comp = l.comp) as tPtsAg, SUM(FTA) as tFTA, SUM(FTM) as tFTM, SUM(3PT) as t3pt, SUM(Fouls) as tFouls, (SELECT sum(gameplayed) FROM tb_schedule WHERE seasonID = s.seasonID AND comp = s.comp) as tGp, ROUND((SUM(FTM) / SUM(FTA) * 100),1) as tFTP, ROUND((((SUM(s.TotalPoints) - SUM(s.FTM) - (SUM(s.3PT) * 3)) / 2) + SUM(s.3PT)) , 0) as tFGM FROM tb_stats s, tb_seasons se, tb_leagues l, tb_schedule sc WHERE s.seasonID = se.seasonID and s.comp = l.comp and s.roundID = sc.roundID GROUP BY s.seasonID, s.comp ORDER by se.seasonID DESC") or die(mysqli_error());

	$careerTotal = mysqli_query($con, "SELECT SUM(TotalPoints) as tPts, (SELECT SUM(resultT2) from tb_schedule s) as tPtsAg, SUM(FTA) as tFTA, SUM(FTM) as tFTM, SUM(3PT) as t3pt, SUM(Fouls) as tFouls, SUM(GmsPlayed) as tGp, ROUND((SUM(FTM) / SUM(FTA) * 100),1) as tFTP, ROUND((((SUM(s.TotalPoints) - SUM(s.FTM) - (SUM(s.3PT) * 3)) / 2) + SUM(s.3PT)) , 0) as tFGM FROM tb_stats s") or die(mysqli_error());

	$careerBySeasonLeagueFinals = mysqli_query($con, "SELECT se.seasonName, se.seasonID, l.leagueAbbr, SUM(TotalPoints) as tPts, (SELECT SUM(resultT2) from tb_schedule sc where sc.seasonID = se.seasonID and sc.comp = l.comp AND sc.final ='y') as tPtsAg, SUM(FTA) as tFTA, SUM(FTM) as tFTM, SUM(3PT) as t3pt, SUM(Fouls) as tFouls, (SELECT sum(gameplayed) FROM tb_schedule WHERE seasonID = s.seasonID AND comp = s.comp and final='y') as tGp, ROUND((SUM(FTM) / SUM(FTA) * 100),1) as tFTP, ROUND((((SUM(s.TotalPoints) - SUM(s.FTM) - (SUM(s.3PT) * 3)) / 2) + SUM(s.3PT)) , 0) as tFGM FROM tb_stats s, tb_seasons se, tb_leagues l, tb_schedule sc WHERE s.seasonID = se.seasonID and s.comp = l.comp and s.roundID = sc.roundID AND s.final ='y' GROUP BY s.seasonID, s.comp ORDER by se.seasonID DESC") or die(mysqli_error());
 
	$careerTotalFinals = mysqli_query($con, "SELECT SUM(TotalPoints) as tPts,  (SELECT SUM(resultT2) from tb_schedule s WHERE s.final ='y') as tPtsAg, SUM(FTA) as tFTA, SUM(FTM) as tFTM, SUM(3PT) as t3pt, SUM(Fouls) as tFouls, (SELECT sum(gamePlayed) FROM tb_schedule WHERE final ='y') as tGp, ROUND((SUM(FTM) / SUM(FTA) * 100),1) as tFTP, ROUND((((SUM(s.TotalPoints) - SUM(s.FTM) - (SUM(s.3PT) * 3)) / 2) + SUM(s.3PT)) , 0) as tFGM FROM tb_stats s WHERE s.final ='y'") or die(mysqli_error());

	$careerHighPTS = mysqli_query($con, "SELECT seasonID, roundID, comp, SUM(TotalPoints) as mPts, DATE_FORMAT(DATE,'%b, %Y') as mPtsDate FROM tb_stats group by roundID order by mPts desc limit 0,1") or die(mysqli_error());
	$careerHighFTA = mysqli_query($con, "SELECT seasonID, roundID, comp, SUM(FTA) as mFTA, DATE_FORMAT(DATE,'%b, %Y') as mFTADate FROM tb_stats group by roundID order by mFTA desc limit 0,1") or die(mysqli_error());
	$careerHighFTM = mysqli_query($con, "SELECT seasonID, roundID, comp, SUM(FTM) as mFTM, DATE_FORMAT(DATE,'%b, %Y') as mFTMDate FROM tb_stats group by roundID order by mFTM desc limit 0,1") or die(mysqli_error());
	$careerHigh3PT = mysqli_query($con, "SELECT seasonID, roundID, comp, SUM(3PT) as m3pt, DATE_FORMAT(DATE,'%b, %Y') as m3ptDate FROM tb_stats group by roundID order by m3pt desc limit 0,1") or die(mysqli_error());
	$careerHighFouls = mysqli_query($con, "SELECT seasonID, roundID, comp, SUM(Fouls) as mFouls, DATE_FORMAT(DATE,'%b, %Y') as mFoulsDate FROM tb_stats group by roundID order by mFouls desc limit 0,1") or die(mysqli_error());

	$careerHighFGM = mysqli_query($con, "SELECT seasonID, roundID, comp, DATE_FORMAT(DATE,'%b, %Y') as mFGMDate, ROUND((((SUM(s.TotalPoints) - SUM(s.FTM) - (SUM(s.3PT) * 3)) / 2) + SUM(s.3PT)) , 0) as mFGM FROM tb_stats s group by roundID order by mFGM DESC LIMIT 0,1") or die(mysqli_query());

	$careerHighFTP = mysqli_query($con, "SELECT seasonID, roundID, comp, DATE_FORMAT(DATE,'%b, %Y') as mFTPDate, ROUND((SUM(FTM) / SUM(FTA) * 100),1) as mFTP FROM tb_stats s GROUP BY roundID ORDER by mFTP DESC LIMIT 0,1") or die(mysqli_query());

	$careerBySeasonLeagueAvg = mysqli_query($con, "SELECT se.seasonName, se.seasonID, l.leagueAbbr, (SELECT sum(gameplayed) FROM tb_schedule WHERE seasonID = s.seasonID AND comp = s.comp) as tGp, ROUND (SUM(TotalPoints) / (SELECT sum(gameplayed) FROM tb_schedule WHERE seasonID = s.seasonID AND comp = s.comp),1) as tPts, ROUND(SUM(FTA) / (SELECT sum(gameplayed) FROM tb_schedule WHERE seasonID = s.seasonID AND comp = s.comp),1) as tFTA, ROUND(SUM(FTM) / (SELECT sum(gameplayed) FROM tb_schedule WHERE seasonID = s.seasonID AND comp = s.comp),1) as tFTM, ROUND(SUM(3PT) / (SELECT sum(gameplayed) FROM tb_schedule WHERE seasonID = s.seasonID AND comp = s.comp),1) as t3pt, ROUND(SUM(Fouls) / (SELECT sum(gameplayed) FROM tb_schedule WHERE seasonID = s.seasonID AND comp = s.comp),1) as tFouls, ROUND((SUM(FTM) / SUM(FTA) * 100),1) as tFTP, ROUND(ROUND((((SUM(s.TotalPoints) - SUM(s.FTM) - (SUM(s.3PT) * 3)) / 2) + SUM(s.3PT)) , 0)  / (SELECT sum(gameplayed) FROM tb_schedule WHERE seasonID = s.seasonID AND comp = s.comp),1) as tFGM FROM tb_stats s, tb_seasons se, tb_leagues l WHERE s.seasonID = se.seasonID AND s.comp = l.comp GROUP BY s.seasonID, s.comp ORDER by se.seasonID DESC") or die(mysqli_error());

	$careerBySeasonLeagueFinalsAvg = mysqli_query($con, "SELECT se.seasonName, se.seasonID, l.leagueAbbr, (select sum(gameplayed) from tb_schedule where seasonID = s.seasonID and comp = s.comp and final = 'y') as tGp, ROUND((SUM( totalpoints ) / (SELECT SUM( gameplayed ) FROM tb_schedule WHERE seasonID = s.seasonID AND comp = s.comp and final='y')),1) AS tPts, ROUND((SUM(3pt) / (SELECT SUM( gameplayed ) FROM tb_schedule WHERE seasonID = s.seasonID AND comp = s.comp and final='y')),1) AS t3pt, ROUND((SUM(fouls) / (SELECT SUM( gameplayed ) FROM tb_schedule WHERE seasonID = s.seasonID AND comp = s.comp and final='y')),1) AS tFouls, ROUND((SUM(FTA) / (SELECT SUM( gameplayed ) FROM tb_schedule WHERE seasonID = s.seasonID AND comp = s.comp and final='y')),1) AS tFTA, ROUND((SUM(FTM) / (SELECT SUM( gameplayed ) FROM tb_schedule WHERE seasonID = s.seasonID AND comp = s.comp and final='y')),1) AS tFTM, ROUND((SUM(fouls) / (SELECT SUM( gameplayed ) FROM tb_schedule WHERE seasonID = s.seasonID AND comp = s.comp and final='y')),1) AS tFouls,  ROUND((SUM(FTM) / SUM(FTA) * 100),1) as tFTP, ROUND(ROUND((((SUM(s.TotalPoints) - SUM(s.FTM) - (SUM(s.3PT) * 3)) / 2) + SUM(s.3PT)) , 0)  / (SELECT SUM( gameplayed ) FROM tb_schedule WHERE seasonID = s.seasonID AND comp = s.comp and final='y'),1) as tFGM FROM tb_stats s, tb_seasons se, tb_leagues l WHERE s.seasonID = se.seasonID AND s.comp = l.comp AND s.final ='y' group by s.seasonID, s.comp order by s.seasonID desc") or die(mysqli_error());

	$careerTotalFinalsAvg = mysqli_query($con, "SELECT (SELECT SUM(gamePLayed)from tb_schedule WHERE final ='y') as tGp, ROUND(SUM(TotalPoints) / (SELECT SUM(gamePLayed)from tb_schedule WHERE final ='y'), 1) as tPts, ROUND(SUM(3PT) / (SELECT SUM(gamePLayed)from tb_schedule WHERE final ='y'), 1) as t3pt, ROUND(SUM(Fouls) / (SELECT SUM(gamePLayed)from tb_schedule WHERE final ='y'), 1) as tFouls, ROUND(SUM(FTA) / (SELECT SUM(gamePLayed)from tb_schedule WHERE final ='y'), 1) as tFTA, ROUND(SUM(FTM) / (SELECT SUM(gamePLayed)from tb_schedule WHERE final ='y'), 1) as tFTM, ROUND((SUM(FTM) / SUM(FTA)) * 100, 1) as tFTP, ROUND(ROUND((((SUM(TotalPoints) - SUM(FTM) - (SUM(3PT) * 3)) / 2) + SUM(3PT)), 0)  / (SELECT SUM(gamePLayed)from tb_schedule WHERE final ='y'),1) as tFGM FROM tb_stats s WHERE final ='y'") or die(mysqli_error());

	$winningest = mysqli_query($con, "SELECT count(*) as winningest from tb_schedule WHERE result = 'DEF'") or die(mysql_errno());
	

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
	$rows18 = array();
	$rows19 = array();
	$rows20 = array();

	while($r = mysqli_fetch_assoc($sth)) {
	    $rows[] = $r;
	}
	while($r2 = mysqli_fetch_assoc($ptsChart)) {
	    $rows2[] = $r2;
	}
	while($r3 = mysqli_fetch_assoc($careerAvg)) {
	    $rows3[] = $r3;
	}
	while($r4 = mysqli_fetch_assoc($careerBySeasonLeague)) {
	    $rows4[] = $r4;
	}
	while($r5 = mysqli_fetch_assoc($careerTotal)) {
	    $rows5[] = $r5;
	}
	while($r6 = mysqli_fetch_assoc($careerBySeasonLeagueFinals)) {
	    $rows6[] = $r6;
	}
	while($r7 = mysqli_fetch_assoc($careerTotalFinals)) {
	    $rows7[] = $r7;
	}
	while($r8 = mysqli_fetch_assoc($careerHighPTS)) {
		$rows8[] = $r8;
	}
	while($r9 = mysqli_fetch_assoc($careerHighFGM)) {
		$rows9[] = $r9;
	}
	while($r10 = mysqli_fetch_assoc($careerHighFTP)) {
		$rows10[] = $r10;
	}
	while($r11 = mysqli_fetch_assoc($careerBySeasonLeagueAvg)) {
		$rows11[] = $r11;
	}
	while($r12 = mysqli_fetch_assoc($careerBySeasonLeagueFinalsAvg)) {
		$rows12[] = $r12;
	}
	while($r13 = mysqli_fetch_assoc($careerTotalFinalsAvg)) {
		$rows13[] = $r13;
	}
	while($r14 = mysqli_fetch_assoc($careerHighFTA)) {
		$rows14[] = $r14;
	}
	while($r15 = mysqli_fetch_assoc($careerHighFTM)) {
		$rows15[] = $r15;
	}
	while($r16 = mysqli_fetch_assoc($careerHigh3PT)) {
		$rows16[] = $r16;
	}
	while($r17 = mysqli_fetch_assoc($careerHighFouls)) {
		$rows17[] = $r17;
	}
	while($r18 = mysqli_fetch_assoc($winningest)) {
		$rows18[] = $r18;
	}
	while($r19 = mysqli_fetch_assoc($latestSeason)) {
		$rows19[] = $r19;
	}
	while($r20 = mysqli_fetch_assoc($latestSeasonTotal)) {
		$rows20[] = $r20;
	}

	$players = array("playerDetail" => $rows);
	$playersPtsChart = array("playersPtsChart" => $rows2);
	$playersCareerAvg = array("playersCareerAvg" => $rows3);
	$playersCareerBySeasonLeague = array("playersCareerBySeasonLeague" => $rows4);
	$playersCareerTot = array("playersCareerTot" => $rows5);
	$playersCareerBySeasonLeagueF = array("playersCareerBySeasonLeagueF" => $rows6);
	$playersCareerTotF = array("playersCareerTotF" => $rows7);
	$playersCareerHighPTS = array("playersCareerHighPTS" => $rows8);
	$playersCareerHighFTA = array("playersCareerHighFTA" => $rows14);
	$playersCareerHighFTM = array("playersCareerHighFTM" => $rows15);
	$playersCareerHigh3PT = array("playersCareerHigh3PT" => $rows16);
	$playersCareerHighFouls = array("playersCareerHighFouls" => $rows17);
	$playersCareerHighFGM = array("playersCareerHighFGM" => $rows9);
	$playersCareerHighFTP = array("playersCareerHighFTP" => $rows10);
	$playersCareerBySeasonLeagueAvg = array("playersCareerBySeasonLeagueAvg" => $rows11);
	$playersCareerBySeasonLeagueFAvg = array("playersCareerBySeasonLeagueFAvg" => $rows12);
	$playersCareerTotFAvg = array("playersCareerTotFAvg" => $rows13);
	$winningestT = array("winningestT" => $rows18);
	$latest = array("latest" => $rows19);
	$latestTot = array("latestTot" => $rows20);

	print json_encode($players + $playersPtsChart + $playersCareerAvg + $latest + $latestTot + $playersCareerBySeasonLeague + $playersCareerTot  + $playersCareerBySeasonLeagueF + $playersCareerTotF + $playersCareerHighPTS + $playersCareerHighFTA + $playersCareerHighFTM + $playersCareerHigh3PT + $playersCareerHighFouls + $playersCareerHighFGM + $playersCareerHighFTP + $playersCareerBySeasonLeagueAvg + $playersCareerBySeasonLeagueFAvg + $playersCareerTotFAvg + $winningestT, JSON_NUMERIC_CHECK);

?>
