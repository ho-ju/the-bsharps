<div class="hidden-desktop">
    <div class="nav-container" ng-class="{'expand': showNav}" ng-blur="showNav = !showNav;">
        <nav class="mobile-menu">
            <div class="hr faded"></div>
            <ul class="primary">
                <li class="sub">
                    <div class="faux-link" ng-click="showNav = true; showTeamSub = !showTeamSub">
                        <div class="first-level">
                            <span class="icon flaticon-basketball"></span>
                            <span class="text-mob">The Team</span>
                        </div>
                        <div class="second-level" ng-class="{'expand': showTeamSub}">
                            <ul ng-controller="teamListController" ng-init="init();">
                                <li ng-repeat="player in players | orderBy:'pno':false | orderEmpty:'pno':'toBottom'" class="players"><a ng-href="/team/{{::player.url}}#?pid={{::player.PID}}"><span class="no">#{{::player.pno}}</span><span class="separator"></span><span class="name">{{::player.PName}}</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="sub">
                    <a href="/results-schedule" class="">
                        <div class="first-level">
                            <span class="icon flaticon-business"></span>
                            <span class="text-mob">Results &amp; Schedule</span>
                        </div>
                    </a>
                </li>
                <li class="sub">
                    <div class="faux-link" ng-click="showNav = true; showStatsSub = !showStatsSub">
                        <div class="first-level">
                            <span class="icon flaticon-statistics"></span>
                            <span class="text-mob">Stats</span>
                        </div>
                        <div class="second-level" ng-class="{'expand': showStatsSub}">
                            <ul ng-init="getLatestRound();">
                                <li><a href="/stats">Totals</a></li>
                                <li><a href="/stats/records">Record Breakers</a></li>
                                <li><a href="/stats/player-comparison">Player Comparison</a></li>
                                <li><a href="/box-score#?league={{defaultLeague}}&amp;season={{defaultSeason}}&amp;roundID={{latestRoundId}}">Box Scores</a></li>
                                <li><a href="/stats/pers">PER's</a></li>
                                <li><a href="/stats/team">Team Stats</a></li>
                                <li><a href="/stats/random">Random Stats</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="/ladder" class="">
                        <div class="first-level">
                            <span class="icon flaticon-racing-flag"></span>
                            <span class="text-mob">Ladder</span>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <a href="#" class="hidden-desktop burger" ng-click="showNav = !showNav;" ng-blur="showNav = !showNav;" ng-class="{'active': showNav}">
        <span class="flaticon-lines-menu"></span>
    </a>
</div>
