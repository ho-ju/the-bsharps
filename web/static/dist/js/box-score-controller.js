app.controller("boxScoreController", ["$scope", "$http", "$filter", "apiService", "$timeout", "$interval", "$rootScope", "$window", "$location",
    function($scope, $http, $filter, apiService, $timeout, $interval, $rootScope, $window, $location) {
        $scope.result = [];
        $scope.resultBoxScore = [];
        $scope.gameResult = [];
        $scope.teamTotals = [];
        $scope.totalsSummary = [];

        $scope.filterInProgress = false;
        $scope.filterActive = false;

        $scope.apiError = false;
        $scope.apiErrorTeamVs = false;

        $scope.sortType     = 'playerNo'; // set the default sort type
        $scope.sortReverse  = false;  // set the default sort order

        $scope.firstLoad = true;

        $scope.rootScope = $rootScope;
        $scope.child = {};

        var test = false;
        $scope.initBoxScore = function() {
            $scope.selectedLeague = $location.search().league || $rootScope.defaultLeague;
            $scope.selectedSeason = $location.search().season || $rootScope.defaultSeason;
            $scope.selectedRoundID = $location.search().roundID;
            //$timeout(function(){
                $scope.getBoxScore($scope.selectedLeague, $scope.selectedSeason, $scope.selectedRoundID);
            //},1500);
        };

        $scope.getBoxScore = function(league, season, roundID, callback) {
            $scope.success = false;
            $scope.result = [];
            $scope.resultBoxScore = [];
            $timeout(function(){
                apiService.boxScore.getBoxScore(league, season, roundID, function(data) {
                    $scope.boxScoreCallback(data);
                }, function(){ $scope.apiError = true; });
            },400);
        };

        $scope.boxScoreCallback = function(data){
            if(data && typeof data === 'object') {
                $scope.result = data;
                $scope.resultBoxScore = data.stats;
                $scope.gameResult = data.gameResult[0];
                $scope.teamTotals = data.teamTotals[0];
                $scope.totalsSummary = data.totalsSummary[0];

                $scope.initTeamVersusStats(data.gameResult[0].teamId);

                $timeout(function(){
                    if($scope.firstLoad) $scope.setHoney();
                    $scope.firstLoad = false;
                },500);

                $scope.success = true;
                $scope.filterInProgress = false;
                $scope.apiError = false;

                // $scope.child.updateUrl();
            } else {
                $scope.apiError = true;
            }
        };

        $scope.initTeamVersusStats = function(t2id, callback) {
            $scope.resultTeamVsLast3 = "";
            $scope.resultTeamVsOverall = "";
            $scope.resultTeamVsFinals = "";
            apiService.schedule.getTeamVersusStats(t2id, function(data) {
                $scope.teamVersusStats(data);
            }, function(){ $scope.apiErrorTeamVs = true; });
        };

        $scope.teamVersusStats = function(data) {
            if(data && typeof data === 'object') {
                $scope.resultTeamVsOverall = data.overall[0];
                $scope.success = true;
            } else {
                $scope.apiErrorTeamVs = true;
            }
        };


        $scope.setHoney = function() {
            var tableOffset = jQuery("#box-score-table").offset().top,
                $header     = jQuery("#box-score-table").clone(),
                $fixedHeader = jQuery(".header-fixed"),
                headerIsHidden = true;

            $fixedHeader.append($header);

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
