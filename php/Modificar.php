<?php
include 'conexion.php';

$id_nombre = $_POST['id_nombre'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$usuario = $_POST['usuario'];
$carrera = $_POST['carrera'];
$estado = $_POST['estado'];

$validar = mysqli_query($conexion,"UPDATE usuario_2 SET nombre ='".$nombre."',
 apellido = '".$apellido."',edad = '".$edad."',usuario = '".$usuario."',carrera = '".$carrera."',
 estado = '".$estado."' WHERE id_nombre = '".$id_nombre."'
 ",);


 if($validar > 0 ) {  
   echo'
   <script>alert("Se Se Modifico Correctamente el Alumno")
   window.location ="../admin/lista_usuario.php"</script>
   ';
}else{

   echo'
   <script>alert("Nose pudo Modificar")
   window.location ="../admin/lista_usuario.php"</script>
   ';
}
   






?>