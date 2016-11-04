<!DOCTYPE html>
<html lang="pt_BR">
<head>
<title>Admin com PHP e jQuery</title>
   <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
    <div class="login">
        <h2>ÁREA RESTRITA</h2>
        <form action="" method="POST" class="form">
            <div class="form-group">
                <label for="login">Login</label>
                <input name="login" id="login" type="text" class="form-control input-lg" placeholder="Login">
            </div>

            <div class="form-group">
                <label for="password">Senha</label>
                <input name="password" id="password" type="text" class="form-control input-lg" placeholder="Senha">
            </div>

            <button class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-user">Entrar</span></button>
        </form>
    </div>
</div>
<script src="bower_components/jquery/dist/jquery.slim.js"></script>
</body>
</html>