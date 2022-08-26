<html>
 <head>
    <title>Dados</title>
 </head>   
<body>   
<?php
$nome = $_POST['f_nomeR'];
$email = $POST['f_emailR'];
$senha =$_POST['f_senhaR'];
 include_once("array.php");
if($login == true){
    echo  "<script>alert('Você está autorizado')</script> <br>"; 
    echo "<script>alert('Seus dados confidenciais são:')</script>"."<br>";
    echo "<script>alert('Deu certo com todos os users?')</script>"."<br>";
    echo "<script>alert('funcional até')</script>"."<br>";
    echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/login.php"</script>';
}
?>
</body>
</html>