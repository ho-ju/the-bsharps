app.controller("playerDetailController", ["$scope", "$http", "$filter", "apiService", "$timeout", "$interval", "$rootScope", "$window", "$location",
    function($scope, $http, $filter, apiService, $timeout, $interval, $rootScope, $window, $location) {
        $scope.selectedPlayerId = 0;
        $scope.playerDetails = [];
        $scope.ptsChart = [];
        $scope.careerAvgs = [];
        $scope.careerBySeason = [];
        $scope.careerTotals = [];
        $scope.careerBySeasonFinals = [];
        $scope.careerTotalsFinals = [];
        $scope.careerHighs = [];
        $scope.careerHighsFGM = [];
        $scope.careerHighsFTP = [];
        $scope.p1Consec = [];
        $scope.stats = [];
        $scope.winningestPlayerData = [];
        $scope.statType = "";
        $scope.section = "";
        $scope.firstLoad = true;
        $scope.success = false;
        $scope.tableSuccess = false;
        $scope.apiError = false;

        $scope.showCareerArchive = false;

        $scope.playersList = [];

        $scope.sortType     = 'seasonID'; // set the default sort type
        $scope.sortReverse  = true;  // set the default sort order
        $scope.sortTypeF     = 'seasonID'; // set the default sort type
        $scope.sortReverseF  = true;  // set the default sort order

        $scope.rootScope = $rootScope;
        $scope.child = {};

        $scope.init = function() {
            $scope.selectedPlayerId = $location.search().pid || 1;
            $timeout(function(){
                $scope.getPlayer($scope.selectedPlayerId);
            },400);
        };

        $scope.getPlayer = function(pid, type, section) {
            $scope.statType = type || '';
            $scope.section = section || '';

            if($scope.firstLoad) $scope.success = false;
            $scope.tableSuccess = false;

            $scope.careerBySeason = [];
            $scope.careerTotals = [];
            $scope.careerBySeasonFinals = [];
            $scope.careerTotalsFinals = [];

            $timeout(function(){
                if(!$scope.statType) {
                    apiService.player.get(pid, function(data) {
                        $scope.playerCallback(data);
                    }, function(){ $scope.apiError = true; });
                }
                else if($scope.statType == 'totals') {
                    apiService.player.get(pid, function(data) {
                        $scope.playerTotalsCallback(data);
                    }, function(){ $scope.apiError = true; });
                } else if ($scope.statType == 'averages') {
                    apiService.player.get(pid, function(data) {
                        $scope.playerAvgCallback(data);
                    }, function(){ $scope.apiError = true; });
                }
            },400);
        };

        $scope.playerCallback = function(data) {
            if(data && typeof data === 'object') {
                $scope.stats = data;
                $scope.playerDetails = data.playerDetail[0];
                $scope.ptsChart = data.playersPtsChart[0];
                $scope.careerAvgs = data.playersCareerAvg[0];
                $scope.careerBySeason = data.playersCareerBySeasonLeague;
                $scope.careerTotals = data.playersCareerTot[0];
                $scope.careerBySeasonFinals = data.playersCareerBySeasonLeagueF;
                $scope.careerTotalsFinals = data.playersCareerTotF[0];
                $scope.careerHighs = data.playersCareerHigh[0];
                $scope.careerHighsFTP = data.playersCareerHighFTP[0];
                $scope.careerHighsFGM = data.playersCareerHighFGM[0];
                $scope.p1Consec = data.p1Consec[0];
                $scope.setWinningest();


                $scope.initScoreChart();

                $timeout(function(){
                    $scope.setHoneyFirst();
                    $scope.setHoneySecond();
                },500);

                $scope.statType = 'totals';
                $scope.success = true;
                $scope.apiError = false;
                $scope.tableSuccess = true;
                $scope.firstLoad = false;
            } else {
                $scope.apiError = true;
            }
        };

        $scope.playerTotalsCallback = function(data) {
            if(data && typeof data === 'object') {
                $scope.careerBySeason = data.playersCareerBySeasonLeague;
                $scope.careerTotals = data.playersCareerTot[0];
                $scope.careerBySeasonFinals = data.playersCareerBySeasonLeagueF;
                $scope.careerTotalsFinals = data.playersCareerTotF[0];

                $timeout(function() {
                    $scope.tableSuccess = true;
                    $scope.scrollToSection();
                }, 500);
            } else {
                $scope.apiError = true;
            }
        };

        $scope.playerAvgCallback = function(data) {
            if(data && typeof data === 'object') {
                $scope.careerBySeason = data.playersCareerBySeasonLeagueAvg;
                $scope.careerTotals = data.playersCareerAvg[0];
                $scope.careerBySeasonFinals = data.playersCareerBySeasonLeagueFAvg;
                $scope.careerTotalsFinals = data.playersCareerTotFAvg[0];

                $timeout(function() {
                    $scope.tableSuccess = true;
                    $scope.scrollToSection();
                }, 500);
            } else {
                $scope.apiError = true;
            }
        };

        $scope.setWinningest = function() {
            $scope.winningestPlayerData = parseFloat((($scope.stats.winningestP[0].winningest / $scope.stats.playerDetail[0].gmsPlayed)*100).toFixed(1));
        };

        $scope.getPlayersList = function() {
            apiService.team.getList(function(data) {
                $timeout(function(){
                    if(data) {
                        $scope.playersList = data.players;
                    }
                },0);
            }, function(){ $scope.apiError = true; });
        };

        $scope.initScoreChart = function() {
            $timeout(function(){
                var ctx = jQuery("#points-chart");
                var myChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: [
                            "2 Pointers",
                            "3 Pointers",
                            "Free Throws"
                        ],
                        datasets: [
                            {
                                data: [$scope.ptsChart["2ptWT"],$scope.ptsChart["3ptWT"],$scope.ptsChart.FtWT],
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
            }, 750);
        };

        $scope.scrollToEl = function($event) {
            var scrollPos = event.target.offsetTop - 20;
            $timeout(function(){
                if(scrollPos) {
                    jQuery("body, html").animate({ scrollTop: scrollPos}, 350);
                }
            }, 350);
        };

        $scope.scrollToSection = function() {
            var $el = jQuery("#" + $scope.section  + "Title").offset().top - 20;
            $timeout(function(){
                if($el) {
                    jQuery("body, html").animate({ scrollTop: $el}, 350);
                }
            }, 350);
        };

        $scope.setHoneyFirst = function() {
            var tableOffset = jQuery("#career-totals-table").offset().top + jQuery("#career-totals-table thead").outerHeight(),
                $header     = jQuery("#career-totals-table thead").clone(),
                $fixedHeader = jQuery(".header-fixed.career"),
                secondTableOffset = jQuery("#finals-totals-table").offset().top - 100,
                headerIsHidden = true;

            $fixedHeader.find('table').prepend($header);

            jQuery(window).bind("scroll", function() {
                var offset = jQuery(this).scrollTop();

                if ((offset >= tableOffset && offset <= secondTableOffset) && headerIsHidden) {

                    $fixedHeader.addClass('exposeMe');
                    headerIsHidden = false;
                }
                else if (offset < tableOffset || offset >= secondTableOffset) {
                    $fixedHeader.removeClass('exposeMe');
                    headerIsHidden = true;
                }
            });
        };

        $scope.setHoneySecond = function() {
            var tableOffset = jQuery("#finals-totals-table").offset().top + jQuery("#finals-totals-table thead").outerHeight(),
                $header     = jQuery("#finals-totals-table thead").clone(),
                $fixedHeader = jQuery(".header-fixed.finals"),
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
