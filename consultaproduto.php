<?php
    if($_POST["cxpesquisa"] != ""){
       include_once "factory/conexao.php";
       $nome = $_POST["cxpesquisa"];
       $consulta = "select *from tbproduto where produto = '$nome' ";
       $executar = mysqli_query($conn,$consulta);
       $campos = mysqli_fetch_array($executar); 
       if($campos==true){
           echo "<script>alert('Dados localizados com suce..')</script>";
       }else{
           echo "
              <script>
                 alert('Dados não localizados');
                 window.location.href = 'cadastroproduto.php';   
              </script>
           ";
       }
   
   ?>   
       Produto:<br/>
       <input type="text" value="<?php echo $campos['produto']?>"/><br/>
       Qtde:<br/>
       <input type="text" value="<?php echo $campos['qtde']?>"><br/>
       Fabricante:<br/>
       <input type="text" value="<?php echo $campos['fabricante']?>"><br/>
       Lote:<br/>
       <input type="text" value="<?php echo $campos['lote']?>"><br/>

    <?php   
    }else{
        echo "
            <script>
                alert('Campo em branco, digite um nome');
                window.location.href='cadastroproduto.php';
            </script>
        
        ";
    }
?>
<a href="deletarproduto.php?id=<?php echo $campos['codigo']; ?>">Excluir</a>
<a href="areadealterarproduto.php?id=<?php echo $campos['codigo']; ?>">Alterar</a>