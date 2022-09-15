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

$dbFunctions = new DbFunctions();
$nome = $_POST["f_nome"];
$email = $_POST["f_email"];

$dbFunctions->$this->conn;
$results = pg_query($this->conn, "SELECT * FROM usuario WHERE nome_user='$nome' AND email_user='$email'");
while ($row = pg_fetch_array($dbFunctions->results)) {
 ?>
<label>Nome:<?php echo $row['nome_user'];?></label>
<br>
<label>Nome:<?php echo $row['email_user'];?></label>
<br>
<label>Nome:<?php echo $row['senha_user'];?></label>
<br>
<?php  } ?>

 </div>
</body>
</html>
