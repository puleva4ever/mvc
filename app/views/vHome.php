<?php

class vHome extends View{

	function __construct(){
		parent::__construct();
		//echo 'vista creada';

		$this->template = Template::load("homepage");

	}

}

?>