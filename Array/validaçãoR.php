<?php
include_once('conexao.php');
$nome =$_POST["f_nomeR"] ;
$email =$_POST["f_emailR"];
$senha =$_POST["f_senhaR"];

   $sql = "INSERT INTO user VALUES ('$nome','$email',$senha)";
   $result = mysqli_query($mysqli,$sql);
   $lines = mysqli_affected_rows($mysqli); 
   //echo "<h2> <script>alert('')</script> </h2> <br>";
   if($lines == 1){
    echo "<h2> <script>alert('Usuário registrado com sucesso')</script> </h2> <br>";
    echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/login.php"</script>';
   }else{
    echo "<h2> <script>alert('Falha ao registrar')</script> </h2> <br>";
    echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/cadastro.html"</script>';
   }
   $mysqli->close();

  
  //echo "<h2> <script>alert('Usuário/Senha inválidos ou Inexistentes')</script> </h2> <br>";
  //echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/cadastro.html"</script>';

?>