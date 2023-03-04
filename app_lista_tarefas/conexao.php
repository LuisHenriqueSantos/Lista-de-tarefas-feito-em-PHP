<?php

class Conexao {

	private $host = 'localhost';
	private $dbname = 'bd_to_do_list';
	private $user = 'root';
	private $pass = '';

	// Estava Asse nome de banco antes
	#private $dbname = 'php_com_pdo';

	public function conectar() {
		try {

			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);

			return $conexao;


		} catch (PDOException $e) {
			echo '<p>'.$e->getMessage().'</p>';
		}
	}
}

?>