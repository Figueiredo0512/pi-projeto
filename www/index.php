<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/index.css">   
    <title>Login - Infraestrutura</title>    
    <script src="scripts/form-verification.js"></script>
    </head>
<body>
    <div class="login-page">
        <div class="form">            
            <form class="login-form" action="action/login-verification.php" method="post">
            <h1>Infraestrutura</h1>
            <input type="text" id="nome_login" onkeyup="this.value = Trim( this.value )"  required name ="nome_login" placeholder="usuário"/>
            <input type="password" id="senha_login"  onkeyup="this.value = Trim( this.value )"  required  name="senha_login" placeholder="senha"/>
            <button id="log_button" name="log_button">Logar-se</button>           
            
            <a href="web-pages\assinatura.php"> clica aqui </a>

            <?php include_once("./action/login-error.php"); ?>
            </form>        
        </div>
        </div>
        
    </body>
</html>