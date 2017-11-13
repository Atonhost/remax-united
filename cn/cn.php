<?php 
$Servidor = "localhost";
$Usuario = "remaxuni_root";
$Clave = "@_sodedeh22";
$BaseDatos = "remaxuni_intra";
// Create connection
$conn = new mysqli($Servidor, $Usuario, $Clave, $BaseDatos);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
