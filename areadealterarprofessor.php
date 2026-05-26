<?php
       include_once "factory/conexao.php";
       $cod=$_GET["id"];    
       $consulta = "select *from tbprofessor where codigo = '$cod' ";
       $executar = mysqli_query($conn,$consulta);
       $campos = mysqli_fetch_array($executar); 
   ?>   
   <form action="alterarprofessor.php" method="POST">
<input type="hidden" name="cxid" value="<?php echo $campos['codigo']?>"/>
Código:<br/>
<input type="text" value="<?php echo $campos['codigo']?>" disabled/><br/>
       Professor:<br/>
       <input type="text" name="cxprof" value="<?php echo $campos['professor']?>"/><br/>
       Matéria:<br/>
       <input type="text" name="cxmateria" value="<?php echo $campos['materia']?>"/><br/>
       Curso:<br/>
       <input type="text" name="cxcurso" value="<?php echo $campos['curso']?>"/><br/>
         <input type="submit" value="Alterar"/>
    </form>
    
    