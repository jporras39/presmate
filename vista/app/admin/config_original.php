<?php
include('menua.php');
header('Content-Type: text/html; charset=UTF-8');
?>

<script src="config/funciones.js"></script>
<script src="config/centro.js"></script>
<script src="config/region.js"></script>
<script src="config/modalidad.js"></script>
<script src="config/programa.js"></script>
<script src="config/tipousua.js"></script>
<script src="config/tipodocu.js"></script>

<br>
<section class="container-fluid">
  <div class="row">
    <section class="col-2">
      <h4 class="text-dark text-center">Parametros y Configuración</h4>
      <hr class="bg-dark">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-region-tab" data-toggle="pill" href="#v-pills-region" role="tab" aria-controls="v-pills-moda" aria-selected="true">Regional y Centros de Formación</a>
      <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-moda" role="tab" aria-controls="v-pills-moda" aria-selected="true">Modalidad y Programa</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-compete" role="tab" aria-controls="v-pills-compete" aria-selected="false">Competencias y Resultados de Aprendizaje</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-tipous" role="tab" aria-controls="v-pills-tipous" aria-selected="false">Tipos de Usuario y Documento</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-opera" role="tab" aria-controls="v-pills-opera" aria-selected="false">Tipo de Operaciones</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-producto" role="tab" aria-controls="v-pills-producto" aria-selected="false">Tipo de Productos y Unidades de Medida</a>
      <br>
      <small>
        <a class="nav-link text-center" href="../admin/admin.php"><span class="oi oi-home"></span> Volver</a>
      </small>
    </div>
    </section>

    <!--Formaularios de contenidos-->
    <section class="col-10">
    <div class="tab-content" id="v-pills-tabContent">
      <!--Formularios de Regional y Centro de Formación-->
      <div class="tab-pane fade show active" id="v-pills-region" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <!--Panel de sección-->
        <div class="card border-secondary">
          <h4 class="card-header bg-secondary text-light">Regional y Centro de Formación</h4>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="card border-success">
                  <div class="card-body">
                    <h4 class="card-title text-center">Regional</h4>
                    <hr  class="bg-success">
                      <!--Entrada de Busqueda de Regional para editar:-->
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Regional</label>
                            <div class="input-group mb-2 mb-sm-0">
                              <div class="input-group-addon bg-secondary"><span class="oi oi-magnifying-glass text-light"></span></div>
                              <input type="text" class="form-control border-secondary" id="buscaR" placeholder="Nombre de Regional">
                            </div>
                          </div>
                      <hr class="bg-success">
                  <!--Resultados de la consulta a la tabla con las regionales-->
                    <section id="tbl_reg">
                      <!--Impresion de los resultados de las Regionales agregadas en la base de datos-->
                    </section>
                    <a href="#modregional" data-toggle="modal" data-target="#modregional" class="btn btn-primary">Agregar Regional</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card border-success">
                  <div class="card-body">
                    <h4 class="card-title text-center">Centro de Formación</h4>
                    <hr class="bg-success">
                    <!--Entrada de Busqueda de Regional para editar:-->
                        <div class="col-auto">
                          <label class="sr-only" for="inlineFormInputGroup">Centro de Formación</label>
                          <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon bg-secondary"><span class="oi oi-magnifying-glass text-light"></span></div>
                            <input type="text" class="form-control border-secondary" id="buscaC" placeholder="Nombre de Centro de Formación">
                          </div>
                        </div>
                    <hr class="bg-success">
                    <!--Resultados de la consulta a la tabla con las regionales-->
                    <section id="tbl_cen">
                      <!--Impresion de los resultados de los centros de formación-->
                    </section>
                    <a href="#modcentro"  data-toggle="modal" data-target="#modcentro" class="btn btn-primary">Agregar Centro de Formación</a>
                  </div>
                </div>
              </div>
            </div>
          <!--Fin de los formularios-->
         </div>
        </div>
      </div>
        <!--Formularios de Modalidad y Programa-->
      <div class="tab-pane fade show" id="v-pills-moda" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <!--Panel de sección Modalidad y programa-->
        <div class="card border-secondary">
          <h4 class="card-header bg-secondary text-light">Modalidades y Programas</h4>
          <div class="card-body">
            <!--Formularios de Modalidad y Programa-->
            <div class="row">
              <div class="col-sm-6">
                <div class="card border-success">
                  <div class="card-body">
                    <h4 class="card-title text-center">Modalidades</h4>
                    <hr  class="bg-success">
                    <!--Entrada de Busqueda de Modalidades para editar:-->
                        <div class="col-auto">
                          <label class="sr-only" for="inlineFormInputGroup">Modalidad</label>
                          <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon bg-secondary"><span class="oi oi-magnifying-glass text-light"></span></div>
                            <input type="text" class="form-control border-secondary" id="buscaM" placeholder="Modalidades">
                          </div>
                        </div>
                    <hr class="bg-success">
                    <section id="tbl_mod">

                    </section>
                    <a href="#" class="btn btn-primary">Agregar Modalidad</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card border-success">
                  <div class="card-body">
                    <h4 class="card-title text-center">Programas de Formación</h4>
                    <hr class="bg-success">
                    <!--Entrada de Busqueda de Regional para editar:-->
                        <div class="col-auto">
                          <label class="sr-only" for="inlineFormInputGroup">Programas de Formación</label>
                          <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon bg-secondary"><span class="oi oi-magnifying-glass text-light"></span></div>
                            <input type="text" class="form-control border-secondary" id="buscaPf" placeholder="Nombre de Programa de Formación">
                          </div>
                        </div>
                    <hr class="bg-success">
                    <section id="tbl_prog">

                    </section>
                    <a href="#" class="btn btn-primary">Agregar Programa</a>
                  </div>
                </div>
              </div>
            </div>
          <!--Fin de los formularios-->
         </div>
        </div>
      </div>

      <div class="tab-pane fade show" id="v-pills-compete" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <!--Panel de sección Competencias y Resultado de Aprendizaje-->
        <div class="card border-secondary">
          <h4 class="card-header bg-secondary text-light">Competencias y Resultados de Aprendizaje</h4>
          <div class="card-body">
            <!--Formularios de Modalidad y Programa-->
            <div class="row">
              <div class="col-sm-6">
                <div class="card border-success">
                  <div class="card-body">
                    <h4 class="card-title text-center">Competencias </h4>
                    <hr  class="bg-success">
                    <!--Entrada de Busqueda de Regional para editar:-->
                        <div class="col-auto">
                          <label class="sr-only" for="inlineFormInputGroup">Competencias</label>
                          <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon bg-secondary"><span class="oi oi-magnifying-glass text-light"></span></div>
                            <input type="text" class="form-control border-secondary" id="buscaCp" placeholder="Nombre de Competencia">
                          </div>
                        </div>
                    <hr class="bg-success">
                    <section id="tbl_compete">

                    </section>
                    <a href="#" class="btn btn-primary">Agregar Competencia</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card border-success">
                  <div class="card-body">
                    <h4 class="card-title text-center">Resultados de Aprendizaje</h4>
                    <hr class="bg-success">
                    <!--Entrada de Busqueda de Resultados de Aprendizaje para editar:-->
                        <div class="col-auto">
                          <label class="sr-only" for="inlineFormInputGroup">Resultados de Aprendizaje</label>
                          <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon bg-secondary"><span class="oi oi-magnifying-glass text-light"></span></div>
                            <input type="text" class="form-control border-secondary" id="buscaR" placeholder="Nombre de Resultado de Aprendizaje">
                          </div>
                        </div>
                    <hr class="bg-success">
                    <section id="tbl_resultados">

                    </section>
                    <a href="#" class="btn btn-primary">Agregar Resultados</a>
                  </div>
                </div>
              </div>
            </div>
          <!--Fin de los formularios-->
         </div>
        </div>
      </div>

      <!--Contenido de Tipos de usuario y documentos de identidad-->
      <div class="tab-pane fade" id="v-pills-tipous" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        <!--Panel de sección Tipos de usuario y documento-->
          <div class="card border-secondary">
            <h4 class="card-header bg-secondary text-light">Tipos de Usuario y de Documentos de Identidad</h4>
            <div class="card-body">

              <div class="row">
                <div class="col-sm-6">
                  <div class="card border-success">
                    <div class="card-body">
                      <h4 class="card-title text-center">Tipos de Usuario</h4>
                      <hr  class="bg-success">
                      <!--Entrada de Busqueda de Modalidades para editar:-->
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Tipos de Usuario</label>
                            <div class="input-group mb-2 mb-sm-0">
                              <div class="input-group-addon bg-secondary"><span class="oi oi-magnifying-glass text-light"></span></div>
                              <input type="text" class="form-control border-secondary" id="buscaTU" placeholder="Tipos de Usuario">
                            </div>
                          </div>
                      <hr class="bg-success">
                      <section id="tbl_tipousua">

                      </section>
                      <a href="#" class="btn btn-primary">Agregar Tipo de Usuario</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card border-success">
                    <div class="card-body">
                      <h4 class="card-title text-center">Tipos de Documentos de Identidad</h4>
                      <hr class="bg-success">
                      <!--Entrada de Busqueda de Regional para editar:-->
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Tipos de Documentos</label>
                            <div class="input-group mb-2 mb-sm-0">
                              <div class="input-group-addon bg-secondary"><span class="oi oi-magnifying-glass text-light"></span></div>
                              <input type="text" class="form-control border-secondary" id="buscaTD" placeholder="Nombre de Tipo de Documento">
                            </div>
                          </div>
                      <hr class="bg-success">
                      <section id="tbl_tipodocu">

                      </section>
                      <a href="#" class="btn btn-primary">Agregar Tipo de Documento</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!--Contenido de Tipos de Operaciones-->
      <div class="tab-pane fade" id="v-pills-opera" role="tabpanel" aria-labelledby="v-pills-messages-tab">
          <div class="card border-secondary">
            <h4 class="card-header bg-secondary text-light">Tipos de Operaciones</h4>
            <div class="card-body">

              <div class="row">
                <div class="col-sm-8">
                  <div class="card border-success">
                    <div class="card-body">
                      <h4 class="card-title text-center">Tipos de Operaciones</h4>
                      <hr  class="bg-success">
                      <!--Entrada de Busqueda de Modalidades para editar:-->
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Tipos de Operaciones</label>
                            <div class="input-group mb-2 mb-sm-0">
                              <div class="input-group-addon bg-secondary"><span class="oi oi-magnifying-glass text-light"></span></div>
                              <input type="text" class="form-control border-secondary" id="buscaM" placeholder="Tipos de Operaciones">
                            </div>
                          </div>
                      <hr class="bg-success">
                      <section id="tbl_tipopera">

                      </section>
                      <a href="#" class="btn btn-primary">Agregar Tipo de Operación</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card border-success">
                    <div class="card-body">
                      <h4 class="card-title text-center">Observador</h4>
                      <hr class="bg-success">
                      <!--Entrada de Busqueda de Regional para editar:-->
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Estadistica</label>
                            <div class="input-group mb-2 mb-sm-0">
                              <div class="input-group-addon bg-secondary"><span class="oi oi-magnifying-glass text-light"></span></div>
                              <input type="text" class="form-control border-secondary" id="buscaPf" placeholder="Nombre de Operación">
                            </div>
                          </div>
                      <hr class="bg-success">
                      <section id="estadistica">

                      </section>
                      <a href="#" class="btn btn-primary"><span class="oi oi-laptop"></span></a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!--Contenido de Tipos de Producto y unidades de medida-->
      <div class="tab-pane fade" id="v-pills-producto" role="tabpanel" aria-labelledby="v-pills-settings-tab">
          <div class="card border-secondary">
            <h4 class="card-header bg-secondary text-light">Tipos de Productos y Unidades de Medida</h4>
            <div class="card-body">

              <div class="row">
                <div class="col-sm-6">
                  <div class="card border-success">
                    <div class="card-body">
                      <h4 class="card-title text-center">Tipos de Productos</h4>
                      <hr  class="bg-success">
                      <!--Entrada de Busqueda de Modalidades para editar:-->
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Tipos de Productos</label>
                            <div class="input-group mb-2 mb-sm-0">
                              <div class="input-group-addon bg-secondary"><span class="oi oi-magnifying-glass text-light"></span></div>
                              <input type="text" class="form-control border-secondary" id="buscaM" placeholder="Tipo de Producto">
                            </div>
                          </div>
                      <hr class="bg-success">
                      <section id="tbl_tipoprod">

                      </section>
                      <a href="#" class="btn btn-primary">Agregar Tipo de Producto</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card border-success">
                    <div class="card-body">
                      <h4 class="card-title text-center">Unidades de Medida</h4>
                      <hr class="bg-success">
                      <!--Entrada de Busqueda de Regional para editar:-->
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Unidad de Medida</label>
                            <div class="input-group mb-2 mb-sm-0">
                              <div class="input-group-addon bg-secondary"><span class="oi oi-magnifying-glass text-light"></span></div>
                              <input type="text" class="form-control border-secondary" id="buscaPf" placeholder="Unidad de Medida">
                            </div>
                          </div>
                      <hr class="bg-success">
                      <section id="tbl_unimedi">

                      </section>
                      <a href="#" class="btn btn-primary">Agregar Unidad de Medida</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!--Fin del contenido-->

      </section>
  </div>
