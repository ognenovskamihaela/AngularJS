<?php
class EmployeesDAO extends Employees{
	//class attributes
	private $table_name ="employees";
	private $database = null;
	private $pk_name="v_id";
	//construct
	public function __construct($DB){
		$this->database=$DB;
	}
	//methods CRUD
	public function insertEmployees(){
		$first_name    = parent::getFirst_name();
		$last_name     = parent::getLast_name();
		$salary        = parent::getSalary();
		$d_id          = parent::getD_id();
		$columns_value ="'$first_name','$last_name','$salary','$d_id'";
		//$query="INSERT INTO $this->table_name(first_name,last_name,salary);";
		//$this->database->insertRow($this->table_name,$this->columns,$columns_value);//DAO
		$this->database->call_store_procedure_withFields("_insert_employees",$columns_value);

	}
	
	public function deleteByIdEmployees(){
		$pk_value   =parent::getV_id();
		$this->database->deleteRow($this->table_name,$this->pk_name,$pk_value);//DAO

	}
	public function updateEmployees(){
		$v_id         = parent::getV_id();
        $first_name   = parent::getFirst_name();
        $last_name    = parent::getLast_name();
        $salary       = parent::getSalary();
		$d_id		  = parent::getD_id();
		$columns        =
		"first_name  ='$first_name',
		last_name   ='$last_name',
		salary      =$salary
		d_id		=$d_id";
		$condition=" v_id  =$v_id";
		$this->database->updateRow($this->table_name,$columns,$condition);
	}
	public function deleteAllEmployees(){
		//$query ="DELETE FROM $this->table_name";
		$this->database->call_store_procedure("_delete_all_employees");

	}
	public function selectEmployees(){
		return $this->database->call_store_procedure("_select_employees");
	}
	public function salaryBetween(){
		$salary_from=parent::getSalary();
		$salary_to=parent::getSalary();
		$fields="$salary_from, $salary_to";
		return $this->database->call_store_procedure_withFields("_salary_between","$fields");
	}
	public function deleteEmployees(){
		$pk_value  =parent::getV_id();
		//$this->database->deleteRow($this->table_name,$this->pk_name,$pk_value);
		$this->database->call_store_procedure_withFields("_delete_employees",$pk_value);

	}
}

?>