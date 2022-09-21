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

?><div>
<div class="retangulo"></div>
<div class="circulo"></div>
<h1>   <?php echo $row['nome_user']; ?> </h1>
  </div>
   - <div class="flexo">
        <form method="post" action="process.php">
            <div class="btns">
                <button class="b1" type="submit" name="Exit">Logout</button>
                <button class="b2" type="submit" name="Change" >Atualizar</button>
            </div>
        </form>
   - </div>
<br>
<br>
    <h> Dados da conta </h>
<div>
<table>
 <tr class="TLs">
  <td>
   <b>Email: </b>
  </td>
  <td>
   <?php echo $row['email_user']."</b>"; ?>
  </td>
 </tr>
</table>
</div>
<?php
}else{
echo "<script>window.alert('Faça Login para ver essa página')</script>";
    echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/LOGIN.php"</script>';
}
    ?>

</body>
</html>
