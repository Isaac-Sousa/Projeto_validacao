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
<form method="POST" action="update.php">
 <div>
 <input type="submit" name="atualizar" value="Atualizar">  
 </div>
</form>
</div>
</body>
</html>