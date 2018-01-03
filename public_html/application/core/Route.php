<?php


class Route
{
	static function start()
	{
		//mysite.dev/segment_1/segment_2
		$segments = explode('/', $_SERVER['REQUEST_URI']);

		$controllerName = 'Main';
		$actionName = 'index';
        $id;

		if(!empty($segments[1])){
            $string= htmlspecialchars(strtolower($segments[1]));
            $string = mb_convert_case($string, MB_CASE_TITLE, "UTF-8");
			$controllerName = $string;

			if(!empty($segments[2])){
			    $string = htmlspecialchars(strtolower($segments[2]));
				$actionName = $string;

                if(!empty($segments[3])){
                    $string = htmlspecialchars( (int) $segments[3] );
                    $id = $string;
                }
			}
		}

		$modelFile = 'Model_'.$controllerName;
		$controllerFile = 'Controller_'.$controllerName;
		$actionName = 'action_'.$actionName;

		$modelPath = 'application/models/' . $modelFile . 'php';
		if (file_exists($modelPath)){
		    include $modelPath;
        }

		$controllerPath = 'application/controllers/' . $controllerFile . '.php';
		if(file_exists($controllerPath)){
			require_once $controllerPath;
		}else{
			Route::errorPage404();
		}

		$controller = new $controllerFile();
		 if (method_exists($controller, $actionName))
         {
             if (!empty ($id))
             {
                 $controller->$actionName($id);
             }else
             {
                 $controller->$actionName();
             }
         }else
         {
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
/*Добавляем функционал, чтобы (любой)контроллер вызывался независимо от регистра букв.
(mAin, main, MAIN во всех случаях должен быть вызван контроллер Main)*/