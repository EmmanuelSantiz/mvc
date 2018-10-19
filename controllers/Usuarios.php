<?php
class Usuarios extends Controller {
	function __construct() {
		parent::__construct();
		$this->loadModel('Usuarios');
	}

	public function index() {
		if (!isset($_SESSION['id_usuario'])) {
			redirect();
		} else {
			$respuesta['usuarios'] = $this->Model->getAll();
			//dd($respuesta);
			$this->view->template('usuarios/index', $respuesta);
		}
	}

	public function borrar() {
		if(isAjax()) {
			$respuesta['post'] = $_POST;
			$respuesta['data'] = $this->Model->borrar($respuesta['post']['id_usuario']);
			echo retornoJson($respuesta);
		}
	}
}

?>