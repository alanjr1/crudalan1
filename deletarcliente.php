<?php
    include_once "factory/conexao.php";
    $cod = $_GET["id"];
    $excluir = "delete from tbcliente where codigo = '$cod'";
    $executar = mysqli_query($conn,$excluir);
    if($executar==true){
        echo "
            <script>
                alert('Cliente excluido com sucesso');
                window.location.href='index.php';
            </script>
        
        ";
    }else{
        echo "Erro de conexão com o banco, 404";
    }
    ?>