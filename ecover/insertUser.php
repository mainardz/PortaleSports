<?php
include_once("conexaoBD.php");

$username = 'Allan';
$password = '123455';


$sql = "INSERT INTO user(username,password)
VALUES ('allan','dsadadas')";

if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();


?>