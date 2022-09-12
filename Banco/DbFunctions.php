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
    $this->conn = pg_pconnect("host=localhost port=5432 dbname=test_db user=postgres password=admin") or die("Banco indisponível");
  }

  /**
   * Inserir usuários
   */
  /* TODO - AUMENTAR A QUANTIDADE DE CARACTERES QUE O PHPMYADMIN VAI COMPORTAR PARA A SENHA */
  public function inserirUsuario($nome, $email, $hash)
  {
    $duplicate= pg_query($this->conn,"SELECT * FROM usuario WHERE nome_user = '$nome' OR email_user = '$email'");
    if (pg_num_rows($duplicate) > 0) {
      echo "<script>alert('Usuário ou Email já cadastrado!')</script>";
    } else {
      $this->conn->pg_query("INSERT INTO usuario (nome_user, email_user, senha_user) VALUES('$nome','$email','$hash')") or die (mysqli_error($this->conn));
      echo "<script>alert('User cadastrado!')</script>";
    }
  }

  /**
   * Deletar usuários
   */
  public function deletarUsuario($nome, $email)
  {
    $duplicate = mysqli_query($this->conn, "SELECT * FROM usuario WHERE Nome_user = '$nome' OR Email_user = '$email'");
    if(mysqli_num_rows($duplicate)>=1){
      echo "<script>alert('Removendo o usuário)</script>";
      $this->conn->query( "DELETE FROM usuario WHERE Nome_user = '$nome'") or die (mysqli_error($this->conn));
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