app.controller("statsPCController", ["$scope", "$http", "$filter", "apiService", "$timeout", "$interval", "$rootScope", "$window", "$location",
    function($scope, $http, $filter, apiService, $timeout, $interval, $rootScope, $window, $location) {
        $scope.stats = [];
        $scope.sucess = false;
        $scope.stats.firstLoad1 = false;
        $scope.stats.firstLoad2 = false;

        $scope.rootScope = $rootScope;
        
        $scope.snActive = 'sns';
        $scope.sn2Active = 'snt';

        $scope.playersList = [];
        $scope.playersList2 = [];
        $scope.playersId = [];
        $scope.type = '';
        $scope.gridPos = 1;

        $scope.singleDelay = 400;
        $scope.doubleDelay = 800;

        $scope.scoreChart = [];

        $scope.apiError = [];
        $scope.apiError1 = false;
        $scope.apiError2 = false;


        $scope.child = {};

        $scope.init = function() {
            $scope.selectedLeague = $location.search().league || $rootScope.defaultLeague;
            $scope.selectedSeason = $location.search().season || $rootScope.defaultSeason;

            // $scope.getStats($scope.selectedLeague, $scope.selectedSeason);
            
            $scope.getPlayersList();
        };

        $scope.getPlayer = function(pid, gridPos, type, section) {
            $scope.statType = type || '';
            $scope.section = section || '';
            $scope.gridPos = gridPos;

            $scope.playersId[$scope.gridPos] = pid;

            $scope.stats["firstLoad" + $scope.gridPos] = true;

            $scope.tableSuccess = false;
            $scope.stats["loadedPlayer" + $scope.gridPos] = false;

            $scope.careerBySeason = [];
            $scope.careerTotals = [];
            $scope.careerBySeasonFinals = [];
            $scope.careerTotalsFinals = [];

            $timeout(function(){
                if(!$scope.statType) {
                    apiService.stats.getPlayer(pid, $scope.selectedLeague, $scope.selectedSeason, function(data) {
                        $scope.playerCallback(data);
                    }, function(){ $scope.apiError["error" +$scope.gridPos] = true; });
                }
                else if($scope.statType == 'finals') {
                    apiService.stats.getPlayerFinals(pid, function(data) {
                        $scope.playerCallback(data);
                    }, function(){ $scope.apiError["error" +$scope.gridPos] = true; });
                } else if ($scope.statType == 'career') {
                    apiService.stats.getPlayerCareer(pid, function(data) {
                        $scope.playerCallback(data);
                    }, function(){ $scope.apiError["error" +$scope.gridPos] = true; });
                }
            },0);

            jQuery("footer").addClass('active'); // Add class for dynamic footer (style doesn't like dynamic data)
        };

        $scope.getDoublePlayer = function(type, league, season) {
            $scope.selectedLeague = league || '';
            $scope.selectedSeason = season || '';
            $scope.statType = type || '';

            if($scope.playersId.length > 2) {
                $scope.stats.loadedPlayer1 = false;
                $scope.stats.loadedPlayer2 = false;

                $timeout(function(){
                    apiService.stats.getPlayer($scope.playersId[1], $scope.selectedLeague, $scope.selectedSeason, function(data) {
                        $scope.gridPos = 1;
                        $scope.playerCallback(data);
                    }, function(){ $scope.apiError1 = true; });
                },0);
                $timeout(function(){
                    apiService.stats.getPlayer($scope.playersId[2], $scope.selectedLeague, $scope.selectedSeason, function(data) {
                        $scope.gridPos = 2;
                        $scope.playerCallback(data);
                    }, function(){ $scope.apiError2 = true; });
                },$scope.doubleDelay);
            }
        };

        $scope.getPlayerFinals = function() {

            if($scope.playersId.length > 2) {
                $scope.stats.loadedPlayer1 = false;
                $scope.stats.loadedPlayer2 = false;

                $timeout(function(){
                    apiService.stats.getPlayerFinals($scope.playersId[1], function(data) {
                        $scope.gridPos = 1;
                        $scope.playerCallback(data);
                    }, function(){ $scope.apiError1 = true; });
                },0);
                $timeout(function(){
                    apiService.stats.getPlayerFinals($scope.playersId[2], function(data) {
                        $scope.gridPos = 2;
                        $scope.playerCallback(data);
                    }, function(){ $scope.apiError2 = true; });
                },$scope.doubleDelay);
            }
        };

        $scope.getPlayerCareer = function() {
            if($scope.playersId.length > 2) {
                $scope.stats.loadedPlayer1 = false;
                $scope.stats.loadedPlayer2 = false;

                $timeout(function(){
                    apiService.stats.getPlayerCareer($scope.playersId[1], function(data) {
                        $scope.gridPos = 1;
                        $scope.playerCallback(data);
                    }, function(){ $scope.apiError1 = true; });
                },0);
                $timeout(function(){
                    apiService.stats.getPlayerCareer($scope.playersId[2], function(data) {
                        $scope.gridPos = 2;
                        $scope.playerCallback(data);
                    }, function(){ $scope.apiError2 = true; });
                },$scope.doubleDelay);
            }
        };

        $scope.playerCallback = function(data) {
            //$scope.resetStats();
            if(data) {
                jQuery(".img-" + $scope.gridPos + " img").hide(0); // Clear Image
                $timeout(function(){
                    $scope.stats["playerDetails" + $scope.gridPos] = data.playerDetail[0];
                    $scope.stats["ptsChart" + $scope.gridPos] = data.playersPtsChart[0];
                    $scope.stats["playersCareerTot" + $scope.gridPos] = data.playersCareerTot[0];
                    $scope.stats["playersCareerAvgs" + $scope.gridPos] = data.playersCareerAvg[0];
                    $scope.stats["playersCareerHigh" + $scope.gridPos] = data.playersCareerHigh[0];
                    $scope.stats["playersCareerHighFGM" + $scope.gridPos] = data.playersCareerHighFGM[0];
                    $scope.stats["playersCareerHighFTP" + $scope.gridPos] = data.playersCareerHighFTP[0];
                    $scope.stats["playersPER" + $scope.gridPos] = data.playersPER[0];
                    $scope.stats["p1Consec" + $scope.gridPos] = data.p1Consec[0];

                    $scope.initScoreChart();
                    
                    if($scope.playersId[1] && $scope.playersId[2]) {
                        $scope.initTotalsChart();
                        $scope.initAvgsChart();
                        $scope.initRecodsChart();
                    }


                    // fadeIn image again to stop jerkiness
                    jQuery(".img-" + $scope.gridPos + " img").delay(500).fadeIn(350);

                    $scope.statType = 'totals';
                    $scope.stats["loadedPlayer" + $scope.gridPos] = true;
                    $scope.success = true;
                    $scope.apiError["error" + $scope.gridPos] = false;
                    $scope.apiError1 = false;
                    $scope.apiError2 = false;
                },$scope.singleDelay);
            } else {
                $scope.apiError[$scope.gridPos] = true;
            }
        };

        $scope.resetStats = function(data) {
            $scope.stats["playerDetails" + $scope.gridPos] = "";
            $scope.stats["ptsChart" + $scope.gridPos] = "";
            $scope.stats["playersCareerTot" + $scope.gridPos] = "";
            $scope.stats["playersCareerAvgs" + $scope.gridPos] = "";
            $scope.stats["playersCareerHigh" + $scope.gridPos] = "";
            $scope.stats["playersCareerHighFGM" + $scope.gridPos] = "";
            $scope.stats["playersCareerHighFTP" + $scope.gridPos] = "";
            $scope.stats["playersPER" + $scope.gridPos] = "";
            $scope.stats["p1Consec" + $scope.gridPos] = "";
        };

        $scope.getPlayersList = function() {
            apiService.team.getList(function(data) {
                $timeout(function(){
                    if(data) {
                        $scope.playersList = data.players;
                        $scope.playersList2 = data.players;
                    } else {
                        $scope.apiError1 = true;
                        $scope.apiError2 = true;
                    }
                },0);
            }, function(){ $scope.apiError1 = true; $scope.apiError2 = true; });
        };

        $scope.initScoreChart = function() {
            var ctx = jQuery("#points-chart-" + $scope.gridPos);
            var myData = [];

            if($scope.scoreChart["chart-" + $scope.gridPos]) $scope.scoreChart["chart-" + $scope.gridPos].destroy();

            angular.forEach($scope.stats["ptsChart" + $scope.gridPos], function(val, key){
                myData.push(val);
            });

            var chart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: [
                        "2 Pointers",
                        "3 Pointers",
                        "Free Throws"
                    ],
                    datasets: [
                        {
                            data: myData,
                            backgroundColor: [
                                "#e7a228",
                                "#d1e84e",
                                "#f1e126"
                            ],
                            hoverBackgroundColor: [
                                "#333333",
                                "#333333",
                                "#333333"
                            ]
                        }
                    ]
                },
                options: {
                    cutoutPercentage: 70,
                    legend: {
                        display: false
                    }
                }
            });
        };

        $scope.initTotalsChart = function() {
            var ctx = jQuery("#totals-chart");
            var myData = [];
            var myData2 = [];

            if($scope.totalsChart) $scope.totalsChart.destroy();

            angular.forEach($scope.stats.playersCareerTot1, function(val, key){
                myData.push(val);
            });
            
            angular.forEach($scope.stats.playersCareerTot2, function(val, key){
                myData2.push(val);
            });

            $scope.totalsChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        "PTS",
                        "3PT",
                        "FTA",
                        "FTM",
                        "FTP",
                        "TFGM",
                        "FLS",
                        "EFF",
                        "GMS"
                    ],
                    datasets: [
                        {
                            label: $scope.stats.playerDetails1.PName,
                            data: myData,
                            backgroundColor: "#e7a228", 
                            hoverBackgroundColor: "#333333"
                        },
                        {
                            label: $scope.stats.playerDetails2.PName,
                            data: myData2,
                            backgroundColor: "#d1e84e", 
                            hoverBackgroundColor: "#333333"
                        }
                    ]
                },
                options: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    },
                    scales : {
                        xAxes : [{
                            gridLines : {
                                display : false
                            }
                        }],
                        yAxes : [{
                            gridLines : {
                                display : false
                            }
                        }]
                    }
                }
            });
        };

        $scope.initAvgsChart = function() {
            var ctx = jQuery("#avgs-chart");
            var myData = [];
            var myData2 = [];

            if($scope.avgsChart) $scope.avgsChart.destroy();

            angular.forEach($scope.stats.playersCareerAvgs1, function(val, key){
                myData.push(val);
            });
            
            angular.forEach($scope.stats.playersCareerAvgs2, function(val, key){
                myData2.push(val);
            });

            $scope.avgsChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        "PTS",
                        "3PT",
                        "FTA",
                        "FTM",
                        "FTP",
                        "TFGM",
                        "FLS",
                        "EFF",
                        "GMS"
                    ],
                    datasets: [
                        {
                            label: $scope.stats.playerDetails1.PName,
                            data: myData,
                            backgroundColor: "#e7a228", 
                            hoverBackgroundColor: "#333333"
                        },
                        {
                            label: $scope.stats.playerDetails2.PName,
                            data: myData2,
                            backgroundColor: "#d1e84e", 
                            hoverBackgroundColor: "#333333"
                        }
                    ]
                },
                options: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    },
                    scales : {
                        xAxes : [{
                            gridLines : {
                                display : false
                            }
                        }],
                        yAxes : [{
                            gridLines : {
                                display : false
                            }
                        }]
                    }
                }
            });
        };

        $scope.initRecodsChart = function() {
            var ctx = jQuery("#records-chart");
            var myData = [];
            var myData2 = [];

            if($scope.recordsChart) $scope.recordsChart.destroy();

            angular.forEach($scope.stats.playersCareerHigh1, function(val, key){
                myData.push(val);
            });
            angular.forEach($scope.stats.playersCareerHighFTP1, function(val, key){
                myData.push(val);
            });
            angular.forEach($scope.stats.playersCareerHighFGM1, function(val, key){
                myData.push(val);
            });
            if($scope.stats.playersPER1) myData.push($scope.stats.playersPER1.TOTAL);
            angular.forEach($scope.stats.p1Consec1, function(val, key){
                myData.push(val);
            });

            
            angular.forEach($scope.stats.playersCareerHigh2, function(val, key){
                myData2.push(val);
            });
            angular.forEach($scope.stats.playersCareerHighFTP2, function(val, key){
                myData2.push(val);
            });
            angular.forEach($scope.stats.playersCareerHighFGM2, function(val, key){
                myData2.push(val);
            });
            myData2.push($scope.stats.playersPER2.TOTAL);
            angular.forEach($scope.stats.p1Consec2, function(val, key){
                myData2.push(val);
            });

            $scope.recordsChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        "PTS",
                        "3PT",
                        "FLS",
                        "FTA",
                        "FTM",
                        "FTP",
                        "TFGM",
                        "EFF",
                        "CGMS",
                    ],
                    datasets: [
                        {
                            label: $scope.stats.playerDetails1.PName,
                            data: myData,
                            backgroundColor: "#e7a228", 
                            hoverBackgroundColor: "#333333"
                        },
                        {
                            label: $scope.stats.playerDetails2.PName,
                            data: myData2,
                            backgroundColor: "#d1e84e", 
                            hoverBackgroundColor: "#333333"
                        }
                    ]
                },
                options: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    },
                    scales : {
                        xAxes : [{
                            gridLines : {
                                display : false
                            }
                        }],
                        yAxes : [{
                            gridLines : {
                                display : false
                            }
                        }]
                    }
                }
            });
        };
    }
]);
