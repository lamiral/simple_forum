<?php

class Template
{
	public function header()
	{	
		session_start();
		require_once"php/header.php";
	}

	public function footer()
	{
		require_once"php/footer.php";
	}
}

?>