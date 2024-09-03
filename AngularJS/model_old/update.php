<?php
require_once "../lib/database_new.php";
$DB=new Databases();
$table_name="orders";
switch($table_name){
    case "petshops":
        echo "echo petshops";
        require_once "popo/petshops.php";
        require_once "dao/petshops.php";
        $objPetshops=new PetshopsDao($DB);
        $objPetshops->setD_id(8);//POPO
        $objPetshops->setAdress("Vasko Angelevski");
        $objPetshops->setCity("Bitola");

        $objPetshops->updatePetshops();//DAO
        break;
    case "products":
        echo "echo products";
        require_once "popo/products.php";
        require_once "dao/products.php";
        $objProducts=new ProductsDao($DB);
        $objProducts->setS_id(10);
        $objProducts->setProduct_name("igracka za kuce");
        $objProducts->setPrice(1000);
        $objProducts->setTitle("drugo");

        $objProducts->updateProducts();
        break;
    case "users":
        echo "echo users";
        require_once "popo/users.php";
        require_once "dao/users.php";
        $objUsers=new UsersDao($DB);
            $objUsers->setU_id(2);
            $objUsers->setName("Mihaela");
            $objUsers->setLast_name("Ognenovska");
            $objUsers->setAdress("DMH");
            $objUsers->setPhone_number('09999999');

            $objUsers->updateUsers();
        break;
    case "orders":
        echo "echo orders";
        require_once "popo/orders.php";
        require_once "dao/orders.php";
        $objOrders=new OrdersDao($DB);
        $objOrders->setN_id(12);
        $objOrders->setDate("2021-01-24");
        $objOrders->setS_id(11530);
        $objOrders->setU_id(2);
        $objOrders->setD_id(7);

        $objOrders->updateOrders();
        break;
    case "employees":
        echo "echo employees";
        require_once "popo/employees.php";
        require_once "dao/employees.php";
        $objEmployees=new EmployeesDao($DB);
        $objEmployees->setV_id(16);
        $objEmployees->setFirst_name("Vesna");
        $objEmployees->setLast_name("Ognenov");
        $objEmployees->setSalary(30000);
        $objEmployees->setD_id(1);

        $objEmployees->updateEmployees();
        break;  
        default:
            echo "Table doesn't exist";
            break; 
        
        
}
?>