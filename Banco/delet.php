<?php
$conn = new mysqli('localhost','root','root','test_bd') or die (mysqli_error($conn));
if(isset($_POST['delet'])){
    $nome = $_POST["f_nome"];
    $email = $_POST["f_email"];
    $senha = $_POST["f_senha"];
    $duplicate = mysqli_query($mysqli, "SELECT * FROM user WHERE Nome_user = '$nome' OR Email_user = '$email'");
      if(mysqli_num_rows($duplicate)>=1 ){
        echo "<script>alert('Removendo o usuário)</script>";
        $conn->query( "DELETE FROM user WHERE Nome_user = '$nome'") OR die($mysqli->error);
     }else{
        echo "<script>alert('Não foi possivél deletar ('/n') Usuário inexistente')</script>";
     }
}
?>