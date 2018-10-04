<?php
class View {
	
	public $parametros;

	function __construct() {
		$this->parametros = array();
	}

	public function render($nombre, $parametros = array()) {
		$this->parametros = $parametros;
		require 'views/'.$nombre.'.php';
	}

	public function template($nombre, $parametros = array()) {
		$this->parametros = $parametros;
		require 'views/header.php';
		require 'views/'.$nombre.'.php';
		require 'views/footer.php';
	}
}
?>