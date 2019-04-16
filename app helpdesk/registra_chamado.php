<?php  
$texto = $_POST;
$texto = implode('#', $texto);
$texto = $texto .PHP_EOL;
$arquivo = fopen('arquivo.txt', 'a');
fwrite($arquivo, $texto);
fclose($arquivo);
header('Location:abrir_chamado.php');



?>