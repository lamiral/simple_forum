<?php

class Model_article
{
	public function get_article($article_id)
	{
		require_once"php/dataBase/bd.php";

		$article = R::findOne('articles','id = ?',array($article_id));

		return $article;
	}

	public function get_comments($article_id)
	{
		require_once"php/dataBase/bd.php";

		$comments = R::getAll("SELECT * FROM comments WHERE article_id = ?",array($article_id));

		return $comments;
	}

	public function add_comment($comment)
	{

	}
}