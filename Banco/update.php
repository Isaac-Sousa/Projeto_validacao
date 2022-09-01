<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Atualize</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
<?php
$conn = new mysqli('localhost','root','root','test_bd') or die (mysqli_error($conn));
$id = 1;
$nome = $_POST["f_nome"];
$email = $_POST["f_email"];
$senha = $_POST["f_senha"]; 
if(isset($_POST['atualizar'])){
$nome = $_POST["f_nome"];
$email = $_POST["f_email"];
$senha = $_POST["f_senha"]; 
   $result = $conn->query("SELECT * FROM user WHERE Nome_user = '$nome' OR Email_user = '$email'") or die($conn->error());
    if(count($result)==1){
     $row = $result->fetch_array();
     $id = $row['ID_user'];
     $nome = $row['Nome_user'];
     $email = $row['Email_user'];
     $senha = $row['Senha_user'];
    }
}
?>
<div>
<form method="POST" action="update.php"> 
    <inptu type="hidden" name="aidi" value="<?php echo $id; ?>">
   <div>
    <label>Nome: *</label>
    <input type="text" name="f_nome" placeholder="Digite seu nome aqui!" value="<?php echo $row['Nome_user']; ?>" required>
  </div>
  <div>
        <label>Email: *</label>
        <input type="email" name="f_email" placeholder="Insira o seu Email aqui" value="<?php echo $row['Email_user']; ?>" required>
    </div> 
  <div>
    <label>Senha: *</label>
    <input type="password" name="f_senha" placeholder="Coloque a senha aqui!" value="<?php echo $row['Senha_user']; ?>" required>
  </div>
   
  <div>
  <button type="submit" name="SUBup" value="submit">Comfirmar</button>
  <button type="submit" name="delet" value="Reset">Limpar</button>
  </div>
    </form>
</div>
<?php
/*Update funcional, diz que atualizou mesmo que o usuário não exista*/
if(isset($_POST['SUBup'])){
    $result = $conn->query("SELECT * FROM user WHERE Nome_user ='$nome' AND Email_user ='$email'") or die($conn->error());
    $row = $result->fetch_array();
    $id = $row['ID_user'];
    $nome = $_POST["f_nome"];
    $email = $_POST["f_email"];
    $senha = $_POST["f_senha"]; 
 $conn->query("UPDATE user SET Nome_user='$nome', Email_user='$email', Senha_user='$senha' WHERE ID_user='$id'");
 echo "<script>alert('Usuário atualizado!')</script>";
   }
   /* ElseIf não funcional */
   elseif(isset($_POST['SUBup'])){
    $result = $conn->query("SELECT * FROM user WHERE Nome_user !='$nome' AND Email_user !='$email'") or die($conn->error());
    $row = $result->fetch_array();
    echo "<script>alert('Usuário Inexistente!')</script>";
    echo "<script>alert('Redirecionando para o cadastro...')</script>";
    echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/CADASTRO.PHP";</script>';






   }
?>   

</body>
</html>