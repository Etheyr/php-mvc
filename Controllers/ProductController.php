<?php

require __DIR__ . '/../Models/Products.php';

class ProductController {

	public function productTables(){

		$product = new Products();
		$products = $product->getProducts();

		require __DIR__ . '/../View/productTable.php';

	}
}
?>