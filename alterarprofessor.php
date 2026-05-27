<?php
    include_once "factory/conexao.php";
    
    $id = $_POST["cxid"];
    $professor = $_POST["cxprof"];
    $materia = $_POST["cxmateria"];
    $curso = $_POST["cxcurso"];

$alterar = "UPDATE tbprofessor SET
codigo = '$id',
professor = '$professor',
materia = '$materia',
curso = '$curso'
where codigo = '$id'";

$executar = mysqli_query($conn,$alterar); 
if($executar == true){
    echo "
        <script>
            alert('Professor alterado com sucesso');
            window.location.href = 'cadprofessor.php';
        </script>
    
    ";
    }else{
        echo "erro de conexão";
    }
    ?>