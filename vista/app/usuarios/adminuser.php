<?php
session_start();
include('../admin/menua.php');
 ?>
  <br>
<section class="container-fluid">
  <div class="row">
<!--Division de los enlaces a volver-->
    <section class="col-1">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <small>
          <a class="nav-link active text-center" href="../admin/admin.php"><span class="oi oi-home"></span> Volver</a>
        </small>
      </div>
    </section>

    <section class="col-11">

      <div class="card border-secondary">
        <h4 class="card-header bg-secondary text-light">Administrar Usuarios</h4>
        <div class="card-body">
          <h4 class="card-title text-center">Registro de Usuarios de ECONOMATO</h4>

          <form method="post">
            <div class="row">
              <div class="col-3">
                <h2 class="display-1 text-center"><span class="oi oi-people"></span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            <div class="row col-9">

            <div class="form-group col-3">
              <label for="exampleFormControlSelect1"><span class="oi oi-badge"></span> Tipo de Usuario</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <?php
                include('../../../control/conex.php');
                error_reporting(0);

                $sql="SELECT IdTipoUsua, NombTiUs FROM TipoUsua";
                $eje=$con->query($sql);
                while ($row=$eje->fetch_row()) {
                  # code...
                  echo'
                  <option value="'.$row[0].'">'.$row[1].'</option>
                  ';
                }
                 ?>
              </select>
            </div>

            <div class="form-group col-3">
              <label for="exampleFormControlSelect1">Tipo de Documento</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <?php
                include('../../../control/conex.php');
                error_reporting(0);

                $sql="SELECT * FROM TipoDocu";
                $eje=$con->query($sql);
                while ($row=$eje->fetch_row()) {
                  # code...
                  echo'
                  <option value="'.$row[0].'">'.$row[1].'</option>
                  ';
                }
                 ?>
              </select>
            </div>


            <div class="form-group col-6">
              <label for="exampleFormControlInput1">Número de Identificación</label>
              <input type="number" step="any" class="form-control" id="" placeholder="Número de identificación de tercero">
            </div>

            <div class="form-group col-6">
              <label for="exampleFormControlInput1">Nombres</label>
              <input type="number" step="any" class="form-control" id="" placeholder="Número de identificación de tercero">
            </div>
            <div class="form-group col-6">
              <label for="exampleFormControlInput1">Apellidos</label>
              <input type="number" step="any" class="form-control" id="" placeholder="Número de identificación de tercero">
            </div>
            <div class="form-group col-12">
              <label for="exampleFormControlInput1">Correo Electrónico</label>
              <input type="email" step="any" class="form-control" id="" placeholder="Número de identificación de tercero">
            </div>
            <div class="form-group col-6">
              <label for="exampleFormControlInput1">Contraseña</label>
              <input type="password" step="any" class="form-control" id="" placeholder="Número de identificación de tercero">
            </div>
            <div class="form-group col-6">
              <label for="exampleFormControlInput1">Confirmar Contraseña</label>
              <input type="passworw" step="any" class="form-control" id="" placeholder="Número de identificación de tercero">
            </div>
            <div class="col-12">
              <a href="#" class="btn btn-secondary">Datos De Contacto del Usuario:</a>
            </div>
            <hr>
            <div class="form-group col-4">
              <label for="exampleFormControlInput1">Género</label>
              <select class="form-control" name="geneusua">
                <option disabled selected>Seleccione una Opción</option>
                <option value="F">Femenino</option>
                <option value="M">Masculino</option>
              </select>
            </div>
            <div class="form-group col-4">
              <label for="exampleFormControlInput1">Número Telefonico</label>
              <input type="number" step="any" class="form-control" id="" placeholder="Número de identificación de tercero">
            </div>
            <div class="form-group col-4">
              <label for="exampleFormControlInput1">Número Celular</label>
              <input type="number" step="any" class="form-control" id="" placeholder="Número de identificación de tercero">
            </div>
            <div class="form-group col-6">
              <label for="exampleFormControlInput1">Dirección</label>
              <input type="number" step="any" class="form-control" id="" placeholder="Número de identificación de tercero">
            </div>
            <div class="form-group col-6">
              <label for="exampleFormControlInput1">Página WEB:</label>
              <input type="number" step="any" class="form-control" id="" placeholder="Número de identificación de tercero">
            </div>
            <hr>
            <!--Botones del crud del usuario:-->
              <div class="col-6">
              </div>
              <div class="col-6">
                <button type="button" class="btn btn-success"><span class="oi oi-spreadsheet"></span> Mostrar Todos</button>
                <button type="button" class="btn btn-outline-secondary"><span class="oi oi-ban"></span> Cancelar</button>
                <button type="button" class="btn btn-primary"><span class="oi oi-check"></span> Guardar</button>
              </div>


          </div>

        </form>

        </div>
      </div>

    </section>
  </div>
</section>
