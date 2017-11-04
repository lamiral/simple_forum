<?php

class View_enter
{
	public function view_form()
	{
		require_once"enter_form.php";
	}

	public function view_enter_message($message)
	{
		echo $message;
	}
}