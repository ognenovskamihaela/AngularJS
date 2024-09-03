<?php
class Petshops
{
	//class attributes
	private $d_id;
	private $adress;
	private $city;
	//default construct
	public function __construct(){}
	//setters
	public function setD_id($d_id){
		$this->d_id = $d_id;
	}
	public function setAdress($adress){
		$this->adress = $adress;
	}
	public function setCity($city){
		$this->city = $city;
	}
	//Getters
	public function getD_id(){
		return $this->d_id;
	}
	public function getAdress(){
		return $this->adress;
	}
	public function getCity(){
		return $this->city;
	}
	
}
?>