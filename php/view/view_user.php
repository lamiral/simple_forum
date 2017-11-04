<?php

class View_user
{

	public function viewUser($user)
	{	
		echo 'Логин : '.$user['login'].'<br>';
		echo 'Пароль : '.$user['password'].'<br>';
		echo 'Email : '.$user['email'].'<br>';
	}
}