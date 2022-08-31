<?php
require_once'models.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Azul ou Vermelha?</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
 <!--Aqui ficará o form de cadastro-->
 <div>
   <form method="POST" action="process.php"> 
   <div>
    <label>Nome: *</label>
    <input type="text" name="f_nome" placeholder="Digite seu nome aqui!" required>
  </div>
  <div>
        <label>Email: *</label>
        <input type="email" name="f_email" placeholder="Insira o seu Email aqui" required>
    </div> 
  <div>
    <label>Senha: *</label>
    <input type="password" name="f_senha" placeholder="Coloque a senha aqui!" required>
  </div>
   
  <div>
  <button type="submit" name="Submit" value="submit">Comfirmar</button>
  <button type="submit" name="delet" value="Reset">Limpar</button>
  </div>


    </form>

    
</div>
</body>
</html>