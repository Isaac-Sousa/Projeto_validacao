<?php
/* Validação banco de dados PHPMyAdmin *//* */
$db_host = '127.0.0.1';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'test_bd';
  $db_port = 8889;

  $mysqli = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db,
    $db_port
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
  echo 'uepa não ta indo';
?>
<?php
/*Testando outra conexão
cansado já.session_start();
$conn = mysqli_connect("127.0.0.1","root","root","test_bd",8889);*/ 
?>

