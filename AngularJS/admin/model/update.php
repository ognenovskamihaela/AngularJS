<?php
$data = json_decode(file_get_contents("php://input"));
var_dump($dump);
require_once "../../lib/database_new.php";
$DB=new Databases();
$table_name=$data[0]->table_name;
switch($table_name){
    case "petshops":
        echo "echo petshops";
        require_once "popo/petshops.php";
        require_once "dao/petshops.php";
        $objPetshops=new PetshopsDao($DB);
        $objPetshops->setD_id($data[0]->d_id);//POPO
        $objPetshops->setAdress($data[0]->adress);
        $objPetshops->setCity($data[0]->city);

        $objPetshops->updatePetshops();//DAO
        break;
    case "products":
        echo "echo products";
        require_once "popo/products.php";
        require_once "dao/products.php";
        $objProducts=new ProductsDao($DB);
        $objProducts->setS_id($data[0]->s_id);
        $objProducts->setProduct_name($data[0]->product_name);
        $objProducts->setPrice($data[0]->price);
        $objProducts->setTitle($data[0]->title);

        $objProducts->updateProducts();
        break;
    case "users":
        echo "echo users";
        require_once "popo/users.php";
        require_once "dao/users.php";
        $objUsers=new UsersDao($DB);
            $objUsers->setU_id($data[0]->u_id);
            $objUsers->setName($data[0]->name);
            $objUsers->setLast_name($data[0]->last_name);
            $objUsers->setAdress($data[0]->adress);
            $objUsers->setPhone_number($data[0]->phone_number);

            $objUsers->updateUsers();
        break;
    case "orders":
        echo "echo orders";
        require_once "popo/orders.php";
        require_once "dao/orders.php";
        $objOrders=new OrdersDao($DB);
        $objOrders->setN_id($data[0]->n_id);
        $objOrders->setDate($data[0]->date);
        $objOrders->setS_id($data[0]->s_id);
        $objOrders->setU_id($data[0]->u_id);
        $objOrders->setD_id($data[0]->d_id);

        $objOrders->updateOrders();
        break;
    case "employees":
        echo "echo employees";
        require_once "popo/employees.php";
        require_once "dao/employees.php";
        $objEmployees=new EmployeesDao($DB);
        $objEmployees->setV_id($data[0]->v_id);
        $objEmployees->setFirst_name($data[0]->first_name);
        $objEmployees->setLast_name($data[0]->last_name);
        $objEmployees->setSalary($data[0]->salary);
        $objEmployees->setD_id($data[0]->d_id);

        $objEmployees->updateEmployees();
        break;  
        default:
            echo "Table doesn't exist";
            break; 
        
        
}
?>