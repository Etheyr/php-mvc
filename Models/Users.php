<?php 

require_once __DIR__ . '/../Models/User.php';

class Users {

	private $users;

	public function __construct(){

		$this->users = [
		["user"=> new User("1", "Vel'Koz" , "Vel.Koz@gmail.com")],
		["user"=> new User("2", "Veigar" , "Veigar@gmail.com")]
		];

	}

	public function getUsers() {

		return $this->users;

	}
}

?>
