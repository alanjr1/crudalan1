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
                 window.location.href = 'index.php';   
              </script>
           ";
       }
   
   ?>   
       Nome:<br/>
       <input type="text" value="<?php echo $campos['nome']?>"/><br/>
       Idade:<br/>
       <input type="text" value="<?php echo $campos['idade']?>"><br/>
       E-mail:<br/>
       <input type="text" value="<?php echo $campos['email']?>"><br/>

    <?php   
    }else{
        echo "
            <script>
                alert('Campo em branco, digite um nome');
                window.location.href='index.php';
            </script>
        
        ";
    }
?>