<?php

class Request{

	static private $query=array();

	static function retrieve(){
		$array_query = explode('/', $_SERVER['REQUEST_URI']);
		// exctract the first "/"
		array_shift($array_query);		
		if($array_query[0] == APP_W){
			array_shift($array_query);
		}
		if(end($array_query) == ""){
			array_pop($array_query);
		}

		self::$query = $array_query;
		//var_dump($array_query);
	}

	static function getCont(){
		return array_shift(self::$query);
	}

	static function getAct(){
		return array_shift(self::$query);
	}

	static function getParams(){
		return array_shift(self::$query);
	}

}

?>