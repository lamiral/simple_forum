<?php
require_once"php/model/model_enter.php";
require_once"php/view/view_enter.php";

class Controller_enter
{
	public function enter()
	{
		$model_enter = new Model_enter();
		$view_enter = new View_enter();

		$view_enter->view_form();
		$message = $model_enter->enter($_POST);

		$view_enter->view_enter_message($message);
	}
}