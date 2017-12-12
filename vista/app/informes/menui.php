<?php include('head.php'); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
 <!--Logo de la Empresa -->
 <a href="inicio.php"><img class="logo" src="../../publico/media/img/logoSena.png" alt="Servicio Nacional de Aprendizaje SENA" width="70"></a>
 <div class="collapse navbar-collapse" id="navbarText">
   <!--Menu Horizontal con opciones ubicadas a la izquierda:-->
   <div class="col">
   </div>
   <ul class="navbar-nav mr-auto">
     <h4 class="text-center text-light"><strong>Sistema para el control de materiales de formación - Informes</strong></h4>
   </ul>
   <div class="col">
   </div>
   <!--Opciones ubicadas al extremo derecho-->
   <span class="navbar-text">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-question-mark"></span>
           Ayuda
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <a class="dropdown-item" href="#"><span class="oi oi-book"></span> Manual del Usuario</a>
           <a class="dropdown-item" href="#"><span class="oi oi-inbox"></span> Contacte a Soporte Técnico</a>
           <a class="dropdown-item" href="#"><span class="oi oi-hard-drive"></span> Copias de Seguridad</a>
         </div>
       </li>

       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-person"></span>
           <?php echo "Usuario Conectado" ?>
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <a class="dropdown-item" href="#"><span class="oi oi-cog"></span> Configuración</a>
           <a class="dropdown-item" href="#"><span class="oi oi-monitor"></span> Cuenta</a>
           <a class="dropdown-item" href="../../control/logout.php"><span class="oi oi-power-standby"></span> Cerrar Sesión</a>
         </div>
       </li>
     </ul>
   </span>
 </div>
</nav>
