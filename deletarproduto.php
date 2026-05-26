<?php
    include_once "factory/conexao.php";
    $cod = $_GET["id"];
    $excluir = "delete from tbproduto where codigo = '$cod'";
    $executar = mysqli_query($conn,$excluir);
    if($executar==true){
        echo "
            <script>
                alert('Produto excluido com sucesso');
                window.location.href='cadastroproduto.php';
            </script>
        
        ";
    }else{
        echo "Erro de conexão com o banco, 404";
    }
    ?>