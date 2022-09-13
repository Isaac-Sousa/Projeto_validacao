<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="???">
    <title>Perfil</title>
</head>
<body>
<?php
require_once 'DbFunctions.php';
echo '<script>alert("Eu sou uma pagina de perfil \nBem-vindo(a)")</script>';
$results = pg_query($this->conn, "SELECT * FROM usuario WHERE ID_user = 1");
while ($row = pg_fetch_array($results)) {
    echo $row['ID_user'] . "-";
    echo $row['nome_user'] . "<br>";
    echo $row['email_user'] . "<br>";
    echo $row['senha_user'] . "<br>";
}


?>
</body>
</html>
