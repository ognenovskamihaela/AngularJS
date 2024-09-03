<?php
class Employees
{
	//class attributes
	private $v_id;
	private $first_name;
	private $last_name;
	private $salary;
	private $d_id;
	//default construct
	public function __construct(){}
	//setters
	public function setV_id($v_id){
		$this->v_id = $v_id;
	}
	public function setFirst_name($first_name){
		$this->first_name = $first_name;
	}
	public function setLast_name($last_name){
		$this->last_name = $last_name;
	}
	public function setSalary($salary){
		$this->salary = $salary;
	}
	public function setD_id($d_id){
		$this->d_id = $d_id;
	}
	
	//Getters
	public function getV_id(){
		return $this->v_id;
	}
	public function getFirst_name(){
		return $this->first_name;
	}
	public function getLast_name(){
		return $this->last_name;
	}
	public function getSalary(){
		return $this->salary;
	}
	public function getD_id(){
		return $this->d_id;
	}
	
}
?>