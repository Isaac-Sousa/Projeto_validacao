<?php
$arrValidUser = array
("Isaac" => "Dev21", 
"Pedro" => "pedro", 
"Arnaldo" => "Arn1254", 
"Paulo" => "R70923");
$nome = $_POST['f_nome'];
$senha =$_POST['f_senha'];
foreach($arrValidUser as $user => $pass){
    $login = ($user === $nome && $pass === $senha) ? true : false;
   
    if($login)break;
    
}

//Removido para test
/*
 $invalid = ($user !== $nome && $pass === $senha || $user === $nome && $pass !== $senha) ? true : false;
 $Dont_Exist =($user !== $nome && $pass !== $senha);
if($invalid)break;
if($Dont_Exist)break;


*/

?>
