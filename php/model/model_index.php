<?php

class Model_index
{
	public function get_themes()
	{
		require_once"php/dataBase/bd.php";

		$themes = R::findAll('themes');

		return $themes;
	}
}