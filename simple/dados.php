<html>
<head>
  <title>Dados</title>
</head>
<body>
<?php
$nome = $_POST['f_nome'];
$senha = $_POST["f_senha"];
 require_once("naosei.php");
 if($nome == "Isaac" && $senha == "Dev21" ){
    echo  "<script>alert('Você está autorizado')</script> <br>"; 
    echo "<script>alert('Seus dados confidenciais são:')</script>"."<br>";
    echo "Quase no pirei quando quebrei, e tu mostrou que era algo simples"."<br>";
    echo "O código está como queria no começo"."<br>";
}
?>
</body>
</html>