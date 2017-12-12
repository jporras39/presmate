<?php
include('menua.php');
header('Content-Type: text/html; charset=UTF-8');
?>
<script src="config/solicitudes.js"></script>
<br>
<section class="container-fluid">
  <div class="row">
    <section class="col-2">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">General</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Solicitudes</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Entregas</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Bodegas</a>
    </div>
    </section>

    <section class="col-10">
    <div class="tab-content" id="v-pills-tabContent">

      <!--Contenido de General!-->
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div class="card border-secondary">
          <h4 class="card-header bg-secondary text-light">Gestión</h4>
          <div class="card-body">
           <div class="row">
            <!--Categorias de la seccion de usuarios-->
            <div class="col">
              <a href="../general/general.php" class="text-success text-center">
                <h1 class="display-1 text-center"><span class="oi oi-people"></span></h1>
                <p class="text-center">Usuarios</p></a>
            </div>
            <div class="col">
              <a href="../general/general.php" class="text-success text-center">
                <h1 class="display-1 text-center"><span class="oi oi-beaker"></span></h1>
                <p class="text-center">Productos</p></a>
            </div>
            <div class="col">
              <a href="../general/general.php" class="text-success text-center">
                <h1 class="display-1 text-center"><span class="oi oi-file"></span></h1>
                <p class="text-center">Facturas</p></a>
            </div>
            <div class="col">
              <a href="../informes/informes.php" class="text-success text-center">
                <h1 class="display-1 text-center"><span class="oi oi-vertical-align-bottom"></span></span></h1>
                <p class="text-center">Informes</p></a>
            </div>
            <!--Final de fila-->
          </div>
          <!--Inicio de segunda fila-->
          <div class="row">

            <div class="col">
              <a href="../informes/informes.php" class="text-success text-center">
                <h1 class="display-1 text-center"><span class="oi oi-book"></span></h1>
                <p class="text-center">Contratos</p></a>
            </div>
            <div class="col">
              <a href="../informes/informes.php" class="text-success text-center">
                <h1 class="display-1 text-center"><span class="oi oi-layers"></span></h1>
                <p class="text-center">Prestamos</p></a>
            </div>
            <div class="col">
              <a href="../informes/informes.php" class="text-success text-center">
                <h1 class="display-1 text-center"><span class="oi oi-browser"></span></h1>
                <p class="text-center">Fichas</p></a>
            </div>

          </div>
          <!--Final de fila-->
         </div>
        </div>
      </div>

      <!--Contenido de Solicitudes-->
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
          <div class="card border-secondary">
            <h4 class="card-header bg-secondary text-light">Solicitudes</h4>
            <div class="card-body">
              <!--Vista HTML Diseñada por Porras para el manejo de las solicitudes-->
              <!--Entrada de Busqueda de Regional para editar:-->
                        <div class="row">
                          <div class="col-3 align-self-end">
                            <label class="sr-only" for="inlineFormInputGroup">Búsqueda</label>
                            <div class="input-group mb-2 mb-sm-0">
                              <div class="input-group-addon bg-secondary"><span class="oi oi-magnifying-glass text-light"></span></div>
                              <input type="text" class="form-control border-secondary" id="buscar" placeholder="Buscar">
                            </div>
                          </div>

                          <div class="col-9">
                            <div class="card border-success">
                              <div class="card-body">
                                <h4 class="card-title text-center">Información importante</h4>
                                <hr class="bg-success">
                                <section id="tbl_prog">
                                  With supporting text below as a natural lead-in to additional content
                                </section>
                                <!--a href="#" class="btn btn-primary">Agregar Programa</a-->
                              </div>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="tabla_datos" id="resultado">
                          <!--table class="table table-striped">
                            <thead class="bg-dark text-light">
                              <tr>
                                <th scope="col">Solicitud #</th>
                                <th scope="col">Instructor</th>
                                <th scope="col">Estimado</th>
                                <th scope="col" colspan="2" class="text-center">Opciones</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>opc1</td>

                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>opc1</td>

                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>opc1</td>

                              </tr>
                            </tbody>
                          </table-->

                        </div>
                        <hr class="bg-success">

                        <a href="#" class="btn btn-primary">Solicitud a proveedores</a>
            </div>
          </div>
        </div>

        <!--Contenido de Entregas-->
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
          <div class="card border-secondary">
            <h4 class="card-header bg-secondary text-light">Entregas</h4>
            <div class="card-body">
              <h4 class="card-title">Special title treatment</h4>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

        <!--Contenido de Bodegas-->
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
          <div class="card border-secondary">
            <h4 class="card-header bg-secondary text-light">Bodegas</h4>
            <div class="card-body">
              <h4 class="card-title">Special title treatment</h4>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <!--Fin del contenido-->

    </div>
    </section>

  </div>
</section>


<?php
#Incluimos el pie de página:
include('../../footer.php');
?>
