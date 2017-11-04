<?php

class Model_enter
{
	public function enter($data)
	{
		if(isset($data['enter']))
		{
			$login = $data['login'];
			$password = $data['password'];

			if(empty($login) || empty($password))
			{
				$error_string = 'Заполните все поля!';
			}

			if(isset($error_string))
			{
				return $error_string;
			}
			else
			{
				require_once"php/dataBase/bd.php";

				$user = R::findOne('user','login = ?',array($login));

				if($user)
				{
					if(password_verify($password,$user['password']))
					{	
						$_SESSION['id'] = $user['id'];
						return 'Вы вошли!';
					}
					else
					{
						echo 'Не верный пароль';
					}
				}
				else
				{
					return 'Пользователь с таким логином не существует!';
				}
			}
		}
	}
}