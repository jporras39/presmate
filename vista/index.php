<!--
**
* 
*
**
-->
<?php
#Incluimos la cabeza con la configuración de los estilos:
include('head.php');
session_start();
session_destroy();
?>

<section id="login" class="bg-primary text-light">
<form class=""  method="post">
  <div class="media">
  <img class="align-self-center mr-3" src="publico/media/img/logoSena.png" width="120" alt="Logo del Sena, Centrado">
  <div class="media-body">
    <h2 class="mt-0 text-center">SERVICIO NACIONAL DE APRENDIZAJE</h2>
    <h4 class="text-center mb-0"><strong>Sistema de Solicitud y Entrega de Materiales de Formación</strong></h4>
    </div>
  </div>
  <hr>
  <div class="form-group">
    <label class="text-center" for="exampleInputEmail1">Correo Electronico</label>
    <input type="email" class="form-control" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese Correo Eléctronico">
  </div>
  <div class="form-group">
    <label class="text-center" for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese Contraseña">
  </div>
  <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
    <div class="btn-group" role="group" aria-label="First group">
        <button formaction="" class="btn btn-success text-center">Ingresar</button>
    </div>
    <div class="input-group">
      <a href="#" class="text-dark">Necesito Ayuda para Ingresar</a>
    </div>
  </div>
</form>
</section>

<?php
#Incluimos el pie de página:
include('footer.php');
?>
