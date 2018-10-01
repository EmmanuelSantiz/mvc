<?php

class App {

	private $url = '';

	function __construct() {
		$this->url = $_GET['url'];
		$this->url = rtrim($this->url, '/');
		$this->url = explode('/', $this->url);

		$archivoController = 'controllers/'.$this->url[0].'.php';

		if (file_exists($archivoController)) {
			require_once $archivoController;

			$controller = new $this->url[0];

			if (isset($this->url[1])) {
				$controller->{$this->url[1]}();
			} else {
				$controller->index();
			}
		} else {
			echo 'Error';
		}
	}
}
?>