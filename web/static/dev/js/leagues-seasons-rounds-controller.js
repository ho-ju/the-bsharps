app.controller("leaguesSeasonsRoundsController", ["$scope", "$http", "$filter", "apiService", "$timeout", "$interval", "$rootScope", "$window", "$location",
    function($scope, $http, $filter, apiService, $timeout, $interval, $rootScope, $window, $location) {

        $scope.rootScope = $rootScope;
        var parentScope = $scope.$parent;
        parentScope.child = $scope;


        $scope.availRounds = [];
        $scope.selRoundName = "";

        $scope.selectedLeague = "";
        $scope.selectedSeason = "";
        $scope.selectedLeagueName = "";
        $scope.selectedSeasonName = "";
        $scope.selectedSeasonFullName = "";
        $scope.selectedLeagueVenue = "";
        $scope.availSeasons = [];
        $scope.availLeagues = [];

        $scope.initLeaguesSeasonsRounds = function() {
            $scope.selectedLeague = $location.search().league || $scope.defaultLeague;
            $scope.selectedSeason = $location.search().season || $scope.defaultSeason;
            $scope.selectedRoundID = $location.search().roundID || 0;
            //$timeout(function(){
                $scope.get($scope.selectedLeague, $scope.selectedSeason, $scope.selectedRoundID);
            //},1500);

        };

        $scope.get = function(league, season, roundID, callback, errorCallback) {
            $scope.$parent.selectedLeague = $scope.selectedLeague = league;
            $scope.$parent.selectedSeason = $scope.selectedSeason = season;
            $scope.selectedRoundID = roundID || 0;
            apiService.leaguesSeasonsRounds.get(league, season, roundID, function(data) {
                $scope.callback(data);
            }, function(){ $scope.$parent.apiError = true; });
        };

        $scope.callback = function(data){
            if(data && typeof data === 'object') {
                $scope.result = data;

                if($scope.selectedRoundID === 0) $scope.selRoundName = "[pick me]";

                if(data.availLeaguesForSeason.length == 1 && $scope.selectedLeague != data.availLeaguesForSeason[0].comp) { // If league not available in season
                    $scope.$parent.selectedLeague = $scope.selectedLeague = data.availLeaguesForSeason[0].comp;
                    $scope.get($scope.selectedLeague, $scope.selectedSeason, $scope.selectedRoundID);
                    if($scope.$parent.isResSched) $scope.$parent.getResultSchedule($scope.selectedLeague, $scope.selectedSeason);
                } else {
                    $scope.availRounds = data.availRoundsForSeasonLeague;
                    if(data.selRound && data.selRound.length >= 1) $scope.selRoundName = data.selRound[0].roundName;

                    if(data.availLeagues.length > 1 && !$scope.selectedLeague) {
                        $scope.selectedLeagueName = "All Leagues";
                        $scope.selectedLeagueVenue = '';
                    } else {
                        $scope.selectedLeagueName = data.selLeague[0].leagueName;
                        $scope.selectedLeagueVenue = data.selLeague[0].leagueVenue;
                    }



                    $scope.selectedSeasonName = data.selSeason[0].seasonShortName;
                    $scope.selectedSeasonFullName = data.selSeason[0].seasonName;
                    $scope.availSeasons = data.availSeasons;
                    $scope.availLeagues = data.availLeaguesForSeason;

                    $scope.success = true;
                }
            } else {
                $scope.$parent.apiError = true;
            }
        };

        $scope.updateUrl = function(){
            $location.search({'league': $scope.selectedLeague, 'season': $scope.selectedSeason, 'roundID': $scope.selectedRoundID});
        };

        $scope.updateRounds = function() {
            $scope.roundSelectActive = false;
        };
        $scope.activateDD = function(active) {
            $scope.$parent.filterActive = active;
        };
        $scope.setSeason = function(season) {
            $scope.$parent.filterInProgress = true;
            $scope.get($scope.child.selectedLeague, season, 0, $scope.child.selRoundName);
        };
        $scope.setLeague = function(league) {
            $scope.$parent.filterInProgress = true;
            $scope.get(league, $scope.child.selectedSeason, 0, $scope.child.selRoundName);
        };
    }
]);
