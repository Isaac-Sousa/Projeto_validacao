<?php
session_start();
// Inserir usuários
function Inserir(){
	if (isset($confirm)) {
    $conn = new mysqli('localhost','root','root','test_bd') or die (mysqli_error($conn));
    $nome = $_POST["f_nome"];
    $email = $_POST["f_email"];
    $senha = $_POST["f_senha"];  
        $hash = password_hash($senha,PASSWORD_BCRYPT,array('cost'=>10));
        $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE Nome_user = '$nome' OR Email_user = '$email'");
        if(mysqli_num_rows($duplicate)>0 ){
          echo "<script>alert('Usuário ou Email já cadastrado!')</script>";}
           
        else{
        $conn->query("INSERT INTO user (Nome_user, Email_user, Senha_user) VALUES('$nome','$email','$hash')") OR die($mysqli->error);
        echo "<script>alert('User cadastrado!')</script>";    
        }  
	}
  include_once 'Valid_Conn.php';
}

// Deletar usuários
function Deletar(){
  $conn = new mysqli('localhost','root','root','test_bd') or die (mysqli_error($conn));
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
//Selecionar usuários
//Em desenvolvimento!
function SelecionarTodos(){
  $conn = new mysqli('localhost','root','root','test_bd') or die (mysqli_error($conn));
  $nome = $_POST["f_nome"];
  $email = $_POST["f_email"];
  $senha = $_POST["f_senha"];  
  $results = mysqli_query($conn, "SELECT * FROM user"); 
  while ($row = mysqli_fetch_array($results)) {
  echo $row['Nome_user']."<br>";
  echo $row['Email_user']."<br>";
  echo $row['Senha_user']."<br>";
  }
}

?>