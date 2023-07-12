<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>

    <?php include("../inc/global-vars.php"); ?>

    <div ng-controller="statsPersController" ng-init="init();" ng-cloak>
        <div ng-controller="leaguesSeasonsRoundsController" ng-init="initLeaguesSeasonsRounds();">
            <div class="crumbs clearfix">
                <ul>
                    <li><span id="leagues"><a href="/stats">stats</a></span></li>
                    <li>&nbsp;&nbsp;::&nbsp;&nbsp;<li>
                    <li class="title"><h1>PER's</h1></li>
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

        <div class="stats-nav">
            <a href="#" ng-click="getStats(selectedLeague, selectedSeason);snActive = 'sns';" ng-class="{'active': snActive =='sns'}"><span>Season</span></a>
            <span class="dots">::</span>
            <a href="#" ng-click="getStatsFinals(); snActive = 'snf';" ng-class="{'active': snActive =='snf'}"><span>Finals</span></a>
            <span class="dots">::</span>
            <a href="#" ng-click="getStatsCareer(); snActive = 'snc';" ng-class="{'active': snActive =='snc'}"><span>Career</span></a>
        </div>

        <div ajax-loader="success || apiError" class="stats-loader"></div>
        <p class="api-error" ng-show="apiError">Oops, there was an error loading the data, please try again shortly.</p>
        
        <div id="stats-pers" class="pers animated" ng-class="{'fadeIn': success, 'fadeOut': !success}" ng-show="success" ng-cloak>
            <div class="winner-winner">
                <div ng-repeat="entry in stats" ng-if="$first && entry.TtlPts">
                    <a ng-href="/team/{{entry.url}}#?pid={{entry.pid}}" class="hidden-mobile"><img ng-src="/static/img/profiles/profile-main-{{::entry.url}}.png" alt="{{::entry.pname}}" ng-cloak></a>
                    <div class="deets">
                        <div class="info-box">
                            <h3>
                                <span class="no">#{{entry.pNo}}</span>
                                <span class="name">
                                    <span>{{entry.pname}}</span>
                                    <span class="nick">AKA {{entry.pNickName}}</span>
                                </span>
                            </h3>
                        </div>
                        <a ng-href="/team/{{entry.url}}#?pid={{entry.pid}}" class="hidden-desktop"><img ng-src="/static/img/profiles/profile-main-thumb-{{::entry.url}}.png" alt="{{::entry.pname}}" ng-cloak></a>
                        <div class="main-stats">
                            <div class="bg-colour"></div>
                            <ul>
                                <li>
                                    <span class="stat">{{entry.gmsPlayed}}</span>
                                    <span class="cat">gms</span>
                                </li>
                                <li>
                                    <span class="stat">
                                        <i ng-if="entry.TtlPts > 0">+</i>{{entry.TtlPts}}
                                    </span>
                                    <span class="cat">pts</span>
                                </li>
                                <li>
                                    <span class="stat"><i ng-if="entry.Ttl3pts > 0">+</i>{{entry.Ttl3pts}}</span>
                                    <span class="cat">3pm</span>
                                </li>
                                <li>
                                    <span class="stat"><i ng-if="entry.TtlFTM > 0">+</i>{{entry.TtlFTM}}</span>
                                    <span class="cat">FTM</span>
                                </li>
                                <li>
                                    <span class="stat"><i ng-if="entry.TtlFTA > 0">+</i>{{entry.TtlFTA}}</span>
                                    <span class="cat">FTA</span>
                                </li>

                                <li>
                                    <span class="stat"><i ng-if="entry.TtlMFT > 0">+</i>{{entry.TtlMFT}}</span>
                                    <span class="cat">MFT</span>
                                </li>
                                <li>
                                    <span class="stat"><i ng-if="entry.FTP > 0">+</i>{{entry.FTP}}</span>
                                    <span class="cat">FTP</span>
                                </li>
                                <li>
                                    <span class="stat"><i ng-if="entry.TtlFouls > 0">+</i>{{entry.TtlFouls}}</span>
                                    <span class="cat">FTP</span>
                                </li>
                            </ul>
                        </div>
                        <h2><i ng-if="entry.TOTAL > 0">+</i>{{entry.TOTAL}} PER</h2>
                    </div>
                </div>
            </div>
            <div class="mob-table-container">
                <table id="stats-per-table" class="std-table">
                        <thead>
                            <tr>
                                <th class="rank sortable tcenter" ng-click="sortType='TOTAL';sortReverse = false;">
                                    <span class="text">Pos</span>
                                    <span class="triangle" ng-class="{'active': sortType == 'TOTAL'}"></span>
                                </th>
                                <th class="name sortable tleft hidden-mobile" ng-click="sortType='pNo';sortReverse = false;" colspan="2">
                                    <span class="text">Name</span>
                                    <span class="triangle" ng-class="{'active': sortType == 'pNo'}"></span>
                                </th>
                                <th class="name sortable tleft hidden-desktop" ng-click="sortType='pNo';sortReverse = false;">
                                    <span class="text">Name</span>
                                    <span class="triangle" ng-class="{'active': sortType == 'pNo'}"></span>
                                </th>
                                <th class="name sortable tleft" ng-click="sortType='gmsPlayed';sortReverse = true;">
                                    <span class="text">
                                        <span class="hidden-mobile">Games</span>
                                        <span class="hidden-desktop">GMS</span>
                                    </span>
                                    <span class="triangle" ng-class="{'active': sortType == 'gmsPlayed'}"></span>
                                </th>
                                <th class="tcenter sortable" ng-click="sortType='TtlPts';sortReverse = true;">
                                    <span class="text">
                                        <span class="hidden-mobile">Points</span>
                                        <span class="hidden-desktop">PTS</span>
                                    </span>
                                    <span class="triangle" ng-class="{'active': sortType == 'TtlPts'}"></span>
                                </th>
                                <th class="tcenter sortable" ng-click="sortType='Ttl3pts';sortReverse = true;">
                                    <span class="text">3pm</span>
                                    <span class="triangle" ng-class="{'active': sortType == 'Ttl3pts'}"></span>
                                </th>
                                <th class="tcenter sortable" ng-click="sortType='TtlFTA';sortReverse = true;">
                                    <span class="text">FTA</span>
                                    <span class="triangle" ng-class="{'active': sortType == 'TtlFTA'}"></span>
                                </th>
                                <th class="tcenter sortable" ng-click="sortType='TtlFTM';sortReverse = true;">
                                    <span class="text">FTM</span>
                                    <span class="triangle" ng-class="{'active': sortType == 'TtlFTM'}"></span>
                                </th>
                                <th class="tcenter sortable" ng-click="sortType='TtlMFT';sortReverse = true;">
                                    <span class="text">MFT</span>
                                    <span class="triangle" ng-class="{'active': sortType == 'TtlMFT'}"></span>
                                </th>
                                <th class="tcenter sortable" ng-click="sortType='FTP';sortReverse = true;">
                                    <span class="text">FT%</span>
                                    <span class="triangle" ng-class="{'active': sortType == 'FTP'}"></span>
                                </th>
                                <th class="tcenter sortable" ng-click="sortType='TtlFouls';sortReverse = true;">
                                    <span class="text">
                                        <span class="hidden-mobile">Fouls</span>
                                        <span class="hidden-desktop">FLS</span>
                                    </span>
                                    <span class="triangle" ng-class="{'active': sortType == 'TtlFouls'}"></span>
                                </th>
                                <th class="tcenter sortable" ng-click="sortType='TOTAL';sortReverse = true;">
                                    <span class="text">PER</span>
                                    <span class="triangle" ng-class="{'active': sortType == 'TOTAL'}"></span>
                                </th>
                            </tr>
                        </thead>
                        <tbody ng-show="success" class="animated" ng-class="{'fadeIn': success, 'fadeOut': !success}">
                            <tr ng-repeat="entry in stats | orderBy:sortType:sortReverse | orderEmpty:sortType:'toBottom'" ng-if="!$first && entry.TtlPts || (sortType && entry.TtlPts)">
                                <td class="tcenter rank">
                                    {{$index + 1}}
                                </td>
                                <td class="img hidden-mobile">
                                    <a ng-href="/team/{{entry.url}}#?pid={{entry.pid}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{::entry.url}}.png" alt="{{::entry.pname}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{entry.pNo}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="hidden-desktop pos">({{entry.posAbbr}})</span>
                                    </span>
                                    <span class="hidden-mobile">
                                        <a ng-href="/team/{{entry.url}}#?pid={{entry.pid}}">{{entry.pname}}&nbsp;({{entry.posAbbr}})</span></a>
                                    <span class="hidden-desktop"><a ng-href="/team/{{entry.url}}#?pid={{entry.pid}}">{{entry.PNameFirst}}.{{entry.PNameLast}}</a></span>
                                </td>
                                <td class="tcenter">{{entry.gmsPlayed}}</td>
                                <td class="tcenter"><i ng-if="entry.TtlPts > 0">+</i>{{entry.TtlPts}}</td>
                                <td class="tcenter"><i ng-if="entry.Ttl3pts > 0">+</i>{{entry.Ttl3pts}}</td>
                                <td class="tcenter"><i ng-if="entry.TtlFTA > 0">+</i>{{entry.TtlFTA}}</td>
                                <td class="tcenter"><i ng-if="entry.TtlFTM > 0">+</i>{{entry.TtlFTM}}</td>
                                <td class="tcenter"><i ng-if="entry.TtlMFT > 0">+</i>{{entry.TtlMFT}}</td>
                                <td class="tcenter">
                                    <span ng-if="entry.FTP || entry.FTP === 0"><i ng-if="entry.FTP > 0">+</i>{{entry.FTP}}</span>
                                    <span ng-if="!entry.FTP && entry.FTP !== 0">-</span>
                                </td>
                                <td class="tcenter"><i ng-if="entry.TtlFouls > 0">+</i>{{entry.TtlFouls}}</td>
                                <td class="tcenter bold stat"><i ng-if="entry.TOTAL > 0">+</i>{{entry.TOTAL}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="header-fixed"></div>

                    <div class="key">
                        <p class="title">Key:</p>
                        <p><strong>5+</strong> = Domination</p>
                        <p><strong>2-5</strong> = MVP Candidate</p>
                        <p><strong>0-2</strong> = Solid</p>
                        <p><strong>(-)2-0</strong> = Best 6th Man</p>
                        <p><strong>(-4)-(-)2</strong> = Bench Warmer</p>
                        <p><strong>Under -4</strong> = Two x Knee Recos</p>
                    </div>

                </div>
            </div>
    </div>


<?php
	//Assign all Page Specific variables
	$pagemaincontent = ob_get_contents();
	ob_end_clean();
	$navSelectedStats ="active";
    $MetaDescription = "Player Efficiency Rating Stats. The official site of The B-Sharps Basketball Club.";
    $pageTitle = "PER's | Stats";
	$page = "pers";
    $globalClass = "";
    $extraScript = "/static/dist/js/stats-pers-controller.js";
	//Apply the template
	include("../master-index.php");
?>
