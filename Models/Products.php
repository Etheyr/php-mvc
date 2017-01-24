<?php

require_once __DIR__ . '/../Models/Product.php';

class Products {

	private $products;

	public function __construct(){

		$this->products = [
		["products"=> new Product("1", "T-shirt Vel'koz" , "40 €")],
		["products"=> new Product("2", "T-shirt Veigar" , "30 €")],
		["products"=> new Product("3", "blue Golem" , "10 €")],
		["products"=> new Product("4", "Red Golem" , "10 €")],
		["products"=> new Product("5", "Nashor" , "90 €")]
		];

	}

	public function getProducts() {

		return $this->products;

	}
}



?>