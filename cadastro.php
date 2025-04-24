<?php  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
   
    $nome = isset($_POST['nome']) ? $_POST['nome'] : null;  
    $email = isset($_POST['email']) ? $_POST['email'] : null;  
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : null;  
    $senha = isset($_POST['senha']) ? $_POST['senha'] : null;  


    echo "Nome: $nome Email: $email, Telefone: $telefone, Senha: $senha";  

    
}  
?>  


