<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Atualize</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="UP.css"   >
</head>
<body>
<div class="caixa">

    <form method="POST" action="process.php">
        <fieldset>
            <legend><b>Informações antigas</b></legend>
            <br>

            <div class="inputBox">
                <input type="text" name="f_nome" required class="inputuser">
                <label class="UPuser1">Nome: </label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="f_email" required class="inputuser">
                <label class="UPuser1">Email: </label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="password" name="f_senha" required class="inputuser">
                <label class="UPuser1">Senha:</label>
            </div>
            <br><br>
            <legend><b>Informações Atuais</b></legend>
            <br><br>

              <!-- Update form -->
            <div class="inputBox">
                <input type="text" name="f_nomeUP" required class="inputuser">
                <label class="UPuser2">Nome: </label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="f_emailUP" required class="inputuser">
                <label class="UPuser2">Email: </label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="password" name="f_senhaUP" required class="inputuser">
                <label class="UPuser2">Senha:</label>
            </div>
            <div class="btns">
                <button class="b1" type="submit" id="register" name="SUB_UP">Enviar</button>
                <button class="b2" type="reset" id="delet" name="DEL_UP">Limpar</button>
            </div>
        </fieldset>
    </form>
</div>



</body>
</html>