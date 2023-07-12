var app = angular.module('theBsharpsApp', ['ui.bootstrap.dropdown', 'mgcrea.ngStrap', 'angularLazyImg']);

app.directive('ajaxLoader', ["$compile", function ($compile) {
    return {
        restrict: 'A',
        link: function (scope, element, attr) {
            var template = '<div ng-hide="' + attr.ajaxLoader + '" class="loader" ><div class="loading-circles">' +
                  '<div class="loading-circle"></div>' +
                  '<div class="loading-circle"></div>' +
                  '<div class="loading-circle"></div>' +
                  '<div class="loading-circle"></div>' +
                  '<div class="loading-circle"></div>' +
                  '<div class="loading-circle"></div>' +
                  '<div class="loading-circle"></div>' +
                  '<div class="loading-circle"></div>' +
              '</div></div>';
            element.append($compile(template)(scope));
        }
    };
}]);

app.directive('animateOnChange', function($animate,$timeout) {
    return function(scope, elem, attr) {
        scope.$watch(attr.animateOnChange, function(nv,ov) {
            if (nv!=ov) {
                var c = nv > ov?'change-up':'change';
                $animate.addClass(elem,c).then(function() {
                    $timeout(function() {$animate.removeClass(elem,c);});
                });
            }
        });
    };
});

app.filter('num', function() {
    return function(input) {
      return parseInt(input, 10);
    };
});

app.filter('orderEmpty', function () {
    return function (array, key, type) {
        var present, empty, result;

        if(!angular.isArray(array)) return;
        present = array.filter(function (item) {
            return item[key];
        });

        empty = array.filter(function (item) {
                return !item[key];
        });

        switch(type) {
            case 'toBottom':
                result = present.concat(empty);
                break;
            case 'toTop':
                result = empty.concat(present);
                break;
            default:
                result = array;
                break;
        }
        return result;
    };
});

app.filter('orderObjectBy', function() {
    return function(items, field, reverse) {
        var filtered = [];
        angular.forEach(items, function(item) {
        filtered.push(item);
    });
    filtered.sort(function (a, b) {
        return (a[field] > b[field] ? 1 : -1);
    });
    if(reverse) filtered.reverse();
    return filtered;
    };
});

app.controller("navigation", ["$scope", "$http", "$location", "$timeout", "$rootScope", "$window", "apiService", function($scope, $http, $location, $timeout, $rootScope, $window, apiService) {

    $rootScope.defaultSeason = $scope.defaultSeason = "18s"; // set in global-bars.php
    $rootScope.defaultLeague = $scope.defaultLeague = "BHS";
    $rootScope.defaultRound = $scope.defaultRound = 1;
    $rootScope.latestRoundId = $scope.latestRoundId = 0;
    
    $scope.hoverTimer = "";

    $scope.status = {
        isopen: false
    };
    $scope.status2 = {
        isopen: false
    };
    $scope.status3 = {
        isopen: false
    };

    $scope.toggled = function(open) {
        console.log('Dropdown is now: ', open);
    };

    $scope.toggleDropdown = function($event, menuId, delay) {
        var timerDelay = delay || 350;
        $event.preventDefault();
        $event.stopPropagation();
        $timeout.cancel($scope.hoverTimer);
        $scope.hoverTimer = $timeout(function () {
            if (menuId == 1 ) $scope.status.isopen = true;
            if (menuId == 2 ) $scope.status2.isopen = true;
            if (menuId == 3 ) $scope.status3.isopen = true;
        }, timerDelay);
    };

    $scope.toggleDropdownOff = function($event, menuId) {
        $event.preventDefault();
        $event.stopPropagation();
        $timeout.cancel($scope.hoverTimer);
        if (menuId == 1 ) $scope.status.isopen = false;
        if (menuId == 2 ) $scope.status2.isopen = false;
        if (menuId == 3 ) $scope.status3.isopen = false;
    };

    $scope.goToPage = function(page) {
        var oldPage = window.location;
        if (oldPage !== page) window.location = page;
    };

    $scope.getLatestRound = function() {
        apiService.schedule.getLatestRound(function(data) {
            $timeout(function(){
                $rootScope.latestRoundId = $scope.latestRoundId = data.latestRound[0].roundID;
            },0);
        }, function(){ $scope.apiError = true; });
    };
}]);


app.config(['lazyImgConfigProvider', function(lazyImgConfigProvider){
    lazyImgConfigProvider.setOptions({
    successClass: 'success'
});
}])