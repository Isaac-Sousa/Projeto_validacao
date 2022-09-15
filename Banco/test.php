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

$nomE="Isaac Sousa";
$emaiL="sousa@gmail.com";
$senhA ="sousa21";

$dbFunctions->validSenha($nomE, $emaiL, $senhA);




/*$senha2 ='num é pussivel';
$hash = password_hash($senha, PASSWORD_BCRYPT, array('cost' => 8));*/
/*if (password_verify($senha,$hash)){
    echo "Parece que está certa!";
}else{
    echo "Mentira que funcionou KKKKKKKK";
}*/


?>

</body>
</html>