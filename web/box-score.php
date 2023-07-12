<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
	<?php include("inc/global-vars.php"); ?>

	<div id="boxscore" ng-controller="boxScoreController" ng-init="initBoxScore();" ng-cloak>

        <h3 ng-if="filterInProgress" class="filter-msg">
            <span class="icon flaticon-returning-arrow"></span><span>Please update filter.</span>
        </h3>

        <div ng-controller="leaguesSeasonsRoundsController" ng-init="initLeaguesSeasonsRounds();" ng-cloak>
    		<div class="crumbs clearfix">
    			<ul>
    				<li><span id="leagues"><a href="/stats">stats</a></span></li>
    				<li ng-show="success">&nbsp;&nbsp;::&nbsp;&nbsp;<li>
    				<li class="title"><h1>Box Score</h1></li>
    			</ul>
    		</div>

    		<div class="subtitle dropdown-container" ng-show="success">
    			<h2 data-animation="am-flip-x" bs-dropdown aria-haspopup="true" aria-expanded="false" class="dropdown" ng-click="leagueDd = !leagueDd; activateDD(leagueDd);" ng-blur="leagueDd = !leagueDd; activateDD(leagueDd);" ng-class="{'active': leagueDd, 'no-hover': availLeagues.length == 1}" tabindex="-1">
    				<span class="text">
    					{{selectedLeagueName}}
    					<span ng-if="selectedLeagueVenue != '' "> @</span>
    					<span ng-if="selectedLeagueVenue != '' "> {{selectedLeagueVenue}}</span>
    				</span>
    				<span class="triangle" ng-if="availLeagues.length > 1"></span>
    			</h2>
    			<ul class="dropdown-menu leagues-dd" role="menu" ng-class="{'hide': availLeagues.length == 1}">
    				<li ng-repeat="league in availLeagues" ng-click="setLeague(league.comp);">
    					<span>{{league.leagueName}}<span class="at">@</span>{{league.leagueVenue}}</span>
    				</li>
    			</ul>
    			<span class="dots">::</span>
    			<h4 data-animation="am-flip-x" bs-dropdown aria-haspopup="true" aria-expanded="false" class="dropdown" ng-click="seasonDd = !seasonDd; activateDD(seasonDd);" ng-blur="seasonDd = !seasonDd; activateDD(seasonDd);" ng-class="{'active': seasonDd}" tabindex="-1">
    				<span class="season text">{{selectedSeasonFullName}}</span>
    				<span class="triangle"></span>
    			</h4>
    			<ul class="dropdown-menu seasons-dd" role="menu">
    				<li ng-click="setSeason(defaultSeason);" class="current"><span>Current Season</span></li>
    				<li ng-repeat="season in availSeasons" ng-if="!$first" ng-click="setSeason(season.seasonID);">
    					<span>{{season.seasonName}}</span>
    				</li>
    			</ul>
                <span class="dots">::</span>
    			<h4 data-animation="am-flip-x" bs-dropdown aria-haspopup="true" aria-expanded="false" class="dropdown" ng-click="seasonDd = !seasonDd;activateDD(seasonDd);" ng-blur="seasonDd = !seasonDd;activateDD(seasonDd);" ng-class="{'active': seasonDd}" tabindex="-1">
    				<span class="season text">{{selRoundName}}</span>
    				<span class="triangle"></span>
    			</h4>
    			<ul class="dropdown-menu seasons-dd rounds-dd" role="menu">
    				<li ng-repeat="round in availRounds" ng-click="$parent.getBoxScore(selectedLeague, result.selSeason[0].seasonID, round.roundID);get(selectedLeague, selectedSeason, round.roundID);">
    					<span>{{round.roundName}}</span>
    				</li>
    			</ul>
    		</div>
        </div>

        <div class="hr"></div>

		<div class="animate" ng-class="{'dimContent': filterInProgress || filterActive}">
            <div class="scores" ng-show="success">
                <div class="col col-1">
                    <img src="/static/img/logo-star.png" alt="The B-Sharps">
                    <div ng-show="success" class="animated" ng-class="{'fadeIn': success, 'fadeOut': !success}">
                        <span class="team">The B-Sharps</span>
                        <span class="ratio font-text">({{totalsSummary.TotWins}}<span>w</span> - {{totalsSummary.TotLoss}}<span>l</span> - {{totalsSummary.TotDraws}}<span>d</span>)</span>
                        <span class="score">{{gameResult.resultT1}}</span>
                    </div>
                </div>
                <div class="col col-2">
                    <div ng-show="success" class="animated" ng-class="{'fadeIn': success, 'fadeOut': !success}">
                        <span class="result">{{gameResult.result}}</span>
                        <span class="time-date-ven font-text">{{gameResult.roundName}}</span>
                        <span class="time-date-ven font-text">{{gameResult.dateF}} @ {{gameResult.venue}}</span>
                        <span class="history" ng-show="!apiErrorTeamVs">Historical</span>
                        <span class="ratio font-text" ng-show="!apiErrorTeamVs">({{resultTeamVsOverall.WINS_ov}}<span>w</span> - {{resultTeamVsOverall.LOSSES_ov}}<span>l</span> - {{resultTeamVsOverall.DRAWS_ov}}<span>d</span>)</span>
                    </div>
                </div>
                <div class="col col-3">
                    <i class="flaticon-basketball"></i>
                    <div ng-show="success" class="animated" ng-class="{'fadeIn': success, 'fadeOut': !success}">
                        <span class="team">{{gameResult.teamVName}}</span>
                        <span class="ratio font-text">(- - -)</span>
                        <span class="score">{{gameResult.resultT2}}</span>
                    </div>
                </div>
            </div>

            <div class="box-score-container">
                <table id="box-score-table" class="std-table">
                    <thead>
    					<tr>
    						<th class="name sortable tleft" ng-click="sortType='playerNo';sortReverse = false;">
                                <span class="text">Name</span>
	                            <span class="triangle" ng-class="{'active': sortType == 'playerNo'}"></span>
                            </th>
                            <th class="tcenter dnp">&nbsp;</th>
    						<th class="tcenter sortable" ng-click="sortType='TotalPoints';sortReverse = true;">
                                <span class="text">
                                    <span class="hidden-mobile">Points</span>
                                    <span class="hidden-desktop">PTS</span>
                                </span>
	                            <span class="triangle" ng-class="{'active': sortType == 'TotalPoints'}"></span>
                            </th>
    						<th class="tcenter sortable" ng-click="sortType='threePoint';sortReverse = true;">
                                <span class="text">3pm</span>
	                            <span class="triangle" ng-class="{'active': sortType == 'threePoint'}"></span>
                            </th>
                            <th class="tcenter sortable" ng-click="sortType='FGMade';sortReverse = true;">
                                <span class="text">FGM</span>
                                <span class="triangle" ng-class="{'active': sortType == 'FGMade'}"></span>
                            </th>
                            <th class="tcenter sortable" ng-click="sortType='FTM';sortReverse = true;">
                                <span class="text">FTM-A</span>
                                <span class="triangle" ng-class="{'active': sortType == 'FTM'}"></span>
                            </th>
    						<th class="tcenter sortable" ng-click="sortType='FTPercentage';sortReverse = true;">
                                <span class="text">FT%</span>
                                <span class="triangle" ng-class="{'active': sortType == 'FTPercentage'}"></span>
                            </th>
    						<th class="tcenter sortable" ng-click="sortType='Fouls';sortReverse = true;">
                                <span class="text">
                                    <span class="hidden-mobile">Fouls</span>
                                    <span class="hidden-desktop">FLS</span>
                                </span>
                                <span class="triangle" ng-class="{'active': sortType == 'Fouls'}"></span>
                            </th>
    					</tr>
    				</thead>
                    <tbody ng-show="success" class="animated" ng-class="{'fadeIn': success, 'fadeOut': !success}">
                        <tr ng-repeat="entry in resultBoxScore | orderBy:sortType:sortReverse | orderEmpty:sortType:'toBottom'" ng-if="entry.GmsPlayed == 1">
    						<td class="name">
                                <span class="no-dash">
                                    <span class="no">#{{entry.playerNo}}</span>
                                    &nbsp;|&nbsp;
                                    <span class="hidden-desktop pos">({{entry.playerPos}})</span>
                                </span>
                                <a ng-href="/team/{{::entry.url}}/#?pid={{::entry.PID}}">
                                    <span class="hidden-mobile">{{entry.playerName}}&nbsp;({{entry.playerPos}})</span>
                                    <span class="hidden-desktop">{{entry.playerNameFirst}}.{{entry.playerNameLast}}</span>
                                </a>
                            </td>
                            <td class="tcenter dnp">&nbsp;</td>
                            <td class="tcenter">{{entry.TotalPoints}}</td>
                            <td class="tcenter">{{entry.threePoint}}</td>
                            <td class="tcenter">{{entry.FGMade}}</td>
                            <td class="tcenter">{{entry.FTM}} - {{entry.FTA}}</td>
                            <td class="tcenter">
                                <span ng-if="entry.FTPercentage || entry.FTPercentage === 0">{{entry.FTPercentage}}%</span>
                                <span ng-if="!entry.FTPercentage && entry.FTPercentage !== 0">-</span>
                            </td>
                            <td class="tcenter">{{entry.Fouls}}</td>
    					</tr>
                        <tr ng-repeat="entry in resultBoxScore | orderBy:'playerNo'" ng-if="entry.GmsPlayed == 0">
                            <td class="name">
                                <span class="no-dash">
                                    <span class="no">#{{entry.playerNo}}</span>
                                    &nbsp;|&nbsp;
                                    <span class="hidden-desktop pos">({{entry.playerPos}})</span>
                                </span>
                                <a ng-href="/team/{{::entry.url}}/#?pid={{::entry.PID}}">
                                    <span class="hidden-mobile">{{entry.playerName}}&nbsp;({{entry.playerPos}})</span>
                                    <span class="hidden-desktop">{{entry.playerNameFirst}}.{{entry.playerNameLast}}</span>
                                </a>
                            </td>
                            <td class="tcenter dnp italic">DNP</td>
                            <td class="tcenter">-</td>
                            <td class="tcenter">-</td>
                            <td class="tcenter">-</td>
                            <td class="tcenter">-</td>
                            <td class="tcenter">-</td>
                            <td class="tcenter">-</td>
    					</tr>
                        <tr class="totals">
    						<td class="name">Totals</td>
                            <td class="tcenter dnp">&nbsp;</td>
                            <td class="tcenter">{{teamTotals.ttlPts}}</td>
                            <td class="tcenter">{{teamTotals.ttl3pt}}</td>
                            <td class="tcenter">{{teamTotals.ttlFGM}}</td>
                            <td class="tcenter">{{teamTotals.ttlFtm}} - {{teamTotals.ttlFta}}</td>
                            <td class="tcenter">{{teamTotals.ftPer}}%</td>
                            <td class="tcenter">{{teamTotals.ttlFls}}</td>
    					</tr>
                    </tbody>
                </table>
                <div class="header-fixed">
                </div>

                <div ajax-loader="success || apiError"></div>
                <p class="api-error" ng-show="apiError">Oops, there was an error loading the data, please try again shortly.</p>

            </div>
        </div>
    </div>



<?php
	//Assign all Page Specific variables
	$pagemaincontent = ob_get_contents();
	ob_end_clean();
	//$navSelectedAbout ="active";
    $MetaDescription = "Box Score.  The official site of The B-Sharps Basketball Club.";
    $pageTitle = "Box Score";
	$page = "box-score";
    $globalClass = "";
	$extraScript = "/static/dist/js/box-score-controller.js";
	//Apply the template
	include("master-index.php");
?>