</section>

<!--Modales de Regional y de Centros-->
<!--Modal de registro de Regional:-->
<div class="modal fade bd-example-modal-lg" id="modregional" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <section class="container">
        <br>
        <h3 class="text-center text-dark">Registrar Regional</h3>
        <hr>
          <form id="fregional" method="post">
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-3 colFormLabelLg col-form-label text-right">Codigo de Regional:</label>
              <div class="col-sm-8">
                <input type="number" step="any" class="form-control form-control-lg" name="codreg" id="staticEmail" placeholder="Codigo de Regional">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-3 colFormLabelLg col-form-label text-right">Nombre de Regional:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control form-control-lg" name="nomreg" id="inputPassword" placeholder="Nombre de Regional ej: Regional Antioquia">
              </div>
            </div>
            <br>
              <center><button class="btn btn-primary btn-lg" onclick="addreg()">Agregar</button></center>
              <hr>
          </form>
    </section>

    </div>
  </div>
</div>

<!--Modal de Actualizar Nombre de Regional:-->

<!--Modales de Centros:-->
<div class="modal fade bd-example-modal-lg" id="modcentro" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <section class="container">
        <br>
        <h3 class="text-center text-dark">Registrar Centro de Formación</h3>
        <hr>
          <form class="" method="post">
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-3 colFormLabelLg col-form-label text-right">Regional:</label>
              <div class="form-group col-sm-8">
              <select class="form-control-lg form-control">
                <option value="0" disabled selected>Seleccione la Regional</option>
              </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-3 colFormLabelLg col-form-label text-right">Codigo de Centro:</label>
              <div class="col-sm-8">
                <input type="number" step="any" class="form-control form-control-lg" name="codreg" id="staticEmail" placeholder="Codigo de Centro">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-3 colFormLabelLg col-form-label text-right">Nombre de Centro:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control form-control-lg" name="nomreg" id="inputPassword" placeholder="ej: Centro de Servicios y Gestión Empresarial">
              </div>
            </div>
            <br>
              <center><button name="button" class="btn btn-primary btn-lg" id="addcen">Agregar</button></center>
              <hr>
          </form>
    </section>
    </div>
  </div>
</div>




<?php
#Incluimos el pie de página:
include('../../footer.php');
?>
