<?php
class OrdersDAO extends Orders{
	//class attributes
	private $table_name ="orders";
	private $columns="date";
	private $database = null;
	private $pk_name="n_id";
	//construct
	public function __construct($DB){
		$this->database=$DB;
	}
	//methods CRUD
	public function insertOrders(){
		$date 	       = parent::getDate();
		$columns_value ="'$date'";
		//$this->database->insertRow($this->table_name,$this->columns,$columns_value);//DAO
		$this->database->call_store_procedure_withFields("_insert_orders",$columns_value);

	}
	
	public function deleteByIdOrders(){
		$pk_value  = parent::getN_id();
		$this->database->deleteRow($this->table_name,$this->pk_name,$pk_value);//DAO

	}
	public function updateOrders(){
		$n_id  = parent::getN_id();
        $date  = parent::getDate();
		$s_id  =parent::getS_id();
		$u_id  =parent::getU_id();
		$d_id  =parent::getD_id();
		$columns ="
		date        ='$date'
		s_id 		=$s_id,
		u_id		=$u_id,
		d_id		$d_id";
		$condition=" n_id  ='$n_id'";
		$this->database->updateRow($this->table_name,$columns,$condition);

	}
	public function deleteAllOrders(){
		$query ="DELETE FROM $this->table_name";
	}
	public function selectOrders(){
		return $this->database->call_store_procedure("_select_orders");
	}
	public function ordersByPetshops(){
		return $this->database->call_store_procedure("_orders_by_petshops");
	}
	public function ordersInLastMonth(){
		$date=parent::getDate();
		return $this->database->call_store_procedure_withFields("_orders_in_last_month","$date");
	}
	public function lessSellingPetshop(){
		return $this->database->call_store_procedure("_the_less_selling_petshop");
	}
	public function mostSellingCategory(){
		return $this->database->call_store_procedure("_the_most_selling_category");
	}
	public function mostSellingProduct($limitTo){
		return $this->database->call_store_procedure_withFields("_the_most_selling_product",$limitTo);
	}
	public function deleteOrders(){
		$pk_value   =parent::getN_id();
		//$this->database->deleteRow($this->table_name,$this->pk_name,$pk_value);
		$this->database->call_store_procedure_withFields("_delete_orders",$pk_value);

	}
}

?>