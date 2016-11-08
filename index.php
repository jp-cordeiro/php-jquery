<?php
require_once("funcoes/bd/conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin com PHP E JQuery</title>
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" media="screen">
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <div class="login">
        <h2>ÁREA RESTRITA</h2>
        
        <div class="retorno"></div>
        
        <form name="formLogin" id="formLogin" action="" method="POST" class="form">
            <div class="form-group">
                <label for="login">Login</label>
                <input name="login" id="login" type="text" class="form-control input-lg" placeholder="Login" required>
            </div>

            <div class="form-group">
                <label for="password">Senha</label>
                <input name="password" id="password" type="password" class="form-control input-lg" placeholder="Senha" required>
            </div>

            <button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-user"></span> Logar
            </button>
            <img id="load" src="files/gangnam_load.gif"
                 class="load"
                 alt="Carregando"
            width="200"
            height="100"
            style="display: none;">
        </form>
    </div>
</div>
<script src="js/main.js"></script>
</body>
</html>