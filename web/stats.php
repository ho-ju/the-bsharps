<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>

    <?php include("inc/global-vars.php"); ?>

    <div ng-controller="statsTotalsController" ng-init="init();" ng-cloak>
        <div ng-controller="leaguesSeasonsRoundsController" ng-init="initLeaguesSeasonsRounds();">
            <div class="crumbs clearfix">
                <ul>
                    <li><span id="leagues">stats</li>
                    <li>&nbsp;&nbsp;::&nbsp;&nbsp;<li>
                    <li class="title"><h1>Totals</h1></li>
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
                    <li ng-repeat="league in availLeagues" ng-click="$parent.getStats(league.comp, selectedSeason);get(league.comp, selectedSeason, 0);">
                        <span>{{league.leagueName}} @ {{league.leagueVenue}}</span>
                    </li>
                    <li ng-click="$parent.getStats('', selectedSeason);get('', selectedSeason, 0);" ng-if="availLeagues.length > 1"><span>All Leagues</span></li>
                </ul>
                <span class="dots">::</span>
                <h4 data-animation="am-flip-x" bs-dropdown aria-haspopup="true" aria-expanded="false" class="dropdown" ng-click="seasonDd = !seasonDd; activateDD(seasonDd);" ng-blur="seasonDd = !seasonDd; activateDD(seasonDd);" ng-class="{'active': seasonDd}" tabindex="-1">
                    <span class="season text">{{selectedSeasonFullName}}</span>
                    <span class="triangle"></span>
                </h4>
                <ul class="dropdown-menu seasons-dd" role="menu">
                    <li class="current" ng-click="$parent.getStats(selectedLeague, defaultSeason);get(selectedLeague, defaultSeason, 0);"><span>Current Season</span></li>
                    <li ng-repeat="season in availSeasons" ng-if="!$first" ng-click="$parent.getStats(selectedLeague, season.seasonID);get(selectedLeague, season.seasonID, 0);">
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

        <div class="stats-nav with-extras">
            <a href="#" ng-click="switchTotals();sn2Active='snt';" ng-class="{'active': sn2Active =='snt'}"><span>Totals</span></a>
            <span class="dots">::</span>
            <a href="#" class="pre-divider" ng-click="switchAverages();sn2Active = 'sna';" ng-class="{'active': sn2Active =='sna'}"><span>Averages</span></a>
            <span class="divider"></span>
            <a href="#" ng-click="getStats(selectedLeague, selectedSeason);snActive = 'sns';" ng-class="{'active': snActive =='sns'}"><span>Season</span></a>
            <span class="dots">::</span>
            <a href="#" ng-click="getStatsFinals(); snActive = 'snf';" ng-class="{'active': snActive =='snf'}"><span>Finals</span></a>
            <span class="dots">::</span>
            <a href="#" ng-click="getStatsCareer(); snActive = 'snc';" ng-class="{'active': snActive =='snc'}"><span>Career</span></a>
        </div>

        <div ajax-loader="success || apiError" class="stats-loader"></div>
        <p class="api-error" ng-show="apiError">Oops, there was an error loading the data, please try again shortly.</p>

        <div id="stats-totals" class="pers animated" ng-class="{'fadeIn': success, 'fadeOut': !success}" ng-show="success" ng-cloak>
            <div class="stat-box-container">
                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>Points</h3>
                    <div class="winner-winner">
                        <div>
                            <a ng-href="/team/{{ttlPts[0].url}}#?pid={{ttlPts[0].pid}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{ttlPts[0].url}}.png" alt="{{ttlPts[0].pname}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{ttlPts[0].pNo}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{ttl3pts[0].url}}#?pid={{ttl3pts[0].pid}}">{{ttlPts[0].pname}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{ttlPts[0].posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{ttlPts[0].height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{ttlPts[0].stat}}<span ng-show="sn2Active == 'snt'">PTS</span><span ng-show="sn2Active == 'sna'">PPG</span></h2>
                                <span class="gms">{{ttlPts[0].gms}}&nbsp;GMS&nbsp;&nbsp;</span>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">PTS</span><span ng-show="sn2Active == 'sna'">PPG</span></th>
                                <th class="tcenter">GMS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in ttlPts" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{entry.url}}#?pid={{entry.pid}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{entry.pname}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{entry.pNo}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{entry.url}}#?pid={{entry.pid}}">{{entry.pname}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{entry.stat}}</td>
                                <td class="tcenter">{{entry.gms}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>3 Points</h3>
                    <div class="winner-winner">
                        <div>
                            <a ng-href="/team/{{ttl3pts[0].url}}#?pid={{ttl3pts[0].pid}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{ttl3pts[0].url}}.png" alt="{{ttl3pts[0].pname}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{ttl3pts[0].pNo}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{ttl3pts[0].url}}#?pid={{ttl3pts[0].pid}}">{{ttl3pts[0].pname}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{ttl3pts[0].posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{ttl3pts[0].height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{ttl3pts[0].stat}}<span ng-show="sn2Active == 'snt'">3pt</span><span ng-show="sn2Active == 'sna'">3ppg</span></h2>
                                <span class="gms">{{ttl3pts[0].gms}}&nbsp;GMS&nbsp;&nbsp;</span>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">3pt</span><span ng-show="sn2Active == 'sna'">3ppg</span></th>
                                <th class="tcenter">GMS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in ttl3pts" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{entry.url}}#?pid={{entry.pid}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{entry.pname}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{entry.pNo}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{entry.url}}#?pid={{entry.pid}}">{{entry.pname}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{entry.stat}}</td>
                                <td class="tcenter">{{entry.gms}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>Fouls</h3>
                    <div class="winner-winner">
                        <div>
                            <a ng-href="/team/{{ttlFouls[0].url}}#?pid={{ttlFouls[0].pid}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{ttlFouls[0].url}}.png" alt="{{ttlFouls[0].pname}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{ttlFouls[0].pNo}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{ttl3pts[0].url}}#?pid={{ttl3pts[0].pid}}">{{ttlFouls[0].pname}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{ttlFouls[0].posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{ttlFouls[0].height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{ttlFouls[0].stat}}<span ng-show="sn2Active == 'snt'">FLS</span><span ng-show="sn2Active == 'sna'">FPG</span></h2>
                                <span class="gms">{{ttlFouls[0].gms}}&nbsp;GMS&nbsp;&nbsp;</span>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">FLS</span><span ng-show="sn2Active == 'sna'">FPG</span></th>
                                <th class="tcenter">GMS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in ttlFouls" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{entry.url}}#?pid={{entry.pid}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{entry.pname}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{entry.pNo}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{entry.url}}#?pid={{entry.pid}}">{{entry.pname}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{entry.stat}}</td>
                                <td class="tcenter">{{entry.gms}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <span class="hr"></span>

            <div class="stat-box-container">
                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>FT Attempts</h3>
                    <div class="winner-winner">
                        <div>
                            <a ng-href="/team/{{ttlFTA[0].url}}#?pid={{ttlFTA[0].pid}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{ttlFTA[0].url}}.png" alt="{{ttlFTA[0].pname}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{ttlFTA[0].pNo}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{ttlFTA[0].url}}#?pid={{ttlFTA[0].pid}}">{{ttlFTA[0].pname}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{ttlFTA[0].posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{ttlFTA[0].height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{ttlFTA[0].stat}}<span ng-show="sn2Active == 'snt'">FTA</span><span ng-show="sn2Active == 'sna'">FTAPG</span></h2>
                                <span class="gms">{{ttlFTA[0].gms}}&nbsp;GMS&nbsp;&nbsp;</span>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">FTA</span><span ng-show="sn2Active == 'sna'">FTAPG</span></th>
                                <th class="tcenter">GMS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in ttlFTA" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{entry.url}}#?pid={{entry.pid}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{entry.pname}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{entry.pNo}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{entry.url}}#?pid={{entry.pid}}">{{entry.pname}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{entry.stat}}</td>
                                <td class="tcenter">{{entry.gms}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>FT Made</h3>
                    <div class="winner-winner">
                        <div>
                            <a ng-href="/team/{{ttlFTM[0].url}}#?pid={{ttlFTM[0].pid}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{ttlFTM[0].url}}.png" alt="{{ttlFTM[0].pname}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{ttlFTM[0].pNo}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{ttlFTM[0].url}}#?pid={{ttlFTM[0].pid}}">{{ttlFTM[0].pname}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{ttlFTM[0].posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{ttlFTM[0].height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{ttlFTM[0].stat}}<span ng-show="sn2Active == 'snt'">FTM</span><span ng-show="sn2Active == 'sna'">FTMPG</span></h2>
                                <span class="gms">{{ttlFTM[0].gms}}&nbsp;GMS&nbsp;&nbsp;</span>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">FTM</span><span ng-show="sn2Active == 'sna'">FTMPG</span></th>
                                <th class="tcenter">GMS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in ttlFTM" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{entry.url}}#?pid={{entry.pid}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{entry.pname}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{entry.pNo}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{entry.url}}#?pid={{entry.pid}}">{{entry.pname}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{entry.stat}}</td>
                                <td class="tcenter">{{entry.gms}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>FT Percentage</h3>
                    <div class="winner-winner">
                        <div>
                            <a ng-href="/team/{{ttlFTP[0].url}}#?pid={{ttlFTP[0].pid}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{ttlFTP[0].url}}.png" alt="{{ttlFTP[0].pname}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{ttlFTP[0].pNo}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{ttlFTP[0].url}}#?pid={{ttlFTP[0].pid}}">{{ttlFTP[0].pname}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{ttlFTP[0].posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{ttlFTP[0].height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{ttlFTP[0].stat}}%<span ng-show="sn2Active == 'snt'">FTP</span><span ng-show="sn2Active == 'sna'">FTP</span></h2>
                                <span class="gms">{{ttlFTP[0].gms}}&nbsp;GMS&nbsp;&nbsp;</span>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter">FTM</th>
                                <th class="tcenter">GMS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in ttlFTP" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{entry.url}}#?pid={{entry.pid}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{entry.pname}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{entry.pNo}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{entry.url}}#?pid={{entry.pid}}">{{entry.pname}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{entry.stat}}%</td>
                                <td class="tcenter">{{entry.gms}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


<?php
	//Assign all Page Specific variables
	$pagemaincontent = ob_get_contents();
	ob_end_clean();
	$navSelectedStats ="active";
	$MetaDescription = "Stats. The official site of The B-Sharps Basketball Club.";
    $pageTitle = "Stats";
	$page = "totals";
    $globalClass = "";
    $extraScript = "/static/dist/js/stats-totals-controller.js";
	//Apply the template
	include("master-index.php");
?>
