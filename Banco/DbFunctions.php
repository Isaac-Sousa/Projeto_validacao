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
      $host = 'localhost';
      $port = '5432';
      $user = 'postgres';
      $password = 'admin';
      $dbname = 'test_db';
      $C_String = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";
     $this->conn = pg_connect($C_String) or die("Banco indisponível");
  }

  /**
   * Inserir usuários
   */
  public function inserirUsuario($nome, $email, $hash)
  {
    $duplicate = pg_query($this->conn,"SELECT * FROM usuario WHERE nome_user = '$nome' OR email_user = '$email'");
    if (pg_num_rows($duplicate) > 0) {
      echo "<script>alert('Usuário ou Email já cadastrado!')</script>";
    } else {
      $insert = pg_query($this->conn,"INSERT INTO usuario (nome_user, email_user, senha_user) VALUES('$nome','$email','$hash')") or die (pg_result_error($this->conn));
      echo "<script>alert('User cadastrado!')</script>";
    }
  }

  /**
   * Deletar usuários
   */
  public function deletarUsuario($nome, $email)
  {
    $duplicate = pg_query($this->conn, "SELECT * FROM usuario WHERE Nome_user = '$nome' OR Email_user = '$email'");
    if(pg_num_rows($duplicate)>=1){
      echo "<script>alert('Removendo o usuário)</script>";
      $delet = pg_query( "DELETE FROM usuario WHERE Nome_user = '$nome'") or die (pg_result_error($this->conn));
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
    $results = mysqli_query($this->conn, "SELECT * FROM usuario");
    while ($row = mysqli_fetch_array($results)) {
      echo $row['Nome_user']."<br>";
      echo $row['Email_user']."<br>";
      echo $row['Senha_user']."<br>";
    }
  }
}