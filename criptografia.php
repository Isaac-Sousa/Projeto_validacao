<?php
$senha = "teste";
$hash = password_hash($senha, PASSWORD_BCRYPT, array('cost' => 4));
echo $hash."<br>";
?>