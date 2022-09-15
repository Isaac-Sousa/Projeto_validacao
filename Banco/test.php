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
require_once 'DbFunctions.php';

$dbFunctions = new DbFunctions();

$nome="Isaac Sousa";
$email="sousa@gmail.com";
$senha ="sousa21";
$hash = password_hash($senha, PASSWORD_BCRYPT, array('cost' => 8));
$dbFunctions->validSenha($nome,$email,$senha,$hash);

/*$senha2 ='num é pussivel';

if (password_verify($senha,$hash)){
    echo $senha;
    echo "<br>";
    echo $hash;
    echo "<br>";
    echo "Parece que está certa!";
}else{
    echo "Mentira que funcionou KKKKKKKK";
}*/


?>

</body>
</html>