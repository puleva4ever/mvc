<?php

// developer mode ON, change when finished
// errors enabled
ini_set('display_errors',1);
error_reporting(E_ALL);

include ('config.php');
require ('sys/Helper.php');


//Session::init();
//$id=Session::get('id');
//Coder::code($id);


//$conf=Registry::getInstance();

//$conf->welcome='Hola'; 	// __set()
//$msg=$conf->welcome;  	// __get()
//unset($conf->welcome);// __unset() - elimina welcome del var_dump
//Coder::code($msg);
//Coder::codear($conf);

Main::init();

//Session::showSession();
//session_destroy();

/*

*/



// crear class Registry per tenir acces
// a traves de singleton
// a la configuracion de l'aplicacio
// al ficher Config.jason de app

?>