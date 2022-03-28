<?php
$conexion = mysqli_connect("localhost", "root", "", "proyecto_pyp");

$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];

$sqlcliente="INSERT INTO usuarios (email,username,password) VALUES 
('$email','$username','$password')";
$ejecutado=mysqli_query($conexion,$sqlcliente);

if ($ejecutado){
    echo "<script>alert('usuario registrado con exito');window.location='../login/login.php'</script>";
}else{
    echo "<script>alert('error al registrar usuario');</script>";
}
?>