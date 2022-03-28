

<!DOCTYPE html>
<html>
<head>

    <title>Registro | P&P</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/registro.css">
</head>
<body>
<?php require '../partials/header.php' ?>


    <div class="register-box">
        <h1>Registrate aquí</h1>
        <form action="insertarusuario.php" id="frmagregar" role="form" method="POST" enctype="multipart/form-data">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Ingrese Email">
        <!-- user -->
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Ingrese un nombre de usuario">

        <!-- user -->
        <label for="password">contraseña</label>
        <input type="password" name="password" placeholder="Ingrese una contraseña">

        <input type="submit" name="ingresar" class="btn btn-info" placeholder="Ingresar">

        <a href="../login/login.php">Ya tienes cuenta? logeate! </a>
        </form>
    </div>
</body>
</html>