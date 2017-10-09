<?php

class AleEagleDAO{
	
	private $pdo;

	public function __construct () {
		try {
			$this->pdo = new PDO('mysql:host=127.0.0.1;dbname=aleeagle','root','');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e) {
			echo "Houston, tenemos un problema: " . $e->getMessage();
			die();
		}
	}

	protected function getPDO() {
		return $this->pdo;
	}

}



	

?>