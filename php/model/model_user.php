<?php

class Model_user
{
	public function get_user($user_id)
	{
		require_once"php/dataBase/bd.php";

		$user = R::getAll("SELECT * FROM user WHERE id = ?",array($user_id));
		$result = array_shift($user);
		
		return $result;
	}
}

?>