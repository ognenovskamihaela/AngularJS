<?php
class Users
{
	//class attributes
	private $name;
	private $last_name;
	private $adress;
	private $u_id;
	private $phone_number;
	//default construct
	public function __construct(){}
	//setters
	public function setName($name){
		$this->name = $name;
	}
	public function setLast_name($last_name){
		$this->last_name = $last_name;
	}
	public function setAdress($adress){
		$this->adress = $adress;
	}
	public function setU_id($u_id){
		$this->u_id = $u_id;
	}
	public function setPhone_number($phone_number){
		$this->phone_number = $phone_number;
	}
	
	//Getters
	public function getName(){
		return $this->name;
	}
	public function getLast_name(){
		return $this->last_name;
	}
	public function getAdress(){
		return $this->adress;
	}
	public function getU_id(){
		return $this->u_id;
	}
	public function getPhone_number(){
		return $this->phone_number;
	}
	
}
?>