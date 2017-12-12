<?php
include('menui.php');
include('../../../control/conex.php');

?>
<script src="config/funciones.js"></script>
<script src="config/infoprog.js"></script>
<br>
    <form id="pedidoins" method="post">
<section class="container-fluid">
  <div class="row">
    <!--Seccion lateral con la información de los pedidos realizados con anterioridad-->
    <section class="col-2">
      <h4 class="text-dark text-center">Historial de Pedidos</h4>
      <hr class="bg-dark">
        <div class="card border-primary">
          <ul class="list-group list-group-flush">
            <li class="list-group-item border-primary">Cras justo odio</li>
            <li class="list-group-item border-primary">Dapibus ac facilisis in</li>
            <li class="list-group-item border-primary">Vestibulum at eros</li>
          </ul>
        </div>
    </section>
    <!--Seccion de solicitud de productos por programa-->
    <section class="col-10">
      <div class="card">
        <h4 class="card-header bg-secondary text-light">Solicitudes - </h4>
        <div class="card-body">
        <div class="row">

          <div class="col-4 align-self-end">
            <h4>Pedido # <strong class="text-danger">001</strong></h4>
            <label class="sr-only" for="inlineFormInputGroup">Fichas</label>
            <div class="input-group mb-2 mb-sm-0">
              <div class="input-group-addon bg-secondary"><span class="oi oi-magnifying-glass text-light"></span></div>
              <input type="text" class="form-control border-secondary" id="buscar" placeholder="Ej: 1144350 ">
            </div>
          </div>

          <div class="col-8">
              <div class="card">
                <div class="card-body" id='resultado1'>
                  <!-- AQUI APARECE LA INFORMACION DE LA FICHA PARA LA CUAL SE HACE LA SOLICITUD-->
                </div>
              </div>
          </div>
        </div>
            <hr class="bg-success">
            <button id="adicional" name="adicional" type="button" title="Agregar Rubro" class="btn btn-success"><span class="oi oi-plus"></span> Producto</button>

          <div class="col-12">
              <table id="tabla" class="table">
                  <tr class="thead-dark bg-dark text-light">
                    <th class="text-center" scope="col">Grupo de Productos</th>
                    <th class="text-center" scope="col">Materiales Consumibles</th>
                    <th class="text-center" scope="col">Unidad de Medida</th>
                    <th class="text-center" scope="col">Cantidad</th>
                    <th class="text-center" scope="col">Opción</th>
                  </tr>
                <tbody>
                  <tr class="fila-fija">
                    <td><div class="form-control"><input type="text" class="form-control"></div></td>
                    <td><div class="form-control"><input type="text" class="form-control"></div></td>
                    <td><div class="form-control"><input type="text" class="form-control"></div></td>
                    <td><div class="form-control"><input type="text" class="form-control"></div></td>
                    <td class="eliminar"><div class="form-control"><input type="button" class="btn btn-danger" id="eliminar" value="X"></div></td>
                  </tr>
                  <tr>

                  </tr>
                </tbody>
              </table>
                <button type="submit" id="" class="btn btn-primary"><span class="oi oi-plus"></span> Pedido</button>
          </div>


        </div>
      </div>
    </section>
    <!--Final de las seccion de operaciones-->
  </div>
</section>
      </form>
