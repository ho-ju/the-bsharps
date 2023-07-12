app.controller("ladderController", ["$scope", "$http", "$filter", "apiService", "$timeout", "$interval", "$rootScope", "$window", "$location",
    function($scope, $http, $filter, apiService, $timeout, $interval, $rootScope, $window, $location) {
        $scope.lastUpdated = "";
        $scope.iFrameSrc = "";
        $scope.success = false;
        $scope.isData = false;

        $scope.rootScope = $rootScope;
        $scope.child = {};

        $scope.initLadder = function() {
            $scope.success = false;
            $scope.selectedLeague = $location.search().league || $rootScope.defaultLeague;
            $scope.selectedSeason = $location.search().season || $rootScope.defaultSeason;

            $scope.setLadder($scope.selectedLeague, $scope.selectedSeason);
        };

        $scope.setLadder = function(league, season) {
            $scope.success = false;
            jQuery("#ladder .ladder iframe").attr('src', '');
            if(season=="18s") {
                $scope.iFrameSrc = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vQdjYNdb9_aocQ8aGzxWUlysKYFeZjM2Ae2INiyZx8QYwuaoQeC8EkTJiqjggu7McK0nMg8yVC-Wnmf/pubhtml?gid=1018635122&single=true';
                $scope.isData = true;
            } else if(season=="17w") {
                $scope.iFrameSrc = 'https://docs.google.com/spreadsheets/d/1rPH7rEn9HRus3PlPzIIM1KiW_XobGoGF1FYZgh2UmRc/pubhtml?gid=480773027&single=true';
                $scope.isData = true;
            } else if(season == "17s") {
                $scope.iFrameSrc = 'https://docs.google.com/spreadsheets/d/1rPH7rEn9HRus3PlPzIIM1KiW_XobGoGF1FYZgh2UmRc/pubhtml?gid=1732705741&single=true';
                $scope.isData = true;
            } else if(season == "16w") {
                $scope.iFrameSrc = 'https://docs.google.com/spreadsheets/d/1rPH7rEn9HRus3PlPzIIM1KiW_XobGoGF1FYZgh2UmRc/pubhtml?gid=0&single=true';
                $scope.isData = true;
            } else {
                $timeout(function(){
                    $scope.success = true;
                    $scope.isData = false;
                }, 1000);
            }

            if($scope.isData) {
                $timeout(function(){
                    jQuery("#ladder .ladder iframe").attr('src', $scope.iFrameSrc);
                    $scope.success = true;
                }, 2000);
            }
        };

    }
]);
