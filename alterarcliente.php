<?php
    include_once "factory/conexao.php";
    
    $id = $_POST["cxid"];
    $nome = $_POST["cxnome"];
    $idade = $_POST["cxidade"];
    $email = $_POST["cxemail"];

$alterar = "UPDATE tbcliente SET
codigo = '$id',
nome = '$nome',
idade = '$idade',
email = '$email'
where codigo = '$id'";

$executar = mysqli_query($conn,$alterar); 
if($executar == true){
    echo "
        <script>
            alert('Cliente alterado com sucesso');
            window.location.href = 'index.php';
        </script>
    
    ";
    }else{
        echo "erro de conexão";
    }
    ?>