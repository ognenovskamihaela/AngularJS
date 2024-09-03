<?php
require_once "../lib/database_new.php";
$DB=new Databases();
$data=array();
$table_name=$_GET["table_name"];

switch($table_name){
    case "petshops":
        require_once "popo/petshops.php";
        require_once "dao/petshops.php";
        $objPetshops=new PetshopsDAO(($DB));
        $results=$objPetshops->selectPetshops();
        //var_dump($results);
        foreach($results as $row){
            //echo $row["d_id"],"<br>";
            //assoc "index"=>value;
            $data[]=array("d_id"=>$row["d_id"],
                          "city"=>$row["city"],
                          "adress"=>$row["adress"],
                          "full_adress"=>$row["adress"]." / ".$row["city"]);
        }//END foreach
        break;
        case "products":
            require_once "popo/products.php";
            require_once "dao/products.php";
            $objProducts=new ProductsDAO(($DB));
            $results=$objProducts->selectProducts();
            //var_dump($results);
            foreach($results as $row){
                //echo $row["d_id"],"<br>";
                //assoc "index"=>value;
                $data[]=array("s_id"=>$row["s_id"],
                              "product_name"=>$row["product_name"],
                              "price"=>$row["price"],
                              "title"=>$row["title"]);
            }//END foreach
            break;
        case "users":
            require_once "popo/users.php";
            require_once "dao/users.php";
            $objUsers=new UsersDAO(($DB));
            $results=$objUsers->selectUsers();
            //var_dump($results);
            foreach($results as $row){
                //echo $row["d_id"],"<br>";
                //assoc "index"=>value;
                $data[]=array("u_id"=>$row["u_id"],
                              "name"=>$row["name"],
                              "last_name"=>$row["last_name"],
                              "adress"=>$row["adress"],
                              "phone_number"=>$row["phone_number"]);
            }//END foreach
            break;
        case "orders":
            require_once "popo/orders.php";
            require_once "dao/orders.php";
            $objOrders=new OrdersDAO(($DB));
            $results=$objOrders->selectOrders();
            //var_dump($results);
            foreach($results as $row){
                //echo $row["d_id"],"<br>";
                //assoc "index"=>value;
                $data[]=array("n_id"=>$row["n_id"],
                              "date"=>$row["date"],
                              "s_id"=>$row["s_id"],
                              "u_id"=>$row["u_id"],
                              "d_id"=>$row["d_id"],
                              "name"=>$row["name"],
                              "last_name"=>$row["last_name"],
                              "adress"=>$row["adress"],
                              "phone_number"=>$row["phone_number"],
                              "product_name"=>$row["product_name"],
                              "price"=>$row["price"],
                              "title"=>$row["title"],
                              "city"=>$row["city"],
                              "adress"=>$row["adress"],);
            }//END foreach
            break;
        case "employees":
            require_once "popo/employees.php";
            require_once "dao/employees.php";
            $objEmployees=new EmployeesDAO(($DB));
            $results=$objEmployees->selectEmployees();
            //var_dump($results);
            foreach($results as $row){
                //echo $row["d_id"],"<br>";
                //assoc "index"=>value;
                $data[]=array("v_id"=>$row["v_id"],
                              "first_name"=>$row["first_name"],
                              "last_name"=>$row["last_name"],
                              "short_name"=>strtoupper($row["first_name"][0].".".$row["last_name"][0]."."),
                              "salary"=>$row["salary"],
                              "d_id"=>$row["d_id"],
                              "city"=>$row["city"],
                              "adress"=>$row["adress"],
                            "full_adress"=>$row["adress"]." / ".$row["city"]);
            }//END foreach
            break;
        case "categories":
            require_once "popo/categories.php";
            require_once "dao/categories.php";
            $objCategories=new CategoriesDAO(($DB));
            $results=$objCategories->selectCategories();
            //var_dump($results);
            foreach($results as $row){
                //echo $row["d_id"],"<br>";
                //assoc "index"=>value;
                $data[]=array("title"=>$row["title"]);
            }//END foreach
            break;

            //store procedures from heidi sql
        case "searchingByCityOfEmployees":
            require_once "popo/petshops.php";
            require_once "dao/petshops.php";
            $objPetshops=new PetshopsDAO(($DB));
            $objPetshops->setCity("Bitola");
            $results=$objPetshops->searchingByCityOfEmployees();
            foreach($results as $row){
                $data[]=array(
                    "v_id"=>$row["v_id"],
                    "first_name"=>$row["first_name"],
                    "last_name"=>$row["last_name"],
                    "salary"=>$row["salary"],
                    "d_id"=>$row["d_id"],
                    "city"=>$row["city"]
                );
            }//END foreach
            break;

        case "ordersByPetshops":
            require_once "popo/orders.php";
            require_once "dao/orders.php";
            $objOrders=new OrdersDAO(($DB));
            $results=$objOrders->ordersByPetshops();
            foreach($results as $row){
                $data[]=array(
                    "city"=>$row["city"],
                    "adress"=>$row["adress"],
                    "expensive_product"=>$row["expensive_product"]
                );
            }//END foreach
            break;

        case "ordersInLastMonth":
            require_once "popo/orders.php";
            require_once "dao/orders.php";
            $objOrders=new OrdersDAO(($DB));
            $objOrders->setDate(2023-12-12);
            $results=$objOrders->ordersInLastMonth();
            foreach($results as $row){
                $data[]=array(
                    "n_id"=>$row["n_id"],
                    "date"=>$row["date"],
                    "s_id"=>$row["s_id"],
                    "u_id"=>$row["u_id"],
                    "d_id"=>$row["d_id"],
                    "adress"=>$row["adress"],
                    "product_name"=>$row["product_name"],
                    "price"=>$row["price"],
                    "title"=>$row["title"]
                 );
            }//END foreach
            break;

        case "priceProducts":
            require_once "popo/products.php";
            require_once "dao/products.php";
            $objProducts=new ProductsDAO(($DB));
            $objProducts->setPrice(1000);
            $results=$objProducts->priceProducts();
            foreach($results as $row){
                $data[]=array(
                    "s_id"=>$row["s_id"],
                    "product_name"=>$row["product_name"],
                    "price"=>$row["price"],
                    "title"=>$row["title"]
                    );
            }//END foreach
            break;

        case "salaryBetween":
            require_once "popo/employees.php";
            require_once "dao/employees.php";
            $objEmployees=new EmployeesDAO(($DB));
            $objEmployees->setSalary(10000,20000);
            $results=$objEmployees->salaryBetween();
            foreach($results as $row){
                $data[]=array(
                    "v_id"=>$row["v_id"],
                    "first_name"=>$row["first_name"],
                    "last_name"=>$row["last_name"],
                    "salary"=>$row["salary"],
                    "d_id"=>$row["d_id"],
                    "adress"=>$row["adress"],
                    "city"=>$row["city"]
                    );
            }//END foreach
            break;
        case "lessSellingPetshop":
            require_once "popo/orders.php";
            require_once "dao/orders.php";
            $objOrders=new OrdersDAO(($DB));
            $results=$objOrders->lessSellingPetshop();
            foreach($results as $row){
                $data[]=array(
                    "city"=>$row["city"],
                    "adress"=>$row["adress"],
                    "price"=>$row["price"]
                );
            }//END foreach
            break;

            //numberOfProducts
        case "mostSellingCategory":
            require_once "popo/orders.php";
            require_once "dao/orders.php";
            $objOrders=new OrdersDAO(($DB));
            $results=$objOrders->mostSellingCategory();
            foreach($results as $row){
                $data[]=array(
                    "title"=>$row["title"],
                    "number_of_products"=>$row["number_of_products"]
                );
            }//END foreach
            break;

            case "mostSellingProduct":
                require_once "popo/orders.php";
                require_once "dao/orders.php";
                $objOrders=new OrdersDAO(($DB));
                $limitTo=10;
                $results=$objOrders->mostSellingProduct($limitTo);
                foreach($results as $row){
                    $data[]=array(
                        "product_name"=>$row["product_name"],
                        "number_of_products"=>$row["number_of_products"]
                    );
                }//END foreach
                break;
}
        //var_dump($data); //ARRAY
        echo json_encode($data); //JSON
?>