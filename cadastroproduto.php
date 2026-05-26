<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
   <form action="consultaproduto.php" method="POST">
        Digite o nome do produto: <br/>
        <input type="text" name="cxpesquisa"/>
        <input type="submit" value="Pesquisar">
    </form>

    <form action="inserirproduto.php" method="POST">
        Produto:<br/>
        <input type="text" name="cxproduto"><br/>
        Quantidade:<br/>
        <input type="number" name="cxqtde"><br/>
        Fabricante:<br/>
        <input type="text" name="cxfabricante"/><br/>
        Lote:<br/>
        <input type="number" name="cxlote"><br/>
        <input type= "submit" value="Gravar produto">
</form>
</body>
</html>