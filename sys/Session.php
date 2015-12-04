<?php 

//session_start(); MI SESSION

class Session{

	static function init(){
		session_start();
		self::set('id',session_id());
	}

	static function set($key,$value){
		$_SESSION[$key]=$value;
	}

	static function get($key){
		if(self::if_exist($key)){
			return $_SESSION[$key];
		}else{
			return null;
		}
	}

	static function if_exist($key){
		if(array_key_exists($key,$_SESSION)){
			return true;
		}else{
			return false;
		}
	}

	static function destroy(){
		session_destroy();
	}

/* ----------------------------------------------------- MI SESSION
	static function showSession(){

		if(isset($_SESSION)){
			$_SESSION["user"] = "antonio";
			$_SESSION["pass"] = "perico69";

			echo '<br/>'.'user: '.$_SESSION["user"].'<br/>';
			echo 'pass: '.$_SESSION["pass"].'<br/>';
			echo 'session_name: '.session_name().'<br/>';
			echo 'session_id: '.session_id().'<br/>';
		}
	}
*/
}

?>