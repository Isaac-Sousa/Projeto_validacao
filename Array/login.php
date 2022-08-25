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
<form method="post" action="informações.php" >
  <div>
    <label>Nome: *</label>
    <input type="text" name="f_nome" placeholder="Digite seu nome aqui!" required>
  </div>
  <div>
    <label>Senha: *</label>
    <input type="password" name="f_senha" placeholder="Coloque a senha aqui!" required>
  </div>
  <div>
  <button type="submit" value="Submit">Comfirmar</button>
  <button type="reset" value="Reset">Limpar</button>


  </div>
</form>
</body>
</html>