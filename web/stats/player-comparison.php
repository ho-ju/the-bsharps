<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>

    <?php include("../inc/global-vars.php"); ?>

    <div ng-controller="statsPCController" ng-init="init();" ng-cloak>
        <div ng-controller="leaguesSeasonsRoundsController" ng-init="initLeaguesSeasonsRounds();">
            <div class="crumbs clearfix">
                <ul>
                    <li><span id="leagues"><a href="/stats">stats</a></span></li>
                    <li>&nbsp;&nbsp;::&nbsp;&nbsp;<li>
                    <li class="title"><h1>Player Comparison</h1></li>
                </ul>
            </div>

            <div class="subtitle dropdown-container" ng-show="snActive=='sns'">
                <h2 data-animation="am-flip-x" bs-dropdown aria-haspopup="true" aria-expanded="false" class="dropdown" ng-click="leagueDd = !leagueDd; activateDD(leagueDd);" ng-blur="leagueDd = !leagueDd; activateDD(leagueDd);" ng-class="{'active': leagueDd, 'no-hover': availLeagues.length == 1}" tabindex="-1">
                    <span class="text">
                        {{selectedLeagueName}}
                        <span ng-if="selectedLeagueVenue != '' "> @</span>
                        <span ng-if="selectedLeagueVenue != '' "> {{selectedLeagueVenue}}</span>
                    </span>
                    <span class="triangle" ng-if="availLeagues.length > 1"></span>
                </h2>
                <ul class="dropdown-menu leagues-dd" role="menu" ng-class="{'hide': availLeagues.length == 1}">
                    <li ng-repeat="league in availLeagues" ng-click="$parent.type='';$parent.getDoublePlayer('',league.comp, selectedSeason);get(league.comp, selectedSeason, 0);">
                        <span>{{league.leagueName}} @ {{league.leagueVenue}}</span>
                    </li>
                    <li ng-click="$parent.type='';$parent.getDoublePlayer('','', selectedSeason);get('', selectedSeason, 0);" ng-if="availLeagues.length > 1"><span>All Leagues</span></li>
                </ul>
                <span class="dots">::</span>
                <h4 data-animation="am-flip-x" bs-dropdown aria-haspopup="true" aria-expanded="false" class="dropdown" ng-click="seasonDd = !seasonDd; activateDD(seasonDd);" ng-blur="seasonDd = !seasonDd; activateDD(seasonDd);" ng-class="{'active': seasonDd}" tabindex="-1">
                    <span class="season text">{{selectedSeasonFullName}}</span>
                    <span class="triangle"></span>
                </h4>
                <ul class="dropdown-menu seasons-dd" role="menu">
                    <li class="current" ng-click="$parent.type='';$parent.getDoublePlayer('',selectedLeague, defaultSeason);get(selectedLeague, defaultSeason, 0);"><span>Current Season</span></li>
                    <li ng-repeat="season in availSeasons" ng-if="!$first" ng-click="$parent.type='';$parent.getDoublePlayer('',selectedLeague, season.seasonID);get(selectedLeague, season.seasonID, 0);">
                        <span>{{season.seasonName}}</span>
                    </li>
                </ul>
            </div>
            <div class="subtitle dropdown-container" ng-show="snActive=='snf'">
                <h2><span class="text">Finals</span></h2>
            </div>
            <div class="subtitle dropdown-container" ng-show="snActive=='snc'">
                <h2><span class="text">Career</span></h2>
            </div>
        </div>

        <div class="stats-nav">
            <a href="#" ng-click="type='';getDoublePlayer('',selectedLeague, selectedSeason);snActive = 'sns';" ng-class="{'active': snActive =='sns'}"><span>Season</span></a>
            <span class="dots">::</span>
            <a href="#" ng-click="type='finals';getPlayerFinals(); snActive = 'snf';" ng-class="{'active': snActive =='snf'}"><span>Finals</span></a>
            <span class="dots">::</span>
            <a href="#" ng-click="type='career';getPlayerCareer(); snActive = 'snc';" ng-class="{'active': snActive =='snc'}"><span>Career</span></a>
        </div>

        <div id="stats-pc" class="pers animated" ng-class="{'fadeIn': success, 'fadeOut': !success}" ng-show="success || !stats.loadedPlayer1" ng-cloak>
            <div class="pc-container">
                <div class="player-1 player-detail">
                    <div ajax-loader="stats.loadedPlayer1 || !stats.firstLoad1 || apiError1 || apiError.error1" class="stats-loader"></div>
                    <p class="api-error" ng-show="apiError1 || apiError.error1">Oops, there was an error loading the data, please try again shortly.</p>
                    <div class="deets" ng-show="!apiError1 || !apiError.error2">
                        <h2>
                            <span class="num" ng-show="stats.loadedPlayer1 && playersId[1]">#{{stats.playerDetails1.pno}}</span>
                            <span class="dropdown-container">
                                <span data-animation="am-flip-x" bs-dropdown aria-haspopup="true" aria-expanded="false" class="dropdown" ng-click="seasonDd = !seasonDd; activateDD(seasonDd);" ng-blur="seasonDd = !seasonDd; activateDD(seasonDd);" ng-class="{'active': seasonDd}" tabindex="-1">
                                    <span>
                                        <span ng-show="stats.loadedPlayer1 && playersId[1]">{{stats.playerDetails1.PName}}</span>
                                        <span ng-show="!stats.loadedPlayer1 && !playersId[1]">Pick Player 1</span>
                                    </span>
                                    <span class="triangle" ng-show="stats.loadedPlayer1 || !playersId[1]"></span>
                                </span>
                                <ul class="dropdown-menu player-dd seasons-dd single pdd-1" role="menu">
                                    <li ng-repeat="player in playersList">
                                        <a href="javascript:void(0);" ng-click="getPlayer(player.PID, 1, type);">
                                            <span>#{{player.pno}}</span>
                                            <span class="separator"></span>
                                            <span>{{player.PName}}</span>
                                        </a>
                                    </li>
                                </ul>
                                <span class="sub" ng-show="stats.loadedPlayer1">aka {{stats.playerDetails1.pNickName}}</span>
                            </span>
                        </h2>
                        <div class="det-chart animated" ng-show="stats.loadedPlayer1" ng-class="{'fadeIn': stats.loadedPlayer1, 'fadeOut': !stats.loadedPlayer1}">
                            <div class="img hidden-desktop img-1">
                                <img ng-src="/static/img/profiles/profile-side-left-sm-{{stats.playerDetails1.url}}.png" alt="{{stats.playerDetails1.PName}}">
                            </div>
                            <div>
                                <ul class="det">
                                    <li>
                                        <span class="title">Position</span>
                                        <span class="separator"></span>
                                        <span>{{stats.playerDetails1.pos}}</span>
                                        <span ng-if="!stats.playerDetails1.pos">-</span>
                                    </li>
                                    <li>
                                        <span class="title">Height</span>
                                        <span class="separator"></span>
                                        <span>{{stats.playerDetails1.height}}</span>
                                        <span ng-if="!stats.playerDetails1.height">-</span>
                                    </li>
                                    <li>
                                        <span class="title">Weight</span>
                                        <span class="separator"></span>
                                        <span>{{stats.playerDetails1.weight}}kg</span>
                                        <span ng-if="!stats.playerDetails1.weight">-</span>
                                    </li>
                                    <li>
                                        <span class="title">Games</span>
                                        <span class="separator"></span>
                                        <span>{{stats.playerDetails1.gmsPlayed}}</span>
                                        <span ng-if="!stats.playerDetails1.gmsPlayed">-</span>
                                    </li>
                                    <li class="hidden-mobile">
                                        <span class="title">Clubs</span>
                                        <span class="separator"></span>
                                        <span>{{stats.playerDetails1.clubs}}</span>
                                        <span ng-if="!stats.playerDetails1.clubs">-</span>
                                    </li>
                                </ul>
                                <div class="pts-chart">
                                    <canvas id="points-chart-1" height="150"></canvas>
                                    <ul class="hidden-mobile">
                                        <li>
                                            <span class="block orange"></span>
                                            <span>% of 2PTs</span>
                                        </li>
                                        <li>
                                            <span class="block green"></span>
                                            <span>% of 3PTs</span>
                                        </li>
                                        <li>
                                            <span class="block yellow"></span>
                                            <span>% of FTs</span>
                                        </li>
                                    </ul>
                                    <p class="hidden-desktop">Points Breakdown</p>
                                </div>
                            </div>
                            <div class="img hidden-mobile img-1">
                                <img ng-src="/static/img/profiles/profile-side-left-sm-{{stats.playerDetails1.url}}.png" alt="{{stats.playerDetails1.PName}}">
                            </div>
                        </div>
                        <div class="main-stats animated" ng-show="stats.loadedPlayer1" ng-class="{'fadeIn': stats.loadedPlayer1, 'fadeOut': !stats.loadedPlayer1}">
                            <div class="bg-colour"></div>
                            <ul>
                                <li>
                                    <span class="stat">{{stats.playersCareerAvgs1.tGp}}</span>
                                    <span class="cat">gms</span>
                                </li>
                                <li>
                                    <span class="stat">{{stats.playersCareerAvgs1.tPts}}
                                        <span ng-if="stats.playersCareerAvgs1.tPts === null">-</span>
                                    </span>
                                    <span class="cat">ppg</span>
                                </li>
                                <li>
                                    <span class="stat">{{stats.playersCareerAvgs1.t3pt}}
                                        <span ng-if="stats.playersCareerAvgs1.t3pt === null">-</span>
                                    </span>
                                    <span class="cat">3pg</span>
                                </li>
                                <li>
                                    <span class="stat">{{stats.playersCareerAvgs1.tFTP}}
                                        <span ng-if="stats.playersCareerAvgs1.tFTP === null">-</span>
                                    </span>
                                    <span class="cat">FT%</span>
                                </li>
                                <li>
                                    <span class="stat">{{stats.playersCareerAvgs1.tFTA}}
                                        <span ng-if="stats.playersCareerAvgs1.tFTA === null">-</span>
                                    </span>
                                    <span class="cat">FTA</span>
                                </li>

                                <li>
                                    <span class="stat">{{stats.playersCareerAvgs1.tFTM}}
                                        <span ng-if="stats.playersCareerAvgs1.tFTM === null">-</span>
                                    </span>
                                    <span class="cat">FTM</span>
                                </li>
                                <li>
                                    <span class="stat">{{stats.playersCareerAvgs1.tFouls}}
                                        <span ng-if="stats.playersCareerAvgs1.tFouls === null">-</span>
                                    </span>
                                    <span class="cat">FPG</span>
                                </li>
                                <li class="eff">
                                    <span class="stat"><span ng-if="stats.playersCareerAvgs1.avgEff > 0" class="plus">+</span>{{stats.playersCareerAvgs1.avgEff}}</span>
                                    <span class="cat">PER</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="player-2 player-detail">
                    <div ajax-loader="stats.loadedPlayer2 || !stats.firstLoad2 || apiError2 || apiError.error2" class="stats-loader"></div>
                    <p class="api-error" ng-show="apiError2 || apiError.error2">Oops, there was an error loading the data, please try again shortly.</p>
                    <div class="deets" ng-show="!apiError2 || !apiError.error2">
                        <h2 >
                            <span class="num" ng-show="stats.loadedPlayer2 && playersId[2]">#{{stats.playerDetails2.pno}}</span>
                            <span class="dropdown-container">
                                <span data-animation="am-flip-x" bs-dropdown aria-haspopup="true" aria-expanded="false" class="dropdown" ng-click="seasonDd = !seasonDd; activateDD(seasonDd);" ng-blur="seasonDd = !seasonDd; activateDD(seasonDd);" ng-class="{'active': seasonDd}" tabindex="-1">
                                    <span>
                                        <span ng-show="stats.loadedPlayer2 && playersId[2]">{{stats.playerDetails2.PName}}</span>
                                        <span ng-show="!stats.loadedPlayer2 && !playersId[2]">Pick Player 2</span>
                                    </span>
                                    <span class="triangle" ng-show="stats.loadedPlayer2 || !playersId[2]"></span>
                                </span>
                                <ul class="dropdown-menu player-dd seasons-dd single pdd-2" role="menu">
                                    <li ng-repeat="player in playersList2">
                                        <a href="javascript:void(0);" ng-click="getPlayer(player.PID, 2, type);">
                                            <span>#{{player.pno}}</span>
                                            <span class="separator"></span>
                                            <span>{{player.PName}}</span>
                                        </a>
                                    </li>
                                </ul>
                                <span class="sub" ng-show="stats.loadedPlayer2 && playersId[2]">aka {{stats.playerDetails2.pNickName}}</span>
                            </span>
                        </h2>
                        <div class="det-chart animated" ng-show="stats.loadedPlayer2" ng-class="{'fadeIn': stats.loadedPlayer2, 'fadeOut': !stats.loadedPlayer2}">
                            <div class="img img-2">
                                <img ng-src="/static/img/profiles/profile-side-right-sm-{{stats.playerDetails2.url}}.png" alt="{{stats.playerDetails2.PName}}">
                            </div>
                            <div>
                                <ul class="det">
                                    <li>
                                        <span class="title">Position</span>
                                        <span class="separator"></span>
                                        <span>{{stats.playerDetails2.pos}}</span>
                                        <span ng-if="!stats.playerDetails2.pos">-</span>
                                    </li>
                                    <li>
                                        <span class="title">Height</span>
                                        <span class="separator"></span>
                                        <span>{{stats.playerDetails2.height}}</span>
                                        <span ng-if="!stats.playerDetails2.height">-</span>
                                    </li>
                                    <li>
                                        <span class="title">Weight</span>
                                        <span class="separator"></span>
                                        <span>{{stats.playerDetails2.weight}}kg</span>
                                        <span ng-if="!stats.playerDetails2.weight">-</span>
                                    </li>
                                    <li>
                                        <span class="title">Games</span>
                                        <span class="separator"></span>
                                        <span>{{stats.playerDetails2.gmsPlayed}}</span>
                                        <span ng-if="!stats.playerDetails2.gmsPlayed">-</span>
                                    </li>
                                    <li class="hidden-mobile">
                                        <span class="title">Clubs</span>
                                        <span class="separator"></span>
                                        <span>{{stats.playerDetails2.clubs}}</span>
                                        <span ng-if="!stats.playerDetails2.clubs">-</span>
                                    </li>
                                </ul>
                                <div class="pts-chart">
                                    <canvas id="points-chart-2" height="150"></canvas>
                                    <ul class="hidden-mobile">
                                        <li>
                                            <span class="block orange"></span>
                                            <span>% of 2PTs</span>
                                        </li>
                                        <li>
                                            <span class="block green"></span>
                                            <span>% of 3PTs</span>
                                        </li>
                                        <li>
                                            <span class="block yellow"></span>
                                            <span>% of FTs</span>
                                        </li>
                                    </ul>
                                    <p class="hidden-desktop">Points Breakdown</p>
                                </div>
                            </div>
                        </div>
                         <div class="main-stats animated" ng-show="stats.loadedPlayer2" ng-class="{'fadeIn': stats.loadedPlayer2, 'fadeOut': !stats.loadedPlayer2}">
                            <div class="bg-colour"></div>
                            <ul>
                                <li>
                                    <span class="stat">{{stats.playersCareerAvgs2.tGp}}</span>
                                    <span class="cat">gms</span>
                                </li>
                                <li>
                                    <span class="stat">{{stats.playersCareerAvgs2.tPts}}
                                        <span ng-if="stats.playersCareerAvgs2.tPts === null">-</span>
                                    </span>
                                    <span class="cat">ppg</span>
                                </li>
                                <li>
                                    <span class="stat">{{stats.playersCareerAvgs2.t3pt}}
                                        <span ng-if="stats.playersCareerAvgs2.t3pt === null">-</span>
                                    </span>
                                    <span class="cat">3pg</span>
                                </li>
                                <li>
                                    <span class="stat">{{stats.playersCareerAvgs2.tFTP}}
                                        <span ng-if="stats.playersCareerAvgs2.tFTP === null">-</span>
                                    </span>
                                    <span class="cat">FT%</span>
                                </li>
                                <li>
                                    <span class="stat">{{stats.playersCareerAvgs2.tFTA}}
                                        <span ng-if="stats.playersCareerAvgs2.tFTA === null">-</span>
                                    </span>
                                    <span class="cat">FTA</span>
                                </li>

                                <li>
                                    <span class="stat">{{stats.playersCareerAvgs2.tFTM}}
                                        <span ng-if="stats.playersCareerAvgs2.tFTM === null">-</span>
                                    </span>
                                    <span class="cat">FTM</span>
                                </li>
                                <li>
                                    <span class="stat">{{stats.playersCareerAvgs2.tFouls}}
                                        <span ng-if="stats.playersCareerAvgs2.tFouls === null">-</span>
                                    </span>
                                    <span class="cat">FPG</span>
                                </li>
                                <li class="eff">
                                    <span class="stat"><span ng-if="stats.playersCareerAvgs2.avgEff > 0" class="plus">+</span>{{stats.playersCareerAvgs2.avgEff}}</span>
                                    <span class="cat">PER</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div ng-show="stats.loadedPlayer1 && stats.loadedPlayer2">
                <h3>Totals</h3>
                <div class="chart"><canvas id="totals-chart" class="chart"></canvas></div>
                <div class="chart-photos">
                    <img ng-src="/static/img/profiles/profile-main-thumb-{{stats.playerDetails1.url}}.png" alt="{{stats.playerDetails1.PName}}" class="left">
                    <img ng-src="/static/img/profiles/profile-main-thumb-{{stats.playerDetails2.url}}.png" alt="{{stats.playerDetails2.PName}}" class="right">
                </div>
                <div class="hr"></div>
                <h3>Averages</h3>
                <div class="chart"><canvas id="avgs-chart" class="chart"></canvas></div>
                <div class="chart-photos">
                    <img ng-src="/static/img/profiles/profile-main-thumb-{{stats.playerDetails1.url}}.png" alt="{{stats.playerDetails1.PName}}" class="left">
                    <img ng-src="/static/img/profiles/profile-main-thumb-{{stats.playerDetails2.url}}.png" alt="{{stats.playerDetails2.PName}}" class="right">
                </div>
                <div class="hr"></div>
                <h3>Records</h3>
                <div class="chart"><canvas id="records-chart" class="chart"></canvas></div>
                <div class="chart-photos">
                    <img ng-src="/static/img/profiles/profile-main-thumb-{{stats.playerDetails1.url}}.png" alt="{{stats.playerDetails1.PName}}" class="left">
                    <img ng-src="/static/img/profiles/profile-main-thumb-{{stats.playerDetails2.url}}.png" alt="{{stats.playerDetails2.PName}}" class="right">
                </div>
            </div>
        </div>
    </div>
</div>


<?php
	//Assign all Page Specific variables
	$pagemaincontent = ob_get_contents();
	ob_end_clean();
	$navSelectedStats ="active";
    $MetaDescription = "Player Comparison Stats. The official site of The B-Sharps Basketball Club.";
    $pageTitle = "Player Comparison | Stats";
	$page = "player-compare";
    $globalClass = "";
    $extraScript = "/static/dist/js/stats-pc-controller.js";
	//Apply the template
	include("../master-index.php");
?>
