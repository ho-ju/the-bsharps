app.controller("teamListController", ["$scope", "$http", "$filter", "apiService", "$timeout", "$interval", "$rootScope", "$window", "$location",
    function($scope, $http, $filter, apiService, $timeout, $interval, $rootScope, $window, $location) {
        $scope.players = [];

        $scope.rootScope = $rootScope;
        $scope.child = {};

        $scope.apiError = false;

        $scope.selectedPlayerName1 = "[Pick Me]";
        $scope.selectedPlayerName2 = "[Pick Me]";

        $scope.init = function() {
            $scope.getTeamList();
        };

        $scope.getTeamList = function() {
            $scope.success = false;
            apiService.team.getList(function(data) {
                $timeout(function(){
                    $scope.callback(data);
                },0);
            }, function(){ $scope.apiError = true; });
        };

        $scope.callback = function(data){
            if(data && typeof data === 'object') {
                $scope.players = data.players;
                $scope.success = true;
                $scope.apiError = false;
            } else {
                $scope.apiError = true;
            }
        };
    }
]);
