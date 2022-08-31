<html>
  <head></head>
  <body>
<?php
include_once("models.php");
if(isset($_POST['Submit'])){ 
 Inserir();
}
include_once('delet.php');
if(isset($_POST['delet'])){  
 Deletar();
}
include_once 'Valid_Conn.php';

/*
if(isset($_POST['Submit'])){
    $nome = $_POST["f_nome"];
    $email = $_POST["f_email"];
    $senha = $_POST["f_senha"];
    $hash = password_hash($senha,PASSWORD_BCRYPT,array('cost'=>10));
    $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE Nome_user = '$nome' OR Email_user = '$email'");
    if(mysqli_num_rows($duplicate)> 0 ){
      echo "<script>alert('Usuário ou Email já cadastrado!')</script>";
    }
    else{
    $conn->query("INSERT INTO user (Nome_user, Email_user, Senha_user) VALUES('$nome','$email','$senha')") OR die($mysqli->error);
    echo "<script>alert('Usuer cadastrado!')</script>";  
  }
}
require 'delet.php';
*/
?>
</body>
</html>