<?php
include 'conexion.php';


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$usuario = $_POST['usuario'];
$carrera = $_POST['carrera'];
$estado = $_POST['estado'];




$query = "INSERT INTO usuario_2(nombre,apellido,edad,usuario,carrera,estado)
VALUES('$nombre','$apellido','$edad','$usuario','$carrera','$estado')";

//verificacion de correo que no se repita 
$verificacion = mysqli_query($conexion, "SELECT * FROM usuario_2 WHERE usuario = '$usuario'");
if(mysqli_num_rows($verificacion) > 0 ) {  
echo'
<script>alert("Este correo y este usuario esta registrado ya")
window.location ="../admin/index.php"</script>
';
exit();
}



$ejecutar = mysqli_query($conexion,$query);
if($ejecutar){
   echo' <script>alert("Se Registro Correctamente") 
    window.location = "../admin/lista_usuario.php";
   </script>';
  


}else{

    echo' <script>alert("nose Registro Correctamente intentar de nuevo") 
    window.location = "./admin/lista_usuario.php";
   </script>';
  


}
mysqli_close( $conexion );



?>