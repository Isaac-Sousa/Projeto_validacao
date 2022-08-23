<?php

$nome = filter_input(INPUT_GET,"f_nome",FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_GET,"f_senha",FILTER_SANITIZE_SPECIAL_CHARS);
if($senha =="Dev21" && $nome =="Isaac" ){ 
    echo "<h3> <script>alert('Você está autorizado')</script> </h3> <br>"; 
    echo "<h3>"."<script>alert('Seus dados confidenciais são:')</script>"."<br>"."</h3>";
    echo "<h3>"."Seu usuário é: {$nome}"."</h3>"."<br>";
    echo "<h3>"."Sua senha é: {$senha}"."</h3>"."<br>";
    echo "<h3>"."Mantenha essas informações a salvo"."</h3>"."<br>";
}
?>