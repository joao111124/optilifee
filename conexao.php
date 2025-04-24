<?php  
$servername = "localhost";  
$username = "root";
$password = "123456"; 
$dbname = "cadastro";

$conexao = new mysqli($servername, $username, $password, $dbname);  


if ($conexao->connect_error) {  
    die("Erro na conexão: " . $conexao->connect_error);  
}  
?>  