<?php
class Databases{
    private $servername="localhost";
    private $username="root";
    private $password="";
    private $db_name="petshop";
    private $conn=null;

    public function __construct(){
        try{
            $this->conn=new PDO("mysql:host=$this->servername;dbname=$this->db_name",$this->username,$this->password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           // echo "Connected succesfully";
        } catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function insertRow($table_name,$columns,$column_values){
        $query="INSERT INTO $table_name($columns) VALUES($column_values)";
        echo $query;
        $this->conn->exec($query);
    }
    //deleteRow
    public function deleteRow($table_name,$pk_name,$pk_value){
    $query="DELETE FROM $table_name WHERE $pk_name=$pk_value";
    $this->conn->exec($query);
    }
    public function updateRow($table_name,$columns,$condition){
    $query = "UPDATE $table_name
		  SET $columns
		  WHERE $condition";
    $this->conn->exec($query);
    }
    public function selectRow($table_name){
    $query="SELECT * FROM $table_name  ";
    $stmt=$this->conn->prepare($query);
    $stmt->execute();
    $results=$stmt->fetchAll();
    return $results;

}
public function call_store_procedure($store_procedure){
    $query="CALL $store_procedure();  ";
    $stmt=$this->conn->prepare($query);
    $stmt->execute();
    $results=$stmt->fetchAll();
    return $results;

}
public function call_store_procedure_withFields($store_procedure,$fields){
    $query="CALL $store_procedure($fields);";
    $stmt=$this->conn->prepare($query);
    $stmt->execute();
    $results=$stmt->fetchAll();
    return $results;

}
}

?>