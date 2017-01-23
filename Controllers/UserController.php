<?php

require __DIR__ . '/../Models/Users.php';

class UserController {

	public function userTables(){

		$user = new Users();
		$users = $user->getUsers();

		require __DIR__ . '/../View/userTable.php';

	}
}
?>