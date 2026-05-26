<?php
if($_POST["cxprof"] != ""){
    include_once "factory/conexao.php";
    $professor  = $_POST["cxprof"];
    $materia = $_POST["cxmateria"];
    $curso = $_POST["cxcurso"];

    $sql = "insert into tbprofessor
    (professor,materia,curso)
    values
    ('$professor','$materia','$curso')";
    $query = mysqli_query($conn,$sql);
    echo "
        <script>
             alert('professor cadastrado com sucesso');   
             window.location.href = 'cadprofessor.php';
        </script>";
 }
else{
       echo "Campo em branco, digite um nome";
}
?>