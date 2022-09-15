<html>
  <head></head>
  <body>
<?php

require_once 'DbFunctions.php';

$dbFunctions = new DbFunctions();

$nome = $_POST["f_nome"];
$email = $_POST["f_email"];
$senha = $_POST["f_senha"];
$hash = password_hash($senha, PASSWORD_BCRYPT, array('cost' => 8));
if(isset($_POST['SUB_register'])) {
    $dbFunctions->inserirUsuario($nome, $email, $hash);
}if(isset($_POST['SUB_login'])) {
    $dbFunctions->validSenha($nome, $email, $senha);

}


?>
</body>
</html>