<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
	<?php include("../inc/global-vars.php"); ?>

	<div id="player-detail" class="player-detail" ng-controller="playerDetailController" ng-init="init();getPlayersList();" ng-cloak>

		<div class="crumbs clearfix">
			<ul>
				<li><a href="/team">The Team</a></li>
				<li>&nbsp;&nbsp;::&nbsp;&nbsp;</li>
				<li class="title"><h1><?php echo $playerName ?></h1></li>
			</ul>
		</div>

        <div ajax-loader="success || apiError"></div>
        <p class="api-error" ng-show="apiError">Oops, there was an error loading the data, please try again shortly.</p>

		<div class="bio animated" ng-show="success" ng-class="{'fadeIn': success, 'fadeOut': !success}">
			<div class="deets">
				<h2 >
					<span class="num">#{{::playerDetails.pno}}</span>
					<span class="dropdown-container">
						<span data-animation="am-flip-x" bs-dropdown aria-haspopup="true" aria-expanded="false" class="dropdown" ng-click="seasonDd = !seasonDd; activateDD(seasonDd);" ng-blur="seasonDd = !seasonDd; activateDD(seasonDd);" ng-class="{'active': seasonDd}" tabindex="-1">
                            <span>{{::playerDetails.PName}}</span>
                            <span class="triangle"></span>
                        </span>
                        <ul class="dropdown-menu player-dd seasons-dd single" role="menu">
                            <li ng-repeat="player in playersList">
                                <a href="/team/{{player.url}}/#?pid={{player.PID}}">
                					<span>#{{player.pno}}</span>
                                    <span class="separator"></span>
                                    <span>{{player.PName}}</span>
                                </a>
            				</li>
                        </ul>
						<span class="sub">aka {{::playerDetails.pNickName}}</span>
					</span>
				</h2>
                <img ng-src="/static/img/profiles/profile-main-{{::playerDetails.url}}.png" class="img hidden-desktop" alt="{{::playerDetails.PName}}" />
                <div class="det-chart">
    				<ul class="det">
    					<li>
    						<span class="title">Position</span>
    						<span class="separator"></span>
    						<span>{{::playerDetails.pos}}</span>
                            <span ng-if="!playerDetails.pos">-</span>
    					</li>
    					<li>
    						<span class="title">Height</span>
    						<span class="separator"></span>
    						<span>{{::playerDetails.height}}</span>
                            <span ng-if="!playerDetails.height">-</span>
    					</li>
    					<li>
    						<span class="title">Weight</span>
    						<span class="separator"></span>
    						<span>{{::playerDetails.weight}}kg</span>
                            <span ng-if="!playerDetails.weight && playerDetails.weight !==0">-</span>
    					</li>
    					<li>
    						<span class="title">Games</span>
    						<span class="separator"></span>
    						<span>{{::playerDetails.gmsPlayed}}</span>
                            <span ng-if="!playerDetails.gmsPlayed">-</span>
    					</li>
    					<li>
    						<span class="title">Clubs</span>
    						<span class="separator"></span>
    						<span>{{::playerDetails.clubs}}</span>
                            <span ng-if="!playerDetails.clubs">-</span>
    					</li>
    				</ul>
                    <div class="pts-chart">
                        <canvas id="points-chart" height="150"></canvas>
                        <ul>
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
                    </div>
                </div>
                <div class="main-stats">
                    <div class="bg-colour"></div>
    				<ul>
                        <li>
    						<span class="stat">{{::playerDetails.gmsPlayed}}</span>
    						<span class="cat">gms</span>
    					</li>
    					<li>
    						<span class="stat">{{::careerAvgs.tPts}}</span>
    						<span class="cat">ppg</span>
    					</li>
    					<li>
    						<span class="stat">{{::careerAvgs.t3pt}}</span>
    						<span class="cat">3pg</span>
    					</li>
    					<li>
    						<span class="stat">{{::careerAvgs.tFTP}}</span>
    						<span class="cat">FT%</span>
    					</li>
                        <li>
                            <span class="stat">{{::careerAvgs.tFTM}}</span>
                            <span class="cat">FTM</span>
                        </li>
    					<li>
    						<span class="stat">{{::careerAvgs.tFTA}}</span>
    						<span class="cat">FTA</span>
    					</li>
    					<li>
    						<span class="stat">{{::careerAvgs.tFouls}}</span>
    						<span class="cat">FPG</span>
    					</li>
                        <li class="eff">
                            <span class="stat"><span ng-if="careerAvgs.avgEff > 0" class="plus">+</span>{{::careerAvgs.avgEff}}</span>
    						<span class="cat">PER</span>
    					</li>
    				</ul>
                </div>
			</div>
			<img ng-src="/static/img/profiles/profile-main-{{::playerDetails.url}}.png" class="img hidden-mobile" alt="{{::playerDetails.PName}}" />
		</div>

        <h3 ng-show="success">Career Highs</h3>
        <div class="record-stats main-stats" ng-show="success">
            <ul>
                <li ng-class="{'fadeIn-1': success}">
                    <a href="/box-score/#?league={{careerHighs.mPtsComp}}&season={{careerHighs.mPtsSeasonID}}&roundID={{careerHighs.mPtsRoundID}}">
                        <i class="logo"></i>
                        <h3>
                            <span class="hidden-mobile">Points</span>
                            <span class="hidden-desktop">Pts</span>
                        </h3>
                        <span class="stat">{{::careerHighs.mPts}}</span>
                        <p>{{::careerHighs.mPtsDate}}<i ng-if="!careerHighs.mPtsDate">-</i></p>
                    </a>
                </li>
                <li class="spacer"></li>
                <li ng-class="{'fadeIn-1': success}">
                    <a href="/box-score/#?league={{careerHighs.m3ptComp}}&season={{careerHighs.m3ptSeasonID}}&roundID={{careerHighs.m3ptRoundID}}">
                        <i class="logo "></i>
                        <h3>
                            <span class="hidden-mobile">3 Points</span>
                            <span class="hidden-desktop">3PT</span>
                        </h3>
                        <span class="stat">{{::careerHighs.m3pt}}</span>
                        <p>{{::careerHighs.m3ptDate}}<i ng-if="!careerHighs.m3ptDate">-</i></p>
                    </a>
                </li>
                <li class="spacer"></li>
                <li ng-class="{'fadeIn-1': success}">
                    <a href="/box-score/#?league={{careerHighsFGM.comp}}&season={{careerHighsFGM.seasonID}}&roundID={{careerHighsFGM.roundID}}">
                        <i class="logo"></i>
                        <h3>FGM</h3>
                        <span class="stat">{{::careerHighsFGM.mFGM}}</span>
                        <p>{{::careerHighsFGM.mFGMDate}}<i ng-if="!careerHighsFGM.mFGMDate">-</i></p>
                    </a>
                </li>
                <li class="spacer"></li>
                <li ng-class="{'fadeIn-1': success}">
                    <a href="/box-score/#?league={{careerHighsFTP.comp}}&season={{careerHighsFTP.seasonID}}&roundID={{careerHighsFTP.roundID}}">
                        <i class="logo"></i>
                        <h3>FT%</h3>
                        <span class="stat">{{::careerHighsFTP.mFTP}}%</span>
                        <p>{{::careerHighsFTP.mFTPDate}}<i ng-if="!careerHighsFTP.mFTPDate">-</i></p>
                    </a>
                </li>
                <li class="spacer"></li>
                <li ng-class="{'fadeIn-1': success}">
                    <a href="/box-score/#?league={{careerHighs.mFTMComp}}&season={{careerHighs.mFTMSeasonID}}&roundID={{careerHighs.mFTMRoundID}}">
                        <i class="logo"></i>
                        <h3>FTM</h3>
                        <span class="stat">{{::careerHighs.mFTM}}</span>
                        <p>{{::careerHighs.mFTMDate}}<i ng-if="!careerHighs.mFTMDate">-</i></p>
                    </a>
                </li>
                <li class="spacer"></li>
                <li ng-class="{'fadeIn-1': success}">
                    <a href="/box-score/#?league={{careerHighs.mFTAComp}}&season={{careerHighs.mFTASeasonID}}&roundID={{careerHighs.mFTARoundID}}">
                        <i class="logo"></i>
                        <h3>FTA</h3>
                        <span class="stat">{{::careerHighs.mFTA}}</span>
                        <p>{{::careerHighs.mFTADate}}<i ng-if="!careerHighs.mFTADate">-</i></p>
                    </a>
                </li>
                <li class="spacer"></li>
                <li ng-class="{'fadeIn-1': success}">
                    <i class="logo"></i>
                    <h3>
                        <span class="hidden-mobile">Cons. GMS</span>
                        <span class="hidden-desktop">CGMS</span>
                    </h3>
                    <span class="stat">{{::p1Consec.stat}}</span>
                    <p>{{::p1Consec.date}}<i ng-if="!p1Consec.date">-</i></p>
                </li>
                <li class="spacer"></li>
                <li ng-class="{'fadeIn-1': success}">
                    <i class="logo"></i>
                    <h3>
                        <span class="hidden-mobile">Win %</span>
                        <span class="hidden-desktop">CGMS</span>
                    </h3>
                    <span class="stat">{{winningestPlayerData}}%</span>
                    <p>-</p>
                </li>
            </ul>
        </div>

        <div class="subtitle dropdown-container no-marg" ng-show="success">
            <h3 id="careerTitle">Current Season</h3>
        </div>
        <div ajax-loader="tableSuccess" ng-if="!firstLoad" class="stats-table-loader"></div>
        <table id="latest-season-table" class="std-table career-totals-table" ng-show="success" ng-class="{'min': !tableSuccess}">
            <thead>
                <tr>
                    <th class="tleft season sortable" ng-click="sortTypeL='seasonName';sortReverseL = true;">
                        <span class="text">
                            <span class="hidden-mobile">Season</span>
                            <span class="hidden-desktop">ssn</span>
                        </span>
                        <span class="triangle" ng-class="{'active': sortTypeL == 'seasonID'}"></span>
                    </th>
                    <th class="tleft league sortable" ng-click="sortTypeL='leagueAbbr';sortReverseL = true;">
                        <span class="text">
                            <span class="hidden-mobile">League</span>
                            <span class="hidden-desktop">LEG</span>
                        </span>
                        <span class="triangle" ng-class="{'active': sortTypeL == 'leagueAbbr'}"></span>
                    </th>
                    <th class="tcenter league sortable" ng-click="sortTypeL='round';sortReverseL = true;">
                        <span class="text">
                            <span class="hidden-mobile">Round</span>
                            <span class="hidden-desktop">RD</span>
                        </span>
                        <span class="triangle" ng-class="{'active': sortTypeL == 'round'}"></span>
                    </th>
                    <th class="tleft league sortable">
                        <span class="text">
                            <span>&nbsp;</span>
                        </span>
                    </th>
                    <th class="tcenter sortable points" ng-click="sortTypeL='tPts';sortReverseL = true;">
                        <span class="text">
                            <span class="hidden-mobile">Points</span>
                            <span class="hidden-desktop">PTS</span>
                        </span>
                        <span class="triangle" ng-class="{'active': sortTypeL == 'tPts'}"></span>
                    </th>
                    <th class="tcenter sortable" ng-click="sortTypeL='t3pt';sortReverseL = true;">
                        <span class="text">3pm</span>
                        <span class="triangle" ng-class="{'active': sortTypeL == 't3pt'}"></span>
                    </th>
                    <th class="tcenter sortable" ng-click="sortTypeL='tFGM';sortReverseL = true;">
                        <span class="text">FGM</span>
                        <span class="triangle" ng-class="{'active': sortTypeL == 'tFGM'}"></span>
                    </th>
                    <th class="tcenter sortable ft" ng-click="sortTypeL='tFTM';sortReverseL = true;">
                        <span class="text">
                            <span class="hidden-mobile">FTM-A</span>
                            <span class="hidden-desktop">FT-A</span>
                        </span>
                        <span class="triangle" ng-class="{'active': sortTypeL == 'tFTM'}"></span>
                    </th>
                    <th class="tcenter sortable" ng-click="sortTypeL='tFTP';sortReverseL = true;">
                        <span class="text">FT%</span>
                        <span class="triangle" ng-class="{'active': sortTypeL == 'tFTP'}"></span>
                    </th>
                    <th class="tcenter sortable" ng-click="sortTypeL='tFouls';sortReverseL = true;">
                        <span class="text">
                            <span class="hidden-mobile">Fouls</span>
                            <span class="hidden-desktop">FLS</span>
                        </span>
                        <span class="triangle" ng-class="{'active': sortTypeL == 'tFouls'}"></span>
                    </th>
                    <th class="tcenter sortable hidden-mobile">
                        <span class="text">
                            <span class="hidden-mobile">PER</span>
                        </span>
                    </th>
                </tr>
            </thead>
            <tbody ng-show="success" ng-hide="!tableSuccess" ng-if="playerDetails.active">
                <tr ng-repeat="entry in latestSeason | orderBy:sortTypeL:sortReverseL | orderEmpty:sortTypeL:'toBottom'">
                    <td class="tleft">
                        <span class="text">
                            <span class="hidden-mobile">{{entry.seasonName}}</span>
                            <span class="hidden-desktop">
                                <a href="/stats/pers#?league={{entry.comp}}&season={{entry.seasonID}}">{{entry.seasonID}}</a.>
                            </span>
                        </span>
                    </td>
                    <td class="tleft">{{entry.leagueAbbr}}</td>
                    <td class="tcenter"><span class="hidden-mobile">Round&nbsp;</span>{{entry.round}}</td>
                    <td class="tcenter italic"><span ng-if="entry.tGp == 0">DNP</span></td>
                    <td class="tcenter">
                        <span ng-if="entry.tGp > 0">{{entry.tPts}}</span>
                        <span ng-if="entry.tPts === null || entry.tGp == 0 || entry.tGp === null">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="entry.tGp > 0">{{entry.t3pt}}</span>
                        <span ng-if="entry.t3pt === null || entry.tGp == 0 || entry.tGp === null">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="entry.tGp > 0">{{entry.tFGM}}</span>
                        <span ng-if="entry.tFGM === null || entry.tGp == 0 || entry.tGp === null">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="entry.tGp > 0">
                            <span class="hidden-mobile">{{entry.tFTM}} - {{entry.tFTA}}</span>
                            <span class="hidden-desktop">{{entry.tFTM}}-{{entry.tFTA}}</span>
                        </span>
                        <span ng-if="entry.tGp == 0 || entry.tGp === null">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="entry.tFTP != null">{{entry.tFTP}}%</span><span ng-if="!entry.tFTP && entry.tFTP != 0">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="entry.tGp > 0">{{entry.tFouls}}</span>
                        <span ng-if="entry.tFouls === null || entry.tGp == 0 || entry.tGp === null">-</span>
                    </td>
                    <td class="tcenter hidden-mobile">&nbsp;</td>
                </tr>
                <tr class="totals">
                    <td class="name">Total</td>
                    <td class="tcenter" colspan="3">&nbsp;</td>
                    <td class="tcenter">
                        <span ng-if="latestSeasonTotals.tGp > 0">{{latestSeasonTotals.tPts}}</span>
                        <span ng-if="latestSeasonTotals.tPts === null || latestSeasonTotals.tGp == 0">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="latestSeasonTotals.tGp > 0">{{latestSeasonTotals.t3pt}}</span>
                        <span ng-if="latestSeasonTotals.t3pt === null || latestSeasonTotals.tGp == 0">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="latestSeasonTotals.tGp > 0">{{latestSeasonTotals.tFGM}}</span>
                        <span ng-if="latestSeasonTotals.tFGM === null || latestSeasonTotals.tGp == 0">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="latestSeasonTotals.tGp > 0">
                            <span class="hidden-mobile">{{latestSeasonTotals.tFTM}} - {{latestSeasonTotals.tFTA}}</span>
                            <span class="hidden-desktop">{{latestSeasonTotals.tFTM}}-{{latestSeasonTotals.tFTA}}</span>
                        </span>
                        <span ng-if="latestSeasonTotals.tFTM === null || latestSeasonTotals.tGp == 0">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="latestSeasonTotals.tGp > 0 && latestSeasonTotals.tFTP != null">{{latestSeasonTotals.tFTP}}%</span>
                        <span ng-if="latestSeasonTotals.tFTP === null || latestSeasonTotals.tGp == 0">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="latestSeasonTotals.tGp > 0">{{latestSeasonTotals.tFouls}}</span>
                        <span ng-if="latestSeasonTotals.tFouls === null || latestSeasonTotals.tGp == 0">-</span>
                    </td>
                    <td class="tcenter hidden-mobile">
                        <span ng-if="latestSeasonTotals.tGp > 0"><span ng-if="careerTotals.avgEff > 0">+</span>{{latestSeasonTotals.avgEff}}</span>
                    </td>
                </tr>
            </tbody>
            <tbody ng-show="success" ng-hide="!tableSuccess" ng-if="!playerDetails.active">
                <tr>
                    <td class="tcenter italic" colspan="11">Player not currently active</td>
                <tr>
            </tbody>
        </table>
        <div class="hidden-desktop per-mob" ng-class="{'show': success, 'hide': !tableSuccess}">
            <span class="title">PER:</span><span ng-if="careerTotals.tGp > 0"><span ng-if="careerTotals.avgEff > 0">+</span>{{latestSeasonTotals.avgEff}}</span>
            <span ng-if="!careerTotals.avgEff || careerTotals.tGp == 0">-</span>
        </div>
        <div class="header-fixed player-stats career">
            <table class="std-table career-totals-table">
                <tr>
                    <td class="tleft">Summer 2008</td>
                    <td class="tleft">BHS</td>
                    <td class="tcenter">163</td>
                    <td class="tcenter">
                        <span>1239</span>
                    </td>
                    <td class="tcenter">
                        <span>234</span>
                    </td>
                    <td class="tcenter"><span>444</span>
                    </td>
                    <td class="tcenter">
                        <span>334 - 138</span>
                    </td>
                    <td class="tcenter">
                        52.9
                        <span>%</span>
                    </td>
                    <td class="tcenter">
                        <span>230</span>
                    </td>
                    <td class="tcenter icon hidden-mobile">
                        <a href="#"><i class="flaticon-business"></i></a>
                    </td>
                </tr>
            </table>
        </div>


        <div class="subtitle dropdown-container no-marg" ng-show="success">
            <h3 id="careerTitle">Career</h3>
            <span class="dots">::</span>
            <h4 data-animation="am-flip-x" bs-dropdown aria-haspopup="true" aria-expanded="false" class="dropdown" ng-click="seasonDd = !seasonDd; activateDD(seasonDd);" ng-blur="seasonDd = !seasonDd; activateDD(seasonDd);" ng-class="{'active': seasonDd}" tabindex="-1">
                <span class="season text">{{statType}}</span>
                <span class="triangle"></span>
            </h4>
            <ul class="dropdown-menu type-dd single" role="menu">
                <li ng-if="statType !='averages'"><span ng-click="getPlayer(selectedPlayerId,'averages', 'career');">Averages</span></li>
                <li ng-if="statType !='totals'"><span ng-click="getPlayer(selectedPlayerId, 'totals', 'career');">Totals</span></li>
            </ul>
            <span class="see-more" id="seeMoreCareer" ng-class="{'active': showCareerArchive}" ng-click="showCareerArchive = !showCareerArchive; scrollToEl(this);">
                <span class="icon flaticon-returning-arrow"></span>
				<span class="text"><h4>Archive</h4></span>
            </span>
        </div>
        <div ajax-loader="tableSuccess" ng-if="!firstLoad" class="stats-table-loader"></div>
        <table id="career-totals-table" class="std-table career-totals-table" ng-show="success" ng-class="{'min': !tableSuccess}">
            <thead>
                <tr>
                    <th class="tleft season sortable" ng-click="sortType='seasonID';sortReverse = true;showCareerArchive = true;">
                        <span class="text">
                            <span class="hidden-mobile">Season</span>
                            <span class="hidden-desktop">ssn</span>
                        </span>
                        <span class="triangle" ng-class="{'active': sortType == 'seasonID'}"></span>
                    </th>
                    <th class="tleft league sortable" ng-click="sortType='leagueAbbr';sortReverse = falseshowCareerArchive = true;">
                        <span class="text">
                            <span class="hidden-mobile">League</span>
                            <span class="hidden-desktop">LEG</span>
                        </span>
                        <span class="triangle" ng-class="{'active': sortType == 'leagueAbbr'}"></span>
                    </th>
                    <th class="tcenter sortable" ng-click="sortType='tGp';sortReverse = true;showCareerArchive = true;">
                        <span class="text">
                            <span class="hidden-mobile">GAMES</span>
                            <span class="hidden-desktop">GMS</span>
                        </span>
                        <span class="triangle" ng-class="{'active': sortType == 'tGp'}"></span>
                    </th>
                    <th class="tcenter sortable points" ng-click="sortType='tPts';sortReverse = true;showCareerArchive = true;">
                        <span class="text">
                            <span class="hidden-mobile">Points</span>
                            <span class="hidden-desktop">PTS</span>
                        </span>
                        <span class="triangle" ng-class="{'active': sortType == 'tPts'}"></span>
                    </th>
                    <th class="tcenter sortable" ng-click="sortType='t3pt';sortReverse = true;showCareerArchive = true;">
                        <span class="text">3pm</span>
                        <span class="triangle" ng-class="{'active': sortType == 't3pt'}"></span>
                    </th>
                    <th class="tcenter sortable" ng-click="sortType='tFGM';sortReverse = true;showCareerArchive = true;">
                        <span class="text">FGM</span>
                        <span class="triangle" ng-class="{'active': sortType == 'tFGM'}"></span>
                    </th>
                    <th class="tcenter sortable ft" ng-click="sortType='tFTM';sortReverse = true;showCareerArchive = true;">
                        <span class="text">
                            <span class="hidden-mobile">FTM-A</span>
                            <span class="hidden-desktop">FT-A</span>
                        </span>
                        <span class="triangle" ng-class="{'active': sortType == 'tFTM'}"></span>
                    </th>
                    <th class="tcenter sortable" ng-click="sortType='tFTP';sortReverse = true;showCareerArchive = true;">
                        <span class="text">FT%</span>
                        <span class="triangle" ng-class="{'active': sortType == 'tFTP'}"></span>
                    </th>
                    <th class="tcenter sortable" ng-click="sortType='tFouls';sortReverse = true;showCareerArchive = true;">
                        <span class="text">
                            <span class="hidden-mobile">Fouls</span>
                            <span class="hidden-desktop">FLS</span>
                        </span>
                        <span class="triangle" ng-class="{'active': sortType == 'tFouls'}"></span>
                    </th>
                    <th class="tcenter hidden-mobile">
                        <span class="text">PER</span>
                    </th>
                </tr>
            </thead>
            <tbody ng-show="success" ng-hide="!tableSuccess">
                <tr ng-repeat="entry in careerBySeason | orderBy:sortType:sortReverse | orderEmpty:sortType:'toBottom'" ng-class="{'historic': !$first, 'expose': showCareerArchive}" ng-show="showCareerArchive || $first">
                    <td class="tleft">
                        <span class="text">
                            <span class="hidden-mobile">{{entry.seasonName}}</span>
                            <span class="hidden-desktop">
                                <a href="/stats/pers#?league={{entry.comp}}&season={{entry.seasonID}}">{{entry.seasonID}}</a.>
                            </span>
                        </span>
                    </td>
                    <td class="tleft">{{entry.leagueAbbr}}</td>
                    <td class="tcenter">
                        {{entry.tGp}}
                    </td>
                    <td class="tcenter">
                        <span ng-if="entry.tGp > 0">{{entry.tPts}}</span>
                        <span ng-if="entry.tPts === null || entry.tGp == 0 || entry.tGp === null">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="entry.tGp > 0">{{entry.t3pt}}</span>
                        <span ng-if="entry.t3pt === null || entry.tGp == 0 || entry.tGp === null">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="entry.tGp > 0">{{entry.tFGM}}</span>
                        <span ng-if="entry.tFGM === null || entry.tGp == 0 || entry.tGp === null">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="entry.tGp > 0">
                            <span class="hidden-mobile">{{entry.tFTM}} - {{entry.tFTA}}</span>
                            <span class="hidden-desktop">{{entry.tFTM}}-{{entry.tFTA}}</span>
                        </span>
                        <span ng-if="entry.tGp == 0 || entry.tGp === null">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="entry.tFTP != null">{{entry.tFTP}}%</span><span ng-if="!entry.tFTP && entry.tFTP != 0">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="entry.tGp > 0">{{entry.tFouls}}</span>
                        <span ng-if="entry.tFouls === null || entry.tGp == 0 || entry.tGp === null">-</span></td>
                    <td class="tcenter icon hidden-mobile">
                        <a href="/stats/pers#?league={{entry.comp}}&season={{entry.seasonID}}" ng-if="entry.tGp > 0"><i class="flaticon-business"></i></a><span ng-if="entry.tGp == 0 || entry.tGp === null">-</span>
                    </td>
                </tr>
                <tr class="totals">
                    <td class="name">Total</td>
                    <td class="tcenter">&nbsp;</td>
                    <td class="tcenter">{{careerTotals.tGp}}</td>
                    <td class="tcenter">
                        <span ng-if="careerTotals.tGp > 0">{{careerTotals.tPts}}</span>
                        <span ng-if="careerTotals.tPts === null || careerTotals.tGp == 0">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="careerTotals.tGp > 0">{{careerTotals.t3pt}}</span>
                        <span ng-if="careerTotals.t3pt === null || careerTotals.tGp == 0">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="careerTotals.tGp > 0">{{careerTotals.tFGM}}</span>
                        <span ng-if="careerTotals.tFGM === null || careerTotals.tGp == 0">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="careerTotals.tGp > 0">
                            <span class="hidden-mobile">{{careerTotals.tFTM}} - {{careerTotals.tFTA}}</span>
                            <span class="hidden-desktop">{{careerTotals.tFTM}}-{{careerTotals.tFTA}}</span>
                        </span>
                        <span ng-if="careerTotals.tFTM === null || careerTotals.tGp == 0">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="careerTotals.tGp > 0 && careerTotals.tFTP != null">{{careerTotals.tFTP}}%</span>
                        <span ng-if="careerTotals.tFTP === null || careerTotals.tGp == 0">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="careerTotals.tGp > 0">{{careerTotals.tFouls}}</span>
                        <span ng-if="careerTotals.tFouls === null || careerTotals.tGp == 0">-</span>
                    </td>
                    <td class="tcenter hidden-mobile">
                        <span ng-if="careerTotals.tGp > 0"><span ng-if="careerTotals.avgEff > 0">+</span>{{careerTotals.avgEff}}</span>
                        <span ng-if="careerTotals.avgEff === null || careerTotals.tGp == 0">-</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="hidden-desktop per-mob" ng-class="{'show': success, 'hide': !tableSuccess}">
            <span class="title">PER:</span><span ng-if="careerTotals.tGp > 0"><span ng-if="careerTotals.avgEff > 0">+</span>{{careerTotals.avgEff}}</span>
            <span ng-if="!careerTotals.avgEff || careerTotals.tGp == 0">-</span>
        </div>
        <div class="header-fixed player-stats career">
            <table class="std-table career-totals-table">
                <tr>
                    <td class="tleft">Summer 2008</td>
                    <td class="tleft">BHS</td>
                    <td class="tcenter">163</td>
                    <td class="tcenter">
                        <span>1239</span>
                    </td>
                    <td class="tcenter">
                        <span>234</span>
                    </td>
                    <td class="tcenter"><span>444</span>
                    </td>
                    <td class="tcenter">
                        <span>334 - 138</span>
                    </td>
                    <td class="tcenter">
                        52.9
                        <span>%</span>
                    </td>
                    <td class="tcenter">
                        <span>230</span>
                    </td>
                    <td class="tcenter icon hidden-mobile">
                        <a href="#"><i class="flaticon-business"></i></a>
                    </td>
                </tr>
            </table>
        </div>

        <div class="subtitle dropdown-container no-marg" ng-show="success">
            <h3 id="finalsTitle">Finals</h3>
            <span class="dots">::</span>
            <h4 data-animation="am-flip-x" bs-dropdown aria-haspopup="true" aria-expanded="false" class="dropdown" ng-click="seasonDd = !seasonDd; activateDD(seasonDd);" ng-blur="seasonDd = !seasonDd; activateDD(seasonDd);" ng-class="{'active': seasonDd}" tabindex="-1">
                <span class="season text">{{statType}}</span>
                <span class="triangle"></span>
            </h4>
            <ul class="dropdown-menu type-dd single" role="menu">
                <li ng-if="statType !='averages'"><span ng-click="getPlayer(selectedPlayerId,'averages','finals');">Averages</span></li>
                <li ng-if="statType !='totals'"><span ng-click="getPlayer(selectedPlayerId, 'totals','finals');">Totals</span></li>
            </ul>
            <span class="see-more" id="seeMoreFinals" ng-class="{'active': showFinalsArchive}" ng-click="showFinalsArchive = !showFinalsArchive; scrollToEl(this);">
                <span class="icon flaticon-returning-arrow"></span>
				<span class="text"><h4>Archive</h4></span>
            </span>
        </div>
        <div ajax-loader="tableSuccess" ng-if="!firstLoad" class="stats-table-loader"></div>
        <table id="finals-totals-table" class="std-table" ng-show="success" ng-class="{'min': !tableSuccess}">
            <thead>
                <tr>
                    <th class="tleft season sortable" ng-click="sortTypeF='seasonID';sortReverse = true;showCareerArchive = true;">
                        <span class="text">
                            <span class="hidden-mobile">Season</span>
                            <span class="hidden-desktop">ssn</span>
                        </span>
                        <span class="triangle" ng-class="{'active': sortTypeF == 'seasonID'}"></span>
                    </th>
                    <th class="tleft league sortable" ng-click="sortTypeF='leagueAbbr';sortReverse = falseshowCareerArchive = true;">
                        <span class="text">
                            <span class="hidden-mobile">League</span>
                            <span class="hidden-desktop">LEG</span>
                        </span>
                        <span class="triangle" ng-class="{'active': sortTypeF == 'leagueAbbr'}"></span>
                    </th>
                    <th class="tcenter sortable" ng-click="sortTypeF='tGp';sortReverse = true;showCareerArchive = true;">
                        <span class="text">
                            <span class="hidden-mobile">GAMES</span>
                            <span class="hidden-desktop">GMS</span>
                        </span>
                        <span class="triangle" ng-class="{'active': sortTypeF == 'tGp'}"></span>
                    </th>
                    <th class="tcenter sortable points" ng-click="sortTypeF='tPts';sortReverse = true;showCareerArchive = true;">
                        <span class="text">
                            <span class="hidden-mobile">Points</span>
                            <span class="hidden-desktop">PTS</span>
                        </span>
                        <span class="triangle" ng-class="{'active': sortTypeF == 'tPts'}"></span>
                    </th>
                    <th class="tcenter sortable" ng-click="sortTypeF='t3pt';sortReverse = true;showCareerArchive = true;">
                        <span class="text">3pm</span>
                        <span class="triangle" ng-class="{'active': sortTypeF == 't3pt'}"></span>
                    </th>
                    <th class="tcenter sortable" ng-click="sortTypeF='tFGM';sortReverse = true;showCareerArchive = true;">
                        <span class="text">FGM</span>
                        <span class="triangle" ng-class="{'active': sortTypeF == 'tFGM'}"></span>
                    </th>
                    <th class="tcenter sortable ft" ng-click="sortTypeF='tFTM';sortReverse = true;showCareerArchive = true;">
                        <span class="text">
                            <span class="hidden-mobile">FTM-A</span>
                            <span class="hidden-desktop">FT-A</span>
                        </span>
                        <span class="triangle" ng-class="{'active': sortTypeF == 'tFTM'}"></span>
                    </th>
                    <th class="tcenter sortable" ng-click="sortTypeF='tFTP';sortReverse = true;showCareerArchive = true;">
                        <span class="text">FT%</span>
                        <span class="triangle" ng-class="{'active': sortTypeF == 'tFTP'}"></span>
                    </th>
                    <th class="tcenter sortable" ng-click="sortTypeF='tFouls';sortReverse = true;showCareerArchive = true;">
                        <span class="text">
                            <span class="hidden-mobile">Fouls</span>
                            <span class="hidden-desktop">FLS</span>
                        </span>
                        <span class="triangle" ng-class="{'active': sortTypeF == 'tFouls'}"></span>
                    </th>
                    <th class="tcenter hidden-mobile">
                        <span class="text">PER</span>
                    </th>
                </tr>
            </thead>
            <tbody ng-show="success" ng-hide="!tableSuccess">
                <tr ng-repeat="entry in careerBySeasonFinals | orderBy:sortTypeF:sortReverseF | orderEmpty:sortTypeF:'toBottom'" ng-class="{'historic': !$first, 'expose': showFinalsArchive}" ng-show="showFinalsArchive || $first">
                    <td class="tleft">
                        <span class="text">
                            <span class="hidden-mobile">{{entry.seasonName}}</span>
                            <span class="hidden-desktop">
                                <a href="/stats/pers#?league={{entry.comp}}&season={{entry.seasonID}}">{{entry.seasonID}}</a.>
                            </span>
                        </span>
                    </td>
                    <td class="tleft">{{entry.leagueAbbr}}</td>
                    <td class="tcenter">
                        {{entry.tGp}}
                    </td>
                    <td class="tcenter">
                        <span ng-if="entry.tGp > 0">{{entry.tPts}}</span>
                        <span ng-if="entry.tPts === null || entry.tGp == 0 || entry.tGp === null">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="entry.tGp > 0">{{entry.t3pt}}</span>
                        <span ng-if="entry.t3pt === null || entry.tGp == 0 || entry.tGp === null">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="entry.tGp > 0">{{entry.tFGM}}</span>
                        <span ng-if="entry.tFGM === null || entry.tGp == 0 || entry.tGp === null">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="entry.tGp > 0">
                            <span class="hidden-mobile">{{entry.tFTM}} - {{entry.tFTA}}</span>
                            <span class="hidden-desktop">{{entry.tFTM}}-{{entry.tFTA}}</span>
                        </span>
                        <span ng-if="entry.tGp == 0 || entry.tGp === null">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="entry.tFTP != null">{{entry.tFTP}}%</span><span ng-if="entry.tFTP === null && entry.tFTP != 0">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="entry.tGp > 0">{{entry.tFouls}}</span>
                        <span ng-if="entry.tFouls === null || entry.tGp == 0 || entry.tGp === null">-</span></td>
                    <td class="tcenter icon hidden-mobile">
                        <a href="#" ng-if="entry.tGp > 0"><i class="flaticon-business"></i></a><span ng-if="entry.tGp == 0 || entry.tGp === null">-</span>
                    </td>
                </tr>
                <tr class="totals">
                    <td class="name">Total</td>
                    <td class="tcenter">&nbsp;</td>
                    <td class="tcenter">{{careerTotalsFinals.tGp}}</td>
                    <td class="tcenter">
                        <span ng-if="careerTotals.tGp > 0">{{careerTotalsFinals.tPts}}</span>
                        <span ng-if="careerTotalsFinals.tPts === null || careerTotalsFinals.tGp == 0">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="careerTotalsFinals.tGp > 0">{{careerTotalsFinals.t3pt}}</span>
                        <span ng-if="careerTotalsFinals.t3pt === null || careerTotalsFinals.tGp == 0">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="careerTotalsFinals.tGp > 0">{{careerTotalsFinals.tFGM}}</span>
                        <span ng-if="careerTotalsFinals.tFGM === null || careerTotalsFinals.tGp == 0">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="careerTotalsFinals.tGp > 0"><span class="hidden-mobile">{{careerTotalsFinals.tFTM}} - {{careerTotalsFinals.tFTA}}</span>
                        <span class="hidden-desktop">{{careerTotalsFinals.tFTM}}-{{careerTotalsFinals.tFTA}}</span></span>
                        <span ng-if="careerTotalsFinals.tFTM === null || careerTotalsFinals.tGp == 0">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="careerTotalsFinals.tGp > 0 && careerTotalsFinals.tFTP != null">{{careerTotalsFinals.tFTP}}%</span>
                        <span ng-if="careerTotalsFinals.tFTP === null || careerTotalsFinals.tGp == 0">-</span>
                    </td>
                    <td class="tcenter">
                        <span ng-if="careerTotalsFinals.tGp > 0">{{careerTotalsFinals.tFouls}}</span>
                        <span ng-if="careerTotalsFinals.tFouls === null || careerTotalsFinals.tGp == 0">-</span>
                    </td>
                    <td class="tcenter hidden-mobile">
                        <span ng-if="careerTotalsFinals.tGp > 0"><span ng-if="careerTotalsFinals.avgEff > 0">+</span>{{careerTotalsFinals.avgEff}}</span>
                        <span ng-if="careerTotalsFinals.avgEff === null || careerTotalsFinals.tGp == 0">-</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="hidden-desktop per-mob" ng-class="{'show': success, 'hide': !tableSuccess}">
            <span class="title">PER:</span><span ng-if="careerTotals.tGp > 0"><span ng-if="careerTotals.avgEff > 0">+</span>{{careerTotalsFinals.avgEff}}</span>
            <span ng-if="!careerTotals.avgEff || careerTotals.tGp == 0">-</span>
        </div>
        <div class="header-fixed player-stats finals">
            <table class="std-table career-totals-table">
                <tr>
                    <td class="tleft">Summer 2008</td>
                    <td class="tleft">BHS</td>
                    <td class="tcenter">163</td>
                    <td class="tcenter">
                        <span>1239</span>
                    </td>
                    <td class="tcenter">
                        <span>234</span>
                    </td>
                    <td class="tcenter"><span>444</span>
                    </td>
                    <td class="tcenter">
                        <span>334 - 138</span>
                    </td>
                    <td class="tcenter">
                        52.9
                        <span>%</span>
                    </td>
                    <td class="tcenter">
                        <span>230</span>
                    </td>
                    <td class="tcenter icon hidden-mobile">
                        <a href="#"><i class="flaticon-business"></i></a>
                    </td>
                </tr>
            </table>
        </div>
	</div>



<?php
	//Assign all Page Specific variables
	$pagemaincontent = ob_get_contents();
	ob_end_clean();
	$navSelectedTeam ="active";
    $MetaDescription = $playerName. ". The B-Sharps Basketball Club Team.  The official site of The B-Sharps Basketball Club.";
    $pageTitle = $playerName. " | The Team";
	$page = "the-team";
    $globalClass = "";
	$extraScript = "/static/dist/js/player-detail-controller.js";
	include("../master-index.php");
?>
