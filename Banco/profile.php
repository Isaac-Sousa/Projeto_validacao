<?php
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
require_once 'DbFunctions.php';
$nome = '';
$email = '';
//conexão da pagina, teste de selecionamento unico
$host = 'localhost';
$port = '5432';
$user = 'postgres';
$password = 'admin';
$dbname = 'test_db';
$C_String = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";
$this->conn = pg_connect($C_String) or die("Banco indisponível");

$results = pg_query($this->conn, "SELECT * FROM usuario WHERE nome_user='$nome' AND email_user='$email'");
if ($row = pg_fetch_array($results)) {
 ?>
<label>Nome: <?php echo $row['nome_user'] ?></label>
<br>
<label>Email: <?php echo $row['nome_user'] ?></label>
<br>
<label>Senha: <?php echo $row['nome_user'] ?></label>
<br>
<?php
  }else{
    echo "<script>alert('Ops, Como você passou?')</script>";
}
?>
 </div>
</body>
</html>
