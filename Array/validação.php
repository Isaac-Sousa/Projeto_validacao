<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>infos</title>
</head>
<body>
<?php
$nome = $_POST["f_nome"];
$senha = $_POST["f_senha"];
include_once("array.php");

if ($login === true)  {
  echo "<h2> <script>alert('OLÁ, seu user é valido')</script> </h2> <br>";
}
else {
  echo "<h2> <script>alert('Usuário/Senha inválidos ou Inexistentes')</script> </h2> <br>";
  echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/login.php"</script>';
}
?>
<?php
//Bloco removido para teste
//&& $senha !=" " && $nome != " "
// Bloco substituido pelo ou; or (||)
//elseif ($senha != "Dev21" && $nome == "Isaac") {//echo "<h2> <script>alert('Usuário ou senha inválidos')</script> </h2> <br>";}
// BLOCO removido para teste
/*
elseif ($invalid === true ) {
  echo "<h2> <script>alert('Usuário ou senha inválidos')</script> </h2> <br>";
  echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/login.php"</script>';
}  elseif ($Dont_Exist === true) {
  echo "<h2> <script>alert('Usuário inexistente')</script> </h2> <br>";
  echo "<h2> <script>alert('Logue com um usuário existente!')</script> </h2> <br>";
  echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/login.php"</script>';
} 
*/
?>
</body>
</html>