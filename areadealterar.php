<?php
       include_once "factory/conexao.php";
       $cod=$_GET["id"];    
       $consulta = "select *from tbcliente where codigo = '$cod' ";
       $executar = mysqli_query($conn,$consulta);
       $campos = mysqli_fetch_array($executar); 
   ?>   
   <form action="" method="POST">
   Código:<br/>
   <input type="text" value="<?php echo $campos['codigo']?>" disabled/><br/> 
       Nome:<br/>
       <input type="text" value="<?php echo $campos['nome']?>"/><br/>
       Idade:<br/>
       <input type="text" value="<?php echo $campos['idade']?>"/><br/>
       E-mail:<br/>
       <input type="text" value="<?php echo $campos['email']?>"/><br/>
         <input type="submit" value="Alterar"/>
    </form>
    
    