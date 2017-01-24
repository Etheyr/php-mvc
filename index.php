<?php

require 'Controllers/UserController.php';
if(!isset($_GET['page'])) {
	(new UserController())->userTables();
}
require 'Controllers/ProductController.php';
if(!isset($_GET['page'])) {
	(new ProductController())->productTables();
}
?>