<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>???</title>
</head>
<body>


<?php

    $host = 'localhost';
    $port = '5432';
    $user = 'postgres';
    $password = 'admin';
    $dbname = 'test_db';
    $C_String = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";
    $conn = pg_connect($C_String) or die("Banco indisponível");

$results = pg_query($conn, "SELECT * FROM usuario WHERE nome_user='Isaac Sousa' AND email_user='sousa@gmail.com'");
while ($row = pg_fetch_array($results)) {
    echo $row['nome_user'];
    echo $row['email_user'];
    echo $row['senha_user'];

}

// Tudo foi concluido em tese!

?>

</body>
</html>