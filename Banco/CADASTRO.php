<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cadastro</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="styleR.css">
</head>
<body>
 <!--Aqui ficará o form de cadastro-->
 <div class="caixa"> 

   <form method="POST" action="process.php"> 
     <fieldset>
      <legend><b>Formulário de Cadastro</b></legend>
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
    <button class="b1" type="submit" id="register" name="SUB_register">Enviar</button>
    <button class="b2" type="reset" id="delet" name="DEL_register">Limpar</button>
   </div>
<h1>Todos os campos são obrigatórios</h1>
  </fieldset>
       <p> </p>
       <a href="LOGIN.php">Já tem uma conta ainda?</a>
    </form>
</div>
</body>
</html>