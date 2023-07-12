<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
	<?php include("inc/global-vars.php"); ?>

	<div ng-controller="ladderController" id="ladder" ng-cloak>
        <div ng-controller="leaguesSeasonsRoundsController" ng-init="initLeaguesSeasonsRounds();">
    		<div class="crumbs clearfix">
    			<ul>
    				<li><span id="leagues">{{selectedLeagueName}}</span> ({{selectedSeasonName}})</li>
    				<li>&nbsp;&nbsp;::&nbsp;&nbsp;<li>
    				<li class="title"><h1>Ladder</h1></li>
    			</ul>
    		</div>

    		<div class="subtitle dropdown-container">
    			<h2 data-animation="am-flip-x" bs-dropdown aria-haspopup="true" aria-expanded="false" class="dropdown" ng-click="leagueDd = !leagueDd; activateDD(leagueDd);" ng-blur="leagueDd = !leagueDd; activateDD(leagueDd);" ng-class="{'active': leagueDd, 'no-hover': availLeagues.length == 1}" tabindex="-1">
    				<span class="text">
    					{{selectedLeagueName}}
    					<span ng-if="selectedLeagueVenue != '' "> @</span>
    					<span ng-if="selectedLeagueVenue != '' "> {{selectedLeagueVenue}}</span>
    				</span>
    				<span class="triangle" ng-if="availLeagues.length > 1"></span>
    			</h2>
    			<ul class="dropdown-menu leagues-dd" role="menu" ng-class="{'hide': availLeagues.length == 1}">
    				<li ng-repeat="league in availLeagues" ng-click="$parent.setLadder(league.comp, selectedSeason);get(league.comp, selectedSeason, 0);">
    					<span>{{league.leagueName}} @ {{league.leagueVenue}}</span>
    				</li>
    				<li ng-click="$parent.setLadder('', selectedSeason);get('', selectedSeason, 0);" ng-if="availLeagues.length > 1"><span>All Leagues</span></li>
    			</ul>
    			<span class="dots">::</span>
    			<h4 data-animation="am-flip-x" bs-dropdown aria-haspopup="true" aria-expanded="false" class="dropdown" ng-click="seasonDd = !seasonDd; activateDD(seasonDd);" ng-blur="seasonDd = !seasonDd; activateDD(seasonDd);" ng-class="{'active': seasonDd}" tabindex="-1">
    				<span class="season text">{{selectedSeasonFullName}}</span>
    				<span class="triangle"></span>
    			</h4>
    			<ul class="dropdown-menu seasons-dd" role="menu">
    				<li class="current" ng-click="$parent.setLadder(selectedLeague, defaultSeason);get(selectedLeague, defaultSeason, 0);"><span>Current Season</span></li>
    				<li ng-repeat="season in availSeasons" ng-if="!$first" ng-click="$parent.setLadder(selectedLeague, season.seasonID);get(selectedLeague, season.seasonID, 0);">
    					<span>{{season.seasonName}}</span>
    				</li>
    			</ul>
    		</div>
        </div>

		<div ajax-loader="success" class=""></div>
        <div class="ladder" class="animated" ng-show="isData" ng-class="{'fadeIn': isData, 'fadeOut': !isData}" ng-init="initLadder();">
            <iframe src="" scrolling="no" frameborder="0" width="990"></iframe>
        </div>
        <div class="nope animated" ng-show="!isData" ng-class="{'fadeIn': !isData, 'fadeOut': isData}">
            <h4>No data available.</h4>
        </div>
	</div>
<?php
	//Assign all Page Specific variables
	$pagemaincontent = ob_get_contents();
	ob_end_clean();
	$navSelectedLadder ="active";
    $MetaDescription = "Ladder. The official site of The B-Sharps Basketball Club.";
    $pageTitle = "Ladder";
	$page = "results-schedule";
    $globalClass = "";
	$extraScript = "/static/dist/js/ladder-controller.js";
	//Apply the template
	include("master-index.php");
?>
