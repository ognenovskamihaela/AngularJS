<?php
class Categories
{
	//class attributes
	private $title;
	//default construct
	public function __construct(){}
	//setters
	public function setTitle($title){
		$this->title = $title;
	}
	//Getters
	public function getTitle(){
		return $this->title;
	}
	
}
?>