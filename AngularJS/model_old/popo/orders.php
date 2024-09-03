<?php
class Orders
{
	//class attributes
	private $n_id;
	private $date;
	private $s_id;
	private $u_id;
	private $d_id;
	//default construct
	public function __construct(){}
	//setters
	public function setN_id($n_id){
		$this->n_id = $n_id;
	}
	public function setDate($date){
		$this->date = $date;
	}
	public function setS_id($s_id){
		$this->s_id = $s_id;
	}
	public function setU_id($u_id){
		$this->u_id = $u_id;
	}
	public function setD_id($d_id){
		$this->d_id = $d_id;
	}
	
	//Getters
	public function getN_id(){
		return $this->n_id;
	}
	public function getDate(){
		return $this->date;
	}
	public function getS_id(){
		return $this->s_id;
	}
	public function getU_id(){
		return $this->u_id;
	}
	public function getD_id(){
		return $this->d_id;
	}
	
}
?>