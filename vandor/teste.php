<?php  
include 'conecta.php';

$conn = conectadb();



$jogador = "SELECT * FROM tbproduto";
   $j1 = mysqli_query($conn, $jogador);

   foreach ($j1 as $ja ) {
echo $ja['IdProd'];
echo $ja['nome'];
echo $ja['valor'];

echo "<br>";


// $dados[] = array('nome' => $n1 , 'foto' => $ft1, 'id'=> $id  );

}

?>