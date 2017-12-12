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
<script src="config/resultado.js"></script>
<script src="config/competencia.js"></script>
<script src="config/tipotrans.js"></script>

<br>
<section class="container-fluid">
  <div class="row">
    <section class="col-2">
      <h4 class="text-dark text-center">Parámetros y Configuración</h4>
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
                    
                     <a href="#modregional"  data-toggle="modal" data-target="#modregional" class="btn btn-primary">Agregar Regional</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card border-success">
                  <div class="card-body">
                    <h4 class="card-title text-center">Centro de Formación</h4>
                    <hr class="bg-success">
                    <!--Entrada de Busqueda de Centro de Formaciòn para editar:-->
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
                      
                     <a href="#modcentro"  data-toggle="modal" data-target="#modcentro" class="btn btn-primary">Agregar Centro</a>
                   
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
                             <!--Al ingresar datos ejecuta modadlidad.js:-->
                            <input type="text" class="form-control border-secondary" id="buscaM" placeholder="Nombre de la Modalidades">
                          </div>
                        </div>
                    <hr class="bg-success">
                    <section id="tbl_mod">
                    </section>
                     <div>
                      
                    <a href="#modmodal"  data-toggle="modal" data-target="#modmodal" class="btn btn-primary">Agregar Modalidad</a>
                    
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card border-success">
                  <div class="card-body">
                    <h4 class="card-title text-center">Programas de Formación</h4>
                    <hr class="bg-success">
                    <!--Entrada de Busqueda de Programas para editar:-->
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
                     <a href="#modprograma"  data-toggle="modal" data-target="#modprograma" class="btn btn-primary">Agregar Programa</a>
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
                    <h4 class="card-title text-center">Competencias</h4>
                    <hr  class="bg-success">
                    <!--Entrada de Busqueda de Competencias para editar:-->
                        <div class="col-auto">
                          <label class="sr-only" for="inlineFormInputGroup">Competencias</label>
                          <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon bg-secondary"><span class="oi oi-magnifying-glass text-light"></span></div>
                            <input type="text" class="form-control border-secondary" id="buscaCp" placeholder="Nombre de la Competencia">
                          </div>
                        </div>
                    <hr class="bg-success">
                    <section id="tbl_compete">

                    </section>
                     <a href="#modcompete"  data-toggle="modal" data-target="#modcompete" class="btn btn-primary">Agregar Competencia</a>
                   
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
                            <input type="text" class="form-control border-secondary" id="buscaRa" placeholder="Nombre de Resultado de Aprendizaje">
                          </div>
                        </div>
                    <hr class="bg-success">
                    <section id="tbl_resul">

                    </section>
                    <a href="#modresul"  data-toggle="modal" data-target="#modresul" class="btn btn-primary">Agregar Resultado</a>
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
                      <a href="#modtipous"  data-toggle="modal" data-target="#modtipous" class="btn btn-primary">Agregar Tipo de Usuario</a>
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
                       <a href="#modtipodoc"  data-toggle="modal" data-target="#modtipodoc" class="btn btn-primary">Agregar Tipo de Documento</a>
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
                              <input type="text" class="form-control border-secondary" id="buscaTr" placeholder="Tipos de Operaciones">
                            </div>
                          </div>
                      <hr class="bg-success">
                      <section id="tbl_tipotrans">

                      </section>
                       <a href="#modtiptrans"  data-toggle="modal" data-target="#modtiptrans" class="btn btn-primary">Agregar Tipo de Operación</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card border-success">
                    <div class="card-body">
                      <h4 class="card-title text-center">Observador</h4>
                      <hr class="bg-success">
                      <!--Entrada de Busqueda de Estadística para editar:-->
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Estadística</label>
                            <div class="input-group mb-2 mb-sm-0">
                              <div class="input-group-addon bg-secondary"><span class="oi oi-magnifying-glass text-light"></span></div>
                              <input type="text" class="form-control border-secondary" id="buscaE" placeholder="Nombre de Operación">
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
                      <!--Entrada de Busqueda de Tipos de prod para editar:-->
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Tipos de Productos</label>
                            <div class="input-group mb-2 mb-sm-0">
                              <div class="input-group-addon bg-secondary"><span class="oi oi-magnifying-glass text-light"></span></div>
                              <input type="text" class="form-control border-secondary" id="buscaP" placeholder="Tipo de Producto">
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
                      <!--Entrada de Busqueda de Unidad de Medida para editar:-->
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Unidad de Medida</label>
                            <div class="input-group mb-2 mb-sm-0">
                              <div class="input-group-addon bg-secondary"><span class="oi oi-magnifying-glass text-light"></span></div>
                              <input type="text" class="form-control border-secondary" id="buscaUM" placeholder="Unidad de Medida">
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

