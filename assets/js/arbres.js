let app = angular.module("myApp", []);
let url = base_url + escape("api/arbres");

$.ajax({
    url: url,
    cache: false,
    // data: "zlCateg=" + escape(categChoisie),
    datatype: "json",
    success: function(json) {

        //console.log(json);
        console.log("AJAX get => " + url);

        function ArbresCtrl($scope) {
            $scope.arbres = json;
        };
    },
    error: function(xhr, ajaxOptions, thrownError) {
        console.log(xhr.status);
        console.log(ajaxOptions);
        console.log(thrownError);
        console.log(url);
    }
});

app.controller("ArbresCtrl", function($scope, $http) {
    $http.get(base_url + 'api/arbres/').
    success(function(data, status, headers, config) {
        $scope.arbres = data;
    }).
    error(function(data, status, headers, config) {
        console.log("AJAX error: get => " + url);
    });
});