<?php
$arrValidUser = array
("Isaac" => "Dev21", 
"Pedro" => "Pedro", 
"Arnaldo" => "Arn1254", 
"Paulo" => "R70923");
foreach($arrValidUser as $user => $pass){
$login = ($user === $nome && $pass === $senha) ? true : false;
$L_invalid = ($user != $nome && $pass === $senha || $user === $nome && $pass != $senha) ? true : false;
$L_Dont_Exist =($user != $nome && $pass != $senha);
}
?>