<?php
/* Validação banco de dados PHPMyAdmin */
$db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'test_bd';
 
  $mysqli = @new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
	
  if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  }

  echo 'Success: A proper connection to MySQL was made.';
  echo '<br>';
  echo 'Host information: '.$mysqli->host_info;
  echo '<br>';
  echo 'Protocol version: '.$mysqli->protocol_version;



/*
TESTE DO TRY CACTH
function AbrirConexao(){
$conexao = new PDO ("mysql:host=localhost;dbname=test_bd;charset=utf8","root","root");
return $conexao;
}
$hostdb = 'localhost';
$userdb = 'root';
$passdb = 'root'; 
$db = 'test_db';
$con = mysqli_connect("localhost","root","root");
mysqli_select_db($con,"test_bd");
*/
?>
</body>
</html>