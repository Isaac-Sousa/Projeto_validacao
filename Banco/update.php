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
$id = 0;
$nome = ' ';
$email = ' ';
$senha = ' ';
if(isset($_POST['atualizar'])){
$nome = $_POST["f_nome"];
$email = $_POST["f_email"];
$senha = $_POST["f_senha"]; 
   $result = $conn->query("SELECT * FROM user WHERE Nome_user = '$nome' AND Email_user = '$email'") or die($conn->error());
    if(count($result)==1){
     $row = $result->fetch_array();
     $id = $row['ID_user'];
     $nome = $row['Nome_user'];
     $email = $row['Email_user'];
     $senha = $row['Senha_user'];
    }

    
}
if(isset($_POST['SUBup'])){
    $id = $_POST['aidi'];
    $nome = $_POST["f_nome"];
    $email = $_POST["f_email"];
    $senha = $_POST["f_senha"]; 
 $conn->query("UPDATE user SET Nome_user='$nome', Email_user='$email', Senha_user='$senha' WHERE ID_user='$id'");
   }
?>   

</body>
</html>