<?php
class CategoriesDAO extends Categories{
	//class attributes
	private $table_name ="categories";
	private $database = null;
	private $pk_name="title";
	//construct
	public function __construct($DB){
		$this->database=$DB;
	}
	//methods CRUD
	public function insertCategories(){
		$title 	= parent::getTitle();
		$columns_value="'$title'";
		$this->database->call_store_procedure_withFields("_insert_categories",$columns_value);

	}
	public function deleteVraboteniByCategories(){
		$pk_value = parent::getTitle();
		$this->database->deleteRow($this->table_name,$this->pk_name,$pk_value);//DAO

	}
    public function deleteAllCategories(){
		$query ="DELETE FROM $this->table_name";
	}
	public function selectCategories(){
		return $this->database->call_store_procedure("_select_categories");
	}
	public function deleteCategories(){
		$pk_value =parent::getTitle();
		//$this->database->deleteRow($this->table_name,$this->pk_name,$pk_value);//WITHOUT STORE PROCEDURE
		$this->database->call_store_procedure_withFields("_delete_categories",$pk_value);
	}
}


?>