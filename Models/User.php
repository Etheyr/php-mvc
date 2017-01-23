<?php

class User {

	private $id;
	private $name;
	private $mail;
	// private $createdAt = date("F j, Y, g:i a"); 

	public function __construct($id , $name , $mail){

		$this->setId($id);
		$this->setName($name);
		$this->setMail($mail);

	} 

	public function getId(){
		return $this->id;
	}


	public function setId($id){
		$this->id = $id;
	}


	public function getMail(){
		return $this->mail;
	}


	public function setMail($mail){
		$this->mail = $mail;
	}


	public function getDate(){
		return $this->createdAt;
	}


	public function setDate($time){
		$this->createdAt = $time;
	}

	public function getName(){
		return $this->name;
	}


	public function setName($name){
		$this->name = $name;
	}



}


?>