<!--CREACIÓN DE VENTANAS MODALES-->
<!--Ventana Modal de registro de Regional:-->
<div class="modal fade bd-example-modal-lg" id="modregional" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <section class="container">
        <br>
        <h3 class="text-center text-dark">Registrar Regional</h3>
        <hr>
          <form id="fregional" method="post">
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-3 colFormLabelLg col-form-label text-right">Código de Regional</label>
              <div class="col-sm-8">
                <input type="text" step="any" class="form-control form-control-lg" name="codreg" id="staticEmail" placeholder="Código de Regional">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-3 colFormLabelLg col-form-label text-right">Nombre de Regional</label>
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

<!--Ventana Modal de  Registrar Centro de Formación:-->

<!--Modales de Centros:-->
<div class="modal fade bd-example-modal-lg" id="modcentro" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <section class="container">
        <br>
        <h3 class="text-center text-dark">Registrar Centro de Formación</h3>
        <hr>
          <form id="fcen" method="post">
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-3 colFormLabelLg col-form-label text-right">Regional</label>
              <div class="form-group col-sm-8">
              <select class="form-control" name="codreg">
                  <option>Seleccione la Regional</option>
                  <?php  
                  #Realizamos conexiòn a la base de datos para que nos muestre las regionales 
                  include ('../../../control/conex.php');
                  $sql= "SELECT * FROM Regional";
                  $eje=$con->query($sql);
                  while ($row=$eje->fetch_row()){

                    #Imprimimos las modalidades
                    echo '<option value="'.$row[0].'">'.$row[1].'</option>
                    ';
                  } 

                  ?>
              </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-3 colFormLabelLg col-form-label text-right">Código de Centro</label>
              <div class="col-sm-8">
                <input type="text" step="any" class="form-control form-control-lg" name="codcen" id="staticEmail" placeholder="Código de Centro">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-3 colFormLabelLg col-form-label text-right">Nombre de Centro</label>
              <div class="col-sm-8">
                <input type="text" class="form-control form-control-lg" name="nomcen" id="inputPassword" placeholder="ej: Centro de Servicios y Gestión Empresarial">
              </div>
            </div>
            <br>
              <center><button class="btn btn-primary btn-lg" onclick="addcen()">Agregar</button></center>
              <hr>
          </form>
    </section>
    </div>
  </div>
</div>



<!--Modales de Modalidades:-->

<div class="modal fade bd-example-modal-lg" id="modmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <section class="container">
        <br>
        <h3 class="text-center text-dark">Registrar Modalidad</h3>
        <hr>
           <form id="fmod" method="post">
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-3 colFormLabelLg col-form-label text-right">Código de Modalidad</label>
              <div class="col-sm-8">
                <input type="text" step="any" class="form-control form-control-lg" name="codmod" id="staticEmail" placeholder="Código de Modalidad">
              </div>
            </div>
            <div class="form-group row">
              <label type="text" class="col-sm-3 colFormLabelLg col-form-label text-right">Nombre de Modalidad</label>
              <div class="col-sm-8">
                <input type="text" class="form-control form-control-lg" name="nommod" id="inputPassword" placeholder="Nombre de Modalidad ">
              </div>
            </div>
            <div class="form-group row">
              <label type="text" class="col-sm-3 colFormLabelLg col-form-label text-right">Descripción de Modalidad</label>
              <div class="col-sm-8">
                <input type="text"  class="form-control form-control-lg" name="desmod" id="inputPassword" placeholder="Descripción de Modalidad ">
              </div>
            </div>
          
            <br>
      <!--Al oprimir el botòn agregar ejecuta "addcen" en funciones.js-->
          <center><button class="btn btn-primary btn-lg" onclick="addmod()">Agregar Modalidad</button></center>
              <hr>
          </form>
    </section>

    </div>
  </div>
</div>

<!--Modales de Programa de Formación:-->

