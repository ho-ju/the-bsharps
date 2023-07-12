<?php include("../inc/global-stat-vars.php"); ?>

<?php
		
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p1Consec = mysqli_query($con, "SELECT PID,max(consecutive) as stat, name, pNo, posAbbr, height, url, image, pid FROM
		(SELECT
		    s.PID,GmsPlayed,
		    (@x:=IF(GmsPlayed=1,@x+1,
		    		if(result='BYE',@x:=@x,0)
		    	)) consecutive, p.pname as name, p.pNo pNo, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = 1 AND s.PID = p.PID) a") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p2Consec = mysqli_query($con, "SELECT PID,max(consecutive) as stat, name, pNo, posAbbr, height, url, image, pid FROM
		(SELECT
		    s.PID,GmsPlayed,
		    (@x:=IF(GmsPlayed=1,@x+1,
		    		if(result='BYE',@x:=@x,0)
		    	)) consecutive, p.pname as name, p.pNo pNo, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = 2 AND s.PID = p.PID) a") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p3Consec = mysqli_query($con, "SELECT PID,max(consecutive) as stat, name, pNo, posAbbr, height, url, image, pid FROM
		(SELECT
		    s.PID,GmsPlayed,
		    (@x:=IF(GmsPlayed=1,@x+1,
		    		if(result='BYE',@x:=@x,0)
		    	)) consecutive, p.pname as name, p.pNo pNo, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = 3 AND s.PID = p.PID) a") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p4Consec = mysqli_query($con, "SELECT PID,max(consecutive) as stat, name, pNo, posAbbr, height, url, image, pid FROM
			(SELECT
			    s.PID,GmsPlayed,
			    (@x:=IF(GmsPlayed=1,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	)) consecutive, p.pname as name, p.pNo pNo, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image
			    				FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = 4 AND s.PID = p.PID) a") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p5Consec = mysqli_query($con, "SELECT PID,max(consecutive) as stat, name, pNo, posAbbr, height, url, image, pid FROM
		(SELECT
		    s.PID,GmsPlayed,
		    (@x:=IF(GmsPlayed=1,@x+1,
		    		if(result='BYE',@x:=@x,0)
		    	)) consecutive, p.pname as name, p.pNo pNo, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = 5 AND s.PID = p.PID) a") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p6Consec = mysqli_query($con, "SELECT PID,max(consecutive) as stat, name, pNo, posAbbr, height, url, image, pid FROM
		(SELECT
		    s.PID,GmsPlayed,
		    (@x:=IF(GmsPlayed=1,@x+1,
		    		if(result='BYE',@x:=@x,0)
		    	)) consecutive, p.pname as name, p.pNo pNo, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = 6 AND s.PID = p.PID) a") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p7Consec = mysqli_query($con, "SELECT PID,max(consecutive) as stat, name, pNo, posAbbr, height, url, image, pid FROM
		(SELECT
		    s.PID,GmsPlayed,
		    (@x:=IF(GmsPlayed=1,@x+1,
		    		if(result='BYE',@x:=@x,0)
		    	)) consecutive, p.pname as name, p.pNo pNo, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = 7 AND s.PID = p.PID) a") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p8Consec = mysqli_query($con, "SELECT PID,max(consecutive) as stat, name, pNo, posAbbr, height, url, image, pid FROM
		(SELECT
		    s.PID,GmsPlayed,
		    (@x:=IF(GmsPlayed=1,@x+1,
		    		if(result='BYE',@x:=@x,0)
		    	)) consecutive, p.pname as name, p.pNo pNo, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = 8 AND s.PID = p.PID) a") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p9Consec = mysqli_query($con, "SELECT PID,max(consecutive) as stat, name, pNo, posAbbr, height, url, image, pid FROM
		(SELECT
		    s.PID,GmsPlayed,
		    (@x:=IF(GmsPlayed=1,@x+1,
		    		if(result='BYE',@x:=@x,0)
		    	)) consecutive, p.pname as name, p.pNo pNo, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = 9 AND s.PID = p.PID) a") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p10Consec = mysqli_query($con, "SELECT PID,max(consecutive) as stat, name, pNo, posAbbr, height, url, image, pid FROM
			(SELECT
			    s.PID,GmsPlayed,
			    (@x:=IF(GmsPlayed=1,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	)) consecutive, p.pname as name, p.pNo pNo, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image
			    				FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = 10 AND s.PID = p.PID) a") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p11Consec = mysqli_query($con, "SELECT PID,max(consecutive) as stat, name, pNo, posAbbr, height, url, image, pid FROM
		(SELECT
		    s.PID,GmsPlayed,
		    (@x:=IF(GmsPlayed=1,@x+1,
		    		if(result='BYE',@x:=@x,0)
		    	)) consecutive, p.pname as name, p.pNo pNo, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = 11 AND s.PID = p.PID) a") or die(mysql_error());

	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p12Consec = mysqli_query($con, "SELECT PID,max(consecutive) as stat, name, pNo, posAbbr, height, url, image, pid FROM
		(SELECT
		    s.PID,GmsPlayed,
		    (@x:=IF(GmsPlayed=1,@x+1,
		    		if(result='BYE',@x:=@x,0)
		    	)) consecutive, p.pname as name, p.pNo pNo, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = 12 AND s.PID = p.PID) a") or die(mysql_error());

	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p13Consec = mysqli_query($con, "SELECT PID,max(consecutive) as stat, name, pNo, posAbbr, height, url, image, pid FROM
		(SELECT
		    s.PID,GmsPlayed,
		    (@x:=IF(GmsPlayed=1,@x+1,
		    		if(result='BYE',@x:=@x,0)
		    	)) consecutive, p.pname as name, p.pNo pNo, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = 13 AND s.PID = p.PID) a") or die(mysql_error());

	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p14Consec = mysqli_query($con, "SELECT PID,max(consecutive) as stat, name, pNo, posAbbr, height, url, image, pid FROM
		(SELECT
		    s.PID,GmsPlayed,
		    (@x:=IF(GmsPlayed=1,@x+1,
		    		if(result='BYE',@x:=@x,0)
		    	)) consecutive, p.pname as name, p.pNo pNo, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = 14 AND s.PID = p.PID) a") or die(mysql_error());

	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p1ConsecCurr = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image, s.roundID as roundID, p.active as active, GmsPlayed,
			    (@x:=IF(GmsPlayed=1,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	)) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID AND s.pid = 1 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC 
			LIMIT 0,1") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p1ConsecCurr = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image, s.roundID as roundID, p.active as active, GmsPlayed,
			    (@x:=IF(GmsPlayed=1,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	)) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID AND s.pid = 1 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC 
			LIMIT 0,1") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p2ConsecCurr = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image, s.roundID as roundID, p.active as active, GmsPlayed,
			    (@x:=IF(GmsPlayed=1,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	)) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID AND s.pid = 2 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC 
			LIMIT 0,1") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p3ConsecCurr = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image, s.roundID as roundID, p.active as active, GmsPlayed,
			    (@x:=IF(GmsPlayed=1,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	)) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID AND s.pid = 3 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC 
			LIMIT 0,1") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p4ConsecCurr = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image, s.roundID as roundID, p.active as active, GmsPlayed,
			    (@x:=IF(GmsPlayed=1,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	)) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID AND s.pid = 4 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC 
			LIMIT 0,1") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p5ConsecCurr = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image, s.roundID as roundID, p.active as active, GmsPlayed,
			    (@x:=IF(GmsPlayed=1,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	)) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID AND s.pid = 5 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC 
			LIMIT 0,1") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p6ConsecCurr = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image, s.roundID as roundID, p.active as active, GmsPlayed,
			    (@x:=IF(GmsPlayed=1,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	)) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID AND s.pid = 6 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC 
			LIMIT 0,1") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p7ConsecCurr = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image, s.roundID as roundID, p.active as active, GmsPlayed,
			    (@x:=IF(GmsPlayed=1,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	)) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID AND s.pid = 7 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC 
			LIMIT 0,1") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p8ConsecCurr = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image, s.roundID as roundID, p.active as active, GmsPlayed,
			    (@x:=IF(GmsPlayed=1,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	)) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID AND s.pid = 8 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC 
			LIMIT 0,1") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p9ConsecCurr = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image, s.roundID as roundID, p.active as active, GmsPlayed,
			    (@x:=IF(GmsPlayed=1,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	)) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID AND s.pid = 9 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC 
			LIMIT 0,1") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p10ConsecCurr = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID,url,  consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image, s.roundID as roundID, p.active as active, GmsPlayed,
			    (@x:=IF(GmsPlayed=1,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	)) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID AND s.pid = 10 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC 
			LIMIT 0,1") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p11ConsecCurr = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID,url,  consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image, s.roundID as roundID, p.active as active, GmsPlayed,
			    (@x:=IF(GmsPlayed=1,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	)) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID AND s.pid = 11 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC 
			LIMIT 0,1") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p12ConsecCurr = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID,url,  consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image, s.roundID as roundID, p.active as active, GmsPlayed,
			    (@x:=IF(GmsPlayed=1,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	)) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID AND s.pid = 12 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC 
			LIMIT 0,1") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p13ConsecCurr = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID,url,  consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image, s.roundID as roundID, p.active as active, GmsPlayed,
			    (@x:=IF(GmsPlayed=1,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	)) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID AND s.pid = 13 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC 
			LIMIT 0,1") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$p14ConsecCurr = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID,url,  consecutive as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.url as url, p.image as image, s.roundID as roundID, p.active as active, GmsPlayed,
			    (@x:=IF(GmsPlayed=1,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	)) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID AND s.pid = 14 order by roundID) A ORDER BY roundID DESC, active DESC, stat DESC 
			LIMIT 0,1") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());

	

	$mostFoulsQ = mysqli_query($con, "SELECT p.pid, p.PName, p.pNo, p.posAbbr, p.height, p.url, p.image, COUNT(*) as stat FROM tb_stats s, tb_players p WHERE s.PID = p.PID AND FOULS >= 5 GROUP BY s.PID ORDER BY stat desc limit 0,5;") or die(mysql_error());
	$mostCleanQ = mysqli_query($con, "SELECT p.pid, p.PName, p.pNo, p.posAbbr, p.height, p.url, p.image, COUNT(*) as stat FROM tb_stats s, tb_players p WHERE s.PID = p.PID AND FOULS = 0 AND GmsPlayed = 1 GROUP BY s.PID ORDER BY stat desc limit 0,5;") or die(mysql_error());
	$mostDoughnutsQ = mysqli_query($con, "SELECT p.pid, p.PName, p.pNo, p.posAbbr, p.height, p.url, p.image, COUNT(*) as stat FROM tb_stats s, tb_players p WHERE s.PID = p.PID AND TotalPoints = 0 and GmsPlayed = 1 GROUP BY s.PID ORDER BY stat desc limit 0,5;") or die(mysql_error());

	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$most3ptStreak = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, max(consecutive) as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.image as image, s.roundID as roundID, p.active as active, p.url as url, GmsPlayed,
			    (@x:=IF(3pt>0,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	)) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID AND GmsPlayed = 1) A GROUP BY PID ORDER BY stat DESC
			LIMIT 0,5") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$mostFTAStreak = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, max(consecutive) as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.image as image, s.roundID as roundID, p.active as active, p.url as url, GmsPlayed,
			    (@x:=IF(FTA>0,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	)) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID AND GmsPlayed = 1) A GROUP BY PID ORDER BY stat DESC
			LIMIT 0,5") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$mostCleanStreak = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, max(consecutive) as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.image as image, s.roundID as roundID, p.active as active, p.url as url, GmsPlayed,
			    (@x:=IF(Fouls=0,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	)) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID AND GmsPlayed = 1) A GROUP BY PID ORDER BY stat DESC
			LIMIT 0,5") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$mostNon3ptStreak = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, max(consecutive) as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.image as image, s.roundID as roundID, p.active as active, p.url as url, GmsPlayed,
			    (@x:=IF(3pt=0,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	)) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID AND GmsPlayed = 1) A GROUP BY PID ORDER BY stat DESC
			LIMIT 0,5") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$mostNonFTAStreak = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, max(consecutive) as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.image as image, s.roundID as roundID, p.active as active, p.url as url, GmsPlayed,
			    (@x:=IF(FTA=0,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	)) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID AND GmsPlayed = 1) A GROUP BY PID ORDER BY stat DESC
			LIMIT 0,5") or die(mysql_error());
	$tempX = mysqli_query($con, "SET @x = 0;") or die(mysql_errno());
	$mostDoughnutsStreak = mysqli_query($con, "SELECT PID, PName, pno, posAbbr, height, image, roundID, url, max(consecutive) as stat FROM
			(SELECT
			    s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.image as image, s.roundID as roundID, p.active as active, p.url as url, GmsPlayed,
			    (@x:=IF(TotalPoints=0,@x+1,
			    		if(result='BYE',@x:=@x,0)
			    	)) consecutive,
			    (@n:=GmsPlayed) inc
			FROM tb_stats s, tb_schedule sc, tb_players p WHERE s.roundID = sc.roundID AND s.PID = p.PID AND GmsPlayed = 1) A GROUP BY PID ORDER BY stat DESC
			LIMIT 0,5") or die(mysql_error());

	$winningestP = mysqli_query($con, "SELECT  s.PID, p.PName as PName, p.pno as pno, p.posAbbr as posAbbr, p.height as height, p.image as image, s.roundID as roundID, p.active as active, p.url as url, GmsPlayed, count(*) as stat from tb_schedule sc, tb_players p, tb_stats s where result='DEF' AND s.roundID = sc.roundID AND p.pid = s.PID AND gmsPlayed = 1
group by p.PID ORDER BY p.PID") or die(mysql_error());
	$ttlGms = mysqli_query($con, "SELECT p.PID, SUM(gmsPlayed) as gms from tb_stats s, tb_players p WHERE s.PID = p.PID AND gmsPlayed > 0 GROUP BY PID ORDER BY PID") or die(mysql_error());
	$winningestPF = mysqli_query($con, "SELECT  s.PID, count(*) as winningestPF from tb_schedule sc, tb_players p, tb_stats s where result='DEF' AND s.roundID = sc.roundID AND p.pid = s.PID AND gmsPlayed = 1 AND sc.final = 'Y'
group by p.PID ORDER BY p.PID") or die(mysql_error());

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
	$rows21 = array();
	$rows22 = array();
	$rows23 = array();
	$rows24 = array();
	$rows25 = array();
	$rows26 = array();
	$rows27 = array();
	$rows28 = array();
	$rows29 = array();
	$rows30 = array();
	$rows31 = array();
	$rows32 = array();
	$rows33 = array();
	$rows34 = array();
	$rows35 = array();
	$rows36 = array();
	$rows37 = array();
	$rows38 = array();
	$rows39 = array();
	$rows40 = array();

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
	while($r12 = mysqli_fetch_assoc($mostFoulsQ)) {
	    $rows12[] = $r12;
	}
	while($r13 = mysqli_fetch_assoc($mostCleanQ)) {
	    $rows13[] = $r13;
	}
	while($r14 = mysqli_fetch_assoc($mostDoughnutsQ)) {
	    $rows14[] = $r14;
	}
	while($r15 = mysqli_fetch_assoc($p1ConsecCurr)) {
	    $rows15[] = $r15;
	}
	while($r16 = mysqli_fetch_assoc($p2ConsecCurr)) {
	    $rows16[] = $r16;
	}
	while($r17 = mysqli_fetch_assoc($p3ConsecCurr)) {
	    $rows17[] = $r17;
	}
	while($r18 = mysqli_fetch_assoc($p4ConsecCurr)) {
	    $rows18[] = $r18;
	}
	while($r19 = mysqli_fetch_assoc($p5ConsecCurr)) {
	    $rows19[] = $r19;
	}
	while($r20 = mysqli_fetch_assoc($p6ConsecCurr)) {
	    $rows20[] = $r20;
	}
	while($r21 = mysqli_fetch_assoc($p7ConsecCurr)) {
	    $rows21[] = $r21;
	}
	while($r22 = mysqli_fetch_assoc($p8ConsecCurr)) {
	    $rows22[] = $r22;
	}
	while($r23 = mysqli_fetch_assoc($p9ConsecCurr)) {
	    $rows23[] = $r23;
	}
	while($r24 = mysqli_fetch_assoc($p10ConsecCurr)) {
	    $rows24[] = $r24;
	}
	while($r25 = mysqli_fetch_assoc($p11ConsecCurr)) {
	    $rows25[] = $r25;
	}
	while($r26 = mysqli_fetch_assoc($most3ptStreak)) {
	    $rows26[] = $r26;
	}
	while($r27 = mysqli_fetch_assoc($mostFTAStreak)) {
	    $rows27[] = $r27;
	}
	while($r28 = mysqli_fetch_assoc($mostCleanStreak)) {
	    $rows28[] = $r28;
	}
	while($r29 = mysqli_fetch_assoc($mostNon3ptStreak)) {
	    $rows29[] = $r29;
	}
	while($r30 = mysqli_fetch_assoc($mostNonFTAStreak)) {
	    $rows30[] = $r30;
	}
	while($r31 = mysqli_fetch_assoc($mostDoughnutsStreak)) {
	    $rows31[] = $r31;
	}
	while($r32 = mysqli_fetch_assoc($winningestP)) {
	    $rows32[] = $r32;
	}
	while($r33 = mysqli_fetch_assoc($ttlGms)) {
	    $rows33[] = $r33;
	}
	while($r34 = mysqli_fetch_assoc($winningestPF)) {
	    $rows34[] = $r34;
	}
	while($r35 = mysqli_fetch_assoc($p12Consec)) {
	    $rows35[] = $r35;
	}
	while($r36 = mysqli_fetch_assoc($p13Consec)) {
	    $rows36[] = $r36;
	}
	while($r37 = mysqli_fetch_assoc($p14Consec)) {
	    $rows37[] = $r37;
	}
	while($r38 = mysqli_fetch_assoc($p12ConsecCurr)) {
	    $rows38[] = $r38;
	}
	while($r39 = mysqli_fetch_assoc($p13ConsecCurr)) {
	    $rows39[] = $r39;
	}
	while($r40 = mysqli_fetch_assoc($p14ConsecCurr)) {
	    $rows40[] = $r40;
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
	$p12Consecutive = array("p12Consec" => $rows35);
	$p13Consecutive = array("p13Consec" => $rows36);
	$p14Consecutive = array("p14Consec" => $rows37);
	$mostFouls = array("mostFouls" => $rows12);
	$mostClean = array("mostClean" => $rows13);
	$mostDoughnuts = array("mostDoughnuts" => $rows14);
	$p1ConsecutiveCurr = array("p1ConsecCurr" => $rows15);
	$p2ConsecutiveCurr = array("p2ConsecCurr" => $rows16);
	$p3ConsecutiveCurr = array("p3ConsecCurr" => $rows17);
	$p4ConsecutiveCurr = array("p4ConsecCurr" => $rows18);
	$p5ConsecutiveCurr = array("p5ConsecCurr" => $rows19);
	$p6ConsecutiveCurr = array("p6ConsecCurr" => $rows20);
	$p7ConsecutiveCurr = array("p7ConsecCurr" => $rows21);
	$p8ConsecutiveCurr = array("p8ConsecCurr" => $rows22);
	$p9ConsecutiveCurr = array("p9ConsecCurr" => $rows23);
	$p10ConsecutiveCurr = array("p10ConsecCurr" => $rows24);
	$p11ConsecutiveCurr = array("p11ConsecCurr" => $rows25);
	$p12ConsecutiveCurr = array("p12ConsecCurr" => $rows38);
	$p13ConsecutiveCurr = array("p13ConsecCurr" => $rows39);
	$p14ConsecutiveCurr = array("p14ConsecCurr" => $rows40);
	$most3ptSt = array("most3ptSt" => $rows26);
	$mostFTASt = array("mostFTASt" => $rows27);
	$mostCleanSt = array("mostCleanSt" => $rows28);
	$mostNon3ptSt = array("mostNon3ptSt" => $rows29);
	$mostNonFTASt = array("mostNonFTASt" => $rows30);
	$mostDoughnutsSt = array("mostDoughnutsSt" => $rows31);
	$winningestPlayer = array("winningestPlayer" => $rows32);
	$ttlGames = array("ttlGames" => $rows33);
	$winningestPlayerF = array("winningestPlayerF" => $rows34);


	print json_encode(array($p1Consecutive + $p2Consecutive + $p3Consecutive + $p4Consecutive + $p5Consecutive + $p6Consecutive + $p7Consecutive + $p8Consecutive + $p9Consecutive + $p10Consecutive + $p11Consecutive + $p12Consecutive + $p13Consecutive + $p14Consecutive + $mostFouls + $mostClean + $mostDoughnuts + $p1ConsecutiveCurr + $p2ConsecutiveCurr + $p3ConsecutiveCurr + $p4ConsecutiveCurr + $p5ConsecutiveCurr + $p6ConsecutiveCurr + $p7ConsecutiveCurr + $p8ConsecutiveCurr + $p9ConsecutiveCurr + $p10ConsecutiveCurr + $p11ConsecutiveCurr + $p12ConsecutiveCurr + $p13ConsecutiveCurr + $p14ConsecutiveCurr + $most3ptSt + $mostFTASt + $mostCleanSt + $mostNon3ptSt + $mostNonFTASt + $mostDoughnutsSt + $winningestPlayer + $ttlGames + $winningestPlayerF), JSON_NUMERIC_CHECK);

?>
