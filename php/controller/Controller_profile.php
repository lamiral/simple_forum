<?php
require_once"php/model/model_user.php";
require_once"php/view/view_user.php";

class Controller_profile
{
	public function view($user_id)
	{
		$model_user = new Model_user();
		$view_user = new View_user();

		$user = $model_user->get_user($user_id);
		$view_user->viewUser($user);
	}
}

?>