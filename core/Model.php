<?php 
class Model
{

	function __construct() { 
		$this->mysqli = mysqli_connect("localhost", "test_user", "password", "POSTS");

		if ($this->mysqli === false) {
		    	die("ERROR: Could not connect. " . mysqli_connect_error());
			}
	}

	//Здесь мы получаем данные из БД
	public function executeQuery($query) {
		$this->mysqli->set_charset("utf8mb4");
		$res = $this->mysqli->query($query);
		return $res;
	}

	function __destruct() {
		//Освобождаем память. И закрываем соединение
       $this->mysqli->close();
   }
}
?>