<?php include("../inc/global-stat-vars.php"); ?>

<?php

	$sth = mysqli_query($con, "SELECT *, (SELECT sum(GmsPlayed) FROM tb_stats WHERE PID=". $selected_player_id .") as gmsPlayed FROM tb_players WHERE pid =". $selected_player_id) or die(mysql_error());

	$ptsChart = mysqli_query($con, "SELECT ROUND(((SUM(TotalPoints) - SUM(FTM) - (SUM(3PT) * 3)) / SUM(TotalPoints)*100) , 2) as 2ptWT, Round(((SUM(3pt)*3) / SUM(TotalPoints)*100), 2) as 3ptWT, Round((SUM(FTM) / SUM(TotalPoints)*100), 2) as FtWT FROM tb_stats s WHERE PID=". $selected_player_id." $selected_season $selected_league $isFinals") or die(mysql_error());

	$careerTotal = mysqli_query($con, "SELECT SUM(TotalPoints) as tPts, SUM(3PT) as t3pt, SUM(FTA) as tFTA, SUM(FTM) as tFTM, ROUND((SUM(FTM) / SUM(FTA) * 100),1) as tFTP, ROUND((((SUM(s.TotalPoints) - SUM(s.FTM) - (SUM(s.3PT) * 3)) / 2) + SUM(s.3PT)) , 0) as tFGM, SUM(Fouls) as tFouls, (SELECT ROUND(((TtlPts + Ttl3pts + TtlFTM + TtlFTA + IFNULL(FTP, 0) + TtlFouls)) - (TtlMFT * 2),2) from view_player_rankings WHERE PID =". $selected_player_id .") as avgEff, SUM(GmsPlayed) as tGp FROM tb_stats s WHERE PID =". $selected_player_id ." $selected_season $selected_league $isFinals") or die(mysqli_error());

	$careerAvg = mysqli_query($con, "SELECT (SELECT ROUND(((SUM(TotalPoints) / SUM(GmsPlayed))), 1) FROM tb_stats s WHERE PID=". $selected_player_id ." $selected_season $selected_league $isFinals)  as tPts, (SELECT ROUND(((SUM(3PT) / SUM(GmsPlayed))), 1) FROM tb_stats s WHERE PID=". $selected_player_id ." $selected_season $selected_league $isFinals)  as t3pt, (SELECT ROUND(((SUM(FTA) / SUM(GmsPlayed))), 1) FROM tb_stats s WHERE PID=". $selected_player_id ." $selected_season $selected_league $isFinals)  as tFTA, (SELECT ROUND(((SUM(FTM) / SUM(GmsPlayed))), 1) FROM tb_stats s WHERE PID=". $selected_player_id ." $selected_season $selected_league $isFinals)  as tFTM, (SELECT ROUND(((SUM(FTM) / SUM(FTA))) * 100, 1) FROM tb_stats s WHERE PID=". $selected_player_id ." $selected_season $selected_league $isFinals)  as tFTP, (SELECT ROUND(ROUND((((SUM(TotalPoints) - SUM(FTM) - (SUM(3PT) * 3)) / 2) + SUM(3PT)) , 0)  / SUM(GmsPlayed),1) FROM tb_stats s WHERE PID=". $selected_player_id ." $selected_season $selected_league $isFinals) as tFGM, (SELECT ROUND(((SUM(Fouls) / SUM(GmsPlayed))), 1) FROM tb_stats s WHERE PID=". $selected_player_id ." $selected_season $selected_league $isFinals)  as tFouls, (SELECT ROUND(((TtlPts + Ttl3pts + TtlFTM + TtlFTA + IFNULL(FTP, 0) + TtlFouls)) - (TtlMFT * 2),2) from view_player_rankings WHERE PID =". $selected_player_id .") as avgEff, (SELECT SUM(GmsPlayed) FROM tb_stats s WHERE PID=". $selected_player_id ." $selected_season $selected_league $isFinals)  as tGp FROM tb_stats s WHERE EntryID = 1") or die(mysql_error());

	$careerHigh = mysqli_query($con, "SELECT (SELECT TotalPoints from tb_stats s where PID =". $selected_player_id ." $selected_season $selected_league $isFinals ORDER BY TotalPoints DESC LIMIT 0,1) as mPts, (SELECT 3PT from tb_stats s where PID =". $selected_player_id ." $selected_season $selected_league $isFinals ORDER BY 3PT DESC LIMIT 0,1) as m3pt, (SELECT fouls from tb_stats s where PID =". $selected_player_id ." $selected_season $selected_league $isFinals ORDER BY Fouls DESC LIMIT 0,1) as mFouls, (SELECT FTA from tb_stats s where PID =". $selected_player_id ." $selected_season $selected_league $isFinals ORDER BY FTA DESC LIMIT 0,1) as mFTA, (SELECT FTM from tb_stats s where PID =". $selected_player_id ." $selected_season $selected_league $isFinals ORDER BY FTA DESC LIMIT 0,1) as mFTM FROM tb_stats s WHERE EntryID = 1") or die(mysqli_error());

	$careerHighFGM = mysqli_query($con, "SELECT ROUND((((SUM(s.TotalPoints) - SUM(s.FTM) - (SUM(s.3PT) * 3)) / 2) + SUM(s.3PT)) , 0) as mFGM FROM tb_stats s, tb_seasons se, tb_leagues l WHERE PID = ". $selected_player_id ." and s.seasonID = se.seasonID and s.comp = l.comp $selected_season $selected_league $isFinals GROUP BY s.entryID ORDER by mFGM DESC LIMIT 0,1") or die(mysqli_query());

	$careerHighFTP = mysqli_query($con, "SELECT ROUND((SUM(FTM) / SUM(FTA) * 100),1) as mFTP FROM tb_stats s, tb_seasons se, tb_leagues l WHERE PID = ". $selected_player_id ." and s.seasonID = se.seasonID and s.comp = l.comp $selected_season $selected_league $isFinals GROUP BY s.entryID ORDER by mFTP DESC LIMIT 0,1") or die(mysqli_query());

	$per = mysqli_query($con, "SELECT p.pid, p.pname, p.PNameFirst, p.PNameLast, p.pNo, p.posAbbr, p.height, p.url, gmsPlayed, ROUND(TtlPts,2) as TtlPts, ROUND(Ttl3pts,2) as Ttl3pts,ROUND(TtlFTM,2) as TtlFTM, ROUND(TtlFTA,2) as TtlFTA, ROUND(ttlMFT,2) as TtlMFT, ROUND(FTP,2) as FTP, ROUND(TtlFouls,2) as TtlFouls, ROUND(((TtlPts + Ttl3pts + TtlFTM + TtlFTA + IFNULL(FTP, 0) + TtlFouls)) - (TtlMFT * 2),2) as TOTAL from $selected_pers v, tb_players p where p.PID = v.PID and p.PID = ". $selected_player_id ." order by total desc") or die(mysql_error());

	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p1Consec = mysqli_query($con, "SELECT PID, max(consecutive) as stat, date, comp FROM
		(SELECT
		    s.PID,GmsPlayed,
		    (@x:=IF(GmsPlayed=1,@x+1,
		    		if(result='BYE',@x:=@x,0)
		    	)) consecutive, DATE_FORMAT(s.date,'%b ''%y') as date, s.comp as comp
		FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID =". $selected_player_id ." AND s.PID = p.PID $selected_season $selected_league $isFinals) a") or die(mysql_error());
	

	$rows = array();
	$rows2 = array();
	$rows3 = array();
	$rows4 = array();
	$rows5 = array();
	$rows6 = array();
	$rows7 = array();
	$rows8 = array();
	$rows9 = array();

	while($r = mysqli_fetch_assoc($sth)) {
	    $rows[] = $r;
	}
	while($r2 = mysqli_fetch_assoc($ptsChart)) {
	    $rows2[] = $r2;
	}
	while($r3 = mysqli_fetch_assoc($careerAvg)) {
	    $rows3[] = $r3;
	}
	while($r4 = mysqli_fetch_assoc($careerTotal)) {
	    $rows4[] = $r4;
	}
	while($r5 = mysqli_fetch_assoc($careerHigh)) {
		$rows5[] = $r5;
	}
	while($r6 = mysqli_fetch_assoc($careerHighFGM)) {
		$rows6[] = $r6;
	}
	while($r7 = mysqli_fetch_assoc($careerHighFTP)) {
		$rows7[] = $r7;
	}
	while($r8 = mysqli_fetch_assoc($per)) {
		$rows8[] = $r8;
	}
	while($r9 = mysqli_fetch_assoc($p1Consec)) {
	    $rows9[] = $r9;
	}

	$players = array("playerDetail" => $rows);
	$playersPtsChart = array("playersPtsChart" => $rows2);
	$playersCareerAvg = array("playersCareerAvg" => $rows3);
	$playersCareerTot = array("playersCareerTot" => $rows4);
	$playersCareerHigh = array("playersCareerHigh" => $rows5);
	$playersCareerHighFGM = array("playersCareerHighFGM" => $rows6);
	$playersCareerHighFTP = array("playersCareerHighFTP" => $rows7);
	$playersPER = array("playersPER" => $rows8);
	$p1Consecutive = array("p1Consec" => $rows9);

	print json_encode($players + $playersPtsChart + $playersCareerTot + $playersCareerAvg + $playersCareerHigh + $playersCareerHighFGM + $playersCareerHighFTP + $playersPER + $p1Consecutive, JSON_NUMERIC_CHECK);

?>
