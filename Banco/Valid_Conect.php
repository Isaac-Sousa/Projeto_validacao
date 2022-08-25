<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tricash</title>
</head>
<body>


<?php
require_once("conexao.php");
echo '<script>alert("Conectando ao Banco...")</script>'."<br>";
try{
    AbrirConexao();
    echo '<script>alert("Conexão bem sucedida")</script>'."<br>";
    echo "Bem-vindo(a)";
}catch(Exception $ex ){
    echo '<script>alert("Não foi possível conectar ao banco de dados")</script>';
    //echo "<b>Mensagem:</b> ".$ex->getMessage()."<br>";
   // echo "<b>Linha:</b> ".$ex->getLine()."<br>";
   // echo "<b>Arquivo:</b> ".$ex->getFile()."<br>";
}
?>

</body>
</html>