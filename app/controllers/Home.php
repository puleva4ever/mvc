<?php

class Home extends Controller{

	protected $model;
	protected $view;

	function __construct(){
		parent::__construct();
		$this->model=new mHome();
		$this->view=new vHome();
		//echo 'Hello controller!!!!!1';
	}
	
	function home(){
		//echo "I'm the action!";
	}
}

?>