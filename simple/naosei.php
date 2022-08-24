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
  echo "<h2> <script>alert('OLÁ, seu user é valido')</script> </h2> <br>";
} elseif ($senha == "Dev21" && $nome != "Isaac") {
  echo "<h2> <script>alert('Usuário ou senha inválidos')</script> </h2> <br>";
} elseif ($senha != "Dev21" && $nome == "Isaac") {
  echo "<h2> <script>alert('Usuário ou senha inválidos')</script> </h2> <br>";
  echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/simple/naofoi.php";</script>';
} elseif ($senha = " " && $nome = " ") {
  echo "<h2> <script>alert('Usuário inexistente')</script> </h2> <br>";
  echo "<h2> <script>alert('Logue com um usuário existente!')</script> </h2> <br>";
  echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/simple/naofoi.php";</script>';
} else {
  echo "<h2> <script>alert('Aguardando as informações')</script> </h2> <br>";
}
?>
</body>
</html>