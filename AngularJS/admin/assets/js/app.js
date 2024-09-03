var app = angular.module('myApp', ["ngRoute"]);
app.controller('myCtrl', function($scope,$http) {
    $scope.getPosition=-1;
    $scope.position=function(index){
        $scope.getPosition=index;
    }
    function postData(objData,file_name){
        $http({
            method : "POST",
              url : "model/"+file_name+".php",
              data:objData
          }).then(function mySuccess(response) {
           // $scope.myWelcome = response.data;
           console.log("success");
          }, function myError(response) {
            //$scope.myWelcome = response.statusText;
          });
        }
        $scope.deleteRow=function(table_name, pk_value){
            var deleteObj=[];
            deleteObj.push({"table_name":table_name,"pk_value":pk_value});
            console.log(deleteObj);
            postData(deleteObj,"delete");
        }
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
    /*FUNCTIONS*/
    $scope.alert_success=false;
    $scope.alert_danger=false;
    //function isAdult(age){
      //  if(age>=18){
        //    console.log("polnoleten");
        //}
       // else{
        //    console.log("maloleten");
       // }
   // }
    $scope.function_categories=function(title){
        var objCategories=[];
        objCategories.push({"title":title, "table_name":"categories"});
        $scope.alert_success=true;
        console.log(objCategories);
        postData(objCategories,"insert");
        //isAdult(22);
        //$scope.alert_success=true;
    }
    $scope.function_employees=function(first_name,last_name,salary,d_id){
        var objEmployees=[];
        objEmployees.push({"first_name":first_name,"last_name":last_name,"salary":salary,"d_id":d_id, "table_name":"employees"});
        $scope.alert_success=true;
        console.log(objEmployees);
        postData(objEmployees,"insert");
    }
    $scope.function_orders=function(date,s_id,u_id,d_id){
        var objOrders=[];
        objOrders.push({"date":date,"s_id":s_id,"u_id":u_id,"d_id":d_id, "table_name":"orders"});
        $scope.alert_success=true;
        console.log(objOrders);
        postData(objOrders,"insert");
    }
    $scope.function_petshops=function(adress,city){
        var objPetshops=[];
        objPetshops.push({"adress":adress,"city":city, "table_name":"petshops"});
        $scope.alert_success=true;
        console.log(objPetshops);
        postData(objPetshops,"insert");
    }
    $scope.function_products=function(product_name,price,title){
        var objProducts=[];
        objProducts.push({"product_name":product_name,"price":price,"title":title, "table_name":"products"});
        $scope.alert_success=true;
        console.log(objProducts);
        postData(objProducts,"insert");
    }
    
    $scope.function_users=function(name,last_name,phone_number){
        var objUsers=[];
        objUsers.push({"name":name,"last_name":last_name,"phone_number":phone_number, "table_name":"users"});
        $scope.alert_success=true;
        console.log(objUsers); 
        postData(objUsers,"insert");
    }
});