<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Atualize</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
<div class="caixa">

    <form method="POST" action="process.php">
        <fieldset>
            <legend><b>Formulário de Cadastro</b></legend>
            <br>


            <div class="inputBox">
                <input type="text" name="f_nome" required class="inputuser">
                <label class="Luser">Nome: </label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="f_email" required class="inputuser">
                <label class="Luser">Email: </label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="password" name="f_senha" required class="inputuser">
                <label class="Luser">Senha:</label>
            </div>
            <div class="btns">
                <button class="b1" type="submit" id="register" name="SUB_UP">Enviar</button>
                <button class="b2" type="reset" id="delet" name="DEL_UP">Limpar</button>
            </div>
        </fieldset>
    </form>
</div>






<?php
//teste de update para form de update
?>   

</body>
</html>