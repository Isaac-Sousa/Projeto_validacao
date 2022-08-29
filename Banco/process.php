<?php
$conn = new mysqli('localhost','root','root','test_bd') or die (mysqli_error($conn));
if(isset($_POST['Submit'])){
    $nome = $_POST["f_nome"];
    $email = $_POST["f_email"];
    $senha = $_POST["f_senha"];
    $conn->query("INSERT INTO user (Nome_user, Email_user, Senha_user) VALUES('$nome','$email','$senha')") or die($mysqli->error);
}

?>