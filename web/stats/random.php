<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>

    <?php include("../inc/global-vars.php"); ?>

    <div ng-controller="statsRandomController" ng-init="init();" ng-cloak>
        <div ng-controller="leaguesSeasonsRoundsController" ng-init="initLeaguesSeasonsRounds();">
            <div class="crumbs clearfix">
                <ul>
                    <li><span id="leagues"><a href="/stats">stats</a></span></li>
                    <li>&nbsp;&nbsp;::&nbsp;&nbsp;<li>
                    <li class="title"><h1>Random</h1></li>
                </ul>
            </div>
        </div>

        <div ajax-loader="success || apiError" class="stats-loader"></div>
        <p class="api-error" ng-show="apiError">Oops, there was an error loading the data, please try again shortly.</p>

        <div id="stats-totals" class="pers animated" ng-class="{'fadeIn': success, 'fadeOut': !success}" ng-show="success" ng-cloak>
            <div class="stat-box-container">
                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>Most Consecutive Games
                        <span>* Team Bye does not break streak</span>
                    </h3>
                    <div class="winner-winner">
                        <div ng-repeat="winner in consecGameData | orderObjectBy:'stat':true | limitTo:1">
                            <a ng-href="/team/{{::winner.url}}#?pid={{::winner.pid}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{::winner.url}}.png" alt="{{::winner.PName}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{::winner.pNo}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{::winner.url}}#?pid={{::winner.pid}}">{{::winner.name}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{::winner.posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{::winner.height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{::winner.stat}}<span ng-show="sn2Active == 'snt'">Consecutive GMS</span><span ng-show="sn2Active == 'sna'">PPG</span></h2>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">GMS</span><span ng-show="sn2Active == 'sna'">PPG</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in consecGameData | orderObjectBy:'stat':true" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{::entry.url}}#?pid={{::entry.pid}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{::entry.PName}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{::entry.pNo}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{::entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{::entry.url}}#?pid={{::entry.pid}}">{{::entry.name}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{::entry.stat}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>Current Consecutive Games<span>* Team Bye does not break streak</span></h3>
                    <div class="winner-winner">
                        <div ng-repeat="winner in consecGameDataCurr | orderObjectBy:'stat':true | limitTo:1">
                            <a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{::winner.url}}.png" alt="{{::winner.PName}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{::winner.pno}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}">{{::winner.PName}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{::winner.posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{::winner.height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{::winner.stat}}<span ng-show="sn2Active == 'snt'">Consecutive GMS</span><span ng-show="sn2Active == 'sna'">PPG</span></h2>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">GMS</span><span ng-show="sn2Active == 'sna'">PPG</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in consecGameDataCurr | orderObjectBy:'stat':true" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{::entry.PName}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{::entry.pno}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{::entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}">{{::entry.PName}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{::entry.stat}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <span class="hr"></span>

            <div class="stat-box-container">
                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>
                        Most Doughnut Games
                        <span>Games with zero points score</span>
                    </h3>
                    <div class="winner-winner">
                        <div ng-repeat="winner in doughnutsGameData | limitTo:1">
                            <a ng-href="/team/{{::winner.url}}#?pid={{::winner.pid}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{::winner.url}}.png" alt="{{::winner.PName}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{::winner.pNo}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{::winner.url}}#?pid={{::winner.pid}}">{{::winner.PName}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{::winner.posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{::winner.height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{::winner.stat}}<span ng-show="sn2Active == 'snt'">Doughnut GMS</span><span ng-show="sn2Active == 'sna'">PPG</span></h2>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">GMS</span><span ng-show="sn2Active == 'sna'">PPG</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in doughnutsGameData" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{::entry.url}}#?pid={{::entry.pid}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{::entry.PName}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{::entry.pNo}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{::entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{::entry.url}}#?pid={{::entry.pid}}">{{::entry.PName}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{::entry.stat}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>Most Fouled-Out Games<span>&nbsp;</span></h3>
                    <div class="winner-winner">
                        <div ng-repeat="winner in fouledOutGameData | limitTo: 1">
                            <a ng-href="/team/{{::winner.url}}#?pid={{::winner.pid}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{::winner.url}}.png" alt="{{::winner.PName}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{::winner.pNo}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{::winner.url}}#?pid={{::winner.pid}}">{{::winner.PName}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{::winner.posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{::winner.height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{::winner.stat}}<span ng-show="sn2Active == 'snt'">Fouled-Out GMS</span><span ng-show="sn2Active == 'sna'">PPG</span></h2>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">GMS</span><span ng-show="sn2Active == 'sna'">PPG</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in fouledOutGameData" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{::entry.url}}#?pid={{::entry.pid}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{::entry.PName}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{::entry.pNo}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{::entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{::entry.url}}#?pid={{::entry.pid}}">{{::entry.PName}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{::entry.stat}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>Most Clean Games<span>Games with zero fouls</span></h3>
                    <div class="winner-winner">
                        <div ng-repeat="winner in cleanGameData | limitTo: 1">
                            <a ng-href="/team/{{::winner.url}}#?pid={{::winner.pid}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{::winner.url}}.png" alt="{{::winner.PName}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{::winner.pNo}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{::winner.url}}#?pid={{::winner.pid}}">{{::winner.PName}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{::winner.posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{::winner.height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{::winner.stat}}<span ng-show="sn2Active == 'snt'">Clean GMS</span><span ng-show="sn2Active == 'sna'">PPG</span></h2>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">GMS</span><span ng-show="sn2Active == 'sna'">PPG</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in cleanGameData" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{::entry.url}}#?pid={{::entry.pid}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{::entry.PName}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{::entry.pNo}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{::entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{::entry.url}}#?pid={{::entry.pid}}">{{::entry.PName}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{::entry.stat}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <span class="hr"></span>

            <div class="stat-box-container">
                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>Most 3pt Games Streak<span>* Team Bye or player missing game does not break streak</span></h3>
                    <div class="winner-winner">
                        <div ng-repeat="winner in most3ptSt | limitTo:1">
                            <a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{::winner.url}}.png" alt="{{::winner.PName}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{::winner.pno}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}">{{::winner.PName}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{::winner.posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{::winner.height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{::winner.stat}}<span ng-show="sn2Active == 'snt'">3pt GMS Streak</span><span ng-show="sn2Active == 'sna'">PPG</span></h2>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">GMS</span><span ng-show="sn2Active == 'sna'">PPG</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in most3ptSt" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{::entry.PName}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{::entry.pno}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{::entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}">{{::entry.PName}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{::entry.stat}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>Most FTA Games Streak<span>* Team Bye or player missing game does not break streak</span></h3>
                    <div class="winner-winner">
                        <div ng-repeat="winner in mostFTASt | limitTo: 1">
                            <a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{::winner.url}}.png" alt="{{::winner.PName}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{::winner.pno}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}">{{::winner.PName}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{::winner.posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{::winner.height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{::winner.stat}}<span ng-show="sn2Active == 'snt'">FTA Games Streak</span><span ng-show="sn2Active == 'sna'">PPG</span></h2>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">GMS</span><span ng-show="sn2Active == 'sna'">PPG</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in mostFTASt" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{::entry.url}}#?pid={{::entry.pid}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{::entry.PName}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{::entry.pno}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{::entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{::entry.url}}#?pid={{::entry.pid}}">{{::entry.PName}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{::entry.stat}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>Most Clean Games Streak<span>* Team Bye or player missing game does not break streak</span></h3>
                    <div class="winner-winner">
                        <div ng-repeat="winner in mostCleanSt | limitTo: 1">
                            <a ng-href="/team/{{::winner.url}}#?pid={{::winner.pid}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{::winner.url}}.png" alt="{{::winner.PName}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{::winner.pno}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{::winner.url}}#?pid={{::winner.pid}}">{{::winner.PName}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{::winner.posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{::winner.height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{::winner.stat}}<span ng-show="sn2Active == 'snt'">Clean GMS Streak</span><span ng-show="sn2Active == 'sna'">PPG</span></h2>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">GMS</span><span ng-show="sn2Active == 'sna'">PPG</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in mostCleanSt" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{::entry.url}}#?pid={{::entry.pid}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{::entry.PName}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{::entry.pno}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{::entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{::entry.url}}#?pid={{::entry.pid}}">{{::entry.PName}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{::entry.stat}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="stat-box-container">
                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>Current 3pt Games Streak</h3>
                    <div class="winner-winner">
                        <div ng-repeat="winner in most3ptCurrSt | orderObjectBy:'active':false | orderObjectBy:'stat':true | limitTo:1">
                            <a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{::winner.url}}.png" alt="{{::winner.PName}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{::winner.pno}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}">{{::winner.PName}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{::winner.posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{::winner.height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{::winner.stat}}<span ng-show="sn2Active == 'snt'">3pt GMS Streak</span><span ng-show="sn2Active == 'sna'">PPG</span></h2>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">GMS</span><span ng-show="sn2Active == 'sna'">PPG</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in most3ptCurrSt | orderObjectBy:'active':false | orderObjectBy:'stat':true | limitTo:5" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{::entry.PName}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{::entry.pno}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{::entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}">{{::entry.PName}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{::entry.stat}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="api-error" ng-show="apiErrorCurr">Oops, there was an error loading the data, please try again shortly.</p>
                </div>
                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>Current FTA Games Streak</h3>
                    <div class="winner-winner">
                        <div ng-repeat="winner in mostFTACurrSt | orderObjectBy:'active':false | orderObjectBy:'stat':true | limitTo:1">
                            <a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{::winner.url}}.png" alt="{{::winner.PName}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{::winner.pno}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}">{{::winner.PName}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{::winner.posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{::winner.height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{::winner.stat}}<span ng-show="sn2Active == 'snt'">FTA GMS Streak</span><span ng-show="sn2Active == 'sna'">PPG</span></h2>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">GMS</span><span ng-show="sn2Active == 'sna'">PPG</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in mostFTACurrSt | orderObjectBy:'active':false | orderObjectBy:'stat':true | limitTo:5" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{::entry.PName}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{::entry.pno}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{::entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}">{{::entry.PName}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{::entry.stat}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="api-error" ng-show="apiErrorCurr">Oops, there was an error loading the data, please try again shortly.</p>
                </div>
                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>Current Clean Games Streak</h3>
                    <div class="winner-winner">
                        <div ng-repeat="winner in mostCleanCurrSt | orderObjectBy:'active':false | orderObjectBy:'stat':true | limitTo:1">
                            <a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{::winner.url}}.png" alt="{{::winner.PName}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{::winner.pno}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}">{{::winner.PName}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{::winner.posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{::winner.height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{::winner.stat}}<span ng-show="sn2Active == 'snt'">FTA GMS Streak</span><span ng-show="sn2Active == 'sna'">PPG</span></h2>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">GMS</span><span ng-show="sn2Active == 'sna'">PPG</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in mostCleanCurrSt | orderObjectBy:'active':false | orderObjectBy:'stat':true | limitTo:5" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{::entry.PName}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{::entry.pno}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{::entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}">{{::entry.PName}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{::entry.stat}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="api-error" ng-show="apiErrorCurr">Oops, there was an error loading the data, please try again shortly.</p>
                </div>
            </div>

            <span class="hr"></span>

            <div class="stat-box-container">
                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>Most Games <span class="sm">w/o</span> 3pt Streak</h3>
                    <div class="winner-winner">
                        <div ng-repeat="winner in mostNon3ptSt | limitTo:1">
                            <a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{::winner.url}}.png" alt="{{::winner.PName}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{::winner.pno}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}">{{::winner.PName}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{::winner.posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{::winner.height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{::winner.stat}}<span ng-show="sn2Active == 'snt'">3pt GMS Streak</span><span ng-show="sn2Active == 'sna'">PPG</span></h2>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">GMS</span><span ng-show="sn2Active == 'sna'">PPG</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in mostNon3ptSt" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{::entry.PName}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{::entry.pno}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{::entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}">{{::entry.PName}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{::entry.stat}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>Most Games <span class="sm">w/o</span> FTA Streak</h3>
                    <div class="winner-winner">
                        <div ng-repeat="winner in mostNonFTASt | limitTo: 1">
                            <a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{::winner.url}}.png" alt="{{::winner.PName}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{::winner.pno}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}">{{::winner.PName}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{::winner.posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{::winner.height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{::winner.stat}}<span ng-show="sn2Active == 'snt'">FTA Games Streak</span><span ng-show="sn2Active == 'sna'">PPG</span></h2>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">GMS</span><span ng-show="sn2Active == 'sna'">PPG</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in mostNonFTASt" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{::entry.url}}#?pid={{::entry.pid}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{::entry.PName}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{::entry.pno}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{::entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{::entry.url}}#?pid={{::entry.pid}}">{{::entry.PName}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{::entry.stat}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>Most Doughnut Games Streak</h3>
                    <div class="winner-winner">
                        <div ng-repeat="winner in mostDoughnutsSt | limitTo: 1">
                            <a ng-href="/team/{{::winner.url}}#?pid={{::winner.pid}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{::winner.url}}.png" alt="{{::winner.PName}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{::winner.pno}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{::winner.url}}#?pid={{::winner.pid}}">{{::winner.PName}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{::winner.posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{::winner.height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{::winner.stat}}<span ng-show="sn2Active == 'snt'">D'nut GMS Streak</span><span ng-show="sn2Active == 'sna'">PPG</span></h2>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">GMS</span><span ng-show="sn2Active == 'sna'">PPG</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in mostDoughnutsSt" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{::entry.url}}#?pid={{::entry.pid}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{::entry.PName}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{::entry.pno}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{::entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{::entry.url}}#?pid={{::entry.pid}}">{{::entry.PName}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{::entry.stat}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>Current Games <span class="sm">w/o</span> 3pt Streak</h3>
                    <div class="winner-winner">
                        <div ng-repeat="winner in mostNon3ptCurrSt | orderObjectBy:'active':false | orderObjectBy:'stat':true | limitTo:1">
                            <a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{::winner.url}}.png" alt="{{::winner.PName}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{::winner.pno}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}">{{::winner.PName}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{::winner.posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{::winner.height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{::winner.stat}}<span ng-show="sn2Active == 'snt'">3pt GMS Streak</span><span ng-show="sn2Active == 'sna'">PPG</span></h2>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">GMS</span><span ng-show="sn2Active == 'sna'">PPG</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in mostNon3ptCurrSt | orderObjectBy:'active':false | orderObjectBy:'stat':true | limitTo:5" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{::entry.PName}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{::entry.pno}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{::entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}">{{::entry.PName}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{::entry.stat}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="api-error" ng-show="apiErrorCurr">Oops, there was an error loading the data, please try again shortly.</p>
                </div>

                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>Current Games <span class="sm">w/o</span> FTA Streak</h3>
                    <div class="winner-winner">
                        <div ng-repeat="winner in mostNonFTACurrSt | orderObjectBy:'active':false | orderObjectBy:'stat':true | limitTo:1">
                            <a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{::winner.url}}.png" alt="{{::winner.PName}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{::winner.pno}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}">{{::winner.PName}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{::winner.posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{::winner.height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{::winner.stat}}<span ng-show="sn2Active == 'snt'">FTA GMS Streak</span><span ng-show="sn2Active == 'sna'">PPG</span></h2>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">GMS</span><span ng-show="sn2Active == 'sna'">PPG</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in mostNonFTACurrSt | orderObjectBy:'active':false | orderObjectBy:'stat':true | limitTo:5" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{::entry.PName}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{::entry.pno}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{::entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}">{{::entry.PName}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{::entry.stat}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="api-error" ng-show="apiErrorCurr">Oops, there was an error loading the data, please try again shortly.</p>
                </div>

                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>Current Doughnut Games Streak</h3>
                    <div class="winner-winner">
                        <div ng-repeat="winner in mostDoughnutsCurrSt | orderObjectBy:'active':false | orderObjectBy:'stat':true | limitTo:1">
                            <a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{::winner.url}}.png" alt="{{::winner.PName}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{::winner.pno}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}">{{::winner.PName}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{::winner.posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{::winner.height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{::winner.stat}}<span ng-show="sn2Active == 'snt'">D'nut GMS Streak</span><span ng-show="sn2Active == 'sna'">PPG</span></h2>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">GMS</span><span ng-show="sn2Active == 'sna'">PPG</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in mostDoughnutsCurrSt | orderObjectBy:'active':false | orderObjectBy:'stat':true | limitTo:5" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{::entry.PName}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{::entry.pno}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{::entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}">{{::entry.PName}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{::entry.stat}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="api-error" ng-show="apiErrorCurr">Oops, there was an error loading the data, please try again shortly.</p>
                </div>
            </div>

            <span class="hr"></span>

            <div class="stat-box-container">
                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>Winningest Players Total Wins</h3>
                    <div class="winner-winner">
                        <div ng-repeat="winner in winningestPlayerData | orderObjectBy:'stat':true | limitTo:1">
                            <a ng-href="/team/{{::winner.url}}#?pid={{::winner.pid}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{::winner.url}}.png" alt="{{::winner.PName}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{::winner.pno}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}">{{::winner.PName}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{::winner.posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{::winner.height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{::winner.stat}}<span ng-show="sn2Active == 'snt'">Winning Games</span><span ng-show="sn2Active == 'sna'">Wins</span></h2>
                                <span class="gms">{{::winner.gms}}&nbsp;GMS</span>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">WINS</span><span ng-show="sn2Active == 'sna'">WINS</span></th>
                                <th>GMS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in winningestPlayerData | orderObjectBy:'stat':true" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{::entry.PName}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{::entry.pno}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{::entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}">{{::entry.PName}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{::entry.stat}}</td>
                                <td class="tcenter">{{::entry.gms}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>Winningest Players Ratio</h3>
                    <div class="winner-winner">
                        <div ng-repeat="winner in winningestPlayerData | orderObjectBy:'winRatio':true | limitTo:1">
                            <a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{::winner.url}}.png" alt="{{::winner.PName}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{::winner.pno}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}">{{::winner.PName}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{::winner.posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{::winner.height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{::winner.winRatio}}%<span ng-show="sn2Active == 'snt'">Win Ratio</span><span ng-show="sn2Active == 'sna'">Win%</span></h2>
                                <span class="gms">{{::winner.gms}}&nbsp;GMS</span>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">RATIO</span><span ng-show="sn2Active == 'sna'">RATIO</span></th>
                                <th>GMS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in winningestPlayerData | orderObjectBy:'winRatio':true" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{::entry.PName}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{::entry.pno}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{::entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}">{{::entry.PName}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{::entry.winRatio}}%</td>
                                <td class="tcenter">{{::entry.gms}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="stat-box" ng-class="{'fadeInMy': success, 'fadeOutMy': !success}">
                    <h3>Winningest Players Finals</h3>
                    <div class="winner-winner">
                        <div ng-repeat="winner in winningestPlayerData | orderObjectBy:'winsFinals':true | limitTo:1">
                            <a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}"><img ng-src="/static/img/profiles/profile-main-thumb-{{::winner.url}}.png" alt="{{::winner.PName}}" ng-cloak></a>
                            <div class="deets">
                                <div class="info-box">
                                    <h4>
                                        <span>#{{::winner.pno}}</span>
                                        <span class="separator"></span>
                                        <span><a ng-href="/team/{{::winner.url}}#?pid={{::winner.PID}}">{{::winner.PName}}</a></span>
                                    </h4>
                                    <p>
                                        <span>{{::winner.posAbbr}}</span>
                                        <span class="separator"></span>
                                        <span>{{::winner.height}}</span>
                                    </p>
                                </div>
                                <h2 class="stat">{{::winner.winsFinals}}<span ng-show="sn2Active == 'snt'">Winning Games</span><span ng-show="sn2Active == 'sna'">Wins</span></h2>
                                <span class="gms">{{::winner.gms}}&nbsp;GMS</span>
                            </div>
                        </div>
                    </div>
                    <table class="std-table stats-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th colspan="2">Name</th>
                                <th class="tcenter"><span ng-show="sn2Active == 'snt'">WINS</span><span ng-show="sn2Active == 'sna'">WINS</span></th>
                                <th>GMS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="entry in winningestPlayerData | orderObjectBy:'winsFinals':true" ng-if="!$first">
                                <td class="tcenter rank">
                                    {{$index + 1}}.
                                </td>
                                <td class="img">
                                    <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}"><img ng-src="/static/img/profiles/profile-thumb-sm-{{::entry.url}}.png" alt="{{::entry.PName}}"></a>
                                </td>
                                <td class="name">
                                    <span class="no-dash">
                                        <span class="no">#{{::entry.pno}}</span>
                                        &nbsp;|&nbsp;
                                        <span class="pos">({{::entry.posAbbr}})</span>
                                    </span>
                                    <span>
                                        <a ng-href="/team/{{::entry.url}}#?pid={{::entry.PID}}">{{::entry.PName}}</a>
                                    </span>
                                </td>
                                <td class="tcenter stat">{{::entry.winsFinals}}</td>
                                <td class="tcenter">{{::entry.gms}}</td>
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
    $MetaDescription = "Random Stats. The official site of The B-Sharps Basketball Club.";
    $pageTitle = "Random | Stats";
    $page = "records";
    $globalClass = "";
    $extraScript = "/static/dist/js/stats-random-controller.js?v=1";
    //Apply the template
    include("../master-index.php");
?>
