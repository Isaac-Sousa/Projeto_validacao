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
if ($row = pg_fetch_array($results)) {

for ($i=0;$i<count($row);$i++){
?>
<table>
    <colgroup span="3"></colgroup>
    <tr>
        <th><b>Nome</b></th>
        <th><b>Email</b></th>
        <th><b>Senha</b></th>
    </tr>
    <tr>
        <td value="<?=$i;?>"> <?=$row['nome_user']; ?> </td>
        <td value="<?=$i;?>"> <?=$row['email_user']; ?> </td>
        <td value="<?=$i;?>"> <?=$row['senha_user']; ?> </td>
    </tr>
</table>
<?php
}
}
?>

</body>
</html>