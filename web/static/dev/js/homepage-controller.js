app.controller("homepageController", ["$scope", "$http", "$filter", "apiService", "$timeout", "$interval", "$rootScope", "$window", "$location",
    function($scope, $http, $filter, apiService, $timeout, $interval, $rootScope, $window, $location) {
        $scope.resultSchedule = [];
        $scope.totalsSummary = [];
        $scope.upcomingRoundId = [];
        $scope.upcomingRoundName = "";
        $scope.bgNo = 0;

        $scope.apiError = false;

        $scope.$parent.isResSched = true;

        $scope.rootScope = $rootScope;
        $scope.child = {};

        $scope.initResultSchedule = function() {
            $scope.selectedLeague = $location.search().league || $rootScope.defaultLeague;
            $scope.selectedSeason = $location.search().season || $rootScope.defaultSeason;

            $scope.getResultSchedule($scope.selectedLeague, $scope.selectedSeason);
            $scope.genRand(9,1);
            $scope.setImage();
        };

        $scope.getResultSchedule = function(league, season, callback) {
            $scope.success = false;
            $scope.selectedLeague = league || $rootScope.defaultLeague;
            $scope.selectedSeason = season || $rootScope.defaultSeason;
            apiService.schedule.getResultsSchedule($scope.selectedLeague, $scope.selectedSeason, function(data) {
                $timeout(function(){
                    $scope.resultsScheduleCallback(data);
                },0);
            }, function(){ $scope.apiError = true; });
        };

        $scope.resultsScheduleCallback = function(data){
            if(data && typeof data === 'object') {
                $scope.resultSchedule = data.games;
                $scope.totalsSummary = data.totalsSummary[0];
                $scope.lastUpdated = data.lastUpdated[0].dateF;
                if(data.currentRound[0]) {
                    $scope.upcomingRoundId = data.currentRound[0].upcomingRoundID;
                    $scope.upcomingRoundName = data.currentRound[0].roundName;
                }

                $scope.success = true;
                $scope.apiError = false;
            } else {
                $scope.apiError = true;
            }
        };

        $scope.genRand = function(max, min) {
            $scope.bgNo = Math.floor(Math.random() * max) + min;
        };

        $scope.setImage = function() {
            var url = "static/img/animated-" + $scope.bgNo + ".gif";
            jQuery(".hero").css('background-image', "url(" + url + ")");

        };
    }
]);
