<?php
       include_once "factory/conexao.php";
       $cod=$_GET["id"];    
       $consulta = "select *from tbcliente where codigo = '$cod' ";
       $executar = mysqli_query($conn,$consulta);
       $campos = mysqli_fetch_array($executar); 
   ?>   
   <form action="alterarcliente.php" method="POST">
   Código:<br/>
   <input type="text" name= "cxid" value="<?php echo $campos['codigo']?>" disabled/><br/> 
       Nome:<br/>
       <input type="text" name="cxnome" value="<?php echo $campos['nome']?>"/><br/>
       Idade:<br/>
    <input type="text" name="cxidade" value="<?php echo $campos['idade']?>"/><br/>
       E-mail:<br/>
       <input type="text" name="cxemail" value="<?php echo $campos['email']?>"/><br/>
         <input type="submit" value="Alterar"/>
    </form>
    
    