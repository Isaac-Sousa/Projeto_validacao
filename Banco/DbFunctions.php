<?php

class DbFunctions
{
  /**
   * @var mysqli
   */
  public $conn;

  /**
   * Constructor.
   */
  public function __construct()
  {
    $this->conn = new mysqli('localhost', 'root', 'root', 'test_bd') or die (mysqli_error($this->conn));
  }

  /**
   * Inserir usuários
   */
  /* diminuir o tamnaho da hash */
  public function inserirUsuario($nome, $email, $senha)
  {
    $hash = password_hash($senha, PASSWORD_BCRYPT, array('cost' => 4));
    $duplicate = mysqli_query($this->conn, "SELECT * FROM user WHERE Nome_user = '$nome' OR Email_user = '$email'");
    if (mysqli_num_rows($duplicate) > 0) {
      echo "<script>alert('Usuário ou Email já cadastrado!')</script>";
    } else {
      $this->conn->query("INSERT INTO user (Nome_user, Email_user, Senha_user) VALUES('$nome','$email','$hash')") or die (mysqli_error($this->conn));
      echo "<script>alert('User cadastrado!')</script>";
    }
  }

  /**
   * Deletar usuários
   */
  public function deletarUsuario($nome, $email)
  {
    $duplicate = mysqli_query($this->conn, "SELECT * FROM user WHERE Nome_user = '$nome' OR Email_user = '$email'");
    if(mysqli_num_rows($duplicate)>=1){
      echo "<script>alert('Removendo o usuário)</script>";
      $this->conn->query( "DELETE FROM user WHERE Nome_user = '$nome'") or die (mysqli_error($this->conn));
    }else{
      echo "<script>alert('Não foi possivél deletar ('/n') Usuário inexistente')</script>";
    }
  }

  /**
   * Selecionar usuários
   * TODO - EM DESENVOLVIMENTO
   */
  public function selecionarTodosUsuario()
  {
    $results = mysqli_query($this->conn, "SELECT * FROM user");
    while ($row = mysqli_fetch_array($results)) {
      echo $row['Nome_user']."<br>";
      echo $row['Email_user']."<br>";
      echo $row['Senha_user']."<br>";
    }
  }
}