<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
	<?php include("inc/global-vars.php"); ?>

	<div id="team" ng-controller="teamListController" ng-init="init();" ng-cloak>
		<div class="crumbs clearfix">
			<ul>
				<li class="title"><h1>The Team</h1></li>
			</ul>
		</div>
        
        <div ajax-loader="success || apiError" class="stats-loader"></div>
        <p class="api-error" ng-show="apiError">Oops, there was an error loading the data, please try again shortly.</p>

        <div class="team-list">
            <ul class="masonry">
                <li ng-repeat="player in players" class="player">
                    <a ng-href="{{::player.url}}/#?pid={{::player.PID}}">
                        <div class="inner-container">
                        <div class="pos"><h4>{{::player.pos}}</h4></div>
                        <div class="lazy-img img" lazy-img="/static/img/profiles/profile-main-{{::player.url}}.png"></div>
                        <div class="overlay"></div>
                            <div class="info-box">
                                <h3>
                                    <span>#{{::player.pno}}</span>
                                    <span class="separator"></span>
                                    <span>{{::player.PName}}</span>
                                </h3>
                                <p>
                                    <span>{{::player.posAbbr}}</span>
                                    <span class="separator"></span>
                                    <span>{{::player.height}}</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>



<?php
	//Assign all Page Specific variables
	$pagemaincontent = ob_get_contents();
	ob_end_clean();
	$navSelectedTeam ="active";
	$MetaDescription = "The B-Sharps Basketball Club Team.  The official site of The B-Sharps Basketball Club.";
    $pageTitle = "The Team";
	$page = "the-team";
    $globalClass = "";
	$extraScript = "";
	//Apply the template
	include("master-index.php");
?>
