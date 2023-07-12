<?php include("../inc/global-stat-vars.php"); ?>

<?php

	$sth = mysqli_query($con, "SELECT *, (SELECT sum(GmsPlayed) FROM tb_stats WHERE PID=". $selected_player_id .") as gmsPlayed FROM tb_players WHERE pid =". $selected_player_id) or die(mysql_error());

	$ptsChart = mysqli_query($con, "SELECT Round(((SUM(3pt)*3) / SUM(TotalPoints)*100), 2) as 3ptWT, Round((SUM(FTM) / SUM(TotalPoints)*100), 2) as FtWT, ROUND(((SUM(TotalPoints) - SUM(FTM) - (SUM(3PT) * 3)) / SUM(TotalPoints)*100) , 2) as 2ptWT FROM tb_stats s WHERE PID=". $selected_player_id) or die(mysql_error());

	$careerAvg = mysqli_query($con, "SELECT (SELECT SUM(GmsPlayed) FROM tb_stats WHERE PID=". $selected_player_id .")  as tGp, (SELECT ROUND(((SUM(TotalPoints) / SUM(GmsPlayed))), 1) FROM tb_stats WHERE PID=". $selected_player_id .")  as tPts, (SELECT ROUND(((SUM(3PT) / SUM(GmsPlayed))), 1) FROM tb_stats WHERE PID=". $selected_player_id .")  as t3pt, (SELECT ROUND(((SUM(Fouls) / SUM(GmsPlayed))), 1) FROM tb_stats WHERE PID=". $selected_player_id .")  as tFouls, (SELECT ROUND(((SUM(FTA) / SUM(GmsPlayed))), 1) FROM tb_stats WHERE PID=". $selected_player_id .")  as tFTA, (SELECT ROUND(((SUM(FTM) / SUM(GmsPlayed))), 1) FROM tb_stats WHERE PID=". $selected_player_id .")  as tFTM, (SELECT ROUND(((SUM(FTM) / SUM(FTA))) * 100, 1) FROM tb_stats WHERE PID=". $selected_player_id .")  as tFTP, (SELECT ROUND(ROUND((((SUM(TotalPoints) - SUM(FTM) - (SUM(3PT) * 3)) / 2) + SUM(3PT)) , 0)  / SUM(GmsPlayed),1) FROM tb_stats WHERE PID=". $selected_player_id .") as tFGM, (SELECT ROUND(((TtlPts + Ttl3pts + TtlFTM + TtlFTA + IFNULL(FTP, 0) + TtlFouls)) - (TtlMFT * 2),2) from view_player_rankings WHERE PID =". $selected_player_id .") as avgEff FROM tb_stats WHERE EntryID = 1") or die(mysql_error());

	$latestSeason = mysqli_query($con, "SELECT se.seasonName, se.seasonID, l.leagueAbbr, l.comp, s.round, s.GmsPlayed as tGp, TotalPoints as tPts, FTA as tFTA, FTM as tFTM, 3PT as t3pt, Fouls as tFouls, ROUND((FTM / FTA * 100),1) as tFTP,  ROUND((((TotalPoints - FTM - (3PT * 3)) / 2) + 3PT) , 0) as tFGM FROM tb_stats s, tb_seasons se, tb_leagues l WHERE PID =". $selected_player_id ." $selected_season and se.seasonID = s.seasonID GROUP BY s.ROUND") or die(mysqli_error());

	$latestSeasonTotal = mysqli_query($con, "SELECT SUM(TotalPoints) as tPts, SUM(FTA) as tFTA, SUM(FTM) as tFTM, SUM(3PT) as t3pt, SUM(Fouls) as tFouls, SUM(GmsPlayed) as tGp, ROUND((SUM(FTM) / SUM(FTA) * 100),1) as tFTP, ROUND((((SUM(s.TotalPoints) - SUM(s.FTM) - (SUM(s.3PT) * 3)) / 2) + SUM(s.3PT)) , 0) as tFGM, (SELECT ROUND(((TtlPts + Ttl3pts + TtlFTM + TtlFTA + IFNULL(FTP, 0) + TtlFouls)) - (TtlMFT * 2),2) from $selected_pers WHERE PID =". $selected_player_id .") as avgEff FROM tb_stats s WHERE PID =". $selected_player_id ." $selected_season") or die(mysqli_error());

	$careerBySeasonLeague = mysqli_query($con, "SELECT se.seasonName, se.seasonID, l.leagueAbbr, l.comp, SUM(TotalPoints) as tPts, SUM(FTA) as tFTA, SUM(FTM) as tFTM, SUM(3PT) as t3pt, SUM(Fouls) as tFouls, SUM(GmsPlayed) as tGp, ROUND((SUM(FTM) / SUM(FTA) * 100),1) as tFTP, ROUND((((SUM(s.TotalPoints) - SUM(s.FTM) - (SUM(s.3PT) * 3)) / 2) + SUM(s.3PT)) , 0) as tFGM FROM tb_stats s, tb_seasons se, tb_leagues l WHERE PID =". $selected_player_id ." and s.seasonID = se.seasonID and s.comp = l.comp GROUP BY s.seasonID, s.comp ORDER by se.seasonID DESC") or die(mysqli_error());

	$careerTotal = mysqli_query($con, "SELECT SUM(TotalPoints) as tPts, SUM(FTA) as tFTA, SUM(FTM) as tFTM, SUM(3PT) as t3pt, SUM(Fouls) as tFouls, SUM(GmsPlayed) as tGp, ROUND((SUM(FTM) / SUM(FTA) * 100),1) as tFTP, ROUND((((SUM(s.TotalPoints) - SUM(s.FTM) - (SUM(s.3PT) * 3)) / 2) + SUM(s.3PT)) , 0) as tFGM, (SELECT ROUND(((TtlPts + Ttl3pts + TtlFTM + TtlFTA + IFNULL(FTP, 0) + TtlFouls)) - (TtlMFT * 2),2) from view_player_rankings WHERE PID =". $selected_player_id .") as avgEff FROM tb_stats s WHERE PID =". $selected_player_id) or die(mysqli_error());

	$careerBySeasonLeagueFinals = mysqli_query($con, "SELECT se.seasonName, se.seasonID, l.leagueAbbr, l.comp, SUM(TotalPoints) as tPts, SUM(FTA) as tFTA, SUM(FTM) as tFTM, SUM(3PT) as t3pt, SUM(Fouls) as tFouls, SUM(GmsPlayed) as tGp, ROUND((SUM(FTM) / SUM(FTA) * 100),1) as tFTP, ROUND((((SUM(s.TotalPoints) - SUM(s.FTM) - (SUM(s.3PT) * 3)) / 2) + SUM(s.3PT)) , 0) as tFGM FROM tb_stats s, tb_seasons se, tb_leagues l WHERE PID =". $selected_player_id ." and s.seasonID = se.seasonID and s.comp = l.comp AND s.final ='y' GROUP BY s.seasonID, s.comp ORDER by se.seasonID DESC") or die(mysqli_error());

	$careerTotalFinals = mysqli_query($con, "SELECT SUM(TotalPoints) as tPts, SUM(FTA) as tFTA, SUM(FTM) as tFTM, SUM(3PT) as t3pt, SUM(Fouls) as tFouls, SUM(GmsPlayed) as tGp, ROUND((SUM(FTM) / SUM(FTA) * 100),1) as tFTP, ROUND((((SUM(s.TotalPoints) - SUM(s.FTM) - (SUM(s.3PT) * 3)) / 2) + SUM(s.3PT)) , 0) as tFGM, (SELECT ROUND(((TtlPts + Ttl3pts + TtlFTM + TtlFTA + IFNULL(FTP, 0) + TtlFouls)) - (TtlMFT * 2),2) from view_player_rankings_finals WHERE PID =". $selected_player_id .") as avgEff FROM tb_stats s WHERE PID =". $selected_player_id ." AND s.final ='y'") or die(mysqli_error());

	$careerHigh = mysqli_query($con, "SELECT (SELECT TotalPoints from tb_stats where PID =". $selected_player_id ." ORDER BY TotalPoints DESC LIMIT 0,1) as mPts, (SELECT DATE_FORMAT(DATE,'%b, %Y') from tb_stats where PID =". $selected_player_id ." ORDER BY TotalPoints DESC LIMIT 0,1) as mPtsDate, (SELECT comp from tb_stats where PID =". $selected_player_id ." ORDER BY TotalPoints DESC LIMIT 0,1) as mPtsComp, (SELECT seasonID from tb_stats where PID =". $selected_player_id ." ORDER BY TotalPoints DESC LIMIT 0,1) as mPtsSeasonID, (SELECT roundID from tb_stats where PID =". $selected_player_id ." ORDER BY TotalPoints DESC LIMIT 0,1) as mPtsRoundID, (SELECT FTA from tb_stats where PID =". $selected_player_id ." ORDER BY FTA DESC LIMIT 0,1) as mFTA, (SELECT DATE_FORMAT(DATE,'%b, %Y') from tb_stats where PID =". $selected_player_id ." ORDER BY FTA DESC LIMIT 0,1) as mFTADate, (SELECT comp from tb_stats where PID =". $selected_player_id ." ORDER BY FTA DESC LIMIT 0,1) as mFTAComp, (SELECT seasonID from tb_stats where PID =". $selected_player_id ." ORDER BY FTA DESC LIMIT 0,1) as mFTASeasonID, (SELECT roundID from tb_stats where PID =". $selected_player_id ." ORDER BY FTA DESC LIMIT 0,1) as mFTARoundID, (SELECT FTM from tb_stats where PID =". $selected_player_id ." ORDER BY FTM DESC LIMIT 0,1) as mFTM, (SELECT DATE_FORMAT(DATE,'%b, %Y') from tb_stats where PID =". $selected_player_id ." ORDER BY FTM DESC LIMIT 0,1) as mFTMDate, (SELECT comp from tb_stats where PID =". $selected_player_id ." ORDER BY FTM DESC LIMIT 0,1) as mFTMComp, (SELECT seasonID from tb_stats where PID =". $selected_player_id ." ORDER BY FTM DESC LIMIT 0,1) as mFTMSeasonID, (SELECT roundID from tb_stats where PID =". $selected_player_id ." ORDER BY FTM DESC LIMIT 0,1) as mFTMRoundID, (SELECT 3PT from tb_stats where PID =". $selected_player_id ." ORDER BY 3PT DESC LIMIT 0,1) as m3pt, (SELECT DATE_FORMAT(DATE,'%b, %Y') from tb_stats where PID =". $selected_player_id ." ORDER BY 3PT DESC LIMIT 0,1) as m3ptDate, (SELECT comp from tb_stats where PID =". $selected_player_id ." ORDER BY 3PT DESC LIMIT 0,1) as m3ptComp, (SELECT seasonID from tb_stats where PID =". $selected_player_id ." ORDER BY 3PT DESC LIMIT 0,1) as m3ptSeasonID, (SELECT roundID from tb_stats where PID =". $selected_player_id ." ORDER BY 3PT DESC LIMIT 0,1) as m3ptRoundID, (SELECT fouls from tb_stats where PID =". $selected_player_id ." ORDER BY Fouls DESC LIMIT 0,1) as mFouls, (SELECT DATE_FORMAT(DATE,'%b, %Y') from tb_stats where PID =". $selected_player_id ." ORDER BY Fouls DESC LIMIT 0,1) as mFoulsDate, (SELECT comp from tb_stats where PID =". $selected_player_id ." ORDER BY Fouls DESC LIMIT 0,1) as mFoulsComp, (SELECT seasonID from tb_stats where PID =". $selected_player_id ." ORDER BY Fouls DESC LIMIT 0,1) as mFoulsSeasonID, (SELECT roundID from tb_stats where PID =". $selected_player_id ." ORDER BY Fouls DESC LIMIT 0,1) as mFoulsRoundID FROM tb_stats WHERE EntryID = 1") or die(mysqli_error());

	$careerHighFGM = mysqli_query($con, "SELECT s.seasonID, s.roundID, s.comp, DATE_FORMAT(DATE,'%b, %Y') as mFGMDate, ROUND((((SUM(s.TotalPoints) - SUM(s.FTM) - (SUM(s.3PT) * 3)) / 2) + SUM(s.3PT)) , 0) as mFGM FROM tb_stats s, tb_seasons se, tb_leagues l WHERE PID = ". $selected_player_id ." and s.seasonID = se.seasonID and s.comp = l.comp GROUP BY s.entryID ORDER by mFGM DESC LIMIT 0,1") or die(mysqli_query());

	$careerHighFTP = mysqli_query($con, "SELECT s.seasonID, s.roundID, s.comp, DATE_FORMAT(DATE,'%b, %Y') as mFTPDate, ROUND((SUM(FTM) / SUM(FTA) * 100),1) as mFTP FROM tb_stats s, tb_seasons se, tb_leagues l WHERE PID = ". $selected_player_id ." and s.seasonID = se.seasonID and s.comp = l.comp GROUP BY s.entryID ORDER by mFTP DESC LIMIT 0,1") or die(mysqli_query());

	$careerBySeasonLeagueAvg = mysqli_query($con, "SELECT se.seasonName, se.seasonID, l.leagueAbbr, l.comp, SUM(GmsPlayed) tGp, ROUND (SUM(TotalPoints) / SUM(GmsPlayed),1) as tPts, ROUND(SUM(FTA) / SUM(GmsPlayed),1) as tFTA, ROUND(SUM(FTM) / SUM(GmsPlayed),1) as tFTM, ROUND(SUM(3PT) / SUM(GmsPlayed),1) as t3pt, ROUND(SUM(Fouls) / SUM(GmsPlayed),1) as tFouls, ROUND((SUM(FTM) / SUM(FTA) * 100),1) as tFTP, ROUND(ROUND((((SUM(s.TotalPoints) - SUM(s.FTM) - (SUM(s.3PT) * 3)) / 2) + SUM(s.3PT)) , 0)  / SUM(GmsPlayed),1) as tFGM FROM tb_stats s, tb_seasons se, tb_leagues l WHERE PID =". $selected_player_id ." AND s.seasonID = se.seasonID AND s.comp = l.comp GROUP BY s.seasonID, s.comp ORDER by se.seasonID DESC") or die(mysqli_error());

	$careerBySeasonLeagueFinalsAvg = mysqli_query($con, "SELECT se.seasonName, se.seasonID, l.leagueAbbr, l.comp, SUM(GmsPlayed) tGp, ROUND (SUM(TotalPoints) / SUM(GmsPlayed),1) as tPts, ROUND(SUM(FTA) / SUM(GmsPlayed),1) as tFTA, ROUND(SUM(FTM) / SUM(GmsPlayed),1) as tFTM, ROUND(SUM(3PT) / SUM(GmsPlayed),1) as t3pt, ROUND(SUM(Fouls) / SUM(GmsPlayed),1) as tFouls, ROUND((SUM(FTM) / SUM(FTA) * 100),1) as tFTP, ROUND(ROUND((((SUM(s.TotalPoints) - SUM(s.FTM) - (SUM(s.3PT) * 3)) / 2) + SUM(s.3PT)) , 0)  / SUM(GmsPlayed),1) as tFGM FROM tb_stats s, tb_seasons se, tb_leagues l WHERE PID =". $selected_player_id ." AND s.seasonID = se.seasonID AND s.comp = l.comp AND s.final ='y' GROUP BY s.seasonID, s.comp ORDER by se.seasonID DESC") or die(mysqli_error());

	$careerTotalFinalsAvg = mysqli_query($con, "SELECT ROUND(SUM(TotalPoints) / SUM(GmsPlayed),1) as tPts, ROUND(SUM(FTA) / SUM(GmsPlayed),1) as tFTA, ROUND(SUM(FTM) / SUM(GmsPlayed),1) as tFTM, ROUND(SUM(3PT) / SUM(GmsPlayed),1) as t3pt, ROUND(SUM(Fouls) / SUM(GmsPlayed),1) as tFouls, SUM(GmsPlayed) as tGp, ROUND((SUM(FTM) / SUM(FTA) * 100),1) as tFTP, ROUND(ROUND((((SUM(s.TotalPoints) - SUM(s.FTM) - (SUM(s.3PT) * 3)) / 2) + SUM(s.3PT)) , 0) / SUM(GmsPlayed),1) as tFGM, (SELECT ROUND(((TtlPts + Ttl3pts + TtlFTM + TtlFTA + IFNULL(FTP, 0) + TtlFouls)) - (TtlMFT * 2),2) from view_player_rankings_finals WHERE PID =". $selected_player_id .") as avgEff FROM tb_stats s WHERE PID =". $selected_player_id ." AND s.final ='y'") or die(mysqli_error());

	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p1Consec = mysqli_query($con, "SELECT PID,max(consecutive) as stat, date, comp FROM
		(SELECT
		    s.PID,GmsPlayed,
		    (@x:=IF(GmsPlayed=1,@x+1,
		    		if(result='BYE',@x:=@x,0)
		    	)) consecutive, DATE_FORMAT(s.date,'%b ''%y') as date, s.comp as comp
		FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID =". $selected_player_id ." AND s.PID = p.PID) a") or die(mysql_error());

	$winningest = mysqli_query($con, "SELECT count(*) as winningest from tb_schedule sc, tb_players p, tb_stats s where result='DEF' AND s.roundID = sc.roundID AND p.pid = s.PID AND gmsPlayed = 1 AND s.PID = ". $selected_player_id .";") or die(mysql_errno());

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
	while($r8 = mysqli_fetch_assoc($careerHigh)) {
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
	while($r14 = mysqli_fetch_assoc($p1Consec)) {
	    $rows14[] = $r14;
	}
	while($r15 = mysqli_fetch_assoc($winningest)) {
	    $rows15[] = $r15;
	}
	while($r16 = mysqli_fetch_assoc($latestSeason)) {
	    $rows16[] = $r16;
	}
	while($r17 = mysqli_fetch_assoc($latestSeasonTotal)) {
	    $rows17[] = $r17;
	}

	$players = array("playerDetail" => $rows);
	$playersPtsChart = array("playersPtsChart" => $rows2);
	$playersCareerAvg = array("playersCareerAvg" => $rows3);
	$playersCareerBySeasonLeague = array("playersCareerBySeasonLeague" => $rows4);
	$playersCareerTot = array("playersCareerTot" => $rows5);
	$playersCareerBySeasonLeagueF = array("playersCareerBySeasonLeagueF" => $rows6);
	$playersCareerTotF = array("playersCareerTotF" => $rows7);
	$playersCareerHigh = array("playersCareerHigh" => $rows8);
	$playersCareerHighFGM = array("playersCareerHighFGM" => $rows9);
	$playersCareerHighFTP = array("playersCareerHighFTP" => $rows10);
	$playersCareerBySeasonLeagueAvg = array("playersCareerBySeasonLeagueAvg" => $rows11);
	$playersCareerBySeasonLeagueFAvg = array("playersCareerBySeasonLeagueFAvg" => $rows12);
	$playersCareerTotFAvg = array("playersCareerTotFAvg" => $rows13);
	$p1Consecutive = array("p1Consec" => $rows14);
	$winningestP = array("winningestP" => $rows15);
	$latest = array("latest" => $rows16);
	$latestTot = array("latestTot" => $rows17);

	print json_encode($players + $playersPtsChart + $playersCareerAvg + $latest + $latestTot + $playersCareerBySeasonLeague + $playersCareerTot  + $playersCareerBySeasonLeagueF + $playersCareerTotF + $playersCareerHigh + $playersCareerHighFGM + $playersCareerHighFTP + $playersCareerBySeasonLeagueAvg + $playersCareerBySeasonLeagueFAvg + $playersCareerTotFAvg + $p1Consecutive + $winningestP, JSON_NUMERIC_CHECK);

?>
