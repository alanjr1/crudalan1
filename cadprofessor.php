<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de professor</title>
</head>
<body>

<form action="consultaprofessor.php" method="POST">
        Digite um nome completo: <br/>
        <input type="text" name="cxpesquisa"/>
        <input type="submit" value="Pesquisar">
    </form>


    <form action="inserirprofessor.php" method="POST">
        Professor:<br/>
        <input type="text" name="cxprof"/><br/>
        Matéria:<br/>
        <input type="text" name="cxmateria"/><br/>
        Curso:<br/>
        <input type="text" name="cxcurso"/><br/>
        <input type="submit" value="Gravar"/>
    </form>    
</body>
</html>