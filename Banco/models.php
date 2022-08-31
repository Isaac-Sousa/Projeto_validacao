<?php
session_start();
// Inserir usuários
function Inserir(){
	if (isset($_POST['Submit'])) {
        $hash = password_hash($senha,PASSWORD_BCRYPT,array('cost'=>10));
        $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE Nome_user = '$nome' OR Email_user = '$email'");
        if(mysqli_num_rows($duplicate)> 0 ){
          echo "<script>alert('Usuário ou Email já cadastrado!')</script>";}
           
        else{
        $conn->query("INSERT INTO user (Nome_user, Email_user, Senha_user) VALUES('$nome','$email','$hash')") OR die($mysqli->error);
        echo "<script>alert('User cadastrado!')</script>";    
        }  
	}
}

// Deletar usuários
function Deletar(){
      $duplicate = mysqli_query($mysqli, "SELECT * FROM user WHERE Nome_user = '$nome' OR Email_user = '$email'");
      if(mysqli_num_rows($duplicate)> 0 ){
        echo "<script>alert('Removendo o usuário)</script>";
        $conn->query( "DELETE FROM user WHERE Nome_user = '$nome'") OR die($mysqli->error);
     }else{
        echo "<script>alert('Não foi possivél deletar ('/n') Usuário inexistente')</script>";
     }
}
//Selecionar usuários
//Em desenvolvimento!
function SelecionarTodos(){
  $results = mysqli_query($conn, "SELECT * FROM user"); 
  while ($row = mysqli_fetch_array($results)) {
  echo $row['Nome_user']."<br>";
  echo $row['Email_user']."<br>";
  echo $row['Senha_user']."<br>";
  }
}

?>