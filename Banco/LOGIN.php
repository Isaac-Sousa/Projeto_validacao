<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="styleL.css">
</head>
<body>
 <!--Aqui ficará o form de cadastro-->
 <div class="caixa"> 

   <form method="POST" action="process.php"> 
     <fieldset>
      <legend><b>Formulário de Login</b></legend>
    <br>
    <div class="inputBox">
    <input type="text" name="f_nome" required class="inputuser">
    <label class="Luser">Nome: </label>
  </div>
  <br><br>
  <div class="inputBox">
        <input type="text" name="f_email" required class="inputuser">
        <label class="Luser">Email: </label>
    </div>
    <br><br> 
  <div class="inputBox">
    <input type="password" name="f_senha" required class="inputuser">
    <label class="Luser">Senha:</label>
  </div>
  <div class="btns">
    <button class="b1" type="submit" name="SUB_login">Enviar</button>
    <button class="b2" type="reset" name="DEL_login">Limpar</button>
   </div>
<h1>Todos os campos são obrigatórios</h1>

  </fieldset>
    </form>
</div>
<a href="CADASTRO.php">Não tem uma conta ainda?</a>

<?php

/*session_start();
$_SESSION['nome']=$_POST['f_nome'];
$_SESSION['email']=$_POST['f_email'];
exit;*/
?>

</body>
</html>