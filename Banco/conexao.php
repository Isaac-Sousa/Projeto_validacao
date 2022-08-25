<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conectando...</title>
</head>
<body>
<?php
function AbrirConexao(){
$conexao = new PDO ("mysql:host=localhost;dbname=test_bd;charset=utf8","root","root");
return $conexao;
}
//testbd não existe na maquina, o banco existente é test_bd, a alteração será feita depois do teste de "filtração" de erro do TRY CATCH.
?>
</body>
</html>