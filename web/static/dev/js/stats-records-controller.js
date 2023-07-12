app.controller("statsRecordsController", ["$scope", "$http", "$filter", "apiService", "$timeout", "$interval", "$rootScope", "$window", "$location",
    function($scope, $http, $filter, apiService, $timeout, $interval, $rootScope, $window, $location) {
        $scope.stats = [];

        $scope.rootScope = $rootScope;
        
        $scope.snActive = 'sns';
        $scope.sn2Active = 'snt';
        $scope.sortReverse  = false;  // set the default sort order

        $scope.apiError = false;

        $scope.child = {};

        $scope.init = function() {
            $scope.selectedLeague = $location.search().league || $rootScope.defaultLeague;
            $scope.selectedSeason = $location.search().season || $rootScope.defaultSeason;

            $scope.getStats($scope.selectedLeague, $scope.selectedSeason);
        };

        $scope.getStats = function(league, season, callback) {
            $scope.success = false;
            $scope.selectedLeague = league;
            $scope.selectedSeason = season;
            apiService.stats.getRecords($scope.selectedLeague, $scope.selectedSeason, function(data) {
                $timeout(function(){
                    $scope.statsCallback(data);
                },0);
            }, function(){ $scope.apiError = true; });
        };

        $scope.getStatsFinals = function(callback) {
            $scope.success = false;
            apiService.stats.getRecordsFinals(function(data) {
                $timeout(function(){
                    $scope.statsCallback(data);
                },0);
            }, function(){ $scope.apiError = true; });
        };

        $scope.getStatsCareer = function(callback) {
            $scope.success = false;
            apiService.stats.getRecordsCareer(function(data) {
                $timeout(function(){
                    $scope.statsCallback(data);
                },0);
            }, function(){ $scope.apiError = true; });
        };


        $scope.statsCallback = function(data){
            if(data && typeof data === 'object') {
                $scope.stats = data;
                if($scope.sn2Active == 'sna') {
                    $scope.switchAverages();
                } else {
                    $scope.switchTotals();
                }
                
            } else {
                $scope.apiError = true;
            }
        };

        $scope.switchTotals = function() {
            $scope.success = false;
            $scope.resetStats();

            $timeout(function(){
                $scope.ttlPts = $scope.stats.ttlPts;
                $scope.ttl3pts = $scope.stats.ttl3pts;
                $scope.ttlFouls = $scope.stats.ttlFouls;
                $scope.ttlFTA = $scope.stats.ttlFTA;
                $scope.ttlFTM = $scope.stats.ttlFTM;
                $scope.ttlFTP = $scope.stats.ttlFTP;
                $scope.ttlGms = $scope.stats.ttlGms;
                $scope.success = true;
                $scope.apiError = false;
            },500);
        };

        $scope.switchAverages = function() {
            $scope.success = false;
            $scope.resetStats();

            $timeout(function(){
                $scope.ttlPts = $scope.stats.avgPts;
                $scope.ttl3pts = $scope.stats.avg3pts;
                $scope.ttlFouls = $scope.stats.avgFouls;
                $scope.ttlFTA = $scope.stats.avgFTA;
                $scope.ttlFTM = $scope.stats.avgFTM;
                $scope.ttlFTP = $scope.stats.avgFTP;
                $scope.ttlGms = $scope.stats.ttlGms;
                $scope.success = true;
                $scope.apiError = false;
            },500);
            
        };

        $scope.resetStats = function() {
            $scope.ttlPts = "";
            $scope.ttl3pts = "";
            $scope.ttlFouls = "";
            $scope.ttlFTA = "";
            $scope.ttlFTM = "";
            $scope.ttlFTP = "";
            $scope.ttlGms = "";
        };
    }
]);
