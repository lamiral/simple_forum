<?php
require_once"php/model/model_article.php";
require_once"php/view/view_article.php";

class Controller_article
{
	public function view($article_id)
	{
		$model_article = new Model_article();
		$view_article = new View_article();

		$comments = $model_article->get_comments($article_id);
		$article = $model_article->get_article($article_id);



		$view_article->viewArticle($article);
		$view_article->view_comments($comments);
		$view_article->view_comment_form();
	}
}

?>