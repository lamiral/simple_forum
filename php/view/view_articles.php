<?php

class View_articles
{
	public function viewArticles($articles)
	{
		foreach($articles as $article)
		{
			echo "<a href='http://magazin/article/view/".$article['id']."'>".$article['title'].'<a><br>';
			echo $article['author'].'<br>';
			echo $article['text'].'<br>';
			echo $article['data'].'<br>';
		}
	}
}