<?php

	$host = "localhost"; //database location
	$user = "webjhote_admin"; // PROD database username
	$pass = "theBsh@rps"; // PROD database password
	$db_name = "webjhote_ladder"; //database name


	$thisSeason = "18s";
	$thisLeague = "BHS";
	$selected_league = "and s.comp = '" .$thisLeague. "'";
	$selected_season = "and s.seasonID ='" .$thisSeason. "'";
	$selected_round_id = 1;
	$selected_player_id = 1;
	$isFinals = "";

	$selected_league = "";
	$selected_league_rbr = "";
	$selected_league_title = "";
	$selected_season = "";
	$selected_season_title = "";
	$selected_season_rank = "";
	$league = (isset($_GET['league']) ? $_GET['league'] : $thisLeague);
	$season = (isset($_GET['season']) ? $_GET['season'] : $thisSeason);
	$finals = (isset($_GET['finals']) ? $_GET['finals'] : '');
	$career = (isset($_GET['career']) ? $_GET['career'] : '');
	$roundID = (isset($_GET['roundID']) ? $_GET['roundID'] : 1);
	$playerID = (isset($_GET['pid']) ? $_GET['pid'] : 1);
	$selected_curr_type = (isset($_GET['currStatType']) ? $_GET['currStatType'] : '3PT');
	$selected_curr_battery = (isset($_GET['battery']) ? $_GET['battery'] : '>');
	$selected_round_id = $roundID;
	$selected_player_id = $playerID;
	


	//database connection
	$con = mysqli_connect($host, $user, $pass, $db_name);
	if (!$con) {
	    die("Database connection failed: " . mysqli_error());
	}

	// Select DB to use
	$db_select = mysqli_select_db($con, $db_name);
	if (!$db_select) {
	    die("Database selection failed: " . mysqli_error());
	}


	// League & Season setup
	if($league == "BHS"){
		$selected_league = "and s.comp = 'BHS'";
		$selected_league_rbr = "BHS";
		$selected_league_title = "Thursday Night @ BHS";
		$selected_pers = "view_player_rankings_s" .$season. "_" .$league;
	} elseif($league == "BHS2"){
		$selected_league =  "and s.comp = 'BHS2'";
		$selected_league_rbr = "BHS2";
		$selected_league_title = "Sunday Night @ BHS";
		$selected_pers = "view_player_rankings_s" .$season. "_" .$league;
	}else { // Default League
		$selected_league = "";
		$selected_league_rbr = "";
		$selected_league_title = "All Leagues";
		$selected_pers = "view_player_rankings_s" .$season. "_all";
	}
	if($season == "18s"){
		$selected_season = "and s.seasonID = '18s'";
		$selected_season_title = "Summer, 2018";
	}elseif($season == "17w"){
		$selected_season = "and s.seasonID = '17w'";
		$selected_season_title = "Winter, 2017";
	}elseif($season == "17s"){
		$selected_season = "and s.seasonID = '17s'";
		$selected_season_title = "Summer, 2017";
	}elseif($season == "16w"){
		$selected_season = "and s.seasonID = '16w'";
		$selected_season_title = "Winter, 2016";
	}elseif($season == "16s"){
		$selected_season = "and s.seasonID = '16s'";
		$selected_season_title = "Summer, 2016";
	}elseif($season == "15w"){
		$selected_season = "and s.seasonID = '15w'";
		$selected_season_title = "Winter, 2015";
	}elseif($season == "15s"){
		$selected_season = "and s.seasonID = '15s'";
		$selected_season_title = "Summer, 2015";
	}elseif($season == "14w"){
		$selected_season = "and s.seasonID = '14w'";
		$selected_season_title = "Winter, 2014";
	}elseif($season == "14s"){
		$selected_season = "and s.seasonID = '14s'";
		$selected_season_title = "Summer, 2014";
	}elseif($season == "13w"){
		$selected_season = "and s.seasonID = '13w'";
		$selected_season_title = "Winter, 2013";
	}elseif($season == "13s"){
		$selected_season = "and s.seasonID = '13s'";
		$selected_season_title = "Summer, 2013";
	}elseif($season == "12w"){
		$selected_season = "and s.seasonID = '12w'";
		$selected_season_title = "Winter, 2012";
	}elseif($season == "12s"){
		$selected_season = "and s.seasonID = '12s'";
		$selected_season_title = "Summer, 11/2012";
	}elseif($season == "11w"){
		$selected_season = "and s.seasonID = '11w'";
		$selected_season_title = "Winter, 2011";
	} elseif($season == "11s"){
		$selected_season = "and s.seasonID = '11s'";
		$selected_season_title = "Summer, 2011";
	} elseif($season == "10w"){
		$selected_season = "and s.seasonID = '10w'";
		$selected_season_title = "Winter, 2010";
	} elseif($season == "10s"){
		$selected_season = "and s.seasonID = '10s'";
		$selected_season_title = "Summer, '09/2010";
	} elseif($season == "09w"){
		$selected_season = "and s.seasonID = '09w'";
		$selected_season_title = "Winter, 2009";
	} elseif($season == "08s"){
		$selected_season = "and s.seasonID = '08s'";
		$selected_season_title = "Summer, 2008";
	} else { //Default season
		$season = $thisSeason;
		$selected_season = "and s.seasonID = '18s'";
		$selected_season_title = "Summer, 2018";
	}


	// Finals and Career Setup
	if($finals) {
		$selected_season = "";
		$selected_league = "";
		$isFinals = "AND s.final = 'Y'";
		$selected_pers = "view_player_rankings_finals";
	}
	if($career) {
		$selected_season = "";
		$selected_league = "";
		$isFinals = "";
		$selected_pers = "view_player_rankings";
	}
?>
