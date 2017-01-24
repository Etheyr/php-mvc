<?php

class Product {

	private $id;
	private $name;
	private $price;

	public function __construct($id , $names , $prices){

		$this->setId($id);
		$this->setName($names);
		$this->setPrice($prices);

	} 


	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}


	public function getName(){
		return $this->name;
	}


	public function setName($names){
		$this->name = $names;
	}


	public function getPrice(){
		return $this->price;
	}


	public function setPrice($prices){
		$this->price = $prices;
	}
}

?>