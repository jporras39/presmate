<?php
include('menui.php');
?>
<br>
<section class="container-fluid">
  <div class="row">

  <section class="col-1">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <small>
        <a class="nav-link active text-center" href="../admin/admin.php"><span class="oi oi-home"></span> Volver</a>
      </small>
    </div>
  </section>
  <section class="col-11">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="solicitud" aria-selected="true">General</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="solicitud-tab" data-toggle="tab" href="#solicitud" role="tab" aria-controls="solicitud" aria-selected="true">Solicitudes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="entregas-tab" data-toggle="tab" href="#entregas" role="tab" aria-controls="entregas" aria-selected="false">Entregas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="trazase-tab" data-toggle="tab" href="#trazase" role="tab" aria-controls="contact" aria-selected="false">Trazabilidad Entregas/Solicitudes</a>
      </li>
    </ul>

    <div class="tab-content" id="myTabContent">

      <div class="tab-pane fade show active" id="solicitud" role="tabpanel" aria-labelledby="solicitud-tab">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa enim ipsum, reiciendis sint nesciunt sequi delectus quo pariatur, quia neque hic autem debitis. Suscipit eligendi et vitae exercitationem, sunt magnam?
      </div>
      <div class="tab-pane fade" id="solicitud" role="tabpanel" aria-labelledby="solicitud-tab">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum beatae recusandae, repellendus omnis, cupiditate quam mollitia asperiores labore nihil pariatur unde voluptatibus qui facilis aspernatur totam eum soluta aliquam. Natus.
      </div>
      <div class="tab-pane fade" id="entregas" role="tabpanel" aria-labelledby="entregas-tab">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum beatae recusandae, repellendus omnis, cupiditate quam mollitia asperiores labore nihil pariatur unde voluptatibus qui facilis aspernatur totam eum soluta aliquam. Natus.
      </div>
      <div class="tab-pane fade" id="trazase" role="tabpanel" aria-labelledby="trazase-tab">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus id magnam sequi rerum ipsa, dolorem similique commodi autem maiores quo cum provident doloremque placeat, obcaecati reiciendis, eius, illo itaque iste!
      </div>
    </div>


  </div>
 </section>
</section>
