<?php  
include 'conecta.php';
$conn = conectadb();
// header('Content-Type: application/json');
header('Content-Type: application/json; charset=utf-8');

// ini_set('display_errors', 0);
// error_reporting(0);
// date_default_timezone_set('America/Sao_Paulo');

// $dados[] = null;

$nm = $_POST['usuario'];
$senha = $_POST['senha'];


$usuario = "SELECT nome, Id_user FROM tbuser where nome = '". $nm ."' and senha = '". $senha ."' ";
   $j1 = mysqli_query($conn, $usuario);


if(mysqli_num_rows($j1) > 0 ){

   foreach ($j1 as $ja ) {
      $nome = $ja['nome'];
      $id = $ja['Id_user'];

// echo $id;
      $dados[] = array('nome' => $nome, 'id'=> $id);
      echo json_encode($dados);
      }

}else{
   $dados[] = array('id'=> 0);
   echo json_encode($dados);
}




?>