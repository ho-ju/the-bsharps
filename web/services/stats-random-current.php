<?php include("../inc/global-stat-vars.php"); ?>

<?php
		
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p1Consec = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, active, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.image as image, s.roundID as roundID, p.active as active, p.url as url, GmsPlayed,
			    (@x:=IF(p.active=0,@x:=0,
			    	if(". $selected_curr_type ." ". $selected_curr_battery ." 0,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	))) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID and s.PID = 1 and GmsPlayed = 1 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC
			LIMIT 0,1") or die(mysql_error());

	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p2Consec = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, active, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.image as image, s.roundID as roundID, p.active as active, p.url as url, GmsPlayed,
			    (@x:=IF(p.active=0,@x:=0,
			    	if(". $selected_curr_type ." ". $selected_curr_battery ." 0,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	))) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID and s.PID = 2 and GmsPlayed = 1 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC
			LIMIT 0,1") or die(mysql_error());

	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p3Consec = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, active, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.image as image, s.roundID as roundID, p.active as active, p.url as url, GmsPlayed,
			    (@x:=IF(p.active=0,@x:=0,
			    	if(". $selected_curr_type ." ". $selected_curr_battery ." 0,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	))) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID and s.PID = 3 and GmsPlayed = 1 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC
			LIMIT 0,1") or die(mysql_error());

	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p4Consec = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, active, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.image as image, s.roundID as roundID, p.active as active, p.url as url, GmsPlayed,
			    (@x:=IF(p.active=0,@x:=0,
			    	if(". $selected_curr_type ." ". $selected_curr_battery ." 0,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	))) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID and s.PID = 4 and GmsPlayed = 1 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC
			LIMIT 0,1") or die(mysql_error());

	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p5Consec = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, active, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.image as image, s.roundID as roundID, p.active as active, p.url as url, GmsPlayed,
			    (@x:=IF(p.active=0,@x:=0,
			    	if(". $selected_curr_type ." ". $selected_curr_battery ." 0,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	))) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID and s.PID = 5 and GmsPlayed = 1 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC
			LIMIT 0,1") or die(mysql_error());

	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p6Consec = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, active, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.image as image, s.roundID as roundID, p.active as active, p.url as url, GmsPlayed,
			    (@x:=IF(p.active=0,@x:=0,
			    	if(". $selected_curr_type ." ". $selected_curr_battery ." 0,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	))) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID and s.PID = 6 and GmsPlayed = 1 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC
			LIMIT 0,1") or die(mysql_error());

	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p7Consec = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, active, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.image as image, s.roundID as roundID, p.active as active, p.url as url, GmsPlayed,
			    (@x:=IF(p.active=0,@x:=0,
			    	if(". $selected_curr_type ." ". $selected_curr_battery ." 0,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	))) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID and s.PID = 7 and GmsPlayed = 1 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC
			LIMIT 0,1") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p8Consec = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, active, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.image as image, s.roundID as roundID, p.active as active, p.url as url, GmsPlayed,
			    (@x:=IF(p.active=0,@x:=0,
			    	if(". $selected_curr_type ." ". $selected_curr_battery ." 0,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	))) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID and s.PID = 8 and GmsPlayed = 1 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC
			LIMIT 0,1") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p9Consec = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, active, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.image as image, s.roundID as roundID, p.active as active, p.url as url, GmsPlayed,
			    (@x:=IF(p.active=0,@x:=0,
			    	if(". $selected_curr_type ." ". $selected_curr_battery ." 0,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	))) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID and s.PID = 9 and GmsPlayed = 1 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC
			LIMIT 0,1") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p10Consec = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, active, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.image as image, s.roundID as roundID, p.active as active, p.url as url, GmsPlayed,
			    (@x:=IF(p.active=0,@x:=0,
			    	if(". $selected_curr_type ." ". $selected_curr_battery ." 0,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	))) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID and s.PID = 10 and GmsPlayed = 1 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC
			LIMIT 0,1") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p11Consec = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, active, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.image as image, s.roundID as roundID, p.active as active, p.url as url, GmsPlayed,
			    (@x:=IF(p.active=0,@x:=0,
			    	if(". $selected_curr_type ." ". $selected_curr_battery ." 0,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	))) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID and s.PID = 11 and GmsPlayed = 1 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC
			LIMIT 0,1") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p12Consec = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, active, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.image as image, s.roundID as roundID, p.active as active, p.url as url, GmsPlayed,
			    (@x:=IF(p.active=0,@x:=0,
			    	if(". $selected_curr_type ." ". $selected_curr_battery ." 0,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	))) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID and s.PID = 12 and GmsPlayed = 1 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC
			LIMIT 0,1") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p13Consec = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, active, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.image as image, s.roundID as roundID, p.active as active, p.url as url, GmsPlayed,
			    (@x:=IF(p.active=0,@x:=0,
			    	if(". $selected_curr_type ." ". $selected_curr_battery ." 0,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	))) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID and s.PID = 13 and GmsPlayed = 1 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC
			LIMIT 0,1") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p14Consec = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, active, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.image as image, s.roundID as roundID, p.active as active, p.url as url, GmsPlayed,
			    (@x:=IF(p.active=0,@x:=0,
			    	if(". $selected_curr_type ." ". $selected_curr_battery ." 0,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	))) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID and s.PID = 14 and GmsPlayed = 1 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC
			LIMIT 0,1") or die(mysql_error());
	

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

	while($r = mysqli_fetch_assoc($p1Consec)) {
	    $rows[] = $r;
	}
	while($r2 = mysqli_fetch_assoc($p2Consec)) {
	    $rows2[] = $r2;
	}
	while($r3 = mysqli_fetch_assoc($p3Consec)) {
	    $rows3[] = $r3;
	}
	while($r4 = mysqli_fetch_assoc($p4Consec)) {
	    $rows4[] = $r4;
	}
	while($r5 = mysqli_fetch_assoc($p5Consec)) {
	    $rows5[] = $r5;
	}
	while($r6 = mysqli_fetch_assoc($p6Consec)) {
	    $rows6[] = $r6;
	}
	while($r7 = mysqli_fetch_assoc($p7Consec)) {
	    $rows7[] = $r7;
	}
	while($r8 = mysqli_fetch_assoc($p8Consec)) {
	    $rows8[] = $r8;
	}
	while($r9 = mysqli_fetch_assoc($p9Consec)) {
	    $rows9[] = $r9;
	}
	while($r10 = mysqli_fetch_assoc($p10Consec)) {
	    $rows10[] = $r10;
	}
	while($r11 = mysqli_fetch_assoc($p11Consec)) {
	    $rows11[] = $r11;
	}
	while($r12 = mysqli_fetch_assoc($p12Consec)) {
	    $rows12[] = $r12;
	}
	while($r13 = mysqli_fetch_assoc($p13Consec)) {
	    $rows13[] = $r13;
	}
	while($r14 = mysqli_fetch_assoc($p14Consec)) {
	    $rows14[] = $r14;
	}
	

	$p1Consecutive = array("p1Consec" => $rows);
	$p2Consecutive = array("p2Consec" => $rows2);
	$p3Consecutive = array("p3Consec" => $rows3);
	$p4Consecutive = array("p4Consec" => $rows4);
	$p5Consecutive = array("p5Consec" => $rows5);
	$p6Consecutive = array("p6Consec" => $rows6);
	$p7Consecutive = array("p7Consec" => $rows7);
	$p8Consecutive = array("p8Consec" => $rows8);
	$p9Consecutive = array("p9Consec" => $rows9);
	$p10Consecutive = array("p10Consec" => $rows10);
	$p11Consecutive = array("p11Consec" => $rows11);
	$p12Consecutive = array("p12Consec" => $rows12);
	$p13Consecutive = array("p13Consec" => $rows13);
	$p14Consecutive = array("p14Consec" => $rows14);


	print json_encode(array($p1Consecutive + $p2Consecutive + $p3Consecutive + $p4Consecutive + $p5Consecutive + $p6Consecutive + $p7Consecutive + $p8Consecutive + $p9Consecutive + $p10Consecutive + $p11Consecutive + $p12Consecutive + $p13Consecutive + $p14Consecutive), JSON_NUMERIC_CHECK);

?>
