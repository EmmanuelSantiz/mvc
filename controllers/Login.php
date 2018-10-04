<?php
class Login extends Controller {
	function __construct() {
		parent::__construct();
	}

	public function index() {
		if(isAjax()) {
			$respuesta['post'] = $_REQUEST;
			return retornoJson($respuesta)
		}
	}
}
?>