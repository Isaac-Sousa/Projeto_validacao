<html>
  <head></head>
  <body>
<?php
session_start();
require_once 'DbFunctions.php';

$dbFunctions = new DbFunctions();

$nome = $_POST["f_nome"];
$email = $_POST["f_email"];
$senha = $_POST["f_senha"];
$_SESSION['nome']=$_POST['f_nome'];
$_SESSION['email']=$_POST['f_email'];
$hash = password_hash($senha, PASSWORD_BCRYPT, array('cost' => 8));
if(isset($_POST['SUB_register'])) {
    $dbFunctions->inserirUsuario($nome, $email, $hash);
}if(isset($_POST['SUB_login'])) {
    $dbFunctions->validSenha($nome,$email,$senha,$hash);

}
if(isset($_POST['SUB_UP'])) {
    $nome2 = $_POST["f_nomeUP"];
    $email2 = $_POST["f_emailUP"];
    $senha = $_POST["f_senhaUP"];
    $newhash = password_hash($senha, PASSWORD_BCRYPT, array('cost' => 8));
    $dbFunctions->atualizarDadosUser($nome,$email,$nome2,$email2,$newhash);
}
if(isset($_POST['Exit'])){
    //inexistente
    echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/logout.php"</script>';
}
if(isset($_POST['Change'])){
    //funcional
    echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/update.php"</script>';
}

?>
</body>
</html>