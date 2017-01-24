<?php 

require __DIR__ . '/../Models/Product.php';

class Vegetable {

	private $productorName;
	private $expiresAt = 0;

	public function iFresh(){

		$day =3
		if($expiresAt <= $day ){

			return "ce produit n'es plus consomable";

		} else if ($expiresAt > $day ){
			
			return "ce produit et consomable";

		}

	}


}

?>
