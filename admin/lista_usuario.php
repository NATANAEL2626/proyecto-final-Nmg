<?php
require_once 'include/header.php';
?>

<main class="app-content">
      <div class="app-title">
        <div>
           <h1><i class="bi bi-speedometer"></i>Listado</h1>
           <p>Dios es amor</p>
        </div>
        
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
          
          <form action="Login.php" method="POST" class="formulario__login">
                        
                        <input type="text" placeholder="nombre"name = 'nombre'>
                        <button type="button" class="btn btn-primary">Buscar</button>
                    </form>

            <div class="tile-body"></div>
            <div class="tile-body">
              <div class="table-responsive">
                <table id="TableUsuario"class="table table-striped table-bordered table-condensed"style = "width:100%" >
                  <thead class = "text-center">
                    <tr>
                  
                      <th>ID</th>
                      <th>NOMBRE</th>
                      <th>APELLIDO</th>
                      <th>EDAD</th>
                      <th>USUARIO</th>
                      <th>CARRERA</th>
                      <th>ESTADO</th>
                    </tr>

                  </thead>
                  
                  <tbody>
                    <?php
                    include_once '../php/conexion.php';
                    $consulta = mysqli_query($conexion,"SELECT * FROM 
                     usuario_2");        
                     while ($fila = mysqli_fetch_row($consulta)) {
                      echo"<tr>";
                      echo "<td>".$fila[0]."</td>";
                      echo "<td>".$fila[1]."</td>";
                      echo "<td>".$fila[2]."</td>";
                      echo "<td>".$fila[3]."</td>";
                      echo "<td>".$fila[4]."</td>";
                      echo "<td>".$fila[5]."</td>";
                      echo "<td>".$fila[6]."</td>";
                      
                      
                    
                      echo "</tr>";
                     }
                     mysqli_close($conexion);
                    ?>
                   <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><div class = "text-center">
                      <div class="btn-group">
                    
                      </div>
                    
                    </div>
                    
                    </td>
                   </tr>
              
                  </tbody>
                  
                </table>
                
              </div>
            </div>
            
          </div>
          <a class = "btn btn-success"href="./index.php">Volver</a>
         
        </div>
      </div>
    </main>

<?php
require_once 'include/footer.php';
?>











