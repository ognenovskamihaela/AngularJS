<?php
class Products
{
	//class attributes
    private $s_id;
	private $price;
	private $product_name;
	private $title;
	//default construct
	public function __construct(){}
	//Setters
    public function setS_id($s_id){
		$this->s_id = $s_id;
	}
	public function setPrice($price){
		$this->price = $price;
	}
	public function setProduct_name($product_name){
		$this->product_name = $product_name;
	}
	public function setTitle($title){
		$this->title = $title;
	}
	
	//Getters
	public function getS_id(){
		return $this->s_id;
	}
	public function getProduct_name(){
		return $this->product_name;
	}
	public function getPrice(){
		return $this->price;
	}
	public function getTitle(){
		return $this->title;
	}
	
}
?>