
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | P&P</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/diseño.css">
</head>
<body>
<?php require '../partials/header.php' ?>
    <div class="login-box">
        <img class="avatar" src="../img/logo_lolsss.png" alt="Logo de Lols">
        <h1>Ingresa aqui</h1>
        <form action="revisarusuario.php" method="post">
        <!-- user -->
        <label for="username">Usuario</label>
        <input type="text" name="username" placeholder="Ingrese su Usuario">

        <!-- user -->
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Ingresa tu contraseña">

        <input type="submit" value="Login" placeholder="Log in">

        <a href="#">Perdiste tu contraseña? </a><br>
        <a href="../registro/registro.php">No tienes cuenta?</a>
        </form>
    </div>
</body>
</html>