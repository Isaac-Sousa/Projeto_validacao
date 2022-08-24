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
include_once("array.php");
foreach($arrValidUser as $user => $pass){
    $login = ($user === $nome && $pass === $senha) ? true : false;
    $L_invalid = ($user != $nome && $pass === $senha || $user === $nome && $pass != $senha) ? true : false;
    $L_Dont_Exist =($user != $nome && $pass != $senha);
    if($login)break;
    if($L_invalid)break;
}
if ($login = true)  {
  echo "<h2> <script>alert('OLÁ, seu user é valido')</script> </h2> <br>";
} elseif ($$L_invalid = true) {
  echo "<h2> <script>alert('Usuário ou senha inválidos')</script> </h2> <br>";
  echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/login.php"</script>';
} elseif ($L_Dont_Exist = true) {
  echo "<h2> <script>alert('Usuário inexistente')</script> </h2> <br>";
  echo "<h2> <script>alert('Logue com um usuário existente!')</script> </h2> <br>";
  echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/login.php"</script>';
} else {
  echo "<h2> <script>alert('Aguardando as informações')</script> </h2> <br>";
}

?>
<?php
//Bloco removido para teste
//&& $senha !=" " && $nome != " "
// Bloco substituido pelo ou; or (||)
//elseif ($senha != "Dev21" && $nome == "Isaac") {//echo "<h2> <script>alert('Usuário ou senha inválidos')</script> </h2> <br>";}
?>
</body>
</html>