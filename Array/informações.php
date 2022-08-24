<html>
 <head>
    <title>Dados</title>
 </head>   
<body>   
<?php
$nome = $_POST['f_nome'];
$senha =$_POST['f_senha'];
 include_once("array.php");
 require_once("validação.php");
 if($senha == count($arrSenha) && $nome == count($arrNome)){
    echo  "<script>alert('Você está autorizado')</script> <br>"; 
    echo "<script>alert('Seus dados confidenciais são:')</script>"."<br>";
    echo "Deu certo com todos os users?"."<br>";
    echo "funcional até"."<br>";
}

?>
</body>
</html>