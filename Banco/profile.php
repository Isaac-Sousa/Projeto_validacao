<?php
echo "<script>window.alert('Bem vindo a pagina de perfil')</script>";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge' charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="styleUser.css">
    <title>Perfil</title>
</head>
<body>


<?php
$host = 'localhost';
$port = '5432';
$user = 'postgres';
$password = 'admin';
$dbname = 'test_db';
$C_String = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";
$perfil = pg_connect($C_String) or die("Banco indisponível");
$user = $_SESSION['nome'];
$userEM = $_SESSION['email'];
$results = pg_query($perfil, "SELECT * FROM usuario WHERE nome_user='$user' AND email_user='$userEM'");
if ($row = pg_fetch_array($results)) {
    //TODO - Tabela não aparece; Resultados não são postos a amostra; Session vindo nulo

?>

<table>
 <tr class="TLs">
  <td>
   <b>Nome: </b>
  </td>
  <td>
   <?php echo $row['nome_user']; ?>
  </td>
 <tr>
<br>
 <tr class="TLs">
  <td>
   <b>Email: </b>
  </td>
  <td>
   <?php echo $row['email_user']."</b>"; ?>
  </td>
 </tr>
</table>
<?php
}else{
echo "<script>window.alert('O código chegou até aqui')</script>";
}
    ?>
 </div>
</body>
</html>
