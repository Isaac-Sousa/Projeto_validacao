
<html>
 <head>
    <title>ValidacaoR</title>
 </head>   
<body>  
<?php

echo "alo";
$nome = $_POST['f_nome'];
$email = $_POST['f_email'];
$senha =$_POST['f_senha'];

echo $nome;

include_once('conexao.php');

   $sql = "INSERT INTO user ('Nome_user', 'Email_user', 'Senha_user') VALUES ('$nome','$email','$senha');";
//    $sql = "SELECT * FROM user;";

   $result = $mysqli->query($sql);
   echo "Error: " . $sql . "<br>" . $mysqli->error;
   $lines = mysqli_affected_rows($mysqli); 
   echo "<h2> teste <br>";
   echo $sql;
   var_dump ($result);
   if($lines == 1){
    echo "<h2> <script>alert('Usuário registrado com sucesso')</script> </h2> <br>";
    // echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/login.php"</script>';
   }else{
    echo "<h2> <script>alert('Falha ao registrar')</script> </h2> <br>";
    // echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/cadastro.html"</script>';
   }
   $mysqli->close();

  
  //echo "<h2> <script>alert('Usuário/Senha inválidos ou Inexistentes')</script> </h2> <br>";
  //echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/cadastro.html"</script>';

?>
</body>  