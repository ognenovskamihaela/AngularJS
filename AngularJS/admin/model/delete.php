<?php
$data = json_decode(file_get_contents("php://input"));
//var_dump($dump);
require_once "../../lib/database_new.php";
$DB=new Databases();
$table_name=$data[0]->table_name;
$pk_value=$data[0]->pk_value;
switch($table_name){
    case "petshops":
        echo "echo petshops";
        require_once "popo/petshops.php";
        require_once "dao/petshops.php";
        $objPetshops=new PetshopsDAO($DB);
        $objPetshops->setD_id($pk_value);//POPO
        $objPetshops->deletePetshops();//DAO
        break;

        case "deleteAllPetshops":
            echo "echo petshops";
            require_once "popo/petshops.php";
            require_once "dao/petshops.php";
            $objPetshops=new PetshopsDAO($DB);
            $objPetshops->deleteAllPetshops();//DAO
            break;


    case "products":
        echo "echo products";
        require_once "popo/products.php";
        require_once "dao/products.php";
        $objProducts=new ProductsDAO($DB);
        $objProducts->setS_id($pk_value);
        $objProducts->deleteProducts();
        break;

        case "deleteAllProducts":
            echo "echo products";
            require_once "popo/products.php";
            require_once "dao/products.php";
            $objProducts=new ProductsDAO($DB);
            $objProducts->deleteAllProducts();
            break;
            //
    case "users":
        echo "echo users";
        require_once "popo/users.php";
        require_once "dao/users.php";
        $objUsers=new UsersDAO($DB);
            $objUsers->setU_id($pk_value);

            $objUsers->deleteUsers();
        break;
    case "orders":
        echo "echo orders";
        require_once "popo/orders.php";
        require_once "dao/orders.php";
        $objOrders=new OrdersDAO($DB);
        $objOrders->setN_id($pk_value);

        $objOrders->deleteOrders();
        break;
    case "employees":
        echo "echo employees";
        require_once "popo/employees.php";
        require_once "dao/employees.php";
        $objEmployees=new EmployeesDAO($DB);
        $objEmployees->setV_id($pk_value);

        $objEmployees->deleteEmployees();
        break; 
        case "deleteAllEmployees":
            echo "echo employees";
            require_once "popo/employees.php";
            require_once "dao/employees.php";
            $objEmployees=new EmployeesDAO($DB);
            
            $objEmployees->deleteAllEmployees();
            break; 
    case "categories":
        echo "echo categories";
        require_once "popo/categories.php";
        require_once "dao/categories.php";
        $objCategories=new CategoriesDAO($DB);
        $objCategories->setTitle($pk_value);

        $objCategories->deleteCategories();
        break; 
        default:
            echo "Table doesn't exist";
            break; 
        
        
}
?>