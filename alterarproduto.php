<?php
    include_once "factory/conexao.php";
    
    $id = $_POST["cxid"];
    $produto = $_POST["cxproduto"];
    $qtde = $_POST["cxqtde"];
    $fabricante = $_POST["cxfabricante"];
    $lote = $_POST["cxlote"];

$alterar = "UPDATE tbproduto SET
codigo = '$id',
produto = '$produto',
qtde = '$qtde',
fabricante = '$fabricante',
lote = '$lote'
where codigo = '$id'";

$executar = mysqli_query($conn,$alterar); 
if($executar == true){
    echo "
        <script>
            alert('Produto alterado com sucesso');
            window.location.href = 'cadastroproduto.php';
        </script>
    
    ";
    }else{
        echo "erro de conexão";
    }
    ?>