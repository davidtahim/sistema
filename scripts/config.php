<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petshop";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Erro ao conectar: ". $conn->connect_error);
}

?>