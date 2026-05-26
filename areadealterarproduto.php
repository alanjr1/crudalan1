<?php
       include_once "factory/conexao.php";
       $cod=$_GET["id"];    
       $consulta = "select *from tbproduto where codigo = '$cod' ";
       $executar = mysqli_query($conn,$consulta);
       $campos = mysqli_fetch_array($executar); 
   ?>   
   <form action="alterarproduto.php" method="POST">
<input type="hidden" name="cxid" value="<?php echo $campos['codigo']?>"/>
Código:<br/>
<input type="text" value="<?php echo $campos['codigo']?>" disabled/><br/>
       Produto:<br/>
       <input type="text" name="cxproduto" value="<?php echo $campos['produto']?>"/><br/>
       Qtde:<br/>
    <input type="text" name="cxqtde" value="<?php echo $campos['qtde']?>"/><br/>
       Fabricante:<br/>
       <input type="text" name="cxfabricante" value="<?php echo $campos['fabricante']?>"/><br/>
       Lote:<br/>
       <input type="text" name="cxlote" value="<?php echo $campos['lote']?>"/><br/>
         <input type="submit" value="Alterar"/>
    </form>
    
    