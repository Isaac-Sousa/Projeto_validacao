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
        }
    }

    /**
     * Deletar usuários
     */
    public function deletarUsuario($nome, $email)
    {
        $duplicate = pg_query($this->conn, "SELECT * FROM usuario WHERE Nome_user = '$nome' OR Email_user = '$email'");
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
            echo $row['ID_user']."-";
            echo $row['Nome_user'] . "<br>";
            echo $row['Email_user'] . "<br>";
            echo $row['Senha_user'] . "<br>";
        }
    }
    /**
     * Atualizar dados do usuário
     * 'Meio' feito
     */
    public function atualizarDadosUser(){
        //necessita de teste
        $find = pg_query($this->conn, "SELECT * FROM usuario");
        $row = $find->fetch_array();
        $id = $row['ID_user'];
        $nome = $_POST["f_nome"];
        $email = $_POST["f_email"];
        $senhaUP = $_POST["f_senha"];
        $UP = pg_query($this->conn,"UPDATE user SET nome_user ='$nome', email_user ='$email', senha_user ='$senhaUP' WHERE ID_user='$id'");
        echo "<script>alert('Usuário atualizado!')</script>";

    }

    public function validSenha($nome,$email,$senha,$hash){
        $results = pg_query($this->conn, "SELECT * FROM usuario WHERE nome_user='$nome' AND email_user='$email'");
        while ($row = pg_fetch_array($results)) {
            $row['senha_user'];

            if ($row['senha_user'] = $hash) {

                if (password_verify($senha,$hash)) {
                    echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/profile.php"</script>';
                    //echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/profile.php"</script>';
                }//if interno
            }//if externo
            else {
                echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/LOGIN.HTML"</script>';
            }
        }
    }

    public function selecionarUsuario(){
        $results = pg_query($this->conn, "SELECT * FROM usuario WHERE nome_user='$nome' AND email_user='$email'");
        while ($row = pg_fetch_array($results)) {
            echo $row['nome_user'] . "<br>";
            echo $row['email_user'] . "<br>";
            echo $row['senha_user'] . "<br>";
        }

    }





}