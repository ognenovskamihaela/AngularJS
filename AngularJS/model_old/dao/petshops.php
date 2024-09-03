<?php
class PetshopsDAO extends Petshops{
	//class attributes
	private $table_name ="petshops";
	private $columns="adress,city";
	private $database = null;
	private $pk_name="d_id";
	//construct
	public function __construct($DB){
		$this->database=$DB;
	}
	//methods CRUD
	public function insertPetshops(){
		$adress 	   = parent::getAdress();
		$city 	       = parent::getCity();
		$columns_value ="'$adress','$city'";
		//$this->database->insertRow($this->table_name,$this->columns,$columns_value);//DAO
		$this->database->call_store_procedure_withFields("_insert_petshops",$columns_value);

	}
	
	public function deleteByIdPetshops(){
        $pk_value  = parent::getD_id();
		$this->database->deleteRow($this->table_name,$this->pk_name,$pk_value);//DAO

	}
	public function updatePetshops(){
		$adress = parent::getAdress();
        $city   = parent::getCity();
        $d_id   = parent::getD_id();
		$columns  ="
		adress      ='$adress',
		city        ='$city',
		d_id        ='$d_id'";
		$condition=" d_id  ='$d_id'";
		$this->database->updateRow($this->table_name,$columns,$condition);

	}
	public function deleteAllPetshops(){
		//$query ="DELETE FROM $this->table_name";
		$this->database->call_store_procedure("_deleteAllPetshops");
	}
	public function selectPetshops(){
		return $this->database->call_store_procedure("_select_petshops");
	}
	public function searchingByCityOfEmployees(){
		$city=parent::getCity();
		return $this->database->call_store_procedure_withFields("_searching_employees_by_city","'$city'");	
}
	public function deletePetshops(){
		$pk_value=parent::getD_id();
		//$this->database->deleteRow($this->table_name,$this->pk_name,$pk_value);
		$this->database->call_store_procedure_withFields("_delete_petshops",$pk_value);
	}
}

?>