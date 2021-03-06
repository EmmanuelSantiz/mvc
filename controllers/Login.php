<?php
class Login extends Controller {
	function __construct() {
		parent::__construct();
		$this->loadModel('Login');
	}

	public function index() {
		if(isAjax()) {
			parse_str($_POST['data'], $respuesta['post']);
			$respuesta['data'] = $this->Model->insert($respuesta['post']);
			echo retornoJson($respuesta);
		}

		if ($_POST) {
			$data = $this->Model->get($_POST);
			if($data) {
				$_SESSION['id_usuario'] = $data['id_usuario'];
				$_SESSION['char_usuario'] = $data['char_usuario'];
			} else {
				$_SESSION['temp'] = true;
			}
			redirect();
			//header('Location: ' . base_url());
		}
	}

	public function logout() {
		session_destroy();
		redirect();
		//header('Location: ' . base_url());
	}
}
?>