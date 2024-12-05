<?php
include 'conexion.php';


$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$rol = $_POST['rol'];
$estado = $_POST['estado'];

//incritado de clave 
$clave = hash('sha512', $clave);


$query = "INSERT INTO usuarios(nombre,usuario,clave,rol,estado)
VALUES('$nombre','$usuario','$clave','$rol','$estado')";

//verificacion de correo que no se repita 
$verificacion = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");
if(mysqli_num_rows($verificacion) > 0 ) {  
echo'
<script>alert("Este correo y este usuario esta registrado ya")
window.location ="./index.php"</script>
';
exit();
}



$ejecutar = mysqli_query($conexion,$query);
if($ejecutar){
   echo' <script>alert("Se Registro Correctamente") 
    window.location = "./index.php";
   </script>';
  


}else{

    echo' <script>alert("nose Registro Correctamente intentar de nuevo") 
    window.location = "./index.php";
   </script>';
  


}
mysqli_close( $conexion );



?>