<!DOCTYPE html>
<html lang="en">
<head>
    <title>Usuarios_tabela</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="test.css">

</head>
<body>
<table>
    <thead>
    <tr>
        <th><b>Id</b></th>
        <th><b>Nome</b></th>
        <th><b>Email</b></th>
        <th><b>Senha</b></th>
    </tr>
    </thead>

<?php
//Conectando ao banco DE NOVO
$host = 'localhost';
$port = '5432';
$user = 'postgres';
$password = 'admin';
$dbname = 'test_db';
$C_String = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";
$perfil = pg_connect($C_String) or die("Banco indisponível");
//

$results = pg_query($perfil, "SELECT * FROM usuario");
while ($row = pg_fetch_array($results)) {
$i=1;
if($i<count($row)){

?>

    <tbody>
    <tr>
        <td value="<?=$i;?>"> <?=$row['id_user']; ?> </td>
        <td value="<?=$i;?>"> <?=$row['nome_user']; ?> </td>
        <td value="<?=$i;?>"> <?=$row['email_user']; ?> </td>
        <td value="<?=$i;?>"> <?=$row['senha_user']; ?> </td>
    </tr>
    </tbody>

<?php
    $i++;
}
}
?>
</table>
</body>
</html>