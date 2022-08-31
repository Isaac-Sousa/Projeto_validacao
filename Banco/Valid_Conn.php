<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tricash</title>
</head>
<body>


<?php 
$conn = new mysqli('localhost','root','root','test_bd') or die (mysqli_error($conn));
require('models.php');
SelecionarTodos();

$nome = $_POST["f_nome"];
$email = $_POST["f_email"];
$senha = $_POST["f_senha"];  
$results = mysqli_query($conn, "SELECT * FROM user"); 
while ($row = mysqli_fetch_array($results)) {
echo $row['Nome_user']."<br>";
echo $row['Email_user']."<br>";
echo $row['Senha_user']."<br>";
}
?>

</body>
</html>