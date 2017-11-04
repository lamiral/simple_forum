<?php
require_once"php/model/model_articles.php";
require_once"php/view/view_articles.php";

class Controller_articles
{
	public function view($theme)
	{
		$modeL_articles = new Model_articles();
		$view_articles = new View_articles();

		$articles = $modeL_articles->get_articles($theme);
		$view_articles->viewArticles($articles);
	}

}