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
$dbFunctions->inserirUsuario($nome,$email,$hash);

?>
</body>
</html>