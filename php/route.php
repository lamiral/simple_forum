<?php

class Route
{
	public static function start($url)
	{
		$controller  = 'index';
		$action = 'index';

		$routes = explode('/', $url);

		if(!empty($routes[0]))
		{
			$controller = $routes[0];
		}

		if(!empty($routes[1]))
		{
			$action = $routes[1];
		}
		else
		{
			$action = $controller;
		}

		if(!empty($routes[2]))
		{
			$action_param = $routes[2];
		}

		$controller = 'Controller_'.$controller;
		$controller_name = 'php/controller/'.$controller.'.php';	

		if(file_exists($controller_name))
		{
			require_once $controller_name;

			$_controller = new $controller();

			if(method_exists($_controller,$action))
			{
				if(isset($action_param))
				{
					$_controller->$action($action_param);
				}
				else
				{
					$_controller->$action();
				}

			}
			else
			{
				echo 'page 404';
			}
		}
		else
		{
			echo 'page 404';
		}
	}
}