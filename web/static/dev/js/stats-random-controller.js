app.controller("statsRandomController", ["$scope", "$http", "$filter", "apiService", "$timeout", "$interval", "$rootScope", "$window", "$location",
    function($scope, $http, $filter, apiService, $timeout, $interval, $rootScope, $window, $location) {
        $scope.stats = [];

        $scope.consecGameData = [];
        $scope.consecGameDataCurr = [];

        $scope.most3ptCurrSt = [];
        $scope.mostFTACurrSt = [];
        $scope.mostCleanCurrSt = [];
        $scope.mostNon3ptCurrSt = [];
        $scope.mostNonFTACurrSt = [];
        $scope.mostDoughnutsCurrSt = [];
        $scope.winningestPlayerData = [];

        $scope.apiError = false;

        $scope.rootScope = $rootScope;
        
        $scope.snActive = 'sns';
        $scope.sn2Active = 'snt';
        $scope.sortReverse  = false;  // set the default sort order

        $scope.noOfPlayers = 14 + 1;

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
            apiService.stats.getRandomStats(function(data) {
                $timeout(function(){
                    $scope.statsCallback(data);
                },0);
            }, function(){ $scope.apiError = true; });
            $scope.getCurrentStats();
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

        $scope.getCurrentStats = function() {
            apiService.stats.getRandomCurrentStats('3pt', '>', function(data) {
                $timeout(function(){
                    if(data && typeof data === 'object') {
                        for(i = 1; i < $scope.noOfPlayers; i++) {
                            $scope.most3ptCurrSt.push(data[0]["p"+ i + "Consec"][0]);
                        }
                    }  else {
                        $scope.apiErrorCurr = true;
                    }
                },0);
            }, function(){ $scope.apiErrorCurr = true; });
            apiService.stats.getRandomCurrentStats('FTA', '>', function(data) {
                $timeout(function(){
                    if(data && typeof data === 'object') {
                        for(i = 1; i < $scope.noOfPlayers; i++) {
                            $scope.mostFTACurrSt.push(data[0]["p"+ i + "Consec"][0]);
                        }
                    } else {
                        $scope.apiErrorCurr = true;
                    }
                },0);
            }, function(){ $scope.apiErrorCurr = true; });
            apiService.stats.getRandomCurrentStats('Fouls', '=', function(data) {
                $timeout(function(){
                    if(data && typeof data === 'object') {
                        for(i = 1; i < $scope.noOfPlayers; i++) {
                            $scope.mostCleanCurrSt.push(data[0]["p"+ i + "Consec"][0]);
                        }
                    } else {
                        $scope.apiErrorCurr = true;
                    }
                },0);
            }, function(){ $scope.apiErrorCurr = true; });
            apiService.stats.getRandomCurrentStats('3pt', '=', function(data) {
                $timeout(function(){
                    if(data && typeof data === 'object') {
                        for(i = 1; i < $scope.noOfPlayers; i++) {
                            $scope.mostNon3ptCurrSt.push(data[0]["p"+ i + "Consec"][0]);
                        }
                    } else {
                        $scope.apiErrorCurr = true;
                    }
                },0);
            }, function(){ $scope.apiErrorCurr = true; });
            apiService.stats.getRandomCurrentStats('FTA', '=', function(data) {
                $timeout(function(){
                    if(data && typeof data === 'object') {
                        for(i = 1; i < $scope.noOfPlayers; i++) {
                            $scope.mostNonFTACurrSt.push(data[0]["p"+ i + "Consec"][0]);
                        }
                    } else {
                        $scope.apiErrorCurr = true;
                    }
                },0);
            }, function(){ $scope.apiErrorCurr = true; });
            apiService.stats.getRandomCurrentStats('TotalPoints', '=', function(data) {
                $timeout(function(){
                    if(data && typeof data === 'object') {
                        for(i = 1; i < $scope.noOfPlayers; i++) {
                            $scope.mostDoughnutsCurrSt.push(data[0]["p"+ i + "Consec"][0]);
                        }
                    } else {
                        $scope.apiErrorCurr = true;
                    }
                },0);
            }, function(){ $scope.apiErrorCurr = true; });
        };

        $scope.switchTotals = function() {
            $scope.success = false;

            $timeout(function(){
                $scope.setConsec();
                $scope.setConsecCurr();
                $scope.setWinningest();
                $scope.fouledOutGameData = $scope.stats[0].mostFouls;
                $scope.cleanGameData = $scope.stats[0].mostClean;
                $scope.doughnutsGameData = $scope.stats[0].mostDoughnuts;
                $scope.most3ptSt = $scope.stats[0].most3ptSt;
                $scope.mostFTASt = $scope.stats[0].mostFTASt;
                $scope.mostCleanSt = $scope.stats[0].mostCleanSt;
                $scope.mostNon3ptSt = $scope.stats[0].mostNon3ptSt;
                $scope.mostNonFTASt = $scope.stats[0].mostNonFTASt;
                $scope.mostDoughnutsSt = $scope.stats[0].mostDoughnutsSt;
                $scope.success = true;
                $scope.apiError = false;
            },500);
        };

        $scope.resetStats = function() {
            $scope.consecGameData = [];
            $scope.consecGameDataCurr = [];
            $scope.fouledOutGameData = [];
            $scope.cleanGameData = [];
            $scope.doughnutsGameData = [];
            $scope.most3ptCurrSt = [];
            $scope.mostFTACurrSt = [];
            $scope.mostCleanCurrSt = [];
            $scope.mostNon3ptCurrSt = [];
            $scope.mostNonFTACurrSt = [];
            $scope.mostDoughnutsCurrSt = [];
            $scope.winningestPlayerData = [];
        };

        $scope.setConsec = function() {
            for(i = 1; i < $scope.noOfPlayers; i++) {
                $scope.consecGameData.push($scope.stats[0]["p"+ i + "Consec"][0]);
            }
        };
        $scope.setConsecCurr = function() {
            for(i = 1; i < $scope.noOfPlayers; i++) {
                $scope.consecGameDataCurr.push($scope.stats[0]["p"+ i + "ConsecCurr"][0]);
            }
        };
        $scope.setWinningest = function() {
            var j = 0;
            var k = 0;

            for(i = 0; i < $scope.stats[0].winningestPlayer.length; i++) {
                var foundTG = false;
                var foundWF = false;
                
                // Loop through ttl games data and match, if no set data to 0
                for(j=0; j < $scope.stats[0].ttlGames.length; j++) {
                    if($scope.stats[0].winningestPlayer[i].PID == $scope.stats[0].ttlGames[j].PID && !foundTG) {
                        foundTG = true;
                        $scope.stats[0].winningestPlayer[i].gms = $scope.stats[0].ttlGames[j].gms;
                        $scope.stats[0].winningestPlayer[i].winRatio = parseFloat((($scope.stats[0].winningestPlayer[i].stat / $scope.stats[0].ttlGames[i].gms)*100).toFixed(0));
                    }
                    if(!foundTG) $scope.stats[0].winningestPlayer[i].gms = 0;
                }

                // Loop through finals win data and match, if no set data to 0
                for(k=0; k < $scope.stats[0].winningestPlayerF.length; k++) {
                    if($scope.stats[0].winningestPlayer[i].PID == $scope.stats[0].winningestPlayerF[k].PID && !foundWF) {
                        foundWF = true;
                        $scope.stats[0].winningestPlayer[i].winsFinals = $scope.stats[0].winningestPlayerF[k].winningestPF;
                    }
                    if(!foundWF) $scope.stats[0].winningestPlayer[i].winsFinals = 0;
                }
            }
            $scope.winningestPlayerData = $scope.stats[0].winningestPlayer;
        };
    }
]);
