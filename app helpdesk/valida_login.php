<?php
session_start();

$usuarios_app = array(
array('email' => 'adm@teste.com.br','senha' => '123456'),
array('email' => 'usr@teste.com.br','senha' => 'abcd'),
);
$usuario_autenticado = false;
foreach ($usuarios_app as $user) {
	
	if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
		$usuario_autenticado = true;
	}
}
	if ($usuario_autenticado == true) {
		echo'Usuario autenticado ';
		$_SESSION['autenticado'] = 'SIM';
		header('Location: home.php');
	} else {
		$_SESSION['autenticado'] = 'NAO';
		header('Location: index.php?login=erro');

	}
	



?>