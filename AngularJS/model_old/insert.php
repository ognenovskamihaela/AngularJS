<?php
require_once "../lib/database_new.php";
$DB=new Databases();
$table_name="petshops";
switch($table_name){
    case "petshops":
        echo "echo petshops";
        require_once "popo/petshops.php";
        require_once "dao/petshops.php";
        $objPetshops=new PetshopsDAO($DB);
        $objPetshops->setAdress("Nikola Tesla");
        $objPetshops->setCity("Veles");

        $objPetshops->insertPetshops();//DAO
        break;
    case "products":
        echo "echo products";
        require_once "popo/products.php";
        require_once "dao/products.php";
        $objProducts=new ProductsDao($DB);
        $objProducts->setProduct_name("");
        $objProducts->setPrice("");
        $objProducts->setTitle("");

        $objProducts->insertProducts();
        break;
    case "users":
        echo "echo users";
        require_once "popo/users.php";
        require_once "dao/users.php";
        $objUsers=new UsersDao($DB);
            $objUsers->setName("");
            $objUsers->setLast_name("");
            $objUsers->setAdress("");
            $objUsers->setPhone_number("");

            $objUsers->insertUsers();
        break;
    case "orders":
        echo "echo orders";
        require_once "popo/orders.php";
        require_once "dao/orders.php";
        $objOrders=new OrdersDao($DB);
        $objOrders->setDate("");
        $objOrders->setS_id("");
        $objOrders->setU_id("");
        $objOrders->setD_id("");

        $objOrders->insertOrders();
        break;
    case "employees":
        echo "echo employees";
        require_once "popo/employees.php";
        require_once "dao/employees.php";
        $objEmployees=new EmployeesDao($DB);
        $objEmployees->setFirst_name("");
        $objEmployees->setLast_name("");
        $objEmployees->setSalary("");
        $objEmployees->setD_id("");

        $objEmployees->insertEmployees();
        break; 
    case "categories":
        echo "echo categories";
        require_once "popo/categories.php";
        require_once "dao/categories.php";
        $objCategories=new CategoriesDao($DB);
        $objCategories->setTitle("");

        $objCategories->insertCategories();
        break; 
        default:
            echo "Table doesn't exist";
            break; 
        
        
}
?>