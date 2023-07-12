<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
	<?php include("inc/global-vars.php"); ?>

    <div ng-controller="homepageController" ng-init="initResultSchedule();">
    	<div class="no-padding-lr hero-container">
    		<div class="hero"></div>
    		<div class="overlay"></div>
    	</div>

    	<div class="intro">
            <h1 class="hidden-mobile hidden-desktop">The B-Sharps</h1>
    		<p class="main-font">The official website of the B-Sharps Basketball Club.</p>

            <?php include("inc/global-vars.php"); ?>

            <div ajax-loader="success || apiError" class="stats-loader"></div>
            <p class="api-error" ng-show="apiError">Oops, there was an error loading the data, please try again shortly.</p>

        	<div id="boxscore" class="homepage" ng-cloak>
                <div ng-repeat="entry in resultSchedule" ng-if="entry.roundID == upcomingRoundId">
                    <a href="results-schedule.php#?league={{entry.comp}}&season={{entry.seasonID}}&roundID={{entry.roundID}}">
                        <h4>
                            <span class="bg-colour"></span>
                            <span>Next Match</span>
                            <span class="dots">::</span><span class="round">{{upcomingRoundName}}</span>
                        </h4>
                        <div class="scores mini">
                            <div class="col col-1">
                                <img src="/static/img/logo-star.png" alt="The B-Sharps">
                                <div ng-show="success" class="animated" ng-class="{'fadeIn': success, 'fadeOut': !success}">
                                    <span class="team">The B-Sharps</span>
                                    <span class="ratio font-text">({{totalsSummary.TotWins}}<span>w</span> - {{totalsSummary.TotLoss}}<span>l</span> - {{totalsSummary.TotDraws}}<span>d</span>)</span>
                                </div>
                            </div>
                            <div class="col col-2">
                                <div ng-show="success" class="animated" ng-class="{'fadeIn': success, 'fadeOut': !success}">
                                    <span class="result" ng-if="entry.t2id != 1">VS</span>
                                    <span class="result" ng-if="entry.t2id == 1">BYE</span>
                                    <span class="time-date-ven font-text time" ng-if="entry.t2id != 1">{{entry.time}}</span>
                                    <span class="time-date-ven font-text">{{ entry.dateF }} @ {{ entry.venue }}</span>
                                </div>
                            </div>
                            <div class="col col-3">
                                <i class="flaticon-basketball"></i>
                                <div ng-show="success" class="animated" ng-class="{'fadeIn': success, 'fadeOut': !success}">
                                    <span class="team" ng-if="entry.t2id == 1">N/A</span>
                                    <span class="team" ng-if="entry.t2id != 1">{{entry.t2}}</span>
                                    <span class="ratio font-text">(- - -)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
    	</div>
    </div>

<?php
	//Assign all Page Specific variables
	$pagemaincontent = ob_get_contents();
	ob_end_clean();
	$MetaDescription = "The official site of The B-Sharps Basketball Club.";
	$page = "home";
    $globalClass = "";
    $extraScript = "/static/dist/js/homepage-controller.js";
	//Apply the template
	include("master-index.php");
?>
