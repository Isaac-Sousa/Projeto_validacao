<?php
session_start();
$nome=$_SESSION['nome_p'];
$email=$_SESSION['email_p'];
echo "<script>window.alert('Bem vindo a pagina de perfil')</script>"
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge' charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="???">
    <title>Perfil</title>
</head>
<body>
<?php
require_once 'process.php';
if(isset($_SESSION['nome_p'])&&isset($_SESSION['email_p'])) {
    $host = 'localhost';
    $port = '5432';
    $user = 'postgres';
    $password = 'admin';
    $dbname = 'test_db';
    $C_String = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";
    $this->cone = pg_connect($C_String) or die("Banco indisponível");

    $results = pg_query($this->cone, "SELECT * FROM usuario WHERE nome_user='$nome' AND email_user='$email'");
    while ($row = pg_fetch_array($results)) {
        echo $row['nome_user'] . "<br>";
        echo $row['email_user'] . "<br>";
        echo $row['senha_user'] . "<br>";
    }
}else{
    echo "<script>window.alert('Não Funcionou')</script>";
}
session_destroy();
    ?>
 </div>
</body>
</html>
