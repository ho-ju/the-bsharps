app.factory("apiService", ["$http", function ($http) {
    return {
        boxScore: {
            getBoxScore: function (leagueId, sesasonId, roundID, callback, errorCallback) {
                $http.get("/services/stats-box-scores.php?league=" + leagueId + "&season=" + sesasonId + "&roundID=" + roundID + "&callback=JSON_CALLBACK", {
                    cache: true
                }).success(callback).error(errorCallback);
            }
        },
        schedule: {
            getResultsSchedule: function (leagueId, sesasonId, callback, errorCallback) {
                $http.get("/services/stats-results-schedule.php?league=" + leagueId + "&season=" + sesasonId + "&callback=JSON_CALLBACK", {
                    cache: true
                }).success(callback).error(errorCallback);
            },
            getTeamVersusStats: function (t2id, callback, errorCallback) {
                $http.get("/services/stats-results-schedule-team-vs-records.php?teamID=" + t2id + "&callback=JSON_CALLBACK", {
                    cache: true
                }).success(callback).error(errorCallback);
            },
            getLatestRound: function (callback, errorCallback) {
                $http.get("/services/latest-round.php?callback=JSON_CALLBACK", {
                    cache: true
                }).success(callback).error(errorCallback);
            }
        },
        leaguesSeasonsRounds: {
            get: function (leagueId, sesasonId, roundID, callback, errorCallback) {
                $http.get("/services/leagues-seasons-rounds.php?league=" + leagueId + "&season=" + sesasonId + "&roundID=" + roundID + "&callback=JSON_CALLBACK", {
                    cache: true
                }).success(callback).error(errorCallback);
            }
        },
        team: {
            getList: function (callback, errorCallback) {
                $http.get("/services/team-list.php?callback=JSON_CALLBACK", {
                    cache: true
                }).success(callback).error(errorCallback);
            }
        },
        player: {
            get: function (playerId, callback, errorCallback) {
                $http.get("/services/player-detail.php?pid=" + playerId + "&callback=JSON_CALLBACK", {
                    cache: true
                }).success(callback).error(errorCallback);
            }
        },
        stats: {
            getTeam: function (callback, errorCallback) {
                $http.get("/services/stats-team.php?callback=JSON_CALLBACK", {
                    cache: true
                }).success(callback).error(errorCallback);
            },
            getPers: function (leagueId, sesasonId, callback, errorCallback) {
                $http.get("/services/stats-pers.php?league=" + leagueId + "&season=" + sesasonId + "&callback=JSON_CALLBACK", {
                    cache: true
                }).success(callback).error(errorCallback);
            },
            getPersFinals: function (callback, errorCallback) {
                $http.get("/services/stats-pers.php?finals=true&callback=JSON_CALLBACK", {
                    cache: true
                }).success(callback).error(errorCallback);
            },
            getPersCareer: function (callback, errorCallback) {
                $http.get("/services/stats-pers.php?career=true&callback=JSON_CALLBACK", {
                    cache: true
                }).success(callback).error(errorCallback);
            },
            getTotals: function (leagueId, sesasonId, callback, errorCallback) {
                $http.get("/services/stats-totals.php?league=" + leagueId + "&season=" + sesasonId + "&callback=JSON_CALLBACK", {
                    cache: true
                }).success(callback).error(errorCallback);
            },
            getTotalsFinals: function (callback, errorCallback) {
                $http.get("/services/stats-totals.php?finals=true&callback=JSON_CALLBACK", {
                    cache: true
                }).success(callback).error(errorCallback);
            },
            getTotalsCareer: function (callback, errorCallback) {
                $http.get("/services/stats-totals.php?career=true&callback=JSON_CALLBACK", {
                    cache: true
                }).success(callback).error(errorCallback);
            },
            getRecords: function (leagueId, sesasonId, callback, errorCallback) {
                $http.get("/services/stats-records.php?league=" + leagueId + "&season=" + sesasonId + "&callback=JSON_CALLBACK", {
                    cache: true
                }).success(callback).error(errorCallback);
            },
            getRecordsFinals: function (callback, errorCallback) {
                $http.get("/services/stats-records.php?finals=true&callback=JSON_CALLBACK", {
                    cache: true
                }).success(callback).error(errorCallback);
            },
            getRecordsCareer: function (callback, errorCallback) {
                $http.get("/services/stats-records.php?career=true&callback=JSON_CALLBACK", {
                    cache: true
                }).success(callback).error(errorCallback);
            },
            getPlayer: function (playerId, leagueId, sesasonId, callback, errorCallback) {
                $http.get("/services/stats-pc.php?pid=" + playerId + "&league=" + leagueId + "&season=" + sesasonId + "&callback=JSON_CALLBACK", {
                    cache: true
                }).success(callback).error(errorCallback);
            },
            getPlayerFinals: function (playerId, callback, errorCallback) {
                $http.get("/services/stats-pc.php?pid=" + playerId + "&finals=true&callback=JSON_CALLBACK", {
                    cache: true
                }).success(callback).error(errorCallback);
            },
            getPlayerCareer: function (playerId, callback, errorCallback) {
                $http.get("/services/stats-pc.php?pid=" + playerId + "&career=true&callback=JSON_CALLBACK", {
                    cache: true
                }).success(callback).error(errorCallback);
            },
            getRandomStats: function (callback, errorCallback) {
                $http.get("/services/stats-random.php?career=true&callback=JSON_CALLBACK", {
                    cache: true
                }).success(callback).error(errorCallback);
            },
            getRandomCurrentStats: function (type, battery, callback, errorCallback) {
                $http.get("/services/stats-random-current.php?currStatType=" + type + "&battery=" + battery + "&callback=JSON_CALLBACK", {
                    cache: true
                }).success(callback).error(errorCallback);
            }
        }
    };
}]);
