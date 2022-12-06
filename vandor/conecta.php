<?php
//Conecta no banco de dados
function conectadb() {

	error_reporting(E_ALL^E_DEPRECATED);
	$servidor = "localhost";
	$usuario  = "root";
	$senha    = "";
	$db = "chocopaty";

	$dbcon =  mysqlI_connect($servidor, $usuario, $senha, $db);
	if (!$dbcon) {
		echo 'erro de conexão';
		exit;
	}
	mysqli_set_charset($dbcon , 'utf8');
	return $dbcon;
	
}

// Desconecta do banco de dados | $conn é a váriavel de conexão
function desconectadb($conn) {
	$close = mysqli_close($conn);
	if (!$close) {
		echo 'erro de conexão';
	} else {
		return true;
		
	}

}










?>