<?php

require_once"php/model/model_register.php";
require_once"php/view/register_view.php";

class Controller_register
{
	public function register()
	{	
		$_register_model = new Model_register();
		$reg_message = $_register_model->register($_POST); 

		$_register_view = new View_register();
		$_register_view->view_form();

		if(!empty($reg_message))
		{
			$_register_view->view_reg_message($reg_message);
		}
	}
}