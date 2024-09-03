var app = angular.module('myApp', ["ngRoute"]);
app.controller('myCtrl', function($scope,$http) {
        /*JSON*/
        $scope.petshops = []; 
        $http.get("model/select.php?table_name=petshops").then(function(response) {$scope.petshops = response.data;});
        $scope.products = []; 
        $http.get("model/select.php?table_name=products").then(function(response) {$scope.products = response.data;});
        $scope.users = []; 
        $http.get("model/select.php?table_name=users").then(function(response) {$scope.users = response.data;});
        $scope.categories = []; 
        $http.get("model/select.php?table_name=categories").then(function(response) {$scope.categories = response.data;});
        $scope.employees = []; 
        $http.get("model/select.php?table_name=employees").then(function(response) {$scope.employees = response.data;});
        $scope.orders = []; 
        $http.get("model/select.php?table_name=orders").then(function(response) {$scope.orders = response.data;});    
});
app.filter('chunk', function() {
        return function(arr, size) {
          var newArr = [];
          for (var i = 0; i < arr.length; i += size) {
            newArr.push(arr.slice(i, i + size));
          }
          return newArr;
        };
});