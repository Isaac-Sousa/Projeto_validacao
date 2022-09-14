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
     $dbFunctions->selecionarTodosUsuario();
     <label>NOME: <?php echo $row[nome_user]; ?></label>
     <label>EMAIL: <?php echo $row[email_user]; ?></label>
     <label>SENHA: <?php echo $row[senha_user];?></label>
 </div>
</body>
</html>
