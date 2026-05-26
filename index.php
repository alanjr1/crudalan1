<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Geral</title>
</head>
<body>
    <form action="consultacliente.php" method="POST">
        Digite um nome completo: <br/>
        <input type="text" name="cxpesquisa"/>
        <input type="submit" value="Pesquisar">
    </form>

    <form action="inserircliente.php" method="POST">
        Nome:<br/>
        <input type="text" name="cxnome"><br/>
        Idade:<br/>
        <input type="text" name="cxidade"><br/>
        E-mail:<br/>
        <input type="text" name="cxemail"/><br/>
        <input type="submit" value="Gravar"/>

    </form>    
</body>
</html>