<?php

$nome = filter_input(INPUT_GET,"f_nome",FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_GET,"f_senha",FILTER_SANITIZE_SPECIAL_CHARS);
if($senha =="Dev21" && $nome =="Isaac" ){ 
    echo "<h3> <script>alert('Você está autorizado')</script> </h3> <br>"; 
    echo "<h3>"."<script>alert('Seus dados confidenciais são:')</script>"."<br>"."</h3>";
    echo "<h3>"."Tá achanddo que deu errado né"."</h3>"."<br>";
    echo "<h3>"."Consegui, o código foi corrigido"."</h3>"."<br>";
    echo "<h3>"."Pegou ai Pedro?"."</h3>"."<br>";
}
?>