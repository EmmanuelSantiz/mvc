<?php
/**
 * 
 */
class UsuariosModel extends Model {
	
	public function __construct() {
		parent::__construct();
	}

	public function getAll() {
		$query = $this->db->connect()->prepare('SELECT * FROM cat_usuarios');
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function get($id_usuario) {
		$query = $this->db->connect()->prepare('SELECT * FROM cat_usuarios WHERE id_usuario = :id_usuario');
		$query->execute(array('id_usuario' => $id_usuario));
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	public function borrar($id_usuario) {
		$query = $this->db->connect()->prepare('DELETE FROM cat_usuarios WHERE id_usuario = :id_usuario');
		return $query->execute(array('id_usuario' => $id_usuario));
	}

	public function editar($array = array()) {
		$query = $this->db->connect()->prepare('UPDATE cat_usuarios SET char_usuario = :char_usuario,
			char_ape_pat = :char_ape_pat,
			char_ape_mat = :char_ape_mat WHERE id_usuario = :id_usuario');
		$query->execute(array('id_usuario' => $array['id_usuario'],
			'char_usuario' => $array['char_usuario'],
			'char_ape_pat' => $array['char_ape_pat'],
			'char_ape_mat' => $array['char_ape_mat']));
		return $query->rowCount();
	}

	/*public function insert($array) {
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
	}*/
}
?>