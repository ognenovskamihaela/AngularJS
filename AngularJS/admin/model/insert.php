<?php
$data = json_decode(file_get_contents("php://input"));
//var_dump($dump);
require_once "../../lib/database_new.php";
$DB=new Databases();
$table_name=$data[0]->table_name;
switch($table_name){
    case "petshops":
        echo "echo petshops";
        require_once "popo/petshops.php";
        require_once "dao/petshops.php";
        $objPetshops=new PetshopsDAO($DB);
        $objPetshops->setAdress($data[0]->adress);
        $objPetshops->setCity($data[0]->city);

        $objPetshops->insertPetshops();//DAO
        break;
    case "products":
        echo "echo products";
        require_once "popo/products.php";
        require_once "dao/products.php";
        $objProducts=new ProductsDao($DB);
        $objProducts->setProduct_name($data[0]->product_name);
        $objProducts->setPrice($data[0]->price);
        $objProducts->setTitle($data[0]->title);

        $objProducts->insertProducts();
        break;
    case "users":
        echo "echo users";
        require_once "popo/users.php";
        require_once "dao/users.php";
        $objUsers=new UsersDao($DB);
            $objUsers->setName($data[0]->name);
            $objUsers->setLast_name($data[0]->last_name);
            $objUsers->setPhone_number($data[0]->phone_number);

            $objUsers->insertUsers();
        break;
    case "orders":
        echo "echo orders";
        require_once "popo/orders.php";
        require_once "dao/orders.php";
        $objOrders=new OrdersDao($DB);
        $objOrders->setDate($data[0]->date);
        $objOrders->setS_id($data[0]->s_id);
        $objOrders->setU_id($data[0]->u_id);
        $objOrders->setD_id($data[0]->d_id);

        $objOrders->insertOrders();
        break;
    case "employees":
        echo "echo employees";
        require_once "popo/employees.php";
        require_once "dao/employees.php";
        $objEmployees=new EmployeesDao($DB);
        $objEmployees->setFirst_name($data[0]->first_name);
        $objEmployees->setLast_name($data[0]->last_name);
        $objEmployees->setSalary($data[0]->salary);
        $objEmployees->setD_id($data[0]->d_id);

        $objEmployees->insertEmployees();
        break; 
    case "categories":
        echo "echo categories";
        require_once "popo/categories.php";
        require_once "dao/categories.php";
        $objCategories=new CategoriesDao($DB);
        $objCategories->setTitle($data[0]->title);

        $objCategories->insertCategories();
        break; 
        default:
            echo "Table doesn't exist";
            break; 
        
        
}
?>