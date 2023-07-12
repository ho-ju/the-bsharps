app.controller("resultsScheduleController", ["$scope", "$http", "$filter", "apiService", "$timeout", "$interval", "$rootScope", "$window", "$location",
    function($scope, $http, $filter, apiService, $timeout, $interval, $rootScope, $window, $location) {
        $scope.resultSchedule = [];
        $scope.resultTeamVs = [];
        $scope.totalsSummary = [];
        $scope.upcomingRoundId = [];
        $scope.resultsFilter = false;

        $scope.$parent.isResSched = true;

        $scope.apiError = false;
        $scope.apiErrorPop = false;

        $scope.lastUpdated = "";

        $scope.rootScope = $rootScope;
        $scope.child = {};

        $scope.initResultSchedule = function() {
            $scope.selectedLeague = $location.search().league || $rootScope.defaultLeague;
            $scope.selectedSeason = $location.search().season || $rootScope.defaultSeason;

            $scope.getResultSchedule($scope.selectedLeague, $scope.selectedSeason);

            $timeout(function(){
                $scope.setHoney();
            },100);

        };

        $scope.getResultSchedule = function(league, season, callback) {
            $scope.success = false;
            $scope.selectedLeague = league;
            $scope.selectedSeason = season;
            apiService.schedule.getResultsSchedule($scope.selectedLeague, $scope.selectedSeason, function(data) {
                $timeout(function(){
                    $scope.resultsScheduleCallback(data);
                },0);
            }, function(){ $scope.apiError = true; });
        };

        $scope.initTeamVersusStats = function(t2id, callback) {
            $scope.resultTeamVsLast3 = "";
            $scope.resultTeamVsOverall = "";
            $scope.resultTeamVsFinals = "";
            apiService.schedule.getTeamVersusStats(t2id, function(data) {
                $scope.teamVersusStats(data);
            }, function(){ $scope.apiErrorPop = true; });
        };

        $scope.resultsScheduleCallback = function(data){
            if(data && typeof data === 'object') {
                $scope.resultSchedule = data.games;
                $scope.totalsSummary = data.totalsSummary[0];
                $scope.lastUpdated = data.lastUpdated[0].dateF;
                if(data.currentRound[0]) $scope.upcomingRoundId = data.currentRound[0].upcomingRoundID;

                $scope.success = true;
                $scope.apiError = false;
                //$scope.child.updateUrl();

                if($scope.selectedSeason == $rootScope.defaultSeason) {
                    $timeout(function(){
                        $scope.scrollToToday();
                    },500);
                }
            } else {
                $scope.apiError = true;
            }
        };

        $scope.teamVersusStats = function(data) {
            if(data && typeof data === 'object') {
                $scope.resultTeamVsLast3 = data.lastThree;
                $scope.resultTeamVsOverall = data.overall;
                $scope.resultTeamVsFinals = data.finals;
                $scope.success = true;
                $scope.apiError = false;
            } else {
                $scope.apiErrorPop = true;
            }
        };

        $scope.scrollToToday = function(fromClick) {
            var delay = 250;
                $upcoming = $("#res-sched .upcoming");
            if(fromClick){
                if($scope.selectedSeason != $rootScope.defaultSeason) {
                    $scope.getResultSchedule($scope.child.selectedLeague, $scope.child.defaultSeason);
                    $scope.child.get($scope.child.selectedLeague, $scope.child.defaultSeason, $scope.child.selectedRoundID);
                }
            }
            $timeout(function(){
                if($upcoming.length > 0) {
                    jQuery("body, html").animate({ scrollTop: $("#res-sched .upcoming").offset().top - 35}, 350);
                }
            },delay);
        };

        $scope.setHoney = function() {
            var tableOffset = jQuery("#res-sched").offset().top + jQuery("#res-sched thead").outerHeight(),
                $header     = jQuery("#res-sched thead").clone(),
                $fixedHeader = jQuery(".header-fixed"),
                headerIsHidden = true;

            $fixedHeader.find('table').prepend($header);

            jQuery(window).bind("scroll", function() {
                var offset = jQuery(this).scrollTop();

                if (offset >= tableOffset && headerIsHidden) {

                    $fixedHeader.addClass('exposeMe');
                    headerIsHidden = false;
                }
                else if (offset < tableOffset) {
                    $fixedHeader.removeClass('exposeMe');
                    headerIsHidden = true;
                }
            });
        };
    }
]);
