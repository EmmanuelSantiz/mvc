<?php
class Main extends Controller {
	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->view->template('main/index');
	}

	public function prueba() {
		echo 'Hola a todos desde Mvc';
	}
}
?>