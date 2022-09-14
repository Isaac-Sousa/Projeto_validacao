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
$nome="deletar";
$email="deletar@gmail.com";
    require_once 'DbFunctions.php';
$dbFunctions = new DbFunctions();
$dbFunctions->deletarUsuario($nome,$email);
if( $dbFunctions = true ){
    echo "Apagei o troxa";
}else{
    echo "O trouxa é outro, você errou!";
}

?>

</body>
</html>