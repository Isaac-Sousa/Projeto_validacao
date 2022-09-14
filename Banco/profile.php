<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge' charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="???">
    <title>Perfil</title>
</head>
<body>
<?php
require_once 'DbFunctions.php';
?>
 <div>
     <?php
     $dbFunctions = new DbFunctions();
     //$dbFunctions->selecionarUsuario();
     ?>
     <label>NOME:</label>
     <br>
     <label>EMAIL:</label>
     <br>
     <label>SENHA:</label>
     <br>
 </div>
</body>
</html>
