<?php

require 'Controllers/UserController.php';
if(!isset($_GET['page'])) {
	(new UserController())->userTables();
}
?>