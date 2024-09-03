app.config(function($routeProvider) {
    $routeProvider
    .when("/home", {
      templateUrl : "view/main.html",
      controller:'myCtrl'
    })
    .when("/aboutUs", {
      templateUrl : "view/aboutUs.html",
      controller:'myCtrl'
    })
    .when("/products", {
      templateUrl : "view/products.html",
      controller:'myCtrl'
    })
    .when("/contact", {
    templateUrl : "view/contacts.html",
    controller:'myCtrl'
    })
    .otherwise({
      redirectTo: "view/main.html"
      /*function(){
        windows.location="view/main.html"
      }*/
    })
  });