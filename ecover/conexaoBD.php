<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '25@09l97L';
$banco = 'usuario';
// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());



$username = $_POST['username'];
$password = $_POST['password'];


$sql = "INSERT INTO user(username,password)
VALUES ('$username','$password')";

if ($mysqli->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>