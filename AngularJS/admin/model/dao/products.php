<?php
class ProductsDAO extends Products{
		//class attributes
		private $table_name ="products";
		//private $columns="product_name,price";
		private $database = null;
		private $pk_name="s_id";
		//construct
		public function __construct($DB){
			$this->database=$DB;
		}
	//methods CRUD
	public function insertProducts(){
		$product_name 	= parent::getProduct_name();
		$price 	        = parent::getPrice();
		$title 	        = parent::getTitle();
		$columns_value ="'$product_name','$price','$title'";
		//$this->database->insertRow($this->table_name,$this->columns,$columns_value);//DAO
		$this->database->call_store_procedure_withFields("_insert_products",$columns_value);

	}
	
	public function deleteByIdProducts(){
		$pk_value   =parent::getS_id();
		$this->database->deleteRow($this->table_name,$this->pk_name,$pk_value);//DAO

	}
	public function updateProducts(){
		$product_name = parent::getProduct_name();
        $price= parent::getPrice();
        $s_id = parent::getS_id();
        $title = parent::getTitle();
		$columns="
		product_name  ='$product_name',
		price   =$price
		title   =$title";
		$condition=" s_id  ='$s_id'";
		$this->database->updateRow($this->table_name,$columns,$condition);

	}
	public function deleteAllProducts(){
		//$query ="DELETE FROM $this->table_name";
		$this->database->call_store_procedure("_delete_all_products");
	}
	public function selectProducts(){
		return $this->database->call_store_procedure("_select_products");
	}
	public function priceProducts(){
		$price=parent::getPrice();
		return $this->database->call_store_procedure_withFields("_price_products","$price");
	}
	public function deleteProducts(){
		$pk_value=parent::getS_id();
		//$this->database->deleteRow($this->table_name,$this->pk_name,$pk_value);
		$this->database->call_store_procedure_withFields("_delete_products",$pk_value);

	}
}

?>