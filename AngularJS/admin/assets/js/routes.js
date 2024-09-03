app.config(function($routeProvider) {
    $routeProvider
    .when("/home", {
      templateUrl : "view/index.html",
      controller:'myCtrl'
      })
    .when("/categories", {
      templateUrl : "view/categories.html",
      controller:'myCtrl'
    })
    .when("/employees", {
        templateUrl : "view/employees.html",
        controller:'myCtrl'
    })
    .when("/orders", {
    templateUrl : "view/orders.html",
    controller:'myCtrl'
    })
    .when("/petshops", {
    templateUrl : "view/petshops.html",
    controller:'myCtrl'
    })
    .when("/products", {
    templateUrl : "view/products.html",
    controller:'myCtrl'
    })
    .when("/users", {
    templateUrl : "view/users.html",
    controller:'myCtrl'
    });
  });