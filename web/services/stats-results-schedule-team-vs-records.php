<?php include("../inc/global-stat-vars.php"); ?>

<?php 	
	
	// Set up next match
	$team = (isset($_GET['teamID']) ? $_GET['teamID'] : null);

	$sqlLastThree = mysqli_query($con, 'SELECT t.teamname as t1, resultT1, result, resultT2, tv.teamname as t2, DATE_FORMAT(s.date,"%b %y") as dateF FROM tb_schedule s, tb_teams t, tb_teams_vs tv WHERE t.tid = s.team1 and tv.tid = s.team2 and tv.tid = ' . $team . ' and result !="" ORDER by s.date desc LIMIT 0,3') or die(mysql_error());
	$sqlRecord = mysqli_query($con, 'SELECT t.teamname as t1_ov,( SELECT count(result) FROM tb_schedule s, tb_teams t, tb_teams_vs tv WHERE t.tid = s.team1 and tv.tid = s.team2 and tv.tid = ' . $team . ' and result = "DEF") as WINS_ov, tv.teamname as t2_ov, (SELECT count(result) FROM tb_schedule s, tb_teams t, tb_teams_vs tv WHERE t.tid = s.team1 and tv.tid = s.team2 and tv.tid = ' . $team . ' and result = "LST") as LOSSES_ov, (SELECT count(result) FROM tb_schedule s, tb_teams t, tb_teams_vs tv WHERE t.tid = s.team1 and tv.tid = s.team2 and tv.tid = ' . $team . ' and result = "DRW") as DRAWS_ov FROM tb_schedule s, tb_teams t, tb_teams_vs tv WHERE t.tid = s.team1 and tv.tid = s.team2 and tv.tid = ' . $team . ' GROUP BY t1_ov') or die(mysql_error());
	$sqlRecordFinals = mysqli_query($con, 'SELECT t.teamname as t1_f, (SELECT count(result) FROM tb_schedule s, tb_teams t, tb_teams_vs tv WHERE t.tid = s.team1 and tv.tid = s.team2 and tv.tid = ' . $team . ' and result = "DEF" and final="Y") as WINS_f, tv.teamname as t2_f, (SELECT count(result) FROM tb_schedule s, tb_teams t, tb_teams_vs tv WHERE t.tid = s.team1 and tv.tid = s.team2 and tv.tid = ' . $team . ' and result = "LST" and final="Y") as LOSSES_f, (SELECT count(result) FROM tb_schedule s, tb_teams t, tb_teams_vs tv WHERE t.tid = s.team1 and tv.tid = s.team2 and tv.tid = ' . $team . ' and result = "DRW" and final="Y") as DRAWS_f FROM tb_schedule s, tb_teams t, tb_teams_vs tv WHERE t.tid = s.team1 and tv.tid = s.team2 and tv.tid = ' . $team . ' GROUP BY t1_f') or die(mysql_error());

	$rows1 = array();
	$rows2 = array();
	$rows3 = array();
	while($r = mysqli_fetch_assoc($sqlLastThree)) {
	    $rows1[] = $r;
	}
	while($r2 = mysqli_fetch_assoc($sqlRecord)) {
	    $rows2[] = $r2;
	}
	while($r3 = mysqli_fetch_assoc($sqlRecordFinals)) {
	    $rows3[] = $r3;
	}

	$lastThree = array("lastThree" => $rows1);
	$overall = array("overall" => $rows2);
	$finals = array("finals" => $rows3);

	print json_encode($lastThree + $overall + $finals);


?>