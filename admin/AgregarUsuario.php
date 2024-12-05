<?php
require_once 'include/header.php';
?>
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="bi bi-speedometer"></i> Agregar Estudiante </h1>
          <p>Dios es amor</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
          <li class="breadcrumb-item"><a href="#">Sistema Gestion Escolar</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
      
          <div class="tile">
            
            <div class="tile-body"></div>
             
            <!--Register-->
             <form action="../php/Registro.php" method="POST"  class="formulario__register">
                      
                        <h5><input type="text" placeholder="nombre" name ='nombre'></h5>
                        <h5><input type="text" placeholder="apellido"name ='apellido'></h5>
                        <h5><input type="text" placeholder="edad"name ='edad'></h5>
                        <h5><input type="text" placeholder="usuario"name ='usuario'></h5>
                        <h5><input type="text" placeholder="carrera"name ='carrera'></h5>
                        <h5><input type="text" placeholder="estado"name ='estado'></h5>
                        <h5><button class="btn btn-success">Guardar</button></h5>
                      
                    </form>
                    
          </div>
          <a class = "btn btn-success"href="./lista_usuario.php">Volver</a>
        </div>
      </div>
    </main>


<?php
require_once 'include/footer.php';
?>