<?php

class Model_register
{
	public function register($data)
	{	
		if(isset($data['register']))
		{
			$login = htmlspecialchars(trim($data['login']));
			$password = htmlspecialchars(trim($data['password']));
			$repassword = htmlspecialchars(trim($data['repassword']));
			$email = htmlspecialchars(trim($data['email']));

			if(empty($login) || empty($password) || empty($repassword) || empty($email))
			{
				$error_string = "Заполните все поля";
			}
			else if($password != $repassword)
			{
				$error_string = "Пароли не совпадают";
			}
			else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				$error_string = "Введите корректный email";
			}
			else if(strlen($password) < 6)
			{
				$error_string = "Пароль должен быть больше 6 символов";
			}
			else if(strlen($login) < 6 || strlen($login) > 25)
			{
				$error_string = "Логин должен быть больше 25 и меньше 6 символов";
			}

			if(isset($error_string))
			{
				return $error_string;
			}
			else
			{
				require_once"php/dataBase/bd.php";

				$find_user = R::findOne('user','login = ?',array($login));

				if($find_user)
				{
					return 'Пользователь с таким логином уже существует';
				}
				else
				{
					$password = password_hash($password,PASSWORD_DEFAULT);

					$user = R::dispense('user');

					$user->login = $login;
					$user->password = $password;
					$user->email = $email;

					R::store($user);

					return "<span style='color:green'>Успешная регистрация!</span>";
				}
			}
		}
	}
}