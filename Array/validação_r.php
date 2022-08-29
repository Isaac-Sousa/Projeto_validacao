<html>
   <head></head>
<body>   
<?php
require 'conexao.php';
if(isset($_POST["cadastrar"])){
  $nome = $_POST["f_nome"];
  $email = $_POST["f_email"];
  $senha = $_POST["f_senha"];
  $duplicate = mysqli_query($mysqli, "SELECT * FROM user WHERE Nome_user = '$nome' OR Email_user = '$email'");
  if(mysqli_num_rows($duplicate)> 0 ){
    echo "<script>alert('Usuário ou Email já cadastrado!')";
  }else{
    if($senha != null){
     $query = "INSERT INTO 'user' ('Nome_user','Email_user','Senha_user') VALUES('$nome','$email','$senha')";
     mysqli_query($mysqli,$query);
     echo "<script>alert('Seu cadastro foi concluido!')";
  } else{
     echo "<script>alert('Senha não válida')";
   }
 }
}
if(!isset($_POST['cadastrar'])){
   echo "<script>alert('O submit não tá indo')";
}
echo "<script>alert('Não ta mandando as variaveis? $nome?')";
?>
</body>
</html>