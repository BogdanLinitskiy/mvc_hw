<?php


class Route
{
	static function start()
	{
		//mysite.dev/segment_1/segment_2
		$segments = explode('/', $_SERVER['REQUEST_URI']);

		$controllerName = 'Main';
		$actionName = 'index';

		if(!empty($segments[1])){
			$controllerName = $segments[1];
			if(!empty($segments[2])){
				$actionName = $segments[2];
			}
		}

		$controllerFile = 'Controller_'.$controllerName;
		$actionName = 'action_'.$actionName;

		$controllerPath = 'application/controllers/' . $controllerFile . '.php';
		if(file_exists($controllerPath)){
			require_once $controllerPath;
		}else{
			Route::errorPage404();
		}
		$controller = new $controllerFile();
		if(method_exists($controller,$actionName)){
			$controller->$actionName();
		}else{
			Route::errorPage404();
		}
	}

	static function errorPage404(){
		echo "sorry, page ot found";
		die();
	}
}
//explode превращает строку в массив
// 1arg - разделитель,2 - строка