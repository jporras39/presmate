<?php include('../admin/menua.php');

?>
<br>
<section class="container-fluid">
  <div class="row">
    <!--<section class="col-1">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">General</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Solicitudes</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Entregas</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Bodegas</a>
    </div>
  </section>-->

    <section class="col-12">
    <div class="tab-content" id="v-pills-tabContent">

      <!--Contenido de General!-->
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

        <div class="card border-secondary">
          <h4 class="card-header bg-secondary text-light">Administración de Productos</h4>
          <div class="card-body">
            <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="">Tipo de Producto</label>
                    <select class="form-control" name="" required>
                      <option disabled selected>Seleccione un Grupo</option>
                      <option value="1">Grupo 1 Carnicos</option>
                      <option value="2">Grupo 2 Abarrotes</option>
                      <option value="3">Grupo 3 Licores</option>
                    </select>
                  </div>
                  <button id="adicional" name="adicional" type="button" title="Agregar Rubro" class="btn btn-success"><span class="oi oi-plus"></span> Producto</button>
                </div>

            <!--Entrada de Busqueda de Regional para editar:-->
                <div class="col-6 align-self-end">
                  <label class="sr-only" for="inlineFormInputGroup">Productos</label>
                  <div class="input-group mb-2 mb-sm-0">
                    <div class="input-group-addon bg-secondary"><span class="oi oi-magnifying-glass text-light"></span></div>
                    <input type="text" class="form-control border-secondary" id="buscaC" placeholder="Nombre de Productos">
                  </div>
                </div>
            <hr class="bg-success">
            <!--Resultados de la consulta a la tabla con las regionales-->
            <section class="col-12">
              <table id="tabla" class="table table-striped">
                  <tr class="thead-dark bg-dark text-light">
                    <th class="text-center" scope="col">Codigo de Producto</th>
                    <th class="text-center" scope="col">Nombre de Producto</th>
                    <th class="text-center" scope="col">Presentación del Producto</th>
                    <th class="text-center" scope="col">Cantidad Adquirida de Producto</th>
                    <th class="text-center" scope="col">Unidad de Medida</th>
                    <th class="text-center" colspan="2" scope="col">Valor Presupuestado del Producto</th>
                  </tr>
                <tbody>
                  <tr class="fila-fija">
                    <td><input type="text" name="" value=""></td>
                    <td><input type="text" name="" value=""></td>
                    <td><input type="text" name="" value=""></td>
                    <td><input type="text" name="" value=""></td>
                    <td><input type="text" name="" value=""></td>
                    <td><input type="text" name="" value=""></td>
                    <td><input type="button" class="btn btn-danger" name="" value="X"></td>
                  </tr>
                </tbody>
            </section>

          </div>
         </div>
        </div>

      </div>

    </div>
    </section>


</div>
</section>
<?php
#Incluimos el pie de página:
include('../../footer.php');
?>
