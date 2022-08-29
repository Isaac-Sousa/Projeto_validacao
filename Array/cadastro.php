<?php 
require 'conexao.php';
if(isset($_POST["Submit"])){
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
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Azul ou Vermelha?</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
 <!--Aqui ficará o form de cadastro-->
 <div>
   <form method="post" action=""> 
   <div>
    <label>Nome: *</label>
    <input type="text" name="f_nome" placeholder="Digite seu nome aqui!" required>
  </div>
  <div>
        <label>Email: *</label>
        <input type="email" name="f_email" placeholder="Insira o seu Email aqui" required>
    </div> 
  <div>
    <label>Senha: *</label>
    <input type="password" name="f_senha" placeholder="Coloque a senha aqui!" required>
  </div>
   
  <div>
  <button type="submit" name="Submit" value="submit">Comfirmar</button>
  <button type="reset" value="Reset">Limpar</button>
  </div>


    </form>

    
</div>
</body>
</html>