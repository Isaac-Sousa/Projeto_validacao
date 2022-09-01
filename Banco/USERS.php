<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>???</title>
</head>
<body>


<?php 
include "update.php";
$conn = new mysqli('localhost','root','root','test_bd') or die (mysqli_error($conn));
$nome = $_POST["f_nome"];
$email = $_POST["f_email"];
$senha = $_POST["f_senha"];  
$results = mysqli_query($conn, "SELECT * FROM user"); 
while ($row = mysqli_fetch_array($results)) {
echo $row['ID_user']."-";
echo $row['Nome_user']."<br>";
echo $row['Email_user']."<br>";
echo $row['Senha_user']."<br>";
echo "<br>";
}
?>
<div>
<form method=" " action="UPDATE.PHP">
 <div>
 <input type="submit" name="atualizar"><label>Atualizar</label>   
 </div>
</form>
</div>
<div>
<form method="POST" action="UPDATE.php"> 
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


</body>
</html>