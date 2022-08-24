<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form-Login </title>
</head>
<body>
<header>
  <nav>
    <a href="#">AQUI</a>
  </nav>
</header>
<form action="dados.php" method="post">
  <div>
    <label>Nome: *</label>
    <input type="text" name="f_nome" placeholder="Digite seu nome aqui!" required>
  </div>
  <div>
    <label>Senha: *</label>
    <input type="password" name="f_senha" placeholder="Coloque a senha aqui!" required>
  </div>
  <div>
    <input type="submit" name="Submeter" value="Confirmar">
  </div>
</form>
<?php
// Ele pede acesso ao dados, caso o requerimento gere o resultado esperado ele vai mostrar os dados, em caso de senha ou user errados, 
//retorna um aviso e volta para cá e em casos de inexistencia de user um aviso previo e volta pra cá
//
?>
</body>
</html>