<html>
  <head></head>
  <body>
<?php
//    $conn = new mysqli('localhost','root','root','test_bd') or die (mysqli_error($conn));
//    $nome = $_POST["f_nome"];
//    $email = $_POST["f_email"];
//    $senha = $_POST["f_senha"];
//if (isset($_POST['Submit'])) {
//  $conn = new mysqli('localhost','root','root','test_bd') or die (mysqli_error($conn));
//  $nome = $_POST["f_nome"];
//  $email = $_POST["f_email"];
//  $senha = $_POST["f_senha"];
//      $hash = password_hash($senha,PASSWORD_BCRYPT,array('cost'=>10));
//      $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE Nome_user = '$nome' OR Email_user = '$email'");
//      if(mysqli_num_rows($duplicate)>0 ){
//        echo "<script>alert('Usuário ou Email já cadastrado!')</script>";}
//
//      else{
//      $conn->query("INSERT INTO user (Nome_user, Email_user, Senha_user) VALUES('$nome','$email','$hash')") OR die($mysqli->error);
//      echo "<script>alert('User cadastrado!')</script>";
//      }
//}
//require('delet.php');

require_once 'DbFunctions.php';

$dbFunctions = new DbFunctions();

$nome = $_POST["f_nome"];
$email = $_POST["f_email"];
$senha = $_POST["f_senha"];

$dbFunctions->inserirUsuario($nome,$email,$senha);

?>
</body>
</html>