<div class="modal fade bd-example-modal-lg"  id="modprograma" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <section class="container">
        <br>
        <h3 class="text-center text-dark">Registrar Programa de Formación</h3>
        <hr>
          <form id="fdetapro" method="post">
            
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-3 colFormLabelLg col-form-label text-right">Código del Programa</label>
              <div class="col-sm-8">
                <input type="text" step="any" class="form-control form-control-lg" name="codpro" id="staticEmail" placeholder="Código del Programa">
              </div>
            </div>
            
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-3 colFormLabelLg col-form-label text-right">Nombre del Programa</label>
              <div class="col-sm-8">
                <input type="text" class="form-control form-control-lg" name="nompro" id="inputPassword" placeholder="ej: Técnico en Programación de Software">
              </div>
            </div>
           
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-3 colFormLabelLg col-form-label text-right">Versión del Programa</label>
              <div class="col-sm-8">
                <input type="text" step="any" class="form-control form-control-lg" name="version" id="staticEmail" placeholder="Versión del Programa">
              </div>
            </div>

            
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-3 colFormLabelLg col-form-label text-right">Descripción Programa</label>
              <div class="col-sm-8">
                <input type="text" class="form-control form-control-lg" name="desc" id="inputPassword" placeholder="Descripción del Programa de formación">
              </div>
            </div>
          </div>
         </div>
            <br>
             <!--Al oprimir el botòn agregar ejecuta "addpro" en funciones.js-->
              <center><button class="btn btn-primary btn-lg" onclick="addpro()">Agregar Programa</button></center>
              <hr>
          </form>
    </section>
    </div>
  </div>
</div>

<!--Modales de Competencias:-->

<div class="modal fade bd-example-modal-lg"  id="modcompete" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <section class="container">
        <br>
        <h3 class="text-center text-dark">Registrar Competencias</h3>
        <hr>

        <form id="fcomp" method="post">
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-3 colFormLabelLg col-form-label text-right">Programa</label>
                            
              <div class="form-group col-sm-8">
                  <select class="form-control" name="nompro">
                  <option>Seleccione el Programa</option>
                    <?php  
                  #Realizamos conexiòn a la base de datos para que nos muestre las modalidades 
                  include ('../../../control/conex.php');
                  $sql= "SELECT * FROM Programa";
                  $eje=$con->query($sql);
                  while ($row=$eje->fetch_row()){

                    #Imprimimos las modalidades
                    echo '<option value="'.$row[0].'">'.$row[1].'</option> ';
                   } 

                  ?>
                  </select>
              </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-3 colFormLabelLg col-form-label text-right">Código de la competencia</label>
                <div class="col-sm-8">
                  <input type="text" step="any" class="form-control form-control-lg" name="codcomp" id="staticEmail" placeholder="Código de la competencia">
                </div>
            </div>
            <div class="form-group row">
                  <label for="inputPassword" class="col-sm-3 colFormLabelLg col-form-label text-right">Nombre de la Competencia</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-lg" name="nomcomp" id="inputPassword" placeholder="Nombre de la Competencia">
                  </div>
            </div>
            <div class="form-group row">
                  <label for="inputPassword" class="col-sm-3 colFormLabelLg col-form-label text-right">Versión de la Competencia</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-lg" name="vercomp" id="inputPassword" placeholder="Versión de la competencia">
                  </div>
            </div>
   
        
            <br>
             <!--Al oprimir el botòn agregar ejecuta "addcomp" en funciones.js-->
              <center><button class="btn btn-primary btn-lg" onclick="addcomp()">Agregar Competencia</button></center>
              <hr>
        </form>
    </section>
    </div>
  </div>
</div>

<!--Modales de Resultados de aprendizaje:-->

<div class="modal fade bd-example-modal-lg"  id="modresul" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <section class="container">
        <br>
        <h3 class="text-center text-dark">Registrar Resultados de Aprendizaje</h3>
        <hr>

        <form id="fresul" method="post">
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-3 colFormLabelLg col-form-label text-right">Competencia</label>
                            
              <div class="form-group col-sm-8">
                  <select class="form-control" name="nomcomp">
                      <option>Seleccione la Competencia</option>
                        <?php  
                      #Realizamos conexiòn a la base de datos para que nos muestre las competencias
                      include ('../../../control/conex.php');
                      $sql= "SELECT * FROM Competencias";

                      $eje=$con->query($sql);
                      while ($row=$eje->fetch_row()){

                        #Imprimimos las modalidades
                        echo '<option value="'.$row[0].'">'.$row[2].'</option>';

                       } 
                                 
                      ?>
                  </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="staticEmail" class="col-sm-3 colFormLabelLg col-form-label text-right">Modalidad</label>
                            
              <div class="form-group col-sm-8">
                  <select class="form-control" name="modali">
                      <option>Seleccione la Modalidad</option>
                        <?php  
                      #Realizamos conexiòn a la base de datos para que nos muestre las competencias
                      include ('../../../control/conex.php');
                      $sql= "SELECT * FROM Modalidad";

                      $eje=$con->query($sql);
                      while ($row=$eje->fetch_row()){

                        #Imprimimos las modalidades
                        echo '<option value="'.$row[0].'">'.$row[1].'</option>';

                       } 
                                 
                      ?>
                  </select>
              </div>
            </div>


          <div class="form-group row">
              <label for="staticEmail" class="col-sm-3 colFormLabelLg col-form-label text-right">Programa de formación</label>
                            
              <div class="form-group col-sm-8">
                  <select class="form-control" name="prog">
                      <option>Seleccione el programa de formación</option>
                        <?php  
                      #Realizamos conexiòn a la base de datos para que nos muestre las competencias
                      include ('../../../control/conex.php');
                      $sql= "SELECT * FROM Programa";

                      $eje=$con->query($sql);
                      while ($row=$eje->fetch_row()){

                        #Imprimimos las modalidades
                        echo '<option value="'.$row[0].'">'.$row[1].'</option>';

                       } 
                                 
                      ?>
                  </select>
              </div>
            </div>



            <div class="form-group row">
                <label for="staticEmail" class="col-sm-3 colFormLabelLg col-form-label text-right">Código del Resultado</label>
                <div class="col-sm-8">
                  <input type="text" step="any" class="form-control form-control-lg" name="codres" id="staticEmail" placeholder="Código del Resultado">
                </div>
            </div>
            <div class="form-group row">
                  <label for="inputPassword" class="col-sm-3 colFormLabelLg col-form-label text-right">Nombre del Resultado </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-lg" name="nomres" id="inputPassword" placeholder="Nombre del Resultado">
                  </div>
            </div>
                   
            <br>
             <!--Al oprimir el botòn agregar ejecuta addresul() en funciones.js-->
              <center><button class="btn btn-primary btn-lg" onclick="addresul()">Agregar Resultado</button></center>
              <hr>
        </form>
    </section>
    </div>
  </div>
