<?php

class View_register
{
	public function view_form()
	{
		require_once"php/view/register_form.php";
	}

	public function view_reg_message($reg_message)
	{
		echo $reg_message;
	}
}