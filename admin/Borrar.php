<?php
require_once 'include/header.php';
?>
 <main class="app-content">
      <div class="app-title">
        <div>
        <h1><i class="bi bi-speedometer"></i> Borrar Estudiante </h1>
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
            <form action="../php/Borrar_usuario.php" method="POST"  class="formulario__register">
                       
                      
                        <h5><input type="text" placeholder="id"name ='id'></h5>
                      
                        <h5><button class="btn btn-success">Borrar Datos</button></h5>
                    </form>
          </div>
          <a class = "btn btn-success"href="./lista_usuario.php">Volver</a>
        </div>
      
      </div> 
    </main>

 
<?php
require_once 'include/footer.php';
?>