<?php
class UsersDAO extends Users{
	//class attributes
	private $table_name ="users";
	private $columns="name,last_name,adress,phone_number";
	private $database = null;
	private $pk_name="u_id";
	//construct
	public function __construct($DB){
		$this->database=$DB;
	}
	//methods CRUD
	public function insertUsers(){
		$name 	= parent::getName();
		$last_name 	= parent::getlast_name();
		$adress 	= parent::getAdress();
		$phone_number 	= parent::getPhone_number();
		$columns_value ="'$name','$last_name','$adress','$phone_number'";
		//$this->database->insertRow($this->table_name,$this->columns,$columns_value);//DAO
		$this->database->call_store_procedure_withFields("_insert_users",$columns_value);
	}
	
	public function deleteByIdUsers(){
		$pk_value = parent::getName();
		$this->database->deleteRow($this->table_name,$this->pk_name,$pk_value);//DAO

	}

	public function updateUsers(){
		$name = parent::getName();
        $last_name= parent::getlast_name();
        $u_id = parent::getU_id();
        $adress = parent::getAdress();
        $phone_number = parent::getPhone_number();
		$columns="
		name             ='$name',
		last_name        ='$last_name',
		adress        ='$adress',
		phone_number        =$phone_number";
		$condition=" u_id  ='$u_id'";
		$this->database->updateRow($this->table_name,$columns,$condition);

	}
	public function deleteAllUsers(){
		//$query ="DELETE FROM $this->table_name";
	}
	public function selectUsers(){
		return $this->database->call_store_procedure("_select_users");
	}
	public function deleteUsers(){
		$pk_value=parent::getU_id();
		$this->database->deleteRow($this->table_name,$this->pk_name,$pk_value);
		$this->database->call_store_procedure_withFields("_delete_users",$pk_value);
	}
	
}
?>