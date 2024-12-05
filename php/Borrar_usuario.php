<?php
include 'conexion.php';


$id = $_POST['id'];







//verificacion de correo que no se repita 
$verificacion = mysqli_query($conexion, "DELETE FROM usuario_2 where id_nombre='$id'");


if($verificacion > 0 ) {  
    echo'
    <script>alert("Se limino Correctamente el Alumno")
    window.location ="../admin/lista_usuario.php"</script>
    ';
}else{

    echo'
    <script>alert("no se pudo eliminar")
    window.location ="../admin/lista_usuario.php"</script>
    ';
}
    
    
  
    mysqli_close( $conexion );
    











?>