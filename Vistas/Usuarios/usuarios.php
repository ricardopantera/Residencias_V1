<!DOCTYPE html>
<html lang="en">
<?php require_once("./Vistas/Template/header.php");?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php
require_once("./Vistas/Template/nav-bar.php");
require_once("./Vistas/Template/menu_admin.php");
?>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administrador de usuarios</h1>
          </div>

        </div>
      </div>
    </section>

    <section class="content">

      
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Usuarios</h3>
        </div>
        <div class="card-body">
        <div class="row">
        <div class="col-md-12">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Agregar</button>
        </div>
        </div>
        <br>
        
          <div class="row">
            <div class="col-md-12">

                <table class="table table-hover" id="TableUser">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Rol</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                </table>
            </div>

          </div>
        </div>
      </div>

    </section>


    <!-- Button trigger modal -->


<!-- Modal -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="ModalUser">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form enctype="multipart/form-data" name="formlogin" id="FormLoginId" method="post">

        <div class="col">
          <div class="form-group">
          <label for="">Usuario</label>
          <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Nombre del usuario" required>
          </div>
          
        </div>

        <div class="col">
          <div class="form-group">
            <label for="">Contrase??a</label>
            <input type="password" id="password" name="password" class="form-control"  placeholder="Password" required>
          </div>
        </div>


        <div class="col">
          <div class="form-group">
            <label for="">Rol del usuario</label>
            <select class="form-control" name="Rol" id="Rol" required>
              <option value="">Seleccionar una opcion</option>
              <option value="1">ADMIN</option>
              <option value="2">JUEZ</option>
            </select>
          </div>
        </div>


      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success" onclick="GuardarUsuario()">Guardar</button>
      </div>
    </div>
  </div>
</div>






<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="ModalEdit">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form name="formlogin" id="FormLoginId" method="post">

        <div class="col">
          <div class="form-group">
          <label for="">Usuario</label>
          <input type="text" id="usuario_edit" name="usuario" class="form-control" placeholder="Nombre del usuario" required>
          </div>
          
        </div>

        <div class="col">
          <div class="form-group">
            <label for="">Contrase??a</label>
            <input type="password" id="password_edit" name="password" class="form-control"  placeholder="Password" required>
          </div>
        </div>


        <div class="col">
          <div class="form-group">
            <label for="">Rol del usuario</label>
            <select class="form-control" name="Rol_edit" id="Rol_edit" required>
              <option value="">Seleccionar una opcion</option>
              <option value="1">ADMIN</option>
              <option value="2">JUEZ</option>
            </select>
          </div>
        </div>

        <div class="col">
            <input type="hidden" id="id_user" name="id_user" class="form-control">
          </div>


      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning" onclick="ActualizarUser()">Actualizar</button>
      </div>
    </div>
  </div>
</div>




  </div>



  
  <aside class="control-sidebar control-sidebar-dark">

  </aside>

</div>
    
</body>

<script src="../../../Residencias_V1/Assets/js/adminUserFunction/UserFunction.js"></script>
<script>
  const base_url ="<?php BASE_URL; ?>" 
</script>

</html>