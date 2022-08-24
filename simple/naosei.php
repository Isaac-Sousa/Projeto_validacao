<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form-Login </title>
</head>
<body>
<?php
$nome = $_POST["f_nome"];
$senha = $_POST["f_senha"];
if ($senha == "Dev21" && $nome == "Isaac") {
  echo "<h3> <script>alert('OLÁ, seu user é valido')</script> </h3> <br>";
  include("dados.php");
} elseif ($senha == "Dev21" && $nome != "Isaac") {
  echo "<h3> <script>alert('Usuário ou senha inválidos')</script> </h3> <br>";
} elseif ($senha != "Dev21" && $nome == "Isaac") {
  echo "<h3> <script>alert('Usuário ou senha inválidos')</script> </h3> <br>";
} elseif ($senha = " " && $nome = " ") {

  echo "<h3> <script>alert('Usuário inexistente')</script> </h3> <br>";
  echo '<a href="localhost:8888/Projeto_validacao/simple/function.php"></a>';
} else {
  echo "<h3> <script>alert('Aguardando as informações')</script> </h3> <br>";
}


?>
</body>
</html>