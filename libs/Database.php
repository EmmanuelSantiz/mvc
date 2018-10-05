<?php

/**
 * Database
 */
class Database {

	private $host;
	private $bd;
	private $user;
	private $password;
	private $charset;
	
	public function __construct() {
		$this->host = constant('host');
		$this->bd = constant('bd');
		$this->user = constant('user');
		$this->password = constant('password');
		$this->charset = constant('charset');
	}

	public function connect() {
		try {
			$conn = 'mysql:host='.$this->host.';dbname='.$this->bd.';charset'.$this->charset;
			$option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => FALSE);

			$pdo = new PDO($conn, $this->user, $this->password, $option);

			return $pdo;
		} catch(PDOExeption $e) {
			print_r($e->getMessage());
		}
	}
}
?>