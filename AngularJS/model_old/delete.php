<?php
$table_name="";
switch($table_name){
    case "deletePetshopsById":
        echo "echo petshops";
        require_once "dao/petshops.php";
        $objPetshops=new PetshopsDAO($DB);
        $objPetshops->setD_id("");//POPO
        $objPetshops->deletePetshops();//DAO
        break;

        case "deleteAllPetshops":
            echo "echo petshops";
            require_once "dao/petshops.php";
            $objPetshops=new PetshopsDAO($DB);
            $objPetshops->deleteAllPetshops();//DAO
            break;


    case "deleteProductsById":
        echo "echo products";
        require_once "dao/products.php";
        $objProducts=new ProductsDAO($DB);
        $objProducts->setS_id("");
        $objProducts->deleteProducts();
        break;

        case "deleteAllProducts":
            echo "echo products";
            require_once "dao/products.php";
            $objProducts=new ProductsDAO($DB);
            $objProducts->deleteAllProducts();
            break;
            //
    case "deleteUsersById":
        echo "echo users";
        require_once "dao/users.php";
        $objUsers=new UsersDAO($DB);
            $objUsers->setU_id("");

            $objUsers->deleteUsers();
        break;
    case "deleteOrdersById":
        echo "echo orders";
        require_once "dao/orders.php";
        $objOrders=new OrdersDAO($DB);
        $objOrders->setN_id("");

        $objOrders->deleteOrders();
        break;
    case "deleteEmployeesById":
        echo "echo employees";
        require_once "dao/employees.php";
        $objEmployees=new EmployeesDAO($DB);
        $objEmployees->setV_id("");

        $objEmployees->deleteEmployees();
        break; 
        case "deleteAllEmployees":
            echo "echo employees";
            require_once "dao/employees.php";
            $objEmployees=new EmployeesDAO($DB);
            
            $objEmployees->deleteAllEmployees();
            break; 
    case "deleteCategoriesById":
        echo "echo categories";
        require_once "dao/categories.php";
        $objCategories=new CategoriesDAO($DB);
        $objCategories->setTitle("");

        $objCategories->deleteCategories();
        break; 
        default:
            echo "Table doesn't exist";
            break; 
        
        
}
?>