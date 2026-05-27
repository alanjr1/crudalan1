<?php
    if($_POST["cxpesquisa"] != ""){
       include_once "factory/conexao.php";
       $nome = $_POST["cxpesquisa"];
       $consulta = "select *from tbprofessor where professor = '$nome' ";
       $executar = mysqli_query($conn,$consulta);
       $campos = mysqli_fetch_array($executar); 
       if($campos==true){
           echo "<script>alert('Dados localizados com suce..')</script>";
       }else{
           echo "
              <script>
                 alert('Dados não localizados');
                 window.location.href = 'cadprofessor.php';   
              </script>
           ";
       }
   
   ?>   
       Professor:<br/>
       <input type="text" value="<?php echo $campos['professor']?>"/><br/>
       Matéria:<br/>
       <input type="text" value="<?php echo $campos['materia']?>"><br/>
       Curso:<br/>
       <input type="text" value="<?php echo $campos['curso']?>"><br/>

    <?php   
    }else{
        echo "
            <script>
                alert('Campo em branco, digite um nome');
                window.location.href='cadprofessor.php';
            </script>
        
        ";
    }
?>
<a href="deletarprofessor.php?id=<?php echo $campos['codigo']; ?>">Excluir</a>
<a href="areadealterarprofessor.php?id=<?php echo $campos['codigo']; ?>">Alterar</a>