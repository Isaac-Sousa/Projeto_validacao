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
    <form action="naosei.php" method="post">
       <div>
        <label>Nome: *</label>
       <input type="text" name="f_nome" placeholder="Digite seu nome aqui!" required> 
      </div>
      <div>
        <label>Senha: *</label>
        <input type="password" name="f_senha" placeholder="Coloque a senha aqui!" required>
      </div>
      <div>
        <button type="submit" name="b1_enviar" value="Confirmar">Confirmar</button>
      </div>
    </form>
<?php

$nome=filter_input(INPUT_POST,"f_nome",FILTER_SANITIZE_STRING);
$senha=filter_input(INPUT_POST,"f_senha",FILTER_SANITIZE_SPECIAL_CHARS);
include("naosei.php");
//<input type="submit" name="Submeter" value="Confirmar">

?>
</body>
</html>