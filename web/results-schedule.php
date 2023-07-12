<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
	<?php include("inc/global-vars.php"); ?>

	<div ng-controller="resultsScheduleController" ng-init="initResultSchedule();" ng-cloak>
        <div ng-controller="leaguesSeasonsRoundsController" ng-init="initLeaguesSeasonsRounds();">
    		<div class="crumbs clearfix">
    			<ul>
    				<li class="title"><h1>Schedule</h1></li>
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
    				<li ng-repeat="league in availLeagues" ng-click="$parent.getResultSchedule(league.comp, selectedSeason);get(league.comp, selectedSeason, 0);">
    					<span>{{league.leagueName}} @ {{league.leagueVenue}}</span>
    				</li>
    				<li ng-click="$parent.getResultSchedule('', selectedSeason);get('', selectedSeason, 0);" ng-if="availLeagues.length > 1"><span>All Leagues</span></li>
    			</ul>
    			<span class="dots">::</span>
    			<h4 data-animation="am-flip-x" bs-dropdown aria-haspopup="true" aria-expanded="false" class="dropdown" ng-click="seasonDd = !seasonDd; activateDD(seasonDd);" ng-blur="seasonDd = !seasonDd; activateDD(seasonDd);" ng-class="{'active': seasonDd}" tabindex="-1">
    				<span class="season text">{{selectedSeasonFullName}}</span>
    				<span class="triangle"></span>
    			</h4>
    			<ul class="dropdown-menu seasons-dd" role="menu">
    				<li class="current" ng-click="$parent.getResultSchedule(selectedLeague, defaultSeason);get(selectedLeague, defaultSeason, 0);"><span>Current Season</span></li>
    				<li ng-repeat="season in availSeasons" ng-if="!$first" ng-click="$parent.getResultSchedule(selectedLeague, season.seasonID);get(selectedLeague, season.seasonID, 0);">
    					<span>{{season.seasonName}}</span>
    				</li>
    			</ul>
    		</div>
        </div>

        <p class="api-error" ng-show="apiError">Oops, there was an error loading the data, please try again shortly.</p>
		<div ajax-loader="success || apiError || apiErrorPop" class="res-sched-loader">
			<div class="summary-container" ng-class="{'fadeIn': success, 'fadeOut': !success}" ng-show="success">
				<span class="icon flaticon-cancel close" ng-click="resultsFilter='';filterActive = false;" ng-class="{'active': resultsFilter != '' && filterActive}"></span>
				<table class="summary">
					</thead>
					<tbody>
						<tr class="thead">
							<th rowspan="2" class="text upcome" ng-click="resultsFilter = 'upcoming';filterActive = true;scrollToToday(true);">
								<span class="icon flaticon-returning-arrow"></span>
								<span class="text">Upcoming</span>
							</th>
							<th rowspan="2" class="spacer">::</th>
							<th class="text">
								<span class="text" ng-click="resultsFilter = 'DEF';filterActive = true;" ng-mouseenter="hoverFilter = 'DEF';" ng-mouseleave="hoverFilter = '';">Won</span>
							</th>
							<th class="spacer"></th>
							<th class="text">
								<span class="text" ng-click="resultsFilter = 'LST';filterActive = true;" ng-mouseenter="hoverFilter = 'LST';" ng-mouseleave="hoverFilter = '';">Lost</span>
							</th>
							<th class="spacer"></th>
							<th class="text">
								<span class="text" ng-click="resultsFilter = 'DRW';filterActive = true;" ng-mouseenter="hoverFilter = 'DRW';" ng-mouseleave="hoverFilter = '';">Draw</span>
							</th>
						</tr>
						<tr class="tbody">
							<td class="def stat bold" ng-click="resultsFilter = 'DEF';filterActive = true;" ng-class="{'activate': resultsFilter == 'DEF' || hoverFilter == 'DEF'}">{{ totalsSummary.TotWins }}</td>
							<td class="spacer">::</td>
							<td class="lst stat bold" ng-click="resultsFilter = 'LST';filterActive = true;" ng-class="{'activate': resultsFilter == 'LST' || hoverFilter == 'LST'}">{{ totalsSummary.TotLoss }}</td>
							<td class="spacer">::</td>
							<td class="drw stat bold" ng-click="resultsFilter = 'DRW';filterActive = true;" ng-class="{'activate': resultsFilter == 'DRW' || hoverFilter == 'DRW'}">{{ totalsSummary.TotDraws }}</td>
						</tr>
					</tbody>
				</table>
			</div>

            <div class="res-sched-container">
    			<table id="res-sched" class="std-table animated res-sched" ng-class="{'fadeIn': success, 'fadeOut': !success}">
    				<thead>
    					<tr>
    						<th class="round">
                                <span class="hidden-mobile">Round</span>
                                <span class="hidden-desktop">RD</span>
                            </th>
    						<th class="date">Date</th>
    						<th class="time">Time</th>
    						<th class="hidden-mobile">Team 1</th>
    						<th class="tcenter">
                                <span class="hidden-mobile">Result</span>
                                <span class="hidden-desktop">Res</span>
                            </th>
    						<th>Team 2</th>
    						<th class="tcenter bs">
                                <span class="hidden-mobile">Box Score</span>
                                <span class="hidden-desktop">Box</span>
                            </th>
    						<th class="tcenter qs hidden-mobile">Stats</th>
    						<th class="hidden-mobile">&nbsp;</th>
    					</tr>
    				</thead
    				<tbody>
    					<tr ng-repeat="entry in resultSchedule" ng-class-even="'even'" ng-class="{'upcoming': entry.roundID == upcomingRoundId, 'filterActive': filterActive, 'defFilterActive': resultsFilter =='DEF' && entry.result == 'DEF','lstFilterActive': resultsFilter =='LST' && entry.result == 'LST', 'drwFilterActive': resultsFilter =='DRW' && entry.result == 'DRW', 'upcomingFilterActive': resultsFilter == 'upcoming' && entry.roundID == upcomingRoundId, 'grading': entry.grading === 1}" ng-cloak>
    						<td class="round bold">
                                <span>
                                    <span ng-if="entry.roundName.indexOf('Final') !== -1 && !(entry.roundName.indexOf('Grand') !== -1 && entry.result == 'DEF')" class="hidden-desktop"><i class="flaticon-racing-flag"></i></span>
                                    <span ng-if="entry.roundName.indexOf('Grand') !== -1 && entry.result == 'DEF'" class="hidden-desktop"><i class="flaticon-trophy"></i></span>
                                    <span>{{ entry.roundName }}</span>
                                </span>
                            </td>
    						<td class="date">{{ entry.dateF }}</td>
    						<td class="time">
                                <span class="hidden-mobile">{{ entry.time }},&nbsp;{{ entry.venue }}</span>
                                <span class="hidden-desktop"><span>{{ entry.time }}</span><span>{{ entry.venue }}</span></span>
                            </td>
    						<td class="t1 hidden-mobile">{{ entry.t1 }}</td>
    						<td class="result tcenter">
    							<span class="res-1" ng-if="entry.t2id != 1">{{ entry.resultT1 }}</span>
    							<span class="res" ng-class="{'def': entry.result == 'DEF', 'lst': entry.result == 'LST', 'drw': entry.result == 'DRW'}">
                                    <span class="hidden-mobile">{{ entry.result }}</span>
                                    <span class="hidden-desktop">
                                        <span ng-if="entry.result == 'DEF'">W</span>
                                        <span ng-if="entry.result == 'LST'">L</span>
                                        <span ng-if="entry.result == 'DRW'">D</span>
                                    </span>
                                </span>
    							<span class="res-2" ng-if="entry.t2id != 1">{{ entry.resultT2 }}</span>
    							<span class="next-match" ng-if="entry.roundID == upcomingRoundId">Next Match<span ng-if="entry.t2id == 1"> (BYE)</span></span>
    						</td>
    						<td class="team-vs" data-teamId="{{ tid }}" ng-click="resultsFilter = 'DRW';filterActive = true;">
                                <span ng-if="entry.t2id != 1">{{ entry.t2 }}</span>
                                <span ng-if="entry.t2id == 1">-</span>
                            </td>
    						<td class="status tcenter bs icon">
                                <a href="/box-score/#?league={{entry.comp}}&season={{entry.seasonID}}&roundID={{entry.roundID}}" class="no-underline" ng-if="entry.result && entry.t2id != 1"><i class="icon flaticon-symbols"></i></a>
                                <span ng-if="entry.t2id == 1">-</span>
                            </td>
    						<td class="stats tcenter qs hidden-mobile icon">
    							<a href="javascript:void(0)" class="no-underline" data-trigger="focus" data-placement="left" data-template-url="myModalContent.html" data-auto-close="0" bs-popover ng-if="entry.t2id != 1">
    								<i class="icon flaticon-business"></i>
    							</a>
                                <span ng-if="entry.t2id == 1">-</span>
    						</td>
    						<td class="icon bold hidden-mobile tcenter">
                                <span ng-if="entry.roundName.indexOf('Final') !== -1 && !(entry.roundName.indexOf('Grand') !== -1 && entry.result == 'DEF')"><i class="flaticon-racing-flag"></i></span>
                                <span ng-if="entry.roundName.indexOf('Grand') !== -1 && entry.result == 'DEF'"><i class="flaticon-trophy"></i></span>
                            </td>
    					</tr>
    				</tbody>
    			</table>

                <div class="header-fixed">
                    <table class="std-table res-sched">
                        <tbody>
                            <td class="round">Semi Final</td>
                            <td class="date">Wed, Sep 2nd</td>
                            <td class="time">8:00 PM, BHS</td>
                            <td class="t1 hidden-mobile">THE B-SHARPS</td>
                            <td class="result">27 LST 36</td>
                            <td class="team-vs">Your Mother Approves</td>
                            <td class="status bs"><i class="icon flaticon-symbols"></i></td>
                            <td class="stats hidden-mobile"><i class="icon flaticon-business"></i></td>
                            <td class="icon hidden-mobile"></td>
                        </tbody>
                    </table>
                </div>

            </div>
		</div>

        <p class="footnote" ng-show="success">Current as of {{lastUpdated}}.</p>
	</div>

	<script type="text/ng-template" id="myModalContent.html">
        <div class="popover quick-stats-pop">
        	<div class="arrow"></div>
        	<div class="popover-content">
        		<div ng-init="initTeamVersusStats(entry.t2id);">
        			<h5>Last 3&nbsp;&nbsp;vs&nbsp;&nbsp;{{resultTeamVsLast3[0].t2}}</h5>
                    <p class="api-error" ng-show="apiErrorPop">Oops, there was an error loading the data, please try again shortly.</p>
    				<table>
    					<tr ng-repeat="stats in resultTeamVsLast3" ng-class-even="'even'">
    						<td class="t1">{{ stats.t1 }}</td>
    						<td class="res">{{ stats.resultT1 }}</td>
    						<td class="bold score" ng-class="{'def': stats.result == 'DEF', 'lst': stats.result == 'LST', 'drw': stats.result == 'DRW'}">{{ stats.result }}</td>
    						<td class="res">{{ stats.resultT2 }}</td>
    						<td>{{ stats.t2 }}</td>
    						<td class="date tright">{{ stats.dateF }}</td>
    					</tr>
    				</table>
    				<div class="hr"></div>
    				<table class="summary">
    					<tr ng-repeat="stats in resultTeamVsOverall track by $index">
    						<td><h5>Overall</h5></td>
    						<td class="def bold stat tright">{{ stats.WINS_ov }}<span>w</span></td>
    						<td class="lst bold stat tright">{{ stats.LOSSES_ov }}<span>l</span></td>
    						<td class="drw bold stat tright">{{ stats.DRAWS_ov }}<span>d</span></td>
    					</tr>
    				</table>
    				<table class="summary">
    					<tr ng-repeat="stats in resultTeamVsFinals track by $index">
    						<td><h5>In The Finals</h5></td>
    						<td class="def bold stat tright">{{ stats.WINS_f }}<span>w</span></td>
    						<td class="lst bold stat tright">{{ stats.LOSSES_f }}<span>l</span></td>
    						<td class="drw bold stat tright">{{ stats.DRAWS_f }}<span>d</span></td>
    					</tr>
    				</table>
        		</div>
        	</div>
        </div>
    </script>

<?php
	//Assign all Page Specific variables
	$pagemaincontent = ob_get_contents();
	ob_end_clean();
	$navSelectedResSched ="active";
    $MetaDescription = "Results &amp; Schedule.  The official site of The B-Sharps Basketball Club.";
    $pageTitle = "Results &amp; Schedule";
	$page = "results-schedule";
    $globalClass = "";
	$extraScript = "/static/dist/js/results-schedule-controller.js";
	//Apply the template
	include("master-index.php");
?>
