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
        $duplicate = pg_query($this->conn, "SELECT * FROM usuario WHERE nome_user = '$nome' OR email_user = '$email'");
        if (pg_num_rows($duplicate) > 0) {
            echo "<script>alert('Usuário ou Email já cadastrado!')</script>";
        } else {
            $insert = pg_query($this->conn, "INSERT INTO usuario (nome_user, email_user, senha_user) VALUES('$nome','$email','$hash')") or die (pg_result_error($this->conn));
            echo "<script>alert('User cadastrado!')</script>";
            echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/CADASTRO.php"</script>';
        }
    }

    /**
     * Deletar usuários
     */
    public function deletarUsuario($nome, $email)
    {
        $duplicate = pg_query($this->conn, "SELECT * FROM usuario WHERE Nome_user = '$nome' AND Email_user = '$email'");
        if (pg_num_rows($duplicate) >= 1) {
            echo "<script>alert('Removendo o usuário)</script>";
            $delet = pg_query("DELETE FROM usuario WHERE Nome_user = '$nome'") or die (pg_result_error($this->conn));
        } else {
            echo '<script>alert("Não foi possivél deletar  \nUsuário inexistente")</script>';
        }
    }

    /**
     * Selecionar usuários
     * TODO - EM DESENVOLVIMENTO
     */
    public function selecionarTodosUsuario()
    {
        $results = pg_query($this->conn, "SELECT * FROM usuario");
        while ($row = pg_fetch_array($results)) {
             $row['id_user']."-";
             $row['nome_user'] . "<br>";
             $row['email_user'] . "<br>";
             $row['senha_user'] . "<br>";
        }
    }
    /**
     * Atualizar dados do usuário
     * 'Meio' feito
     */
    public function atualizarDadosUser($nome,$email,$nome2,$email2,$newhash){
        //necessita de teste
        $find = pg_query($this->conn, "SELECT * FROM usuario where nome_user='$nome' AND email_user='$email'");
        if($row=pg_fetch_array($find)){
        $id = $row['id_user'];
        $UP = pg_query($this->conn,"UPDATE usuario SET nome_user ='$nome2', email_user ='$email2', senha_user ='$newhash' WHERE ID_user='$id'");
        echo "<script>alert('Usuário atualizado!')</script>";
        }
    }

    public function validSenha($nome,$email,$senha,$hash){
        $results = pg_query($this->conn, "SELECT * FROM usuario WHERE nome_user='$nome' AND email_user='$email'");
        if($row = pg_fetch_array($results)){
            $row['senha_user'];

             if (password_verify($senha,$row['senha_user'])) {
              echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/profile.php"</script>';

                }//if interno
            else {
                echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/LOGIN.php"</script>';
            }
        }
        }

   // não funcional - excluir depois
    public function selecionarUsuario($nome,$email){

        $results = pg_query($this->conn, "SELECT * FROM usuario WHERE nome_user='$nome' AND email_user='$email'");
       $row = $results->fetch_array();
              $_SESSION['id']=$row['id_user'];
              headers('location:profile.php');
              exit;



    }





}