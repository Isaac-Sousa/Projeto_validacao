<?php
$conn = new mysqli('localhost','root','root','test_bd') or die (mysqli_error($conn));
if(isset($_POST['delet'])){
    $nome = $_POST["f_nome"];
    $email = $_POST["f_email"];
    $senha = $_POST["f_senha"];
    $duplicate = mysqli_query($mysqli, "DELETE FROM user WHERE Nome_user = '$nome'");
    if(mysqli_num_rows($duplicate)> 0 ){
      echo "<script>alert('Usuário ou Email já cadastrado!')";}
    else{
    $conn->query( "DELETE FROM user WHERE Nome_user = '$nome'") OR die($mysqli->error);
    }
    if($conn->query == true){
        echo "<script>alert('Usuer cadastrado!')</script>";
    }
}
?>