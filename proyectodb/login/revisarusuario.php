<?php
$conexion = mysqli_connect("localhost", "root", "", "proyecto_pyp");

$usuario=$_POST['username'];
$contraseña=$_POST['password'];
$_SESSION['username']=$usuario;

$sqlconsulta="SELECT * FROM usuarios where username ='$usuario' and password = '$contraseña'";
$resultado = mysqli_query($conexion,$sqlconsulta);
$filas=mysqli_num_rows($resultado);
if ($filas){
    echo "<script>alert('Sesión correctamente iniciada');window.location='../PginaPrincipal/dist/inicio.php'</script>";
}else{
    echo "<script>alert('Error al iniciar sesión');window.location='login.php'</script>";
}
?>