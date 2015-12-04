<?php

require ('sys/Request.php');

class Main{

	static private $controller;
	static private $action;

	static function init(){
		// recuperar la request
		//echo $_SERVER['REQUEST_URI'];
		// extract all the components un URI
		Request::retrieve();

		$controller=Request::getCont();
		self::$controller=$controller;
		Coder::code($controller);

		$action=Request::getAct();
		self::$action=$action;
		Coder::code($action);

		$params=Request::getParams();
		//Coder::codear($params);
		self::router();
	}

	static function router(){
		/*
		echo "Hola me llamo Pedro y estoy probando la function router";
		Coder::code(self::$controller);
		Coder::code(self::$action);
		*/
		// if exists the controller then make and instance of controller
		$contr_call=(self::$controller!="")?self::$controller:'Home';
		$action_call=(self::$action!="")?self::$action:'Home';
		$filename=$contr_call.'.php';
		$filecontroller=APP.'controllers'.DS.ucfirst($filename);
		Coder::code(self::$controller);
		Coder::code(self::$action);
		
		if(is_readable($filecontroller)){
			$cont = new $contr_call();
			//check if action is an object method
			if(is_callable(array($cont,$action_call))){
				call_user_func(array($cont,$action_call));
			}
			//Coder::codear($cont);
			else{
				// no function
				echo 'No action!';
			}
		}else{
			// no function
			echo 'No controller!';
		}
	}

}

?>