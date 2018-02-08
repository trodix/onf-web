let app = angular.module("myApp", []);

$.ajax({
    url: escape(base_url + "/api/getArbres"),
    cache: false,
    // data: "zlCateg=" + escape(categChoisie),
    datatype: "json",
    success: function (json) {

        console.log(json);

        function ArbresCtrl($scope) {
            $scope.arbres = json;
        };        
    },
    error: function (xhr, ajaxOptions, thrownError) {
        console.log(xhr.status);
        console.log(ajaxOptions);
        console.log(thrownError);
        console.log(url);
    }
});

app.controller("ArbresCtrl", function ($scope, $http) {
    $http.get(base_url + '/api/getArbres/').
        success(function (data, status, headers, config) {
            $scope.arbres = data;
        }).
        error(function (data, status, headers, config) {
            console.log("AJAX error");
        });
});