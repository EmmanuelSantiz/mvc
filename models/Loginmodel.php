<?php
/**
 * 
 */
class LoginModel extends Model {
	
	public function __construct() {
		parent::__construct();
	}

	public function get($array = array()) {
		$query = $this->db->connect()->prepare('SELECT * FROM cat_usuarios WHERE char_usuario = :char_usuario AND char_password = :char_password');
		$query->execute(array('char_usuario' => $array['char_usuario'], 'char_password' => MD5($array['char_password'])));
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	public function insert($array) {
		try {
			$query = $this->db->connect()->prepare('INSERT INTO cat_usuarios(id_usuario, char_usuario, char_password, date_fecha) VALUES(null, :char_usuario, :char_password, :date_fecha)');
			$query->execute(array('char_usuario' => $array['char_usuario'], 'char_password' => MD5($array['char_password']), 'date_fecha' => date('Y-m-d')));
			if ($query) {
				return $this->db->connect()->lastInsertId();
			} else {
				return 'Error';
			}
			
		} catch(PDOExecption $e) {
			return $e->getMessage();
		}
	}
}
?>