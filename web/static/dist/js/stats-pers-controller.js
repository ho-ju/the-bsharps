app.controller("statsPersController", ["$scope", "$http", "$filter", "apiService", "$timeout", "$interval", "$rootScope", "$window", "$location",
    function($scope, $http, $filter, apiService, $timeout, $interval, $rootScope, $window, $location) {
        $scope.stats = [];

        $scope.rootScope = $rootScope;

        $scope.apiError = false;
        
        $scope.snActive = 'sns';
        $scope.sortReverse  = false;  // set the default sort order

        $scope.child = {};

        $scope.honeyset = false;

        $scope.init = function() {
            $scope.selectedLeague = $location.search().league || $rootScope.defaultLeague;
            $scope.selectedSeason = $location.search().season || $rootScope.defaultSeason;

            $scope.getStats($scope.selectedLeague, $scope.selectedSeason);
        };

        $scope.getStats = function(league, season, callback) {
            $scope.success = false;
            $scope.selectedLeague = league;
            $scope.selectedSeason = season;
            apiService.stats.getPers($scope.selectedLeague, $scope.selectedSeason, function(data) {
                $timeout(function(){
                    $scope.statsCallback(data);
                },0);
            }, function(){ $scope.apiError = true; });
        };

        $scope.getStatsFinals = function(callback) {
            $scope.success = false;
            apiService.stats.getPersFinals(function(data) {
                $timeout(function(){
                    $scope.statsCallback(data);
                },0);
            }, function(){ $scope.apiError = true; });
        };

        $scope.getStatsCareer = function(callback) {
            $scope.success = false;
            apiService.stats.getPersCareer(function(data) {
                $timeout(function(){
                    $scope.statsCallback(data);
                },0);
            }, function(){ $scope.apiError = true; });
        };


        $scope.statsCallback = function(data){
            if(data && typeof data === 'object') {
                $scope.stats = data.pers;
                $timeout(function(){
                    $scope.setHoney();
                },500);
                $scope.success = true;
                $scope.apiError = false;
            } else {
                $scope.apiError = true;
            }
        };

        $scope.setHoney = function() {
            if(!$scope.honeyset) {
                var tableOffset = jQuery("#stats-per-table").offset().top,
                    $header     = jQuery("#stats-per-table").clone(),
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
                $scope.honeyset = true;
            }
        };
    }
]);
