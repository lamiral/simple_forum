<?php

class View_article
{
	public function viewArticle($article)
	{		
			echo '<div class="article">';
			echo $article['title'].'<br>';
			echo $article['author'].'<br>';
			echo $article['text'].'<br>';
			echo $article['data'].'<br>';
			echo '</div>';
	}

	public function view_comments($comments)
	{
		foreach($comments as $comment)
		{	
			echo '<div class="div_comments">';
			echo '<div class="div_comments_author">'.$comment['author'].'</div>';
			echo '<div class="div_comments_text">'.$comment['text'].'</div>';
			echo '</div>';
		}
	}

	public function view_comment_form()
	{
		require_once"comment_form.php";
	}
}