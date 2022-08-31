<?php
function Inserir($nome,$email,$senha){
        /*
        $nome = $_POST["f_nome"];
        $email = $_POST["f_email"];
        $senha = $_POST["f_senha"];
        */
        $hash = password_hash($senha,PASSWORD_BCRYPT,array('cost'=>10));
        $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE Nome_user = '$nome' OR Email_user = '$email'");
        if(mysqli_num_rows($duplicate)> 0 ){
          echo "<script>alert('Usuário ou Email já cadastrado!')</script>";}
        else{
        $conn->query("INSERT INTO user (Nome_user, Email_user, Senha_user) VALUES('$nome','$email','$hash')") OR die($mysqli->error);
        echo "<script>alert('User cadastrado!')</script>";    
        }
    }
?>

<?php
function Deletar($nome,$email,$senha){
    if(isset($_POST['delet'])){
        $nome = $_POST["f_nome"];
        $email = $_POST["f_email"];
        $senha = $_POST["f_senha"];
        $duplicate = mysqli_query($mysqli, "SELECT * FROM user WHERE Nome_user = '$nome' OR Email_user = '$email'");
        if(mysqli_num_rows($duplicate)> 0 ){
          echo "<script>alert('Usuário ou Email já cadastrado!')</script>";}
        else{
        $conn->query( "DELETE FROM user WHERE Nome_user = '$nome'") OR die($mysqli->error);
        }
        if($conn->query == true){
            echo "<script>alert('Usuer cadastrado!')</script>";
        }
    }
}
?>