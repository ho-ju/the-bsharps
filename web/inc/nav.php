
<nav class="nav hidden-mobile" ng-controller="navigation">
    <ul class="primary">
        <li class="sub dropdown" ng-mouseenter="toggleDropdown($event, 1)" ng-mouseleave="toggleDropdownOff($event, 1)" ng-click="goToPage('/team');">
            <a href="javascript:void(0);" class="top-level dropdown-toggle <?php echo $navSelectedTeam ?>" ng-init="count=0"><span class="text">the team</span><span class="arrow-down" ng-class="{'fadeOut': status.isopen}"></span></a>
            <div class="sub-menu team dropdown-menu" ng-class="{'expand': status.isopen}">
                <div class="inner-container">
                    <div class="content">
                        <h2>The Team.</h2>
                        <ul ng-controller="teamListController" ng-init="init();">
                            <li ng-repeat="player in players | orderBy:'pno':false | orderEmpty:'pno':'toBottom'" class="players"><a ng-href="/team/{{::player.url}}#?pid={{::player.PID}}"><span class="no">#{{::player.pno}}</span><span class="separator"></span><span class="name">{{::player.PName}}</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>

        <li class="divide"></li>
        <li class="sub dropdown" ng-mouseenter="toggleDropdown($event, 2)" ng-mouseleave="toggleDropdownOff($event, 2)" ng-click="goToPage('/results-schedule');">
            <a href="javascript:void(0);" class="top-level dropdown-toggle <?php echo $navSelectedResSched ?>"><span class="text">results &amp; schedule</span><span class="arrow-down" ng-class="{'fadeOut': status2.isopen}"></span></a>
            <div class="sub-menu sched dropdown-menu" ng-class="{'expand': status2.isopen}">
                <div class="inner-container">
                    <div class="content">
                        <h2>Results &amp; Schedule.</h2>
                        <ul>
                            <li><a href="/results-schedule">Thursday Comp</a><li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li class="divide"></li>
        <li class="sub dropdown" ng-mouseenter="toggleDropdown($event, 3)" ng-mouseleave="toggleDropdownOff($event, 3)" ng-click="goToPage('/stats');">
            <a href="#" class="top-level dropdown-toggle <?php echo $navSelectedStats ?>"><span class="text">stats</span><span class="arrow-down" ng-class="{'fadeOut': status3.isopen}"></span></a>
            <div class="sub-menu stats dropdown-menu" ng-class="{'expand': status3.isopen}">
                <div class="inner-container">
                    <div class="content">
                        <h2>Stats.</h2>
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
            </div>
        </li>
        <li class="divide"></li>
        <li><a href="/ladder" class="top-level <?php echo $navSelectedLadder ?>"><span class="text">ladder</span></a></li>
    </ul>
</nav>
