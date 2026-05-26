<?php
if($_POST["cxproduto"] != ""){
        include_once "factory/conexao.php"; 
$produto = $_POST["cxproduto"];
$qtde = $_POST["cxqtde"];
$fabricante = $_POST["cxfabricante"];
$lote = $_POST["cxlote"];
$sql = "insert into tbproduto
(produto,qtde,fabricante,lote)
values
('$produto','$qtde','$fabricante','$lote')";
$query = mysqli_query($conn,$sql);
echo "
   <script>
        alert('Produto cadastrado com sucesso');
        window.location.href = 'cadastroproduto.php';
        </script>";
        
}     
else{
        echo "Campo em branco, digite o nome do produto";
}

?>