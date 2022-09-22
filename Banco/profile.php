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
?><div>
<div class="retangulo"></div>
<div class="circulo"></div>
     <svg class="icon-user" fill="none" stroke="currentColor" width="100" height="100" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
     </svg>
<h1>   <?php echo $row['nome_user']; ?> </h1>
    <nav class="flexo">
        <form method="post" action="process.php">
            <div class="btns">
                <button class="b2" type="submit" name="Change" >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" width="40" height="40" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                </button>
                <button class="b1" type="submit" name="Exit">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" width="40" height="40" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                </button>
            </div>
        </form>
    </nav>
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
    </div>
<?php
}else{
echo "<script>window.alert('Faça Login para ver essa página')</script>";
    echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/LOGIN.php"</script>';
}
    ?>

</body>
</html>