</div>


<!--Modales de Tipo de Usuario:-->

<div class="modal fade bd-example-modal-lg" id="modtipous" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <section class="container">
        <br>
        <h3 class="text-center text-dark">Registrar Tipo de Usuario</h3>
        <hr>
           <form id="ftipou" method="post">
            <div class="form-group row">
              <label for="number" class="col-sm-3 colFormLabelLg col-form-label text-right">Código Tipo de Usuario</label>
              <div class="col-sm-8">
                <input type="text" step="any" class="form-control form-control-lg" name="codiTiUs" id="staticEmail" placeholder="Código de Tipo Usuario">
              </div>
            </div>
            <div class="form-group row">
              <label type="text" class="col-sm-3 colFormLabelLg col-form-label text-right">Nombre Tipo de Usuario</label>
              <div class="col-sm-8">
                <input type="text" class="form-control form-control-lg" name="nombTiUs" id="inputPassword" placeholder="Nombre Tipo de Usuario">
              </div>
            </div>
            <div class="form-group row">
              <label type="text" class="col-sm-3 colFormLabelLg col-form-label text-right">Descripción Tipo de Usuario</label>
              <div class="col-sm-8">
                <input type="text"  class="form-control form-control-lg" name="describe" id="inputPassword" placeholder="Descripción Tipo de Usuario">
              </div>
            </div>
          
            <br>
      <!--Al oprimir el botòn agregar ejecuta "addtipous" en funciones.js-->
         <center><button class="btn btn-primary btn-lg" onclick="addtipous()">Agregar Tipo de Usuario</button></center>
              <hr>
          </form>

        </section>

    </div>
  </div>
</div>

<!--Modales de Tipo de Documento:-->

<div class="modal fade bd-example-modal-lg" id="modtipodoc" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <section class="container">
        <br>
        <h3 class="text-center text-dark">Registrar Tipo de Documento</h3>
        <hr>
           <form id="ftipodoc" method="post">
            <div class="form-group row">
              <label for="number" class="col-sm-3 colFormLabelLg col-form-label text-right">Código Tipo Documento</label>
              <div class="col-sm-8">
                <input type="text" step="any" class="form-control form-control-lg" name="codiTiDo" id="staticEmail" placeholder="Código de Tipo de Documento">
              </div>
            </div>
            <div class="form-group row">
              <label type="text" class="col-sm-3 colFormLabelLg col-form-label text-right">Descripción Tipo Documento</label>
              <div class="col-sm-8">
                <input type="text" class="form-control form-control-lg" name="nombTiDo" id="inputPassword" placeholder="Nombre Tipo Documento">
              </div>
            </div>
           
          
            <br>
      <!--Al oprimir el botòn agregar ejecuta "addtipodoc" en funciones.js-->
         <center><button class="btn btn-primary btn-lg" onclick="addtipodoc()">Agregar Tipo de Documento</button></center>
              <hr>
          </form>

        </section>

    </div>
  </div>
</div>


        </section>

    </div>
  </div>
</div>
<!--FINAL DE LAS VENTANAS MODALES-->
<?php
#Incluimos el pie de página:
include('../../footer.php');
?>
