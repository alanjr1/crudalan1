<?php
if($_POST["cxprof"] != ""){
    include_once "factory/conexao.php";
    $nome  = $_POST["cxprof"];
    $materia = $_POST["cxmateria"];
    $curso = $_POST["cxcurso"];

    $sql = "insert into tbprofessor
    (professor,materia,curso)
    values
    ('$nome','$materia','$curso')";
    $query = mysqli_query($conn,$sql);
    
    echo "
        <script>
             alert('professor cadastrado com sucesso');   
             window.location.href = 'cadprofessor.php';
        </script>";
    }
else{
       echo "Campo nome em branco digite um nome";
}
?>