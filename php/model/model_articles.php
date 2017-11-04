<?php

class Model_articles
{
	public function get_articles($theme)
	{
		require_once"php/dataBase/bd.php";

		$articles = R::getAll("SELECT * FROM articles WHERE theme = ?",array($theme));

		return $articles;
	}
}